<!DOCTYPE html>
<html lang="en_GB" dir="ltr">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="csrf-token" content="nxtE1GpXG5RsWUqU3IOw8J8vtXsEOzRbpx1nKoKE"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicon -->
                <link rel="icon" href="https://xilancer.xgenious.com/assets/uploads/media-uploader/favicon1680407178.png" sizes="40x40" type="icon/png">
        <link rel="preconnect" href="https://fonts.gstatic.com"> <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://xilancer.xgenious.com/assets/common/css/bootstrap.min.css">
    <!-- Animate Css -->
    <link rel="stylesheet" href="https://xilancer.xgenious.com/assets/frontend/css/animate.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://xilancer.xgenious.com/assets/frontend/css/slick.css">
    <!-- All Plugin Css -->
    <link rel="stylesheet" href="https://xilancer.xgenious.com/assets/common/css/all_plugin.css">
    <!-- Toastr Css -->
    <link rel="stylesheet" href="https://xilancer.xgenious.com/assets/common/css/toastr.min.css">
    <!-- Helper Css -->
    <link rel="stylesheet" href="https://xilancer.xgenious.com/assets/frontend/css/helpers.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="https://xilancer.xgenious.com/assets/frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="https://xilancer.xgenious.com/assets/frontend/css/style.css">
        <style>
    :root {
        --main-color-one: #6176f6;
        --main-color-two: #2bdfff;
        --main-color-one-rgb: 97, 118, 246;
        --secondary-color: #ffa500;
        --secondary-color-rgb: 255, 165, 0;
        --bg-gradient: linear-gradient(90deg, #fef0db 0%, #fefbf6 50%, #ecf8f0 100%);
        --section-bg-base: #6176f6;
        --section-bg-1: #F7F8FF;
        --section-bg-2: #F5F5F5;
        --footer-bg-1: #020418;
        --footer-bg-2: #1E84FE;
        --copyright-bg-1: #323336;
        --border-color: #EAECF0;
        --border-color-2: #ddd;
        --heading-color: #1D2635;
        --paragraph-color: #475467;
        --body-color: #667085;
        --white: #fff;
        --active-color: #00C897;
        --active-color-rgb: 0, 200, 151;
        --success-color: #65c18c;
        --success-color-rgb: 101, 193, 140;
        --danger-color: #f53a3a;
        --danger-color-rgb: 245, 58, 58;
        --promo-one: #e3e1ff;
        --promo-two: #ffe6d3;
        --promo-three: #dbf3ff;
        --promo-four: #efffe6;
        --promo-five: #ffc9c9;
        --promo-six: #ceffda;
        --promo-seven: #b2ccfd;
        --promo-eight: #f0bcff;
        --heading-font: Plus Jakarta Sans,sans-serif;
        --body-font: Manrope,sans-serif;
        --Otomanopee-font: ,sans-serif;
        
        
    }
</style>    <!-- page css -->
    
            <title>User Register</title>
                            
</head>

<body>
<!-- Preloader Starts  -->
<div id="preloader">
    <div class="preloader-inner">
        <div class="preloader-inner-item">
            <span>l</span>
            <span>o</span>
            <span>a</span>
            <span>d</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
        </div>
    </div>
</div>
<!-- Preloader Ends  -->
<header class="header-style-01">
    <!-- Menu area Starts -->
    <nav class="navbar navbar-area navbar-expand-lg" >
        <div class="container bg-white nav-container">
            <div class="logo-wrapper">
                <a href="#" class="logo">
                                            <img src=""  alt=""/>
                                    </a>
            </div>
            <div class="responsive-mobile-menu d-lg-none">
                <a href="javascript:void(0)" class="click-nav-right-icon">
                    <i class="fas fa-ellipsis-v"></i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#xilancer_menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="xilancer_menu">
                {{-- <ul class="navbar-nav">
                    
	<li class=" menu-item-has-children "> 
		<a href="https://xilancer.xgenious.com">Home</a>
<ul class="sub-menu">

	<li > 
		<a href="https://xilancer.xgenious.com/home-page-one">Home Page One</a>
</li>
	<li > 
		<a href="https://xilancer.xgenious.com/home-page-two">Home Page Two</a>
</li></ul>
</li>
	<li > 
		<a href="https://xilancer.xgenious.com/jobs/all">Jobs</a>
</li>
	<li > 
		<a href="https://xilancer.xgenious.com/talents/all">Talents</a>
</li>
	<li > 
		<a href="https://xilancer.xgenious.com/subscriptions/all">Subscriptions</a>
</li>
	<li class=" menu-item-has-children "> 
		<a href="#">Pages</a>
<ul class="sub-menu">

	<li > 
		<a href="https://xilancer.xgenious.com/projects/all">Projects</a>
</li>
	<li > 
		<a href="https://xilancer.xgenious.com/blogs/all">Blog</a>
</li>
	<li > 
		<a href="https://xilancer.xgenious.com/privacy-policy">Privacy Policy</a>
</li>
	<li > 
		<a href="https://xilancer.xgenious.com/terms-conditions">Terms Conditions</a>
</li>
	<li > 
		<a href="https://xilancer.xgenious.com/about-us">About Us</a>
</li></ul>
</li>
	<li > 
		<a href="https://xilancer.xgenious.com/contact-us">Contact</a>
</li>
                </ul> --}}
            </div>
            <div class="navbar-right-content show-nav-content">
    <div class="single-right-content">
        <div class="navbar-right-flex">
            <div class="navbar-right-item position-relative">
                <a href="#0" class="navbar-right-chat search-header-open">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
                <div class="header-global-search">
                    <div class="header-global-search-header">
                        <h5 class="header-global-search-title">Search</h5>
                        <div class="header-global-search-close search-close"><i class="fa-solid fa-times"></i>
                        </div>
                    </div>
                    <div class="header-global-search-input d-flex align-items-center">
                        <div class="header-global-search-input-inner">
                            <div class="header-global-search-input-inner-icon" id="header_search_load_spinner">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <input type="text" id="search_your_desired_job" class="form-control"
                                   placeholder="Search" autocomplete="off">
                            <div class="header-global-search-select">
                                <select id="Select_project_or_job_for_search">
                                                                            <option value="project">Project</option>
                                                                                                                <option value="job">Job</option>
                                                                        <option value="talent">Talent</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="display_search_result"></div>
                </div>
                <div class="search-overlay"></div>
            </div>
            <div class="navbar-right-btn">
                <a href="/"
                   class="cmn-btn btn-outline-1 color-one btn-small radius-10">Log In
                </a>
            </div>
            <div class="btn-wrapper">
                <a href="/register"
                   class="cmn-btn btn-bg-1 btn-small radius-10">Sign Up
                </a>
            </div>
        </div>
    </div>
</div>        </div>
    </nav>
        <!-- Menu area end -->
</header>


    {{-- <script src='https://www.google.com/recaptcha/api.js'></script> --}}
    <!-- login Area Starts -->
    <section class="choose-account-area pat-100 pab-100 user_type_area">
        <div class="container">
            <div class="choose-account center-text">
                <h4 class="choose-account-title">Choose a Role</h4>
                <p class="choose-account-para mt-2">Choose a role from below to continue signing up</p>
                <div class="choose-account-flex d-flex mt-4">
                    <div class="choose-account-single selected join_as_a_freelancer">
                        <div class="choose-account-single-thumb">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M40 70.625C41.2944 70.625 42.3438 69.5757 42.3438 68.2812C42.3438 66.9868 41.2944 65.9375 40 65.9375C38.7056 65.9375 37.6562 66.9868 37.6562 68.2812C37.6562 69.5757 38.7056 70.625 40 70.625Z"
                                    fill="#6176F6" />
                                <path
                                    d="M2.34375 80H77.6562C78.9506 80 80 78.9506 80 77.6562V75.3125C80 70.09 75.6075 65.9375 70.4688 65.9375C69.6594 65.9375 68.8623 66.0442 68.0941 66.2456L70.4238 54.5192C70.5605 53.8311 70.3817 53.1178 69.9366 52.5755C69.4914 52.0331 68.8267 51.7188 68.125 51.7188H65.7812V49.375C65.7812 42.9133 60.5242 37.6562 54.0625 37.6562H49.375C48.0827 37.6562 47.0312 36.6048 47.0312 35.3125V35.3061C49.8756 33.1659 51.7188 29.7631 51.7188 25.9375C51.7188 24.4055 51.7188 13.3697 51.7188 11.7188C51.7188 7.84172 48.5645 4.6875 44.6875 4.6875H37.6562C36.3639 4.6875 35.3125 3.63609 35.3125 2.34375C35.3125 1.04937 34.2631 0 32.9688 0H30.625C25.4556 0 21.25 4.20563 21.25 9.375C21.25 13.7353 24.2423 17.41 28.2812 18.4533V25.9375C28.2812 29.7631 30.1244 33.1659 32.9688 35.3061V35.3125C32.9688 36.6048 31.9173 37.6562 30.625 37.6562H25.9375C19.4758 37.6562 14.2188 42.9133 14.2188 49.375V51.7188H11.875C11.1733 51.7188 10.5086 52.0331 10.0634 52.5755C9.61828 53.1178 9.43953 53.8311 9.57625 54.5192L11.9059 66.2456C11.1377 66.0442 10.3406 65.9375 9.53125 65.9375C4.39141 65.9375 0 70.0912 0 75.3125V77.6562C0 78.9506 1.04937 80 2.34375 80V80ZM65.2698 56.4062L61.5136 75.3125H18.4864L14.7302 56.4062H65.2698ZM70.4688 70.625C73.0944 70.625 75.3125 72.7716 75.3125 75.3125H66.2927L66.897 72.2706C67.932 71.1598 69.108 70.625 70.4688 70.625ZM40 32.9688C36.123 32.9688 32.9688 29.8145 32.9688 25.9375V18.75H47.0312V25.9375C47.0312 29.8145 43.877 32.9688 40 32.9688ZM25.9375 9.375C25.9375 6.79031 28.0403 4.6875 30.625 4.6875H31.0266C31.9939 7.41578 34.6006 9.375 37.6562 9.375H44.6875C45.9798 9.375 47.0312 10.4264 47.0312 11.7188V14.0625H30.625C28.0403 14.0625 25.9375 11.9597 25.9375 9.375ZM40 37.6562C40.9102 37.6562 41.7952 37.5486 42.6463 37.3513C43.2692 39.4036 44.8073 41.0602 46.7834 41.8467C45.9702 44.8305 43.238 47.0312 40 47.0312C36.762 47.0312 34.0298 44.8305 33.2166 41.8467C35.1927 41.0602 36.7308 39.4036 37.3537 37.3513C38.2048 37.5486 39.0898 37.6562 40 37.6562ZM18.9062 49.375C18.9062 45.498 22.0605 42.3438 25.9375 42.3438H28.517C29.6058 47.6863 34.3408 51.7188 40 51.7188C45.6592 51.7188 50.3941 47.6863 51.483 42.3438H54.0625C57.9395 42.3438 61.0938 45.498 61.0938 49.375V51.7188H18.9062V49.375ZM9.53125 70.625C10.8784 70.625 12.0572 71.1489 13.103 72.2706L13.7073 75.3125H4.6875C4.6875 72.7716 6.90562 70.625 9.53125 70.625V70.625Z"
                                    fill="#667085" />
                            </svg>
                        </div>
                        <div class="choose-account-single-contents mt-3">
                            <h6 class="choose-account-single-contents-title">Join as a freelancer</h6>
                        </div>
                    </div>
                    <div class="choose-account-single join_as_a_client">
                        <div class="choose-account-single-thumb">
                            <svg width="62" height="80" viewBox="0 0 62 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M57.4738 56.8037C54.8975 53.6169 51.272 51.3891 47.265 50.5305L39.5938 48.8866V44.4384C43.6458 41.9366 46.5327 37.7223 47.2381 32.8125H48.1875C52.0645 32.8125 55.2188 29.6583 55.2188 25.7812C55.2188 21.9042 52.0645 18.75 48.1875 18.75H47.4062V8.59375C47.4062 3.85516 43.5511 0 38.8125 0H20.0625C13.6008 0 8.34375 5.25703 8.34375 11.7188C8.34375 14.6011 9.39172 17.242 11.1241 19.2853C8.57719 20.3433 6.78125 22.8559 6.78125 25.7812C6.78125 29.6583 9.93547 32.8125 13.8125 32.8125H14.7619C15.4673 37.7223 18.3542 41.9366 22.4062 44.4384V48.8866L14.735 50.5305C10.728 51.3891 7.1025 53.617 4.52625 56.8037C1.95 59.9905 0.53125 64.0023 0.53125 68.1003V77.6562C0.53125 78.9506 1.58062 80 2.875 80H59.125C60.4194 80 61.4688 78.9506 61.4688 77.6562V68.1003C61.4688 64.0023 60.05 59.9905 57.4738 56.8037ZM47.4062 23.4375H48.1875C49.4798 23.4375 50.5312 24.4889 50.5312 25.7812C50.5312 27.0736 49.4798 28.125 48.1875 28.125H47.4062V23.4375ZM14.5938 28.125H13.8125C12.5202 28.125 11.4688 27.0736 11.4688 25.7812C11.4688 24.4889 12.5202 23.4375 13.8125 23.4375H14.5938V28.125ZM17.7188 14.8438V18.3484C14.9905 17.3813 13.0312 14.7745 13.0312 11.7188C13.0312 7.84172 16.1855 4.6875 20.0625 4.6875H38.8125C40.9664 4.6875 42.7188 6.43984 42.7188 8.59375V12.5H20.0625C18.7681 12.5 17.7188 13.5494 17.7188 14.8438ZM19.2812 30.4688V23.4086C19.5398 23.4258 19.7997 23.4375 20.0625 23.4375C21.3569 23.4375 22.4062 22.3881 22.4062 21.0938V17.1875H42.7188V30.4688C42.7188 36.9305 37.4617 42.1875 31 42.1875C24.5383 42.1875 19.2812 36.9305 19.2812 30.4688ZM22.7877 75.3125H5.21875V68.1003C5.21875 61.8791 9.63406 56.4173 15.717 55.1139L23.1898 53.5125L25.4628 60.3314L22.7877 75.3125ZM27.5494 75.3125L29.8373 62.5H32.1627L34.4506 75.3125H27.5494ZM28.4223 54.3867C29.2756 54.5219 30.1377 54.5913 31 54.5913C31.8623 54.5913 32.7244 54.522 33.5777 54.3867L32.4356 57.8125H29.5642L28.4223 54.3867ZM34.9062 49.2355C32.3877 50.1292 29.6123 50.1292 27.0938 49.2355V46.4039C28.3463 46.7109 29.6542 46.875 31 46.875C32.3458 46.875 33.6538 46.7109 34.9062 46.4039V49.2355ZM56.7812 75.3125H39.2123L36.5372 60.3314L38.8102 53.5125L46.283 55.1139C52.3659 56.4173 56.7812 61.8789 56.7812 68.1003V75.3125Z"
                                    fill="#667085" />
                            </svg>
                        </div>
                        <div class="choose-account-single-contents mt-3">
                            <h6 class="choose-account-single-contents-title">Join as a Client</h6>
                        </div>
                    </div>
                </div>

                <div class="btn-wrapper mt-4">
                    <span class="btn-profile btn-bg-1 w-100 continue_to_info">Continue</span>
                </div>

            </div>
        </div>
    </section>

    <section class="login-area pat-100 pab-100 user_info_area">
        <div class="container">
            <div class="row gy-5 align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="login-wrapper">
                        <div class="login-wrapper-contents">
                            <h3 class="login-wrapper-contents-title">Sign Up</h3>

                            <div class="error-message"></div>

                            <form class="login-wrapper-form custom-form" method="post"
                                action="/register-user">
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" autocomplete="off">                                <input type="hidden" name="user_type" id="user_type" value="2">
                                <div class="input-flex-item">
                                    <div class="single-input mt-4">
                                        <label class="label-title mb-2"> First Name </label>
                                        <input class="form--control" type="text" name="first_name" id="first_name"
                                            placeholder="Type First Name">
                                    </div>
                                    <div class="single-input mt-4">
                                        <label class="label-title mb-2"> Last Name </label>
                                        <input class="form--control" type="text" name="last_name" id="last_name"
                                            placeholder="Type Last Name">
                                    </div>
                                </div>
                                <div class="single-input mt-4">
                                    <label class="label-title mb-2"> User Name </label>
                                    <input class="form--control" type="text" name="username" id="username"
                                        placeholder="Type User Name">
                                    <span id="user_name_availability"></span>
                                </div>
                                <div class="single-input mt-0">
                                    <label class="label-title mb-2"> Email Address </label>
                                    <input class="form--control" type="text" name="email" id="email"
                                           placeholder="Type Email">
                                    <span id="email_availability"></span>
                                </div>
                                <div class="single-input mt-0">
                                    <label class="label-title mb-2"> Phone Number </label>
                                    <input class="form--control" type="tel" id="phones" name="phone">
                                    <span id="phone_availability"></span>
                                </div>

                                <div class="input-flex-item">
                                    <div class="single-input mt-0">
                                        <label class="label-title mb-2"> Create Password </label>
                                        <div class="single-input-inner">
                                            <input class="form--control" type="password" name="password" id="password"
                                                placeholder="Type Password">
                                            <div class="icon toggle-password">
                                                <div class="show-icon"> <i class="fas fa-eye-slash"></i> </div>
                                                <span class="hide-icon"> <i class="fas fa-eye"></i> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input mt-0">
                                        <label class="label-title mb-2"> Confirm Password </label>
                                        <div class="single-input-inner">
                                            <input class="form--control" type="password" name="confirm_password"
                                                id="confirm_password" placeholder="Confirm Password">
                                            <div class="icon toggle-password">
                                                <div class="show-icon"> <i class="fas fa-eye-slash"></i> </div>
                                                <span class="hide-icon"> <i class="fas fa-eye"></i> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span id="check_password_match"></span>
                                <br>
                                <input type="checkbox" class="form-check-input" id="terms_condition"
                                       name="terms_condition">
                                <label class="form-check-label" for="toc_and_privacy">
                                    Accept all
                                    <a target="_blank" href="#"
                                       class="fw-bold">Terms and Conditions</a> &amp;
                                    <a target="_blank" href="#"
                                       class="fw-bold">Privacy Policy</a>
                                </label>

                                                                    {{-- <div class="col-md-12 my-3">
                                        <div class="g-recaptcha" id="recaptcha_element_register" data-sitekey="6LdsrfEpAAAAAO6kajZpCjiq-ppcVJFHoCUhAHXx"></div>
                                                                            </div> --}}
                                                                <button class="submit-btn w-100 mt-4 sign_up_now_button" type="submit"> Sign Up Now <span id="user_register_load_spinner"></span></button>
                                <span class="account color-light mt-3"> Already have an account? <a
                                        class="color-one" href="/"> Login </a>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-right">
                        <div class="global-slick-init login-slider nav-style-one dot-style-one white-dot slider-inner-margin"
                            data-appendArrows=".append-jobs" data-dots="true" data-infinite="true" data-slidesToShow="1"
                            data-swipeToSlide="true" data-autoplay="true" data-autoplaySpeed="2500"
                            data-prevArrow='<div class="prev-icon"><i class="fa-solid fa-arrow-left"></i></div>'
                            data-nextArrow='<div class="next-icon"><i class="fa-solid fa-arrow-right"></i></div>'>
                            <div class="login-right-item">
    <div class="login-right-shapes">
        <div class="login-right-thumb">
                            <img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/login_page1680158041.png"  alt=""/>
                    </div>
    </div>
    <div class="login-right-contents text-white">
        <h4 class="login-right-contents-title"> Register and start discover </h4>
        <p class="login-right-contents-para">Once register you will see the magic of Edlance marketplace.</p>
    </div>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login Area end -->
<!-- footer area start -->
<footer class="footer-area footer-fluid white-footer footer-bg-1">
    <div class="container">
        <div class="footer-area-wrapper footer-bg-1">

            <div class="row gx-5 footer-area-top">
                   <div class="col-lg-3 col-sm-6 mt-4">
            <div class="footer-widget widget">
                <div class="footer-contents-logo">
                    <a href="#" class="footer-contents-logo-img"> 
                    <img src=""  alt=""/>
                    </a>
                </div>
                <div class="footer-widget-inner mt-4">
                    <p class="footer-widget-para">Hi You will find everything on this platform.</p>
                    <div class="footer-widget-social mt-4">
                        <ul class="footer-widget-social-list list-style-none">
                                        <li class="footer-widget-social-list-item">
                <a class="footer-widget-social-list-link" href="#"> <i class="fab fa-facebook-f"></i> </a>
            </li>
            <li class="footer-widget-social-list-item">
                <a class="footer-widget-social-list-link" href="#"> <i class="fab fa-youtube"></i> </a>
            </li>
            <li class="footer-widget-social-list-item">
                <a class="footer-widget-social-list-link" href="#"> <i class="fab fa-twitter"></i> </a>
            </li>
            <li class="footer-widget-social-list-item">
                <a class="footer-widget-social-list-link" href="#"> <i class="fab fa-linkedin-in"></i> </a>
            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div><div class="col-lg-3 col-sm-6 mt-4">
    <div class="footer-widget widget">
        <h4 class="footer-widget-title">About Us</h4>
        <div class="footer-widget-inner mt-4">
            <ul class="footer-widget-link-list">
                    <li class="footer-widget-link-list-item">
            <a href="#">About</a>
    </li>    <li class="footer-widget-link-list-item">
            <a href="#">Contact</a>
    </li>    <li class="footer-widget-link-list-item">
            <a href="#">Privacy Policy</a>
    </li>    <li class="footer-widget-link-list-item">
            <a href="#">Terms and Conditions</a>
    </li>
            </ul>
        </div>
    </div>
</div><div class="col-lg-3 col-sm-6 mt-4">
        <div class="footer-widget widget">
            <h4 class="footer-widget-title">Services</h4>
            <div class="footer-widget-inner mt-4">
                <ul class="footer-widget-link-list">
                                <li class="footer-widget-link-list-item">
                <a href="#">Design and Creative</a>
            </li>            <li class="footer-widget-link-list-item">
                <a href="#">Website Development</a>
            </li>            <li class="footer-widget-link-list-item">
                <a href="#">Mobile App Development</a>
            </li>            <li class="footer-widget-link-list-item">
                <a href="#">Digital Marketing</a>
            </li>            <li class="footer-widget-link-list-item">
                <a href="#">Writing and Translation</a>
            </li>
                </ul>
            </div>
        </div>
    </div>    <div class="col-lg-3 col-sm-6 mt-4">
            <div class="footer-widget widget">
                <h4 class="footer-widget-title">Contact Us</h4>
                <div class="footer-inner mt-4">
                    <div class="footer-widget-contact">
                             <span class="footer-widget-contact-item"> 
         <span> 
         <i class="fas fa-phone"></i> 
         </span> 
        <a href="#/"> +627-521-1504 </a> 
     </span>
     <span class="footer-widget-contact-item"> 
         <span> 
         <i class="far fa-envelope"></i> 
         </span> 
        <a href="#/"> info@example.c0.ke </a> 
     </span>
     <span class="footer-widget-contact-item"> 
         <span> 
         <i class="fas fa-map-marker"></i> 
         </span> 
        <a href="#/"> 8702 Syokimau, Pasific Mall</a> 
     </span>

                    </div>
                </div>
            </div>
        </div>
            </div>

            <div class="copyright-area copyright-border">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-widget-para">
                            <p>©  2024  All right reserved by  <a href="#">Roberms</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- footer area end -->
    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"> <i class="fas fa-angle-up"></i> </span>
    </div>
    <!-- back to top area end -->

    <!-- Mouse Cursor start -->
    <div class="mouse-move mouse-outer"></div>
    <div class="mouse-move mouse-inner"></div>
    <!-- Mouse Cursor Ends -->

<!-- jquery -->
<script src="https://xilancer.xgenious.com/assets/common/js/jquery-3.7.1.min.js"></script>
<!-- jquery Migrate -->
<script src="https://xilancer.xgenious.com/assets/common/js/jquery-migrate-3.4.0.min.js"></script>
<!-- bootstrap -->
<script src="https://xilancer.xgenious.com/assets/frontend/js/bootstrap.bundle.min.js"></script>
<!-- Wow Js -->
<script src="https://xilancer.xgenious.com/assets/frontend/js/wow.js"></script>
<!-- Slick Js -->
<script src="https://xilancer.xgenious.com/assets/frontend/js/slick.js"></script>
<!-- All Plugin Js -->
<script src="https://xilancer.xgenious.com/assets/frontend/js/all_plugin.js"></script>
<!-- Magnific popup Js -->
<script src="https://xilancer.xgenious.com/assets/frontend/js/jquery.magnific-popup.js"></script>
<!-- main js -->
<script src="https://xilancer.xgenious.com/assets/frontend/js/main.js"></script>
<!-- Toastr js -->
    <!-- Wow Js -->
    <script>new WOW().init();</script>

<script src="https://xilancer.xgenious.com/assets/common/js/toastr.min.js"></script>
<script type="text/javascript"></script>
<!-- global ajax setup -->
{{-- <script> $.ajaxSetup({headers: {'X-CSRF-TOKEN': 'nxtE1GpXG5RsWUqU3IOw8J8vtXsEOzRbpx1nKoKE'} }) </script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

{{-- <script>
    (function($){
        "use strict";
        $(document).ready(function(){
            $(document).on('mouseup', function (e) {
                if ($(e.target).closest('.navbar-right-notification').find('.navbar-right-notification-wrapper').length === 0) {
                    $('.navbar-right-notification-wrapper').removeClass('active');
                }
            });

            $(document).on('click', '.navbar-right-notification-icon', function () {
                $('.navbar-right-notification-wrapper').toggleClass('active');
                                $.ajax({
                    url:"",
                    method:'POST',
                    success: function(res){
                        if(res.status == 'success'){
                            let status = res.status
                        }
                    }
                });
            });

            $(document).on('click', '.subscription_by_email', function(e){
                e.preventDefault();
                let email = $('#newsletter_subscribe_from_addon input[name="email"]').val();
                let erContainer = $("#newsletter_subscribe_from_addon .error-message");
                erContainer.html('');
                $.ajax({
                    url:"",
                    data:{email:email},
                    method:'POST',
                    error:function(res){
                        let errors = res.responseJSON;
                        erContainer.html('<div class="alert alert-danger text-start"></div>');
                        $.each(errors.errors, function(index,value){
                            erContainer.find('.alert.alert-danger').append('<p>'+value+'</p>');
                        });
                    },
                    success: function(res){
                        if(res.status=='success'){
                            toastr_success_js("Thanks to Subscription Us.")
                            $('input[name="email"]').val('')
                        }
                        if(res.status == 'failed'){
                            erContainer.html('<div class="alert alert-danger">'+res.msg+'</div>');
                        }
                    }

                });
            });
            $(document).on('click', '.subscription_by_email_newsletter', function(e){
                e.preventDefault();
                let email = $('#newsletter_subscribe_from_footer input[name="email"]').val();
                let erContainer = $("#newsletter_subscribe_from_footer .error-message");
                erContainer.html('');
                $.ajax({
                    url:"",
                    data:{email:email},
                    method:'POST',
                    error:function(res){
                        let errors = res.responseJSON;
                        erContainer.html('<div class="alert alert-danger text-start"></div>');
                        $.each(errors.errors, function(index,value){
                            erContainer.find('.alert.alert-danger').append('<p>'+value+'</p>');
                        });
                    },
                    success: function(res){
                        if(res.status=='success'){
                            toastr_success_js("Thanks to Subscription Us.")
                            $('input[name="email"]').val('')
                        }
                        if(res.status == 'failed'){
                            erContainer.html('<div class="alert alert-danger">'+res.msg+'</div>');
                        }
                    }

                });
            });

            //faq question
            $(document).on('click', '.ask_you_question', function(e){
                e.preventDefault();
                let question = $('input[name="question"]').val();
                let erContainer = $("#ask_your_question .error-message");
                erContainer.html('');
                $.ajax({
                    url:"",
                    data:{question:question},
                    method:'POST',
                    error:function(res){
                        let errors = res.responseJSON;
                        erContainer.html('<div class="alert alert-danger text-start"></div>');
                        $.each(errors.errors, function(index,value){
                            erContainer.find('.alert.alert-danger').append('<p>'+value+'</p>');
                        });
                    },
                    success: function(res){
                        if(res.status=='success'){
                            toastr_success_js("Thanks to Question Us.")
                            $('input[name="question"]').val('')
                            $("#questionModal").modal('hide');
                        }
                        if(res.status == 'failed'){
                            erContainer.html('<div class="alert alert-danger">'+res.msg+'</div>');
                        }
                    }

                });
            });

            //bookmarks
            $(document).on('click','.click_to_bookmark',function(){
                let identity = $(this).data('identity');
                let route = $(this).data('route');
                let type = $(this).data('type');
                let login = $(this).data('login') ?? '';
                if(login == 'login-please'){
                    toastr_warning_js("Please login to bookmark.")
                    return false
                }
                $.ajax({
                    url: route,
                    type: 'post',
                    data: {identity:identity, type:type},
                    success: function(res){
                        if(res.status == 'success'){
                            toastr_success_js("Successfully bookmarked.")
                            $(".bookmark_area").load(location.href + ' .bookmark_area');
                        }else if(res.status == 'exists'){
                            toastr_warning_js("Already bookmarked.")
                        }
                        else{
                            toastr_warning_js("Something went wrong.");
                        }
                    }
                });
            });

            //bookmarks remove
            $(document).on('click','.remove_from_bookmark',function(){
                let identity = $(this).data('identity');
                let route = $(this).data('route');
                $.ajax({
                    url: route,
                    type: 'post',
                    data: {identity:identity},
                    success: function(res){
                        $('#current_password_match').show();
                        if(res.status == 'success'){
                            toastr_success_js("Successfully remove from bookmarked.")
                            $(".bookmark_area").load(location.href + ' .bookmark_area');
                        }else{
                            toastr_warning_js("Something went wrong.");
                        }
                    }
                });
            });


            //job search from home page
            $(document).on('keyup', '#search_your_desired_job',function(){
                let job_search_string = $('#search_your_desired_job').val();
                let search_type = $('#Select_project_or_job_for_search').val();
                $('.display_search_result').hide()

                if(job_search_string.length >= 1){
                    $('.display_search_result').show()
                    $('#header_search_load_spinner').html('<i class="fas fa-spinner fa-pulse"></i>');
                    $.ajax({
                        url:"",
                        method:"GET",
                        data:{job_search_string:job_search_string, search_type},
                        success:function(res){
                            $('.display_search_result').html(res);
                            $('#header_search_load_spinner').html('<i class="fas fa-search"></i>');
                        }
                    })
                }else{
                    $('.display_search_result').html('');
                }

            })

            $('.video_play').magnificPopup({
                type:'iframe',
            });


            //fixed menu js
            if ($('#navigation').length) {
                window.onscroll = function () { myFunction() };

                let navbar = document.getElementById("navigation");
                let sticky = navbar.offsetTop;

                function myFunction() {
                    if (window.pageYOffset >= sticky) {
                        navbar.classList.add("sticky")
                    }
                    if (window.pageYOffset == sticky) {
                        navbar.classList.remove("sticky");
                    }

                }
            }

        });
    }(jQuery));
</script> --}}


<script>

    function slickSliderConfiguration() {
        let global = document.querySelectorAll('.global-slick-init');

        global.forEach(function (element, index){
            let parentBoxWidth = element.clientWidth;
            let childCount = element.querySelectorAll('.category-slider-item, .testimonial-item')?.length ?? 0;
            let childItemWidth = element.querySelector('.category-slider-item, .testimonial-item')?.clientWidth ?? 0;

            if(childCount !== 0 && childItemWidth !== 0){
                if((childCount * childItemWidth) < parentBoxWidth){
                    // now hide the div swipe
                    let targetSwipeDiv = element.parentElement.parentElement.parentElement.querySelector('.testimonial-arrows');
                    targetSwipeDiv.classList.add('d-none');
                    targetSwipeDiv.parentElement.classList.remove('mt-5')
                }
            }
        })
    }
    window.addEventListener('load', slickSliderConfiguration,false);
    window.addEventListener('resize', slickSliderConfiguration,false);
</script>

<script>
    //toastr warning
    function toastr_warning_js(msg){
        Command: toastr["warning"](msg, "Warning !")
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    }

    //toastr success
    function toastr_success_js(msg){
        Command: toastr["success"](msg, "Success !")
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    }

    //toastr error
    function toastr_error_js(msg){
        Command: toastr["error"](msg, "Error !")
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    }
</script>

    <script>
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
    </script>


<!--page script-->
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {

                $.ajaxSetup({
                    headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                             }
                });


                // todo continue
                $('.user_info_area').hide();

                // todo choose user type
                $(document).on('click', '.join_as_a_client', function() {
                    $('#user_type').val('client')
                })
                $(document).on('click', '.join_as_a_freelancer', function() {
                    $('#user_type').val('freelancer')
                })
                $(document).on('click', '.continue_to_info', function() {
                    $('.user_info_area').show();
                    $('.user_type_area').hide();
                });

                // $(document).on('keyup', '#username', function() {
                //     let username = $(this).val();
                //     let usernameRegex = /^[a-zA-Z0-9]+$/;
                //     if (usernameRegex.test(username) && username != '') {
                //         $.ajax({
                //             url: "",
                //             type: 'post',
                //             data: {
                //                 username: username
                //             },
                //             success: function(res) {
                //                 if (res.status == 'available') {
                //                     $("#user_name_availability").html(
                //                         "<span style='color: green;'>" + res.msg +
                //                         "</span>");
                //                 } else {
                //                     $("#user_name_availability").html(
                //                         "<span style='color: red;'>" + res.msg +
                //                         "</span>");
                //                 }
                //             }
                //         });
                //     } else {
                //         $("#user_name_availability").html(
                //             "<span style='color: red;'>Enter valid username</span>");
                //     }
                // });

                // $(document).on('keyup', '#email', function() {
                //     let email = $(this).val();
                //     let emailRegex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
                //     if (emailRegex.test(email) && email != '') {
                //         $.ajax({
                //             url: "",
                //             type: 'post',
                //             data: {
                //                 email: email
                //             },
                //             success: function(res) {
                //                 if (res.status == 'available') {
                //                     $("#email_availability").html(
                //                         "<span style='color: green;'>" + res.msg +
                //                         "</span>");
                //                 } else {
                //                     $("#email_availability").html(
                //                         "<span style='color: red;'>" + res.msg +
                //                         "</span>");
                //                 }
                //             }
                //         });
                //     } else {
                //         $("#email_availability").html(
                //             "<span style='color: red;'>Enter valid email</span>");
                //     }
                // });

                // $(document).on('keyup', '#phones', function() {
                //     let phone = $(this).val();
                //     let phoneRegex = /([0-9]{4})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/;
                //     if (phoneRegex.test(phone) && phone != '') {
                //         $.ajax({
                //             url: "",
                //             type: 'post',
                //             data: {
                //                 phone: phone
                //             },
                //             success: function(res) {
                //                 console.log(res)
                //                 if (res.status == 'available') {
                //                     $("#phone_availability").html(
                //                         "<span style='color: green;'>" + res.msg +
                //                         "</span>");
                //                 } else {
                //                     $("#phone_availability").html(
                //                         "<span style='color: red;'>" + res.msg +
                //                         "</span>");
                //                 }
                //             }
                //         });
                //     } else {
                //         $("#phone_availability").html(
                //             "<span style='color: red;'>Enter valid phone number</span>"
                //         );
                //     }
                // });

                $(document).on('keyup', '#confirm_password', function() {
                    let password = $("#password").val();
                    let confirm_password = $("#confirm_password").val();
                    if(password.length >= 6 && confirm_password.length >= 6) {
                        if (password != confirm_password) {
                            $("#check_password_match").html("Password does not match !").css("color",
                                "red");
                        } else {
                            $("#check_password_match").html("Password match !").css("color", "green");
                        }
                    }else{
                        $("#check_password_match").html("")
                    }
                });

                $(document).on('keyup', '#password', function() {
                    let password = $("#password").val();
                    let confirm_password = $("#confirm_password").val();
                    if(password.length >= 6 && confirm_password.length >= 6){
                        if(confirm_password != ''){
                            if (password != confirm_password){
                                $("#check_password_match").html("Password does not match !").css("color","red");
                            }else{
                                $("#check_password_match").html("Password match !").css("color", "green");
                            }
                        }else{
                            $("#check_password_match").html("")
                        }
                    }

                });

                //confirm signup
                $(document).on('click', '.sign_up_now_button', function(e) {
                    e.preventDefault()
                    $('#user_register_load_spinner').html('<i class="fas fa-spinner fa-pulse"></i>')

                    let first_name = $('#first_name').val();
                    let last_name = $('#last_name').val();
                    let username = $('#username').val();
                    let email = $('#email').val();
                    let phone = $('#phones').val();
                    let password = $('#password').val();
                    let confirm_password = $('#confirm_password').val();
                    let user_type = $('#user_type').val();
                    let terms_condition = $('#terms_condition:checked').val();

                    // let recaptchaResponse;
                    // if (document.getElementById('recaptcha_element_register')) {
                    //     recaptchaResponse = grecaptcha.getResponse();
                    // }

                    let erContainer = $(".error-message");
                    erContainer.html('');

                     $.ajax({
                            url: "/register-user",
                            type: 'post',
                            data: {user_type:user_type,first_name: first_name,last_name:last_name,username:username,email:email,phone:phone,password:password,confirm_password:confirm_password,terms_condition:terms_condition},
                             error:function(res){
                                 let errors = res.responseJSON;
                                 erContainer.html('<div class="alert alert-danger"></div>');
                                 $.each(errors.errors, function(index,value){
                                     erContainer.find('.alert.alert-danger').append('<p>'+value+'</p>');
                                 });
                                 $('#user_register_load_spinner').html('')
                             },
                             success: function(res) {
                                if (res == 'client') {
                                    window.location.href = "/clientlog";
                                }
                                if (res == 'freelancer') {
                                    window.location.href = "/freelancelog";
                                }
                                
                                // window.location.href = res.redirect_url;
                                // window.location.href = '/freelancelog';
                             }
                     });
                })

            });
        }(jQuery));
    </script>
<!--Start of Google Captcha V3 Script-->
    {{-- <script src="https://www.google.com/recaptcha/api.js?render=6LcJtlYpAAAAAAZAJk7pjWKhz09FRSWLCYyKVpAd"></script>
    <script>
        (function() {
            "use strict";
            grecaptcha.ready(function () {
                grecaptcha.execute("6LcJtlYpAAAAAAZAJk7pjWKhz09FRSWLCYyKVpAd", {action: 'homepage'}).then(function (token) {
                    if(document.getElementById('gcaptcha_token') != null){
                        document.getElementById('gcaptcha_token').value = token;
                    }
                });
            });

        })(jQuery);
    </script> --}}
    <!--End of Google Captcha V3 Script-->

</body>

</html>
