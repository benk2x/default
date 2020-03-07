<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
		
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">
		
		<?= $Wcms->css() ?>
	</head>
	
	
	

	<body>
		<?= $Wcms->settings() ?>
		<?= $Wcms->alerts() ?>
		
		
		

		<nav class="navbar navbar-expand-lg navbar-light navbar-default">
			<div class="container">
				<a class="navbar-logo" href="<?= $Wcms->url() ?>"><img class="logo" src="/logo.png" alt="teckblock.ml - LOGO">
					</a>
				<a class="navbar-brand" href="<?= $Wcms->url() ?>"><?= $Wcms->get('config', 'siteTitle') ?></a>

				<div class="navbar-header">
				<button type="button" class="navbar-toggler navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">
					<span class="navbar-toggler-icon">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</span>
				</button>
				</div>

				<div class="collapse navbar-collapse" id="menu-collapse">
					<ul class="nav navbar-nav navbar-right ml-auto">
						<?= $Wcms->menu() ?>
					</ul>
				</div>
			</div>
		</nav>
	<div class="w3-row-padding">
		<div class="container-leftsidebar menucolor w3-col w3-container" style="width:20%">
			<div class="column-left">
				<div class="col-lg-12 text-center padding40">
					
<?= $Wcms->block('leftSideBar')?>

				</div>
			</div>
		</div>
		
		<div class="container w3-col w3-container" style="width:60%">
			<div class="row-middle">
				<div class="col-lg-12 text-center padding40">
					<?= $Wcms->page('content') ?>

				</div>
			</div>
		</div>
		
		
<div class="container-blockarticle w3-col w3-container" style="width:20%">
			<div class="column-right">
				<div class="col-lg-12 text-center padding40">
					<?= $Wcms->block('articleContent')?>
				</div>
			</div>
		</div>
		
	
	</div>
		
		
		
			

		<div class="container-sidebar menucolor">
			<div class="row-about">
				<div class="col-lg-12 text-center padding40">
					<?= $Wcms->block('subside') ?>

				</div>
			</div>
		</div>

		
		
		<div class="container-fluid menucolor">
			<div class="row-menu-footer">
				<div class="col-lg-12 text-center padding40">
					<?= $Wcms->block('MenuSidebar')?>

				</div>
			</div>
		</div>
		
		

		<footer class="container-fluid menucolor-foot">
			<div class="text-left padding20">
				<?= $Wcms->footer() ?>

			</div>
		</footer>

		<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous" type="text/javascript"></script>
		<?= $Wcms->js() ?>

	</body>
</html>
