<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login Dashboard</title>
	<!-- Prevent the demo from appearing in search engines -->
	<meta name="robots" content="noindex">
	<!-- jQuery -->
	<script src="<?php echo base_url() ?>assets/vendor/jquery.min.js"></script>
	<!-- Simplebar -->
	<link type="text/css" href="<?php echo base_url() ?>assets/vendor/simplebar.min.css" rel="stylesheet">
	<!-- App CSS -->
	<link type="text/css" href="<?php echo base_url() ?>assets/css/app.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url() ?>assets/css/app.rtl.css" rel="stylesheet">
	<!-- Material Design Icons -->
	<link type="text/css" href="<?php echo base_url() ?>assets/css/vendor-material-icons.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url() ?>assets/css/vendor-material-icons.rtl.css" rel="stylesheet">
	<!-- Font Awesome FREE Icons -->
	<link type="text/css" href="<?php echo base_url() ?>assets/css/vendor-fontawesome-free.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url() ?>assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-133433427-1');
	</script>
</head>

<body class="layout-login-centered-boxed">
	<div class="layout-login-centered-boxed__form">
		<div class="row">
			<div class="col-md-6">
				<img src="<?php echo base_url() ?>assets/images/login/cashlez.jpg" height="500px" width="450px" style="position: relative;">
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-5">
				<br><br>
				<h5>SIGN IN</h5>
				<br>
				<?php $this->load->view('content/login'); ?>
			</div>
		</div>
	</div>
	<!-- Bootstrap -->
	<script src="<?php echo base_url() ?>assets/vendor/popper.min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/bootstrap.min.js"></script>
	<!-- Simplebar -->
	<script src="<?php echo base_url() ?>assets/vendor/simplebar.min.js"></script>
	<!-- DOM Factory -->
	<script src="<?php echo base_url() ?>assets/vendor/dom-factory.js"></script>
	<!-- MDK -->
	<script src="<?php echo base_url() ?>assets/vendor/material-design-kit.js"></script>
	<!-- App -->
	<script src="<?php echo base_url() ?>assets/js/toggle-check-all.js"></script>
	<script src="<?php echo base_url() ?>assets/js/check-selected-row.js"></script>
	<script src="<?php echo base_url() ?>assets/js/dropdown.js"></script>
	<script src="<?php echo base_url() ?>assets/js/sidebar-mini.js"></script>
	<script src="<?php echo base_url() ?>assets/js/app.js"></script>
	<!-- App Settings (safe to remove) -->
	<script src="<?php echo base_url() ?>assets/js/app-settings.js"></script>
</body>

</html>
