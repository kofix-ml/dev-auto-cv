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
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
		// Will return a ModelNotFoundException if no user with that id
		try
		{
		    $profile = u_detail::findOrFail($id);
		}
		// catch(Exception $profile) catch any exception
		catch(ModelNotFoundException $profile)
		{
		    return view('profile.create',compact('id'));
		}

		$userdata = $profile['attributes'];
	    return view('profile.userprofile',compact('profile','id','userdata'));
	}
	
	/*
	*
	*   Changes for Store
	*   Description :   
	*   Last edited by : Firdausneonexxa
	*
	*/
	
	public function store (Request $request){
		$input = $request;
	    u_detail::create($input);

        //dd($request->get('name'));

	    return redirect('/profile');
	}
	
	/*
	*
	*   Changes for Create
	*   Description :   
	*   Last edited by : Firdausneonexxa
	*
	*/
	
	public function create ($id){
		dd("this is create");
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
