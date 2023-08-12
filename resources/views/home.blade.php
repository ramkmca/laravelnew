@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>-->
<!doctype html>
<html class="no-js" lang="en-US">

<head>
    <!-- meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
    <meta name="keywords" content="Best Dental Clinic." />
    <meta name="description" content="Best Dental Clinic in India. ">
    <!-- Title -->
    <title>A.S Dental Clinic in India.</title>
    <!--  Desktop Favicons  -->
   <link rel="stylesheet" href="asset/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />    
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- ***** Boostrap Custom / Addons Stylesheets ***** -->
	 <script src="{{ asset('public/js/bootstrap5.bumdal.min.js') }}" defer></script>

       <!-- Styles -->
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/css/bjquery-ui.css') }}" rel="stylesheet">
	<link href="{{ asset('public/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('public/css/custom.css') }}" rel="stylesheet">
	<link href="{{ asset('public/css/template.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="asset/css/bootstrap-datepicker.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="asset/js/bootstrap-timepicker/compiled/timepicker.css" type="text/css" media="all">
    <!-- Required CSS file for iOS Slider element -->
    <link rel="stylesheet" href="asset/css/sliders/style.css" type="text/css" media="all">
    <!-- ***** Main + Responsive & Base sizing CSS Stylesheet ***** -->
    <link rel="stylesheet" href="asset/css/template.css" type="text/css" media="all">
    <link rel="stylesheet" href="asset/css/responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="asset/css/base-sizing.css" type="text/css" media="all">
    <!-- Required custom CSS file for this niche -->
    <link rel="stylesheet" href="asset/css/custom-dental.css" type="text/css" />
    <link rel="stylesheet" href="asset//css/jquery.datepicker.css" type="text/css" />
    <!-- Custom CSS Stylesheet -->
    <link rel="stylesheet" href="asset/css/custom.css" type="text/css" />
    <link rel="stylesheet" href="asset/css/wickedpicker.css" type="text/css" />
    <!-- Modernizr Library -->
    <script type="text/javascript" src="asset/js/modernizr.min.js"></script>
    <!-- jQuery Library -->
    <script type="text/javascript" src="asset/js/jquery.js"></script>
    <script type="text/javascript" src="asset//js/wickedpicker.js"></script>
</head>

<body class="">
    <!-- Page Wrapper -->
    <div id="page_wrapper">
        <!-- Header style 1 -->
        <header id="header" class="site-header style1 cta_button">
            <!-- header bg -->
            <div class="kl-header-bg"></div>
            <!--/ header bg -->
            <!-- siteheader-container -->
            <div class="container siteheader-container">
                <!-- top-header -->
                <!--/ top-header -->
                <!-- separator -->
                <div class="separator"></div>
                <!--/ separator -->
                <!-- left side -->
                <!-- logo container-->
                <div class="logo-container hasInfoCard logosize--yes">
                    <!-- Logo -->
                    <h1 class="site-logo logo" id="logo">
                        <a href="index.html">
                            <img src="asset/images/pihu-logo.png" width="145px;" height='56px;' class="logo-img" alt="Dental Clinic Logo" title="Dental Clinic Logo">
                        </a>
                    </h1>
                    <!--/ Logo -->
                    <!-- InfoCard -->
                    <div id="infocard" class="logo-infocard" style="width:496px;">
                        <div class="custom">
                            <div class="row">
                                <div class="col-sm-5">
                                    <p style="text-align: center; margin:0 0 -4px">
                                        <img src="asset/images/pihu-icon.png" class="" alt="Dental Clinic" title="Dental Clinic" />
                                    </p>
                                    <p style="margin:0px;">
                                        The Best Dental Hospital in Noida.
                                    </p>
                                    <p style="margin:0px;">
                                        <i class="glyphicon glyphicon-earphone"></i>&nbsp;9953734568<br />
                                        <i class="glyphicon glyphicon-envelope"></i>
                                    </p>
                                </div>
                                <!--/ col-sm-5 -->
                                <div class="col-sm-7">
                                    <div class="custom contact-details">
                                        <p>
                                            Dental Clinic<br />
                                            <i class="glyphicon glyphicon-home"></i>&nbsp; CM-22 Main Road, Sector 122, Noida - 201301<br />
                                        </p>
                                    </div>
                                    <div style="height:20px;">
                                    </div>
                                </div>
                                <!--/ col-sm-7 -->
                                <div class="col-sm-7">
                                    <div class="custom contact-details">
                                        <p>
                                            A.S Dental Clinic<br />
                                            <i class="glyphicon glyphicon-home"></i>&nbsp; UG 10, Complex Noida, Amrapali Zodiac, Sector 120, Gautam Buddha Nagar, Uttar Pradesh 201304<br />
                                            <a href="#" class="map-link" target="_blank" title=""><span class="glyphicon glyphicon-map-marker icon-white"></span><span>Open in Google Maps</span></a>
                                        </p>
                                    </div>
                                    <div style="height:20px;">
                                    </div>
                                </div>
                            </div>
                            <!--/ row -->
                        </div>
                        <!--/ custom -->
                    </div>
                    <!--/ InfoCard -->
                </div>
                <!--/ logo container-->
                <!-- separator -->
                <div class="separator visible-xxs"></div>
                <!--/ separator -->
                <!-- responsive menu trigger -->
                <div id="zn-res-menuwrapper">
                    <a href="#" class="zn-res-trigger zn-header-icon"></a>
                </div>
                <!--/ responsive menu trigger -->
                <!-- main menu -->
                <div id="main-menu" class="main-nav zn_mega_wrapper">
                    <ul id="menu-main-menu" class="main-menu zn_mega_menu">
                        <li class="menu-item-has-children menu-item-mega-parent"><a href="index.html">Home</a>
                        </li>
                        <li class="menu-item-has-children menu-item-mega-parent"><a href="employee">Our Profile</a>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Our Services</a>
                            <ul class="sub-menu clearfix">
                                <li><a href="dental-implant.html">Dental Implants</a></li>
                                <li><a href="root-canal.html">Painless RCT (Single Sitting)</a></li>
                                <li><a href="orthodontics.html">Orthodontics</a></li>
                                <li><a href="paediatric-dentistry.html">Paediatric Dentistry</a></li>
                                <li><a href="teeth-whitening-bleaching.html">Teeth Whitening / Bleaching</a></li>
                                <li><a href="crown-bridges.html">Crown & Bridges</a></li> <!--radiology-->
                                <li><a href="gum-surgery.html">Gum Surgery</a></li>
                                <li><a href="smile-makeover.html">Smile Makeover</a></li><!-- oral_surgery -->
                                <li><a href="cosmetic-filling.html">Cosmetic Fillings</a></li><!-- laser_dentistry -->
                                <li><a href="wisdom-tooth-extraction.html">Wisdom Tooth Extraction</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children menu-item-mega-parent"><a href="faqs.html">FAQS</a></li>
                        <li class="menu-item-has-children menu-item-mega-parent"><a href="contactus.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <!--/ main menu -->
                <!-- right side -->
                <!-- Call to action ribbon Free Quote -->
                <a href="#appointment" id="ctabutton" class="ctabutton kl-cta-ribbon" title="Book An Appointment" target="_self"><strong>Book An</strong>Appointment<svg version="1.1" class="trisvg" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" preserveaspectratio="none" width="14px" height="5px" viewbox="0 0 14.017 5.006" enable-background="new 0 0 14.017 5.006" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.016,0L7.008,5.006L0,0H14.016z"></path>
                    </svg></a>
                <!--/ Call to action ribbon Free Quote -->
            </div>
            <!--/ siteheader-container -->
        </header>
        <!-- / Header style 1 -->
        <!-- Slideshow - iOS Slider element with animateme scroll efect, custom height and bottom mask style 6 -->
        <div class="kl-slideshow iosslider-slideshow uh_light_gray maskcontainer--shadow_ud iosslider--custom-height scrollme kl-slider-loaded pb-47">
            <!-- Loader -->
            <div class="kl-loader">
                <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewbox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
                    <path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946 s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634 c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"></path>
                    <path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0 C22.32,8.481,24.301,9.057,26.013,10.047z" transform="rotate(98.3774 20 20)">
                        <animatetransform attributetype="xml" attributename="transform" type="rotate" from="0 20 20" to="360 20 20" dur="0.5s" repeatcount="indefinite"></animatetransform>
                    </path>
                </svg>
            </div>
            <!-- Loader -->
            <div class="bgback">
            </div>
            <!-- Animated Sparkles -->
            <div class="th-sparkles">
            </div>
            <!--/ Animated Sparkles -->
            <!-- iOS Slider wrapper with animateme scroll efect -->
            <div class="iosSlider kl-slideshow-inner animateme" data-trans="6000" data-autoplay="0" data-infinite="true" data-when="span" data-from="0" data-to="0.75" data-translatey="300" data-easing="linear">
                <!-- Slides -->
                <div class="kl-iosslider hideControls">
                    <!-- Slide 1 -->
                    <div class="item iosslider__item">
                        <!-- Image -->
                        <div class="slide-item-bg" style="background-image:url(asset/images/dental/dental1.jpg);">
                        </div>
                        <!--/ Image -->
                        <!-- Gradient overlay -->
                        <div class="kl-slide-overlay" style="background:rgba(32,55,152,0.4); background: -moz-linear-gradient(left, rgba(32,55,152,0.4) 0%, rgba(17,93,131,0.25) 100%); background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(32,55,152,0.4)), color-stop(100%,rgba(17,93,131,0.25))); background: -webkit-linear-gradient(left, rgba(32,55,152,0.4) 0%,rgba(17,93,131,0.25) 100%); background: -o-linear-gradient(left, rgba(32,55,152,0.4) 0%,rgba(17,93,131,0.25) 100%); background: -ms-linear-gradient(left, rgba(32,55,152,0.4) 0%,rgba(17,93,131,0.25) 100%); background: linear-gradient(to right, rgba(32,55,152,0.4) 0%,rgba(17,93,131,0.25) 100%); ">
                        </div>
                        <!--/ Gradient overlay -->
                        <!-- Captions container -->
                        <div class="container kl-iosslide-caption kl-ioscaption--style4 s4ext fromleft klios-alignleft kl-caption-posv-middle">
                            <!-- Captions animateme wrapper -->
                            <div class="animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="0.1" data-easing="linear">
                                <!-- Main Big Title -->
                                <h2 class="main_title has_titlebig"><span><strong>Are You Looking For</strong></span></h2>
                                <!--/ Main Big Title -->
                                <!-- Big Title -->
                                <h3 class="title_big">Best Dentist in</h3>
                                <!--/ Big Title -->
                                <!-- Link button -->
                                <a class="more" href="#" target="_self" title="SEE MORE">
                                    Noida ?</a>
                                <!--/ Link button -->
                                <!-- Small Title -->
                                <h4 class="title_small">Then You Must Visit <strong style="color:#04A8F0;">AS DENTAL CLINIC</strong></h4>
                                <!--/ Small Title -->
                            </div>
                            <!--/ Captions animateme wrapper -->
                        </div>
                        <!--/ Captions container -->
                    </div>
                    <!--/ Slide 1 -->
                    <!-- Slide 2 -->
                    <div class="item iosslider__item">
                        <!-- Image -->
                        <div class="slide-item-bg" style="background-image:url(asset/images/dental/dental2.jpg);">
                        </div>
                        <!--/ Image -->
                        <!-- Color overlay -->
                        <div class="kl-slide-overlay" style="background-color:">
                        </div>
                        <!--/ Color overlay -->
                        <!-- Captions container -->
                        <div class="container kl-iosslide-caption kl-ioscaption--style4 fromright klios-alignright kl-caption-posv-middle">
                            <!-- Captions animateme wrapper -->
                            <div class="animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="0.1" data-easing="linear">
                                <!-- Main Big Title -->
                                <h2 class="main_title has_titlebig"><span><strong>DENTAL</strong> CARE</span></h2>
                                <!--/ Main Big Title -->
                                <!-- Big Title -->
                                <h3 class="title_big"><span class="ff-alternative">Get a beautiful smile</span></h3>
                                <!--/ Big Title -->
                                <!-- Link button -->
                                <a class="more" href="#" target="_self">AS DENTAL CLINIC</a>
                                <!--/ Link button -->
                                <!-- Small Title -->
                                <h4 class="title_small">Cosmetic Dentistry in AS Dental Clinic</h4>
                                <!--/ Small Title -->
                            </div>
                            <!--/ Captions animateme wrapper -->
                        </div>
                        <!--/ Captions container -->
                    </div>
                    <!--/ Slide 2 -->
                    <!-- Slide 3 -->
                    <div class="item iosslider__item">
                        <!-- Image -->
                        <div class="slide-item-bg" style="background-image:url(asset/images/dental/dental3.jpg);">
                        </div>
                        <!--/ Image -->
                        <!-- Color overlay -->
                        <div class="kl-slide-overlay" style="background-color:">
                        </div>
                        <!--/ Color overlay -->
                        <!-- Captions container -->
                        <div class="container kl-iosslide-caption kl-ioscaption--style4 fromright klios-alignright kl-caption-posv-middle">
                            <!-- Captions animateme wrapper -->
                            <div class="animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="0.1" data-easing="linear">
                                <!-- Main Big Title -->
                                <h2 class="main_title has_titlebig"><span><strong>DENTAL</strong> CARE</span></h2>
                                <!--/ Main Big Title -->
                                <!-- Big Title -->
                                <h3 class="title_big"><span class="ff-alternative">Dental Implant</span></h3>
                                <!--/ Big Title -->
                                <!-- Link button -->
                                <a class="more" href="#" target="_self">Satisfaction</a>
                                <!--/ Link button -->
                                <!-- Small Title -->
                                <h4 class="title_small">Dental implant in AS Dental Clinic</h4>
                                <!--/ Small Title -->
                            </div>
                            <!--/ Captions animateme wrapper -->
                        </div>
                        <!--/ Captions container -->
                    </div>
                    <!--/ Slide 3 -->
                    <!-- Slide 4 -->
                    <div class="item iosslider__item">
                        <!-- Image -->
                        <div class="slide-item-bg" style="background-image:url(asset/images/dental/dental4.jpg);">
                        </div>
                        <!--/ Image -->
                        <!-- Color overlay -->
                        <div class="kl-slide-overlay" style="background-color:">
                        </div>
                        <!--/ Color overlay -->
                        <!-- Captions container -->
                        <div class="container kl-iosslide-caption kl-ioscaption--style4 fromright klios-alignright kl-caption-posv-middle">
                            <!-- Captions animateme wrapper -->
                            <div class="animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="0.1" data-easing="linear">
                                <!-- Main Big Title -->
                                <h2 class="main_title has_titlebig"><span><strong>DENTAL</strong> CARE</span></h2>
                                <!--/ Main Big Title -->
                                <!-- Big Title -->
                                <h3 class="title_big"><span class="ff-alternative">Design Your Smile</span></h3>
                                <!--/ Big Title -->
                                <!-- Link button -->
                                <a class="more" href="#" target="_self">AS</a>
                                <!--/ Link button -->
                                <!-- Small Title -->
                                <h4 class="title_small">BECOME A MEMBER OF AS DENTAL CLINIC</h4>
                                <!--/ Small Title -->
                            </div>
                            <!--/ Captions animateme wrapper -->
                        </div>
                        <!--/ Captions container -->
                    </div>
                    <!--/ Slide 4 -->
                </div>
                <!--/ Slides -->
                <!-- Navigation Controls - Prev -->
                <div class="kl-iosslider-prev">
                    <!-- Arrow -->
                    <span class="thin-arrows ta__prev"></span>
                    <!--/ Arrow -->
                    <!-- Label - prev -->
                    <div class="btn-label">
                        PREV
                    </div>
                    <!--/ Label - prev -->
                </div>
                <!--/ Navigation Controls - Prev -->
                <!-- Navigation Controls - Next -->
                <div class="kl-iosslider-next">
                    <!-- Arrow -->
                    <span class="thin-arrows ta__next"></span>
                    <!--/ Arrow -->
                    <!-- Label - next -->
                    <div class="btn-label">
                        NEXT
                    </div>
                    <!--/ Label - next -->
                </div>
                <!--/ Navigation Controls - Prev -->
            </div>
            <!--/ iOS Slider wrapper with animateme scroll efect -->
            <!-- Bullets -->
            <div class="kl-ios-selectors-block bullets2">
                <div class="selectors">
                    <!-- Item #1 -->
                    <div class="item iosslider__bull-item first">
                    </div>
                    <!--/ Item #1 -->
                    <!-- Item #2 -->
                    <div class="item iosslider__bull-item">
                    </div>
                    <!--/ Item #2 -->
                </div>
                <!--/ .selectors -->
            </div>
            <!--/ Bullets -->
            <div class="scrollbarContainer">
            </div>
            <!-- Bottom mask style 6 -->
            <div class="kl-bottommask kl-bottommask--mask6">
                <svg width="2700px" height="57px" class="svgmask" viewbox="0 0 2700 57" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <filter x="-50%" y="-50%" width="200%" height="200%" filterunits="objectBoundingBox" id="filter-mask6">
                            <feoffset dx="0" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1"></feoffset>
                            <fegaussianblur stddeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1"></fegaussianblur>
                            <fecolormatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0" in="shadowBlurOuter1" type="matrix" result="shadowMatrixOuter1"></fecolormatrix>
                            <femerge>
                                <femergenode in="shadowMatrixOuter1"></femergenode>
                                <femergenode in="SourceGraphic"></femergenode>
                            </femerge>
                        </filter>
                    </defs>
                    <g transform="translate(-1.000000, 10.000000)">
                        <path d="M0.455078125,18.5 L1,47 L392,47 L1577,35 L392,17 L0.455078125,18.5 Z" fill="#000000"></path>
                        <path d="M2701,0.313493752 L2701,47.2349598 L2312,47 L391,47 L2312,0 L2701,0.313493752 Z" fill="#ffffff" class="bmask-bgfill" filter="url(#filter-mask6)"></path>
                        <path d="M2702,3 L2702,19 L2312,19 L1127,33 L2312,3 L2702,3 Z" fill="#46b6cc" class="bmask-customfill"></path>
                    </g>
                </svg>
            </div>
            <!--/ Bottom mask style 6 -->
        </div>
        <!--/ Slideshow - iOS Slider element with animateme scroll efect, custom height and bottom mask style 6 -->
        <section class="hg_section bg-white pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Title element custom -->
                        <div class="kl-title-block clearfix text-center tbk-icon-pos--after-title pbottom-0">
                            <!-- Title with custom font size, line height  and thin style -->
                            <h1 class="tbk__title fs-32 lh-52 fw-thin">Best Dental Clinic in Noida</h1>
                            <!--/ Title with custom font size, line height and thin style -->
                            <!-- Title bottom symbol -->
                            <div class="symbol-line">
                                <span class="kl-icon tcolor icon-spinner10"></span>
                            </div>
                            <!--/ Title bottom symbol -->
                            <div class="col-md-12 col-sm-12" style="height:200px; overflow:auto;">
                                <!-- Sub-title with custom font size -->
                                <h4 class="tbk__subtitle fs-14" id="appointment">Dental Clinic offers more than what you might expect from the <strong>best dental clinic in Noida</strong>.</h4>
                                <p class="kl-iconbox__desc fs-14 gray">Dental Clinic is a literal example of quality <strong>dental care services</strong> in Noida due to the unique vision of its founder Dr. Ratan Kumar, and it is his unmatched dedication to the cause of spreading dental health awareness among the general public, that makes him a dentist par excellence.</p><br>
                                <p class="kl-iconbox__desc fs-14 gray">If you are looking for the <strong>best dentist in Noida</strong>, please do yourself a favor and visit Dental Clinic once and meet Dr. Ratan Kumar regarding your dental health issues. He is considered to be the <strong>best Dental Surgeon in Noida</strong> for reasons that are sure to impress any patient. Dr. Ratan Kumar believes in using the latest techniques in dentistry to make your every visit to AS Dental a pleasurable experience. With his absolute focus on hygiene and sterilization, you can be sure that you are treated in the safest medical environment.</p>
                                <p class="kl-iconbox__desc fs-14 gray">He has himself mastered the procedures as per international standards, which are followed in all dental surgeries at Dental Clinic to ensure painless dental procedures so as to keep patient discomfort to as close to zero as possible. Each one of Dr. Ratan Kumar's patients will vouch for this!</p><br>
                                <p class="kl-iconbox__desc fs-14 gray">So, if you're in need <strong>Dental Implants in Noida</strong> or require a <strong>Root Canal Surgery in Noida</strong>, you must fix an appointment with Dr., Ratan Kumar at Dental Clinic today!</p>
                                <p class="kl-iconbox__desc fs-14 gray"><strong>Best Cosmetic Dentist in Noida</strong>, Dr. Ratan Kumar, is considered to be the best Dentist in Noida as he is an accomplished orthodontist, dental implantologist and surgeon.</p><br>
                                <p class="kl-iconbox__desc fs-14 gray">He is, perhaps, the best dentist in Noida for various dental treatments including but not limited to <strong>Root Canal Treatment in Noida</strong>, Dental Implants in Noida, <strong>Dental Braces in Noida</strong>, <strong>Tooth Extraction in Noida</strong>, <strong>Teeth Whitening in Noida</strong> amongst several other services.</p>
                                <p class="kl-iconbox__desc fs-14 gray">With his extensive training and in depth experience, Dr. Kumar and his team can sculpt a completely unique and a beautiful smile for you. Over the years he has worked with all kinds of patients and believes in giving personal and individual attention to each patient.</p><br>
                                <p class="kl-iconbox__desc fs-14 gray">Dr. Kumar has specialized in branches of dentistry which are concerned with the correction of maligned, malposed crooked irregular teeth and replacement of missing teeth with dental implants. Apart from this he has also taken advanced training in root canal treatment, crown bridgework, aesthetic dentistry and <strong>children dentistry in Noida</strong>. This makes him one of the few <strong>dentists in Noida</strong> to be trained in various significant areas of dentistry.</p>
                                <p class="kl-iconbox__desc fs-14 gray">The brainchild of Dr. Ratan Kumar, Dental Clinic is the <strong>best Dental hospital in Noida</strong>. It brings you a variety of solutions for holistic dental care. Dental Clinic offers complex dental surgeries and cosmetic dentistry in an environment that puts you at complete ease. At Dental Clinic, you will feel like you have walked into a spa - only this one makes sure your teeth get a healthier lifestyle!</p>
                                <p class="kl-iconbox__desc fs-14 gray">Dental Clinic has the distinction of being the most advanced dental, orthodontic and <strong>dental implant centre in Noida</strong>. It is one of the biggest dental hospitals of Northern India with a setup of eight chairs with a special chair for children each of which is a fully functional dental unit in itself.</p><br>
                                <p class="kl-iconbox__desc fs-14 gray">Each chair in the clinic is equipped with an intra-oral camera which allows patients to see their treatment in real time on the computer screen and understand the procedure. This plays a big role in doing away with fear and the common feeling of "God knows what they are doing to me!"</p><br>
                                <p>For expert consultation and advice regarding dental problems, please meet the Best Dentist in Noida, Dr.Ratan Kumar, today!</p>
                                <!--/ Sub-title with custom font size -->
                            </div>
                        </div>
                        <!--/ Title element custom -->
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white pt-40 pb-0" id="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Title element custom -->
                        <div class="kl-title-block clearfix text-center tbk-icon-pos--after-title pbottom-0">
                            <div class="col-md-3 col-sm-3"></div>
                            <div class="col-md-6 col-sm-6" style="color:#46B6CC;">
                                <h2>For Appointment Call On <a href="#">+91.9953734568</a>, today!</h2>
                            </div>
                            <div class="col-md-3 col-sm-3"></div>
                        </div>
                        <!--/ Title element custom -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Icon Box - Left Floated Style section -->
        <section class="hg_section bg-white pt-40 pb-0">
            <div class="full_width">
                <div class="row">
                    <div class="col-sm-offset-1 col-md-10 col-sm-10">
                        <div class="kl-title-block clearfix text-center tbk-icon-pos--after-title pbottom-50">
                            <!-- Title with custom font size, line height  and thin style -->
                            <h3 class="tbk__title fs-32 lh-52 fw-thin">Our Commitment</h3>
                            <!--/ Title with custom font size, line height and thin style -->
                            <!-- Title bottom symbol -->
                            <div class="symbol-line">
                                <span class="kl-icon tcolor icon-spinner10"></span>
                            </div>
                        </div>
                        <div class="row gutter-md">
                            <div class="col-md-4 col-sm-4">
                                <!-- Icon box float left -->
                                <div class="kl-iconbox kl-iconbox--fleft text-left">
                                    <div class="kl-iconbox__inner">
                                        <!-- Icon -->
                                        <div class="kl-iconbox__icon-wrapper">
                                            <img class="kl-iconbox__icon" src="asset/images/dental/excellence.svg" alt="Excellence">
                                        </div>
                                        <!--/ Icon -->
                                        <!-- /.kl-iconbox__icon-wrapper -->
                                        <div class="kl-iconbox__content-wrapper">
                                            <!-- Title -->
                                            <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                                <h3 class="kl-iconbox__title fs-22 lh-30 fw-normal gray2">Excellence</h3>
                                            </div>
                                            <!--/ Title -->
                                            <!-- Description -->
                                            <div class="kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                                <p class="kl-iconbox__desc fs-14 gray">
                                                    We will always aim for excellence in the quality of our dental care delivery. You must expect nothing short of it from us as we aim to deliver an excellent dental care experience.
                                                </p>
                                            </div>
                                            <!--/ Description -->
                                        </div>
                                        <!-- /.kl-iconbox__content-wrapper -->
                                    </div>
                                    <!--/ kl-iconbox__inner -->
                                </div>
                                <!--/ Icon box float left -->
                            </div>
                            <!--/ col-md-4 col-sm-4 -->
                            <div class="col-md-4 col-sm-4">
                                <!-- Icon box float left -->
                                <div class="kl-iconbox kl-iconbox--fleft text-left">
                                    <div class="kl-iconbox__inner">
                                        <!-- Icon -->
                                        <div class="kl-iconbox__icon-wrapper">
                                            <img class="kl-iconbox__icon" src="asset/images/dental/no-wating-time.svg" alt="Zero Waiting Time">
                                        </div>
                                        <!--/ Icon -->
                                        <!-- /.kl-iconbox__icon-wrapper -->
                                        <div class="kl-iconbox__content-wrapper">
                                            <!-- Title -->
                                            <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                                <h3 class="kl-iconbox__title fs-22 lh-30 fw-normal gray2">Zero Waiting Time</h3>
                                            </div>
                                            <!--/ Title -->
                                            <!-- Description -->
                                            <div class="kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                                <p class="kl-iconbox__desc fs-14 gray">
                                                    We appreciate your time and know that you have a busy life to lead and many commitments to take care of. At Dental Clinic, we assure you of least number of visits for any treatment and to relieve you in the least possible time.
                                                </p>
                                            </div>
                                            <!--/ Description -->
                                        </div>
                                        <!-- /.kl-iconbox__content-wrapper -->
                                    </div>
                                    <!--/ kl-iconbox__inner -->
                                </div>
                                <!-- Icon box float left -->
                            </div>
                            <!--/ col-md-4 col-sm-4 -->
                            <div class="col-md-4 col-sm-4">
                                <!-- Icon box float left -->
                                <div class="kl-iconbox kl-iconbox--fleft text-left">
                                    <div class="kl-iconbox__inner">
                                        <!-- Icon -->
                                        <div class="kl-iconbox__icon-wrapper">
                                            <img class="kl-iconbox__icon" src="asset/images/dental/zero-pain-tolerance.svg" alt="Zero Pain Tolerance">
                                        </div>
                                        <!--/ Icon -->
                                        <!-- /.kl-iconbox__icon-wrapper -->
                                        <div class="kl-iconbox__content-wrapper">
                                            <!-- Title -->
                                            <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                                <h3 class="kl-iconbox__title fs-22 lh-30 fw-normal gray2">Zero Pain Tolerance</h3>
                                            </div>
                                            <!--/ Title -->
                                            <!-- Description -->
                                            <div class="kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                                <p class="kl-iconbox__desc fs-14 gray">
                                                    Almost everyone believes dental care involves pain. We are here to bust that myth and deliver painless treatment through our experienced team of dentists and world class technology.
                                                </p>
                                            </div>
                                            <!--/ Description -->
                                        </div>
                                        <!-- /.kl-iconbox__content-wrapper -->
                                    </div>
                                    <!--/ kl-iconbox__inner -->
                                </div>
                                <!--/ Icon box float left -->
                            </div>
                            <!--/ col-md-4 col-sm-4 -->
                        </div>
                        <!--/ row gutter-md -->
                    </div>
                    <!--/ col-sm-offset-1 col-md-10 col-sm-10 -->
                </div>
                <!--/ row -->
                <div class="row">
                    <div class="col-sm-offset-1 col-md-10 col-sm-10">
                        <div class="row gutter-md">
                            <div class="col-md-4 col-sm-4">
                                <!-- Icon box float left -->
                                <div class="kl-iconbox kl-iconbox--fleft text-left">
                                    <div class="kl-iconbox__inner">
                                        <!-- Icon -->
                                        <div class="kl-iconbox__icon-wrapper">
                                            <img class="kl-iconbox__icon" src="asset/images/dental/safety.svg" alt="Painless Treatment">
                                        </div>
                                        <!--/ Icon -->
                                        <!-- /.kl-iconbox__icon-wrapper -->
                                        <div class="kl-iconbox__content-wrapper">
                                            <!-- Title -->
                                            <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                                <h3 class="kl-iconbox__title fs-22 lh-30 fw-normal gray2">Safety</h3>
                                            </div>
                                            <!--/ Title -->
                                            <!-- Description -->
                                            <div class="kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                                <p class="kl-iconbox__desc fs-14 gray">
                                                    We are committed to your safety as a patient. We follow the highest standards of medical safety procedures as laid down by by the WHO / NABH / NABL and make sure that the sterilization and hygiene at Dental Clinic are world class.
                                                </p>
                                            </div>
                                            <!--/ Description -->
                                        </div>
                                        <!-- /.kl-iconbox__content-wrapper -->
                                    </div>
                                    <!--/ kl-iconbox__inner -->
                                </div>
                                <!--/ Icon box float left -->
                            </div>
                            <!--/ col-md-4 col-sm-4 -->
                            <div class="col-md-4 col-sm-4">
                                <!-- Icon box float left -->
                                <div class="kl-iconbox kl-iconbox--fleft text-left">
                                    <div class="kl-iconbox__inner">
                                        <!-- Icon -->
                                        <div class="kl-iconbox__icon-wrapper">
                                            <img class="kl-iconbox__icon" src="asset/images/dental/precise-diagnosis.svg" alt="Precise Diagnosis">
                                        </div>
                                        <!--/ Icon -->
                                        <!-- /.kl-iconbox__icon-wrapper -->
                                        <div class="kl-iconbox__content-wrapper">
                                            <!-- Title -->
                                            <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                                <h3 class="kl-iconbox__title fs-22 lh-30 fw-normal gray2">Precise Diagnosis</h3>
                                            </div>
                                            <!--/ Title -->
                                            <!-- Description -->
                                            <div class="kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                                <p class="kl-iconbox__desc fs-14 gray">
                                                    We will always be precise in our diagnosis and offer the most genuine advice to you, as our prime focus is always the betterment of the health of our patients.
                                                </p>
                                            </div>
                                            <!--/ Description -->
                                        </div>
                                        <!-- /.kl-iconbox__content-wrapper -->
                                    </div>
                                    <!--/ kl-iconbox__inner -->
                                </div>
                                <!-- Icon box float left -->
                            </div>
                            <!--/ col-md-4 col-sm-4 -->
                            <div class="col-md-4 col-sm-4">
                                <!-- Icon box float left -->
                                <div class="kl-iconbox kl-iconbox--fleft text-left">
                                    <div class="kl-iconbox__inner">
                                        <!-- Icon -->
                                        <div class="kl-iconbox__icon-wrapper">
                                            <img class="kl-iconbox__icon" src="asset/images/dental/affordability.svg" alt="Affordability">
                                        </div>
                                        <!--/ Icon -->
                                        <!-- /.kl-iconbox__icon-wrapper -->
                                        <div class="kl-iconbox__content-wrapper">
                                            <!-- Title -->
                                            <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                                <h3 class="kl-iconbox__title fs-22 lh-30 fw-normal gray2">Affordability</h3>
                                            </div>
                                            <!--/ Title -->
                                            <!-- Description -->
                                            <div class="kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                                <p class="kl-iconbox__desc fs-14 gray">
                                                    We are committed to deliver world class dental care at an affordable price. Furthermore, our unparalleled treatment quality makes the fees almost redundant and can't be matched by any other dental clinic in Noida.
                                                </p>
                                            </div>
                                            <!--/ Description -->
                                        </div>
                                        <!-- /.kl-iconbox__content-wrapper -->
                                    </div>
                                    <!--/ kl-iconbox__inner -->
                                </div>
                                <!--/ Icon box float left -->
                            </div>
                            <!--/ col-md-4 col-sm-4 -->
                        </div>
                        <!--/ row gutter-md -->
                    </div>
                    <!--/ col-sm-offset-1 col-md-10 col-sm-10 -->
                </div>
            </div>
            <!--/ full_width -->
        </section>
        <section class="bg-white pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Title element custom -->
                        <div class="kl-title-block clearfix text-center tbk-icon-pos--after-title pbottom-50">
                            <!-- Title with custom font size, line height  and thin style -->
                            <h3 class="tbk__title fs-32 lh-52 fw-thin">Our Services</h3>
                            <div class="symbol-line">
                                <span class="kl-icon tcolor icon-spinner10"></span>
                            </div>
                        </div>
                        <!--/ Title element custom -->
                    </div>
                    <div class="col-sm-4">
                        <!-- Icon box float left -->
                        <div class="kl-iconbox kl-iconbox--fleft text-left">
                            <div class="kl-iconbox__inner">
                                <!-- Icon -->
                                <div class="kl-iconbox__icon-wrapper">
                                    <img class="kl-iconbox__icon small" src="asset/images/dental/icon1.svg" alt="Stunning Page Builder">
                                </div>
                                <div class="kl-iconbox__content-wrapper">
                                    <!-- Title -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                        <h3 class="kl-iconbox__title fs-20 lh-30 fw-bold gray2">Painless Treatment</h3>
                                    </div>
                                    <!--/ Title -->
                                    <!-- Description -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                        <p class="kl-iconbox__desc fs-14 gray">
                                            We offer the painless treatment for our patients by using the latest technologies of dental treatment. <a href='#' title='Pain less Treatment' style='color:red; cursor:pointer;'>Read More</a>
                                        </p>
                                    </div>
                                    <!--/ Description -->
                                </div>
                                <!-- /.kl-iconbox__content-wrapper -->
                            </div>
                            <!--/ kl-iconbox__inner -->
                        </div>
                        <!--/ Icon box float left -->
                    </div>
                    <!--/ col-sm-4 -->
                    <div class="col-sm-4">
                        <!-- Icon box float left -->
                        <div class="kl-iconbox kl-iconbox--fleft text-left">
                            <div class="kl-iconbox__inner">
                                <!-- Icon -->
                                <div class="kl-iconbox__icon-wrapper">
                                    <img class="kl-iconbox__icon small" src="asset/images/dental/icon2.svg" alt="Iconic Awarded Design">
                                </div>
                                <!--/ Icon -->
                                <!-- /.kl-iconbox__icon-wrapper -->
                                <div class="kl-iconbox__content-wrapper">
                                    <!-- Title -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                        <h3 class="kl-iconbox__title fs-20 lh-30 fw-bold gray2">Root Canal</h3>
                                    </div>
                                    <!--/ Title -->
                                    <!-- Description -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                        <p class="kl-iconbox__desc fs-14 gray">
                                            A tooth has three layers enamel, dentin and pulp. When the cavity is so deep that it has reached the pulp, Root Canal Treatment has to be done. <a href="#" style='color:red; cursor:pointer;' title='Root Canal Treatment'>Read More</a>
                                        </p>
                                    </div>
                                    <!--/ Description -->
                                </div>
                                <!-- /.kl-iconbox__content-wrapper -->
                            </div>
                            <!--/ kl-iconbox__inner -->
                        </div>
                        <!-- Icon box float left -->
                    </div>
                    <!--/ col-sm-4 -->
                    <div class="col-sm-4">
                        <!-- Icon box float left -->
                        <div class="kl-iconbox kl-iconbox--fleft text-left">
                            <div class="kl-iconbox__inner">
                                <!-- Icon -->
                                <div class="kl-iconbox__icon-wrapper">
                                    <img class="kl-iconbox__icon small" src="asset/images/dental/icon3.svg" alt="Featurewise Complete">
                                </div>
                                <!--/ Icon -->
                                <!-- /.kl-iconbox__icon-wrapper -->
                                <div class="kl-iconbox__content-wrapper">
                                    <!-- Title -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                        <h3 class="kl-iconbox__title fs-20 lh-30 fw-bold gray2">Teeth Whitening</h3>
                                    </div>
                                    <!--/ Title -->
                                    <!-- Description -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                        <p class="kl-iconbox__desc fs-14 gray">
                                            Everyone desires to have shiny and bright teeth. People with discolored teeth often lose some great opportunities in their life and also lack in confidence. <a href='#' title='Teeth Whitening' style='color:red; cursor:pointer;'>Read More</a>
                                        </p>
                                    </div>
                                    <!--/ Description -->
                                </div>
                                <!-- /.kl-iconbox__content-wrapper -->
                            </div>
                            <!--/ kl-iconbox__inner -->
                        </div>
                        <!--/ Icon box float left -->
                    </div>
                    <!--/ col-sm-4 -->
                    <div class="col-sm-4">
                        <!-- Icon box float left -->
                        <div class="kl-iconbox kl-iconbox--fleft text-left">
                            <div class="kl-iconbox__inner">
                                <!-- Icon -->
                                <div class="kl-iconbox__icon-wrapper">
                                    <img class="kl-iconbox__icon small" src="asset/images/dental/icon4.svg" alt="Mature project">
                                </div>
                                <!--/ Icon -->
                                <!-- /.kl-iconbox__icon-wrapper -->
                                <div class="kl-iconbox__content-wrapper">
                                    <!-- Title -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                        <h3 class="kl-iconbox__title fs-20 lh-30 fw-bold gray2">Tooth Decay</h3>
                                    </div>
                                    <!--/ Title -->
                                    <!-- Description -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                        <p class="kl-iconbox__desc fs-14 gray">
                                            Tooth Decay is a hole that develops in a tooth when the acid produced by bacteria eats away the minerals. <a href='#' title='Tooth Decay' style='color:red; cursor:pointer;'>Read More</a>
                                        </p>
                                    </div>
                                    <!--/ Description -->
                                </div>
                                <!-- /.kl-iconbox__content-wrapper -->
                            </div>
                            <!--/ kl-iconbox__inner -->
                        </div>
                    </div>
                    <!--/ col-sm-4 -->
                    <div class="col-sm-4">
                        <!-- Icon box float left -->
                        <div class="kl-iconbox kl-iconbox--fleft text-left">
                            <div class="kl-iconbox__inner">
                                <!-- Icon -->
                                <div class="kl-iconbox__icon-wrapper">
                                    <img class="kl-iconbox__icon small" src="asset/images/dental/icon5.svg" alt="Mature project">
                                </div>
                                <!--/ Icon -->
                                <!-- /.kl-iconbox__icon-wrapper -->
                                <div class="kl-iconbox__content-wrapper">
                                    <!-- Title -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                        <h3 class="kl-iconbox__title fs-20 lh-30 fw-bold gray2">Cosmetic Dentistry</h3>
                                    </div>
                                    <!--/ Title -->
                                    <!-- Description -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                        <p class="kl-iconbox__desc fs-14 gray">
                                            Cosmetic dentistry is generally used to refer to any dental work that improves the appearance. <a href='#' title='Cosmetic Filling' style='color:red;cursor:pointer;'>Read More</a>
                                        </p>
                                    </div>
                                    <!--/ Description -->
                                </div>
                                <!-- /.kl-iconbox__content-wrapper -->
                            </div>
                            <!--/ kl-iconbox__inner -->
                        </div>
                    </div>
                    <!--/ col-sm-4 -->
                    <div class="col-sm-4">
                        <!-- Icon box float left -->
                        <div class="kl-iconbox kl-iconbox--fleft text-left">
                            <div class="kl-iconbox__inner">
                                <!-- Icon -->
                                <div class="kl-iconbox__icon-wrapper">
                                    <img class="kl-iconbox__icon small" src="asset/images/dental/icon6.svg" alt="Mature project">
                                </div>
                                <!--/ Icon -->
                                <!-- /.kl-iconbox__icon-wrapper -->
                                <div class="kl-iconbox__content-wrapper">
                                    <!-- Title -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                        <h3 class="kl-iconbox__title fs-20 lh-30 fw-bold gray2">Orthodontics Dentistry</h3>
                                    </div>
                                    <!--/ Title -->
                                    <!-- Description -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                        <p class="kl-iconbox__desc fs-14 gray">
                                            Our clinic have some special equipments for Laser Dentistry and recommeing best Laser Dentistry Services for you. <a href='#' title='Orthodontics Dentistry' style='color:red;cursor:pointer;'>Read More</a>
                                        </p>
                                    </div>
                                    <!--/ Description -->
                                </div>
                                <!-- /.kl-iconbox__content-wrapper -->
                            </div>
                            <!--/ kl-iconbox__inner -->
                        </div>
                    </div>
                    <!--/ col-sm-4 -->
                    <div class="col-sm-4">
                        <!-- Icon box float left -->
                        <div class="kl-iconbox kl-iconbox--fleft text-left">
                            <div class="kl-iconbox__inner">
                                <!-- Icon -->
                                <div class="kl-iconbox__icon-wrapper">
                                    <img class="kl-iconbox__icon small" src="asset/images/dental/icon7.svg" alt="Mature project">
                                </div>
                                <!--/ Icon -->
                                <!-- /.kl-iconbox__icon-wrapper -->
                                <div class="kl-iconbox__content-wrapper">
                                    <!-- Title -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                        <h3 class="kl-iconbox__title fs-20 lh-30 fw-bold gray2">Dental Implants</h3>
                                    </div>
                                    <!--/ Title -->
                                    <!-- Description -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                        <p class="kl-iconbox__desc fs-14 gray">
                                            Implant is a titanium screw that is fixed within jaw bone, over which artificial teeth or denture is fixed. <a href='#' title='Dental Implants' style='color:red;cursor:pointer;'>Read More</a>
                                        </p>
                                    </div>
                                    <!--/ Description -->
                                </div>
                                <!-- /.kl-iconbox__content-wrapper -->
                            </div>
                            <!--/ kl-iconbox__inner -->
                        </div>
                    </div>
                    <!--/ col-sm-4 -->
                    <div class="col-sm-4">
                        <!-- Icon box float left -->
                        <div class="kl-iconbox kl-iconbox--fleft text-left">
                            <div class="kl-iconbox__inner">
                                <!-- Icon -->
                                <div class="kl-iconbox__icon-wrapper">
                                    <img class="kl-iconbox__icon small" src="asset/images/dental/icon8.svg" alt="Mature project">
                                </div>
                                <!--/ Icon -->
                                <!-- /.kl-iconbox__icon-wrapper -->
                                <div class="kl-iconbox__content-wrapper">
                                    <!-- Title -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                        <h3 class="kl-iconbox__title fs-20 lh-30 fw-bold gray2">Kids Dentistry</h3>
                                    </div>
                                    <!--/ Title -->
                                    <!-- Description -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                        <p class="kl-iconbox__desc fs-14 gray">
                                            We recommend a first checkup by 12 months old to make certain that teeth and jaw development are normal, and even more importantly so that <a href='#' title='Kids Dentistry or Paediatric Dentistry' style='color:red; cursor:pointer;'>Read More</a>
                                        </p>
                                    </div>
                                    <!--/ Description -->
                                </div>
                                <!-- /.kl-iconbox__content-wrapper -->
                            </div>
                            <!--/ kl-iconbox__inner -->
                        </div>
                    </div>
                    <!--/ col-sm-4 -->
                    <div class="col-sm-4">
                        <!-- Icon box float left -->
                        <div class="kl-iconbox kl-iconbox--fleft text-left">
                            <div class="kl-iconbox__inner">
                                <!-- Icon -->
                                <div class="kl-iconbox__icon-wrapper">
                                    <img class="kl-iconbox__icon small" src="asset/images/dental/icon9.svg" alt="Mature project">
                                </div>
                                <!--/ Icon -->
                                <!-- /.kl-iconbox__icon-wrapper -->
                                <div class="kl-iconbox__content-wrapper">
                                    <!-- Title -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper">
                                        <h3 class="kl-iconbox__title fs-20 lh-30 fw-bold gray2">Crowns</h3>
                                    </div>
                                    <!--/ Title -->
                                    <!-- Description -->
                                    <div class="kl-iconbox__el-wrapper kl-iconbox__desc-wrapper">
                                        <p class="kl-iconbox__desc fs-14 gray">
                                            Crowns are used to replace missing teeth. They can be made from gold, metal, porcelain and white (Tooth) colored Zirconium. White crowns can greatly improve your confidence and smile.<a href='#' title='Crown and Bridges Dentistry' style='color:red;cursor:pointer;'>Read More</a>
                                        </p>
                                    </div>
                                    <!--/ Description -->
                                </div>
                                <!-- /.kl-iconbox__content-wrapper -->
                            </div>
                            <!--/ kl-iconbox__inner -->
                        </div>
                    </div>
                    <!--/ col-sm-4 -->
                    <div class="text-center">
                        <a class="btn-element btn btn-fullblack btn-skewed" href="https://ASdental.com/services.html" title="all services">
                            <span>ALL FEATURES HERE</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Icons list section -->
        <!-- Team boxes carousel section -->
        <section class="hg_section pt-20 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Title element custom -->
                        <div class="kl-title-block clearfix text-center tbk-icon-pos--after-title pbottom-15">
                            <!-- Title with custom font size, line height  and thin style -->
                            <h3 class="tbk__title fs-32 lh-52 fw-thin">THE TEAM</h3>
                            <!--/ Title with custom font size, line height and thin style -->
                            <!-- Title bottom symbol -->
                            <div class="symbol-line">
                                <span class="kl-icon tcolor icon-spinner10"></span>
                            </div>
                        </div>
                        <!--/ Title element custom -->
                    </div>
                    <!--/ col-md-12 col-sm-12 -->
                    <div class="col-sm-12">
                        <div class="team-carousel caroufredsel stg-slim-arrows" data-setup='{ "navigation": true, "pagination": false, "width": "variable", "items_width": "360", "items_height": "variable", "auto_duration": 9000, "items": {"min":1, "max":4} }'>
                            <ul class="slides">
                                <li>
                                    <div class="team-member tm-hover text-center">
                                        <a href="#" class="grayscale-link" data-lightbox="image"><img src="asset/images/dental/team1.jpg" alt="" class="img-responsive"></a>
                                        <h5 class="mmb-title">Dr.Ratan Kumar</h5>
                                        <h6 class="mmb-position">Chief Madical Officer</h6>
                                        <p class="mmb-desc">Dr.Ratan believes he is a simple general practitioner who also involves himself in innovative & advanced dentistry.</p>
                                        <span class="separator"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-member tm-hover text-center">
                                        <a href="#" class="grayscale-link" data-lightbox="image"><img src="asset/images/dental/team2.jpg" alt="" class="img-responsive"></a>
                                        <h5 class="mmb-title">Ankit Mishra</h5>
                                        <h6 class="mmb-position">Chief Executive Officer</h6>
                                        <p class="mmb-desc">Donec tempus imperdiet venenatis for aliquet convallis. Donec lorem ipsum dolor nec loremis elitsit amet.</p>
                                        <span class="separator"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-member tm-hover text-center">
                                        <a href="#" class="grayscale-link" data-lightbox="image"><img src="asset/images/dental/team3.jpg" alt="" class="img-responsive"></a>
                                        <h5 class="mmb-title">Shivani Singh</h5>
                                        <h6 class="mmb-position">HR Head</h6>
                                        <p class="mmb-desc">Donec tempus imperdiet venenatis for aliquet convallis. Donec lorem ipsum dolor nec loremis elitsit amet.</p>
                                        <span class="separator"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-member tm-hover text-center">
                                        <a href="#" class="grayscale-link" data-lightbox="image"><img src="asset/images/dental/team4.jpg" alt="" class="img-responsive"></a>
                                        <h5 class="mmb-title">Dr.Neha</h5>
                                        <h6 class="mmb-position">Dental Surgeon</h6>
                                        <p class="mmb-desc">Donec tempus imperdiet venenatis for aliquet convallis. Donec lorem ipsum dolor nec loremis elitsit amet.</p>
                                        <span class="separator"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-member tm-hover text-center">
                                        <a href="#" class="grayscale-link" data-lightbox="image"><img src="asset/images/dental/team5.jpg" alt="" class="img-responsive"></a>
                                        <h5 class="mmb-title">Asheesh Ranjan</h5>
                                        <h6 class="mmb-position">Technical Head</h6>
                                        <p class="mmb-desc">Donec tempus imperdiet venenatis for aliquet convallis. Donec lorem ipsum dolor nec loremis elitsit amet.</p>
                                        <span class="separator"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- // team carousel -->
                    </div>
                    <!--/ col-sm-12 -->
                </div>
                <!--/ row -->
            </div>
            <!--/ container  -->
        </section>
        <!--/ Team boxes carousel section -->
        <!-- Numbers counting section -->
        <section class="bg-white pt-20 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Counter element -->
                        <div class="justified-blocks">
                            <div class="fun-fact jsf-block">
                                <span class="kl-icon tcolor icon-guest fs-32"></span>
                                <span class="fun-number fw-thin counter">520</span>
                                <span class="fun-thing topline fw-bold mt-40">Patient</span>
                            </div>
                            <div class="fun-fact jsf-block">
                                <span class="kl-icon tcolor icon-wrench fs-32"></span>
                                <span class="fun-number fw-thin counter">999</span>
                                <span class="fun-thing topline fw-bold mt-40">Dental Implants</span>
                            </div>
                            <div class="fun-fact jsf-block">
                                <span class="kl-icon tcolor icon-plus-sign fs-32"></span>
                                <span class="fun-number fw-thin counter">180</span>
                                <span class="fun-thing topline fw-bold mt-40">Root Canal</span>
                            </div>
                            <div class="fun-fact jsf-block">
                                <span class="kl-icon tcolor icon-new-window fs-32"></span>
                                <span class="fun-number fw-thin counter">152</span>
                                <span class="fun-thing topline fw-bold mt-40">Tooth Extraction</span>
                            </div>
                            <div class="jsf-stretch"></div>
                        </div>
                        <!--/ Counter element -->
                    </div>
                    <!--/ col-md-12 col-sm-6 -->
                </div>
                <!--/ row -->
            </div>
            <!--/ container -->
        </section>
        <!--/ Numbers counting section -->
        <!-- Testimonials carousel quoter style section -->
        <section class="hg_section--relative bg-white pt-80 pb-50">
            <!-- Section background -->
            <div class="kl-bg-source">
                <!-- Gradient overlay -->
                <div class="kl-bg-source__overlay" style="background-image: url(asset/images/dental/dental-bg.jpg);background-repeat:no-repeat; background-attachment:scroll; background-position-x:center; background-position-y:center;background-size:cover">
                </div>
                <!--/ Gradient overlay -->
            </div>
            <!--/ Section background -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Testimonials slider quoter style -->
                        <div class="testimonial_slider caroufredsel quoter-style" data-setup='{ "navigation": true, "pagination": true, "fx": "scroll", "items_width": 1140  }'>
                            <ul class="slides">
                                <li>
                                    <div class="testimonialbox flippedY biggertext">
                                        <div class="thead">
                                            <span class="who"><strong>Asheesh Ranjan</strong> </span>
                                        </div>
                                        <div class="tcontent">
                                            <p>Dr. Ratan is is a wonderful dentist. He was very patient with my queries regarding my son's dental issues and managed him extremely well throughout the entire procedure. My son felt no pain and Dr. Ratan kept him engaged with his interesting stories and anecdotes all the while. By the end of the procedure my son had started treating him like one of his friends. May God make more doctors like him who are not money minded and focus more on helping patients get relief. I'd recommend him wholeheartedly if anyone needs a pediatric dentist in noida</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonialbox flippedY biggertext">
                                        <div class="thead">
                                            <span class="who"><strong>Kushal Thakur</strong></span>
                                        </div>
                                        <div class="tcontent">
                                            <p>Treatments that I have undergone here are- Cavity fillings Root canal Wisdom tooth removal Tooth whitening Ceramic caps My experience was too good. Doctors are humble and honest. My sincere thanks to Dr.Ratan</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonialbox flippedY biggertext">
                                        <div class="thead">
                                            <span class="who"><strong>Anisha Ansari</strong></span>
                                        </div>
                                        <div class="tcontent">
                                            <p>Treatments that I have undergone here are- Cavity fillings Root canal Wisdom tooth removal Tooth whitening Ceramic caps My experience was too good. Doctors are humble and honest. My sincere thanks to Dr.Ratan</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonialbox flippedY biggertext">
                                        <div class="thead">
                                            <span class="who"><strong>Jagdish Sanwal</strong></span>
                                        </div>
                                        <div class="tcontent">
                                            <p>Good. Supportive and encourages patient to be positive. Keeps track of and informs the patient for the appointment and makes him/her about the treatment politely. An honest Dentist towards patient and to his profession.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonialbox flippedY biggertext">
                                        <div class="thead">
                                            <span class="who"><strong>Ambrish Tiwari</strong></span>
                                        </div>
                                        <div class="tcontent">
                                            <p>It was a very good treatment with very less pain. This was pending for so many years, thanks to Dr. Ratan it got over within 2 days. The staff was also good and the timing and punctuality is appreciable.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- //textimonial slider - quoter style -->
                    </div>
                    <!--/ col-sm-12 -->
                </div>
                <!--/ row -->
            </div>
            <!--/ container -->
        </section>
        <!--/ Testimonials carousel quoter style section -->
        <!-- Contact section -->
        <section class="hg_section pt-100 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <!-- Contact form -->
                        <div class="contactForm">
                            <form action="php_helpers/_contact-process.php" method="post" class="contact_form row">
                                <div class="cf_response"></div>
                                <p class="col-sm-6 kl-fancy-form">
                                    <input type="text" name="name" id="cf_name" class="form-control" placeholder="Please enter your first name" value="" tabindex="1" maxlength="35" required>
                                    <label class="control-label">FIRSTNAME</label>
                                </p>
                                <p class="col-sm-6 kl-fancy-form">
                                    <input type="text" name="lastname" id="cf_lastname" class="form-control" placeholder="Please enter your first last name" value="" tabindex="1" maxlength="35" required>
                                    <label class="control-label">LASTNAME</label>
                                </p>
                                <p class="col-sm-12 kl-fancy-form">
                                    <input type="text" name="email" id="cf_email" class="form-control h5-email" placeholder="Please enter your email address" value="" tabindex="1" maxlength="35" required>
                                    <label class="control-label">EMAIL</label>
                                </p>
                                <p class="col-sm-12 kl-fancy-form">
                                    <input type="text" name="subject" id="cf_subject" class="form-control" placeholder="Enter the subject message" value="" tabindex="1" maxlength="35" required>
                                    <label class="control-label">SUBJECT</label>
                                </p>
                                <p class="col-sm-12 kl-fancy-form">
                                    <textarea name="message" id="cf_message" class="form-control" cols="30" rows="10" placeholder="your message" tabindex="4" required></textarea>
                                    <label class="control-label">MESSAGE</label>
                                </p>
                                <!-- Google recaptcha required site-key -->
                                <div class="g-recaptcha" data-sitekey="xxxx"></div>
                                <p class="col-sm-12">
                                    <button class="btn btn-fullcolor" type="submit" id="cntSubmit" name="cntSubmit">Send</button>
                                </p>
                            </form>
                        </div>
                        <!--/ Contact form -->
                    </div>
                    <!--/ col-md-6 col-sm-6 -->
                    <div class="col-md-6 col-sm-6">
                        <!-- Google maps element -->
                        <div class="th-google_map mb-30" style="min-height: 8px !important;">
                        </div>
                        <!--/ Google maps element -->
                        <!-- Contact details -->
                        <div class="text_box">
                            <h3 class="text_box-title text_box-title--style2">CONTACT INFO</h3>
                            <h4>Dental Clinic</h4>
                            <p>
                                <i class="glyphicon glyphicon-home"></i>&nbsp;CM-22 Main Road, Sector 122, Noida - 201301 </p>
                            <h4>AS Dental Clinic</h4>
                            <p>
                                <i class="glyphicon glyphicon-home"></i>&nbsp;UG 10, Complex Noida, Amrapali Zodiac, Sector 120, Gautam Buddha Nagar, Uttar Pradesh 201304 </p>
                            <p>
                                <i class="glyphicon glyphicon-earphone"></i>&nbsp;9953734568<br />
                                <i class="glyphicon glyphicon-envelope"></i>&nbsp;
                            </p>
                        </div>
                        <!--/ Contact details -->
                    </div>
                    <!--/ col-md-6 col-sm-6 -->
                </div>
            </div>
        </section>
        <!--/ Contact section -->
        <!--/ Big Social new style element section -->
        <!-- Footer - Default Style -->
        <script type="text/javascript" src="asset//js/jquery.datepicker.js"></script>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div>
                            <h3 class="title m_title">FOOTER MENU</h3>
                            <div class="sbs">
                                <ul class="menu">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="profile.html">Our Profile</a></li>
                                    <li><a href="services.html">Our Services</a></li>
                                    <li><a href="why-us.html">Why Us</a></li>
                                    <li><a href="new-patient.html">Your First Visit</a></li>
                                    <li><a href="prime.html">Prime</a></li>
                                    <li><a href="careers.html">Careers</a></li>
                                    <li><a href="faqs.html">Faqs</a></li>
                                    <li><a href="contactus.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/ col-sm-5 -->
                    <!--<div class="col-sm-4">
						end newsletter-signup 
					</div>-->
                    <!-- col-sm-4 -->
                    <div class="col-sm-4">
                        <div>
                            <h3 class="title m_title">Address</h3>
                            <div class="contact-details">
                                Dental Clinic <p>
                                    <i class="glyphicon glyphicon-home"></i>&nbsp;Sector 122, Noida - 201301 </p>
                                AS Dental Clinic <p>
                                    <i class="glyphicon glyphicon-home"></i>&nbsp;Amrapali Zodiac, Sector 120, Gautam Buddha Nagar, Uttar Pradesh 201304 </p>
                            </div>
                        </div>
                    </div>
                    <!--/ col-sm-3 -->
                    <div class="col-sm-3">
                        <h3 class="title m_title">GET IN TOUCH</h3>
                        <p>
                            <i class="glyphicon glyphicon-earphone"></i>&nbsp;9953734568<br />
                            <i class="glyphicon glyphicon-envelope"></i>&nbsp;<a href="#">asDental@gmail.com</a><br />
                            <i class="glyphicon glyphicon-globe"></i>&nbsp;<a href="#">asDental.com</a><br />
                            <a href="#" target="_self" class="icon-facebook" title="Facebook">Facebook</a>
                        </p>
                    </div>
                </div>
                <!--/ row -->
                <!--/ row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bottom clearfix">
                            <!-- copyright -->
                            <div class="copyright">
                                <p style='display:inline;'>© 2017 <a href="#">AS Best Dental</a>. All rights reserved. Designed By <a href="#">Creativizt</a>.</p>
                            </div>
                            <!--/ copyright -->
                        </div>
                        <!--/ bottom -->
                    </div>
                    <!--/ col-sm-12 -->
                </div>
                <!--/ row -->
            </div>
            <!--/ container -->
        </footer>
        <!--/ Footer - Default Style -->
    </div>
    <!--/ Page Wrapper -->
    <!--/ Login Panel content -->
    <!-- ToTop trigger -->
    <a href="#" id="totop">TOP</a>
    <!--/ ToTop trigger -->
    <!-- JS FILES // These should be loaded in every page -->
    <script type="text/javascript" src="asset/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/js/kl-plugins.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <!-- JS FILES // Loaded on this page -->
    <!-- Required js script for animateme scroll effect for slideshow  -->
    <script type="text/javascript" src="asset/js/plugins/jquery.scrollme.js"></script>
    <!-- Required js script for iOS Slider -->
    <script type="text/javascript" src="asset/js/plugins/jquery.iosslider.min.js"></script>
    <!-- Required js script trigger for iOS Slider -->
    <script type="text/javascript" src="asset/js/plugins/kl-ios-slider.js"></script>
    <!-- Required script for Image boxes carousel element (Caroufredsel) -->
    <script type="text/javascript" src="asset/js/plugins/jquery.carouFredSel-packed.js"></script>
    <!-- Counter element required plugin and trigger -->
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>-->
    <script type="text/javascript" src="asset/js/plugins/jquery.counterup.min.js"></script>
    <script>
    jQuery(document).ready(function() {
        jQuery('.timepicker-default').timepicker({ defaultTime: 'value' });
    });
    </script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        jQuery('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });

    jQuery('#dob, #pres_date, #appointment_date, #camp_date, #leave_start_date, #leave_end_date, #appoint_dt').datepicker({
        format: "dd-M-yyyy",
        autoclose: true,
        todayHighlight: true
    });
    // This script is used in patient.php page.
    jQuery('#mobile, #patient_name').change(function() {
        var url = 'https://ASdental.com/ajax/validate_existance.html';
        var mobile = jQuery('#mobile').val();
        var name = jQuery('#patient_name').val();
        var u_type = jQuery('input[name="u_type"]:checked').val();
        //alert(u_type);
        if (u_type == undefined) {
            alert('Please Select User Type First');
        } else {
            jQuery.ajax({
                type: "POST",
                url: url,
                data: "checkdup=duplicate&num=" + mobile + "&name=" + name + "&u_type=" + u_type,
                cache: false,
                dataType: 'JSON',
                beforeSend: function() {
                    jQuery('#err_mob').html('');
                    jQuery("#err_mob").html('<img src=""');
                },
                success: function(html) {
                    jQuery('#err_mob').html('');
                    jQuery('#err_mob').html(html.msg);
                }
            });
        }

    });



    function rating_highlight(id, selected) {
        var stars = document.getElementsByClassName(id);

        var i = 1;
        jQuery('#' + id + '_rating').val('');
        jQuery('#' + id + '_rating').val(selected);
        while (i <= stars.length) {
            if (i == 1) { var mdl = 'one' }
            if (i == 2) { var mdl = 'two' }
            if (i == 3) { var mdl = 'three'; }
            if (i == 4) { var mdl = 'four'; }
            if (i == 5) { var mdl = 'five'; }
            if (i <= selected) {
                jQuery('#' + id + '_' + mdl + '_st').removeClass('btn-default');
                jQuery('#' + id + '_' + mdl + '_st').addClass('btn-warning');

            } else {
                jQuery('#' + id + '_' + mdl + '_st').removeClass('btn-warning');
                jQuery('#' + id + '_' + mdl + '_st').addClass('btn-default');
            }
            i++;
        }
    }

    function showStarSelected(clas, number) {
        var stars = document.getElementsByClassName(clas);
        var i = 1;
        jQuery('#' + clas + '_rating').val('');
        jQuery('#' + clas + '_rating').val(number);
        while (i <= stars.length) {
            if (i == 1) { var mdl = 'one' }
            if (i == 2) { var mdl = 'two' }
            if (i == 3) { var mdl = 'three'; }
            if (i == 4) { var mdl = 'four'; }
            if (i == 5) { var mdl = 'five'; }
            if (i <= number) {
                jQuery('#' + clas + '_' + mdl + '_st').removeClass('btn-default');
                jQuery('#' + clas + '_' + mdl + '_st').addClass('btn-warning');
            } else {
                jQuery('#' + clas + '_' + mdl + '_st').removeClass('btn-warning');
                jQuery('#' + clas + '_' + mdl + '_st').addClass('btn-default');

            }
            i++;
        }
    }

    jQuery('#sendToGoogle').click(function() {
        var url = 'https://ASdental.com/ajax/validate_existance.html';
        var phone = jQuery('#phone').val();
        if (jQuery('input[name="sendTo"]:checked').val() == 'Yes') {
            jQuery.ajax({
                url: url,
                type: 'post',
                dataType: "json",
                data: {
                    p_phone: phone,
                },
                success: function(data) {
                    jQuery('#sendToGoogle').hide();
                    alert('SMS Sent to Target Number');
                    window.location.href = '/feedback.html';
                }
            });
        } else {
            alert('Thank You!');
            jQuery('#sendToGoogle').hide();
            window.location.href = '/feedback.html';
        }
    });

    // for show cheif complains 
    jQuery('input[name=u_type]').click(function() {
        if (jQuery('input[name=u_type]:checked').val() == 'camp_reg') {
            jQuery('#complainDiv').show();
        } else {
            jQuery('#complainDiv').hide();
        }
    });

    jQuery('#city').change(function() {
        if (jQuery('#city option:selected').val() == 'others') {
            jQuery('#other_city').show();
            jQuery('#sec_st').hide();
            jQuery('#apt_st').hide();
            jQuery('#sector').removeAttr("required");
            jQuery('#apartment_society').removeAttr("required");
        } else {
            jQuery('#other_city').hide();
            jQuery('#sec_st').show();
            jQuery('#apt_st').show();
            jQuery('#sector').attr("required");
            jQuery('#apartment_society').attr("required");
        }
    });
    // For validate fields 
    jQuery("#frmPatientCamp").submit(function(e) {
        //e.preventDefault();
        if (jQuery('#patient_name').val() == '') {
            alert('Please enter Patient Name');
            jQuery('#camp_name').focus();
            return false;
        }
        if (jQuery('#email').val() == '') {
            alert('Please enter email ');
            jQuery('#camp_email').focus();
            return false;
        }
        if (jQuery('#mobile').val() == '') {
            alert('Please enter email ');
            jQuery('#mobile').focus();
            return false;
        }
        if (jQuery('#city').val() == '') {
            alert('Please Select City');
            jQuery('#city').focus();
            return false;
        }

        if (jQuery('#city option:selected').val() == 'others') {
            if (jQuery('#other_city').val() == '') {
                alert('Please Enter Other City');
                jQuery('#other_city').focus();
                return false;
            }
        } else {
            if (jQuery('#sector').val() == '') {
                alert('Please enter sector name');
                jQuery('#sector').focus();
                return false;
            }
            if (jQuery('#apartment_society').val() == '') {
                alert('Please enter apartment Or Society Name.');
                jQuery('#apartment_society').focus();
                return false;
            }
        }

        if (jQuery("input[name='medium']").is(":checked")) {
            var chkmed = jQuery("input[name='medium']:checked").val();
            if (chkmed == 'other') {
                jQuery('#o_medium').show();
            }
        } else {
            alert('Please select How to know about AS Dental?');
            jQuery("input[name='medium']").focus();
            return false;
        }
    });

    jQuery('#reset').click(function() {

        jQuery('#err_msg').html('');
    });

    // show feedback message 
    jQuery('#show_msg').click(function() {
        var url = 'https://ASdental.com/ajax/validate_existance.html';
        var feedback_cat = jQuery('#feedback_on').val();
        var feedback_cat_txt = jQuery('#feedback_on option:selected').text();
        //alert(feedback_cat_txt);
        var msg_for = jQuery('input[name=m_type]:checked').val();
        //alert(msg_for);
        if (feedback_cat == '') {
            alert('Please select Treatment');
            return false;
        }
        if (!jQuery('input[name=m_type]').is(":checked")) {
            alert('Please select Message for what.');
            return false;
        }
        jQuery.ajax({
            type: "POST",
            url: url,
            data: "fedbk_on=yes&fed_bak_cat=" + feedback_cat + "&msg_for=" + msg_for + "&treatment=" + feedback_cat_txt,
            cache: false,
            dataType: 'JSON',
            beforeSend: function() {
                jQuery('#err_mob').html('');
                jQuery("#err_mob").html('<img src=""');
            },
            success: function(html) {
                if (html.code == 200) {
                    jQuery('.modal-body').html('');
                    jQuery('.modal-body').html(html.msg);
                    jQuery("#msg").modal('show');
                }
            }
        });
    });

    // show feedback message 
    jQuery('#ct').click(function() {
        var url = 'https://ASdental.com/ajax/validate_existance.html';
        var feedback_cat = jQuery('#feedback_on').val();
        var feedback_cat_txt = jQuery('#feedback_on option:selected').text();
        var msg_for = jQuery('input[name=m_type]:checked').val();
        jQuery.ajax({
            type: "POST",
            url: url,
            data: "fedbk_on=yes&fed_bak_cat=" + feedback_cat + "&msg_for=" + msg_for + "&treatment=" + feedback_cat_txt,
            cache: false,
            dataType: 'JSON',
            beforeSend: function() {
                jQuery('#err_mob').html('');
                jQuery("#err_mob").html('<img src=""');
            },
            success: function(html) {
                if (html.code == 200) {
                    jQuery('.modal-body').html('');
                    jQuery('.modal-body').html(html.msg);

                }
            }
        });
    });



    function selectMSG(id) {
        if (jQuery('#' + id).val() == 'cli') {
            var msg = jQuery('#hdnClinic').val();
            let purl = jQuery('#hdnUrl_1').val();
            jQuery('#txtmsg').val('');
            jQuery('#txtmsg').val(msg);
            jQuery('#AS_url').val(purl);
        } else if (jQuery('#' + id).val() == 'hospi') {
            var msg = jQuery('#hdnHospital').val();
            let purl = jQuery('#hdnUrl_2').val();
            jQuery('#txtmsg').val('');
            jQuery('#txtmsg').val(msg);
            jQuery('#AS_url').val(purl);
        } else if (jQuery('#' + id).val() == 'imp') {
            var msg = jQuery('#hdnImplant').val();
            let purl = jQuery('#hdnUrl_3').val();
            jQuery('#txtmsg').val('');
            jQuery('#txtmsg').val(msg);
            jQuery('#AS_url').val(purl);
        } else if (jQuery('#' + id).val() == 'pedo') {
            var msg = jQuery('#hdnPEDO').val();
            let purl = jQuery('#hdnUrl_4').val();
            jQuery('#txtmsg').val('');
            jQuery('#txtmsg').val(msg);
            jQuery('#AS_url').val(purl);
        }
    }



    function countChar(val) {
        var len = val.value.length;
        if (len >= 160) {
            val.value = val.value.substring(0, 160);
        } else {
            jQuery('#charNum').text(160 - len);
        }
    }

    // Show hide other option for source medium 
    jQuery("input[name='medium']").change(function() {
        if (jQuery("input[name='medium']:checked").val() == 'other') {
            jQuery('#o_medium').show();
            jQuery('#o_medium').attr('required', 'true');
            jQuery('#o_medium').focus();
        } else if (jQuery("input[name='medium']:checked").val() == '') {
            jQuery('#o_medium').hide();
            jQuery('#o_medium').removeAttr('required');
            alert('Please select How to know about AS Dental?');
            return false;
        } else {
            jQuery('#o_medium').removeAttr('required');
            jQuery('#o_medium').hide();
        }
    });

    // Mobile autocomplete for prescription 
    jQuery('#p_phone').autocomplete({
        source: function(request, response) {
            var url = 'https://ASdental.com/ajax/validate_existance.html';
            // Fetch data
            jQuery.ajax({
                url: url,
                type: 'post',
                dataType: "json",
                data: {
                    pres_search: request.term
                },
                success: function(data) {
                    response(data);
                }
            });
        },
        select: function(event, ui) {
            // Set selection
            jQuery('#patient_phone').val(ui.item.mobile); // display the selected text
            jQuery('#selected_id').val(ui.item.value); // save selected id to input
            jQuery('#patient_name').val(ui.item.label); // save selected id to input
            jQuery('#age_pat').val(ui.item.age); // save selected id to input
            jQuery('#patient_gender').val(ui.item.gender);
            return false;
        }
    });

    // Show Patient Detail if Prescription id Exist
    jQuery('#getPatientDtl').click(function() {
        var url = 'https://ASdental.com/ajax/ajax_prescription.html';
        var pres_id = "";
        jQuery.ajax({
            type: "POST",
            url: url,
            data: "datafor=patient_dtl&pres_id=" + pres_id,
            cache: false,
            dataType: 'JSON',
            beforeSend: function() {

            },
            success: function(html) {
                if (html.date != '01-Jan-1970') {
                    document.getElementById('pres_date').value = html.date;
                    document.getElementById('doctor').value = html.doctor;
                    document.getElementById('p_phone').value = html.phone;
                    document.getElementById('selected_id').value = html.patient_id;
                    document.getElementById('patient_name').value = html.patient_name;
                    document.getElementById('age_pat').value = html.age;
                    document.getElementById('patient_gender').value = html.gender;
                } else {
                    document.getElementById('pres_date').value = '';
                }

            }
        });
    });


    // Show Clinical Finding checked checkbox
    jQuery('#getChiefComplain').click(function() {
        var url = 'https://ASdental.com/ajax/ajax_prescription.html';
        var pres_id = "";
        jQuery.ajax({
            type: "POST",
            url: url,
            data: "datafor=chief_comp&pres_id=" + pres_id,
            cache: false,
            dataType: 'JSON',
            beforeSend: function() {

            },
            success: function(html) {
                var symtom = html.symptom;
                var sym_1 = symtom.split(". ");
                var sym_1_1 = sym_1[0].split(": ");
                var patient_comp = sym_1_1[1].split(", ");

                var sym_1_2 = sym_1[1].split(": ");
                var patient_wants = sym_1_2[1].split(", ");
                // reset checkboxes
                for (let j = 1; j <= 31; j++) {
                    jQuery('#patient_complains_' + j).attr('checked', false);
                }
                for (let j = 1; j <= 7; j++) {
                    jQuery('#patient_wants_' + j).attr('checked', false);
                }
                // checked those checkboxes who have value of cheif complains
                for (let i = 0; i < patient_comp.length; i++) {
                    for (let j = 1; j <= 31; j++) {
                        if (jQuery('#patient_complains_' + j).val() == patient_comp[i]) {
                            //jQuery('#patient_complains_'+j).attr('checked', true);
                            document.getElementById('patient_complains_' + j).checked = true;
                        }
                    }
                }
                for (let i = 0; i < patient_wants.length; i++) {
                    for (let j = 1; j <= 7; j++) {
                        if (jQuery('#patient_wants_' + j).val() == patient_wants[i]) {
                            //jQuery('#patient_wants_'+j).attr('checked', true);
                            document.getElementById('patient_wants_' + j).checked = true;
                        }
                    }
                }
            }
        });
    });


    // show Dental History if Prescription Id Exist
    jQuery('#getDentalHis').click(function() {
        var url = 'https://ASdental.com/ajax/ajax_prescription.html';
        var pres_id = "";
        jQuery.ajax({
            type: "POST",
            url: url,
            data: "datafor=dntl_his&pres_id=" + pres_id,
            cache: false,
            dataType: 'JSON',
            beforeSend: function() {

            },
            success: function(html) {
                var den_his = html.dental_history;
                if (den_his) {
                    for (let j = 1; j <= 3; j++) {
                        jQuery('#dthans_' + j).attr('checked', false);
                    }
                    var dental1 = den_his.split(", ");
                    for (let i = 0; i < dental1.length; i++) {
                        for (let j = 1; j <= 3; j++) {
                            if (jQuery('#dthq_' + j).val() == dental1[i]) {
                                document.getElementById('dthans_' + j).checked = true;
                            }
                        }
                    }
                } else {
                    for (let j = 1; j <= 3; j++) {
                        jQuery('#dthans_' + j).attr('checked', false);
                    }
                }
            }
        });
    });
    // show Medical History if Prescription Id Exist
    jQuery('#getMedicalHis').click(function() {
        var url = 'https://ASdental.com/ajax/ajax_prescription.html';
        var pres_id = "";
        jQuery.ajax({
            type: "POST",
            url: url,
            data: "datafor=medi_his&pres_id=" + pres_id,
            cache: false,
            dataType: 'JSON',
            beforeSend: function() {

            },
            success: function(html) {
                var medical_histry = html.medical_history;
                if (medical_histry) {
                    if (medical_histry.indexOf(',')) {
                        var medical = medical_histry.split(", ");
                        for (let i = 1; i <= 20; i++) {
                            jQuery('#mhans_' + i).attr('checked', false);
                        }
                        for (let i = 0; i < medical.length; i++) {
                            for (let j = 1; j <= 20; j++) {
                                if (jQuery('#mhq_' + j).val() == medical[i]) {
                                    //jQuery('#mhans_'+j).attr('checked', true);
                                    document.getElementById('mhans_' + j).checked = true;
                                } else if (medical[i].indexOf(':') != -1) {
                                    var innertext = medical[i].split(': ');
                                    if (innertext[0] == 'Serious health disease') {
                                        jQuery('#mhans_16').attr('checked', false);
                                        jQuery('#mhans_custom_16').css('display', 'none');

                                        document.getElementById('mhans_16').checked = true;
                                        jQuery('#mhans_custom_16').css('display', 'block');
                                        jQuery('#mhans_custom_16').val(innertext[1]);
                                    }
                                    if (innertext[0] == 'Allergies') {
                                        jQuery('#mhans_1').attr('checked', false);
                                        jQuery('#mhans_custom_1').css('display', 'none');

                                        document.getElementById('mhans_1').checked = true;
                                        jQuery('#mhans_custom_1').css('display', 'block');
                                        jQuery('#mhans_custom_1').val(innertext[1]);
                                    }
                                }
                            }
                        }
                    }
                } else {
                    jQuery('#mhans_custom_16').val('');
                    jQuery('#mhans_custom_16').hide();
                    jQuery('#mhans_custom_1').val('');
                    jQuery('#mhans_custom_1').hide();
                    for (let i = 1; i <= 20; i++) {
                        jQuery('#mhans_' + i).attr('checked', false);
                    }
                }
            }
        });
    });

    // Show Clinical Finding if Prescription Id Exist
    jQuery('#getClinicalFnd').click(function() {
        var url = 'https://ASdental.com/ajax/ajax_prescription.html';
        var pres_id = "";
        jQuery.ajax({
            type: "POST",
            url: url,
            data: "datafor=clinic_fnd&pres_id=" + pres_id,
            cache: false,
            dataType: 'JSON',
            beforeSend: function() {

            },
            success: function(html) {
                var clinic_fnd = html.clinical_finding;
                if (clinic_fnd) {
                    var clinical = clinic_fnd.split(", ");
                    for (let i = 1; i <= 29; i++) {
                        document.getElementById('dcfans_' + i).checked = false;
                    }
                    for (let i = 0; i < clinical.length; i++) {
                        for (let j = 1; j <= 29; j++) {
                            if (clinical[i].indexOf(':') != -1) {
                                var innertext = clinical[i].split(': ');
                                if (jQuery('#dcfq_' + j).val() == innertext[0] + ':') {
                                    document.getElementById('dcfans_' + j).checked = true;
                                    jQuery('#dcfans_custom_' + j).css('display', 'block');
                                    jQuery('#dcfans_custom_' + j).val(innertext[1]);
                                } else if (innertext[1].indexOf(';') != -1) {
                                    var inner2 = innertext[1].split('; ');
                                    if (innertext[0] == 'Mobility') {
                                        for (let l = 1; l <= 3; l++) {
                                            jQuery('#dcf_ans_div').css('display', 'none');
                                            document.getElementById('dcfans_20').checked = false;
                                            document.getElementById('dcfans_custom_20' + '_' + l).checked = false;
                                        }
                                        for (let k = 0; k < inner2.length; k++) {
                                            var inner3 = inner2[k].split('~');
                                            for (let l = 1; l <= 3; l++) {

                                                if (jQuery('#dcfans_custom_20' + '_' + l).val() == inner3[0]) {
                                                    document.getElementById('dcf_ans_div').style.display = 'block';
                                                    document.getElementById('dcfans_20').checked = true;
                                                    document.getElementById('dcfans_custom_20' + '_' + l).checked = true;
                                                    jQuery('#dcfans_custom_20' + '_txt' + l).val(inner3[1]);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                } else {
                    jQuery('#dcf_ans_div').hide();
                    jQuery("input[id='dcfans_custom_20_1']:checkbox").attr('checked', false);
                    jQuery("input[id='dcfans_custom_20_2']:checkbox").attr('checked', false);
                    jQuery("input[id='dcfans_custom_20_3']:checkbox").attr('checked', false);
                    jQuery("input[name='dcfans_custom_20_txt[]']").val('');
                    for (let i = 1; i <= 29; i++) {
                        document.getElementById('dcfans_' + i).checked = false;
                    }
                }
            }
        });
    });

    // Show Diagnostic Advice if Prescription Id Exist
    jQuery('#getDiagnosAdvc').click(function() {
        var url = 'https://ASdental.com/ajax/ajax_prescription.html';
        var pres_id = "";
        jQuery.ajax({
            type: "POST",
            url: url,
            data: "datafor=diagno_adv&pres_id=" + pres_id,
            cache: false,
            dataType: 'JSON',
            beforeSend: function() {

            },
            success: function(html) {
                var diagnostic_ad = html.diagnostic_advice;
                if (diagnostic_ad) {
                    var diagnostic_advice = diagnostic_ad.split(", ");
                    for (let i = 1; i <= 6; i++) {
                        jQuery('#daans_' + i).attr('checked', false);
                    }
                    jQuery("#daf_ans_div_1").hide();
                    jQuery("#daf_ans_div_3").hide();
                    jQuery("input[name='daans_custom_1[]']:checkbox").attr('checked', false);
                    jQuery("input[name='daans_custom_3[]']:checkbox").attr('checked', false);
                    for (let i = 0; i < diagnostic_advice.length; i++) {
                        for (let j = 1; j <= 6; j++) {
                            if (diagnostic_advice[i].indexOf(':') != -1) {
                                var innertext = diagnostic_advice[i].split(': ');
                                if (jQuery('#daq_' + j).val() == innertext[0] + ':') {
                                    if (innertext[0] != 'Blood Test' && innertext[0] != 'Diabetes') {
                                        //jQuery('#daans_'+j).attr('checked', true);
                                        document.getElementById('daans_' + j).checked = true;
                                        jQuery('#daans_custom_' + j).css('display', 'block');
                                        jQuery('#daans_custom_' + j).val(innertext[1]);
                                    } else {
                                        var innercheckbox = innertext[1].split('; ');
                                        if (innertext[0] == 'Blood Test') {
                                            for (let l = 1; l <= 7; l++) {
                                                jQuery('#daf_ans_div_1').css('display', 'none');
                                                jQuery('#daans_1').attr('checked', false);
                                                jQuery('#daans_custom_1' + '_' + l).attr('checked', false);
                                            }
                                            for (let k = 0; k < innercheckbox.length; k++) {
                                                for (let l = 1; l <= 7; l++) {
                                                    if (jQuery('#daans_custom_1' + '_' + l).val() == innercheckbox[k]) {
                                                        jQuery('#daf_ans_div_1').css('display', 'block');
                                                        //jQuery('#daans_1').attr('checked', true);
                                                        document.getElementById('daans_1').checked = true;
                                                        document.getElementById('daans_custom_1' + '_' + l).checked = true;
                                                    }
                                                }
                                            }
                                        }
                                        if (innertext[0] == 'Diabetes') {
                                            for (let l = 1; l <= 3; l++) {
                                                jQuery('#daf_ans_div_3').css('display', 'none');
                                                jQuery('#daans_3').attr('checked', false);
                                                jQuery('#daans_custom_3' + '_' + l).attr('checked', false);
                                            }
                                            for (let k = 0; k < innercheckbox.length; k++) {
                                                for (let l = 1; l <= 3; l++) {
                                                    if (jQuery('#daans_custom_3' + '_' + l).val() == innercheckbox[k]) {
                                                        jQuery('#daf_ans_div_3').css('display', 'block');
                                                        document.getElementById('daans_3').checked = true;
                                                        document.getElementById('daans_custom_3' + '_' + l).checked = true;
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            } else {
                                if (jQuery('#daq_' + j).val() == diagnostic_advice[i]) {
                                    document.getElementById('daans_' + j).checked = true;
                                }
                            }
                        }
                    }
                } else {
                    jQuery("#daf_ans_div_1").hide();
                    jQuery("#daf_ans_div_3").hide();
                    jQuery("input[name='daans_custom_1[]']:checkbox").attr('checked', false);
                    jQuery("input[name='daans_custom_3[]']:checkbox").attr('checked', false);
                    for (let i = 1; i <= 6; i++) {
                        document.getElementById('daans_' + i).checked = false;
                    }
                }
            }
        });
    });

    // Show Treatment Advice if Prescription Id Exist
    jQuery('#treatAdvc').click(function() {
        var url = 'https://ASdental.com/ajax/ajax_prescription.html';
        var pres_id = "";
        jQuery.ajax({
            type: "POST",
            url: url,
            data: "datafor=treat_adv&pres_id=" + pres_id,
            cache: false,
            dataType: 'JSON',
            beforeSend: function() {

            },
            success: function(html) {
                var treat_adv = html.treatment_advice;
                if (treat_adv) {
                    var treatment_ad = treat_adv.split(", ");
                    for (let i = 1; i <= 30; i++) {
                        jQuery('#taans_' + i).attr('checked', false);
                        jQuery('#taans_custom_' + i).css('display', 'none');
                        jQuery('#taans_custom_' + i).val('');
                    }
                    for (let i = 0; i < treatment_ad.length; i++) {
                        for (let j = 1; j <= 30; j++) {
                            if (treatment_ad[i].indexOf(':') != -1) {
                                var innertext = treatment_ad[i].split(': ');
                                if (jQuery('#taq_' + j).val() == innertext[0] + ':') {
                                    document.getElementById('taans_' + j).checked = true;
                                    jQuery('#taans_custom_' + j).css('display', 'block');
                                    jQuery('#taans_custom_' + j).val(innertext[1]);
                                }
                            } else {
                                if (jQuery('#taq_' + j).val() == treatment_ad[i]) {
                                    document.getElementById('taans_' + j).checked = true;
                                }
                            }
                        }
                    }
                } else {
                    for (let i = 1; i <= 30; i++) {
                        jQuery('#taans_' + i).attr('checked', false);
                        jQuery('#taans_custom_' + i).css('display', 'none');
                        jQuery('#taans_custom_' + i).val('');
                    }
                }
            }
        });
    });

    // Show Treatment Provided if Prescription Id Exist
    jQuery('#getTreatProvd').click(function() {
        var url = 'https://ASdental.com/ajax/ajax_prescription.html';
        var pres_id = "";
        jQuery.ajax({
            type: "POST",
            url: url,
            data: "datafor=treat_pro&pres_id=" + pres_id,
            cache: false,
            dataType: 'JSON',
            beforeSend: function() {

            },
            success: function(html) {
                //document.getElementById('li_8').className = 'active';
                var treat_pro = html.treatment_provided;
                if (treat_pro) {
                    var treatment = treat_pro.split(", ");
                    for (let i = 1; i <= 31; i++) {
                        jQuery('#tpans_' + i).attr('checked', false);
                        jQuery('#tpans_custom_' + i).css('display', 'none');
                        jQuery('#tpans_custom_' + i).val('');
                    }
                    for (let i = 0; i < treatment.length; i++) {
                        for (let j = 1; j <= 31; j++) {
                            if (treatment[i].indexOf(':') != -1) {
                                var innertext = treatment[i].split(': ');
                                if (jQuery('#tpq_' + j).val() == innertext[0] + ':') {
                                    document.getElementById('tpans_' + j).checked = true;
                                    jQuery('#tpans_custom_' + j).css('display', 'block');
                                    jQuery('#tpans_custom_' + j).val(innertext[1]);
                                }
                            } else {
                                if (jQuery('#tpq_' + j).val() == treatment[i]) {
                                    document.getElementById('tpans_' + j).checked = true;
                                }
                            }
                        }
                    }
                } else {
                    for (let i = 1; i <= 31; i++) {
                        jQuery('#tpans_' + i).attr('checked', false);
                        jQuery('#tpans_custom_' + i).css('display', 'none');
                        jQuery('#tpans_custom_' + i).val('');
                    }
                }
            }
        });
    });

    // Show Medicines if Prescription Id Exist
    jQuery('#clkMedicine').click(function() {
        var url = 'https://ASdental.com/ajax/ajax_prescription.html';
        var pres_id = "";
        if (pres_id) {
            jQuery.ajax({
                type: "POST",
                url: url,
                data: "datafor=medicine&pres_id=" + pres_id,
                cache: false,
                dataType: 'JSON',
                beforeSend: function() {

                },
                success: function(html) {
                    //document.getElementById('li_9').className = 'active';
                    var medicine = html.medicine;
                    if (medicine) {
                        var pres_medicine = medicine.split(", ");
                        for (let i = 1; i <= 62; i++) {
                            document.getElementById('medicine_' + i).checked = false;
                        }
                        for (let i = 0; i < pres_medicine.length; i++) {
                            for (let j = 1; j <= 62; j++) {
                                if (jQuery('#medicineq_' + j).val() == pres_medicine[i]) {
                                    document.getElementById('medicine_' + j).checked = true;
                                }
                            }
                        }
                    } else {
                        for (let i = 1; i <= 62; i++) {
                            document.getElementById('medicine_' + i).checked = false;
                        }
                    }
                }
            });
        }

    });

    // Copy numers with +91 code

    jQuery('#wmobiles').keyup(function() {
        let ids = jQuery('#wmobiles').val();
        let output = ids.replace(/^\s+|\s+$/g, '').split(/\s+/).join(',');
        jQuery('#wmobiles').val(output);
    });

    jQuery('#submitwmob').click(function() {
        let numbers = jQuery('#wmobiles').val();
        let num_arr = numbers.split(',');
        // console.log(num_arr);
        let new_arr = [];
        for (let key in num_arr) {
            let numm = num_arr[key];
            //new_arr[key] = `https://wa.me/91${numm}`;
            new_arr[key] = `+91${numm}`;
        }
        let strnum = '';
        let ind = 1;
        for (let ky in new_arr) {

            strnum += `${new_arr[ky]},`;
            ind++;
        }
        jQuery('#whatsapp_links').val(strnum);
    });

    jQuery('#copyUrl').click(function() {
        jQuery('#whatsapp_links').select();
        document.execCommand("copy");
        alert('Copied');
    });

    jQuery('#getnumbers').click(function() {
        var url = 'https://ASdental.com/ajax/ajax_requests.html';
        jQuery.ajax({
            type: "POST",
            url: url,
            data: "action=get_numbers",
            cache: false,
            dataType: 'JSON',
            beforeSend: function() {
                jQuery('#getnumbers').html('Loading...');
            },
            success: function(html) {
                if (html.code == 200) {
                    jQuery('#getnumbers').html('');
                    jQuery('#getnumbers').html('Get Numbers');
                    jQuery('#numbers').val(html.msg);
                }
                if (html.code == 201) {
                    alert(html.msg);
                    jQuery('#getnumbers').html('');
                    jQuery('#getnumbers').html('Get Numbers');
                    jQuery('#resetdiv').show();
                }
            }
        });
    });

    // Update Gotted Number from just above script
    jQuery('#copyUrlNums').click(function() {
        jQuery('#numbers').select();
        document.execCommand("copy");
        alert('Copied');

        //Update copied numbers status
        var nums = jQuery('#numbers').val();
        var url = 'https://ASdental.com/ajax/ajax_requests.html';
        jQuery.ajax({
            type: "POST",
            url: url,
            data: "action=update_copied_status&numbers=" + nums,
            cache: false,
            dataType: 'JSON',
            beforeSend: function() {
                jQuery('#copyUrlNums').html('Loading...');
            },
            success: function(html) {
                if (html.code == 200) {
                    jQuery('#copyUrlNums').html('');
                    jQuery('#copyUrlNums').html('Copy');
                }

            }
        });
    });

    jQuery('#resetnum').click(function() {
        var url = 'https://ASdental.com/ajax/ajax_requests.html';
        jQuery.ajax({
            type: "POST",
            url: url,
            data: "action=reset_num",
            cache: false,
            dataType: 'JSON',
            beforeSend: function() {
                jQuery('#resetnum').html('Loading...');
            },
            success: function(html) {
                if (html.code == 200) {
                    alert(html.msg);
                    jQuery('#resetnum').html('');
                    jQuery('#resetnum').html('Reset');
                    jQuery('#resetdiv').hide();
                }

            }
        });
    });

    // Get Leave Request Detail
    jQuery('#request_id').change(function() {
        var url = 'https://ASdental.com/ajax/ajax_requests.html';
        let lrid = jQuery('#request_id').val();
        jQuery.ajax({
            type: "POST",
            url: url,
            data: { action: 'leave_req', lrid: lrid },
            cache: false,
            dataType: 'JSON',
            beforeSend: function() {
                // jQuery('#getnumbers').html('Loading...');
            },
            success: function(html) {
                if (html.code == 200) {
                    let result = html.res;
                    jQuery('#doctor_name').val(result.name);
                    jQuery('#leave_type').val(result.leave_type);
                    jQuery('#leave_start_date').val(result.leave_start_date);
                    jQuery('#leave_end_date').val(result.leave_end_date);
                    jQuery('#total_days').val(html.days);
                    jQuery('#reason').val(result.reason);
                    if (result.leave_type == 'Short Leave' || result.leave_type == 'Half Day') {
                        jQuery('#lblRes').html('(including time from-to)');
                    } else {
                        jQuery('#lblRes').html('');
                    }

                    if (result.leave_status == 'Approved') {
                        jQuery('#leave_status_a').prop('checked', true);
                        jQuery('input[name=submit]').hide();
                        jQuery('input[name=submit]').attr('type', 'button');
                    }
                    if (result.leave_status == 'Disapprove') {
                        jQuery('#leave_status_d').prop('checked', true);
                        jQuery('input[name=submit]').hide();
                        jQuery('input[name=submit]').attr('type', 'button');
                    }
                    if (result.leave_status == 'No Status') {
                        jQuery('input[name=submit]').show();
                        jQuery('input[name=leave_status]').prop('checked', false);
                        jQuery('input[name=submit]').attr('type', 'submit');
                    }
                    jQuery('#remark').val(result.remark);
                }
            }
        });
    });

    jQuery('#request_id').blur(function() {
        var url = 'https://asdental.com/ajax/ajax_requests.html';
        let lrid = jQuery('#request_id').val();
        jQuery.ajax({
            type: "POST",
            url: url,
            data: { action: 'leave_req', lrid: lrid },
            cache: false,
            dataType: 'JSON',
            beforeSend: function() {
                // jQuery('#getnumbers').html('Loading...');
            },
            success: function(html) {
                if (html.code == 200) {
                    let result = html.res;
                    jQuery('#doctor_name').val(result.name);
                    jQuery('#leave_type').val(result.leave_type);
                    jQuery('#leave_start_date').val(result.leave_start_date);
                    jQuery('#leave_end_date').val(result.leave_end_date);
                    jQuery('#total_days').val(html.days);
                    jQuery('#reason').val(result.reason);
                    if (result.leave_status == 'Approved') {
                        jQuery('#leave_status_a').prop('checked', true);
                        jQuery('input[name=submit]').hide();
                        jQuery('input[name=submit]').attr('type', 'button');
                    }
                    if (result.leave_status == 'Disapprove') {
                        jQuery('#leave_status_d').prop('checked', true);
                        jQuery('input[name=submit]').hide();
                        jQuery('input[name=submit]').attr('type', 'button');
                    }
                    if (result.leave_status == 'No Status') {
                        jQuery('input[name=submit]').show();
                        jQuery('input[name=leave_status]').prop('checked', false);
                        jQuery('input[name=submit]').attr('type', 'submit');
                    }
                    jQuery('#remark').val(result.remark);
                }
            }
        });
    });
    // End Here

    jQuery('#activity_type').change(function() {
        if (jQuery('#activity_type').val() == 'Data Record') {
            document.getElementById('description').type = 'number';
            document.getElementById('description').placeholder = 'Please enter number';

        } else {
            document.getElementById('description').type = 'text';
            document.getElementById('description').placeholder = 'Enter Description';
        }
    });

    // This script for free-camp-sms page
    // Purpose: enter all mobile number make comma seperated for send sms.
    jQuery('#free_camp_mobiles').keyup(function() {
        let ids = jQuery('#free_camp_mobiles').val();
        let output = ids.replace(/^\s+|\s+$/g, '').split(/\s+/).join(',');
        jQuery('#free_camp_mobiles').val(output);
    });
    </script>
    <!-- Required js scripts files for Google Maps element -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDafz-CDk3jg6lhF_CUJ7xlnGAO7dSAIpk"></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0o13wnCMLdZdjlEZgK40yH8vY5ELzA9U"></script>-->
    <script type="text/javascript" src="asset/js/plugins/jquery.gmap.min.js"></script>
    <!-- Requried js trigger for Google Maps element -->
    <script type="text/javascript" src="js/trigger/kl-google-maps.js"></script>
    <!-- Custom Kallyas JS codes -->
    <script type="text/javascript" src="asset/js/kl-scripts.js"></script>
    <!-- Custom JS // Loaded only in this particular page -->
</body>

</html>
@endsection
