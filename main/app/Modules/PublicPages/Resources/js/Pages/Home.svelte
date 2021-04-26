<script>
	import Layout from "@public-shared/Layout.svelte";
	// import Slider from "@public-pages/Home/Slider";
	import { page } from "@inertiajs/inertia-svelte";
	import { onMount } from 'svelte';

	// here we will call onMountec to make sure the code is mounted to the DOM first before ours fire
	// Note we are using jQuery() instead of $(). This is because $ is a special symbol in Svelte. We could run it in noCoflict mode if we really must use $

	onMount(() => {
		let owl = jQuery('.single-owl-carousel');
		owl.owlCarousel({
			// animateOut: 'fadeOut',
      items:1,
      dots: false,
      loop: true,
      margin:30,
      autoplay:true,
      autoplayTimeout:1000,
      smartSpeed:450
		});

    let mlt_owl = jQuery('.multiple-owl-carousel');
		mlt_owl.owlCarousel({
			// animateOut: 'fadeOut',
      loop: true,
      margin:30,
      smartSpeed:450,
      responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
      }
		});

    let mlt_auto_owl = jQuery('.multiple-auto-owl-carousel');
		mlt_auto_owl.owlCarousel({
			// animateOut: 'fadeOut',
      loop: true,
      margin:30,
      autoplay: true,
      smartSpeed:450,
      responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
      }
		});

    let tri_auto_owl = jQuery('.triple-owl-carousel');
		tri_auto_owl.owlCarousel({
			// animateOut: 'fadeOut',
      loop: true,
      margin:30,
      autoplay: true,
      smartSpeed:450,
      responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
      }
		});
	});
</script>

<Layout>
	<!-- EVOLUTION SLIDER 6.0.1 -->
	<div class="hero">
		<div class="owl-carousel single-owl-carousel owl-theme">
			<div class="item">
				<div class="box">
					<div class="text-wrapper">
						<div class="screen"></div>
						<div class="container wrap">
							<div class="box">
								<h2 class="font1">Discuss Your Project</h2>
								<h2>Best <strong class="ttm-textcolor-skincolor">Platform</strong> to Grow</h2>
								<div class="rows">
									<div class="checker">
										<i class="fa fa-check col-lg-1 col-md-1 col-sm-1 col-xs-1"></i>
										<p class="col-lg-11 col-md-11 col-sm-11 col-xs-1">Your Business</p>
									</div>
									<div class="checker">
										<i class="fa fa-check col-lg-1 col-md-1 col-sm-1 col-xs-1"></i>
										<p class="col-lg-11 col-md-11 col-sm-11 col-xs-1">Get A Quote</p>
									</div>
									<div class="checker">
										<i class="fa fa-check col-lg-1 col-md-1 col-sm-1 col-xs-1"></i>
										<p class="col-lg-11 col-md-11 col-sm-11 col-xs-1"> We are equipped with an updated technical
											knowledge to serve our customers
											<br> properly. Our method of application maintains the industry.
										</p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<img class="d-block w-100" src="/img/posts/post-8.jpg" alt="First slide">
				</div>
			</div>
			<div class="item">
				<div class="box">
					<div class="text-wrapper">
						<div class="screen"></div>
						<div class="container wrap">
							<div class="box">
								<h2 class="font1">Get Altech</h2>
								<div class="rows">
									<div class="checker">
										<i class="fa fa-check col-lg-1"></i>
										<p class="col-lg-11">Real-Time Monitoring</p>
									</div>
									<div class="checker">
										<i class="fa fa-check col-lg-1"></i>
										<p class="col-lg-11">Infrstracture</p>
									</div>
									<div class="checker">
										<i class="fa fa-check col-lg-1"></i>
										<p class="col-lg-11">We are equipped with an updated technical knowledge to serve our customers<br> properly. Our method of application maintains the industry.
										</p>
									</div>
								</div>
								<div class="clearfix"></div>
								<a href="#" class="slide-btn">Read More</a>
							</div>
						</div>
					</div>
					<img class="d-block w-100" src="/img/posts/post-1.jpg" alt="First slide">
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- END REVOLUTION SLIDER -->
	<!--site-main start-->
	<div class="site-main">

		<!-- zero-padding-section -->
		<section class="ttm-row zero-padding-section position-relative z-1 clearfix">
			<div class="container">
				<div class="row no-gutters ttm-bgcolor-darkgrey featured-icon-box-style1-row">
					<div class="col-lg-4 col-md-4">
						<!--  featured-icon-box -->
						<div class="featured-icon-box left-icon style1 ttm-bgcolor-skincolor">
							<div class="featured-icon">
								<!--  featured-icon -->
								<div class="ttm-icon ttm-icon_element-bgcolor-darkgrey ttm-icon_element-size-md">
									<i class="flaticon flaticon-system"></i>
									<img src="/img/flaticons/control-system.svg" alt="system check">
									<!--  ttm-icon -->
								</div>
							</div>
							<div class="featured-content">
								<!--  featured-content -->
								<div class="featured-title">
									<!--  featured-title -->
									<h5>Trusted Services</h5>
								</div>
								<div class="featured-desc">
									<!--  featured-desc -->
									<p>We Are Trusted Our Customers</p>
								</div>
							</div>
						</div>
						<!--  featured-icon-box END -->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--  featured-icon-box -->
						<div class="featured-icon-box left-icon style1 ttm-bgcolor-darkgrey">
							<div class="featured-icon">
								<!--  featured-icon -->
								<div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md">
									<i class="flaticon flaticon-clock"></i>
									<img src="/img/flaticons/clock.svg" alt="clock">
									<!--  ttm-icon -->
								</div>
							</div>
							<div class="featured-content">
								<!--  featured-content -->
								<div class="featured-title">
									<!--  featured-title -->
									<h5>24/7 Support</h5>
								</div>
								<div class="featured-desc">
									<!--  featured-desc -->
									<p>000 7845 114 - 123 4567 890</p>
								</div>
							</div>
						</div>
						<!--  featured-icon-box END -->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--  featured-icon-box -->
						<div class="featured-icon-box left-icon style1 ttm-bgcolor-skincolor">
							<div class="featured-icon">
								<!--  featured-icon -->
								<div class="ttm-icon ttm-icon_element-bgcolor-darkgrey ttm-icon_element-size-md">
									<i class="flaticon flaticon-developer"></i>
									<img src="/img/flaticons/development.svg" alt="developers">
									<!--  ttm-icon -->
								</div>
							</div>
							<div class="featured-content">
								<!--  featured-content -->
								<div class="featured-title">
									<!--  featured-title -->
									<h5>Expert &amp; Professional</h5>
								</div>
								<div class="featured-desc">
									<!--  featured-desc -->
									<p>We Are Trusted Our Customers</p>
								</div>
							</div>
						</div>
						<!--  featured-icon-box END -->
					</div>
				</div>
			</div>
		</section>
		<!-- zero-padding-section -->
		<!-- aboutus-section -->
		<section class="ttm-row aboutus-section clearfix">
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-lg-6">
						<!-- section title -->
						<div class="section-title with-desc clearfix">
							<div class="title-header">
								<h5>About us</h5>
								<h2 class="title">We are here to IT Solution with 20 years of <span>experience</span></h2>
							</div>
							<div class="title-desc">
								<p> Web designing in a powerful way of just not an only professions, however, in a passion for our
									Company. We have to a tendency to believe the idea that smart looking of any website is the first
									impression on visitors.
									And the smart design of any website is the starting point.</p>
								<p> We have a special team for website style who has been involved in designing professional websites of
									all categories.</p>
							</div>
						</div>
						<!-- section title end -->
						<!-- row -->
						<div class="row no-gutters mt-35">
							<div class="col-md-6 col-lg-6 col-sm-6">
								<ul class="ttm-list ttm-list-style-icon">
									<li><i class="la la-circle ttm-textcolor-skincolor"></i>
										<span class="ttm-list-li-content">Web And Mobile Application </span>
									</li>
									<li><i class="la la-circle ttm-textcolor-skincolor"></i>
										<span class="ttm-list-li-content">New Domain Registration</span>
									</li>
									<li><i class="la la-circle ttm-textcolor-skincolor"></i>
										<span class="ttm-list-li-content">Data Text Synchronization</span>
									</li>
								</ul>
							</div>
							<div class="col-md-6 col-lg-6 col-sm-6">
								<ul class="ttm-list ttm-list-style-icon">
									<li><i class="la la-circle ttm-textcolor-skincolor"></i>
										<span class="ttm-list-li-content">Improving Our Website Design</span>
									</li>
									<li><i class="la la-circle ttm-textcolor-skincolor"></i>
										<span class="ttm-list-li-content">Web &amp; Email Hosting Services </span>
									</li>
									<li><i class="la la-circle ttm-textcolor-skincolor"></i>
										<span class="ttm-list-li-content">Artificial Intelligence Web App</span>
									</li>
								</ul>
							</div>
						</div>
						<!-- row END-->
						<!-- separator -->
						<div class="separator">
							<div class="sep-line mt-25 mb-30"></div>
						</div>
						<!-- separator -->
						<div class="about-text-box fs-16">
							<span>Call to ask <a href="#" class="fw-500"><u>any question</u></a></span>
							<strong class="fs-18">: 123-456-7890</strong> or <strong class="fs-18">456-789-1430</strong>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="position-relative res-991-mt-30">
							<!-- ttm_single_image-wrapper -->
							<div class="ttm_single_image-wrapper">
								<img class="img-fluid lazyload" src="/img/avatars/avatar-3.jpg" data-src="/img/avatars/avatar-2.jpg" title="single-img-one" alt="single-img-one">
							</div>
							<!-- ttm_single_image-wrapper end -->
							<!--featured-icon-box-->
							<div class="about-overlay-01">
								<div class="info-wrap">
									<p class="mb-0">American IT Solutions Association AIA.</p>
									<div class="effect-div"></div>
								</div>
							</div>
							<!-- featured-icon-box end-->
						</div>
					</div>
				</div>
				<!-- row end -->
			</div>
		</section>
		<!-- aboutus-section end -->
		<!-- history-section -->
		<section class="ttm-row history-section bg-img3 ttm-bgcolor-grey ttm-bg ttm-bgimage-yes clearfix">
			<div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
			<div class="container">
				<div class="row">
					<!-- row -->
					<div class="col-lg-8 offset-lg-2">
						<!-- section title -->
						<div class="section-title with-desc text-center clearfix">
							<div class="title-header">
								<h5>Our Services</h5>
								<h2 class="title">We run all kinds of services in form of <span>Information & Technologies</span></h2>
							</div>
						</div>
						<!-- section title end -->
					</div>
				</div>
				<!-- row end -->
			</div>
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="history-slide">
						<div class="top-content">
							<div class="container-fluid">
								<div class="owl-carousel multiple-owl-carousel owl-theme">
                  <div class="item">
                    <div class="ttm-history-box-wrapper">
                      <!-- ttm-history-box-wrapper  -->
                      <div class="ttm-history-box-icon-wrapper">
                        <!-- ttm-history-box-icon-wrapper  -->
                        <!--  featured-icon-box -->
                        <div class="featured-icon-box">
                          <div class="featured-icon">
                            <!--  featured-icon -->
                            <div class="ttm-icon ttm-icon_element-bgcolor-white ttm-icon_element-size-md">
                              <i class="flaticon flaticon-business-and-finance"></i>
                              <img src="/img/flaticons/handshake.svg" alt="business icon">
                              <!--  ttm-icon -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="ttm-history-box-border"></div>
                      <!-- ttm-history-box-border  -->
                      <div class="ttm-history-box-details">
                        <div class="ttm-historybox-title">
                          <h5>IT Consultancy</h5>
                        </div>
                        <!-- historybox-title  -->
                        <div class="ttm-historybox-description">
                          <!-- description  -->
                          Expertise in IT consultancy for the IT companies, for their different working areas Web-app
                          related.
                        </div>
                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <!-- ttm-history-box-wrapper  END-->
                    <div class="ttm-history-box-wrapper">
                      <!-- ttm-history-box-wrapper  -->
                      <div class="ttm-history-box-icon-wrapper">
                        <!-- ttm-history-box-icon-wrapper  -->
                        <!--  featured-icon-box -->
                        <div class="featured-icon-box">
                          <div class="featured-icon">
                            <!--  featured-icon -->
                            <div class="ttm-icon ttm-icon_element-bgcolor-white ttm-icon_element-size-md">
                              <i class="flaticon flaticon-computer"></i>
                              <img src="/img/flaticons/laptop.svg" alt="laptop icon">
                              <!--  ttm-icon -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="ttm-history-box-border"></div>
                      <!-- ttm-history-box-border  -->
                      <div class="ttm-history-box-details">
                        <div class="ttm-historybox-title">
                          <h5>IT Management</h5>
                        </div>
                        <!-- historybox-title  -->
                        <div class="ttm-historybox-description">
                          <!-- description  -->
                          We provide all kind of IT management services of in the according to on their organization
                          prioritie.
                        </div>
                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                      </div>
                    </div>
                    <!-- ttm-history-box-wrapper  END-->
                  </div>
                  <div class="item">
                    <div class="ttm-history-box-wrapper">
                      <!-- ttm-history-box-wrapper  -->
                      <div class="ttm-history-box-icon-wrapper">
                        <!-- ttm-history-box-icon-wrapper  -->
                        <!--  featured-icon-box -->
                        <div class="featured-icon-box">
                          <div class="featured-icon">
                            <!--  featured-icon -->
                            <div class="ttm-icon ttm-icon_element-bgcolor-white ttm-icon_element-size-md">
                              <i class="flaticon flaticon-data"></i>
                              <img src="/img/flaticons/data.svg" alt="data icon">
                              <!--  ttm-icon -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="ttm-history-box-border"></div>
                      <!-- ttm-history-box-border  -->
                      <div class="ttm-history-box-details">
                        <div class="ttm-historybox-title">
                          <h5>Product Design</h5>
                        </div>
                        <!-- historybox-title  -->
                        <div class="ttm-historybox-description">
                          <!-- description  -->
                          Our firm is expert to create an efficient for user interface that makes design user
                          interaction
                          lively.
                        </div>
                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                      </div>
                    </div>
                    <!-- ttm-history-box-wrapper  END-->
                  </div>
                  <div class="item">
                    <div class="ttm-history-box-wrapper">
                      <!-- ttm-history-box-wrapper  -->
                      <div class="ttm-history-box-icon-wrapper">
                        <!-- ttm-history-box-icon-wrapper  -->
                        <!--  featured-icon-box -->
                        <div class="featured-icon-box">
                          <div class="featured-icon">
                            <!--  featured-icon -->
                            <div class="ttm-icon ttm-icon_element-bgcolor-white ttm-icon_element-size-md">
                              <i class="flaticon flaticon-global-1"></i>
                              <img src="/img/flaticons/global.svg" alt="global icon">
                              <!--  ttm-icon -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="ttm-history-box-border"></div>
                      <!-- ttm-history-box-border  -->
                      <div class="ttm-history-box-details">
                        <div class="ttm-historybox-title">
                          <h5>Cloud Services</h5>
                        </div>
                        <!-- historybox-title  -->
                        <div class="ttm-historybox-description">
                          <!-- description  -->
                          We develop, migrate and work on web applications to ensure that they run on capably on
                          clouds.
                        </div>
                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                      </div>
                    </div>
                    <!-- ttm-history-box-wrapper  END-->
                  </div>
								</div>
							</div>
						</div>
					</div>
					<!-- row end-->
				</div>
			</div>
			<div class="short-info-wrap">
				<div class="container">
					<div class="row">
						<div class="col-md-12 short-info text-center mt-45 res-991-mt-30">
							<p class="mb-0">Don’t hesitate, contact us for better help and services.
								<strong><u><a href="#" class="ttm-textcolor-darkgrey"> View more Services</a></u></strong>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- history-section end -->
		<!-- topzero-padding-section -->
		<section class="ttm-row zero-padding-section mt_80 res-991-mt-0 clearfix">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-6">
						<!-- col-bg-img-one -->
						<div class="col-bg-img-one ttm-bg ttm-col-bgimage-yes ttm-left-span">
							<div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
								<div class="ttm-bg-layer-inner"></div>
							</div>
						</div>
						<!-- Responsive View image -->
						<img src="/img/categories/category-3.jpg" data-src="/img/bg-image/col-bgimage-1.jpg" class="ttm-equal-height-image lazyload" alt="col-bgimage-1">
					</div>
					<div class="col-lg-6">
						<div class="ttm-bgcolor-skincolor ttm-bg ttm-col-bgcolor-yes z-11 position-relative ttm-right-span">
							<div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
								<div class="ttm-bg-layer-inner"></div>
							</div>
							<div class="layer-content">
								<div class="spacing-1">
									<!-- section title -->
									<div class="section-title with-desc clearfix">
										<div class="title-header">
											<h5>Why Altech</h5>
											<h2 class="title">We deal with the aspects of professional <span>IT Services</span></h2>
										</div>
										<div class="title-desc">
											<p>Our IT services converge business and technology experts to help to manage business processes
												of all categories.</p>
										</div>
									</div>
									<!-- section title end -->
									<div class="row mt-40">
										<div class="col-12">
											<!-- featured-icon-box -->
											<div class="featured-icon-box style2 left-icon icon-align-top">
												<div class="featured-icon">
													<!-- featured-icon -->
													<div
														class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md">
														<i class="flaticon flaticon-process"></i>
													</div>
												</div>
												<div class="featured-content">
													<div class="featured-title">
														<!-- featured title -->
														<h5>Product Designs</h5>
													</div>
													<div class="featured-desc">
														<!-- featured desc -->
														<p>Our firm is expert to create an efficient user interface that makes user interaction is
															lively.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- separator -->
									<div class="separator">
										<div class="sep-line mt-25 mb-25"></div>
									</div>
									<!-- separator -->
									<div class="row">
										<div class="col-12">
											<!-- featured-icon-box -->
											<div class="featured-icon-box style2 left-icon icon-align-top">
												<div class="featured-icon">
													<!-- featured-icon -->
													<div
														class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md">
														<i class="flaticon flaticon-system"></i>
													</div>
												</div>
												<div class="featured-content">
													<div class="featured-title">
														<!-- featured title -->
														<h5>Big Data &amp; Analytics</h5>
													</div>
													<div class="featured-desc">
														<!-- featured desc -->
														<p>Statistical analysis to help an organization to gain insights from large information web
															sets.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- separator -->
									<div class="separator">
										<div class="sep-line mt-25 mb-25"></div>
									</div>
									<!-- separator -->
									<div class="row">
										<div class="col-12">
											<!-- featured-icon-box -->
											<div class="featured-icon-box style2 left-icon icon-align-top">
												<div class="featured-icon">
													<!-- featured-icon -->
													<div
														class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md">
														<i class="flaticon flaticon-data"></i>
													</div>
												</div>
												<div class="featured-content">
													<div class="featured-title">
														<!-- featured title -->
														<h5>Maintain App Data</h5>
													</div>
													<div class="featured-desc">
														<!-- featured desc -->
														<p>We Create the optimal platform to develop and run digital applications for our clients
															app.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- topzero-padding-section -->
		<!-- team-section -->
		<section class="ttm-row team-section clearfix">
			<div class="container">
				<div class="row">
					<!-- row -->
					<div class="col-lg-9 col-xl-10 col-md-9">
						<!-- section-title -->
						<div class="section-title style2 clearfix">
							<div class="title-header">
								<h5>About us</h5>
								<h2 class="title">Meet our <span>Leadership</span></h2>
							</div>
							<div class="title-desc">The positive distinction within the World Inspiring of Success and Connections of
								People and Organizations.</div>
						</div>
						<!-- section-title end -->
					</div>
					<div class="col-lg-3 col-xl-2 col-md-3">
						<div class="text-md-right">
							<a class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-btn-color-darkgrey mb-40" href="#" title=""> Read More </a>
						</div>
					</div>
				</div>
				<!-- row end -->
				<!-- row -->
				<div class="row">
					<div class="container-fluid">
						<div class="owl-carousel multiple-owl-carousel owl-theme">
								<div class="item">
									<!-- featured-imagebox-team -->
									<div class="featured-imagebox featured-imagebox-team style1">
										<div class="featured-thumbnail">
											<!-- featured-thumbnail -->
											<img class="img-fluid lazyload" src="/img/avatars/avatar-1.jpg" data-src="/img/avatars/avatar-1.jpg" alt="first teammate">
											<div class="ttm-social-links-wrapper">
												<ul class="social-icons list-inline">
													<!-- social-icons -->
													<li class="social-facebook"><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
													</li>
													<li class="social-twitter"><a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a>
													</li>
													<li class="social-linkedin"><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
													</li>
													<li class="social-googleplus">
														<a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="featured-content box-shadow">
											<div class="featured-title">
												<!-- featured-title -->
												<h5><a href="team-details.html">Jennifer Garcia</a></h5>
											</div>
											<p class="category">IT Service Officer</p>
											<!-- category -->
										</div>
									</div>
									<!-- featured-imagebox-team end-->
								</div>
								<div class="item">
									<!-- featured-imagebox-team -->
									<div class="featured-imagebox featured-imagebox-team style1">
										<div class="featured-thumbnail">
											<!-- featured-thumbnail -->
											<img class="img-fluid lazyload" src="/img/avatars/avatar-3.jpg" data-src="/img/avatars/avatar-3.jpg" alt="second teammate">
											<div class="ttm-social-links-wrapper">
												<ul class="social-icons list-inline">
													<!-- social-icons -->
													<li class="social-facebook"><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
													</li>
													<li class="social-twitter"><a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a>
													</li>
													<li class="social-linkedin"><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
													</li>
													<li class="social-googleplus">
														<a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="featured-content box-shadow">
											<div class="featured-title">
												<!-- featured-title -->
												<h5><a href="team-details.html">Robert Liam</a></h5>
											</div>
											<p class="category">Web Designer</p>
											<!-- category -->
										</div>
									</div>
									<!-- featured-imagebox-team end-->
								</div>
								<div class="item">
									<!-- featured-imagebox-team -->
									<div class="featured-imagebox featured-imagebox-team style1">
										<div class="featured-thumbnail">
											<!-- featured-thumbnail -->
											<img class="img-fluid lazyload" src="/img/avatars/avatar-2.jpg" data-src="/img/avatars/avatar-2.jpg" alt="third teammate">
											<div class="ttm-social-links-wrapper">
												<ul class="social-icons list-inline">
													<!-- social-icons -->
													<li class="social-facebook"><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
													</li>
													<li class="social-twitter"><a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a>
													</li>
													<li class="social-linkedin"><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
													</li>
													<li class="social-googleplus">
														<a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="featured-content box-shadow">
											<div class="featured-title">
												<!-- featured-title -->
												<h5><a href="team-details.html">Jessica Ethan</a></h5>
											</div>
											<p class="category">Project Manager</p>
											<!-- category -->
										</div>
									</div>
									<!-- featured-imagebox-team end-->
								</div>
								<div class="item">
									<!-- featured-imagebox-team -->
									<div class="featured-imagebox featured-imagebox-team style1">
										<div class="featured-thumbnail">
											<!-- featured-thumbnail -->
											<img class="img-fluid lazyload" src="/img/avatars/avatar-3.jpg" data-src="/img/avatars/avatar-3.jpg" alt="forth teammate">
											<div class="ttm-social-links-wrapper">
												<ul class="social-icons list-inline">
													<!-- social-icons -->
													<li class="social-facebook"><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
													</li>
													<li class="social-twitter"><a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a>
													</li>
													<li class="social-linkedin"><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
													</li>
													<li class="social-googleplus">
														<a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="featured-content box-shadow">
											<div class="featured-title">
												<!-- featured-title -->
												<h5><a href="team-details.html">Amanda Brown</a></h5>
											</div>
											<p class="category">Consultant Officer</p>
											<!-- category -->
										</div>
									</div>
									<!-- featured-imagebox-team end-->
								</div>
						</div>
					</div>
				</div>
				<!-- row end-->
			</div>
		</section>
		<!-- team-section end -->
		<!-- first-row-title-section -->
		<section class="ttm-row first-row-title-section ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img4 clearfix">
			<div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
			<div class="container">
				<div class="row">
					<!-- row -->
					<div class="col-lg-8 offset-lg-2">
						<div class="text-center">
							<div class="ttm-play-icon-btn mb-35">
								<div class="ttm-play-icon-animation">
									<a href="https://youtu.be/7e90gBu4pas" target="_self" class="ttm_prettyphoto">
                    <div class="ttm-icon ttm-icon_element-bgcolor-white ttm-icon_element-size-sm ttm-icon_element-style-round">
                       <i class="fa fa-play"></i>
                    </div>
                  </a>
								</div>
							</div>
							<!-- section-title -->
							<div class="section-title row-title clearfix">
								<div class="title-header">
									<h2 class="title">We Provide Outsourced IT Services For Small & <span>Mid-Sized Business</span></h2>
								</div>
								<div class="title-desc">Appropriate for your specific business, making it easy for<br> you to have quality IT services. What We Do
								</div>
							</div>
							<!-- section-title end -->
							<div class="mt-40">
								<a href="#" class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-btn-color-white">More Services</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- first-row-title-section END-->
		<!-- testimonial-section end -->
		<section class="ttm-row zero-padding-section clearfix">
			<div class="container">
				<div class="row no-gutters mt_100 res-991-mt-0">
					<!-- row -->
					<div class="col-md-6">
						<div class="ttm-bgcolor-darkgrey ttm-bg ttm-col-bgcolor-yes z-11 position-relative h-100">
							<div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
								<div class="ttm-bg-layer-inner"></div>
							</div>
							<div class="layer-content">
								<!-- layer-content -->
								<div class="spacing-2">
									<!-- spacing-2 -->
									<!-- section title -->
									<div class="section-title with-desc clearfix">
										<div class="title-header">
											<h5>What We Do</h5>
											<h2 class="title">We help you to grow your business <span>Exponentially</span></h2>
										</div>
									</div>
									<!-- section title end -->
									<!-- progress-bar -->
									<div class="ttm-progress-bar" data-percent="90%">
										<div class="progress-bar-title">UI/UX Design</div>
										<!-- progress-bar-title -->
										<div class="progress-bar-inner">
											<div class="progress-bar progress-bar-color-bar_skincolor"></div>
										</div>
										<div class="progress-bar-percent" data-percent="90">90%</div>
										<!-- progress-bar-percent -->
									</div>
									<!-- progress-bar END -->
									<!-- progress-bar -->
									<div class="ttm-progress-bar" data-percent="80%">
										<div class="progress-bar-title">App Development</div>
										<!-- progress-bar-TITLE -->
										<div class="progress-bar-inner">
											<div class="progress-bar progress-bar-color-bar_skincolor"></div>
										</div>
										<div class="progress-bar-percent" data-percent="80">80%</div>
										<!-- progress-bar-PERCENT -->
									</div>
									<!-- progress-bar END -->
								</div>
								<!-- spacing-2 END -->
							</div>
							<!-- layer-content END -->
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-bg-img-two ttm-col-bgimage-yes ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-skincolor">
							<div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
								<div class="ttm-bg-layer-inner"></div>
							</div>
							<div class="layer-content">
								<div class="testimonial-slide style1 owl-carousel single-owl-carousel owl-theml" data-item="1" data-nav="false" data-dots="true"
									data-auto="false">
									<!-- testimonials -->
									<div class="testimonials text-center">
										<div class="testimonial-content">
											<!-- testimonials-content -->
											<div class="testimonial-avatar">
												<div class="testimonial-img">
													<!-- testimonials-img -->
													<img class="img-center lazyload" src="/img/avatars/avatar-1.jpg" data-src="/img/avatars/avatar-1.jpg" alt="testimonial-img">
												</div>
											</div>
											<blockquote>Our team discussed every single detail to make sure Creatives Planet is the most
												versatile and unique theme created so far. No coding skills.</blockquote>
											<div class="ttm-ratting-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="testimonial-caption">
												<!-- testimonials-caption -->
												<h6>Victor Williamson</h6>
												<span>Web Devloper</span>
											</div>
										</div>
									</div>
									<!-- testimonials END -->
									<!-- testimonials -->
									<div class="testimonials text-center">
										<div class="testimonial-content">
											<!-- testimonials-content -->
											<div class="testimonial-avatar">
												<div class="testimonial-img">
													<!-- testimonials-img -->
													<img class="img-center lazyload" src="/img/avatars/avatar-2.jpg" data-src="/img/avatars/avatar-2.jpg" alt="testimonial-img">
												</div>
											</div>
											<blockquote>Our team discussed every single detail to make sure Creatives Planet is the most
												versatile and unique theme created so far. No coding skills.</blockquote>
											<div class="ttm-ratting-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="testimonial-caption">
												<!-- testimonials-caption -->
												<h6>Victor Williamson</h6>
												<span>Web Devloper</span>
											</div>
										</div>
									</div>
									<!-- testimonials END -->
									<!-- testimonials -->
									<div class="testimonials text-center">
										<div class="testimonial-content">
											<!-- testimonials-content -->
											<div class="testimonial-avatar">
												<div class="testimonial-img">
													<!-- testimonials-img -->
													<img class="img-center lazyload" src="/img/avatars/avatar-3.jpg" data-src="/img/avatars/avatar-3.jpg" alt="testimonial-img">
												</div>
											</div>
											<blockquote>Our team discussed every single detail to make sure Creatives Planet is the most
												versatile and unique theme created so far. No coding skills.</blockquote>
											<div class="ttm-ratting-star">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="testimonial-caption">
												<!-- testimonials-caption -->
												<h6>Victor Williamson</h6>
												<span>Web Devloper</span>
											</div>
										</div>
									</div>
									<!-- testimonials END -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row end -->
			</div>
		</section>
		<!-- testimonial-section end -->
		<!-- process-section end -->
		<section class="ttm-row process-section clearfix">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title text-center with-desc clearfix">
							<div class="title-header">
								<h5>how it work</h5>
								<h2 class="title">Check Out Our Work <span>Process</span></h2>
							</div>
						</div>
						<!-- section title end -->
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="ttm-processbox-wrapper">
							<div class="row">
								<div class="ttm-processbox text-center col-lg-3 col-md-3 col-sm-12">
									<div class="ttm-box-image">
										<img class="img-fluid lazyload" src="/img/categories/category-1.jpg" data-src="/img/categories/category-1.jpg" alt="step-one" title="step-one">
										<div class="process-num">
											<span class="number">01</span>
										</div>
									</div>
									<div class="featured-content">
										<div class="featured-title">
											<h5>Choose a Service</h5>
										</div>
										<div class="ttm-box-description">Aute irure dolor reprehenderit velit esse cillum dolore fugiat
										</div>
									</div>
								</div>
								<div class="ttm-processbox text-center col-lg-3 col-md-3 col-sm-12">
									<div class="ttm-box-image">
										<img class="img-fluid lazyload" src="/img/categories/category-2.jpg" data-src="/img/categories/category-2.jpg"alt="step-two" title="step-two">
										<div class="process-num">
											<span class="number">02</span>
										</div>
									</div>
									<div class="featured-content">
										<div class="featured-title">
											<h5>Request a Meeting</h5>
										</div>
										<div class="ttm-box-description">Aute irure dolor reprehenderit velit esse cillum dolore fugiat
										</div>
									</div>
								</div>
								<div class="ttm-processbox text-center col-lg-3 col-md-3 col-sm-12">
									<div class="ttm-box-image">
										<img class="img-fluid lazyload" src="/img/categories/category-3.jpg" data-src="/img/categories/category-3.jpg" alt="step-three" title="step-three">
										<div class="process-num">
											<span class="number">03</span>
										</div>
									</div>
									<div class="featured-content">
										<div class="featured-title">
											<h5>Receive Custom Plan</h5>
										</div>
										<div class="ttm-box-description">Aute irure dolor reprehenderit velit esse cillum dolore fugiat
										</div>
									</div>
								</div>
								<div class="ttm-processbox text-center col-lg-3 col-md-3 col-sm-12">
									<div class="ttm-box-image">
										<img class="img-fluid lazyload" src="/img/categories/category-4.jpg" data-src="/img/categories/category-4.jpg" alt="step-four" title="step-four">
										<div class="process-num">
											<span class="number">04</span>
										</div>
									</div>
									<div class="featured-content">
										<div class="featured-title">
											<h5>Let’s Make it Happen</h5>
										</div>
										<div class="ttm-box-description">Aute irure dolor reprehenderit velit esse cillum dolore fugiat
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row end -->
			</div>
		</section>
		<!-- process-section end -->
		<!-- portfolio-text-section -->
		<section class="ttm-row bottom zero-padding-section ttm-bgcolor-skincolor ttm-bg ttm-bgimage-yes bg-img5 clearfix">
			<div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
			<div class="container">
				<div class="row">
					<!-- row -->
					<div class="col-lg-9 col-xl-10 col-md-9">
						<!-- section-title -->
						<div class="section-title style2 clearfix">
							<div class="title-header">
								<h5>We Make Connections</h5>
								<h2 class="title">Explore recent <span>Projects</span></h2>
							</div>
							<div class="title-desc">A project is a temporary endeavor with a defined beginning and end, scope, and
								assigned resources.</div>
						</div>
						<!-- section-title end -->
					</div>
					<div class="col-lg-3 col-xl-2 col-md-3">
						<div class="text-md-right">
							<a class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-btn-color-white mb-40" href="#" title=""> Read More </a>
						</div>
					</div>
				</div>
				<!-- row end -->
			</div>
		</section>
		<!-- portfolio-text-section end -->
		<!-- portfolio-section -->
		<section class="ttm-row zero-padding-section clearfix">
			<div class="container">
				<div class="row portfolio-slide owl-carousel ttm-boxes-spacing-10px" data-item="5" data-nav="false"
					data-dots="false" data-auto="false">
					<div class="col-lg ttm-box-col-wrapper">
						<!-- featured-imagebox-portfolio -->
						<div class="featured-imagebox featured-imagebox-portfolio style1">
							<!-- featured-thumbnail -->
							<div class="featured-thumbnail">
								<img class="img-fluid lazyload" src="/img/posts/post-7.jpg" data-src="/img/posts/post-7.jpg" alt="portfolio-img">
							</div>
							<!-- featured-thumbnail end-->
							<!-- ttm-box-view-overlay -->
							<div class="ttm-box-view-overlay">
								<div class="featured-iconbox ttm-media-link">
									<!-- ttm-media-link -->
									<a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="" data-rel="prettyPhoto" href="images/portfolio/01.jpg"><i class="ti ti-search"></i></a>
									<a href="single-style-01.html" class="ttm_link"><i class="ti ti-link"></i></a>
								</div>
							</div>
							<!-- ttm-box-view-overlay end-->
							<div class="featured-content">
								<div class="featured-title">
									<!-- featured-title -->
									<h5><a href="single-style-01.html">Business Seminar</a></h5>
								</div>
							</div>
						</div>
						<!-- featured-thumbnail -->
					</div>
					<div class="col-lg ttm-box-col-wrapper">
						<!-- featured-imagebox-portfolio -->
						<div class="featured-imagebox featured-imagebox-portfolio style1">
							<!-- featured-thumbnail -->
							<div class="featured-thumbnail">
								<img class="img-fluid lazyload" src="/img/posts/post-8.jpg" data-src="/img/posts/post-8.jpg" alt="portfolio-img">
							</div>
							<!-- featured-thumbnail end-->
							<!-- ttm-box-view-overlay -->
							<div class="ttm-box-view-overlay">
								<div class="featured-iconbox ttm-media-link">
									<!-- ttm-media-link -->
									<a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="" data-rel="prettyPhoto" href="images/portfolio/02.jpg"><i class="ti ti-search"></i></a>
									<a href="single-style-01.html" class="ttm_link"><i class="ti ti-link"></i></a>
								</div>
							</div>
							<!-- ttm-box-view-overlay end-->
							<div class="featured-content">
								<div class="featured-title">
									<!-- featured-title -->
									<h5><a href="single-style-01.html">IT Management</a></h5>
								</div>
							</div>
						</div>
						<!-- featured-thumbnail -->
					</div>
					<div class="col-lg ttm-box-col-wrapper">
						<!-- featured-imagebox-portfolio -->
						<div class="featured-imagebox featured-imagebox-portfolio style1">
							<!-- featured-thumbnail -->
							<div class="featured-thumbnail">
								<img class="img-fluid lazyload" src="/img/posts/post-.jpg" data-src="/img/posts/post-7.jpg" alt="portfolio-img">
							</div>
							<!-- featured-thumbnail end-->
							<!-- ttm-box-view-overlay -->
							<div class="ttm-box-view-overlay">
								<div class="featured-iconbox ttm-media-link">
									<!-- ttm-media-link -->
									<a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="" data-rel="prettyPhoto" href="images/portfolio/03.jpg"><i class="ti ti-search"></i></a>
									<a href="single-style-01.html" class="ttm_link"><i class="ti ti-link"></i></a>
								</div>
							</div>
							<!-- ttm-box-view-overlay end-->
							<div class="featured-content">
								<div class="featured-title">
									<!-- featured-title -->
									<h5><a href="single-style-01.html">Cyber Security Analysis</a></h5>
								</div>
							</div>
						</div>
						<!-- featured-thumbnail -->
					</div>
					<div class="col-lg ttm-box-col-wrapper">
						<!-- featured-imagebox-portfolio -->
						<div class="featured-imagebox featured-imagebox-portfolio style1">
							<!-- featured-thumbnail -->
							<div class="featured-thumbnail">
								<img class="img-fluid lazyload" src="/img/posts/post-9.jpg" data-src="/img/posts/post-9.jpg" alt="portfolio-img">
							</div>
							<!-- featured-thumbnail end-->
							<!-- ttm-box-view-overlay -->
							<div class="ttm-box-view-overlay">
								<div class="featured-iconbox ttm-media-link">
									<!-- ttm-media-link -->
									<a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="" data-rel="prettyPhoto" href="images/portfolio/04.jpg"><i class="ti ti-search"></i></a>
									<a href="single-style-01.html" class="ttm_link"><i class="ti ti-link"></i></a>
								</div>
							</div>
							<!-- ttm-box-view-overlay end-->
							<div class="featured-content">
								<div class="featured-title">
									<!-- featured-title -->
									<h5><a href="single-style-01.html">Neural Networking</a></h5>
								</div>
							</div>
						</div>
						<!-- featured-thumbnail -->
					</div>
					<div class="col-lg ttm-box-col-wrapper">
						<!-- featured-imagebox-portfolio -->
						<div class="featured-imagebox featured-imagebox-portfolio style1">
							<!-- featured-thumbnail -->
							<div class="featured-thumbnail">
								<img class="img-fluid lazyload" src="/img/posts/post-10.jpg" data-src="/img/posts/post-10.jpg" alt="portfolio-img">
							</div>
							<!-- featured-thumbnail end-->
							<!-- ttm-box-view-overlay -->
							<div class="ttm-box-view-overlay">
								<div class="featured-iconbox ttm-media-link">
									<!-- ttm-media-link -->
									<a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="" data-rel="prettyPhoto" href="images/portfolio/05.jpg"><i class="ti ti-search"></i></a>
									<a href="single-style-01.html" class="ttm_link"><i class="ti ti-link"></i></a>
								</div>
							</div>
							<!-- ttm-box-view-overlay end-->
							<div class="featured-content">
								<div class="featured-title">
									<!-- featured-title -->
									<h5><a href="single-style-01.html">Data Management</a></h5>
								</div>
							</div>
						</div>
						<!-- featured-thumbnail -->
					</div>
					<div class="col-lg ttm-box-col-wrapper">
						<!-- featured-imagebox-portfolio -->
						<div class="featured-imagebox featured-imagebox-portfolio style1">
							<!-- featured-thumbnail -->
							<div class="featured-thumbnail">
								<img class="img-fluid lazyload" src="/img/posts/post-1.jpg" data-src="/img/posts/post-1.jpg" alt="portfolio-img">
							</div>
							<!-- featured-thumbnail end-->
							<!-- ttm-box-view-overlay -->
							<div class="ttm-box-view-overlay">
								<div class="featured-iconbox ttm-media-link">
									<!-- ttm-media-link -->
									<a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="" data-rel="prettyPhoto" href="images/portfolio/06.jpg"><i class="ti ti-search"></i></a>
									<a href="single-style-01.html" class="ttm_link"><i class="ti ti-link"></i></a>
								</div>
							</div>
							<!-- ttm-box-view-overlay end-->
							<div class="featured-content">
								<div class="featured-title">
									<!-- featured-title -->
									<h5><a href="single-style-01.html">Web Devlopment</a></h5>
								</div>
							</div>
						</div>
						<!-- featured-thumbnail -->
					</div>
				</div>
			</div>
		</section>
		<!-- portfolio-section -->
		<!-- blog-section end -->
		<section class="ttm-row blog-section clearfix">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title text-center with-desc clearfix">
							<div class="title-header">
								<h5>Our Blog</h5>
								<h2 class="title">Check Out Our <span>Latest News</span></h2>
							</div>
						</div>
						<!-- section title end -->
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<!-- blog-slide -->
					<div class="blog-slide triple-owl-carousel owl-carousel owl-theme">
            <div class="item">
              <!-- featured-imagebox-blog -->
              <div class="featured-imagebox featured-imagebox-blog">
                <div class="featured-thumbnail">
                  <!-- featured-thumbnail -->
                  <img class="img-fluid lazyload" src="/img/posts/post-1.jpg" data-src="images/blog/05.jpg" alt="">
                  <div class="ttm-blog-overlay-iconbox">
                    <a href="single-blog.html"><i class="ti ti-plus"></i></a>
                  </div>
                  <div class="ttm-box-view-overlay"></div>
                </div>
                <div class="featured-content">
                  <!-- featured-content -->
                  <div class="ttm-box-post-date">
                    <!-- ttm-box-post-date -->
                    <span class="ttm-entry-date">
                    <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">17<span class="entry-month entry-year">Apr</span>
                    </time>
                    </span>
                  </div>
                  <div class="featured-title">
                    <!-- featured-title -->
                    <h5><a href="single-blog.html">You Must Try 20 Secret Of Digital Transform</a></h5>
                  </div>
                  <div class="post-meta">
                    <!-- post-meta -->
                    <span class="ttm-meta-line"><i class="fa fa-comments"></i>2,comments</span>
                    <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>

                  </div>
                  <div class="featured-desc">
                    <!-- featured-description -->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                      the...</p>
                  </div>
                  <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                </div>
              </div>
              <!-- featured-imagebox-blog end -->
            </div>
            <div class="item">
              <!-- featured-imagebox-blog -->
              <div class="featured-imagebox featured-imagebox-blog">
                <div class="featured-thumbnail">
                  <!-- featured-thumbnail -->
                  <img class="img-fluid lazyload" src="/img/posts/post-2.jpg" data-src="images/blog/04.jpg" alt="">
                  <div class="ttm-blog-overlay-iconbox">
                    <a href="single-blog.html"><i class="ti ti-plus"></i></a>
                  </div>
                  <div class="ttm-box-view-overlay"></div>
                </div>
                <div class="featured-content">
                  <!-- featured-content -->
                  <div class="ttm-box-post-date">
                    <!-- ttm-box-post-date -->
                    <span class="ttm-entry-date">
                                              <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">12<span class="entry-month entry-year">Dec</span>
                    </time>
                    </span>
                  </div>
                  <div class="featured-title">
                    <!-- featured-title -->
                    <h5><a href="single-blog.html">Define World Best IT Solution Technology</a></h5>
                  </div>
                  <div class="post-meta">
                    <!-- post-meta -->
                    <span class="ttm-meta-line"><i class="fa fa-comments"></i>3,comments</span>
                    <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>

                  </div>
                  <div class="featured-desc">
                    <!-- featured-description -->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                      the...</p>
                  </div>
                  <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                </div>
              </div>
              <!-- featured-imagebox-blog end -->
            </div>
            <div class="item">
              <!-- featured-imagebox-blog -->
              <div class="featured-imagebox featured-imagebox-blog">
                <div class="featured-thumbnail">
                  <!-- featured-thumbnail -->
                  <img class="img-fluid lazyload" src="/img/posts/post-3.jpg" data-src="images/blog/06.jpg" alt="">
                  <div class="ttm-blog-overlay-iconbox">
                    <a href="single-blog.html"><i class="ti ti-plus"></i></a>
                  </div>
                  <div class="ttm-box-view-overlay"></div>
                </div>
                <div class="featured-content">
                  <!-- featured-content -->
                  <div class="ttm-box-post-date">
                    <!-- ttm-box-post-date -->
                    <span class="ttm-entry-date">
                                              <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">22<span class="entry-month entry-year">May</span>
                    </time>
                    </span>
                  </div>
                  <div class="featured-title">
                    <!-- featured-title -->
                    <h5><a href="single-blog.html">10 PHP Frameworks You Need To Use Anywhere</a></h5>
                  </div>
                  <div class="post-meta">
                    <!-- post-meta -->
                    <span class="ttm-meta-line"><i class="fa fa-comments"></i>1,comments</span>
                    <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>

                  </div>
                  <div class="featured-desc">
                    <!-- featured-description -->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                      the...</p>
                  </div>
                  <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                </div>
              </div>
              <!-- featured-imagebox-blog end -->
            </div>
            <div class="item">
              <!-- featured-imagebox-blog -->
              <div class="featured-imagebox featured-imagebox-blog">
                <div class="featured-thumbnail">
                  <!-- featured-thumbnail -->
                  <img class="img-fluid lazyload" src="/img/posts/post-4.jpg" data-src="images/blog/07.jpg" alt="">
                  <div class="ttm-blog-overlay-iconbox">
                    <a href="single-blog.html"><i class="ti ti-plus"></i></a>
                  </div>
                  <div class="ttm-box-view-overlay"></div>
                </div>
                <div class="featured-content">
                  <!-- featured-content -->
                  <div class="ttm-box-post-date">
                    <!-- ttm-box-post-date -->
                    <span class="ttm-entry-date">
                                              <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">04<span class="entry-month entry-year">Aug</span>
                    </time>
                    </span>
                  </div>
                  <div class="featured-title">
                    <!-- featured-title -->
                    <h5><a href="single-blog.html">Digital Conference Of IT Tech Events in 2019</a></h5>
                  </div>
                  <div class="post-meta">
                    <!-- post-meta -->
                    <span class="ttm-meta-line"><i class="fa fa-comments"></i>4,comments</span>
                    <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>

                  </div>
                  <div class="featured-desc">
                    <!-- featured-description -->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                      the...</p>
                  </div>
                  <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                </div>
              </div>
              <!-- featured-imagebox-blog end -->
            </div>
					</div>
				<!-- row end -->
			</div>
		</section>
		<!-- process-section end -->
	</div>
	<!--site-main end-->
</Layout>
