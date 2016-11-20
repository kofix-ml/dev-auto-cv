<?php

namespace App\Http\Controllers;

use App\User;
use App\u_detail;
use Form;
use Html;
use Input;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	/*
	*
	*   Changes for Index
	*   Description :   
	*   Last edited by : Firdausneonexxa
	*
	*/
	    
	public function index (){
		$id = Auth::id();
		$profile = u_detail::findOrFail($id);
		$userdata = $profile['attributes'];
		$input1 = array('I',[0x6165300e,0x87a79a55,0xf7c60bd0,0x34febd0b,0x6503cf04,0x854f709e,0xfb0fc034,0x874c9c65,0x2f94cc40,0x15a12deb,0x5c15f4a3,0x490786bb,0x6d658673,0xa4341f7d,0x8fd75920,0xefd18d5a]);
		//$input2 = array('I',
		//	[x^y for x,y in zip($input1,
		//		[0,0,0,0,0,1<<10,0,0,0,0,1<<31,0,0,0,0,0]
		//		)
		//	]);

	    return view('profile.userprofile',compact('profile','userdata','id','input1'));
	}
	
	/*
	*
	*   Changes for Store
	*   Description :   
	*   Last edited by : Firdausneonexxa
	*
	*/
	
	public function store (Request $request){
	    $parameters = $request->all();
	}
	
	/*
	*
	*   Changes for Create
	*   Description :   
	*   Last edited by : Firdausneonexxa
	*
	*/
	
	public function create (Request $request){
	    $parameters = $request->all();
	}
	
	/*
	*
	*   Changes for Update
	*   Description :   
	*   Last edited by : Firdausneonexxa
	*
	*/
	
	public function update ($id){
	    $profile = u_detail::findOrFail($id);
	    $profile->fill(Input::all());
	    $profile->save();

	    return redirect('/profile');
	    //return redirect('/'.$id.'/haha');
	}
	
	/*
	*
	*   Changes for Destroy
	*   Description :   
	*   Last edited by : Firdausneonexxa
	*
	*/
	
	public function destroy (Request $request){
	    $parameters = $request->all();
	}
	
	/*
	*
	*   Changes for Show
	*   Description :   
	*   Last edited by : Firdausneonexxa
	*
	*/
	
	public function show ($id){

		$profile = u_detail::findOrFail($id);
	    return view('profile.userprofile',compact('profile'));
	}
	
	/*
	*
	*   Changes for Edit
	*   Description :   
	*   Last edited by : Firdausneonexxa
	*
	*/
	
	public function edit ($id){
		$profile = u_detail::findOrFail($id);
		$id = Auth::id();

		return view('profile.edit',compact('profile','id'));
	    //$parameters = $request->all();
	}
		
}
