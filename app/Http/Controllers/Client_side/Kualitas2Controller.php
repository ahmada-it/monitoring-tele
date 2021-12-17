<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use App\Models\Node2;
use Illuminate\Http\Request;

class Kualitas2Controller extends Controller
{
    public function index()
    {
        $node2 = Node2::orderBy('id','desc')->limit(1)->get();
        return view("client_pages.Templating.kualitas2", compact('node2'));
    }
}
