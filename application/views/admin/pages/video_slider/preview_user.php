<style>
	.slider-card1 {
		width: 309px;
		height: 227px;
		margin-bottom: 5px;
	}

	.slider-wrap {
		padding-left: 2px;
		padding-right: 5px;
		user-select: none;
	}

	.vslider-display .card-body {
		background-size: cover;
		height: 100%;
		display: flex;
		border-radius: 5px;
		align-items: flex-end;
		transition: all 1s;
		box-shadow: 0px 1px 3px 0px rgb(0 0 0 / 20%), 0px 1px 1px 0px rgb(0 0 0 / 14%), 0px 2px 1px -1px rgb(0 0 0 / 12%);
	}

	.vslider-display .blury {
		background: #000000;
		opacity: 0;
		width: 100%;
		height: 100%;
		position: absolute;
		z-index: -1;
		transition: all .6s;

	}
	.vslider-display .card-body:hover .blury {
		opacity: .4;
		z-index: 1;
		transition: all .9s;
	}
	.vslider-display {
		cursor: pointer;
	}
	.vslider-display .card-body:after {
		left: 0;
		width: 100%;
		height: 55%;
		bottom: 0;
		content: "";
		display: block;
		position: absolute;
		border-radius: 5px;
		background-image: linear-gradient(to bottom, rgba(13, 6, 32, 0), rgba(13, 6, 32, 0.95));
	}

	.vslider-display .card-title {
		padding-bottom: .5rem;
		padding-top: .5rem;
		margin-top: .5rem;
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
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-row">
			<div class="has_eae_slider has_ma_el_slider elementor-element elementor-element-d5c752d elementor-column elementor-col-100 elementor-top-column"
				 data-id="d5c752d" data-element_type="column">
				<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-fadcbb0 elementor-widget elementor-widget-heading"
							 data-id="fadcbb0" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default">
									Story</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if (isset($slider_rows)): ?>
		<div style="width: 100%;overflow-x: auto;overflow-y: hidden;padding-left: 3rem;">
			<div class="row vslider vslider-display" style="display: flex">
				<?php foreach ($slider_rows as $row): ?>
					<?php
					$thumb = base_url('thumb_images/') . $row->filename . '.png';
					$video = base_url('upload/') . $row->filename;
					?>
					<div class="col-auto slider-wrap">
						<div class="card slider-card1" thumbnail-src="<?php echo $thumb; ?>">
							<div play-video video-src="<?php echo $video; ?>"
								 style="background-image: url('<?php echo $thumb; ?>')" class="card-body">
								<div class="blury"></div>
							</div>
							<p class="card-title" style="padding-left: .5rem;"><?php echo $row->title; ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

	<?php endif; ?>
</section>

