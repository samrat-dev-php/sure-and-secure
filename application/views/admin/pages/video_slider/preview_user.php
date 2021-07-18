<style>
	.slider-card1 {
		width: 309px;
		height: 227px;
		margin-bottom: 5px;
	}
	.slider-wrap {
		padding-left: 2px;
		padding-right: 5px;
	}
</style>
<style>
	.vjs-poster-custom {
		background-size: cover !important;
		background-position: center !important;;
	}

	.video-js .vjs-big-play-button {
		top: 42% !important;
		left: 39% !important;
	}
</style>
<!--<link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet"/>-->

<section
		class="has_eae_slider has_ma_el_slider"
		data-id="05b6e73_sam" data-element_type="section">
	<?php if (isset($slider_rows)): ?>
		<div style="width: 100%;overflow: auto;padding-left: 3rem;">
			<div class="row vslider" style="display: flex">
				<?php foreach ($slider_rows as $row): ?>
					<?php
					$thumb = base_url('thumb_images/') . $row->filename . '.png';
					$video = base_url('upload/') . $row->filename;
					?>
					<div class="col-auto slider-wrap" >
						<div class="card slider-card1" play-video thumbnail-src="<?php echo $thumb; ?>" video-src="<?php echo $video; ?>">
							<div class="card-img-top"
								 alt="Card image cap"></div>
							<div class="card-body">
								<img src="<?php echo $thumb; ?>"/>
								<h5 class="card-title" style="padding-left: .5rem;"><?php echo $row->title; ?></h5>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

	<?php endif; ?>
</section>

