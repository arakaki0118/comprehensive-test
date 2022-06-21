<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support;

class IndexController extends Controller
{
    //
    public function index()
    {
        $supports = Support::latest()->get();

        return view('index', ['supports' => $supports]);
    }
}
