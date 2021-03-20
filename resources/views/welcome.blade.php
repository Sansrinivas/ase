<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AS Enterprises</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

         <!-- Favicons -->
        <link href="{{ asset('img/favicon.png') }}" rel="icon">
        <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">
        <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body id="page-top">
    
    <!--/ Nav Star /-->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll" href="#page-top">AS Enterprises</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link js-scroll active" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll" href="#about">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll" href="#features">Features</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link js-scroll" href="#Packages">Packages</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link js-scroll" href="#system">System</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll" href="#contact">Contact Us</a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle nav-links" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-user"></i>&nbsp;Login
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#user-login">User Login</a>
                            <a class="dropdown-item" href="#user-login">Admin Login</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </nav>
  <!--/ Nav End /-->

    <!--<div class="flex-center position-ref full-height">
             @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">ERegister</a>
                        @endif 
                    @endauth
                </div>
            @endif             
        </div> -->

    <!--/ Intro Skew Star /-->

    <div id="home" class="intro route bg-image" style="background-image: url(img/slider-img.jpg)">
    <div id="particles-js"></div>
    <!-- <div class="overlay-itro"></div> -->
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-md-6 col-sm-6 align-middle order-lg-first">
                <div class="banner_text text_md_center res_md_mb_30 res_xs_mb_20">
                    <h1 class="animation text-white ban-moto"> "Belive in yourself"</h1>
                    <p class="subs-bans">“If You Are Working On Something That You Really Care About, You Don’t Have To Be Pushed. The Vision Pulls You.”</p>
                    <div class="btn_group ase"> 
                        <a href="#" data-toggle="modal" data-target="#login" class="btn btn-default">Login <i class="ion-ios-arrow-thin-right"></i></a> 
                        <a href="register.html" class="btn btn-border-white content-popup">Sign Up <i class="ion-ios-arrow-thin-right"></i></a> 
                    </div>
                </div>
                </div>
                <div class="col-md-6 col-sm-6 order-first">
                <div class="banner_image_right_big res_md_mb_50 res_xs_mb_30">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>   
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/slide-4.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/slide-5.jpg" alt="Second slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--/ Intro Skew End /-->

    <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-box text-center">
                                <h3 class="title-a">
                                    About Us
                                </h3>
                                <!--  <p class="subtitle-a">
                                    You are joining with annai star enterprises and earn income with benefits for your success
                                </p> -->
                                <div class="line-mf"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img class="animation animated zoomIn" data-animation="zoomIn" data-animation-delay="0.2s" src="img/about_img11.png" alt="aboutimg11" style="animation-delay: 0.2s; opacity: 1;width: 100%;">
                        </div>
                    <div class="col-md-6 align-items-center">
                        <div class="about-me pt-4 pt-md-0 align-middle">
                            <!-- <div class="title-box-2">
                                <h5 class="title-left">
                                    About Us
                                </h5>
                            </div> -->
                            <p class="lead">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <p class="lead">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <p class="lead">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>


    <section id="features" class="menu-section services-part position-r ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Features
                        </h3>
                        <p class="subtitle-a">
                            You are joining with annai star enterprises and earn income with benefits for your success
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="ser-feature-block mb_-30 center-sm">
                <div class="row">
                    <div class="col-lg-4 col-6 fadeInUpMedium delay1 visible animated">
                        <div class="services-box mb-30">
                            <div class="frontend">
                                <div class="services-icon services1">
                                    <img src="img/as-secure.png" alt="Annai Star Enterprises">
                                </div>
                                <div class="services-detail">
                                    <h3 class="ser-title">Secure Storage</h3>
                                    <div class="ser-subtitle">
                                        We make it possible to transfer value very Easy way.
                                    </div>
                                </div>
                            </div>
                            <div class="backend">
                                <div class="services-icon services1">
                                    <img src="img/as-secure.png" alt="Annai Star Enterprises">
                                </div>
                                <div class="services-detail">
                                    <h3 class="ser-title">Secure Storage</h3>
                                    <div class="ser-subtitle">
                                        We make it possible to transfer value very Easy way.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 fadeInUpMedium delay2 visible animated">
                        <div class="services-box mb-30">
                            <div class="frontend">
                                <div class="services-icon services2">
                                    <img src="img/annai-star-enterprises-investment-projects.png" alt="Annai Star Enterprises">
                                </div>
                                <div class="services-detail">
                                    <h3 class="ser-title">Career System</h3>
                                    <div class="ser-subtitle">
                                        Build your team and promote to earn more income and benefits.
                                    </div>
                                </div>
                            </div>
                            <div class="backend">                     
                                <div class="services-icon services2">
                                    <img src="img/annai-star-enterprises-investment-projects.png" alt="Annai Star Enterprises">
                                </div>
                                <div class="services-detail">
                                    <h3 class="ser-title">Career System</h3>
                                    <div class="ser-subtitle">
                                        Build your team and promote to earn more income and benefits.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 fadeInUpMedium delay3 visible animated">
                        <div class="services-box mb-30">
                            <div class="frontend">
                                <div class="services-icon services3">
                                    <img src="img/ae-mobile-app.png" alt="Annai Star Enterprises">
                                </div>
                                <div class="services-detail">
                                    <h3 class="ser-title">Mobile Friendly</h3>
                                    <div class="ser-subtitle">
                                        Operate our system from your mobile and from anywhere
                                    </div>
                                </div>
                            </div>
                            <div class="backend">
                                <div class="services-icon services3">
                                    <img src="img/ae-mobile-app.png" alt="Annai Star Enterprises">
                                </div>
                                <div class="services-detail">
                                    <h3 class="ser-title">Mobile Friendly</h3>
                                    <div class="ser-subtitle">
                                        Operate our system from your mobile and from anywhere
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 fadeInUpMedium delay4 visible animated">
                        <div class="services-box mb-30">
                            <div class="frontend">
                                <div class="services-icon services3">
                                    <img src="img/annai-star-enterprises-investment-projects.png" alt="Annai Star Enterprises">
                                </div>
                                <div class="services-detail">
                                    <h3 class="ser-title">Analysis & Planning</h3>
                                    <div class="ser-subtitle">
                                        Our team has experts in Analysis & Planning
                                    </div>
                                </div>
                            </div>
                            <div class="backend">
                                <div class="services-icon services3">
                                    <img src="img/annai-star-enterprises-investment-projects.png" alt="Annai Star Enterprises">
                                </div>
                                <div class="services-detail">
                                    <h3 class="ser-title">Analysis & Planning</h3>
                                    <div class="ser-subtitle">
                                        Our team has experts in Analysis & Planning
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 fadeInUpMedium delay5 visible animated">
                        <div class="services-box mb-30">
                            <div class="frontend">
                                <div class="services-icon services1">
                                    <img src="img/ase-exchange-service.png" alt="Annai Star Enterprises">
                                </div>
                                <div class="services-detail">
                                    <h3 class="ser-title">Instant Payouts</h3>
                                    <div class="ser-subtitle">
                                        Your payouts are settled instantly. No need to wait.
                                    </div>
                                </div>
                            </div>
                            <div class="backend">
                                <div class="services-icon services1">
                                    <img src="img/ase-exchange-service.png" alt="Annai Star Enterprises">
                                </div>
                                <div class="services-detail">
                                    <h3 class="ser-title">Instant Payouts</h3>
                                    <div class="ser-subtitle">
                                        Your payouts are settled instantly. No need to wait.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 fadeInUpMedium delay6 visible animated">
                        <div class="services-box mb-30">
                            <div class="frontend">
                                <div class="services-icon services2">
                                    <img src="img/ase-refferals.png" alt="Annai Star Enterprises">
                                </div>
                                <div class="services-detail">
                                    <h3 class="ser-title">Instant Referral</h3>
                                    <div class="ser-subtitle">
                                        Your referral amount are settled instantly. No need to wait
                                    </div>
                                </div>
                            </div>
                            <div class="backend">
                                <div class="services-icon services2">
                                    <img src="img/ase-refferals.png" alt="Annai Star Enterprises">
                                </div>
                                <div class="services-detail">
                                    <h3 class="ser-title">Instant Referral</h3>
                                    <div class="ser-subtitle">
                                        Your referral amount are settled instantly. No need to wait
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="Packages" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="title-box text-center">
                                    <h3 class="title-a">
                                        Packages
                                    </h3>
                                    <p class="subtitle-a">
                                        Simple information about all boards and its values
                                    </p>
                                    <div class="line-mf"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">              
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="token_sale_box text-center animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">
                                        <h5>Bronze</h5>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="token_sale_box text-center animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;">
                                        <h5>Silver </h5>
                                        <span><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="token_sale_box text-center animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.6s" style="animation-delay: 0.6s; opacity: 1;">
                                        <h5>Gold</h5>
                                        <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-12"></div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="token_sale_box text-center animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.6s" style="animation-delay: 0.6s; opacity: 1;">
                                            <h5>Platinum</h5>
                                            <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="token_sale_box text-center animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.6s" style="animation-delay: 0.6s; opacity: 1;">
                                            <h5>Diamond</h5>
                                            <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12"></div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> -->

    <section id="system" class="menu-section services-part position-r ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            System
                        </h3>            
                        <p class="subtitle-a">
                            Once you join with any package, you can start refering new members. You will get commission according to the following table
                        </p>
                        <div class="line-mf"></div>
                            <h3 class="subtitle-a">
                                <strong>Entry Fee Rs 2000 and Get 25kg Rice + Income</strong>
                            </h3>
                        </div>
                </div>
            </div>
            <div class="ser-feature-block mb_-30 center-sm">
                <div class="row">
                    <div class="col-lg-5 col-4">
                        <div class="col-lg-12 col-12">
                            <div class="spec-off">
                                <div class="spect">
                                    <img src="img/member.png">
                                    <h3>Leadership ID :  ₹ 22,000</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="spec-off">
                                <div class="spect">
                                    <img src="img/leader.png">
                                    <h3>Membership ID :  ₹ 2,000</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="spec-off">
                                <div class="spect">
                                    <img src="img/refferals.png">
                                    <h3>Refferal Bonus :  ₹ 200</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-8 align-items-center">
                        <div class="refrs">
                            <table class="table table-hover">
                                <tbody>
                                    <tr class="tab_color_white">
                                        <th>Referal</th>
                                        <th>(%)</th>
                                        <th> Commission * members</th>
                                        <th>Amount</th>
                                    </tr>
                                    <tr>
                                        <td>Direct Refferal</td>
                                        <td>10 %</td>
                                        <td>200 * 10</td>
                                        <td>2000</td>
                                    </tr>
                                    <tr>
                                        <td>1<sup>st</sup> Level</td>
                                        <td>5 %</td>
                                        <td>100 * 100</td>
                                        <td>10,000</td>
                                    </tr>
                                    <tr>
                                        <td>2<sup>st</sup> Level</td>
                                        <td>4 %</td>
                                        <td>80 * 1000</td>
                                        <td>80,000</td>
                                    </tr>
                                    <tr>
                                        <td>3<sup>st</sup> Level</td>
                                        <td>3 %</td>
                                        <td>60 * 10,000</td>
                                        <td>6,00,000</td>
                                    </tr>
                                    <tr>
                                        <td>4<sup>st</sup> Level</td>
                                        <td>2 %</td>
                                        <td>40 * 1,00,000</td>
                                        <td>40,00,000</td>
                                    </tr>
                                    <tr>
                                        <td>5<sup>st</sup> Level</td>
                                        <td>1 %</td>
                                        <td>20 * 10,00,000</td>
                                        <td>2,00,00,000</td>
                                    </tr>                                            
                                </tbody>
                            </table>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="user-login" class="menu-section services-part position-r ptb-100">
        <div class="container">           
            <div class="ser-feature-block mb_-30 center-sm">
                <div class="row">
                    <div class="col-lg-6 "> <!-- col-4 offset-md-3 -->
                        <!--  <div class="row">
                        <div class="col-sm-12">
                        <div class="title-box text-center">
                        <h3 class="title-a">
                            User Login
                        </h3>                        
                        <div class="line-mf"></div>
                        </div>
                        </div>
                        </div> -->
                        <div class="title_default_dark title_border text-center" id="user-login">
                            <div class="title-box text-center">
                                <h3 class="title-a">
                                    User Login
                                </h3> 
                                <div class="line-mf"></div>            
                            </div>                      
                            <div class="field_form authorize_form">
                                <form action="#" method="post">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" required="" placeholder="User ID" name="userid">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="password" class="form-control" required="" placeholder="Password" name="password">
                                    </div>                            
                                    <div class="form-group col-lg-12 text-left logsss">
                                        <a  class="fpt" href="otp.html">
                                            Forgot Password?
                                        </a> <!-- <a  class="text-right a-login" href="#admin-login">Admin Login</a> -->
                                    </div>                            
                                    <div class="form-group col-md-12 text-center">
                                        <input type="submit" value="Sign In" class="btn btn-default btn-radius logs">
                                    </div>
                                </form>                          
                            </div>                        
                        </div>
                    </div>                
                    <div class="col-lg-6 "><!-- col-4 offset-md-3 -->
                        <!-- <div class="row">
                            <div class="col-sm-12">
                                <div class="title-box text-center">
                                    <h3 class="title-a">
                                        Admin Login
                                    </h3>                        
                                    <div class="line-mf"></div>
                                </div>
                            </div>
                        </div> -->
                        <div class="title_default_dark title_border text-center" id="user-login">
                            <div class="title-box text-center">
                                <h3 class="title-a">
                                    Admin Login
                                </h3>            
                                <div class="line-mf"></div> 
                            </div>                      
                            <div class="field_form authorize_form">
                                <form action="#" method="post">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" required="" placeholder="User ID" name="userid">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="password" class="form-control" required="" placeholder="Password" name="password">
                                    </div>                            
                                    <div class="form-group col-lg-12 text-left logsss">
                                        <a  class="fpt" href="otp.html">
                                            Forgot Password?
                                        </a> <!-- <a  class="text-right a-login" href="#admin-login">Admin Login</a> -->
                                    </div>                            
                                    <div class="form-group col-md-12 text-center">
                                        <input type="submit" value="Sign In" class="btn btn-default btn-radius logs">
                                    </div>
                                </form>                          
                            </div>                        
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </section>

    <!--/ Section Contact-Footer Star /-->

    <section class="paralax-mf footer-paralax bg-image route" style="background-image: url(img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="title-box text-center">
                                <h3 class="title-a">
                                    Contact Us
                                </h3>            
                                <div class="line-mf"></div>
                            </div>
                            <div class="row">                
                                <div class="col-md-6 offset-md-4">
                                    <div class="more-info">                  
                                        <ul class="list-ico">
                                            <li>
                                                <span class="ion-ios-location"></span>
                                                No: 167, Kathivakkam High Road, Ennore, Chennai-57.
                                            </li>
                                            <li>
                                                <span class="ion-ios-telephone"></span>
                                                <a href="tel:04425750449"> 044 - 25750449 </a> | 
                                                <a href="tel:9566108115"> 9566108115 </a> | 
                                                <a href="tel:9566162449"> 9566162449 </a>
                                            </li>
                                            <li>
                                                <span class="ion-email"></span> 
                                                <a href="mailto:contact@asenterprises.in">contact@asenterprises.in </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li>
                                                <a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a>
                                            </li>
                                            <li>
                                                <a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a>
                                            </li>
                                            <li>
                                                <a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright-box">
                            <p class="copyright">&copy; Copyright © 
                                <strong>AS Enterprises 2020</strong>. 
                                All Rights Reserved | Designed by : 
                                <a class="poweredby" href="#">Sadetechno Solutions</a>
                            </p>
                            <div class="credits"></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>

    <!-- <div class="modal fade" id="admin-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabels" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="">
                        <div class="title_default_dark title_border text-center">
                            <div class="title-box text-center">
                                <h3 class="title-a">
                                    Sign in to your account
                                </h3>            
                                <div class="line-mf"></div>
                            </div>
                        </div>
                        <div class="field_form authorize_form">
                            <form action="#" method="post">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" required="" placeholder="User ID" name="userid">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="password" class="form-control" required="" placeholder="Password" name="password">
                                </div>                            
                                <div class="form-group col-lg-12 text-left logsss">
                                    <a  class="fpt" href="#">
                                        Forgot Password?
                                    </a>
                                    <a  class="text-right a-login" href="#" data-toggle="modal" data-target="#login">user Login</a>
                                </div>
                                <div class="form-group col-md-12 text-center">
                                    <input type="submit" value="Sign In" class="btn btn-default btn-radius logs">
                                </div>                           
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <!--  <div id="preloader"></div>-->
        <!-- JavaScript Libraries -->
    <script>

    </script>


    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('lib/popper/popper.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/jquery.counterup.js') }}"></script>
    <!--  <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('lib/typed/typed.min.js') }}"></script>
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/particles-custom.js') }}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{  asset('contactform/contactform.js') }}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('js/main.js') }}"></script>

    </body>
</html>
