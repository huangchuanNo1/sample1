<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Status;
use Auth;


class StaticPagesController extends Controller
{
    //跳转主页
    public function home()
    {
        $feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(8);
        }

        return view('static_pages/home', compact('feed_items'));
    }
    //跳转help页面
    public function help()
    {
        return view('static_pages/help');
    }
    //跳转about页面
    public function about()
    {
        return view('static_pages/about');
    }
}
