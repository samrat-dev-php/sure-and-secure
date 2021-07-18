<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$this->load->view('/header/home/head_link_tag_view');
	?>
	<script>
		var pagespeed = 0;
	</script>
	<link rel='stylesheet' id='hestia_style-inline-css' href='<?php echo base_url("css/home/index_page_style.css"); ?>'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='hestia_style-inline-css'
		  href='<?php echo base_url("css/home/index_page_2_style.css"); ?>'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='elementor-post-501-css'
		  href='<?php echo base_url("css/post-501.css?ver=1606920153"); ?>' type='text/css'
		  media='all'/>
	<?php
	$this->load->view('/header/home/head_link_tag_2_view');
	$this->load->view('/header/home/head_script_tag_view');
	$this->load->view('/header/home/head_link_tag_3_view');
	?>
	<style>
		.tour-card-1 {
			position: absolute;
			top: 38px;
		}

		.tour-card-1 > div {
			margin: 0 !important;
			width: 50%;
		}
	</style>
</head>
<body class="home page-template page-template-elementor_header_footer page page-id-44 wp-custom-logo blog-post header-layout-default elementor-default elementor-template-full-width elementor-kit-484 elementor-page elementor-page-44">
<div class="wrapper default">
	<?php
	$this->load->view('/header/header_view');
	$this->load->view('/pages/home_stays/home_stays_content');
	$this->load->view('/footer/footer_view');
	?>
</div>
<?php
$this->load->view('/footer/home/footer_scripts');
?>
</body>
</html>