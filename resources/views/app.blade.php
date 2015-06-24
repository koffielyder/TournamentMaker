<!DOCTYPE html>
<html lang="en">
<head>
<?php
    use App\Summoners;
    use App\teams;
    $count = 0;

    foreach ($alerts as $alert) {
        if ($alert->user_id == Auth::User()->id) {
            $count++;
        }
    }
?>
    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Tournament Maker</title>



	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Own css -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">
                <button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class=
                "sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#">Tournament Maker</a>
            </div><!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#"></a>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="padding-top: 8px;">
                            <button class="btn btn-default notifications" type="button">
                              Messages <span class="badge">{{ $count }}</span>
                            </button>
                        </a>
<<<<<<< HEAD
                        @if ($count != 0)
                            <ul class="dropdown-menu">
                                @foreach ($alerts as $alert)
                                    @if ($alert->user_id == Auth::User()->id)
                                        <?php $teaminfo = teams::findOrFail($alert->team_id); ?>
                                        <li class="notification">
                                            <a href="#" class="innernot">
                                            <span class="glyphicon glyphicon-exclamation-sign"></span>
                                             You've been invited to a team "{{ $teaminfo->name }}"
                                            </a>
                                            <div class="btn-group" role="group" aria-label="invite">
                                              <a type="button" class="btn btn-default" href="{{ url('team/addmember/' . $alert->user_id . '/' . $alert->team_id) }}">Accept</a>
                                              <a type="button" class="btn btn-default" href="#teams">View team</a>
                                              <a type="button" class="btn btn-default">Decline</a>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                    @endif
                                @endforeach
                            </ul>
                        @endif
=======

                        <!--Notification menu-->
                        <ul class="dropdown-menu">
                            <li class="notification">

                                <a href="#" class="innernot">
                                <span class="glyphicon glyphicon-exclamation-sign"></span>
                                 You've been invited to team Siren
                                </a>
                                <div class="btn-group" role="group" aria-label="invite">
                                  <button type="button" class="btn btn-default">Accept</button>
                                  <button type="button" class="btn btn-default">View team</button>
                                  <button type="button" class="btn btn-default">Decline</button>
                                </div>
                            </li>

                            <li class="divider"></li>
>>>>>>> origin/master


                    </li>

                    <li><img class="img-responsive summonerpic" src="http://avatar.leagueoflegends.com/euw/{{ $summoner->name }}.png"></li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ $summoner->name }} <span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="index.php">Home</a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="{{ url('/auth/logout') }}">Log Out</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


    <!-- Page content -->
	@yield('content')


	<!-- Footer -->
    <div id="footer" class="footer">
      <div class="container">
        <p class="text-muted credit">Made with love by Nico and Thom. This site is in alpha. Copyright 2015.    <iframe src="https://ghbtns.com/github-btn.html?user=koffielyder&repo=TournamentMaker&type=star&count=true" frameborder="0" scrolling="0" width="160px" height="22px" class="gitwidget"></iframe></p>
      </div>
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>
