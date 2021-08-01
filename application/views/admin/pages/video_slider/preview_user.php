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
	.vslider-container {
		display: flex;
		flex-direction: row;
		position: relative;
	}

	.vslider-container .prev-logo,
	.vslider-container .next-logo {
		width: 50px;
		height: 100%;
		position: absolute;
		top: 0;
		bottom: 0;
		z-index: 99;
		color: white;
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 4rem;
		cursor: pointer;
	}

	.vslider-container .prev-logo {
		left: 0;
		background-image: linear-gradient(to left, rgba(13, 6, 32, 0), rgba(13, 6, 32, 0.95));
	}

	.vslider-container .next-logo {
		right: 0;
		background-image: linear-gradient(to right, rgba(13, 6, 32, 0), rgba(13, 6, 32, 0.95));
	}

	.vslider-display {
		cursor: pointer;
		margin-left: 0px;
	}

	.vslider-display-trans {
		transition: all .6s ease;
	}

	.vslider-display-wrapper {
		margin: auto;
		width: 100%;
		overflow-x: hidden;
		overflow-y: hidden;
		position: relative;
		/*border: 1px solid blue;*/
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
		<div class="vslider-container">
			<div class="prev-logo">&laquo;</div>
			<div class="vslider-display-wrapper">
				<div class="row vslider vslider-display" style="display: flex">
					<?php foreach ($slider_rows as $row): ?>
						<?php
						$thumb = base_url('thumb_images/') . $row->filename . '.png';
						$video = base_url('upload/') . $row->filename . '.mp4';
						?>
						<div class="col-auto slider-wrap">
							<div class="card slider-card1" thumbnail-src="<?php echo $thumb; ?>">
								<div play-video video-src="<?php echo $video; ?>"
									 style="background-image: url('<?php echo $thumb; ?>')" class="card-body">
									<div class="blury">
									</div>
								</div>
								<p class="card-title" style="padding-left: .5rem;"><?php echo $row->title; ?></p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="next-logo">&raquo;</div>
		</div>
	<?php endif; ?>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(document).ready(function () {
		var log = console.log;
		var card = $(".slider-card1");
		var winWidth = $(window).width();
		var col = winWidth < 576 ? 1 : winWidth <= 768 ? 2 : winWidth <= 992 ? 3 : winWidth <= 1200 ? 4 : 5;
		var gutter = 6;
		var cardWidth = parseInt((winWidth / col) - gutter);
		card.css("width", `${cardWidth}px`);
		// log(winWidth, col,cardWidth);

		var slider = $(".vslider-display");
		var sliderPrev = $(".vslider-container .prev-logo").eq(0);
		var sliderNext = $(".vslider-container .next-logo").eq(0);
		var prevBtnWidth = 50;
		slider.css('margin-left', `${prevBtnWidth}px`).addClass('vslider-display-trans');
		slider.attr('pos', prevBtnWidth);

		slider.on('btnState', function () {
			var currPos = parseInt(slider.attr('pos'));
			var maxMarginLeft = (card.length - col) * (cardWidth + gutter);
			if((currPos * -1) > maxMarginLeft) {
				sliderNext.hide();
			} else {
				sliderNext.show();
			}
			if (currPos >= prevBtnWidth) {
				sliderPrev.hide();
			} else {
				sliderPrev.show();
			}
		});
		slider.trigger('btnState');

		sliderNext.on('click', function () {
			var currPos = parseInt(slider.attr('pos'));
			var maxMarginLeft = (card.length - col) * (cardWidth + gutter);
			// log((currPos * -1), maxMarginLeft);
			if((currPos * -1) > maxMarginLeft) return;
			currPos += (cardWidth + gutter) * 1 * -1;
			slider.css('margin-left', `${currPos}px`);
			slider.attr('pos', currPos);
			slider.trigger('btnState');
		});
		sliderPrev.on('click', function () {
			var currPos = parseInt(slider.attr('pos'));
			// log(currPos);
			if (currPos >= prevBtnWidth) return;
			currPos += (cardWidth + gutter) * 1;
			slider.css('margin-left', `${currPos}px`);
			slider.attr('pos', currPos);
			slider.trigger('btnState');
		});

		// log(winWidth, col,cardWidth);
	});
</script>
