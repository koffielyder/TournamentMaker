<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Auth;
use App\Summoners;
use App\User;


class SummonerController extends Controller
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
        $summonername = str_replace (' ' , '' ,$input['name']);
        $result = file_get_contents('https://euw.api.pvp.net/api/lol/euw/v1.4/summoner/by-name/' . $summonername . '?api_key=6cabd680-61d0-48d5-9ee5-271f19c45624');
        
        $input['summoner_id'] = json_decode($result)->$summonername->id;
        $input['user_id'] = Auth::user()->id;
        Summoners::create($input);
        $summoner_id = Summoners::where('user_id', '=', Auth::user()->id)->get();
        foreach ($summoner_id as $value) {
            $user['summoner_id'] = $value->id;
        }

        $user = User::findorfail(Auth::user()->id);
        $user->summoner_id = $value->id;
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
    public function destroy($id)
    {
        //
    }
}
