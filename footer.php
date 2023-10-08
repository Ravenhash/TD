<footer id="footer" class="position-relative bg-dark border-top-0">		
				<div class="container pt-5 pb-3">
					<div class="row pt-5">
						<div class="col-lg-4">
							<a href="demo-business-consulting-4.html" class="text-decoration-none">
								<img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/demos/business-consulting-4/logo-light.png')) ?>" width="123" height="32" class="img-fluid mb-4" alt="Porto" />
							</a>
							<p class="text-3-5 font-weight-medium pe-lg-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque rutrum pellentesqu. </p>
							<ul class="list list-unstyled">
								<li class="d-flex align-items-center mb-4">
									<i class="icon icon-envelope text-color-light text-5 font-weight-bold position-relative top-1 me-3-5"></i>
									<a href="mailto:porto@business-consulting-4.com" class="d-inline-flex align-items-center text-decoration-none text-color-light text-color-hover-primary font-weight-semibold text-4-5">porto@domain.com</a>
								</li>
								<li class="d-flex align-items-center mb-4">
									<i class="icon icon-phone text-color-light text-5 font-weight-bold position-relative top-1 me-3-5"></i>
									<a href="tel:8001234567" class="d-inline-flex align-items-center text-decoration-none text-color-light text-color-hover-primary font-weight-semibold text-4-5">800-123-4567</a>
								</li>
							</ul>
							<ul class="social-icons social-icons-clean social-icons-medium">
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" target="_blank" title="Facebook">
										<i class="fab fa-facebook-f text-color-light"></i>
									</a>
								</li>
								<li class="social-icons-twitter">
									<a href="http://www.twitter.com/" target="_blank" title="Twitter">
										<i class="fab fa-twitter text-color-light"></i>
									</a>
								</li>
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" target="_blank" title="Instagram">
										<i class="fab fa-instagram text-color-light"></i>
									</a>
								</li>
								<li class="social-icons-linkedin">
									<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
										<i class="fab fa-linkedin text-color-light"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-8">
							<div class="row mb-5-5">
								<div class="col-lg-6 mb-4 mb-lg-0">
									<h4 class="text-color-light font-weight-bold mb-3">Navigation</h4>
									<ul class="list list-unstyled columns-lg-2">
										<li><a href="#" class="text-color-grey text-color-hover-primary">Home</a></li>
										<li><a href="#" class="text-color-grey text-color-hover-primary">About Us</a></li>
										<li><a href="#" class="text-color-grey text-color-hover-primary">Our Services</a></li>
										<li><a href="#" class="text-color-grey text-color-hover-primary">Consultants</a></li>
										<li><a href="#" class="text-color-grey text-color-hover-primary">Blog</a></li>
										<li><a href="#" class="text-color-grey text-color-hover-primary">Contact Us</a></li>
									</ul>
								</div>
								<div class="col-lg-6">
									<h4 class="text-color-light font-weight-bold mb-3">Extra Links</h4>
									<ul class="list list-unstyled columns-lg-2">
										<li><a href="#" class="text-color-grey text-color-hover-primary">Elements</a></li>
										<li><a href="#" class="text-color-grey text-color-hover-primary">Portfolio</a></li>
										<li><a href="#" class="text-color-grey text-color-hover-primary">Careers</a></li>
										<li><a href="#" class="text-color-grey text-color-hover-primary">Shop Pages</a></li>
										<li><a href="#" class="text-color-grey text-color-hover-primary">Testimonials</a></li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="alert alert-success d-none" id="newsletterSuccess">
										<strong>Success!</strong> You've been added to our email list.
									</div>
									<div class="alert alert-danger d-none" id="newsletterError"></div>
									<div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
										<h4 class="text-color-light ws-nowrap me-3 mb-3 mb-lg-0">Subscribe to Newsletter:</h4>
										<form id="newsletterForm" class="form-style-3 w-100" action="php/newsletter-subscribe.php" method="POST">
											<div class="d-flex">
												<input class="form-control bg-color-light border-0 box-shadow-none" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text" />
												<button class="btn btn-primary ms-2 btn-px-3 btn-py-2 font-weight-bold" type="submit">
													Go
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright bg-transparent">
					<div class="container">
						<hr class="bg-color-light opacity-1">
						<div class="row">
							<div class="col mt-4 mb-4 pb-5">
								<p class="text-center text-3 mb-0">TechData IT Services © 2023. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="<?php echo esc_url( get_theme_file_uri( '/assets/vendor/plugins/js/plugins.min.js' ) ); ?>"></script>
		<script src="<?php echo esc_url( get_theme_file_uri( '/assets/vendor/particles/particles.min.js' ) ); ?>"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo esc_url( get_theme_file_uri( '/assets/js/theme.js' ) ); ?>"></script>

		<!-- Demo -->
		<script src="<?php echo esc_url( get_theme_file_uri( '/assets/js/demos/demo-business-consulting-4.js' ) ); ?>"></script>

		<!-- Theme Custom -->
		<script src="<?php echo esc_url( get_theme_file_uri( '/assets/js/custom.js' ) ); ?>"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo esc_url( get_theme_file_uri( '/assets/js/theme.init.js' ) ); ?>"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "New York, NY 10017",
				html: "<strong>Porto</strong><br>New York, NY 10017",
				icon: {
					image: "<?php echo esc_url( get_theme_file_uri( '/assets/img/demos/business-consulting-4/map-pin.png')) ?>",
					iconsize: [31, 40],
					iconanchor: [14, 40]
				},
				popup: false
			},{
				address: "Chicago, IL",
				html: "<strong>Porto</strong><br>Chicago, IL",
				icon: {
					image: "<?php echo esc_url( get_theme_file_uri( '/assets/img/demos/business-consulting-4/map-pin.png')) ?>",
					iconsize: [31, 40],
					iconanchor: [14, 40]
				},
				popup: false
			},{
				address: "Louisville",
				html: "<strong>Porto</strong><br>Louisville",
				icon: {
					image: "<?php echo esc_url( get_theme_file_uri( '/assets/img/demos/business-consulting-4/map-pin.png')) ?>",
					iconsize: [31, 40],
					iconanchor: [14, 40]
				},
				popup: false
			}];

			// Map Initial Location
			var initLatitude = 40.75198;
			var initLongitude = -73.96978;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 5
			};

			var map = $('#googlemaps').gMap(mapSettings),
				mapRef = $('#googlemaps').data('gMap.reference');

			var mapRef = $('#googlemaps').data('gMap.reference');

			// Styles from https://snazzymaps.com/
			var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#F4F9FD"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#F4F9FD"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

			var styledMap = new google.maps.StyledMapType(styles, {
				name: 'Styled Map'
			});

			mapRef.mapTypes.set('map_style', styledMap);
			mapRef.setMapTypeId('map_style');

		</script>
<?php wp_footer(); ?>
</body>
</html>