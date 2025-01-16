<?php

namespace App\Http\Controllers;

use App\Models\BogAdd;
use Illuminate\Http\Request;

class BlogEditController extends Controller
{
    public function editBlog($id){
        $blog = BogAdd::find($id);

        return view('admin.blogEdit',compact('blog'));
    }
}
