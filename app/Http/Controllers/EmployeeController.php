<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreemployeeRequest;
use App\Http\Requests\UpdateemployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addEmployee()
    {
        $employee = [
            ['name' => 'Alice', 'email' => "alice@example.com", 'phone' => '0912345678', 'salary' => '2000$', 'department' => 'căn 5 lầu quận 12'],
            ['name' => 'Saladin', 'email' => "saladin@lmao.com", 'phone' => '0912345678', 'salary' => '3000$', 'department' => 'chung cư hưng ngân'],
            ['name' => 'Ceaser', 'email' => "ceacer@black.com", 'phone' => '0912345678', 'salary' => '1500$', 'department' => 'chung cư block C quận 2'],
            ['name' => 'Erik', 'email' => "erik@toggle.com", 'phone' => '0912345678', 'salary' => '2000$', 'department' => 'QTSC 9 , Quang Trung'],
            ['name' => 'John', 'email' => "john@example.com", 'phone' => '0912345678', 'salary' => '5000$', 'department' => 'FPT software'],
        ];
        employee::insert($employee);

        return "thêm thông tin người lao động thành công";
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
     * @param  \App\Http\Requests\StoreemployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreemployeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateemployeeRequest  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateemployeeRequest $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        //
    }
}
