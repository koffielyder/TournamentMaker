<?php

foreach ($alerts as $alert) 	{
	if (($alert->alert_id == 1) && ($alert->user_id == Auth::User()->id)) 	{

		$count++;

	}

    elseif (($alert->alert_id == 2) && ($alert->team_id == Auth::User()->team_id) && ($captain == true)) 	{

		$count++;

	}

	elseif (($alert->alert_id == 3) && ($alert->user_id == Auth::User()->id)) 	{

		$count++;

	}

    elseif (($alert->alert_id == 4) && ($alert->user_id == Auth::User()->id)) 	{

		$count++;

	}

    elseif (($alert->alert_id == 5) && ($alert->team_id == Auth::User()->team_id)) 	{

		$count++;

	}
}

?>