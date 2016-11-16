<?php

namespace App\Http\Controllers;

use App\User;
use App\u_detail;
use Form;
use Html;
use Input;

use Illuminate\Http\Request;

class UserController extends Controller
{
	/*
	*
	*   Changes for Index
	*   Description :   
	*   Last edited by : Firdausneonexxa
	*
	*/
	    
	public function index (Request $request){
	    $parameters = $request->all();
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
	    $profile = User::findOrFail($id);
	    $profile->fill(Input::all());
	    $profile->save();

	    return redirect('');
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
	
	public function show (Request $request){
	    $parameters = $request->all();
	}
	
	/*
	*
	*   Changes for Edit
	*   Description :   
	*   Last edited by : Firdausneonexxa
	*
	*/
	
	public function edit ($id){
		$profile = User::findOrFail($id);

		return view('profile.edit',compact('profile'));
	    //$parameters = $request->all();
	}
		
}
