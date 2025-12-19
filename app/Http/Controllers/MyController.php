<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $myvalue;
    protected $myvale2;
    public $myval = "";

    function __construct(){
    }

    function index(){
        return view ('myview.index');
    }

    function info(){
        return view('myview.info');

    }
}
