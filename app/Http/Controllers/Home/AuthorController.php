<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    public function index(){
        return view('');
    }

    public function apply(){
        return view('author.apply');
    }
}
