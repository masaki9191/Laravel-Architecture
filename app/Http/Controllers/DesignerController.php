<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designer;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Traits\MediaUploadingTrait;

class DesignerController extends Controller
{
    use MediaUploadingTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designers = Designer::latest()->paginate(5);
        // $a = Designer::where("id", 2)->first();
        // dd($a->photo);
        return view('designers.index', compact('designers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('designers.create');
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
            'period' => 'required',
            'price' => 'required'
        ]);
        $file = $request->file('file');
        $data = $request->except('_token, file');
        $designer = Designer::create($data);
        if($file != null){

            $photo = $this->storeMedia($file)->getData();
            $path = storage_path('tmp/uploads/');
            $designer->addMedia($path . $photo->name)->toMediaCollection('photo');
        }
        //$photo = $this->storeMedia($request)->getData();

        return redirect()->route('designer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $designer = designer::where("id", $id)->first();
        return view('designers.show', compact('designer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $designer = designer::where("id", $id)->first();
        return view('designers.edit', compact('designer'));
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
        $designer = designer::where("id", $id)->first();
        $request->validate([
            'name' => 'required',
            'period' => 'required',
            'price' => 'required'
        ]);
        $file = $request->file('file');
        $data = $request->except('_token, file');
        if($file != null){
            if ($designer->photo != "")
            {
                $media = $designer->getMedia('photo')->first();
                $media->delete();
            }
            $photo = $this->storeMedia($file)->getData();
            $path = storage_path('tmp/uploads/');
            $designer->addMedia($path . $photo->name)->toMediaCollection('photo');
        }
        $designer->update($data);
        return redirect()->route('designer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $designer = designer::where("id", $id)->first();
        if ($designer->photo != "")
        {
            $media = $designer->getMedia('photo')->first();
            $media->delete();
        }
        $designer->delete();
        return redirect()->route('designer.index');
    }
}
