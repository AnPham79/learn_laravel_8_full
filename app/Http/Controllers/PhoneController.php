<?php

namespace App\Http\Controllers;

use App\Models\phone;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorephoneRequest;
use App\Http\Requests\UpdatephoneRequest;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorephoneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorephoneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show(phone $phone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(phone $phone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatephoneRequest  $request
     * @param  \App\Models\phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatephoneRequest $request, phone $phone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy(phone $phone)
    {
        //
    }
}
