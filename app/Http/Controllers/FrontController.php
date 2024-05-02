<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FrontController extends Controller
{

    public function index()
    {
        return view('front.index');
    }

    public function login()
    {
        return view('front.login');
    }

    public function signup()
    {
        return view('front.signup');
    }

    public function home()
    {
        return view('front.home');
    }

    public function create()
    {
        return view('front.create');
    }

    public function ingredients(Request $request, $id)
    {
        return view('front.ingredients', compact('id'));
    }
}
