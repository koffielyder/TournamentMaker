<html>

<?php
$pageTitle = "Register an account | Tournament Hosting Alpha";
include("parts/head.php");
?>

<body>
    <div class="everything">
        <div class="container allpanels">
            <div class="panel panel-primary">

                <div class="panel-heading scoreheader">
                    Register <a class="btn btn-default pull-right" type="button" href="{{ url('/auth/login') }}">Login</a>
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
