<div class="row vslider">
	<?php if (isset($rows)): ?>
		<?php foreach ($rows as $row): ?>
			<?php
			$thumb = base_url('thumb_images/') . $row->filename . '.png';
			$video = base_url('upload/') . $row->filename;
			?>
			<div class="col-sm-12 col-md-6 col-lg-4" card-id="<?php echo $row->id; ?>">
				<div class="card">
					<div class="card-img-top"
						 video-src="<?php echo $video; ?>"
						 thumbnail-src="<?php echo $thumb; ?>"
						 video-id="<?php echo $row->id; ?>"
						 alt="Card image cap"></div>
					<div class="card-body">
						<h5 class="card-title"><?php echo $row->title; ?></h5>
						<p class="card-text">
							<?php //echo $row->vdesc; ?>
						</p>
						<a href="#" class="btn btn-outline-info" play-video title="play"><i class="fa fa-play"
																				 aria-hidden="true"></i></a>
<!--						<a href="#" class="btn btn-outline-secondary" title="move up"><i class="fa fa-chevron-down"-->
<!--																						 aria-hidden="true"></i></i></a>-->
<!--						<a href="#" class="btn btn-outline-secondary" title="move down"><i class="fa fa-chevron-up"-->
<!--																						   aria-hidden="true"></i></a>-->
<!--						<a href="#" class="btn btn-outline-secondary" title="edit"><i class="fa fa-pencil"-->
<!--																					  aria-hidden="true"></i></a>-->
						<a href="#" class="btn btn-outline-danger" delete-video title="remove"><i class="fa fa-trash"
																					 aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		<?php endforeach; else: ?>
		No Data
	<?php endif; ?>
</div>
