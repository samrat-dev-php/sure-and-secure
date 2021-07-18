<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('/admin/dashboard_head'); ?>
	<link rel="stylesheet" href="<?php echo base_url(""); ?>font-awesome-4.7.0/css/font-awesome.css">
	<!-- https://fontawesome.com/v4.7/icons/ -->
	<!-- https://getbootstrap.com/docs/5.0/forms/form-control/ -->
	<style>
		.vslider div.card-img-top {
			height: 231px;
			background-position: center;
			background-size: cover;
			background-repeat: no-repeat;
		}

		.vjs-poster-custom {
			background-size: cover !important;
			background-position: center !important;;
		}

		.video-js .vjs-big-play-button {
			top: 42% !important;
			left: 39% !important;
		}
	</style>
	<link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet"/>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
	<?php $this->load->view('/admin/dashboard_all_menu'); ?>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Main content -->
		<div class="content">
			<div class="wait">
				<div style="width: 100%">
					<div class="text-center"> Please wait...</div>
					<div class="progress">
						<div class="progress-bar bg-success" id="upload_progress" role="progressbar" style="width: 0%"
							 aria-valuenow="25"
							 aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
			</div>
			<?php $this->load->view('/admin/pages/video_slider/preview'); ?>
			<!-- Modal -->
			<div class="modal fade" id="veModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">

						<div class="modal-body">
							<video
									id="my-video"
									class="video-js"
									controls
									preload="auto"
									width="460"
									height="264"
									data-setup="{}"
							>
								<source src="http://localhost:8080/pavan-tours-in/upload/v202107171626534906.mp4"
										type="video/mp4"/>
								<p class="vjs-no-js">
									To view this video please enable JavaScript, and consider upgrading to a
									web browser that
									<a href="https://videojs.com/html5-video-support/" target="_blank"
									>supports HTML5 video</a
									>
								</p>
							</video>
						</div>
						<div class="modal-footer pt-0">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal -->
			<!-- /.container-fluid -->
		</div>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
</div>
<script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
<!-- ./wrapper -->
<?php $this->load->view('/admin/dashboard_footer'); ?>
<script>
	function savaScroll(type) {
		try {
			var aw = localStorage.getItem('aw3r');
			var top = $(window).scrollTop();
			if (type == 'init') {
				if (aw == null) {
					localStorage.setItem('aw3r', top);
				} else {
					$(window).scrollTop(aw);
				}
			} else {
				localStorage.setItem('aw3r', top);
			}
			// console.log(top);
		} catch (e) {

		}
	}

	$(document).ready(function () {
		savaScroll('init');
		$(window).on('scroll', function () {
			savaScroll('scroll');
		});
		$(".vslider div.card-img-top").each(function () {
			var url = $(this).attr("thumbnail-src");
			$(this).css('background-image', `url(${url})`);
		});
		$("[play-video]").on('click', function () {
			var target = $(this).closest("div.card").get(0);
			var url = $(".card-img-top", target).attr("video-src");
			var thumbnail = $(".card-img-top", target).attr("thumbnail-src");
			var myVideo = videojs('my-video').src(url);
			$('#my-video .vjs-poster').css('background-image', `url(${thumbnail})`).addClass('vjs-poster-custom');
			$('#veModal').modal('show');
			// console.log(url, thumbnail);
		});
		$("[data-bs-dismiss=\"modal\"]").click(function () {
			$('#veModal').modal('hide');
		});
		$('#veModal').on('hide.bs.modal', function (e) {
			$("video", $(this)).get(0).pause();
			// location.reload();
		})
		$("[delete-video]").on('click', function () {
			if (!confirm('are you sure want to delete it?')) return;
			var target = $(this).closest("div.card").get(0);
			var vid = $(".card-img-top", target).attr("video-id");
			var _url = "<?php echo base_url(""); ?>admin/video-slider/delete/" + vid;
			$("div.wait").css("display", "flex");
			$.ajax({
				url: _url,
				method: "POST",
				contentType: false,
				cache: false,
				processData: false,
				data: {}
			}).done(function (res) {
				$.notify("Data saved successfully", "success");
				console.log(res);
				$("div.wait").css("display", "none");
				$(`[card-id=${vid}]`).remove();
			}).fail(function (err) {
				$.notify("Error occurs", "error");
				console.log(err.responseText);
				$("div.wait").css("display", "none");
			});
			// console.log(_url);
		});
	});
</script>

</body>

</html>
