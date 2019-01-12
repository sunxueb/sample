<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Status;

use Auth;

class StaticPagesController extends Controller
{
    public function home()
    {
        //return '主页';
        $feed_items=[];
        if(Auth::check())
        {
            $feed_items=Auth::user()->feed()->paginate(30);
        }
        //return view('static_pages/home');
        return view('static_pages/home',compact('feed_items'));
    }

    public function help()
    {
        //return '帮助页';
        return view('static_pages/help');

    }

    public function about()
    {
        //return '关于页';
        return view('static_pages/about');
    }

}
