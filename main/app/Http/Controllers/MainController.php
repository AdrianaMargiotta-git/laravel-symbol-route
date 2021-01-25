<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('pages.home-blade');
    }
    public function index2() {
        return view('pages.blog-blade');
    }
    public function index3() {
        return view('pages.about-blade');
    }
}
