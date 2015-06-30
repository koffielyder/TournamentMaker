<head>
<style>
html,
body {
  height: 100%;
  background-color: #E6E6E6;
}
</style>
</head>
<!-- The above is temporary, we should fix this instead of being lazy -->

<div class="everything">
	<div class="container allpanels row">
		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
				<div class="panel-heading">Register summoner</div>

				<div class="panel-body">

				<form class="form-horizontal" role="form" method="POST" action="{{ url('/register/summoner') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-2 control-label">Summoner Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="">
							</div>
							<label class="col-md-2 control-label">Lane</label>
							<div class="col-md-6">
								<select name="lane">
									<option value="Top">Top</option>
									<option value="Jungle">Jungle</option>
									<option value="Mid">Mid</option>
									<option value="Adc">Adc</option>
									<option value="Supp">Supp</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-2 col-md-offset-2">
								<button type="submit" class="btn btn-primary">
									Register summoner
								</button>
							</div>
						</div>
					</form>

				</div>

			</div>
		</div>
	</div>
</div>
