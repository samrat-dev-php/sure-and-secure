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
	<link rel='stylesheet' id='elementor-post-499-css' href='<?php echo base_url("css/post-499.css?ver=1605075337"); ?>'
		  type='text/css' media='all'/>

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
	$this->load->view('/pages/blogger/blogger_content_view');
	$this->load->view('/footer/footer_view');
	?>
</div>
<?php
$this->load->view('/footer/home/footer_scripts');
?>
</body>
</html>
