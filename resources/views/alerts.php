@if ($count != 0)
	<ul class="dropdown-menu">
		@foreach ($alerts as $alert)
			@if (($alert->alert_id == 1) && ($alert->user_id == Auth::User()->id))
				<?php $teaminfo = teams::findOrFail($alert->team_id); ?>
				<li class="notification">
	                <a href="#" class="innernot">
	                <span class="glyphicon glyphicon-exclamation-sign"></span>
	                 You've been invited to a team "{{ $teaminfo->name }}"
	                </a>
	                <div class="btn-group" role="group" aria-label="invite">
	                  <a type="button" class="btn btn-default" href="{{ url('team/addmember/' . $alert->user_id . '/' . $alert->team_id) }}">Accept</a>
	                  <a type="button" class="btn btn-default" href="#teams">View team</a>
	                  <a type="button" class="btn btn-default" href="{{ url('team/delete-alert/' . $alert->id) }}">Decline</a>
	                </div>
	            </li>
	            <li class="divider"></li>

	        @elseif (($alert->alert_id == 2) && ($alert->team_id == Auth::User()->team_id) && ($captain == true))
				<?php $userinfo = User::findOrFail($alert->user_id); ?>
				<li class="notification">
	                <a href="#" class="innernot">
	                <span class="glyphicon glyphicon-exclamation-sign"></span>
	                	{{ $userinfo->name }} wants to join your team.
	                </a>
	                <div class="btn-group" role="group" aria-label="invite">
	                  <a type="button" class="btn btn-default" href="{{ url('team/addmember/' . $alert->user_id . '/' . $alert->team_id) }}">Accept</a>
	                  <a type="button" class="btn btn-default" href="#users">View user</a>
	                  <a type="button" class="btn btn-default" href="{{ url('team/delete-alert/' . $alert->id) }}">Decline</a>
	                </div>
	            </li>
	            <li class="divider"></li>

			@elseif (($alert->alert_id == 3) && ($alert->user_id == Auth::User()->id))
				<?php $teaminfo = teams::findOrFail($alert->team_id); ?>
				<li class="notification">
	                <a href="#" class="innernot">
	                <span class="glyphicon glyphicon-exclamation-sign"></span>
	                	The team ({{ $teaminfo->name }}) that you where in is deleted by the captain.
	                </a>
	                <div class="btn-group" role="group" aria-label="invite">
	                  <a type="button" class="btn btn-default" href="{{ url('team/delete-alert/' . $alert->id) }}">Ok</a>
	                </div>
	            </li>
	            <li class="divider"></li>

	        @elseif (($alert->alert_id == 4) && ($alert->user_id == Auth::User()->id))
				<?php $teaminfo = teams::findOrFail($alert->team_id); ?>
				<li class="notification">
	                <a href="#" class="innernot">
	                <span class="glyphicon glyphicon-exclamation-sign"></span>
	                	You have been kicked out of the team ({{ $teaminfo->name }}) by the team captain.
	                </a>
	                <div class="btn-group" role="group" aria-label="invite">
	                  <a type="button" class="btn btn-default" href="{{ url('team/delete-alert/' . $alert->id) }}">Ok</a>
	                </div>
	            </li>
	            <li class="divider"></li>

	        @elseif (($alert->alert_id == 5) && ($alert->team_id == Auth::User()->team_id))
				<?php $teaminfo = teams::findOrFail($alert->team_id); ?>
				<li class="notification">
	                <a href="#" class="innernot">
	                <span class="glyphicon glyphicon-exclamation-sign"></span>
	                	The team you are in has changed it's name to "{{ $teaminfo->name }}".
	                </a>
	                <div class="btn-group" role="group" aria-label="invite">
	                  <a type="button" class="btn btn-default" href="{{ url('team/delete-alert/' . $alert->id) }}">Ok</a>
	                </div>
	            </li>
	            <li class="divider"></li>

	        @endif
	    @endforeach
	</ul>
@endif