<?php

namespace App\Http\Controllers;
use App\Posts;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts=Posts::get();
        $user=User::get();
        return view('home',["posts"=>$posts,"user"=>$user]);
    }
}
