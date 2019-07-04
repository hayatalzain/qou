<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        return view('_layout');

    }

    public function report2(){

        return view('reports/report2');

    }
    public function report1(){

        return view('reports/report1');

    }
}
