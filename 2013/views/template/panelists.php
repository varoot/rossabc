<?php
if ($short_panel) {
	echo '<h3>Speakers</h3><ul class="speakers">';
} else {
	echo '<section class="panelists">';
}

set('profile_role', 'Speaker');
foreach ($speakers as $p) {
	if ($p === FALSE) {
		if ($short_panel) {
			echo '<li><em>TBD</em></li>';
		}
		continue;
	}
	echo partial('profiles/'.$p.'.php');
}

if ( ! empty($moderators))
{
	if ($short_panel) {
		echo '</ul><h3>Moderator</h3><ul class="moderator">';
	}

	set('profile_role', 'Moderator');
	foreach ($moderators as $p) {
		if ($p === FALSE) {
			if ($short_panel) {
				echo '<li><em>TBD</em></li>';
			}
			continue;
		}
		echo partial('profiles/'.$p.'.php');
	}
}

if ($short_panel) {
	echo '</ul>';
} else {
	echo '</section>';
}
