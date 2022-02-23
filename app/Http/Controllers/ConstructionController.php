<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Construction;
use App\Models\Characteristic;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Traits\MediaUploadingTrait;

class ConstructionController extends Controller
{
    use MediaUploadingTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $constructions = Construction::latest()->paginate(5);
        // $a = construction::where("id", 2)->first();
        // dd($a->photo);
        return view('constructions.index', compact('constructions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('constructions.create');
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
            'description' => 'required',
            'consultation' => 'required',
            'construction_date' => 'required',
            'designer_name' => 'required',
            'type' => 'required',
            'period' => 'required',
            'cost' => 'required',
            'staff_comment' => 'required',
            'client_comment' => 'required',
            'design_pic' => 'required',
            'designer_pic' => 'required',
            'main_pic' => 'required',
            'other_pic' => 'required',
            'before_pic1' => 'required',
            'before_pic2' => 'required',
            'before_pic3' => 'required'
        ]);
        $design_pic = $request->file('design_pic');
        $designer_pic = $request->file('designer_pic');
        $main_pic = $request->file('main_pic');
        $other_pic = $request->file('other_pic');
        $before_pic1 = $request->file('before_pic1');
        $before_pic2 = $request->file('before_pic2');
        $before_pic3 = $request->file('before_pic3');
        $data = $request->except('_token, designer_pic,design_pic, main_pic, other_pic, before_pic1, before_pic2, before_pic3');

        $construction = Construction::create($data);
        $path = storage_path('tmp/uploads/');
        if($designer_pic != null){
            $designer_pic_data = $this->storeMedia($designer_pic)->getData();
            $construction->addMedia($path . $designer_pic_data->name)->toMediaCollection('designer_pic');
        }
        if($design_pic != null){
            $design_pic_data = $this->storeMedia($design_pic)->getData();
            $construction->addMedia($path . $design_pic_data->name)->toMediaCollection('design_pic');
        }
        if($main_pic != null){
            $main_pic_data = $this->storeMedia($main_pic)->getData();
            $construction->addMedia($path . $main_pic_data->name)->toMediaCollection('main_pic');
        }
        if($other_pic != null){
            $other_pic_data = $this->storeMedia($other_pic)->getData();
            $construction->addMedia($path . $other_pic_data->name)->toMediaCollection('other_pic');
        }
        if($before_pic1 != null){
            $before_pic1_data = $this->storeMedia($before_pic1)->getData();
            $construction->addMedia($path . $before_pic1_data->name)->toMediaCollection('before_pic1');
        }
        if($before_pic2 != null){
            $before_pic2_data = $this->storeMedia($before_pic2)->getData();
            $construction->addMedia($path . $before_pic2_data->name)->toMediaCollection('before_pic2');
        }
        if($before_pic3 != null){
            $before_pic3_data = $this->storeMedia($before_pic3)->getData();
            $construction->addMedia($path . $before_pic3_data->name)->toMediaCollection('before_pic3');
        }

        return redirect()->route('construction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $construction = Construction::where("id", $id)->first();
        return view('constructions.show', compact('construction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $construction = Construction::where("id", $id)->first();
        return view('constructions.edit', compact('construction'));
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
        $construction = Construction::where("id", $id)->first();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'consultation' => 'required',
            'construction_date' => 'required',
            'designer_name' => 'required',
            'type' => 'required',
            'period' => 'required',
            'cost' => 'required',
            'staff_comment' => 'required',
            'client_comment' => 'required',
        ]);
        $designer_pic = $request->file('designer_pic');
        $design_pic = $request->file('design_pic');
        $main_pic = $request->file('main_pic');
        $other_pic = $request->file('other_pic');
        $before_pic1 = $request->file('before_pic1');
        $before_pic2 = $request->file('before_pic2');
        $before_pic3 = $request->file('before_pic3');
        $data = $request->except('_token, designer_pic, design_pic, main_pic, other_pic, before_pic1, before_pic2, before_pic3');

        $path = storage_path('tmp/uploads/');
        if($designer_pic != null){
            if ($construction->pic('designer_pic') != null)
            {
                $media = $construction->getMedia('designer_pic')->first();
                $media->delete();
            }
            $designer_pic_data = $this->storeMedia($designer_pic)->getData();
            $construction->addMedia($path . $designer_pic_data->name)->toMediaCollection('designer_pic');
        }
        if($design_pic != null){
            if ($construction->pic('design_pic') != null)
            {
                $media = $construction->getMedia('design_pic')->first();
                $media->delete();
            }
            $design_pic_data = $this->storeMedia($design_pic)->getData();
            $construction->addMedia($path . $design_pic_data->name)->toMediaCollection('design_pic');
        }
        if($main_pic != null){
            if ($construction->pic('main_pic') != null)
            {
                $media = $construction->getMedia('main_pic')->first();
                $media->delete();
            }
            $main_pic_data = $this->storeMedia($main_pic)->getData();
            $construction->addMedia($path . $main_pic_data->name)->toMediaCollection('main_pic');
        }
        if($other_pic != null){
            if ($construction->pic('other_pic') != null)
            {
                $media = $construction->getMedia('other_pic')->first();
                $media->delete();
            }
            $other_pic_data = $this->storeMedia($other_pic)->getData();
            $construction->addMedia($path . $other_pic_data->name)->toMediaCollection('other_pic');
        }
        if($before_pic1 != null){
            if ($construction->pic('before_pic1') != null)
            {
                $media = $construction->getMedia('before_pic1')->first();
                $media->delete();
            }
            $before_pic1_data = $this->storeMedia($before_pic1)->getData();
            $construction->addMedia($path . $before_pic1_data->name)->toMediaCollection('before_pic1');
        }
        if($before_pic2 != null){
            if ($construction->pic('before_pic2') != null)
            {
                $media = $construction->getMedia('before_pic2')->first();
                $media->delete();
            }
            $before_pic2_data = $this->storeMedia($before_pic2)->getData();
            $construction->addMedia($path . $before_pic2_data->name)->toMediaCollection('before_pic2');
        }
        if($before_pic3 != null){
            if ($construction->pic('before_pic3') != null)
            {
                $media = $construction->getMedia('before_pic3')->first();
                $media->delete();
            }
            $before_pic3_data = $this->storeMedia($before_pic3)->getData();
            $construction->addMedia($path . $before_pic3_data->name)->toMediaCollection('before_pic3');
        }
        $construction->update($data);
        return redirect()->route('construction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $construction = Construction::where("id", $id)->first();
        if ($construction->design_pic != null)
        {
            $media = $construction->getMedia('design_pic')->first();
            $media->delete();
        }
        if ($construction->main_pic != null)
        {
            $media = $construction->getMedia('main_pic')->first();
            $media->delete();
        }
        if ($construction->before_pic1 != null)
        {
            $media = $construction->getMedia('before_pic1')->first();
            $media->delete();
        }
        if ($construction->before_pic2 != null)
        {
            $media = $construction->getMedia('before_pic2')->first();
            $media->delete();
        }
        if ($construction->before_pic3 != null)
        {
            $media = $construction->getMedia('before_pic3')->first();
            $media->delete();
        }
        $construction->delete();
        return redirect()->route('construction.index');
    }

    public function getList(Request $request){
        $constructions = array();
        $data = array();
        if($request->has("year"))
        {
            $constructions = Construction::latest()->whereYear('construction_date', $request->year)->limit(10)->get();
            $data['type'] = "year";
            $data['description'] = Characteristic::where("name",$request->year)->first();
            $data['title'] = $request->year."年";
        }
        if($request->has("category"))
        {
            $constructions = Construction::latest()->where("category", $request->category)->limit(10)->get();
            $data['type'] = "category";
            $data['description'] = config('myconfig.characteristic')[$request->category];
            $data['title'] = config('myconfig.construction_category')[$request->category];
        }
        return view('frontend.pages.construction', compact('constructions','data'));
    }
    public function detail($id)
    {
        $construction = Construction::where("id", $id)->first();
        return view('frontend.pages.construction_detail', compact('construction'));
    }
}
