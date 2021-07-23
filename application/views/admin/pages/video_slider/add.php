<style>
	.img01 {
		/*visibility: hidden;*/
	}
	#snap {
		height: 0;
		overflow: hidden;
	}

</style>
<div class="row">
	<div class="col-sm-12 col-md-6 col-lg-6">
		<div class="card mt-2 w-100">
			<div class="wait">
				<div style="width: 100%">
					<div class="text-center"> Please wait...</div>
					<div class="progress">
						<div class="progress-bar bg-success" id="upload_progress" role="progressbar" style="width: 0%" aria-valuenow="25"
							 aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
			</div>
			<div class="card-body">
				<form id="vslider_form" enctype="multipart/form-data" method="post"
					  action="<?php echo base_url(""); ?>admin/video-slider/add_post">
					<div class="row">
						<h4 class="text-center w-100">Add Video slider</h4>
					</div>
					<label for="basic-url" class="form-label">Title</label>
					<div class="input-group mb-3">
						<input type="text" class="form-control" id="vslider_title" name="vslider_title"
							   placeholder="title"
							   aria-describedby="basic-addon3">
					</div>
					<label for="basic-url" class="form-label">Select Video File</label>
					<div class="mb-3">
						<input class="form-control" type="file" id="vslider_file" name="vslider_file"
							   accept="video/mp4,video/x-m4v,video/*" style="padding:0;">
					</div>
					<label for="basic-url" class="form-label">Description</label>
					<div class="input-group mb-3">
						<textarea class="form-control" id="vslider_desc" name="vslider_desc" aria-label="With textarea"
								  style="resize: none"></textarea>
					</div>
					<button type="submit" class="btn btn-primary" id="save_slider">Save</button>
					<div id="snap"></div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 col-lg-6">
	</div>
</div>
<script>
	function clearForm(){
		$('#vslider_title').val('');
		$('#vslider_desc').val('');
		$('#vslider_file').val('');
	}

	$(document).ready(function () {
		$("#img01").css("display", "none");
		$("#vslider_form").on('submit', function (e) {
			e.preventDefault();
			var _url = $(this).attr("action");
			var data = {
				vslider_title: $('#vslider_title').val(),
				vslider_desc: $('#vslider_desc').val(),
				vslider_file_elm: $('#vslider_file').val(),
				vslider_thumb_base64: $('#img01').attr("src")
			};
			var _formdata = new FormData(this);
			_formdata.append("thumb", data.vslider_thumb_base64);
			if (data.vslider_title == "" || data.vslider_file_elm == "") {
				// if (data.vslider_file_elm == "") {
				$.notify("Please fill the form !!", "info");
			} else {
				$("div.wait").css("display", "flex");
				$.ajax({
					xhr: function () {
						var xhr = new window.XMLHttpRequest();
						xhr.upload.addEventListener("progress", function (evt) {
							if (evt.lengthComputable) {
								var percentComplete = (evt.loaded / evt.total) * 100;
								$("#upload_progress").css('width',`${percentComplete}%`);
								// console.log(percentComplete);
								// Place upload progress bar visibility code here
							}
						}, false);
						return xhr;
					},
					url: _url,
					method: "POST",
					contentType: false,
					cache: false,
					processData: false,
					data: _formdata
				}).done(function (res) {
					$.notify("Data saved successfully", "success");
					// console.log(res);
					$("div.wait").css("display", "none");
					$("#upload_progress").css('width',`0%`);
					clearForm();
				}).fail(function (err) {
					$.notify("Error occurs", "error");
					// console.log(err.responseText);
					$("div.wait").css("display", "none");
					$("#upload_progress").css('width',`0%`);
					clearForm();
				});
			}
			// $.notify("Access granted", "success"); // info  warn  error
		});

		$('#vslider_file').on('change', function (e) {
			// let file = $(this).get(0).files[0];
			$("#save_slider").attr('disabled','disabled');
			var file = e.target.files[0];
			let thumbSize = {
				x: '665',
				y: '396'
			}
			let reader = new FileReader();
			reader.onload = function (e) {
				var blob = new Blob([reader.result], {type: file.type});
				// let blob = new Blob([new Uint8Array(e.target.result)], {type: file.type});
				// console.log(blob);
				var src = (window.URL || window.webkitURL).createObjectURL(blob);
				// console.log(src);
				var video = document.createElement('video');
				// video.width = thumbSize.x;
				// video.height = thumbSize.y;
				var timeupdate = function () {
					if (snapImage()) {
						video.removeEventListener('timeupdate', timeupdate);
						video.pause();
					}
				};
				video.addEventListener('loadeddata', function () {
					if (snapImage()) {
						video.removeEventListener('timeupdate', timeupdate);
					}
				});
				var snapImage = function () {
					var canvas = document.createElement('canvas');
					// canvas.width = thumbSize.x;
					// canvas.height = thumbSize.y;
					canvas.width = video.videoWidth;
					canvas.height = video.videoHeight;
					// console.log(canvas.width);
					canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
					var image = canvas.toDataURL();
					var success = image.length > 100000;
					if (success) {
						$(".img01").remove();
						var img = document.createElement('img');
						img.src = image;
						img.id = "img01";
						img.className = "img01";
						$("#snap").append(`<img src=${img.src} id="img01" class="img01"/>`);
						// document.getElementsByTagName('div')[0].appendChild(img);
						$("#save_slider").removeAttr('disabled');
						URL.revokeObjectURL(src);
					}
					return success;
				};
				video.addEventListener('timeupdate', timeupdate);
				video.preload = 'metadata';
				video.currentTime = 5;
				video.src = src;
				video.muted = true;
				video.playsInline = true;
				video.play();
			};
			reader.readAsArrayBuffer(file);
		})
	});

</script>

