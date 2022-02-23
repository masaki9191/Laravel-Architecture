<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Characteristic;

class CharacteristicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characteristics = Characteristic::latest()->paginate(5);
        return view('characteristics.index', compact('characteristics'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('characteristics.create');
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
            'name' => 'required|unique:characteristics',
            'description' => 'required'
        ]);
        $data = $request->except('_token');
        Characteristic::create($data);
        return redirect()->route('characteristic.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $characteristic = Characteristic::where("id", $id)->first();
        return view('characteristics.edit', compact('characteristic'));

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
        $characteristic = Characteristic::where("id", $id)->first();
        $request->validate([
            'name' => 'required|unique:characteristics,name,'.$id,
            'description' => 'required'
        ]);
        $data = $request->except('_token');
        $characteristic->update($data);
        return redirect()->route('characteristic.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $characteristic = Characteristic::where("id", $id)->first();
        $characteristic->delete();
        return redirect()->route('characteristic.index');
    }
}
