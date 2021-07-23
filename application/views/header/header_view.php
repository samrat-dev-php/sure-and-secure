<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<style>
	.navbar .navbar-header .navbar-brand img {
		transform: scale(1.8);
		max-height: 56px;
	}
</style>
<header class="header ">
	<div style="display: none"></div>
	<nav class="navbar navbar-default navbar-fixed-top  hestia_left">
		<div class="container">
			<div class="navbar-header">
				<div class="title-logo-wrapper">
					<a class="navbar-brand" href="<?php echo site_url() ?>" title="Sure & Secure Travel Solutions">
						<img alt="Sure & Secure Travel Solutions"
							 data-src="<?php echo site_url('img/xcorner-logo.png') ?>"
							 class="lazyload"
							 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
							 data-pagespeed-url-hash="31059146"
							 onload="">

					</a>
				</div>
				<div class="navbar-toggle-wrapper">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target="#main-navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="sr-only">Toggle Navigation</span>
					</button>
				</div>
			</div>
			<div id="main-navigation" class="collapse navbar-collapse">
				<ul id="menu-primary" class="nav navbar-nav">
					<li id="menu-item-509"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-44 current_page_item menu-item-509 active">
						<a title="Home" href="<?php echo site_url() ?>">Home</a></li>
					<li id="menu-item-510"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-510"><a
								title="About Us" href="<?php echo site_url('about-us/') ?>">About Us</a></li>
					<li id="menu-item-510"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-510"><a
								title="Our Partners" href="<?php echo site_url('our-partners/') ?>">Our Partners</a>
					</li>
					<li id="menu-item-514"
						class="menu-item menu-item-type-custom menu-item-object-custom menu-item-514 menu-item-has-children dropdown">
						<a
								title="Travel Packages" href="#">Travel
							Packages
							<span
									class="caret-wrap"><span class="caret"><svg aria-hidden="true" focusable="false"
																				data-prefix="fas"
																				data-icon="chevron-down"
																				class="svg-inline--fa fa-chevron-down fa-w-14"
																				role="img"
																				xmlns="http://www.w3.org/2000/svg"
																				viewBox="0 0 448 512">
                                                <path
														d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                                                </path>
                                            </svg></span></span>
						</a>
						<ul role="menu" class="dropdown-menu">
							<li
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-512">
								<a title="Religious packages"
								   href="<?php echo site_url('travel-packages/religious') ?>">Religious
									Packages</a>
							</li>
							<li
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-512">
								<a title="Religious packages" href="<?php echo site_url('travel-packages/family') ?>">Family
									Packages</a>
							</li>
							<li
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-512">
								<a title="Religious packages"
								   href="<?php echo site_url('travel-packages/adventures') ?>">Adventures
									Packages</a>
							</li>
							<li
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-512">
								<a title="Religious packages"
								   href="<?php echo site_url('travel-packages/international') ?>">International
									Packages</a>
							</li>
							<li
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-512">
								<a title="Religious packages"
								   href="<?php echo site_url('travel-packages/honeymoon') ?>">Honeymoon
									Packages</a>
							</li>
							<li
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-512">
								<a title="Religious packages"
								   href="<?php echo site_url('travel-packages/unexplored') ?>">Unexplored
									Packages</a>
							</li>
						</ul>
					</li>
					<li id="menu-item-517"
						class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-517 dropdown">
						<a title="Our Service" href="#" class="dropdown-toggle">Our Service <span
									class="caret-wrap"><span class="caret"><svg aria-hidden="true" focusable="false"
																				data-prefix="fas"
																				data-icon="chevron-down"
																				class="svg-inline--fa fa-chevron-down fa-w-14"
																				role="img"
																				xmlns="http://www.w3.org/2000/svg"
																				viewBox="0 0 448 512">
                                                <path
														d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                                                </path>
                                            </svg></span></span></a>
						<ul role="menu" class="dropdown-menu">
							<li id="menu-item-513"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-513">
								<a title="Home Stays" href="<?php echo site_url('home-stays/') ?>">Home Stays</a></li>
							<li id="menu-item-512"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-512">
								<a title="Car Service" href="<?php echo site_url('car-service/') ?>">Car Service</a>
							</li>
							<li id="menu-item-513"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-513">
								<a title="Visa Consultancy" href="<?php echo site_url('ticket-service/') ?>">Ticket</a>
							</li>
							<li id="menu-item-513"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-513">
								<a title="Visa Consultancy" href="<?php echo site_url('visa-service/') ?>">Visa
									Consultancy</a></li>
							<li id="menu-item-513"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-513">
								<a title="Visa Consultancy" href="<?php echo site_url('priest/') ?>">Priest</a></li>
							<li id="menu-item-513"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-513">
								<a title="Visa Consultancy" href="<?php echo site_url('guide-service/') ?>">Guide</a>
							</li>
							<li id="menu-item-513"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-513">
								<a title="Visa Consultancy" href="<?php echo site_url('blogger/') ?>">Hotel</a>
							</li>
						</ul>
					</li>
					<li id="menu-item-1256"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1256"><a
								title="Contact Us" href="<?php echo site_url('contact-us/') ?>">Contact Us</a></li>
					<li id="menu-item-1256"
						class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1256"><a
								title="Login" href="<?php echo site_url('login/') ?>">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>
