<head>
    <?php wp_head(); ?>
		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php bloginfo('name') ?></title>	

		<meta name="keywords" content="" />
		<meta name="description" content="<?php bloginfo('description') ?>">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo ( get_theme_file_uri( '/images/favicon.ico' ) ); ?>" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo ( get_theme_file_uri( '/images/apple-touch-icon.png' ) ); ?>">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->


		<!-- Vendor CSS -->
		
	

		<!-- Theme CSS -->


		<!-- Demo CSS -->
		<link rel="stylesheet" href="<?php echo esc_url( get_theme_file_uri( '/assets/css/demos/demo-business-consulting-4.css' ) ); ?>">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="<?php echo esc_url( get_theme_file_uri( '/assets/css/skins/skin-business-consulting-4.css' ) ); ?>">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo esc_url( get_theme_file_uri( '/assets/css/custom.css' ) ); ?>">

		<!-- Head Libs -->
		<script src="<?php echo esc_url( get_theme_file_uri( '/assets/vendor/modernizr/modernizr.min.js' ) ); ?>"></script>

	</head>
  <body>
		<div class="body">
			<header id="header" class="header-transparent" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 53, 'stickySetTop': '-53px'}">
				<div class="header-body border-top-0 h-auto box-shadow-none">
					<div class="header-top header-top-borders">
						<div class="container h-100">
							<div class="header-row h-100">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item py-2 d-none d-sm-inline-flex pe-2">
													<span class="ps-0 font-weight-semibold text-color-default text-2-5">1234 Street Name, City Name</span>
												</li>
												<li class="nav-item py-2 pe-2">
													<a href="tel:123-456-7890" class="text-color-default text-2-5 text-color-hover-primary font-weight-semibold">123-456-7890</a>
												</li>
												<li class="nav-item py-2 d-none d-md-inline-flex">
													<a href="mailto:mail@domain.com" class="text-color-default text-2-5 text-color-hover-primary font-weight-semibold">mail@domain.com</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills p-relative bottom-2">
												<li class="nav-item py-2 d-none d-lg-inline-flex">
													<a href="http://www.facebook.com/" target="_blank" title="Facebook" class="text-color-dark text-color-hover-primary text-3 anim-hover-translate-top-5px transition-2ms"><i class="fab fa-facebook-f text-3 p-relative top-1"></i></a>
												</li>
												<li class="nav-item py-2 d-none d-lg-inline-flex">
													<a href="http://www.twitter.com/" target="_blank" title="Twitter" class="text-color-dark text-color-hover-primary text-3 anim-hover-translate-top-5px transition-2ms"><i class="fab fa-twitter text-3 p-relative top-1"></i></a>
												</li>
												<li class="nav-item py-2 d-none d-lg-inline-flex">
													<a href="http://www.instagram.com/" target="_blank" title="Instagram" class="text-color-dark text-color-hover-primary text-3 anim-hover-translate-top-5px transition-2ms"><i class="fab fa-instagram text-3 p-relative top-1"></i></a>
												</li>
												<li class="nav-item py-2 pe-0 d-none d-lg-inline-flex">
													<a href="http://www.linkedin.com/" target="_blank" title="Linkedin" class="text-color-dark text-color-hover-primary text-3 anim-hover-translate-top-5px transition-2ms"><i class="fab fa-linkedin-in text-3 p-relative top-1"></i></a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container header-container-height-sm container p-static">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.html">
											<img alt="Porto" width="123" height="32" src="<?php echo esc_url( get_theme_file_uri( '/assets/img/demos/business-consulting-4/logo.png')) ?>">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links">
										<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-border-radius header-nav-main-text-capitalize header-nav-main-text-size-4 header-nav-main-arrows header-nav-main-full-width-mega-menu header-nav-main-mega-menu-bg-hover header-nav-main-effect-2">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a href="demo-business-consulting-4.html" class="nav-link active">
															Home
														</a>
													</li>
													<li class="dropdown dropdown-mega">
														<a class="dropdown-item dropdown-toggle" href="elements.html">

															Elements

														</a>
														<ul class="dropdown-menu border-top border-top-light mt-0">

															<li>
																<div class="dropdown-mega-content container px-2">
																	<div class="row px-1">
																		<div class="col-lg-3">
																			<span class="dropdown-mega-sub-title">Elements 1</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="elements-accordions.html">Accordions</a></li>
																				<li><a class="dropdown-item" href="elements-alerts.html">Alerts</a></li>
																				<li><a class="dropdown-item" href="elements-animations.html">Animations  <span class="tip tip-dark p-relative bottom-2">hot</span></a></li>
																				<li><a class="dropdown-item" href="elements-arrows.html">Arrows</a></li>
																				<li><a class="dropdown-item" href="elements-badges.html">Badges</a></li>
																				<li><a class="dropdown-item" href="elements-before-after.html">Before / After</a></li>
																				<li><a class="dropdown-item" href="elements-blockquotes.html">Blockquotes</a></li>
																				<li><a class="dropdown-item" href="elements-buttons.html">Buttons</a></li>
																				<li><a class="dropdown-item" href="elements-call-to-action.html">Call to Action</a></li>
																				<li><a class="dropdown-item" href="elements-cards.html">Cards</a></li>
																				<li><a class="dropdown-item" href="elements-carousels.html">Carousels</a></li>
																				<li><a class="dropdown-item" href="elements-cascading-images.html">Cascading Images</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3">
																			<span class="dropdown-mega-sub-title">Elements 2</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="elements-content-rotate.html">Content Rotate</a></li>
																				<li><a class="dropdown-item" href="elements-countdowns.html">Countdowns</a></li>
																				<li><a class="dropdown-item" href="elements-counters.html">Counters</a></li>
																				<li><a class="dropdown-item" href="elements-dividers.html">Dividers</a></li>
																				<li><a class="dropdown-item" href="elements-forms.html">Forms</a></li>
																				<li><a class="dropdown-item" href="elements-headings.html">Headings</a></li>
																				<li><a class="dropdown-item" href="elements-icons.html">Icons</a></li>
																				<li><a class="dropdown-item" href="elements-icon-boxes.html">Icon Boxes</a></li>
																				<li><a class="dropdown-item" href="elements-image-frames.html">Image Frames  <span class="tip tip-dark p-relative bottom-2">hot</span></a></li>
																				<li><a class="dropdown-item" href="elements-image-gallery.html">Image Gallery</a></li>
																				<li><a class="dropdown-item" href="elements-image-hotspots.html">Image Hotspots</a></li>
																				<li><a class="dropdown-item" href="elements-lightboxes.html">Lightboxes</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3">
																			<span class="dropdown-mega-sub-title">Elements 3</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="elements-lists.html">Lists</a></li>						
																				<li><a class="dropdown-item" href="elements-maps.html">Maps</a></li>
																				<li><a class="dropdown-item" href="elements-medias.html">Medias</a></li>
																				<li><a class="dropdown-item" href="elements-modals.html">Modals</a></li>
																				<li><a class="dropdown-item" href="elements-parallax.html">Parallax</a></li>
																				<li><a class="dropdown-item" href="elements-particles.html">Particles</a></li>
																				<li><a class="dropdown-item" href="elements-posts.html">Posts</a></li>
																				<li><a class="dropdown-item" href="elements-pricing-tables.html">Pricing Tables</a></li>
																				<li><a class="dropdown-item" href="elements-process.html">Process</a></li>
																				<li><a class="dropdown-item" href="elements-progressbars.html">Progress Bars</a></li>
																				<li><a class="dropdown-item" href="elements-random-images.html">Random Images</a></li>
																				<li><a class="dropdown-item" href="elements-read-more.html">Read More</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3">
																			<span class="dropdown-mega-sub-title">Elements 4</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="elements-sections.html">Sections</a></li>
																				<li><a class="dropdown-item" href="elements-shape-dividers.html">Shape Dividers</a></li>
																				<li><a class="dropdown-item" href="elements-star-ratings.html">Star Ratings</a></li>
																				<li><a class="dropdown-item" href="elements-sticky-elements.html">Sticky Elements</a></li>
																				<li><a class="dropdown-item" href="elements-tables.html">Tables</a></li>
																				<li><a class="dropdown-item" href="elements-tabs.html">Tabs</a></li>
																				<li><a class="dropdown-item" href="elements-testimonials.html">Testimonials</a></li>
																				<li><a class="dropdown-item" href="elements-toggles.html">Toggles</a></li>
																				<li><a class="dropdown-item" href="elements-tooltips-popovers.html">Tooltips & Popovers</a></li>
																				<li><a class="dropdown-item" href="elements-typography.html">Typography</a></li>
																				<li><a class="dropdown-item" href="elements-word-rotator.html">Word Rotator</a></li>
																				<li><a class="dropdown-item" href="elements-360-image-viewer.html">360º Image Viewer</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li>
														<a class="nav-link" href="demo-business-consulting-4-about-us.html">
															About Us
														</a>
													</li>
													<li class="dropdown">
														<a class="nav-link dropdown-toggle" href="demo-business-consulting-4-services.html">
															Services
														</a>
														<ul class="dropdown-menu">
															<li>
																<a href="demo-business-consulting-4-services-detail.html" class="dropdown-item">Strategic Planning</a>
															</li>
															<li>
																<a href="demo-business-consulting-4-services-detail.html" class="dropdown-item">Financial Clean-Up</a>
															</li>
															<li>
																<a href="demo-business-consulting-4-services-detail.html" class="dropdown-item">Cash Flow Planning</a>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">

															Portfolio

														</a>
														<ul class="dropdown-menu">

															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Single Project</a>
																<ul class="dropdown-menu">

																	<li><a class="dropdown-item" href="portfolio-single-wide-slider.html">Wide Slider</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-small-slider.html">Small Slider</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-full-width-slider.html">Full Width Slider</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-gallery.html">Gallery</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-carousel.html">Carousel</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-medias.html">Medias</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-full-width-video.html">Full Width Video</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-masonry-images.html">Masonry Images</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-left-sidebar.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-right-sidebar.html">Right Sidebar</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-sticky-sidebar.html">Sticky Sidebar</a></li>
																	<li><a class="dropdown-item" href="portfolio-single-extended.html">Extended</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Grid Layouts</a>
																<ul class="dropdown-menu">

																	<li><a class="dropdown-item" href="portfolio-grid-1-column.html">1 Column</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-2-columns.html">2 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-3-columns.html">3 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-4-columns.html">4 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-5-columns.html">5 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-6-columns.html">6 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-no-margins.html">No Margins</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-full-width-no-margins.html">Full Width No Margins</a></li>
																	<li><a class="dropdown-item" href="portfolio-grid-1-column-title-and-description.html">Title and Description</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Masonry Layouts</a>
																<ul class="dropdown-menu">

																	<li><a class="dropdown-item" href="portfolio-masonry-2-columns.html">2 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-3-columns.html">3 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-4-columns.html">4 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-5-columns.html">5 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-6-columns.html">6 Columns</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-no-margins.html">No Margins</a></li>
																	<li><a class="dropdown-item" href="portfolio-masonry-full-width.html">Full Width</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Sidebar Layouts</a>
																<ul class="dropdown-menu">

																	<li><a class="dropdown-item" href="portfolio-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="portfolio-sidebar-right.html">Right Sidebar</a></li>
																	<li><a class="dropdown-item" href="portfolio-sidebar-left-and-right.html">Left and Right Sidebars</a></li>
																	<li><a class="dropdown-item" href="portfolio-sidebar-sticky.html">Sticky Sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Ajax</a>
																<ul class="dropdown-menu">

																	<li><a class="dropdown-item" href="portfolio-ajax-page.html">Ajax on Page</a></li>
																	<li><a class="dropdown-item" href="portfolio-ajax-modal.html">Ajax on Modal</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Extra</a>
																<ul class="dropdown-menu">

																	<li><a class="dropdown-item" href="portfolio-extra-timeline.html">Timeline</a></li>
																	<li><a class="dropdown-item" href="portfolio-extra-lightbox.html">Lightbox</a></li>
																	<li><a class="dropdown-item" href="portfolio-extra-load-more.html">Load More</a></li>
																	<li><a class="dropdown-item" href="portfolio-extra-infinite-scroll.html">Infinite Scroll</a></li>
																	<li><a class="dropdown-item" href="portfolio-extra-lazy-load-masonry.html">Lazy Load Masonry</a></li>
																	<li><a class="dropdown-item" href="portfolio-extra-pagination.html">Pagination</a></li>
																	<li><a class="dropdown-item" href="portfolio-extra-combination-filters.html">Combination Filters</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li>
														<a class="nav-link" href="demo-business-consulting-4-team.html">
															Team
														</a>
													</li>
													<li>
														<a class="nav-link" href="demo-business-consulting-4-blog.html">
															Blog
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<a href="demo-business-consulting-4-contact-us.html" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 text-capitalize text-2-5 ms-3 me-2 d-block d-md-none d-xl-block anim-hover-translate-right-5px transition-2ms">Contact Us <i class="fas fa-arrow-right ms-2"></i></a>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									<div class="header-nav-features header-nav-features-no-border ps-2 order-1 order-lg-2">
										<div class="header-nav-feature header-nav-features-search d-inline-flex">
											<a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch" aria-label="Search"><i class="fas fa-search header-nav-top-icon text-3"></i></a>
											<div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
												<form role="search" action="page-search-results.html" method="get">
													<div class="simple-search input-group">
														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
														<button class="btn" type="submit" aria-label="Search">
															<i class="fas fa-search header-nav-top-icon"></i>
														</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>