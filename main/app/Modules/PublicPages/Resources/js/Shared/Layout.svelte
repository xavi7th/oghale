<script>
	import { page } from "@inertiajs/inertia-svelte";

	$: ({ errors } = $page.props);
</script>

<!--page start-->
<div class="page">
	<!--header start-->
	<header id="masthead" class="header ttm-header-style-01">
		<!-- ttm-topbar-wrapper -->
		<div class="ttm-topbar-wrapper">
			<div class="ttm-topbar-content">
				<div class="container">
					<ul class="top-contact text-left">
						<li><i class="la la-map-marker"></i>24 Tech Roqad st Ny 10023</li>
						<li><i class="la la-envelope-o"></i><a href="mailto:info@example.com.com">info@example.com</a>
						</li>
					</ul>
				</div>
				<div class="topbar-right text-right">
					<ul class="top-contact">
						<li><i class="fa fa-clock-o"></i>Office Hour: 08:00am - 6:00pm</li>
					</ul>
					<div class="ttm-social-links-wrapper list-inline">
						<ul class="social-icons">
							<li><a href="#" class=" tooltip-bottom" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#" class=" tooltip-bottom" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="#" class=" tooltip-bottom" data-tooltip="Flickr"><i class="fa fa-flickr"></i></a>
							</li>
							<li><a href="#" class=" tooltip-bottom" data-tooltip="Linkedin"><i class="fa fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
					<div class="header-btn">
						<a class="ttm-btn ttm-btn-size-md  ttm-btn-bgcolor-skincolor" href="#">Get A Quote</a>
					</div>
				</div>
			</div>
		</div>
		<!-- ttm-topbar-wrapper end -->
		<!-- ttm-header-wrap -->
		<div class="ttm-header-wrap">
			<!-- ttm-stickable-header-w -->
			<div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
				<div id="site-header-menu" class="site-header-menu">
					<div class="site-header-menu-inner ttm-stickable-header">
						<div class="container">
							<!-- site-branding -->
							<div class="site-branding">
								<a class="home-link" href="index.html" title="Altech" rel="home">
                                  <img id="logo-img" class="img-center lazyload" data-src="images/logo.png" alt="logo">
                              </a>
							</div>
							<!-- site-branding end -->
							<!--site-navigation -->
							<div id="site-navigation" class="site-navigation">
								<div class="ttm-rt-contact">
									<!-- header-icons -->
									<div class="ttm-header-icons ">
										<span class="ttm-header-icon ttm-header-cart-link">
                                          <a href="#"><i class="ti ti-shopping-cart"></i>
                                              <span class="number-cart">0</span>
										</a>
										</span>
										<div class="ttm-header-icon ttm-header-search-link">
											<a href="#"><i class="ti ti-search"></i></a>
											<div class="ttm-search-overlay">
												<form method="get" class="ttm-site-searchform" action="#">
													<div class="w-search-form-h">
														<div class="w-search-form-row">
															<div class="w-search-input">
																<input type="search" class="field searchform-s" name="s" placeholder="Type Word Then Enter...">
																<button type="submit">
                                                                  <i class="ti ti-search"></i>
                                                              </button>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<!-- header-icons end -->
								</div>
								<div class="ttm-menu-toggle">
									<input type="checkbox" id="menu-toggle-form" />
									<label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                      <span class="toggle-block toggle-blocks-1"></span>
                                      <span class="toggle-block toggle-blocks-2"></span>
                                      <span class="toggle-block toggle-blocks-3"></span>
                                  </label>
								</div>
								<nav id="menu" class="menu">
									<ul class="dropdown">
										<li class="active"><a href="#">Home</a>
											<ul>
												<li class="active"><a href="index.html">Homepage 1</a>
												</li>
												<li><a href="home-2.html">Homepage 2</a>
												</li>
												<li><a href="home-3.html">Homepage 3</a>
												</li>
												<li><a href="#">Header Styles</a>
													<ul>
														<li><a href="index.html">Header Style 01</a>
														</li>
														<li><a target="_blank" href="header-style-02.html">Header Style 02</a>
														</li>
														<li><a target="_blank" href="header-style-03.html">Header Style 03</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="#">Pages</a>
											<ul>
												<li><a href="aboutus-01.html">About Us 1</a>
												</li>
												<li><a href="aboutus-02.html">About Us 2</a>
												</li>
												<li><a href="services-01.html">Services 1</a>
												</li>
												<li><a href="services-02.html">Services 2</a>
												</li>
												<li><a href="our-expert.html">Our Expert</a>
												</li>
												<li><a href="faq.html">FAQs</a>
												</li>
												<li><a href="contact-01.html">Contact Us 1</a>
												</li>
												<li><a href="contact-02.html">Contact Us 2</a>
												</li>

												<li><a href="error.html">Error Page</a>
												</li>
												<li><a href="element.html">Elements</a>
												</li>
											</ul>
										</li>
										<li><a href="#">Services</a>
											<ul>
												<li><a href="it-consultancy.html">IT Consultancy</a>
												</li>
												<li><a href="digital-services.html">Digital Services</a>
												</li>
												<li><a href="advisory-services.html">Advisory Services</a>
												</li>
												<li><a href="data-structuring.html">Data Structuring</a>
												</li>
												<li><a href="experience-design.html">Experience Design</a>
												</li>
												<li><a href="content-engineering.html">Content Engineering</a>
												</li>
											</ul>
										</li>
										<li><a href="#">Project</a>
											<ul>
												<li><a href="project-style-01.html">Project Style 1</a>
												</li>
												<li><a href="project-style-02.html">Project Style 2</a>
												</li>
												<li><a href="#">Project Single</a>
													<ul>
														<li><a href="single-style-01.html">Single Style 1</a>
														</li>
														<li><a href="single-style-02.html">Single Style 2</a>
														</li>
														<li><a href="single-style-03.html">Single Style 3</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="#">Blog</a>
											<ul>
												<li><a href="blog.html">Blog Classic</a>
												</li>
												<li><a href="blog-grid.html">Blog Grid View</a>
												</li>
												<li><a href="blog-top-image.html">Blog Top Image</a>
												</li>
												<li><a href="blog-left-image.html">Blog Left Image</a>
												</li>
												<li><a href="single-blog.html">Blog Single View</a>
												</li>
											</ul>
										</li>
										<li><a href="#">Shop</a>
											<ul>
												<li><a href="shop.html">Default Shop</a>
												</li>
												<li><a href="product-details.html">Single Product Details</a>
												</li>
												<li><a href="cart.html">Cart</a>
												</li>
												<li><a href="checkout.html">Checkout</a>
												</li>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
							<!-- site-navigation end-->
						</div>
					</div>
				</div>
			</div>
			<!-- ttm-stickable-header-w end-->
		</div>
		<!--ttm-header-wrap end -->
	</header>
	<!--header end-->
	<slot />
	<!--footer start-->
	<footer class="footer widget-footer clearfix">
		<div class="first-footer ttm-bgcolor-skincolor ttm-bg ttm-bgimage-yes bg-img1">
			<div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
			<div class="container">
				<div class="row align-items-md-center">
					<div class="col-lg-4 col-md-4 col-sm-12 order-md-2">
						<div class="footer-logo text-sm-center">
							<img data-src="images/footer-logo.png" class="lazyload" alt="footer-logo">
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 order-md-1">
						<div class="text-left">
							<!--  featured-icon-box -->
							<div class="featured-icon-box left-icon icon-align-top">
								<div class="featured-icon">
									<!--  featured-icon -->
									<div class="ttm-icon ttm-icon_element-color-white ttm-icon_element-size-md">
										<i class="ti ti-location-pin"></i>
										<!--  ttm-icon -->
									</div>
								</div>
								<div class="featured-content">
									<!--  featured-content -->
									<div class="featured-desc">
										<p>4789 Melmorn Street, Zakilahon Ton Mashintron Town USA</p>
									</div>
								</div>
							</div>
							<!--  featured-icon-box END -->
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 order-md-3">
						<div class="text-sm-right">
							<a class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-icon-btn-left ttm-btn-color-white" href="mailto:Info@example.com" title=""> Info@example.com <i class="fa fa-envelope-o"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="second-footer ttm-textcolor-white bg-img2">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
						<div class="widget widget_text  clearfix">
							<h3 class="widget-title">About Our Company</h3>
							<div class="textwidget widget-text">
								We are the best world Information Technology Company. Providing the highest quality in hardware &amp;
								Network solutions. About more than 20 years of experience and 1000 of innovative achievements.
							</div>
							<div class="quicklink-box">
								<!--  featured-icon-box -->
								<div class="featured-icon-box left-icon">
									<div class="featured-icon">
										<!--  featured-icon -->
										<div
											class="ttm-icon ttm-icon_element-style-round ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md ttm-icon_element-style-round">
											<span class="flaticon flaticon-clock"></span>
											<!--  ttm-icon -->
										</div>
									</div>
									<div class="featured-content">
										<!--  featured-content -->
										<div class="featured-desc">
											<!--  featured-desc -->
											<p>Talk To Our Support</p>
										</div>
										<div class="featured-title">
											<!--  featured-title -->
											<h5>+1 002-123-4567</h5>
										</div>
									</div>
								</div>
								<!--  featured-icon-box END -->
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
						<div class="widget link-widget clearfix">
							<h3 class="widget-title">Quick Links</h3>
							<ul id="menu-footer-services">
								<li><a href="#">Make Appointment</a>
								</li>
								<li><a href="#">Customer Services</a>
								</li>
								<li><a href="#">Department Services</a>
								</li>
								<li><a href="#">About Company</a>
								</li>
								<li><a href="#">Our Case Studies</a>
								</li>
								<li><a href="#">Free Consultation</a>
								</li>
								<li><a href="#">Meet Our Experts</a>
								</li>
								<li><a href="#">Our Business Growth</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
						<div class="widget widget_text clearfix">
							<h3 class="widget-title">Latest News</h3>
							<ul class="widget-post ttm-recent-post-list">
								<li>
									<a href="single-blog.html"><img data-src="images/blog/01.jpg" class="lazyload" alt="post-img"></a>
									<a href="single-blog.html">Define World Best IT Solution Technology</a>
									<span class="post-date"><i class="fa fa-calendar"></i>May 01, 2019</span>
								</li>
								<li>
									<a href="single-blog.html"><img data-src="images/blog/02.jpg" class="lazyload" alt="post-img"></a>
									<a href="single-blog.html">You Must Try 20 Secret Of Digital Transform</a>
									<span class="post-date"><i class="fa fa-calendar"></i>May 03, 2019</span>
								</li>
								<li>
									<a href="single-blog.html"><img data-src="images/blog/03.jpg" class="lazyload" alt="post-img"></a>
									<a href="single-blog.html">10 PHP Frameworks You Need To Use Anywhere</a>
									<span class="post-date"><i class="fa fa-calendar"></i>May 05, 2019</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
						<div class="widget flicker_widget clearfix">
							<h3 class="widget-title">News Letter</h3>
							<div class="textwidget widget-text">
								Sign up today for hints, tips and the latest product news
								<form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
									<div class="mailchimp-inputbox clearfix" id="subscribe-content">
										<i class="fa fa-envelope"></i>
										<input type="email" name="email" placeholder="Email Address.." required="">
										<input type="submit" value="">
									</div>
									<div id="subscribe-msg"></div>
								</form>
								<h5 class="mb-20">Follow Us On</h5>
								<div class="social-icons circle social-hover">
									<ul class="list-inline">
										<li class="social-facebook">
											<a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
										</li>
										<li class="social-twitter">
											<a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
										</li>
										<li class="social-flickr">
											<a class=" tooltip-top" target="_blank" href="#" data-tooltip="flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a>
										</li>
										<li class="social-linkedin">
											<a class=" tooltip-top" target="_blank" href="" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer-text ttm-bgcolor-darkgrey ttm-textcolor-white">
			<div class="container">
				<div class="row copyright">
					<div class="col-md-6">
						<div class="">
							<span>Copyright © 2019&nbsp;<a href="#">Altech</a> Template by <a href="https://themetechmount.com/" target="_blank">Themetechmount</a></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="text-md-right res-767-mt-10">
							<div class="d-lg-inline-flex">
								<ul id="menu-footer-menu" class="footer-nav-menu">
									<li><a href="#">About Us</a>
									</li>
									<li><a href="#">Services</a>
									</li>
									<li><a href="#">Privacy</a>
									</li>
								</ul>
								<div class="float-md-right ml-20 res-767-ml-0">
									<img data-src="images/footer-payment-img.png" class="lazyload" alt="payment-img">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--footer end-->
</div>
<!-- page end -->
