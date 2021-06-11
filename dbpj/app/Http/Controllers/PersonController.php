<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Person;


class PersonController extends Controller{
public function index(Request $request)
    {
        $user = Auth::user();
        if(!$request->sort) {
            $sort = 'id';
        } else {
            $sort = $request->sort;
        }
        $items = Person::orderBy($sort, 'asc')->paginate(5);
        $param = ['items' => $items, 'sort' => $sort, 'user' =>$user];
        return view('index', $param);
    }
    public function getAuth(Request $request)
    {
        $param=['message'=>'ログインしてください。'];
        return view('person.auth',$param);
    }
    public function postAuth(Request $request)
    {
        $email=$request->email;
        $password=$request->password;
        if(Auth::attempt(['email'=>$email,
        'password'=>$password])){
            $msg='ログインしました。('.Auth::user()->name.')';
        }else{
            $msg='ログインに失敗しました。';
        }
        return view('person.auth',['message'=>$msg]);
        
    }
}