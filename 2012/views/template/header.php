<header>
	<div class="banner">
		<a class="home-link" href="{{base_uri}}">
			<div class="logo"><img src="{{base_uri}}images/logo.png" width="247" height="64" alt="Stephen M. Ross School of Business Asia Business Conference"></div>
			<div class="title">
				<div class="date">February 10&ndash;11, 2012</div>
				<h1>Capitalizing on Asia&#8217;s Exponential Growth</h1>
			</div>
		</a>
		<?php
			if ($page !== 'home' and $page !== 'register') {
		/*
		<aside>
			{{#register_online}}
			<a href="{{base_uri}}register"><strong>Register now!</strong></a>
			{{/register_online}}
			{{^register_online}}
			Online registration is now closed.
			{{/register_online}}
		</aside>
		*/
			}
		?>
	</div>
	{{>template/nav}}
</header>