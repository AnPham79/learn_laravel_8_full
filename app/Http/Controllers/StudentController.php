<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //lấy tất cả
        $data = student::all();
        // lấy student tại id bằng 3
        // $data = student::where('id', 3)->get();
        // lấy tất cả student từ với mã từ 3 tới 8
        // $data = student::whereBetween('id', [3, 8])->get();
        // lấy tất cả sinh viên có mả từ 3 tơi 8 rồi sếp theo thứ tự giảm dần
        // $data = student::whereBetween('id', [3, 8])->orderBy('id', "DESC")->get();
        return view('student.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorestudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new student;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->score = $request->score;
        $data->save();

        return redirect()->route('student.index')->with('success', 'Thêm sinh viên thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student, $id)
    {
        // $data = student::find($id);
        $data = student::where('id', $id)->first();

        return view('student.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestudentRequest  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Student::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->score = $request->score;
        $data->save();
        return redirect()->route('student.index')->with('success', 'Cập nhật sinh viên thành công');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student, $id)
    {
        student::where('id', $id)->delete();
        return redirect()->route('student.index')->with('success', 'Thêm sinh viên thành công');
    }
}
