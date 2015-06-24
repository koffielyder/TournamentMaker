<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use App\Summoners;
use App\teams;
use App\User;
use App\user_alert;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
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
        if (Auth::User()->team_id)  {
            $data['team'] = teams::findOrFail(Auth::User()->team_id);
            if ($data['team']->captain_id == Auth::User()->id) {
                $data['captain'] = true;
            }
        }

        $data['users'] = User::all();

        $data['alerts'] = user_alert::all();
        return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
