<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Form;
use Html;

use App\User;
use App\u_detail;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /*
    *
    *    Changes for below
    *    Description : Test
    *    Last edited by : Firdausneonexxa
    *
    */
    
    public function test()
    {
        $user = User::all();
        //$test = Form::component('bsText', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
        return view('profile.formdata',compact("user"));
    }
}
