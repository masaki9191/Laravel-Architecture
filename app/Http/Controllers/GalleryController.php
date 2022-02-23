<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Traits\MediaUploadingTrait;

class GalleryController extends Controller
{
    use MediaUploadingTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = Gallery::latest()->paginate(5);
        // $a = Gallerywhere("id", 2)->first();
        // dd($a->photo);
        return view('gallerys.index', compact('gallerys'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallerys.create');
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
            'name' => 'required',
            'description' => 'required'
        ]);
        $gallery = Gallery::create($request->all());
        foreach ($request->input('photos', []) as $file) {
            $gallery->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('photos');
        }
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::where("id", $id)->first();
        return view('gallerys.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::where("id", $id)->first();
        //dd($gallery->photos);
        return view('gallerys.edit', compact('gallery'));
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
        $gallery = Gallery::where("id", $id)->first();
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $gallery->update($request->all());
        if (count($gallery->photos) > 0) {
            foreach ($gallery->photos as $media) {
                if (!in_array($media->file_name, $request->input('photos', []))) {
                    $media->delete();
                }
            }
        }
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::where("id", $id)->first();
        if (count($gallery->photos) > 0) {
            foreach ($gallery->photos as $media) {
                $media->delete();
            }
        }
        $gallery->delete();
        return redirect()->route('gallery.index');
    }
    public function getList(Request $request){
        $gallerys = Gallery::latest()->limit(10)->get();
        return view('frontend.pages.gallery_list', compact('gallerys'));
    }
    public function detail($id)
    {
        $gallery = Gallery::where("id", $id)->first();
        return view('frontend.pages.gallery_detail', compact('gallery'));
    }
}
