<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('/admin/dashboard_head'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
	<?php $this->load->view('/admin/dashboard_all_menu'); ?>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Main content -->
		<div class="content">
			<?php $this->load->view('/admin/pages/video_slider/add'); ?>
			<!-- /.container-fluid -->
		</div>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
<?php $this->load->view('/admin/dashboard_footer'); ?>
</body>
</html>
