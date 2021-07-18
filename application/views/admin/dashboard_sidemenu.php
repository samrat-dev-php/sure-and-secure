<!--https://fontawesome.com/v4.7.0/icon/home-->
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
	data-accordion="false">
	<li class="nav-item">
		<a href="<?php echo base_url(""); ?>admin/dashboard" class="nav-link">
			<i class="nav-icon fas fa-home"></i>
			<p>
				Home
			</p>
		</a>
	</li>
	<li class="nav-item">
		<a href="#forms" lstore class="nav-link">
			<i class="nav-icon fas fa-edit"></i>
			<p>
				Forms
				<i class="fas fa-angle-left right"></i>
			</p>
		</a>
		<ul class="nav nav-treeview">

			<li class="nav-item">
				<a href="#video_slider" lstore class="nav-link">
					<i class="fas fa-circle nav-icon"></i>
					<p>
						Video Slider
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?php echo base_url(""); ?>admin/video-slider/add" class="nav-link">
							<i class="far fa-circle nav-icon text-warning"></i>
							<p>Add</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url(""); ?>admin/video-slider/preview" class="nav-link">
							<i class="far fa-circle nav-icon text-warning"></i>
							<p>Preview</p>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</li>
	<li class="nav-item">
		<a href="<?php echo base_url(""); ?>admin/#Settings" class="nav-link">
			<i class="nav-icon fas fa-wrench"></i>
			<p>
				Settings
			</p>
		</a>
	</li>
	<li class="nav-item">
		<a href="<?php echo base_url(""); ?>logout" class="nav-link">
			<i class="nav-icon fas"><img style="height: 18px;"
										 src="<?php echo base_url(""); ?>img/admin/logout.png"/></i>
			<p>
				Logout
			</p>
		</a>
	</li>
</ul>
