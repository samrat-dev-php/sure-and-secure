<section style="border-top: 1rem solid #000000;"
		 class="has_eae_slider has_ma_el_slider elementor-element elementor-element-1106ed3 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
		 data-id="1106ed3" data-element_type="section"
		 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" id="contact_us_save">
	<div class="elementor-background-overlay"></div>
	<div class="elementor-container elementor-column-gap-extended">
		<div class="elementor-row">
			<div class="container d-flex justify-content-center">
				<div class="row">
					<form action="<?php base_url() ?>contactus_home_post" method="post" style="margin-top: 7rem;">
						<p class="contact_us_save_alert">
							<?php echo $this->session->flashdata('contact_us_save'); ?>
						</p>
						<div class="col-md-6">
							<h2 class="title pl-3 pt-0 pb-3">Contact us</h2>
							<div class="form-group col-md-12">
								<input type="text" class="form-control"
									   placeholder="Name" name="c_name" autocomplete="on"/>
							</div>
							<div class="form-group col-md-12">
								<input type="email" class="form-control"
									   placeholder="E-mail" name="c_email" autocomplete="on"/>
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control"
									   placeholder="Contact No" name="c_contact_no"/>
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control"
									   placeholder="Address" name="c_address"/>
							</div>
							<div class="form-group col-md-12">
								<label for="ddlDestination" class="form-label">Destination</label>
								<input class="form-control" list="destinationOptions" id="ddlDestination"
									   name="c_destination"
									   placeholder="Type to search Destination..." autocomplete="off">
								<datalist id="destinationOptions">
									<?php if (isset($email_rows)): ?>
									<?php foreach ($email_rows

									as $row): ?>
									<option value="<?php echo $row->location; ?>">
										<?php endforeach; ?>
										<?php endif; ?>
									<option value="Others">
								</datalist>
								<input type="text" class="form-control d-none"
									   placeholder="others destination" id="others_destination" name="c_others_destination"/>
							</div>
							<div class="form-group col-md-12">
								<input type="number" min="1" max="10000" class="form-control"
									   placeholder="No of People" name="c_people_no"/>
							</div>
							<div class="form-group col-md-12">
								<label for="ddlVia" class="form-label">Via</label>
								<input class="form-control" list="viaOptions" id="ddlVia" name="c_via"
									   placeholder="Type to search..." autocomplete="off">
								<datalist id="viaOptions">
									<?php if (isset($via_rows)): ?>
									<?php foreach ($via_rows

									as $row): ?>
									<option value="<?php echo $row; ?>">
										<?php endforeach; ?>
										<?php endif; ?>
								</datalist>
							</div>
							<div class="form-group col-md-12">
								<button type="submit" class="btn btn-dark btn-block">Send</button>
							</div>
						</div>
					</form>
					<div class="col-md-6"><img class="img_13"
											   src="<?php echo base_url('img/home_content/get in tough.png') ?>"
											   width="100%" height="100%"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<style>
	.img_13 {
		box-shadow: 0px 9px 30px 0px #00000078 !important;
		border-top: 1rem solid transparent !important;
		border-radius: 1rem !important;
	}

	.contact_us_save_alert {
		color: red;
		font-size: 1.7rem;
		padding-left: 1rem;
	}
</style>
