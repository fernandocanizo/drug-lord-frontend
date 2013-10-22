<?php
// Creation Date: 19 Oct 2013
// Author: Fernando Canizo (aka conan) - http://conan.muriandre.com/


require_once('root.path.php');
require_once(ROOT_PATH . 'lib/game.php');

$world = new World();
$player = new Player('John Doe');
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
						<a class="navbar-brand" href="#">Web Drug Lord</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="#about">Rules</a></li>
							<li><a href="#contact">Contact</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Other stuff <b class="caret"></b></a>
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
							or
							<button type="submit" class="btn btn-danger">Register</button>
						</form>
					</div><!--/.navbar-collapse -->
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h2>Information</h2>
						<p class="well">Welcome to Web Drug Lord.</p>
					</div>

					<div class="col-lg-3">
						<h2>Ads here</h2>
						<p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>

					<div class="col-lg-3">
						<h2>Status</h2>
						<ul>
							<li>Location: <strong><?= $player->currentLocation ?></strong></li>
							<li>Day: <strong><?= $world->currentDay ?> / <?= GameConfig::$maxDays ?></strong></li>
							<li>Rank: <strong><?= $player->rank ?></strong></li>
							<li>Cash: <strong><?= $player->cash ?></strong></li>
						</ul>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3">
						<h2>Market</h2>
						<table class="table table-striped">
							<tr>
								<th>Name</th>
								<th>Qty</th>
								<th>Price</th>
								<th></th>
							</tr>
<?php
foreach($world->cities[$player->currentLocation]->drugs as $drugName => $drugProps):
	if($drugProps->canTrade):
?>

							<tr>
								<td><?= $drugName ?></td>
								<td><?= $drugProps->quantity ?></td>
								<td><?= $drugProps->price ?></td>
								<td>
									<button type="button" class="btn btn-primary btn-xs">Buy &raquo;</button>
								</td>
							</tr>
<?php
	endif;
endforeach;
?>
						</table>
					</div>

					<div class="col-lg-3">
						<h2>Carrying</h2>
<?php
if(0 === count($player->drugs)):
?>
						<p class="well">Nothing bought yet...</p>
<?php
else:
?>
						<table class="table table-striped">
							<tr>
								<th></th>
								<th>Name</th>
								<th>Qty</th>
								<th>Bought At</th>
							</tr>
<?php
	foreach($player->drugs as $drugName => $drugProps):
?>
							<tr>
								<td>
									<button type="button" class="btn btn-primary btn-xs">&laquo; Sell</button>
								</td>
								<td><?= $drugName ?></td>
								<td><?= $drugProps->quantity ?></td>
								<td><?= $drugProps->boughtAt ?></td>
							</tr>
<?php
	endforeach;
?>
						</table>
<?php
endif;
?>

					</div>

					<div class="col-lg-6">
						<h2>World</h2>
						<table class="table table-striped">
							<tr>
								<th>City</th>
								<th>Qty</th>
								<th>Price</th>
							</tr>
<?php
$selectedDrug = 'Cocaine'; // TODO hardcoded, fix
foreach($world->cities as $city => $drugs):
?>
							<tr>
								<td><?= $city ?></td>
								<td><?= $world->cities[$city]->drugs[$selectedDrug]->quantity ?></td>
								<td><?= $world->cities[$city]->drugs[$selectedDrug]->price ?></td>
							</tr>
<?php
endforeach;
?>
						</table>

						<form class="form-inline">
							<button type="button" class="btn btn-info btn-sm" id="switch_prices">See drug -> city prices</button>
							<select class="form-control">
<?php
foreach(GameConfig::$drugPriceWeight as $drugName => $dontCare):
?>
								<option><?= $drugName ?></option>
<?php
endforeach;
?>
							</select>
						</form>

					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<h2>Actions</h2>
						<form class="form-inline">
							<button type="button" class="btn btn-danger">Dump All</button>
							<button type="button" class="btn btn-default">Stay Here</button>
							<label>or go away to...</label>
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
