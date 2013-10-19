<?php
// Creation Date: 19 Oct 2013
// Author: Fernando Canizo (aka conan) - http://conan.muriandre.com/

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Druglord game mock up</title>

		<meta name="author" content="Fernando Canizo">
		<meta name="contact" content="http://conan.muriandre.com/contact.php">

		<meta name="description" content="druglord game clon">
		<meta name="keywords" content="game druglord">

		<link rel="shortcut icon" href="img/favicon.png">

		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/druglord.css">
	</head>
	<body>
    <!-- Wrap all page content, except footer, here -->
		<div id="wrap">
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Druglord Demo</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li class="dropdown-header">Nav header</li>
									<li><a href="#">Separated link</a></li>
									<li><a href="#">One more separated link</a></li>
								</ul>
							</li>
						</ul>
						<form class="navbar-form navbar-right">
							<div class="form-group">
							<input type="text" placeholder="Email" class="form-control">
							</div>
							<div class="form-group">
							<input type="password" placeholder="Password" class="form-control">
							</div>
							<button type="submit" class="btn btn-success">Sign in</button>
						</form>
					</div><!--/.navbar-collapse -->
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h2>Information</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					</div>

					<div class="col-lg-6">
						<h2>Status</h2>
						<ul>
							<li>Location: <strong>New York</strong></li>
							<li>Day: <strong>3/30</strong></li>
							<li>Rank: <strong>Wannabe</strong></li>
							<li>Cash: <strong>1,990</strong></li>
						</ul>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3">
						<h2>Market</h2>
					</div>

					<div class="col-lg-3">
						<h2>Carrying</h2>
					</div>

					<div class="col-lg-6">
						<h2>World</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<h2>Actions</h2>
						<form class="form-inline">
							<button type="button" class="btn btn-primary" href="#">Buy &raquo;</button>
							<button type="button" class="btn btn-primary" href="#">&laquo; Sell</button>
							<button type="button" class="btn btn-danger" href="#">Dump All</button>
							<button type="button" class="btn btn-default" href="#">Stay Here</button>
							<label>Go...</label>
							<select class="form-control">
								<option>Boston</option>
								<option>Paris</option>
								<option>Moscow</option>
								<option>Beijing</option>
							</select>
						</form>
					</div>
				</div>

			</div><!-- container -->

		</div><!-- wrap -->

		<footer>
			<div class="container">
				<p class="text-muted credit">Mock-up courtesy <a href="http://conan.muriandre.com/">Fernando L. Canizo</a>.</p>
			</div>
		</footer>

		<script src="js/lib/jquery.js"></script>
		<script src="js/lib/bootstrap.js"></script>
		<script src="js/druglord.js"></script>
	</body>
</html>
