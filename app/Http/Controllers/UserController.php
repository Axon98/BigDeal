<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

	public function index()
	{
		// dd(Auth::user());

		return view('profile.index');
	}

	public function update(Request $request)
	{
		# code...
	}

}