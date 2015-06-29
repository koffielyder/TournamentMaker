<?php
use App\User;
use App\teams;
use App\deleted_teams;
if ($count != 0): ?>
	<ul class="dropdown-menu">
		<?php foreach ($alerts as $alert): ?>
			<?php if (($alert->alert_id == 1) && ($alert->user_id == Auth::User()->id)): ?>
				<?php $teaminfo = teams::findOrFail($alert->team_id); ?>
				<li class="notification">
	                <a href="#" class="innernot">
	                <span class="glyphicon glyphicon-exclamation-sign"></span>
	                	You've been invited to a team "<?php echo $teaminfo->name ?>"
	                </a>
	                <div class="btn-group" role="group" aria-label="invite">
	                  <a type="button" class="btn btn-default" href="<?php echo url('team/addmember/' . $alert->user_id . '/' . $alert->team_id) ?>">Accept</a>
	                  <a type="button" class="btn btn-default" href="#teams">View team</a>
	                  <a type="button" class="btn btn-default" href="<?php echo url('team/delete-alert/' . $alert->id) ?>">Decline</a>
	                </div>
	            </li>
	            <li class="divider"></li>

	        <?php elseif (($alert->alert_id == 2) && ($alert->team_id == Auth::User()->team_id) && ($captain == true)): ?>
				<?php $userinfo = User::findOrFail($alert->user_id); ?>
				<li class="notification">
	                <a href="#" class="innernot">
	                <span class="glyphicon glyphicon-exclamation-sign"></span>
	                	<?php echo $userinfo->name ?> wants to join your team.
	                </a>
	                <div class="btn-group" role="group" aria-label="invite">
	                  <a type="button" class="btn btn-default" href="<?php echo url('team/addmember/' . $alert->user_id . '/' . $alert->team_id) ?>">Accept</a>
	                  <a type="button" class="btn btn-default" href="#users">View user</a>
	                  <a type="button" class="btn btn-default" href="<?php echo url('team/delete-alert/' . $alert->id) ?>">Decline</a>
	                </div>
	            </li>
	            <li class="divider"></li>

			<?php elseif (($alert->alert_id == 3) && ($alert->user_id == Auth::User()->id)): ?>
				<?php $teaminfo = deleted_teams::findOrFail($alert->team_id); ?>
				<li class="notification">
	                <a href="#" class="innernot">
	                <span class="glyphicon glyphicon-exclamation-sign"></span>
	                	The team (<?php echo $teaminfo->name ?>) that you where in is deleted by the captain.
	                </a>
	                <div class="btn-group" role="group" aria-label="invite">
	                  <a type="button" class="btn btn-default" href="<?php echo url('team/delete-alert/' . $alert->id) ?>">Ok</a>
	                </div>
	            </li>
	            <li class="divider"></li>

	        <?php elseif (($alert->alert_id == 4) && ($alert->user_id == Auth::User()->id)): ?>
				<?php $teaminfo = teams::findOrFail($alert->team_id); ?>
				<li class="notification">
	                <a href="#" class="innernot">
	                <span class="glyphicon glyphicon-exclamation-sign"></span>
	                	You have been kicked out of the team (<?php echo $teaminfo->name ?>) by the team captain.
	                </a>
	                <div class="btn-group" role="group" aria-label="invite">
	                  <a type="button" class="btn btn-default" href="<?php echo url('team/delete-alert/' . $alert->id) ?>">Ok</a>
	                </div>
	            </li>
	            <li class="divider"></li>

	        <?php elseif (($alert->alert_id == 5) && ($alert->user_id == Auth::User()->id)): ?>
				<?php $teaminfo = teams::findOrFail($alert->team_id); ?>
				<li class="notification">
	                <a href="#" class="innernot">
	                <span class="glyphicon glyphicon-exclamation-sign"></span>
	                	The team you are in has changed it's name to "<?php echo $teaminfo->name ?>".
	                </a>
	                <div class="btn-group" role="group" aria-label="invite">
	                  <a type="button" class="btn btn-default" href="<?php echo url('team/delete-alert/' . $alert->id) ?>">Ok</a>
	                </div>
	            </li>
	            <li class="divider"></li>

	        <?php endif;
	    endforeach;?>
	</ul>
<?php endif; ?>