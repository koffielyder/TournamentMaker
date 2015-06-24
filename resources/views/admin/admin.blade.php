@extends('admin.nav') @section('content')

<div class="everything">
	<div class="container allpanels container-admin">
		<div class="row">
			<div class="col-md-7 col-admin">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Latest new 40 players
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
						Latest new 40 teams
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
				</div>
			</div>
		</div>

	</div>
</div>

@endsection
