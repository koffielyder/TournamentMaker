<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\teams;
use App\User;
use App\user_alert;
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
        teams::create($input);

        $team_id = teams::where('captain_id', '=', Auth::user()->id)->where('active', '=', 1)->get();
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
    public function edit($team_id)
    {
        $team = teams::findorfail($team_id);
        $input = Request::all();
        $users = User::all();

        if (Auth::User()->id == $team->captain_id) {
            $team->name = $input['name'];
            $team->save();

            $alert['alert_id'] = 5;
            $alert['team_id'] = $team->id;

            foreach ($users as $user) {
                if ($user->team_id == $team->id) {
                    $alert['user_id'] = $user->id;
                    user_alert::create($alert);
                }
            }

            

            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($user_id, $team_id)
    {
        $alerts = user_alert::all();
        foreach ($alerts as $alert) {
            if (($user_id == $alert->user_id) && ($team_id == $alert->team_id)) {
                $user = User::findorfail($user_id);
                $user->team_id = $team_id;
                $user->save();

                $alert->delete();
            }
        }
        return redirect('home');
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
        $users = User::all();
        $team = teams::findorfail(Auth::User()->team_id);

        foreach ($users as $user) {
            if ($user->team_id == $team->id) {
                $user->team_id = 0;
                $user->save();

                $input['user_id'] = $user->id;
                $input['alert_id'] = 3;
                $input['team_id'] = $team->id;

                user_alert::create($input);
            }
        }

        $team->active = false;
        $team->save();

        return redirect('home');
        
    }

    public function invite($user_id)
    {
        $user = User::findorfail($user_id);
        if ($user->team_id == 0) {
            $input['alert_id'] = 1;
            $input['user_id'] = $user_id;
            $input['team_id'] = Auth::User()->team_id;

            user_alert::create($input);
        }

        return redirect('home');
    }

    public function deleteAlert($id)
    {
        $alert = user_alert::findorfail($id);
        $team = teams::findorfail($alert->team_id);
        if (($alert->user_id == Auth::User()->id) || (($alert->team_id == Auth::User()->team_id) && ($team->captain_id == Auth::User()->id))) {
            $alert->delete();
        }

        return redirect('home');
    }

    public function deleteAlertByUserId($user_id)
    {
        $alert = user_alert::where('user_id', '=', $user_id)->where('team_id', '=', Auth::User()->team_id)->first();
        $team = teams::findorfail(Auth::User()->team_id);
        if ($team->captain_id == Auth::User()->id) {
            $alert->delete();
        }

        return redirect('home');
    }

    public function joinTeam($team_id)
    {
        $alert = user_alert::where('user_id', '=', Auth::User()->id)->where('team_id', '=', $team_id)->first();
            if ($alert) {
                echo "bestaat al";
            }
            else    {
                echo "deze is nieuw";
                $input['user_id'] = Auth::User()->id;
                $input['team_id'] = $team_id;
                $input['alert_id'] = 2;
                $input['by_user'] = 1;

                user_alert::create($input);
            }
    }
}
