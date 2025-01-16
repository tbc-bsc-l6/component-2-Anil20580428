<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddBlogController extends Controller
{
    public function index(){

        return view('admin.addBlog');
    }
}
