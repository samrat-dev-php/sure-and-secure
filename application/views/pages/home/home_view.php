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
	$this->load->view('/pages/home/home_content_view');
	$this->load->view('/footer/footer_view');
	?>
</div>
<!-- Modal -->
<div class="modal" id="veModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-body">
				<iframe width="100%" height="360" id="my-video-1" frameborder="0" ></iframe>
			</div>
			<div class="modal-footer pt-0">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<script type="text/javascript" src="<?php echo base_url('js/jquery.1.11.js'); ?>"></script>
<!--<script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>-->
<script>
	try {
		// var myVideo = videojs('my-video').src(url);
		//
		// $('#my-video .vjs-poster').css('background-image', `url(${thumbnail})`).addClass('vjs-poster-custom');

		$(document).ready(function () {
			$("[play-video]").on('click', function () {
				var url = $(this).attr("video-src");
				var thumbnail = $(this).attr("thumbnail-src");
				document.getElementById("my-video-1").src = url;
				$('#veModal').modal('show');
			});
			$("[data-bs-dismiss=\"modal\"]").click(function () {
				$('#veModal').modal('hide');
			});
			$('#veModal').on('hide.bs.modal', function (e) {
				var x = document.getElementById("my-video-1");
				var y = (x.contentWindow || x.contentDocument);
				if (y.document)y = y.document;
				$("video", $(y)).get(0).pause();
				// location.reload();
			})
		});
	} catch (e) {

	}

</script>
<?php
$this->load->view('/footer/home/footer_scripts');
?>

</body>
</html>
