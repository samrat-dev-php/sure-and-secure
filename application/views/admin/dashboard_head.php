<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet"
	  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="<?php echo base_url(""); ?>plugins/fontawesome-free/css/all.min.css">
<!-- IonIcons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<link rel="stylesheet" href="<?php echo base_url(""); ?>plugins/fontawesome-free/css/fontawesome.css">
<link rel="stylesheet" href="<?php echo base_url(""); ?>plugins/fontawesome-free/css/brands.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url("css/admin/adminlte.min.css"); ?>">
<style>
	.d-none {
		display: none;
	}

	div.wait {
		position: absolute;
		background-color: #0c0c0c;
		opacity: .5;
		width: 100%;
		height: 100%;
		left: 0;
		top: 0;
		z-index: 999;
		display: flex;
		justify-content: center;
		align-items: flex-end;
		color: white;
		font-weight: bolder;
		font-size: 1.4rem;
		display: none;
	}

	div.wait .progress {
		background-color: transparent;
		height: .41rem;
	}

	div.wait .bg-success {
		background-color: #5cff01 !important;
	}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo base_url(""); ?>js/notify.min.js"></script>
