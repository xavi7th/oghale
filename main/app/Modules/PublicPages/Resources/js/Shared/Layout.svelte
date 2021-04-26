<script>
	import { page } from "@inertiajs/inertia-svelte";
  import { inertia } from '@inertiajs/inertia-svelte';

	$: ({ errors } = $page.props);
</script>

<!--page start-->
<div class="page">
	<!--header start-->
	<header id="masthead" class="header ttm-header-style-01">
		<div class="top">
			<div class="container">
				<div class="left-side clearfix">
					<span class="font3"><i class="fa fa-map-marker"></i> 24 Tech Roqad st Ny 10023</span>
					<span class="font3"><i class="fa fa-envelope-o"></i> <a
							href="mailto:info@example.com.com">info@example.com</a></span>
					<span><i class="fa fa-clock-o"></i> Office Hour: 08:00am - 6:00pm</span>
				</div>
				<div class="right-side">
					<div class="social">
						<span><a href="#" class=" tooltip-bottom" data-tooltip="Facebook"><i
									class="fa fa-facebook"></i></a></span>
						<span><a href="#" class=" tooltip-bottom" data-tooltip="Twitter"><i
									class="fa fa-twitter"></i></a></span>
						<span><a href="#" class=" tooltip-bottom" data-tooltip="Flickr"><i
									class="fa fa-flickr"></i></a></span>
						<span><a href="#" class=" tooltip-bottom" data-tooltip="Linkedin"><i
									class="fa fa-linkedin"></i></a></span>
					</div>
					<a href="#" class="quote font3">get a quote</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="btm-header">
			<div class="container">
				<div class="mb-relative">
					<label for="side-menu" class="menu-bar">
						<div class="hambugar"></div>
						<div class="hambugar"></div>
						<div class="hambugar"></div>
					</label>
					<div class="logo" id="logo">
						<img src="/img/logo.png" alt="logo" style="display:block; width: 100%;">
					</div>
					<div class="nav-dsk">
						<ul>
							<li class="main-nav-dsk">
								<a href="#" class="font1">Home</a>
								<ul class="drop-dsk">
									<li><a href="#" class="font1">Homepage 1</a></li>
									<li><a href="#" class="font1">Homepage 2</a></li>
									<li><a href="#" class="font1">Homepage 3</a></li>
									<li class="inner-main-nav-dsk">
										<a href="#" class="font1">Header Styles</a>
										<ul class="drop-dsk-2">
											<li><a href="#" class="font1">Header Style 01</a></li>
											<li><a href="#" class="font1">Header Style 02</a></li>
											<li><a href="#" class="font1">Header Style 03</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="main-nav-dsk">
								<a href="#" class="font1">Pages</a>
								<ul class="drop-dsk">
									<li><a href="#" class="font1">About Us 1</a></li>
									<li><a href="#" class="font1">About Us 2</a></li>
									<li><a href="#" class="font1">Services 1</a></li>
									<li><a href="#" class="font1">Services 2</a></li>
									<li><a href="#" class="font1">Our Expert</a></li>
									<li><a href="#" class="font1">FAQs</a></li>
									<li><a href="#" class="font1">Contact Us </a></li>
									<li><a href="#" class="font1">Contact Us 2</a></li>
									<li><a href="#" class="font1">Error Page</a></li>
									<li><a href="#" class="font1">Elements</a></li>
								</ul>
							</li>
							<li class="main-nav-dsk">
								<a href="#" class="font1">Services</a>
								<ul class="drop-dsk">
									<li><a href="#" class="font1">IT Consultancy</a></li>
									<li><a href="#" class="font1">Digital Services</a></li>
									<li><a href="#" class="font1">Advisory Services</a></li>
									<li><a href="#" class="font1">Data Structuring</a></li>
									<li><a href="#" class="font1">Experience Design</a></li>
									<li><a href="#" class="font1">Content Engineering</a></li>
								</ul>
							</li>
							<li class="main-nav-dsk">
								<a href="#" class="font1">Project</a>
								<ul class="drop-dsk">
									<li><a href="#" class="font1">Project Style 1</a></li>
									<li><a href="#" class="font1">Project Style 2</a></li>
									<li class="inner-main-nav-dsk">
										<a href="#" class="font1">Project Single</a>
										<ul class="drop-dsk-2">
											<li><a href="#" class="font1">Single Style 1</a></li>
											<li><a href="#" class="font1">Single Style 2</a></li>
											<li><a href="#" class="font1">Single Style 3</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="main-nav-dsk">
								<a href="#" class="font1">Blog</a>
								<ul class="drop-dsk">
									<li><a href="#" class="font1">Action</a></li>
									<li><a href="#" class="font1">Blog Classic</a></li>
									<li><a href="#" class="font1">Blog Grid View</a></li>
									<li><a href="#" class="font1">Blog Top Image</a></li>
									<li><a href="#" class="font1">Blog Left Image</a></li>
									<li><a href="#" class="font1">Blog Single View</a></li>
								</ul>
							</li>
							<li class="main-nav-dsk">
								<a href="#" class="font1">Shop</a>
								<ul class="drop-dsk">
									<li><a href="#" class="font1">Action</a></li>
									<li><a href="#" class="font1">Default Shop</a></li>
									<li><a href="#" class="font1">Single Product Details</a></li>
									<li><a href="#" class="font1">Cart</a></li>
									<li><a href="#" class="font1">Checkout</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="search-wrap">
						<form action="">
							<input type="text" class="font3" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div>

					<div class="mb-get-quotes">
						<a href="#" class="font3">get a quote</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</header>

	<div class="mobile-view">
		<input type="checkbox" id="side-menu">
		<div class="mb-nav-display">
			<div class="mb-search-wrap">
				<form action="">
					<input type="text" class="font3" placeholder="Search...">
					<button><i class="fa fa-search"></i></button>
				</form>
			</div>

			<ul>
				<li>
					<a href="#" class="font1">Home</a>
					<i class="fa fa-chevron-down"></i>
					<ul class="mb-drop">
						<li><a href="#" class="font1">Homepage 1</a></li>
						<li><a href="#" class="font1">Homepage 2</a></li>
						<li><a href="#" class="font1">Homepage 3</a></li>
						<li class="mb-sec-drop">
							<a href="#" class="font1">Header Styles</a>
							<i class="fa fa-chevron-down"></i>
							<ul class="mb-in-drop">
								<li><a href="#" class="font1">Header Style 01</a></li>
								<li><a href="#" class="font1">Header Style 02</a></li>
								<li><a href="#" class="font1">Header Style 03</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="font1">Pages</a>
					<i class="fa fa-chevron-down"></i>
					<ul class="mb-drop">
						<li><a href="#" class="font1">About Us 1</a></li>
						<li><a href="#" class="font1">About Us 2</a></li>
						<li><a href="#" class="font1">Services 1</a></li>
						<li><a href="#" class="font1">Services 2</a></li>
						<li><a href="#" class="font1">Our Expert</a></li>
						<li><a href="#" class="font1">FAQs</a></li>
						<li><a href="#" class="font1">Contact Us </a></li>
						<li><a href="#" class="font1">Contact Us 2</a></li>
						<li><a href="#" class="font1">Error Page</a></li>
						<li><a href="#" class="font1">Elements</a></li>
					</ul>
				</li>
				<li>
					<a href="#" class="font1">Services</a>
					<i class="fa fa-chevron-down"></i>
					<ul class="mb-drop">
						<li><a href="#" class="font1">IT Consultancy</a></li>
						<li><a href="#" class="font1">Digital Services</a></li>
						<li><a href="#" class="font1">Advisory Services</a></li>
						<li><a href="#" class="font1">Data Structuring</a></li>
						<li><a href="#" class="font1">Experience Design</a></li>
						<li><a href="#" class="font1">Content Engineering</a></li>
					</ul>
				</li>
				<li>
					<a href="#" class="font1">Project</a>
					<i class="fa fa-chevron-down"></i>
					<ul class="mb-drop">
						<li><a href="#" class="font1">Project Style 1</a></li>
						<li><a href="#" class="font1">Project Style 2</a></li>
						<li class="mb-sec-drop">
							<a href="#" class="font1">Project Single</a>
							<i class="fa fa-chevron-down"></i>
							<ul class="mb-in-drop">
								<li><a href="#" class="font1">Single Style 1</a></li>
								<li><a href="#" class="font1">Single Style 2</a></li>
								<li><a href="#" class="font1">Single Style 3</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
				<li class="main-nav-dsk">
					<a href="#" class="font1">Blog</a>
					<i class="fa fa-chevron-down"></i>
					<ul class="mb-drop">
						<li><a href="#" class="font1">Action</a></li>
						<li><a href="#" class="font1">Blog Classic</a></li>
						<li><a href="#" class="font1">Blog Grid View</a></li>
						<li><a href="#" class="font1">Blog Top Image</a></li>
						<li><a href="#" class="font1">Blog Left Image</a></li>
						<li><a href="#" class="font1">Blog Single View</a></li>
					</ul>
				</li>
				<li>
					<a href="#" class="font1">Shop</a>
					<i class="fa fa-chevron-down"></i>
					<ul class="mb-drop">
						<li><a href="#" class="font1">Action</a></li>
						<li><a href="#" class="font1">Default Shop</a></li>
						<li><a href="#" class="font1">Single Product Details</a></li>
						<li><a href="#" class="font1">Cart</a></li>
						<li><a href="#" class="font1">Checkout</a></li>
					</ul>
				</li>
			</ul>

			<div class="bottom">
				<div class="container">
					<div class="mb-details clearfix">
						<div class="social">
							<span><a href="#" class=" tooltip-bottom" data-tooltip="Facebook"><i
										class="fa fa-facebook"></i></a></span>
							<span><a href="#" class=" tooltip-bottom" data-tooltip="Twitter"><i
										class="fa fa-twitter"></i></a></span>
							<span><a href="#" class=" tooltip-bottom" data-tooltip="Flickr"><i
										class="fa fa-flickr"></i></a></span>
							<span><a href="#" class=" tooltip-bottom" data-tooltip="Linkedin"><i
										class="fa fa-linkedin"></i></a></span>
						</div>
						<div class="details-btn">
							<span><i class="fa fa-map-marker"></i> 24 Tech Roqad st Ny 10023</span>
							<span><i class="fa fa-envelope-o"></i> <a
									href="mailto:info@example.com.com">info@example.com</a></span>
							<span><i class="fa fa-clock-o"></i> Office Hour: 08:00am - 6:00pm</span>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
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
							<img src="/img/theelects-receipt-logo-full.png" data-src="/img/theelects-receipt-logo-full.png" class="lazyload" alt="footer-logo">
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
							<a class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-icon-btn-left ttm-btn-color-white" href="mailto:Info@example.com" title=""><i class="fa fa-envelope-o"></i>  Info@example.com</a>
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
								<li><a href="#"><i class="fa fa-chevron-right"></i> Make Appointment</a>
								</li>
								<li><a href="#"><i class="fa fa-chevron-right"></i> Customer Services</a>
								</li>
								<li><a href="#"><i class="fa fa-chevron-right"></i> Department Services</a>
								</li>
								<li><a href="#"><i class="fa fa-chevron-right"></i> About Company</a>
								</li>
								<li><a href="#"><i class="fa fa-chevron-right"></i> Our Case Studies</a>
								</li>
								<li><a href="#"><i class="fa fa-chevron-right"></i> Free Consultation</a>
								</li>
								<li><a href="#"><i class="fa fa-chevron-right"></i> Meet Our Experts</a>
								</li>
								<li><a href="#"><i class="fa fa-chevron-right"></i> Our Business Growth</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
						<div class="widget widget_text clearfix">
							<h3 class="widget-title">Latest News</h3>
							<ul class="widget-post ttm-recent-post-list">
								<li>
									<a href="single-blog.html" class="img-right col-lg-2">
                    <img src="/img/posts/post-1.jpg" data-src="/img/posts/post-1.jpg" class="lazyload" alt="post-img">
                  </a>
									<div class="txt-left col-lg-10">
                    <a href="single-blog.html">Define World Best IT Solution Technology</a>
									  <span class="post-date"><i class="fa fa-calendar"></i>May 01, 2019</span>
                  </div>
                  <div class="clearfix"></div>
								</li>
								<li>
									<a href="single-blog.html"><img src="/img/posts/post-1.jpg"  data-src="/img/posts/post-1.jpg" class="lazyload" alt="post-img"></a>
									<a href="single-blog.html">You Must Try 20 Secret Of Digital Transform</a>
									<span class="post-date"><i class="fa fa-calendar"></i>May 03, 2019</span>
								</li>
								<li>
									<a href="single-blog.html"><img src="/img/posts/post-1.jpg"  data-src="/img/posts/post-1.jpg" class="lazyload" alt="post-img"></a>
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
										<input type="email" style="width: 100%;" name="email" placeholder="Email Address.." required="">
										<button type="submit" class="submit">
                      <i class="fa fa-search"></i>
                    </button>
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
                  <div class="clearfix"></div>
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
                <div class="clearfix"></div>
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
