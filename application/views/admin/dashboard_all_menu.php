<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<?php $this->load->view('/admin/dashboard_topmenu'); ?>
	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a class="nav-link" data-widget="fullscreen" href="#" role="button">
				<i class="fas fa-expand-arrows-alt"></i>
			</a>
		</li>
	</ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="#" class="brand-link">
		<img src="<?php echo site_url('img/xcorner-logo.png') ?>" alt="AdminLTE Logo"
			 class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Sure & Secure <br/> Travel Solutions</span>
	</a>
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image d-none">
				<img src="<?php echo site_url() ?>img/admin/user2-160x160.jpg" class="img-circle elevation-2"
					 alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">
					<?php
					echo 'Hello, ' . $this->session->userdata('username');
					?>
				</a>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<?php $this->load->view('/admin/dashboard_sidemenu'); ?>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
