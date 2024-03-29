<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $header ?> | Log in</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- jQuery -->
	<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
	<?php $this->load->view($page) ?>
	<!-- jquery-validation -->
	<script src="<?= base_url(); ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
	<script src="<?= base_url() . 'assets/' ?>plugins/jquery-validation/localization/messages_id.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>
</body>

</html>
