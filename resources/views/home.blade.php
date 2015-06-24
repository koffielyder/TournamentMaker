<?php 
    use App\Summoners;
    use App\teams; 
?>

@extends('app')

@section('content')
    <div class="everything">
        <div class="container allpanels">

                <div class="panel profiel panel-primary">
                    <!-- Default panel contents -->

                    <div class="panel-heading scoreheader">
                        Profiel <!--<button class="btn btn-default pull-right" type="button">Change</button> -->
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-2"><img alt="Summoner icon" class="img-responsive profilepic thumbnail" src="http://avatar.leagueoflegends.com/euw/{{ $summoner->name }}.png"></div>

                            <div class="col-sm-4">
                                <h1>{{ Auth::user()->name }}</h1>

                                <h2>{{ $summoner->name }}</h2>
                            </div>

                            <div class="col-sm-2 custom">
                            @if (Auth::user()->team_id > 0)
                                <h4>Team:</h4>

                                <h4>Rank:</h4>
                            @endif

                                <h4>Lane:</h4>


                            </div>

                            <div class="col-sm-2 custom">
                            @if (Auth::user()->team_id > 0)
                                <h4></h4>

                                <h4></h4>
                            @endif

                                <h4>{{ $summoner->lane }}</h4>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="panel panel-primary">
                    <!-- Default panel contents -->

                    <div class="panel-heading scoreheader">
                        Team 
                        @if (Auth::user()->team_id > 0)
                            @if ($team->captain_id == Auth::user()->id)
                                <a class="btn btn-default pull-right" type="button" href="{{ url('/team/delete') }}">Delete team</a> 
                                <a class="btn btn-default pull-right" type="button">Edit team</a> 
                            @else
                                <a class="btn btn-default pull-right" type="button" href="team/leave">Leave team</a>
                            @endif

                        @else
                            <a href="{{ url('/team/create') }}" class="btn btn-default pull-right" type="button">Create team</a> 
                        @endif
                            
                    </div>
                    @if (Auth::user()->team_id > 0)
                        <div class="panel-body">
                            <h2>{{ $team->name }}</h2>
                        </div>
                        <!-- Table -->

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Naam</th>

                                    <th>Summoner name</th>

                                    <th>Role</th>
                                    @if ($captain == true)
                                     <th>Captain options</th>
                                    @endif
                                </tr>
                            </thead>

                            <tbody>
                               @foreach ($users as $user)
                                @if ($user->team_id == $team->id)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td><?php $summoners = Summoners::findOrFail($user->summoner_id); echo $summoners->name; ?></td>
                                        <td><?php $summoners = Summoners::findOrFail($user->summoner_id); echo $summoners->lane; ?></td>
                                        @if (($captain == true) && ($user->id != Auth::User()->id))
                                            <td><a class="btn btn-default" type="button" href="{{ url('/team/destroy/' . $user->id) }}">Kick</a></td>
                                        @endif
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    @else 
                        <div class="panel-body">
                            <div class="alert alert-info">
                                <center>Please do not create unneccesary teams</center>
                                <div class="row">

                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/team/create') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <div class="form-group">
                                        <label class="control-label col-sm-4" for="name">Team name</label>
                                        <div class="col-sm-7">
                                          <input type="teamname" class="form-control" name="name" placeholder="Enter team name" required>
                                        </div>
                                      </div>
                                      <fieldset disabled>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="amount">5v5 or 3v3 (3v3 support soon™)</label>
                                            <div class="col-sm-7">
                                                <select id="amount" class="form-control">
                                                    <option>5v5</option>
                                                </select>
                                            </div>
                                          </div>
                                      </fieldset>

                                      <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-10">
                                          <button type="submit" class="btn btn-default">Create</button>
                                        </div>
                                      </div>

                                  </div>


                            </div>
                        </div>
                    @endif

                </div>

                

                <div class="panel panel-primary">
                    <!-- Default panel contents -->

                    <div class="panel-heading">
                        Players
                    </div>

                    <div class="panel-body">
                        <p>These are all the players that are registered</p>
                    </div><!-- Table -->

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Naam</th>

                                <th>Summoner name</th>

                                <th>Team</th>

                                <th>Role</th>

                                <th>Invite to team</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>

                                <td><?php $summoners = Summoners::findOrFail($user->summoner_id); echo $summoners->name; ?></td>

                                <td><?php 
                                        if ($user->team_id > 0) {
                                            $team = Teams::findOrFail($user->team_id);
                                            echo $team->name;
                                        }
                                        else {
                                            echo "No team";
                                        }

                                ?></td>

                                <td><?php $summoners = Summoners::findOrFail($user->summoner_id); echo $summoners->lane; ?></td>

                                <td><button class="btn btn-default" type="button">Invite</button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                

                <div class="panel panel-primary">
                    <!-- Default panel contents -->

                    <div class="panel-heading scoreheader">
                        Scores & Teams <button class="btn btn-default pull-right" type="button">Leave current team</button>
                    </div>

                    <div class="panel-body">
                        <p>Dit zijn alle teams en hun scores</p>
                    </div><!-- Table -->

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Positie</th>

                                <th>Team</th>

                                <th>Aantal leden</th>

                                <th>Leden</th>

                                <th>Captain</th>

                                <th>Join team</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>

                                <td>TSM</td>

                                <td>4</td>

                                <td>{{ $summoner->name }}</td>

                                <td>John</td>

                                <td><button class="btn btn-default" type="button">Join Team</button></td>
                            </tr>

                            <tr>
                                <td>2</td>

                                <td>SK</td>

                                <td>3</td>

                                <td>pietertje,karel,swek</td>

                                <td>swek</td>

                                <td><button class="btn btn-default" type="button">Join Team</button></td>
                            </tr>

                            <tr>
                                <td>3</td>

                                <td>Team</td>

                                <td>2</td>

                                <td>peter,hans</td>

                                <td>hans</td>

                                <td><button class="btn btn-default" type="button">Join Team</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




    <!-- Bootstrap JS at bottom so it loads faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@endsection
