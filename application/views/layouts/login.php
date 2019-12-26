<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<title> <?= isset($title) ? $title .' - ' : '' ?> Kolektif Industri</title>
	<meta content="ERP by Kolektifindustri.com Built by Dodolantech" name="description" />
	<meta content="Dodolan Tech" name="author" />
	<link rel="shortcut icon" href="<?=base_url()?>/assets/brand.ico">

	<?php loadCss([
            'css/bootstrap.min.css',
            'css/metismenu.min.css',
            'css/icons.css',
            'css/style.css'
        ]); ?>

</head>

<body>

	<!-- Begin page -->
	<div class=""></div>
	<div class="wrapper-page">
		<?php $this->load->view($view, $params); ?>
	</div>

	<?php loadJs([
            'js/jquery.min.js',
            'js/bootstrap.bundle.min.js',
            'js/metismenu.min.js',
            'js/jquery.slimscroll.js',
            'js/waves.min.js',
            'js/app.js',
            'plugins/alertify/js/alertify.js'
        ]); ?>

</body>

</html>
