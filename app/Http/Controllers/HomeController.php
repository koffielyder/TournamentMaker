<?php namespace App\Http\Controllers;

use Request;
use Auth;
use App\Summoners;
use App\teams;
use App\User;



class HomeController extends Controller {



	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

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
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Auth::user()->summoner_id == 0) {
			return view('auth.connect');
		}

		$data['captain'] = false;

		$data['summoner'] = Summoners::findOrFail(Auth::User()->summoner_id);
		if (Auth::User()->team_id) 	{
			$data['team'] = teams::findOrFail(Auth::User()->team_id);
			if ($data['team']->captain_id == Auth::User()->id) {
				$data['captain'] = true;
			}
		}

		$data['users'] = User::all();

		
		return view('home', $data);
	}

	public function store($group_id)
	{

	}

	public function update($group_id)
	{

	}

	public function destroy($group_id)
	{

	}

}
