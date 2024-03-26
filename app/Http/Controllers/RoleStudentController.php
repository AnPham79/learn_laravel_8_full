<?php

namespace App\Http\Controllers;

use App\Models\roleStudent;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreroleStudentRequest;
use App\Http\Requests\UpdateroleStudentRequest;

class RoleStudentController extends Controller
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
     * @param  \App\Http\Requests\StoreroleStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreroleStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\roleStudent  $roleStudent
     * @return \Illuminate\Http\Response
     */
    public function show(roleStudent $roleStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\roleStudent  $roleStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(roleStudent $roleStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateroleStudentRequest  $request
     * @param  \App\Models\roleStudent  $roleStudent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateroleStudentRequest $request, roleStudent $roleStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\roleStudent  $roleStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(roleStudent $roleStudent)
    {
        //
    }
}
