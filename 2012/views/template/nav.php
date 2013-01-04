<nav>
	<ul>
	<?php
		foreach ($nav as $text => $url) {
			if ($url == $uri) {
				echo "<li class=\"selected\"><strong>$text</strong></li>";
			} else {
				echo '<li><a href="'.option('base_uri').$url.'">'.$text.'</a></li>';
			}
		}
	?>
	</ul>
</nav>
