<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('meta_title')</title>
	<meta name="title" content="@yield('meta_title')">
	<meta name="keywords" content="@yield('meta_keywords')">
	<meta name="description" content="@yield('meta_description')">

	<meta property="og:title" content="@yield('meta_title')" />
	<meta property="og:description" content="@yield('meta_description')" />
	<meta property="og:url" content="{{ Request::fullUrl() }}" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="en_GB" />
	<meta name="google-site-verification" content="nnqCRSzVzF82-n3JEq7p4APu2qrddmykGXiJq_Qc0bI" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="@yield('meta_description')" />
	<meta name="twitter:title" content="@yield('meta_title')" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Plus:ital@1&family=Montserrat&family=Poppins&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&family=Montserrat:wght@300;400;500;600;700&display=swap"
		rel="stylesheet">

<!-- Stylesheets -->
<link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css">
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css">
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css">
    <link rel="stylesheet" href="assets/vendors/insur-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/insur-two-icon/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css">
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css">
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css">
    <link rel="stylesheet" href="assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/vendors/insur-three-icon/style.css">
    <!-- template styles -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <link rel="stylesheet" id="langLtr" href="assets/css/insur.css">
    <link rel="stylesheet" href="assets/css/insur-responsive.css">
    <link rel="stylesheet" href="assets/css/color-2.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>




    <!--<div class="preloader">
        <div class="preloader__image"></div>
    </div>
    /.preloader -->


    <div class="page-wrapper">
        <header class="main-header-four">
            <nav class="main-menu main-menu-four">
                <div class="main-menu-four__wrapper">
                    <div class="main-menu-four__wrapper-inner">
                        <div class="main-menu-four__left">
                            <div class="main-menu-four__logo">
                                <a href="/"><img class="lex" src="assets/images/log-2.png"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu-four__right">
                            <div class="main-menu-four__top">
                                <ul class="list-unstyled main-menu-four__top-address-list">
                                    <li>
                                        <i class="icon">
                                            <span class="icon-email"></span>
                                        </i>
                                        <div class="text">
                                            <p><a href="mailto:adelinebio2020@gmail.com">
												adelinebio2020@gmail.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icon">
                                            <span class="icon-pin"></span>
                                        </i>
                                        <div class="text">
                                            <p>S.C.O 70, First Floor Sector 12A, Panchkula Haryana</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="main-menu-four__top-social-btn">
                                    <div class="main-menu-four__top-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="main-menu-four__btn-box">
                                        <a href="/contact" class="thm-btn-two main-menu-four__btn">Get a Quote</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu-four__bottom">
                                <div class="main-menu-four__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        
                                       <li>
                                            <a href="/">Home </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="/about-us">About Us</a>
                                          <ul class="drops">
                                                <li><a href="/about-us#cert1">Company Overview</a></li>
                                                <li class="is-new-menu"><a href="/about-us#cert2">Vision/Mision</a></li>
                                                <li class="is-new-menu"><a href="/about-us#cert3">Why Us</a>
                                                </li>
                                                <li class="is-new-menu"><a href="/about-us#cert4">Export Import</a></li>
                                               
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Services </a>
                                           <ul class="drops">
                                                <li><a href="/third-party-manufacturing">Third Party Manufacturing</a></li>
                                                
                                            </ul>
                                        </li>
                                
                                
                                
                                 <li class="dropdown">
                                            <a href="/tablets">Our Products</a>
                                          <ul class="drops">
                                                <li><a href="/tablets">Tablets</a></li>
                                                <li class="is-new-menu"><a href="/capsules-softgels">Capsules Softgels</a></li>
                                                <li class="is-new-menu"><a href="/injectable">Injectable</a>
                                                </li>
                                                <li class="is-new-menu"><a href="/syrups">Syrups</a></li>
                                                
                                                
                                                
                                                 <li><a href="/rotacaps">	Rotacaps</a></li>
                                                <li class="is-new-menu"><a href="/infusions">infusions</a></li>
                                                <li class="is-new-menu"><a href="/ointments-creams-gels">ointments-creams-gels</a>
                                                </li>
                                                <li class="is-new-menu"><a href="/nasal-drops-sprays">nasal-drops-sprays</a></li>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                               
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Blog</a>
                                            <!--<ul>
                                                <li><a href="news.html">News</a></li>
                                                <li><a href="news-carousel.html">News carousel</a></li>
                                                <li><a href="news-sidebar.html">News right sidebar</a></li>
                                                <li class="is-new-menu"><a href="news-sidebar-left.html">News left
                                                        sidebar</a></li>
                                                <li><a href="news-details.html">News details</a></li>
                                            </ul>-->
                                        </li>
                                        <li>
                                            <a href="/contact">Contact </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu-four__call-search-cart">
                                    <div class="main-menu-four__call">
                                        <div class="main-menu-four__call-icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="main-menu-four__call-content">
                                            <p>Call Anytime</p>
                                            <a href="+91-8699947111">+91-8699947111</a>
                                        </div>
                                    </div>
                                   <!---- <div class="main-menu-four__search-cart-box">
                                        <a href="#"
                                            class="main-menu-four__search search-toggler icon-magnifying-glass"></a>
                                        <a href="cart.html"
                                            class="main-menu-four__cart insur-two-icon-shopping-cart"></a>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

		<div class="stricky-header stricked-menu main-menu main-menu-four">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


	

	@yield('content')













<p>
  <button id="open-popup" type="button" class="primary">Enquire Now</button>
</p>

<div class="overlay"></div>

<div class="lightbox" id="popup">
  <h3>Send Enquiry
(Do Not Post Job Enquiry)</h3>
  <div class="content">
    <form action="https://layerdrops.com/insur-html/main-html/assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                    novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box 1">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box 1">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box 1">
                                                <input type="text" placeholder="Phone number" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box 1">
                                                <input type="text" placeholder="Subject" name="subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box 1">
                                                <textarea name="message" placeholder="Write a message"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn-1">Send a
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
  </div>
  <p class="button-panel">
    <!--<button type="button" class="primary">Save</button>-->
    <button type="button" class="secondary lightbox-close"><i class="fa fa-times" aria-hidden="true"></i></button>
  </p>
</div>














 
    <div id='whatsapp-chat' class='hide'>
  <div class='header-chat'>
    <div class='head-home'>
      <div class='info-avatar'><i class="fa fa-user" aria-hidden="true"></i></div>
      <p><span class="whatsapp-name">Adeline Bio</span><br><small></small></p>

    </div>
    <div class='get-new hide'>
      <div id='get-label'></div>
      <div id='get-nama'></div>
    </div>
  </div>
  <div class='home-chat'>

  </div>
  <div class='start-chat'>
    <div pattern="https://elfsight.com/assets/chats/patterns/whatsapp.png" class="WhatsappChat__Component-sc-1wqac52-0 whatsapp-chat-body">
      <div class="WhatsappChat__MessageContainer-sc-1wqac52-1 dAbFpq">
        <div style="opacity: 0;" class="WhatsappDots__Component-pks5bf-0 eJJEeC">
          <div class="WhatsappDots__ComponentInner-pks5bf-1 hFENyl">
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotOne-pks5bf-3 ixsrax"></div>
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotTwo-pks5bf-4 dRvxoz"></div>
            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotThree-pks5bf-5 kXBtNt"></div>
          </div>
        </div>
        <div style="opacity: 1;" class="WhatsappChat__Message-sc-1wqac52-4 kAZgZq">
          <div class="WhatsappChat__Author-sc-1wqac52-3 bMIBDo">Adeline Bio</div>
          <div class="WhatsappChat__Text-sc-1wqac52-2 iSpIQi">Hi there 👋<br><br>How can I help you?</div>
        </div>
      </div>
    </div>

    <div class='blanter-msg'>
         <a href="https://api.whatsapp.com/send?phone=+91-8699947111&text=Hello">
     <button type="button" class="btn btn-success lex">Start Now</button>
     
          <path d="M.213 32L0 181.333 320 224 0 266.667.213 416 448 224z" />
        </svg></a>

    </div>
  </div>
  <div id='get-number'></div><a class='close-chat' href='javascript:void'>×</a>
</div>
<a class='blantershow-chat' href='javascript:void' title='Show Chat'><svg width="20" viewBox="0 0 24 24">
    <defs />
    <path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z" />
    <path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z" />
    <path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z" />
  </svg> Chat with Us</a>









<div class="icon-bar-1">
  <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="tel:+91-8699947111" class="twitter"><i class="fa fa-phone"></i></a> 
  <!--<a href="#" class="google"><i class="fa fa-google"></i></a> 
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>-->
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>







        <!--Site Footer Start-->
        <footer class="site-footer-two">
            <div class="container">
                <div class="site-footer-two__top">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget-two__about">
                                <div class="footer-widget-two__logo">
                                    <a href="index.html"><img class="hriya"src="assets/images/log-2.png"
                                            alt=""></a>
                                </div>
                                <div class="footer-widget-two__about-text-box">
                                    <p class="footer-widget-two__about-text">Adeline Bio is a trusted name in the pharmaceutical industry, specializing in injectables third-party manufacturing. </p>
                                </div>
                                <div class="site-footer-two__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget-two__links clearfix">
                                <h3 class="footer-widget-two__title">Links</h3>
                                <ul class="footer-widget-two__links-list list-unstyled clearfix">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about-us">About Us</a></li>
                                    <li><a href="/third-party-manufacturing">Third Party Manufacturing</a></li>
                                    <li><a href="/">Our Blogs </a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget-two__latest-news clearfix">
                                <h3 class="footer-widget-two__title">Our Products</h3>
                                <ul class="footer-widget-two__latest-news-list list-unstyled clearfix">
                                    <li>
                                        <div class="footer-widget-two__latest-news-title lex"><a href="/tablets">
                                            
                                                Tablets</a>
                                        </div>
                                        <div class="footer-widget-two__latest-news-content">
                                          
                                            <h4 class="footer-widget-two__latest-news-title"><a href="
                                                    /capsules-softgels">Capsules</a></h4>
                                        </div>
                                    </li>
                                    
                                    
                                    <li>
                                        <div class="footer-widget-two__latest-news-title lex"><a href="/injectable">
                                         
                                               Injectable</a>
                                        </div>
                                        <div class="footer-widget-two__latest-news-content">
                                          
                                            <h4 class="footer-widget-two__latest-news-title"><a
                                                    href="/infusions">Infusions</a></h4>
                                        </div>
                                    </li>
                                    
                                    
                                    <li>
                                        <div class="footer-widget-two__latest-news-title lex"><a href="/eye-drops">
                                            <!--<img src="assets/images/update-10-02-2023/resources/footer-widget-two-latest-news-img-1-1.jpg"
                                                alt="">-->
                                               Eye Drops</a>
                                        </div>
                                        <div class="footer-widget-two__latest-news-content">
                                          
                                            <h4 class="footer-widget-two__latest-news-title"><a
                                                    href="/syrups">Syrups</a></h4>
                                        </div>
                                    </li>
                                    
                                    
                                    
                                    <li>
                                        <div class="footer-widget-two__latest-news-title lex"><a href="/respules">
                                           Respules</a>
                                        </div>
                                        <div class="footer-widget-two__latest-news-content">
                                          
                                            <h4 class="footer-widget-two__latest-news-title"><a
                                                    href="/rotacaps">Rotacaps</a></h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget-two__contact clearfix">
                                <h3 class="footer-widget-two__title">Contact</h3>
                                <p class="footer-widget-two__contact-text">SCO-70, First Floor, Sector-12 A,<BR> Haryana 134113</p>
                                <ul class="footer-widget-two__contact-list list-unstyled clearfix">
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:adelinebio2020@gmail.com">adelinebio2020@gmail.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-phone-alt"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:+91-8699947111">+91-8699947111</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="site-footer-two__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer-two__bottom-inner">
                                <p class="site-footer-two__bottom-text">© All Copyright 2023 Adeline Bio. All Rights Reserved. <a
                                        href="https://www.rednirus.in/">Design & Developed By Rednirus Digital Media </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content mobile-nav__content--two">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                 <div class="ltyy">
                <a href="/" aria-label="logo image"><img
                        src="/assets/images/log-2.png" width="143" alt=""></a>
            </div>   </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact mobile-nav__contact--two list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:adelinebio2020@gmail.com">adelinebio2020@gmail.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+91-8699947111">+91-8699947111</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->


<!-- Scroll To Top -->
<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/jarallax/jarallax.min.js"></script>
<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="assets/vendors/nouislider/nouislider.min.js"></script>
<script src="assets/vendors/odometer/odometer.min.js"></script>
<script src="assets/vendors/swiper/swiper.min.js"></script>
<script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="assets/vendors/wnumb/wNumb.min.js"></script>
<script src="assets/vendors/wow/wow.js"></script>
<script src="assets/vendors/isotope/isotope.js"></script>
<script src="assets/vendors/countdown/countdown.min.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="assets/vendors/vegas/vegas.min.js"></script>
<script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="assets/vendors/timepicker/timePicker.js"></script>
<script src="assets/vendors/circleType/jquery.circleType.js"></script>
<script src="assets/vendors/circleType/jquery.lettering.min.js"></script>

<script src="assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


<!-- template js -->
<script src="assets/js/insur.js"></script>

<script>
	const btns =document.querySelectorAll(".slide-btn");
    const slider =document.querySelectorAll(".video-bg");

    var slideVideo = function(index) {
      btns.forEach((btn) => {
        btn.classList.remove('active');
      });
      slider.forEach((slide) => {
        slide.classList.remove('active');
      });
      btns[index].classList.add('active');
      slider[index].classList.add('active');
    }

    btns.forEach((btn,i) => {
      btn.addEventListener('click', () => {
        slideVideo(i);
      })
    })
	</script>
	
	<script>
	    /* Whatsapp Chat Widget by www.bloggermix.com */
$(document).on("click", "#send-it", function () {
  var a = document.getElementById("chat-input");
  if ("" != a.value) {
    var b = $("#get-number").text(),
      c = document.getElementById("chat-input").value,
      d = "https://web.whatsapp.com/send",
      e = b,
      f = "&text=" + c;
    if (
      /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      )
    )
      var d = "whatsapp://send";
    var g = d + "?phone=+27 6 63387396" + e + f;
    window.open(g, "_blank");
  }
}),
  $(document).on("click", ".informasi", function () {
    (document.getElementById("get-number").innerHTML = $(this)
      .children(".my-number")
      .text()),
      $(".start-chat,.get-new").addClass("show").removeClass("hide"),
      $(".home-chat,.head-home").addClass("hide").removeClass("show"),
      (document.getElementById("get-nama").innerHTML = $(this)
        .children(".info-chat")
        .children(".chat-nama")
        .text()),
      (document.getElementById("get-label").innerHTML = $(this)
        .children(".info-chat")
        .children(".chat-label")
        .text());
  }),
  $(document).on("click", ".close-chat", function () {
    $("#whatsapp-chat").addClass("hide").removeClass("show");
  }),
  $(document).on("click", ".blantershow-chat", function () {
    $("#whatsapp-chat").addClass("show").removeClass("hide");
  });

	</script>
	
	<script>
	    $('#open-popup').on('click', function(){
  $('.overlay').fadeIn('fast');
  $('#popup').show('fast');
});

$('.lightbox-close').on('click', function(){
  $(this).closest('.lightbox').hide('fast');
  $('.overlay').fadeOut('fast');
});
	</script>
	
	
	
</body>
<!-- Mirrored from kodesolution.com/html/2023/desix-html/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Sep 2023 09:12:07 GMT -->
</html>