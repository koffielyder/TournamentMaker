<!DOCTYPE html>
<html lang="en">
<head>
<?php
    use App\Summoners;
    use App\teams;
?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Tournament Maker</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}">

	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

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
                "sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class=
                "navbar-brand" href="#">Tournament Maker</a>
            </div><!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#"></a>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-bell"></span></a>

                        <ul class="dropdown-menu">
                            <li class="notification">
                                <a href="#">
                                Melding 1
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li class="notification">
                                <a href="#">
                                Melding 2
                                </a>
                            </li>

                        </ul>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	@yield('content')

	<!-- Scripts -->

    <div id="footer" class="footer">
      <div class="container">
          <center><h4>Made with love by Nico and Thom. <a href="https://github.com/koffielyder/TournamentMaker">See this project on github.</a></h4></center>
      </div>
    </div>

</body>
</html>
