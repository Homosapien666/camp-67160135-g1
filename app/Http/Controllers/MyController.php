<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{

    private $myvalue;
    protected $myvalue2;
    public $myval = "";

    function __construct() {
    }

    function index() {
        return view('myview.index') ;
    }

    function info() {
        return view('myview.info');
    }

    function calculate(Request $req) {
        echo $req->Input('mynumber');
        $data['num'] = $req->Input('mynumber');
        return view('myview.calculate', $data);
    }
    function submitForm(Request $req)
    {
        $data = [
            'fname'    => $req->fname,
            'lname'    => $req->lname,
            'birthday' => $req->birthday,
            'gender'   => $req->gender,
            'address'  => $req->address,
            'music'    => $req->music,
            'favcolor' => $req->favcolor,
        ];

    return view('myview.html101_view', compact('data'));
}


}