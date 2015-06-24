<html>

<head>
    <title>School 3v3 Tournament alpha</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="style.css">

    <!-- Support for people with IE -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="everything">
        <div class="container allpanels">
            <div class="panel panel-primary">

                <div class="panel-heading scoreheader">
                    Register <button class="btn btn-default pull-right" type="button">Login</button>
                </div>

                <div class="panel-body">
                    <div class="row">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group">
                            <label class="control-label col-sm-4" for="email">Name:</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="name" placeholder="Enter name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-4" for="email">Email:</label>
                            <div class="col-sm-7">
                              <input type="email" class="form-control" name="email" placeholder="Enter email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-4" for="pwd">Password:</label>
                            <div class="col-sm-7">
                              <input type="password" class="form-control" name="password" placeholder="Enter password">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-4" for="pwd">Confirm Password:</label>
                            <div class="col-sm-7">
                              <input type="password" class="form-control" name="password_confirmation" placeholder="Enter password">
                            </div>
                          </div>
                          <!--
                          <div class="form-group">
                            <label class="control-label col-sm-4" for="pwd">Summoner name</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="summname" placeholder="Enter summoner name">
                            </div>
                          </div>

                          <fieldset disabled>
                              <div class="form-group">
                                <label class="control-label col-sm-4" for="server">Server: (Notice: Only EUW supported at this time)</label>
                                <div class="col-sm-7">
                                    <select id="server" class="form-control">
                                        <option>EUW</option>
                                    </select>
                                </div>
                              </div>
                          </fieldset>
                          -->


                          <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-10">
                              <button type="submit" class="btn btn-default">Continue</button>
                            </div>
                          </div>
                      </form>
                  </div>
              </div>


          </div>
        </div>
    </div>


<!-- Bootstrap JS at bottom so it loads faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
