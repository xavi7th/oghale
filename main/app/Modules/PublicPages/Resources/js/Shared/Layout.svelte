<script>
	import { page } from "@inertiajs/inertia-svelte";
  import { inertia } from '@inertiajs/inertia-svelte';

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
        <div class="topbar-left text-right col-lg-5">
          <ul class="top-contact text-left">
            <li><i class="la la-map-marker"></i>24 Tech Roqad st Ny 10023</li>
            <li><i class="la la-envelope-o"></i><a href="mailto:info@example.com.com">info@example.com</a>
            </li>
          </ul>
        </div>

				<div class="topbar-right text-right col-lg-7">
					<ul class="top-contact col-lg-7">
						<li><i class="fa fa-clock-o"></i>Office Hour: 08:00am - 6:00pm</li>
					</ul>
					<div class="ttm-social-links-wrapper list-inline col-lg-3">
						<ul class="social-icons">
							<li><a href="#" class=" tooltip-bottom" data-tooltip="Facebook"><i class="fab fa-facebook"></i></a>
							</li>
							<li><a href="#" class=" tooltip-bottom" data-tooltip="Twitter"><i class="fab fa-twitter"></i></a>
							</li>
							<li><a href="#" class=" tooltip-bottom" data-tooltip="Flickr"><i class="fab fa-flickr"></i></a>
							</li>
							<li><a href="#" class=" tooltip-bottom" data-tooltip="Linkedin"><i class="fab fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
          <div class="header-btn col-lg-2">
            <a class="ttm-btn ttm-btn-size-md  ttm-btn-bgcolor-skincolor" href="#">Get A Quote</a>
          </div>
				</div>
        <div class="clearfix"></div>
        </div>
			</div>
		</div>
		<!-- ttm-topbar-wrapper end -->
		<!-- ttm-header-wrap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <!-- site-branding -->
        <div class="site-branding col-lg-1">
          <a class="home-link" href="index.html" title="Altech" rel="home">
              <img id="logo-img" class="img-center lazyload" src="/img/logo.png" data-src="/img/logo.png" alt="logo">
          </a>
        </div>
        <!-- site-branding end -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Home <span class="sr-only">(current)</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#" use:inertia>Homepage 1 <span class="sr-only">(current)</span></a>
                <a class="dropdown-item" href="#" use:inertia>Homepage 2</a>
                <a class="dropdown-item" href="#" use:inertia>Homepage 3</a>
                <a class="dropdown-item dropdown-toggle" href="#" id="homebarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Header Styles</a>
                <div class="dropdown-menu" aria-labelledby="homebarDropdown">
                  <a class="dropdown-item" href="index.html" use:inertia>Header Style 01</a>
                  <a class="dropdown-item" href="index.html" use:inertia>Header Style 02</a>
                  <a class="dropdown-item" href="index.html" use:inertia>Header Style 03</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pages
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#" use:inertia>About Us 1</a>
                <a class="dropdown-item" href="#" use:inertia>About Us 2</a>
                <a class="dropdown-item" href="#" use:inertia>Services 1</a>
                <a class="dropdown-item" href="#" use:inertia>Services 2</a>
                <a class="dropdown-item" href="#" use:inertia>Our Expert</a>
                <a class="dropdown-item" href="#" use:inertia>FAQs</a>
                <a class="dropdown-item" href="#" use:inertia>Contact Us 1</a>
                <a class="dropdown-item" href="#" use:inertia>Contact Us 2</a>
                <a class="dropdown-item" href="#" use:inertia>Error Page</a>
                <a class="dropdown-item" href="#" use:inertia>Elements</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="it-consultancy.html" use:inertia>IT Consultancy</a>
                <a class="dropdown-item" href="digital-services.html" use:inertia>Digital Services</a>
                <a class="dropdown-item" href="advisory-services.html" use:inertia>Advisory Services</a>
                <a class="dropdown-item" href="data-structuring.html" use:inertia>Data Structuring</a>
                <a class="dropdown-item" href="experience-design.html" use:inertia>Experience Design</a>
                <a class="dropdown-item" href="content-engineering.html" use:inertia>Content Engineering</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Project
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="project-style-01.html">Project Style 1</a>
                <a class="dropdown-item" href="project-style-02.html">Project Style 2</a>
                <a class="dropdown-item dropdown-toggle" href="#" id="projectbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Project Single</a>
                <div class="dropdown-menu" aria-labelledby="projectbarDropdown">
                  <a class="dropdown-item" href="single-style-01.html">Single Style 1</a>
                  <a class="dropdown-item" href="single-style-02.html">Single Style 2</a>
                  <a class="dropdown-item" href="single-style-03.html">Single Style 3</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#" use:inertia>Action</a>
                <a class="dropdown-item" href="blog.html" use:inertia>Blog Classic</a>
                <a class="dropdown-item" href="blog-grid.html" use:inertia>Blog Grid View</a>
                <a class="dropdown-item" href="blog-top-image.html" use:inertia>Blog Top Image</a>
                <a class="dropdown-item" href="blog-left-image.html" use:inertia>Blog Left Image</a>
                <a class="dropdown-item" href="single-blog.html" use:inertia>Blog Single View</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Shop
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#" use:inertia>Action</a>
                <a class="dropdown-item" href="shop.html" use:inertia>Default Shop</a>
                <a class="dropdown-item" href="product-details.html" use:inertia>Single Product Details</a>
                <a class="dropdown-item" href="cart.html" use:inertia>Cart</a>
                <a class="dropdown-item" href="checkout.html" use:inertia>Checkout</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
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
