<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>PHP Warwickshire</title>
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<? /*<link rel="shortcut icon" href="flat-ui/images/favicon.ico">*/ ?>
		<link rel="stylesheet" href="flat-ui/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="flat-ui/css/flat-ui.css">
		<link rel="stylesheet" href="common-files/css/icon-font.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<div class="page-wrapper">

			<header class="header-10">
				<div class="container">
					<div class="navbar col-sm-12" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle"></button>
							<a class="brand" href="/">
								<img src="img/main-logo.png" style="width: 119px; height: 23px;" />
							</a>
						</div>
						<div class="collapse navbar-collapse pull-right">
							<ul class="nav pull-left">
								<li><a href="https://twitter.com/phpwarks"><i class="fui-twitter"></i></a></li>
							</a>
							</ul>
						</div>
					</div>
				</div>
			</header>

			<section class="header-10-sub v-center bg-midnight-blue">
				<div class="background">&nbsp;</div>
				<div>
					<div class="container">
						<div class="hero-unit">
							<h1>Welcome.</h1>
							<p>
								We are a PHP User Group based in <a href="https://www.google.co.uk/maps/place/Warwickshire/@52.3213186,-1.5670735,9z/data=!3m1!4b1!4m2!3m1!1s0x4870942d1b417173:0xa20514a692b7a22">Warwickshire</a>
							</p>
						</div>
					</div>
				</div>
				<a class="control-btn fui-arrow-down" href="#"> </a>
			</section>

			<?php /*
			<section class="content-8 v-center">
				<div>
					<div class="container">
						<h3>Our Launch Meetup</h3>
						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								<p>
									We have confirmed <a href="http://twitter.com/coderabbi">@coderabbi</a> will kick off the user group, with a few other speakers yet to be confirmed.
									Our first meetup will take place on the 17th February 2015, the location is yet to be announced. 
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			*/ ?>

			<section class="content-11">
				<div class="container">
					<span>Find out new meetups over on</span>
					<a class="btn btn-large btn-danger" href="http://www.meetup.com/PHP-Warwickshire/">MEETUP.COM</a>
				</div>
			</section>

			<footer class="footer-3">
				<div class="container">
					<div class="row v-center">
						<div class="col-sm-2">
							<a class="brand" href="/">
								<img src="img/main-logo.png" style="width: 119px; height: 23px;" />
							</a>
						</div>
						<div class="col-sm-7"></div>
						<div class="col-sm-3">
							<a href="#" class="btn btn-link paypal-donate-button" title="Donate with PayPal">
								<span>Donate with </span>
								<i class="fa fa-cc-paypal fa-2x"></i>
							</a>
						</div>
					</div>
				</div>
			</footer>

			<form id="paypal-donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_donations">
				<input type="hidden" name="business" value="team@phpwarks.co.uk">
				<input type="hidden" name="lc" value="US">
				<input type="hidden" name="item_name" value="PHP Warwickshire">
				<input type="hidden" name="no_note" value="0">
				<input type="hidden" name="currency_code" value="GBP">
				<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
			</form>

		</div>

		<script src="common-files/js/jquery-1.10.2.min.js"></script>
		<script src="flat-ui/js/bootstrap.min.js"></script>
		<script src="common-files/js/modernizr.custom.js"></script>
		<script src="common-files/js/jquery.scrollTo-1.4.3.1-min.js"></script>
		<script src="common-files/js/jquery.parallax.min.js"></script>
		<script src="common-files/js/startup-kit.js"></script>
		<script src="js/jquery.backgroundvideo.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>
