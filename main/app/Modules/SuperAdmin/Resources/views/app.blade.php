<!DOCTYPE html>
<html lang="en">

<head>
	@routes(['superadmin', 'auth'])

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Altech – IT Sollutions and Services HTML Template" />
    <meta name="author" content="https://www.themetechmount.com/" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Altech – IT Solutions and Services HTML Template</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />


    <!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="revolution/css/rs6.css">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="css/shortcodes.css" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="css/main.css" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />

</head>

<body>
	@include('publicpages::partials.preloader')

	@inertia

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <!-- ttm-topbar-wrapper -->
            <div class="ttm-topbar-wrapper clearfix">
                <div class="container">
                    <div class="ttm-topbar-content">
                        <ul class="top-contact text-left">
                            <li><i class="fa fa-map-marker"></i>24 Tech Roqad st Ny 10023</li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com.com">info@example.com</a></li>
                        </ul>
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
                                                    <li class="active"><a href="index.html">Homepage 1</a></li>
                                                    <li><a href="home-2.html">Homepage 2</a></li>
                                                    <li><a href="home-3.html">Homepage 3</a></li>
                                                    <li><a href="#">Header Styles</a>
                                                        <ul>
                                                            <li><a href="index.html">Header Style 01</a></li>
                                                            <li><a target="_blank" href="header-style-02.html">Header Style 02</a></li>
                                                            <li><a target="_blank" href="header-style-03.html">Header Style 03</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="aboutus-01.html">About Us 1</a></li>
                                                    <li><a href="aboutus-02.html">About Us 2</a></li>
                                                    <li><a href="services-01.html">Services 1</a></li>
                                                    <li><a href="services-02.html">Services 2</a></li>
                                                    <li><a href="our-expert.html">Our Expert</a></li>
                                                    <li><a href="faq.html">FAQs</a></li>
                                                    <li><a href="contact-01.html">Contact Us 1</a></li>
                                                    <li><a href="contact-02.html">Contact Us 2</a></li>

                                                    <li><a href="error.html">Error Page</a></li>
                                                    <li><a href="element.html">Elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Services</a>
                                                <ul>
                                                    <li><a href="it-consultancy.html">IT Consultancy</a></li>
                                                    <li><a href="digital-services.html">Digital Services</a></li>
                                                    <li><a href="advisory-services.html">Advisory Services</a></li>
                                                    <li><a href="data-structuring.html">Data Structuring</a></li>
                                                    <li><a href="experience-design.html">Experience Design</a></li>
                                                    <li><a href="content-engineering.html">Content Engineering</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Project</a>
                                                <ul>
                                                    <li><a href="project-style-01.html">Project Style 1</a></li>
                                                    <li><a href="project-style-02.html">Project Style 2</a></li>
                                                    <li><a href="#">Project Single</a>
                                                        <ul>
                                                            <li><a href="single-style-01.html">Single Style 1</a></li>
                                                            <li><a href="single-style-02.html">Single Style 2</a></li>
                                                            <li><a href="single-style-03.html">Single Style 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog Classic</a></li>
                                                    <li><a href="blog-grid.html">Blog Grid View</a></li>
                                                    <li><a href="blog-top-image.html">Blog Top Image</a></li>
                                                    <li><a href="blog-left-image.html">Blog Left Image</a></li>
                                                    <li><a href="single-blog.html">Blog Single View</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Shop</a>
                                                <ul>
                                                    <li><a href="shop.html">Default Shop</a></li>
                                                    <li><a href="product-details.html">Single Product Details</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
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

        <!-- START homeclassicmain REVOLUTION SLIDER 6.0.1 -->
        <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery">
            <rs-module id="rev_slider_1_1" style="" data-version="6.0.1" class="rev_slider_1_1_height">
                <!-- rs-slides -->
                <rs-slides>
                    <!-- rs-slide -->
                    <rs-slide data-key="rs-1" data-title="Slide" data-thumb="images/slides/slider-mainbg-001.jpg" data-anim="  ei:d;eo:d;s:1000;r:0;t:fade;sl:0;">
                        <img src="images/slides/slider-mainbg-001.jpg" title="home-mainslider-bg001" width="1920" height="850" class="rev-slidebg" data-no-retina>
                        <rs-layer id="slider-1-slide-1-layer-0" class="ttm-bgcolor-skincolor" data-type="shape" data-rsp_ch="on" data-xy="xo:54px,54px,-100px,-96px;yo:327px,197px,105px,64px;" data-text="w:normal;s:20,20,12,7;l:0,0,15,9;" data-dim="w:55px,55px,34px,20px;h:4px,4px,2px,1px;"
                            data-vbility="t,t,f,f" data-frame_0="x:50,50,31,19;" data-frame_1="e:Power0.easeIn;st:190;sR:190;" data-frame_999="o:0;st:w;sR:8510;">
                        </rs-layer>
                        <a id="slider-1-slide-1-layer-1" class="rs-layer ttm-btn-bgcolor-skincolor ttm-btn ttm-btn-size-md" href="#" target="_self" rel="nofollow" data-type="text" data-rsp_ch="on" data-xy="x:l,l,l,c;xo:54px,54px,40px,0;yo:573px,443px,290px,193px;" data-text="s:15,15,12,12;l:27,27,23,25;fw:600;a:center;"
                            data-padding="t:12,12,10,6;r:35,35,22,14;b:15,15,10,6;l:35,35,22,14;" data-frame_0="y:100%;" data-frame_1="st:940;sp:500;sR:940;" data-frame_999="o:0;st:w;sR:7560;">Discuss Your Project
                        </a>
                        <rs-layer id="slider-1-slide-1-layer-2" data-type="text" data-color="#263045" data-rsp_ch="on" data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:342px,212px,111px,84px;" data-text="w:normal;s:62,62,50,37;l:70,70,50,50;fw:600;" data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="e:Power0.easeIn;st:250;sp:800;sR:250;" data-frame_999="o:0;st:w;sR:7950;">Best <strong class="ttm-textcolor-skincolor">Platform</strong> to Grow
                        </rs-layer>
                        <rs-layer id="slider-1-slide-1-layer-3" data-type="text" data-color="#263045" data-rsp_ch="on" data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:409px,279px,163px,129px;" data-text="w:normal;s:62,62,50,37;l:70,70,50,50;fw:600;" data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="e:Power0.easeIn;st:450;sp:800;sR:450;" data-frame_999="o:0;st:w;sR:7750;">Your Business
                        </rs-layer>
                        <a id="slider-1-slide-1-layer-4" class="rs-layer" href="#" target="_self" rel="nofollow" data-type="text" data-color="#263045" data-rsp_ch="on" data-xy="x:l,l,l,c;xo:340px,340px,245px,0;yo:587px,457px,304px,239px;" data-text="s:15,15,12,13;l:25,25,15,25;fw:700;"
                            data-frame_0="y:100%;" data-frame_1="st:1050;sp:500;sR:1050;" data-frame_999="o:0;st:w;sR:7450;" data-frame_hover="c:#2d4a8a;">Get A Quote
                        </a>
                        <rs-layer id="slider-1-slide-1-layer-5" data-type="text" data-color="#3b404c" data-rsp_ch="on" data-xy="xo:50px,50px,40px,-444px;yo:488px,358px,220px,113px;" data-text="s:16,16,14,8;l:27,27,23,14;" data-vbility="t,t,t,f" data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="e:Power0.easeIn;st:860;sp:500;sR:860;" data-frame_999="o:0;st:w;sR:7640;">We are equipped with an updated technical knowledge to serve our customers<br> properly. Our method of application maintains the industry.
                        </rs-layer>
                        <a id="slider-1-slide-1-layer-6" class="rs-layer" href="#" target="_self" rel="nofollow" data-type="text" data-color="#263045" data-rsp_ch="on" data-xy="xo:308px,308px,222px,-134px;yo:587px,457px,304px,192px;" data-text="s:23,23,15,9;l:25,25,15,9;fw:800;"
                            data-vbility="t,t,t,f" data-frame_0="y:100%;" data-frame_1="st:1050;sp:500;sR:1050;" data-frame_999="o:0;st:w;sR:7450;" data-frame_hover="c:#2d4a8a;"> <i class="ti ti-arrow-circle-right"></i>
                        </a>
                    </rs-slide>
                    <!-- rs-slide -->
                    <!-- rs-slide -->
                    <rs-slide data-key="rs-2" data-title="Slide" data-thumb="images/slides/slider-mainbg-002.jpg" data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;">

                        <img src="images/slides/slider-mainbg-002.jpg" title="home-mainslider-bg002" width="1920" height="850" class="rev-slidebg" data-no-retina>

                        <rs-layer id="slider-1-slide-2-layer-0" class="ttm-bgcolor-skincolor" data-type="shape" data-rsp_ch="on" data-xy="x:r;xo:666px,666px,-100px,-96px;yo:327px,197px,105px,64px;" data-text="w:normal;s:20,20,12,7;l:0,0,15,9;" data-dim="w:55px,55px,34px,20px;h:4px,4px,2px,1px;"
                            data-vbility="t,t,f,f" data-frame_0="x:50,50,31,19;" data-frame_1="e:Power0.easeIn;st:190;sR:190;" data-frame_999="o:0;st:w;sR:8510;">
                        </rs-layer>
                        <a id="slider-1-slide-2-layer-1" class="rs-layer ttm-btn-bgcolor-darkgrey ttm-btn ttm-btn-size-md" href="#" target="_self" rel="nofollow" data-type="text" data-rsp_ch="on" data-xy="x:r,r,r,c;xo:400px,400px,359px,0;yo:574px,444px,290px,227px;" data-text="s:15,15,12,12;l:27,27,23,25;fw:600;a:center;"
                            data-padding="t:12,12,10,6;r:35,35,22,14;b:12,12,10,6;l:35,35,22,14;" data-border="bos:solid;boc:#263045;bow:1px,1px,1px,1px;" data-frame_0="y:100%;" data-frame_1="st:1080;sp:500;sR:1080;" data-frame_999="o:0;st:w;sR:7420;">Get Altech
                        </a>

                        <rs-layer id="slider-1-slide-2-layer-2" data-type="text" data-color="#263045" data-rsp_ch="on" data-xy="x:r,r,r,c;xo:50px,50px,50px,0;yo:342px,212px,111px,73px;" data-text="w:normal;s:62,62,50,37;l:70,70,50,50;fw:600;" data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="e:Power0.easeIn;st:250;sp:800;sR:250;" data-frame_999="o:0;st:w;sR:7950;">Real-Time Monitoring
                        </rs-layer>
                        <rs-layer id="slider-1-slide-2-layer-3" data-type="text" data-color="#263045" data-rsp_ch="on" data-xy="x:r,r,r,c;xo:164px,164px,145px,0;yo:409px,279px,163px,120px;" data-text="w:normal;s:62,62,50,37;l:70,70,50,50;fw:600;" data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="e:Power0.easeIn;st:450;sp:800;sR:450;" data-frame_999="o:0;st:w;sR:7750;">Your <strong class="ttm-textcolor-skincolor">Infrstracture</strong>
                        </rs-layer>
                        <rs-layer id="slider-1-slide-2-layer-4" data-type="text" data-color="#3b404c" data-rsp_ch="on" data-xy="x:r;xo:95px,95px,40px,-444px;yo:488px,358px,220px,113px;" data-text="s:16,16,14,8;l:27,27,23,14;" data-dim="w:auto,auto,552px,340px;" data-vbility="t,t,t,f"
                            data-frame_0="x:-50,-50,-31,-19;" data-frame_1="e:Power0.easeIn;st:860;sp:500;sR:860;" data-frame_999="o:0;st:w;sR:7640;">We are equipped with an updated technical knowledge to serve our customers<br> properly. Our method of application maintains the industry.
                        </rs-layer>
                        <a id="slider-1-slide-2-layer-5" class="rs-layer ttm-btn-bgcolor-skincolor ttm-btn ttm-btn-size-md" href="#" target="_self" rel="nofollow" data-type="text" data-rsp_ch="on" data-xy="x:r,r,r,c;xo:575px,575px,487px,0;yo:573px,443px,291px,180px;" data-text="s:15,15,12,12;l:27,27,23,25;fw:600;a:center;"
                            data-padding="t:12,12,10,6;r:35,35,22,14;b:15,15,10,6;l:35,35,22,14;" data-frame_0="y:100%;" data-frame_1="st:940;sp:500;sR:940;" data-frame_999="o:0;st:w;sR:7560;">Read More
                        </a>
                    </rs-slide>
                    <!-- rs-slide -->
                </rs-slides>
            </rs-module>
            <!-- rs-module -->
        </rs-module-wrap>
        <!-- END REVOLUTION SLIDER -->

        <!--site-main start-->
        <div class="site-main">

            <!-- zero-padding-section -->
            <section class="ttm-row zero-padding-section position-relative z-1 clearfix">
                <div class="container">
                    <div class="row no-gutters ttm-bgcolor-darkgrey featured-icon-box-style1-row">
                        <div class="col-md-4">
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box left-icon style1 ttm-bgcolor-skincolor">
                                <div class="featured-icon">
                                    <!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-bgcolor-darkgrey ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-system"></i>
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
                        <div class="col-md-4">
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box left-icon style1 ttm-bgcolor-darkgrey">
                                <div class="featured-icon">
                                    <!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-clock"></i>
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
                                        <p>000 7845 114- 123 4567 890</p>
                                    </div>
                                </div>
                            </div>
                            <!--  featured-icon-box END -->
                        </div>
                        <div class="col-md-4">
                            <!--  featured-icon-box -->
                            <div class="featured-icon-box left-icon style1 ttm-bgcolor-skincolor">
                                <div class="featured-icon">
                                    <!--  featured-icon -->
                                    <div class="ttm-icon ttm-icon_element-bgcolor-darkgrey ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-developer"></i>
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
                    <div class="row">
                        <!-- row -->
                        <div class="col-lg-6">
                            <!-- section title -->
                            <div class="section-title with-desc clearfix">
                                <div class="title-header">
                                    <h5>About us</h5>
                                    <h2 class="title">We are here to IT Solution with 20 years of <span>experience</span></h2>
                                </div>
                                <div class="title-desc">
                                    <p>Web designing in a powerful way of just not an only professions, however, in a passion for our Company. We have to a tendency to believe the idea that smart looking of any website is the first impression on visitors.
                                        And the smart design of any website is the starting point.</p>
                                    <P>We have a special team for website style who has been involved in designing professional websites of all categories.</P>
                                </div>
                            </div>
                            <!-- section title end -->
                            <!-- row -->
                            <div class="row no-gutters mt-35">
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <ul class="ttm-list ttm-list-style-icon">
                                        <li><i class="fa fa-circle-o ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Web And Mobile Application </span></li>
                                        <li><i class="fa fa-circle-o ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">New Domain Registration</span></li>
                                        <li><i class="fa fa-circle-o ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Data Text Synchronization</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <ul class="ttm-list ttm-list-style-icon">
                                        <li><i class="fa fa-circle-o ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Improving Our Website Design</span></li>
                                        <li><i class="fa fa-circle-o ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Web &amp; Email Hosting Services </span></li>
                                        <li><i class="fa fa-circle-o ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Artificial Intelligence Web App</span></li>
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
                                    <img class="img-fluid lazyload" data-src="images/single-img-one.png" title="single-img-one" alt="single-img-one">
                                </div>
                                <!-- ttm_single_image-wrapper end -->
                                <!--featured-icon-box-->
                                <div class="about-overlay-01">
                                    <p class="mb-0">American IT Solutions Association AIA.</p>
                                </div>
                                <!-- featured-icon-box end-->
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- row -->
                    <div class="row">

                    </div>
                    <!-- row end-->
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
                    <!-- row -->
                    <div class="row">
                        <div class="history-slide owl-carousel" data-item="4" data-nav="false" data-dots="false" data-auto="true">
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
                                        Expertise in IT consultancy for the IT companies, for their different working areas Web-app related.
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
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
                                        We provide all kind of IT management services of in the according to on their organization prioritie.
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
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
                                                <i class="flaticon flaticon-data"></i>
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
                                        Our firm is expert to create an efficient for user interface that makes design user interaction lively.
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
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
                                                <i class="flaticon flaticon-global-1"></i>
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
                                        We develop, migrate and work on web applications to ensure that they run on capably on clouds.
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
                            <!-- ttm-history-box-wrapper  END-->
                        </div>
                    </div>
                    <!-- row end-->
                    <div class="row">
                        <div class="col-md-12 text-center mt-45 res-991-mt-30">
                            <p class="mb-0">Don’t hesitate, contact us for better help and services. <strong><u><a href="#" class="ttm-textcolor-darkgrey"> View more Services</a></u></strong></p>
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
                            <img data-src="images/bg-image/col-bgimage-1.jpg" class="ttm-equal-height-image lazyload" alt="col-bgimage-1">
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
                                                <p>Our IT services converge business and technology experts to help to manage business processes of all categories.</p>
                                            </div>
                                        </div>
                                        <!-- section title end -->
                                        <div class="row mt-40">
                                            <div class="col-12">
                                                <!-- featured-icon-box -->
                                                <div class="featured-icon-box style2 left-icon icon-align-top">
                                                    <div class="featured-icon">
                                                        <!-- featured-icon -->
                                                        <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md">
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
                                                            <p>Our firm is expert to create an efficient user interface that makes user interaction is lively.</p>
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
                                                        <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md">
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
                                                            <p>Statistical analysis to help an organization to gain insights from large information web sets.</p>
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
                                                        <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md">
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
                                                            <p>We Create the optimal platform to develop and run digital applications for our clients app.</p>
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
                                <div class="title-desc">The positive distinction within the World Inspiring of Success and Connections of People and Organizations.</div>
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
                        <div class="team-slide owl-carousel" data-item="3" data-nav="false" data-dots="false" data-auto="false">
                            <!-- featured-imagebox-team -->
                            <div class="featured-imagebox featured-imagebox-team style1">
                                <div class="featured-thumbnail">
                                    <!-- featured-thumbnail -->
                                    <img class="img-fluid lazyload" data-src="images/team-member/team-img01.jpg" alt="image">
                                    <div class="ttm-social-links-wrapper">
                                        <ul class="social-icons list-inline">
                                            <!-- social-icons -->
                                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li class="social-googleplus"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
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
                            <!-- featured-imagebox-team -->
                            <div class="featured-imagebox featured-imagebox-team style1">
                                <div class="featured-thumbnail">
                                    <!-- featured-thumbnail -->
                                    <img class="img-fluid lazyload" data-src="images/team-member/team-img02.jpg" alt="image">
                                    <div class="ttm-social-links-wrapper">
                                        <ul class="social-icons list-inline">
                                            <!-- social-icons -->
                                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li class="social-googleplus"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
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
                            <!-- featured-imagebox-team -->
                            <div class="featured-imagebox featured-imagebox-team style1">
                                <div class="featured-thumbnail">
                                    <!-- featured-thumbnail -->
                                    <img class="img-fluid lazyload" data-src="images/team-member/team-img03.jpg" alt="image">
                                    <div class="ttm-social-links-wrapper">
                                        <ul class="social-icons list-inline">
                                            <!-- social-icons -->
                                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li class="social-googleplus"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
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
                            <!-- featured-imagebox-team -->
                            <div class="featured-imagebox featured-imagebox-team style1">
                                <div class="featured-thumbnail">
                                    <!-- featured-thumbnail -->
                                    <img class="img-fluid lazyload" data-src="images/team-member/team-img04.jpg" alt="image">
                                    <div class="ttm-social-links-wrapper">
                                        <ul class="social-icons list-inline">
                                            <!-- social-icons -->
                                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li class="social-googleplus"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
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
                                    <div class="title-desc">Appropriate for your specific business, making it easy for<br> you to have quality IT services. What We Do</div>
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
                                    <div class="testimonial-slide style1 owl-carousel" data-item="1" data-nav="false" data-dots="true" data-auto="false">
                                        <!-- testimonials -->
                                        <div class="testimonials text-center">
                                            <div class="testimonial-content">
                                                <!-- testimonials-content -->
                                                <div class="testimonial-avatar">
                                                    <div class="testimonial-img">
                                                        <!-- testimonials-img -->
                                                        <img class="img-center lazyload" data-src="images/testimonial/01.jpg" alt="testimonial-img">
                                                    </div>
                                                </div>
                                                <blockquote>Our team discussed every single detail to make sure Creatives Planet is the most versatile and unique theme created so far. No coding skills.</blockquote>
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
                                                    <label>Web Devloper</label>
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
                                                        <img class="img-center lazyload" data-src="images/testimonial/02.jpg" alt="testimonial-img">
                                                    </div>
                                                </div>
                                                <blockquote>Our team discussed every single detail to make sure Creatives Planet is the most versatile and unique theme created so far. No coding skills.</blockquote>
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
                                                    <label>Web Devloper</label>
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
                                                        <img class="img-center lazyload" data-src="images/testimonial/03.jpg" alt="testimonial-img">
                                                    </div>
                                                </div>
                                                <blockquote>Our team discussed every single detail to make sure Creatives Planet is the most versatile and unique theme created so far. No coding skills.</blockquote>
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
                                                    <label>Web Devloper</label>
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
                                <div class="ttm-processbox text-center">
                                    <div class="ttm-box-image">
                                        <img class="img-fluid lazyload" data-src="images/step-one.jpg" alt="step-one" title="step-one">
                                        <div class="process-num">
                                            <span class="number">01</span>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Choose a Service</h5>
                                        </div>
                                        <div class="ttm-box-description">Aute irure dolor reprehenderit velit esse cillum dolore fugiat</div>
                                    </div>
                                </div>
                                <div class="ttm-processbox text-center">
                                    <div class="ttm-box-image">
                                        <img class="img-fluid lazyload" data-src="images/step-two.jpg" alt="step-two" title="step-two">
                                        <div class="process-num">
                                            <span class="number">02</span>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Request a Meeting</h5>
                                        </div>
                                        <div class="ttm-box-description">Aute irure dolor reprehenderit velit esse cillum dolore fugiat</div>
                                    </div>
                                </div>
                                <div class="ttm-processbox text-center">
                                    <div class="ttm-box-image">
                                        <img class="img-fluid lazyload" data-src="images/step-three.jpg" alt="step-three" title="step-three">
                                        <div class="process-num">
                                            <span class="number">03</span>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Receive Custom Plan</h5>
                                        </div>
                                        <div class="ttm-box-description">Aute irure dolor reprehenderit velit esse cillum dolore fugiat</div>
                                    </div>
                                </div>
                                <div class="ttm-processbox text-center">
                                    <div class="ttm-box-image">
                                        <img class="img-fluid lazyload" data-src="images/step-four.jpg" alt="step-four" title="step-four">
                                        <div class="process-num">
                                            <span class="number">04</span>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Let’s Make it Happen</h5>
                                        </div>
                                        <div class="ttm-box-description">Aute irure dolor reprehenderit velit esse cillum dolore fugiat</div>
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
            <section class="ttm-row bottomzero-padding-section ttm-bgcolor-skincolor ttm-bg ttm-bgimage-yes bg-img5 clearfix">
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
                                <div class="title-desc">A project is a temporary endeavor with a defined beginning and end, scope, and assigned resources.</div>
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
                <div class="container-fluid">
                    <div class="row portfolio-slide owl-carousel ttm-boxes-spacing-10px" data-item="5" data-nav="false" data-dots="false" data-auto="false">
                        <div class="col-lg ttm-box-col-wrapper">
                            <!-- featured-imagebox-portfolio -->
                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <img class="img-fluid lazyload" data-src="images/portfolio/01.jpg" alt="image">
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
                                    <img class="img-fluid lazyload" data-src="images/portfolio/02.jpg" alt="image">
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
                                    <img class="img-fluid lazyload" data-src="images/portfolio/03.jpg" alt="image">
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
                                    <img class="img-fluid lazyload" data-src="images/portfolio/04.jpg" alt="image">
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
                                    <img class="img-fluid lazyload" data-src="images/portfolio/05.jpg" alt="image">
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
                                    <img class="img-fluid lazyload" data-src="images/portfolio/06.jpg" alt="image">
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
                        <div class="blog-slide owl-carousel owl-theme owl-loaded " data-item="3" data-nav="false" data-dots="false" data-auto="false">
                            <!-- featured-imagebox-blog -->
                            <div class="featured-imagebox featured-imagebox-blog">
                                <div class="featured-thumbnail">
                                    <!-- featured-thumbnail -->
                                    <img class="img-fluid lazyload" data-src="images/blog/05.jpg" alt="">
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
                                            <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">17<span class="entry-month entry-year">Apr</span></time>
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
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
                            <!-- featured-imagebox-blog end -->
                            <!-- featured-imagebox-blog -->
                            <div class="featured-imagebox featured-imagebox-blog">
                                <div class="featured-thumbnail">
                                    <!-- featured-thumbnail -->
                                    <img class="img-fluid lazyload" data-src="images/blog/04.jpg" alt="">
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
                                            <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">12<span class="entry-month entry-year">Dec</span></time>
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
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
                            <!-- featured-imagebox-blog end -->
                            <!-- featured-imagebox-blog -->
                            <div class="featured-imagebox featured-imagebox-blog">
                                <div class="featured-thumbnail">
                                    <!-- featured-thumbnail -->
                                    <img class="img-fluid lazyload" data-src="images/blog/06.jpg" alt="">
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
                                            <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">22<span class="entry-month entry-year">May</span></time>
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
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
                            <!-- featured-imagebox-blog end -->
                            <!-- featured-imagebox-blog -->
                            <div class="featured-imagebox featured-imagebox-blog">
                                <div class="featured-thumbnail">
                                    <!-- featured-thumbnail -->
                                    <img class="img-fluid lazyload" data-src="images/blog/07.jpg" alt="">
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
                                            <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">04<span class="entry-month entry-year">Aug</span></time>
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
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
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
                                    We are the best world Information Technology Company. Providing the highest quality in hardware &amp; Network solutions. About more than 20 years of experience and 1000 of innovative achievements.
                                </div>
                                <div class="quicklink-box">
                                    <!--  featured-icon-box -->
                                    <div class="featured-icon-box left-icon">
                                        <div class="featured-icon">
                                            <!--  featured-icon -->
                                            <div class="ttm-icon ttm-icon_element-style-round ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md ttm-icon_element-style-round">
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
                                    <li><a href="#">Make Appointment</a></li>
                                    <li><a href="#">Customer Services</a></li>
                                    <li><a href="#">Department Services</a></li>
                                    <li><a href="#">About Company</a></li>
                                    <li><a href="#">Our Case Studies</a></li>
                                    <li><a href="#">Free Consultation</a></li>
                                    <li><a href="#">Meet Our Experts</a></li>
                                    <li><a href="#">Our Business Growth</a></li>
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
                                            <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="social-flickr"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
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
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Privacy</a></li>
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

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div>
    <!-- page end -->

    <!-- Javascript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery-waypoints.js"></script>
    <script src="js/jquery-validate.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/numinate.min.js?ver=4.9.3"></script>
    <script src="js/lazysizes.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Revolution Slider -->
    <script src="revolution/js/revolution.tools.min.js"></script>
    <script src="revolution/js/rs6.min.js"></script>
    <script src="revolution/js/slider.js"></script>

    <!-- Javascript end-->

</body>

</html>
