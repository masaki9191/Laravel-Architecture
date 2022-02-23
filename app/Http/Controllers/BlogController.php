<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(5);
        return view('blogs.index', compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $data = $request->except('_token');
        $file = $request->file('file');
        if($file != null){
            $picture = uniqid().".".$file->extension();
            $request->file->storeAs('public/blogs', $picture);
            $data['picture'] = $picture;
        }
        $data = Arr::except($data, array('file'));
        Blog::create($data);
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = blog::where("id", $id)->first();
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = blog::where("id", $id)->first();
        return view('blogs.edit', compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = blog::where("id", $id)->first();
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $data = $request->except('_token');
        $file = $request->file('file');



        if($file != null){
            if($blog->picture != "")
            {
                $file_path = 'public/blogs/'.$blog->picture;
                if (Storage::disk('local')->exists($file_path)) {
                    Storage::disk('local')->delete($file_path);
                }
            }
            $picture = uniqid().".".$file->extension();
            $request->file->storeAs('public/blogs', $picture);
            $data['picture'] = $picture;
        }
        $data = Arr::except($data, array('file'));
        $blog->update($data);
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = blog::where("id", $id)->first();
        if($blog->picture != "")
        {
            $file_path = 'public/blogs/'.$blog->picture;
            if (Storage::disk('local')->exists($file_path)) {
                Storage::disk('local')->delete($file_path);
            }
        }
        $blog->delete();
        return redirect()->route('blog.index');
    }
    public function getList(Request $request){
        $data = array();

        if(!$request->has('type') && !Session::has('blog.type')){
            $data['type'] = 0;
        }
        else if(!$request->has('type') && Session::has('blog.type')){
            $data['type'] = session('blog.type');
        }
        else if($request->has('type')){
            $data['type'] = $request->type;
        }

        if(!$request->has('count') && !Session::has('blog.count')){
            $data['count'] = 5;
        }
        else if(!$request->has('count') && Session::has('blog.count')){
            $data['count'] = session('blog.count');
        }
        else if($request->has('count')){
            $data['count'] = $request->count;
        }

        if(!$request->has('year') && !Session::has('blog.year')){
            $data['year'] = date("Y");
        }
        else if(!$request->has('year') && Session::has('blog.year')){
            $data['year'] = session('blog.year');
        }
        else if($request->has('year')){
            $data['year'] = $request->year;
        }
        session(['blog'=>$data]);

        $blogs = Blog::latest()->whereYear('created_at', session('blog.year'))->where("type",session('blog.type'))->get();
        return view('frontend.pages.noticelist', compact('blogs'))
        ->with('i', (request()->input('page', 1) - 1) * session('blog.count'));
    }
    public function detail($id)
    {
        $blog = Blog::where("id", $id)->first();
        return view('frontend.pages.notice_detail', compact('blog'));
    }
}
