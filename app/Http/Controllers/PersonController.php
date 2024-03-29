<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\person;

class PersonController extends Controller
{
    public function addPerson() {
        return view('person');
    }

    public function storePerson(Request $request) {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);
    
        $person = new Person;
        $person->name = $request->name;
        $person->avatar = $imageName;
        $person->save();
        
        return back()->with('record', 'Bạn đã thêm người thành công');
    }    
}
