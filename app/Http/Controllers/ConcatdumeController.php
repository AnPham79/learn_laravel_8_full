<?php

namespace App\Http\Controllers;

use App\Models\concatdume;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreconcatdumeRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateconcatdumeRequest;

class ConcatdumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addPerson() {
        return view('person');
    }

    public function storePerson(Request $request) {
        $name = $request->name;
        $image = $request->file('avatar');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);
    
        $person = new concatdume();
        $person->name = $name;
        $person->avatar = $imageName;
        $person->save();
        
        return back()->with('record', 'Bạn đã thêm người thành công');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreconcatdumeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreconcatdumeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\concatdume  $concatdume
     * @return \Illuminate\Http\Response
     */
    public function show(concatdume $concatdume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\concatdume  $concatdume
     * @return \Illuminate\Http\Response
     */
    public function edit(concatdume $concatdume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateconcatdumeRequest  $request
     * @param  \App\Models\concatdume  $concatdume
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateconcatdumeRequest $request, concatdume $concatdume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\concatdume  $concatdume
     * @return \Illuminate\Http\Response
     */
    public function destroy(concatdume $concatdume)
    {
        //
    }
}
