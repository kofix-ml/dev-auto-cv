<?php

namespace App\Http\Controllers;

use App\User;
use App\u_detail;
use Illuminate\Http\Request;

class ResumeFetchController extends Controller
{
    public function Userdata(Request $request)
    {
    	$data = u_detail::all();
    	$user = User::all();

		$test1 = json_decode($data);
		$test2 = json_decode($user);

			dd($test1,$test2);
    }

    /*
    *
    *	Changes for below
    *	Description 	:  	Setting case solution for changing date
    *	Last edited by 	: 	Firdausneonexxa
    *
    */
			
    public function convthisdate($date, $convert_type)
    {
    	switch ($convert_type){
    		case 1 :
    		break;
    		case 2 :
    		break;
    		default :
    		break;
    	}
    }
}
