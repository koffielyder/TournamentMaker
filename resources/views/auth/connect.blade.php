<html>

<head>
    <title>School 3v3 Tournament alpha</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

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
                    Connect summoner name
                </div>

                <div class="panel-body">
                    <div class="row">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register/summoner') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                              <label class="control-label col-sm-4" for="pwd">Summoner name</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="name" id="summname" placeholder="Enter summoner name">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-sm-4" for="server">Lane</label>
                              <div class="col-sm-7">
                                  <select name="lane" class="form-control">
                                      <option value="Top">Top</option>
                                      <option value="Jungle">Jungle</option>
                                      <option value="Mid">Mid</option>
                                      <option value="Adc">Adc</option>
                                      <option value="Supp">Supp</option>
                                  </select>
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
                            <div class="form-group">
                              <div class="col-sm-offset-4">
                                <button type="submit" class="btn btn-default">Submit</button><a class="btn btn-default" href="{{ url('/admin') }}">Skip and become admin (password protected!)</a><a class="btn btn-default" href="{{ url('/auth/logout') }}">Log Out</a>
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
