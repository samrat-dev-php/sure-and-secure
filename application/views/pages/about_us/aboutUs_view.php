<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$this->load->view('/header/home/head_link_tag_view');
	?>
	<link rel='stylesheet' id='hestia_style-inline-css' href='<?php echo base_url("css/home/index_page_style.css"); ?>'
		  type='text/css' media='all'/>
	<link rel='stylesheet' id='hestia_style-inline-css'
		  href='<?php echo base_url("css/home/index_page_2_style.css"); ?>'
		  type='text/css' media='all'/>
	<style>
		.elementor-496 .elementor-element.elementor-element-d7ac19f:not(.elementor-motion-effects-element-type-background), .elementor-496 .elementor-element.elementor-element-d7ac19f > .elementor-motion-effects-container > .elementor-motion-effects-layer {
			background-image: url("<?php echo base_url('img/slide5.jpg'); ?>");
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.elementor-496 .elementor-element.elementor-element-b85439b:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-496 .elementor-element.elementor-element-b85439b > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer {
			background-image: url("<?php echo base_url('img/'); ?>imgbin-network-world-travel-package-tour-tour-operator-travel-agent-travel-Kf2bNPHMeKy4Z9nts0NvTjD6p-removebg-preview.png");
			background-position: center center;
			background-size: cover;
		}

		.elementor-496 .elementor-element.elementor-element-c3aa3fd:not(.elementor-motion-effects-element-type-background), .elementor-496 .elementor-element.elementor-element-c3aa3fd > .elementor-motion-effects-container > .elementor-motion-effects-layer {
			background-image: url("<?php echo base_url('img/'); ?>Travel-HD-Wallpapers-Top-Free-Travel-HD-Backgrounds--scaled.jpg");
			background-position: center center;
			background-size: cover;
		}

		.elementor-496 .elementor-element.elementor-element-99dea59:not(.elementor-motion-effects-element-type-background), .elementor-496 .elementor-element.elementor-element-99dea59 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
			background-color: #000000;
			background-image: url("<?php echo base_url('img/'); ?>accessories.jpg");
			background-position: center center;
			background-size: cover;
		}

		elementor-496 .elementor-element.elementor-element-5a612f7:not(.elementor-motion-effects-element-type-background), .elementor-496 .elementor-element.elementor-element-5a612f7 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
			background-image: url("<?php echo base_url('img/'); ?>banner-bg1.jpg");
			background-position: center center;
			background-repeat: no-repeat;
			background-size: auto;
		}

		.elementor-496 .elementor-element.elementor-element-0db05fb:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-496 .elementor-element.elementor-element-0db05fb > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer {
			background-image: url("<?php echo base_url('img/'); ?>vision-mission-not-arrow.png");
			background-repeat: no-repeat;
			background-size: contain;
		}

	</style>
	<link rel='stylesheet' id='' href='<?php echo base_url("css/post-496.css?ver=1675337"); ?>' type='text/css' media='all'/>
	<?php
	$this->load->view('/header/home/head_link_tag_2_view');
	$this->load->view('/header/home/head_script_tag_view');
	$this->load->view('/header/home/head_link_tag_3_view');
	?>
</head>
<body class="home page-template page-template-elementor_header_footer page page-id-44 wp-custom-logo blog-post header-layout-default elementor-default elementor-template-full-width elementor-kit-484 elementor-page elementor-page-44">
<div class="wrapper default">
	<?php
	$this->load->view('/header/header_view');
	$this->load->view('/pages/about_us/about_us_content_view');
	$this->load->view('/footer/footer_view');
	?>
</div>
<?php
$this->load->view('/footer/home/footer_scripts');
?>
</body>
</html>
