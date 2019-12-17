<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index()
    {
        $tags=Tags::all();

        return view('news.tags',['tags'=>$tags]);
    }
    public function show($id)
    {
        $items=Tags::where('path',$id)->get();
        return view('news.tags',['tags'=>$items]);
    }
    //
}
