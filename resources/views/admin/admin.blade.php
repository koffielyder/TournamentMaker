@extends('admin.nav')
@section('content')

<div class="everything">
	<div class="container allpanels container-admin">

        <div>

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
            <li role="presentation"><a href="#players" aria-controls="players" role="tab" data-toggle="tab">Players</a></li>
            <li role="presentation"><a href="#teams" aria-controls="teams" role="tab" data-toggle="tab">Teams</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">



              <div role="tabpanel" class="tab-pane active home" id="home">
                <div class="row">
          		    <div class="col-md-12 col-admin">
          				<div class="panel panel-primary">
          					<div class="panel-heading">
          						News
          					</div>
                            <div class="panel-body">
                                Welcome to the admin panel.


                            </div>
                        </div>
                    </div>
                </div>

        		<div class="row">
        			<div class="col-md-7 col-admin">
        				<div class="panel panel-primary">
        					<div class="panel-heading">
        						Latest new 10 players
        					</div>

        					<div class="panel-body">
        						<div class="row">
        							<p>Use your powers for good stuff, not for trolling. Thank you</p>


        							<table class="table table-bordered">
        								<thead>
        									<tr>
        										<th>Name</th>

        										<th>Summname</th>

        										<th>Team</th>

        										<th>Email</th>

        										<th class="adminoptions">Options</th>
        									</tr>
        								</thead>


        								<tbody>
        									<tr>
        										<td>Thom</td>

        										<td>Lantaarnappel</td>

        										<td>TSM</td>

        										<td>Email</td>

        										<td class="adminoptions">
                                                    <a class="btn btn-default adminbutton" href="" type="button">Info (edit)</a>
                                                    <a class="btn btn-default adminbutton" href="" type="button">Ban</a>
                                                    <a class="btn btn-default adminbutton" href="" type="button">Remove</a>
                                                    <a class="btn btn-default adminbutton" href="" type="button">Kick from team</a>
                                                    <a class="btn btn-default adminbutton" href="" type="button">Reset password</a>
        										</td>
        									</tr>
        								</tbody>
        							</table>
        						</div>
        					</div>
        				</div>
        			</div>


        			<div class="col-md-5 col-admin">
        				<div class="panel panel-primary">
        					<div class="panel-heading">
        						Latest new 10 teams
        					</div>


        					<div class="panel-body">
        						<div class="row">
        							<p>Attention! Do not delete teams unless you have a really good reason!</p>


        							<table class="table table-bordered">
        								<thead>
        									<tr>
        										<th>Name</th>

        										<th>Members(Names)</th>

        										<th>Members(sumnames)</th>

        										<th>Captain</th>

        										<th class="adminoptions">Options</th>
        									</tr>
        								</thead>


        								<tbody>
        									<tr>
        										<td>Thom</td>

        										<td>mem1, mem2</td>

        										<td>mem1, mem2</td>

        										<td>Captain</td>

        										<td class="adminoptions">
        											<a class="btn btn-default adminbutton" href="" type="button">Delete</a>
                                                    <a class="btn btn-default adminbutton" href="" type="button">Info</a>
        										</td>
        									</tr>
        								</tbody>
        							</table>
        						</div>
        					</div>
        				</div><!--./panel-->
        			</div><!-- last 10 teams-->
        		</div><!-- /.row -->
            </div><!-- / home tab -->


            <div role="tabpanel" class="tab-pane" id="players">
                <div class="row">
        			<div class="col-md-12 col-admin">
        				<div class="panel panel-primary">
        					<div class="panel-heading">
        						All players.
        					</div>

        					<div class="panel-body">
        						<div class="row">
        							<p>Here you can see all of the players.</p>


        							<table class="table table-bordered">
        								<thead>
        									<tr>
        										<th>Name</th>

        										<th>Summname</th>

        										<th>Team</th>

        										<th>Email</th>

        										<th class="adminoptions">Options</th>
        									</tr>
        								</thead>


        								<tbody>
        									<tr>
        										<td>Thom</td>

        										<td>Lantaarnappel</td>

        										<td>TSM</td>

        										<td>Email</td>

        										<td class="adminoptions">
                                                    <a class="btn btn-default adminbutton" href="" type="button">Info (edit)</a>
                                                    <a class="btn btn-default adminbutton" href="" type="button">Ban</a>
                                                    <a class="btn btn-default adminbutton" href="" type="button">Remove</a>
                                                    <a class="btn btn-default adminbutton" href="" type="button">Kick from team</a>
                                                    <a class="btn btn-default adminbutton" href="" type="button">Reset password</a>
        										</td>
        									</tr>
        								</tbody>
        							</table>
        						</div>
        					</div>
        				</div>
        			</div>
                </div><!-- /.row -->
            </div><!-- / players tab -->

            <div role="tabpanel" class="tab-pane" id="teams">
                teams


            </div>

            <div role="tabpanel" class="tab-pane" id="settings">
                settings


            </div>


        </div><!-- /.tab-content -->

    </div><!-- /.container -->
</div><!-- /.everything -->

@endsection
