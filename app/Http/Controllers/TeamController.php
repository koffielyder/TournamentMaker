<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\teams;
use App\User;
use Auth;
use Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
        $input = Request::all();

        $input['captain_id'] = Auth::user()->id;
        var_dump($input);
        teams::create($input);
        $team_id = teams::where('captain_id', '=', Auth::user()->id)->get();
        foreach ($team_id as $value) {
            $user['team_id'] = $value->id;
        }

        $user = User::findorfail(Auth::user()->id);
        $user->team_id = $value->id;
        $user->save();

        return redirect('home');
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



    public function destroy($user_id)
    {
        $user = User::findorfail($user_id);
        $user->team_id = 0;
        $user->save();

        return redirect('home');
    }

    public function check()
    {
        $user_id = Auth::User()->id;
        return redirect('team/destroy/' . $user_id);
    }


    public function delete()
    {
        $user = User::findorfail(Auth::User()->id);
        $team = teams::findorfail($user->team_id);

        $team->delete();

        return redirect('team/destroy/' . $user->id);
    }
}
