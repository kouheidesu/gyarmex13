<?php

namespace App\Http\Controllers;



class TestController extends Controller
{
    public function index()
    {
     $data=['cat','dog','pig'];
     return view('test',compact('data'));
    }
}
