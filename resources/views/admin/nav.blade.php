<!DOCTYPE html>
<html lang="en">
<head>
<?php
    use App\teams;
?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!--If you want to change the pagetitle on a specific page, use '$pageTitle = "";' -->
    <title>
    <?php
    if ($pageTitle)
    {echo $pageTitle;}
    else
    {echo"Tournament Hosting Alpha";}
    ?>
    </title>


	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

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
                <a class="navbar-brand" href="#">Tournament Maker™ Alpha</a>
            </div><!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::User()->name }} <span class="caret"></span></a>

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


	@yield('content')


    <!--Make sure the 'push' div is above the footer in the content page-->
    <div class="navbar navbar-bottom"><center>
        <p class="text-muted credit">Made by Nico and Thom. © 2015. Check us on github:</p>
        <iframe src="https://ghbtns.com/github-btn.html?user=koffielyder&repo=tournamentmaker&type=star&count=true&size=large" frameborder="0" scrolling="0" width="160px" height="30px"></iframe></iframe>
    </center></div>


    <!-- Scripts (at the bottom for faster loading) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>


</body>
</html>
