<html>

<?php
$pageTitle = "Login | Tournament Hosting Alpha";
include("parts/head.php");
?>

<body>
    <div class="everything">
        <div class="container allpanels">
            <div class="panel panel-primary">

                <div class="panel-heading scoreheader">
                    Login <a class="btn btn-default pull-right" type="button" href="{{ url('/auth/register') }}">Register</a>
                </div>

                <div class="panel-body">
                    <div class="row">
                    @if (count($errors) > 0)
                      <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                            <div class="col-sm-offset-4 col-sm-10">
                              <label>
                                <input type="checkbox" name="remember"> Remember Me
                              </label>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-10">
                              <button type="submit" class="btn btn-default">Login</button><a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
                            </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>

     <?php include("parts/js.php"); ?>
</body>
