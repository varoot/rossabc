<header>
	<div class="banner">
		<a class="home-link" href="{{base_uri}}">
			<div class="logo"><img src="{{base_uri}}images/logo.png" width="247" height="64" alt="Stephen M. Ross School of Business Asia Business Conference"></div>
			<div class="title">
				<div class="date">February 1&ndash;2, 2013</div>
				<h1>Asia: Riding the Wave of Change</h1>
			</div>
		</a>
		<?php
			if ($page !== 'home' and $page !== 'register') {
		?>
		<aside>
			{{#register_online}}
			<a href="{{base_uri}}register"><strong>Register now!</strong></a>
			{{/register_online}}
			{{^register_online}}
			Online registration is now closed.
			{{/register_online}}
		</aside>
		<?php
			}
		?>
	</div>
	{{>template/nav}}
</header>