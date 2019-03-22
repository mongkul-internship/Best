<?php

namespace App\Http\Controllers;


use App\Student;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('index');
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'age'=>'required'
        ]);
        $newStudent = Student::create($request->all());
        $newStudent->save();

        return view('index');
    }
}
