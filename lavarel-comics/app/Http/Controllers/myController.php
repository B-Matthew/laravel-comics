<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
  function home() {
    return view('pages.mainPage');
  }
}
