<!DOCTYPE html>
<html lang="en_GB" dir="ltr">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="qz2ZqU6CepE7kKpKNeQ14ZIRA3hvTaLHYzzJcysj">
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
        <style>
     .total_balance{background-color: #e3e1ff !important;}
     .single-profile-settings-header {
         justify-content: space-between;
         gap: 10px;
         flex-wrap: wrap;
         align-items: center;
         .btn-profile {
             padding-left: 10px;
             padding-right: 10px;
         }
     }
    </style>

            <title>Dashboard</title>
                            
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
                <a href="" class="logo">
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
                <ul class="navbar-nav">
                    
	{{-- <li class=" menu-item-has-children "> 
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
</li> --}}
                </ul>
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
            </div>
            <div class="header-global-search-select">
                <select id="Select_project_or_job_for_search">
                                            <option value="project">Project</option>
                                                                <option value="job">Job</option>
                                        <option value="talent">Talent</option>
                </select>
            </div>
        </div>
        <div class="display_search_result"></div>
    </div>
    <div class="search-overlay"></div>
</div>                <div class="navbar-right-item">
                <a href="" class="navbar-right-chat position-relative reload_unseen_message_count"> <i class="fa-regular fa-comment-dots"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2</span>
                    </a>
    </div>
    <div class="navbar-right-item bookmark_area position-relative">
        <a href="#0" class="navbar-right-chat nav-right-bookmark-icon position-relative">
            <i class="fa-regular fa-bookmark"></i>
                    </a>
        <div class="bookmark-wrap">
                            <span class="navbar-right-notification-wrapper-list-item-content-title">
                                    <span class="bookmark-header">
                                        <span class="bookmark-header-icon"><i class="fa-regular fa-bookmark"></i></span>
                                        <h6 class="bookmark-header-title">No Bookmarks</h6>
                                    </span>
                                </span>
                    </div>
    </div>
                <div class="navbar-right-item">
        <div class="navbar-right-notification">
            <a href="javascript:void(0)" class="navbar-right-notification-icon">
                <i class="fa-regular fa-bell"></i>
                            </a>
            <div class="navbar-right-notification-wrapper">
                <div class="navbar-right-notification-wrapper-list">
                                            <a href="javascript:void(0)"
                           class="navbar-right-notification-wrapper-list-item click-notification">
                            <div class="navbar-right-notification-wrapper-list-item-left">
                                <div class="navbar-right-notification-wrapper-list-item-icon decline">
                                    <i class="fa-regular fa-bell"></i>
                                </div>
                            </div>
                            <div class="navbar-right-notification-wrapper-list-item-content">
                                <span class="navbar-right-notification-wrapper-list-item-content-title">
                                    <strong>No Notification</strong>
                                </span>
                            </div>
                        </a>
                                    </div>
            </div>
        </div>
    </div>
                <div class="navbar-right-item">
    <div class="navbar-author">
        <a href="javascript:void(0)" class="navbar-author-flex flex-btn navbar-author-link">
            <div class="navbar-author-thumb">
                                                            <img src="" alt="profile img">
                                                </div>
            <span class="navbar-author-name">Fateh</span>
        </a>
        <div class="navbar-author-wrapper">
            <div class="navbar-author-wrapper-list">
                                                            <a href="/clientlog" class="navbar-author-wrapper-list-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 10.75H5C2.58 10.75 1.25 9.42 1.25 7V5C1.25 2.58 2.58 1.25 5 1.25H7C9.42 1.25 10.75 2.58 10.75 5V7C10.75 9.42 9.42 10.75 7 10.75ZM5 2.75C3.42 2.75 2.75 3.42 2.75 5V7C2.75 8.58 3.42 9.25 5 9.25H7C8.58 9.25 9.25 8.58 9.25 7V5C9.25 3.42 8.58 2.75 7 2.75H5Z" fill="#667085"/>
                                <path d="M19 10.75H17C14.58 10.75 13.25 9.42 13.25 7V5C13.25 2.58 14.58 1.25 17 1.25H19C21.42 1.25 22.75 2.58 22.75 5V7C22.75 9.42 21.42 10.75 19 10.75ZM17 2.75C15.42 2.75 14.75 3.42 14.75 5V7C14.75 8.58 15.42 9.25 17 9.25H19C20.58 9.25 21.25 8.58 21.25 7V5C21.25 3.42 20.58 2.75 19 2.75H17Z" fill="#667085"/>
                                <path d="M19 22.75H17C14.58 22.75 13.25 21.42 13.25 19V17C13.25 14.58 14.58 13.25 17 13.25H19C21.42 13.25 22.75 14.58 22.75 17V19C22.75 21.42 21.42 22.75 19 22.75ZM17 14.75C15.42 14.75 14.75 15.42 14.75 17V19C14.75 20.58 15.42 21.25 17 21.25H19C20.58 21.25 21.25 20.58 21.25 19V17C21.25 15.42 20.58 14.75 19 14.75H17Z" fill="#667085"/>
                                <path d="M7 22.75H5C2.58 22.75 1.25 21.42 1.25 19V17C1.25 14.58 2.58 13.25 5 13.25H7C9.42 13.25 10.75 14.58 10.75 17V19C10.75 21.42 9.42 22.75 7 22.75ZM5 14.75C3.42 14.75 2.75 15.42 2.75 17V19C2.75 20.58 3.42 21.25 5 21.25H7C8.58 21.25 9.25 20.58 9.25 19V17C9.25 15.42 8.58 14.75 7 14.75H5Z" fill="#667085"/>
                            </svg>
                            Dashboard
                        </a>
                        <a href="/posted-orders" class="navbar-author-wrapper-list-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M15 12.9502H8C7.59 12.9502 7.25 12.6102 7.25 12.2002C7.25 11.7902 7.59 11.4502 8 11.4502H15C15.41 11.4502 15.75 11.7902 15.75 12.2002C15.75 12.6102 15.41 12.9502 15 12.9502Z"
                                        fill="#667085" />
                                <path
                                        d="M12.38 16.9502H8C7.59 16.9502 7.25 16.6102 7.25 16.2002C7.25 15.7902 7.59 15.4502 8 15.4502H12.38C12.79 15.4502 13.13 15.7902 13.13 16.2002C13.13 16.6102 12.79 16.9502 12.38 16.9502Z"
                                        fill="#667085" />
                                <path
                                        d="M14 6.75H10C9.04 6.75 7.25 6.75 7.25 4C7.25 1.25 9.04 1.25 10 1.25H14C14.96 1.25 16.75 1.25 16.75 4C16.75 4.96 16.75 6.75 14 6.75ZM10 2.75C9.01 2.75 8.75 2.75 8.75 4C8.75 5.25 9.01 5.25 10 5.25H14C15.25 5.25 15.25 4.99 15.25 4C15.25 2.75 14.99 2.75 14 2.75H10Z"
                                        fill="#667085" />
                                <path
                                        d="M15 22.7504H9C3.38 22.7504 2.25 20.1704 2.25 16.0004V10.0004C2.25 5.44042 3.9 3.49042 7.96 3.28042C8.36 3.26042 8.73 3.57042 8.75 3.99042C8.77 4.41042 8.45 4.75042 8.04 4.77042C5.2 4.93042 3.75 5.78042 3.75 10.0004V16.0004C3.75 19.7004 4.48 21.2504 9 21.2504H15C19.52 21.2504 20.25 19.7004 20.25 16.0004V10.0004C20.25 5.78042 18.8 4.93042 15.96 4.77042C15.55 4.75042 15.23 4.39042 15.25 3.98042C15.27 3.57042 15.63 3.25042 16.04 3.27042C20.1 3.49042 21.75 5.44042 21.75 9.99042V15.9904C21.75 20.1704 20.62 22.7504 15 22.7504Z"
                                        fill="#667085" />
                            </svg>
                            My Orders
                        </a>
                                                    <a href="/posted-jobs" class="navbar-author-wrapper-list-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M16 22.7498H7.99998C3.37998 22.7498 2.51998 20.5998 2.29998 18.5098L1.54998 10.4998C1.43998 9.44977 1.40998 7.89977 2.44998 6.73977C3.34998 5.73977 4.83998 5.25977 6.99998 5.25977H17C19.17 5.25977 20.66 5.74977 21.55 6.73977C22.59 7.89977 22.56 9.44977 22.45 10.5098L21.7 18.4998C21.48 20.5998 20.62 22.7498 16 22.7498ZM6.99998 6.74977C5.30998 6.74977 4.14998 7.07977 3.55998 7.73977C3.06998 8.27977 2.90998 9.10977 3.03998 10.3498L3.78998 18.3598C3.95998 19.9398 4.38998 21.2498 7.99998 21.2498H16C19.6 21.2498 20.04 19.9398 20.21 18.3498L20.96 10.3598C21.09 9.10977 20.93 8.27977 20.44 7.73977C19.85 7.07977 18.69 6.74977 17 6.74977H6.99998Z"
                                            fill="#667085" />
                                    <path
                                            d="M16 6.75C15.59 6.75 15.25 6.41 15.25 6V5.2C15.25 3.42 15.25 2.75 12.8 2.75H11.2C8.75 2.75 8.75 3.42 8.75 5.2V6C8.75 6.41 8.41 6.75 8 6.75C7.59 6.75 7.25 6.41 7.25 6V5.2C7.25 3.44 7.25 1.25 11.2 1.25H12.8C16.75 1.25 16.75 3.44 16.75 5.2V6C16.75 6.41 16.41 6.75 16 6.75Z"
                                            fill="#667085" />
                                    <path
                                            d="M12 16.75C9.25 16.75 9.25 15.05 9.25 14.03V13C9.25 11.59 9.59 11.25 11 11.25H13C14.41 11.25 14.75 11.59 14.75 13V14C14.75 15.04 14.75 16.75 12 16.75ZM10.75 12.75C10.75 12.83 10.75 12.92 10.75 13V14.03C10.75 15.06 10.75 15.25 12 15.25C13.25 15.25 13.25 15.09 13.25 14.02V13C13.25 12.92 13.25 12.83 13.25 12.75C13.17 12.75 13.08 12.75 13 12.75H11C10.92 12.75 10.83 12.75 10.75 12.75Z"
                                            fill="#667085" />
                                    <path
                                            d="M14 14.7702C13.63 14.7702 13.3 14.4902 13.26 14.1102C13.21 13.7002 13.5 13.3202 13.91 13.2702C16.55 12.9402 19.08 11.9402 21.21 10.3902C21.54 10.1402 22.01 10.2202 22.26 10.5602C22.5 10.8902 22.43 11.3602 22.09 11.6102C19.75 13.3102 16.99 14.4002 14.09 14.7702C14.06 14.7702 14.03 14.7702 14 14.7702Z"
                                            fill="#667085" />
                                    <path
                                            d="M9.99999 14.7799C9.96999 14.7799 9.93999 14.7799 9.90999 14.7799C7.16999 14.4699 4.49999 13.4699 2.18999 11.8899C1.84999 11.6599 1.75999 11.1899 1.98999 10.8499C2.21999 10.5099 2.68999 10.4199 3.02999 10.6499C5.13999 12.0899 7.56999 12.9999 10.07 13.2899C10.48 13.3399 10.78 13.7099 10.73 14.1199C10.7 14.4999 10.38 14.7799 9.99999 14.7799Z"
                                            fill="#667085" />
                                </svg>
                                My Jobs
                            </a>
                                                
                                                                                                                        <a href="/create"
                                       class="navbar-author-wrapper-list-item">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M15.8101 20.1795C15.5501 20.1795 15.2801 20.1695 14.9901 20.1395C14.4701 20.0995 13.8801 19.9995 13.2701 19.8495L11.5901 19.4495C6.98007 18.3595 5.47007 15.9195 6.55007 11.3195L7.53007 7.12953C7.75007 6.17953 8.01007 5.40953 8.33007 4.76953C10.0501 1.21953 13.3401 1.53953 15.6801 2.08953L17.3501 2.47953C19.6901 3.02953 21.1701 3.89953 22.0001 5.22953C22.8201 6.55953 22.9501 8.26953 22.4001 10.6095L21.4201 14.7895C20.5601 18.4495 18.7701 20.1795 15.8101 20.1795ZM13.1201 3.24953C11.4501 3.24953 10.3901 3.93953 9.68007 5.41953C9.42007 5.95953 9.19007 6.62953 8.99007 7.46953L8.01007 11.6595C7.12007 15.4395 8.15007 17.0895 11.9301 17.9895L13.6101 18.3895C14.1501 18.5195 14.6601 18.5995 15.1201 18.6395C17.8401 18.9095 19.1901 17.7195 19.9501 14.4495L20.9301 10.2695C21.3801 8.33953 21.3201 6.98953 20.7201 6.01953C20.1201 5.04953 18.9401 4.38953 17.0001 3.93953L15.3301 3.54953C14.5001 3.34953 13.7601 3.24953 13.1201 3.24953Z"
                                                    fill="#667085" />
                                            <path
                                                    d="M8.33005 22.2497C5.76005 22.2497 4.12005 20.7097 3.07005 17.4597L1.79005 13.5097C0.370052 9.10968 1.64005 6.62968 6.02005 5.20968L7.60005 4.69968C8.12005 4.53968 8.51005 4.42968 8.86005 4.36968C9.15005 4.30968 9.43005 4.41968 9.60005 4.64968C9.77005 4.87968 9.80005 5.17968 9.68005 5.43968C9.42005 5.96968 9.19005 6.63968 9.00005 7.47968L8.02005 11.6697C7.13005 15.4497 8.16005 17.0997 11.9401 17.9997L13.6201 18.3997C14.1601 18.5297 14.6701 18.6097 15.1301 18.6497C15.4501 18.6797 15.7101 18.8997 15.8001 19.2097C15.8801 19.5197 15.7601 19.8397 15.5001 20.0197C14.8401 20.4697 14.0101 20.8497 12.9601 21.1897L11.3801 21.7097C10.2301 22.0697 9.23005 22.2497 8.33005 22.2497ZM7.78005 6.21968L6.49005 6.63968C2.92005 7.78968 2.07005 9.46968 3.22005 13.0497L4.50005 16.9997C5.66005 20.5697 7.34005 21.4297 10.9101 20.2797L12.4901 19.7597C12.5501 19.7397 12.6001 19.7197 12.6601 19.6997L11.6001 19.4497C6.99005 18.3597 5.48005 15.9197 6.56005 11.3197L7.54005 7.12968C7.61005 6.80968 7.69005 6.49968 7.78005 6.21968Z"
                                                    fill="#667085" />
                                            <path
                                                    d="M17.4901 10.5098C17.4301 10.5098 17.3701 10.4998 17.3001 10.4898L12.4501 9.25978C12.0501 9.15978 11.8101 8.74978 11.9101 8.34978C12.0101 7.94978 12.4201 7.70978 12.8201 7.80978L17.6701 9.03978C18.0701 9.13978 18.3101 9.54978 18.2101 9.94978C18.1301 10.2798 17.8201 10.5098 17.4901 10.5098Z"
                                                    fill="#667085" />
                                            <path
                                                    d="M14.5599 13.8899C14.4999 13.8899 14.4399 13.8799 14.3699 13.8699L11.4599 13.1299C11.0599 13.0299 10.8199 12.6199 10.9199 12.2199C11.0199 11.8199 11.4299 11.5799 11.8299 11.6799L14.7399 12.4199C15.1399 12.5199 15.3799 12.9299 15.2799 13.3299C15.1999 13.6699 14.8999 13.8899 14.5599 13.8899Z"
                                                    fill="#667085" />
                                        </svg>
                                        Post a Job
                                    </a>
                                                                                                            <a href="/client-profile-set" class="navbar-author-wrapper-list-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M12 15.75C9.93 15.75 8.25 14.07 8.25 12C8.25 9.93 9.93 8.25 12 8.25C14.07 8.25 15.75 9.93 15.75 12C15.75 14.07 14.07 15.75 12 15.75ZM12 9.75C10.76 9.75 9.75 10.76 9.75 12C9.75 13.24 10.76 14.25 12 14.25C13.24 14.25 14.25 13.24 14.25 12C14.25 10.76 13.24 9.75 12 9.75Z"
                                        fill="#667085" />
                                <path
                                        d="M15.21 22.1903C15 22.1903 14.79 22.1603 14.58 22.1103C13.96 21.9403 13.44 21.5503 13.11 21.0003L12.99 20.8003C12.4 19.7803 11.59 19.7803 11 20.8003L10.89 20.9903C10.56 21.5503 10.04 21.9503 9.42 22.1103C8.79 22.2803 8.14 22.1903 7.59 21.8603L5.87 20.8703C5.26 20.5203 4.82 19.9503 4.63 19.2603C4.45 18.5703 4.54 17.8603 4.89 17.2503C5.18 16.7403 5.26 16.2803 5.09 15.9903C4.92 15.7003 4.49 15.5303 3.9 15.5303C2.44 15.5303 1.25 14.3403 1.25 12.8803V11.1203C1.25 9.66029 2.44 8.47029 3.9 8.47029C4.49 8.47029 4.92 8.30029 5.09 8.01029C5.26 7.72029 5.19 7.26029 4.89 6.75029C4.54 6.14029 4.45 5.42029 4.63 4.74029C4.81 4.05029 5.25 3.48029 5.87 3.13029L7.6 2.14029C8.73 1.47029 10.22 1.86029 10.9 3.01029L11.02 3.21029C11.61 4.23029 12.42 4.23029 13.01 3.21029L13.12 3.02029C13.8 1.86029 15.29 1.47029 16.43 2.15029L18.15 3.14029C18.76 3.49029 19.2 4.06029 19.39 4.75029C19.57 5.44029 19.48 6.15029 19.13 6.76029C18.84 7.27029 18.76 7.73029 18.93 8.02029C19.1 8.31029 19.53 8.48029 20.12 8.48029C21.58 8.48029 22.77 9.67029 22.77 11.1303V12.8903C22.77 14.3503 21.58 15.5403 20.12 15.5403C19.53 15.5403 19.1 15.7103 18.93 16.0003C18.76 16.2903 18.83 16.7503 19.13 17.2603C19.48 17.8703 19.58 18.5903 19.39 19.2703C19.21 19.9603 18.77 20.5303 18.15 20.8803L16.42 21.8703C16.04 22.0803 15.63 22.1903 15.21 22.1903ZM12 18.4903C12.89 18.4903 13.72 19.0503 14.29 20.0403L14.4 20.2303C14.52 20.4403 14.72 20.5903 14.96 20.6503C15.2 20.7103 15.44 20.6803 15.64 20.5603L17.37 19.5603C17.63 19.4103 17.83 19.1603 17.91 18.8603C17.99 18.5603 17.95 18.2503 17.8 17.9903C17.23 17.0103 17.16 16.0003 17.6 15.2303C18.04 14.4603 18.95 14.0203 20.09 14.0203C20.73 14.0203 21.24 13.5103 21.24 12.8703V11.1103C21.24 10.4803 20.73 9.96029 20.09 9.96029C18.95 9.96029 18.04 9.52029 17.6 8.75029C17.16 7.98029 17.23 6.97029 17.8 5.99029C17.95 5.73029 17.99 5.42029 17.91 5.12029C17.83 4.82029 17.64 4.58029 17.38 4.42029L15.65 3.43029C15.22 3.17029 14.65 3.32029 14.39 3.76029L14.28 3.95029C13.71 4.94029 12.88 5.50029 11.99 5.50029C11.1 5.50029 10.27 4.94029 9.7 3.95029L9.59 3.75029C9.34 3.33029 8.78 3.18029 8.35 3.43029L6.62 4.43029C6.36 4.58029 6.16 4.83029 6.08 5.13029C6 5.43029 6.04 5.74029 6.19 6.00029C6.76 6.98029 6.83 7.99029 6.39 8.76029C5.95 9.53029 5.04 9.97029 3.9 9.97029C3.26 9.97029 2.75 10.4803 2.75 11.1203V12.8803C2.75 13.5103 3.26 14.0303 3.9 14.0303C5.04 14.0303 5.95 14.4703 6.39 15.2403C6.83 16.0103 6.76 17.0203 6.19 18.0003C6.04 18.2603 6 18.5703 6.08 18.8703C6.16 19.1703 6.35 19.4103 6.61 19.5703L8.34 20.5603C8.55 20.6903 8.8 20.7203 9.03 20.6603C9.27 20.6003 9.47 20.4403 9.6 20.2303L9.71 20.0403C10.28 19.0603 11.11 18.4903 12 18.4903Z"
                                        fill="#667085" />
                            </svg>
                            Profile settings
                        </a>
                        <a href="/" class="navbar-author-wrapper-list-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M15.24 22.2705H15.11C10.67 22.2705 8.53002 20.5205 8.16002 16.6005C8.12002 16.1905 8.42002 15.8205 8.84002 15.7805C9.24002 15.7405 9.62002 16.0505 9.66002 16.4605C9.95002 19.6005 11.43 20.7705 15.12 20.7705H15.25C19.32 20.7705 20.76 19.3305 20.76 15.2605V8.74047C20.76 4.67047 19.32 3.23047 15.25 3.23047H15.12C11.41 3.23047 9.93002 4.42047 9.66002 7.62047C9.61002 8.03047 9.26002 8.34047 8.84002 8.30047C8.42002 8.27047 8.12001 7.90047 8.15001 7.49047C8.49001 3.51047 10.64 1.73047 15.11 1.73047H15.24C20.15 1.73047 22.25 3.83047 22.25 8.74047V15.2605C22.25 20.1705 20.15 22.2705 15.24 22.2705Z"
                                        fill="#667085" />
                                <path
                                        d="M15.0001 12.75H3.62012C3.21012 12.75 2.87012 12.41 2.87012 12C2.87012 11.59 3.21012 11.25 3.62012 11.25H15.0001C15.4101 11.25 15.7501 11.59 15.7501 12C15.7501 12.41 15.4101 12.75 15.0001 12.75Z"
                                        fill="#667085" />
                                <path
                                        d="M5.84994 16.0998C5.65994 16.0998 5.46994 16.0298 5.31994 15.8798L1.96994 12.5298C1.67994 12.2398 1.67994 11.7598 1.96994 11.4698L5.31994 8.11984C5.60994 7.82984 6.08994 7.82984 6.37994 8.11984C6.66994 8.40984 6.66994 8.88984 6.37994 9.17984L3.55994 11.9998L6.37994 14.8198C6.66994 15.1098 6.66994 15.5898 6.37994 15.8798C6.23994 16.0298 6.03994 16.0998 5.84994 16.0998Z"
                                        fill="#667085" />
                            </svg>
                            Log Out
                        </a>
                                                </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
        </div>
    </nav>
        <!-- Menu area end -->
</header>


    <main>
            <div class="breadcrumb-area border-top">
    <div class="container custom-container-one">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-contents">
                    <h4 class="breadcrumb-contents-title"> Dashboard </h4>
                    <ul class="breadcrumb-contents-list list-style-none">
                        <li class="breadcrumb-contents-list-item"> <a href="/clientlog" class="breadcrumb-contents-list-item-link"> Home  </a> </li>
                        <li class="breadcrumb-contents-list-item"> Dashboard </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
            <!-- Profile Settings area Starts -->
            <div class="responsive-overlay"></div>
            <div class="profile-settings-area pat-100 pab-100 section-bg-2">
                <div class="container">
                    <div class="row g-4">
                        <style>
    .disabled-link a {
        color: #ccc;
        pointer-events: none;
        cursor: default;
    }
</style>

<div class="col-xl-3 col-lg-4">
    <div class="profile-settings-menu sticky_top_lg">
        <div class="profile-bars d-lg-none">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="profile-settings-menu-inner">
            <div class="profile-close d-lg-none">
                <i class="fa-solid fa-times"></i>
            </div>
                                                                        <ul class="profile-settings-menu-list">
                            <li class="profile-settings-menu-item  active ">
                                <a href="/clientlog" class="profile-settings-menu-item-link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 10.75H5C2.58 10.75 1.25 9.42 1.25 7V5C1.25 2.58 2.58 1.25 5 1.25H7C9.42 1.25 10.75 2.58 10.75 5V7C10.75 9.42 9.42 10.75 7 10.75ZM5 2.75C3.42 2.75 2.75 3.42 2.75 5V7C2.75 8.58 3.42 9.25 5 9.25H7C8.58 9.25 9.25 8.58 9.25 7V5C9.25 3.42 8.58 2.75 7 2.75H5Z" fill="#667085"/>
                                        <path d="M19 10.75H17C14.58 10.75 13.25 9.42 13.25 7V5C13.25 2.58 14.58 1.25 17 1.25H19C21.42 1.25 22.75 2.58 22.75 5V7C22.75 9.42 21.42 10.75 19 10.75ZM17 2.75C15.42 2.75 14.75 3.42 14.75 5V7C14.75 8.58 15.42 9.25 17 9.25H19C20.58 9.25 21.25 8.58 21.25 7V5C21.25 3.42 20.58 2.75 19 2.75H17Z" fill="#667085"/>
                                        <path d="M19 22.75H17C14.58 22.75 13.25 21.42 13.25 19V17C13.25 14.58 14.58 13.25 17 13.25H19C21.42 13.25 22.75 14.58 22.75 17V19C22.75 21.42 21.42 22.75 19 22.75ZM17 14.75C15.42 14.75 14.75 15.42 14.75 17V19C14.75 20.58 15.42 21.25 17 21.25H19C20.58 21.25 21.25 20.58 21.25 19V17C21.25 15.42 20.58 14.75 19 14.75H17Z" fill="#667085"/>
                                        <path d="M7 22.75H5C2.58 22.75 1.25 21.42 1.25 19V17C1.25 14.58 2.58 13.25 5 13.25H7C9.42 13.25 10.75 14.58 10.75 17V19C10.75 21.42 9.42 22.75 7 22.75ZM5 14.75C3.42 14.75 2.75 15.42 2.75 17V19C2.75 20.58 3.42 21.25 5 21.25H7C8.58 21.25 9.25 20.58 9.25 19V17C9.25 15.42 8.58 14.75 7 14.75H5Z" fill="#667085"/>
                                    </svg>
                                    Dashboard
                                </a>
                            </li>
                                                                                                                                        <li class="profile-settings-menu-item">
                                            <a href="/create" class="profile-settings-menu-item-link">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            d="M15.812 20.18C15.552 20.18 15.282 20.17 14.992 20.14C14.472 20.1 13.882 20 13.272 19.85L11.592 19.45C6.98203 18.36 5.47203 15.92 6.55203 11.32L7.53203 7.13001C7.75203 6.18001 8.01202 5.41001 8.33202 4.77002C10.052 1.22002 13.342 1.54001 15.682 2.09001L17.352 2.48001C19.692 3.03001 21.172 3.90001 22.002 5.23002C22.822 6.56002 22.952 8.27002 22.402 10.61L21.422 14.79C20.562 18.45 18.772 20.18 15.812 20.18ZM13.122 3.25001C11.452 3.25001 10.392 3.94002 9.68203 5.42002C9.42203 5.96002 9.19202 6.63001 8.99202 7.47001L8.01203 11.66C7.12203 15.44 8.15203 17.09 11.932 17.99L13.612 18.39C14.152 18.52 14.662 18.6 15.122 18.64C17.842 18.91 19.192 17.72 19.952 14.45L20.932 10.27C21.382 8.34002 21.322 6.99001 20.722 6.02001C20.122 5.05001 18.942 4.39002 17.002 3.94002L15.332 3.55001C14.502 3.35001 13.762 3.25001 13.122 3.25001Z"
                                                            fill="#667085" />
                                                    <path
                                                            d="M8.32907 22.25C5.75907 22.25 4.11907 20.71 3.06907 17.46L1.78907 13.5101C0.369075 9.11005 1.63907 6.63005 6.01907 5.21005L7.59907 4.70005C8.11907 4.54005 8.50907 4.43005 8.85907 4.37005C9.14907 4.31005 9.42908 4.42005 9.59908 4.65005C9.76908 4.88005 9.79908 5.18005 9.67908 5.44005C9.41908 5.97005 9.18907 6.64005 8.99907 7.48005L8.01908 11.6701C7.12908 15.4501 8.15907 17.1001 11.9391 18.0001L13.6191 18.4001C14.1591 18.5301 14.6691 18.6101 15.1291 18.6501C15.4491 18.6801 15.7091 18.9 15.7991 19.21C15.8791 19.52 15.7591 19.8401 15.4991 20.0201C14.8391 20.4701 14.0091 20.8501 12.9591 21.1901L11.3791 21.71C10.2291 22.07 9.22907 22.25 8.32907 22.25ZM7.77908 6.22005L6.48907 6.64005C2.91907 7.79005 2.06907 9.47005 3.21907 13.0501L4.49907 17.0001C5.65907 20.5701 7.33907 21.4301 10.9091 20.2801L12.4891 19.7601C12.5491 19.7401 12.5991 19.7201 12.6591 19.7001L11.5991 19.4501C6.98908 18.3601 5.47907 15.9201 6.55907 11.3201L7.53907 7.13005C7.60907 6.81005 7.68908 6.50005 7.77908 6.22005Z"
                                                            fill="#667085" />
                                                    <path
                                                            d="M17.4933 10.51C17.4333 10.51 17.3733 10.5 17.3033 10.49L12.4533 9.26002C12.0533 9.16002 11.8133 8.75002 11.9133 8.35002C12.0133 7.95002 12.4233 7.71002 12.8233 7.81002L17.6733 9.04002C18.0733 9.14002 18.3133 9.55002 18.2133 9.95002C18.1333 10.28 17.8233 10.51 17.4933 10.51Z"
                                                            fill="#667085" />
                                                    <path
                                                            d="M14.5611 13.89C14.5011 13.89 14.4411 13.88 14.3711 13.87L11.4611 13.13C11.0611 13.03 10.8211 12.62 10.9211 12.22C11.0211 11.82 11.4311 11.58 11.8311 11.68L14.7411 12.42C15.1411 12.52 15.3811 12.93 15.2811 13.33C15.2011 13.67 14.9011 13.89 14.5611 13.89Z"
                                                            fill="#667085" />
                                                </svg>
                                                Post a Job
                                            </a>
                                        </li>
                                                                                                
                                                            <li class="profile-settings-menu-item">
                                    <a href="/posted-orders" class="profile-settings-menu-item-link">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M16 22.7498H7.99998C3.37998 22.7498 2.51998 20.5998 2.29998 18.5098L1.54998 10.4998C1.43998 9.44977 1.40998 7.89977 2.44998 6.73977C3.34998 5.73977 4.83998 5.25977 6.99998 5.25977H17C19.17 5.25977 20.66 5.74977 21.55 6.73977C22.59 7.89977 22.56 9.44977 22.45 10.5098L21.7 18.4998C21.48 20.5998 20.62 22.7498 16 22.7498ZM6.99998 6.74977C5.30998 6.74977 4.14998 7.07977 3.55998 7.73977C3.06998 8.27977 2.90998 9.10977 3.03998 10.3498L3.78998 18.3598C3.95998 19.9398 4.38998 21.2498 7.99998 21.2498H16C19.6 21.2498 20.04 19.9398 20.21 18.3498L20.96 10.3598C21.09 9.10977 20.93 8.27977 20.44 7.73977C19.85 7.07977 18.69 6.74977 17 6.74977H6.99998Z"
                                                    fill="#667085" />
                                            <path
                                                    d="M16 6.75C15.59 6.75 15.25 6.41 15.25 6V5.2C15.25 3.42 15.25 2.75 12.8 2.75H11.2C8.75 2.75 8.75 3.42 8.75 5.2V6C8.75 6.41 8.41 6.75 8 6.75C7.59 6.75 7.25 6.41 7.25 6V5.2C7.25 3.44 7.25 1.25 11.2 1.25H12.8C16.75 1.25 16.75 3.44 16.75 5.2V6C16.75 6.41 16.41 6.75 16 6.75Z"
                                                    fill="#667085" />
                                            <path
                                                    d="M12 16.75C9.25 16.75 9.25 15.05 9.25 14.03V13C9.25 11.59 9.59 11.25 11 11.25H13C14.41 11.25 14.75 11.59 14.75 13V14C14.75 15.04 14.75 16.75 12 16.75ZM10.75 12.75C10.75 12.83 10.75 12.92 10.75 13V14.03C10.75 15.06 10.75 15.25 12 15.25C13.25 15.25 13.25 15.09 13.25 14.02V13C13.25 12.92 13.25 12.83 13.25 12.75C13.17 12.75 13.08 12.75 13 12.75H11C10.92 12.75 10.83 12.75 10.75 12.75Z"
                                                    fill="#667085" />
                                            <path
                                                    d="M14 14.7702C13.63 14.7702 13.3 14.4902 13.26 14.1102C13.21 13.7002 13.5 13.3202 13.91 13.2702C16.55 12.9402 19.08 11.9402 21.21 10.3902C21.54 10.1402 22.01 10.2202 22.26 10.5602C22.5 10.8902 22.43 11.3602 22.09 11.6102C19.75 13.3102 16.99 14.4002 14.09 14.7702C14.06 14.7702 14.03 14.7702 14 14.7702Z"
                                                    fill="#667085" />
                                            <path
                                                    d="M9.99999 14.7799C9.96999 14.7799 9.93999 14.7799 9.90999 14.7799C7.16999 14.4699 4.49999 13.4699 2.18999 11.8899C1.84999 11.6599 1.75999 11.1899 1.98999 10.8499C2.21999 10.5099 2.68999 10.4199 3.02999 10.6499C5.13999 12.0899 7.56999 12.9999 10.07 13.2899C10.48 13.3399 10.78 13.7099 10.73 14.1199C10.7 14.4999 10.38 14.7799 9.99999 14.7799Z"
                                                    fill="#667085" />
                                        </svg>
                                        My Jobs
                                    </a>
                                </li>
                                                        <li class="profile-settings-menu-item">
                                <a href="/posted-orders" class="profile-settings-menu-item-link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M15 12.95H8C7.59 12.95 7.25 12.61 7.25 12.2C7.25 11.79 7.59 11.45 8 11.45H15C15.41 11.45 15.75 11.79 15.75 12.2C15.75 12.61 15.41 12.95 15 12.95Z"
                                                fill="#667085" />
                                        <path
                                                d="M12.38 16.95H8C7.59 16.95 7.25 16.61 7.25 16.2C7.25 15.79 7.59 15.45 8 15.45H12.38C12.79 15.45 13.13 15.79 13.13 16.2C13.13 16.61 12.79 16.95 12.38 16.95Z"
                                                fill="#667085" />
                                        <path
                                                d="M14 6.75H10C9.04 6.75 7.25 6.75 7.25 4C7.25 1.25 9.04 1.25 10 1.25H14C14.96 1.25 16.75 1.25 16.75 4C16.75 4.96 16.75 6.75 14 6.75ZM10 2.75C9.01 2.75 8.75 2.75 8.75 4C8.75 5.25 9.01 5.25 10 5.25H14C15.25 5.25 15.25 4.99 15.25 4C15.25 2.75 14.99 2.75 14 2.75H10Z"
                                                fill="#667085" />
                                        <path
                                                d="M15 22.7501H9C3.38 22.7501 2.25 20.1701 2.25 16.0001V10.0001C2.25 5.44005 3.9 3.49005 7.96 3.28005C8.36 3.26005 8.73 3.57005 8.75 3.99005C8.77 4.41005 8.45 4.75005 8.04 4.77005C5.2 4.93005 3.75 5.78005 3.75 10.0001V16.0001C3.75 19.7001 4.48 21.2501 9 21.2501H15C19.52 21.2501 20.25 19.7001 20.25 16.0001V10.0001C20.25 5.78005 18.8 4.93005 15.96 4.77005C15.55 4.75005 15.23 4.39005 15.25 3.98005C15.27 3.57005 15.63 3.25005 16.04 3.27005C20.1 3.49005 21.75 5.44005 21.75 9.99005V15.9901C21.75 20.1701 20.62 22.7501 15 22.7501Z"
                                                fill="#667085" />
                                    </svg>
                                    My Orders
                                </a>
                            </li>
                           

                            <li class="profile-settings-menu-item ">
                                <a href="/user-wallet" class="profile-settings-menu-item-link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M17 22.75H7C3.56 22.75 1.25 20.44 1.25 17V12C1.25 8.92 3.15 6.69001 6.1 6.32001C6.38 6.28001 6.69 6.25 7 6.25H17C17.24 6.25 17.55 6.26 17.87 6.31C20.82 6.65 22.75 8.89 22.75 12V17C22.75 20.44 20.44 22.75 17 22.75ZM7 7.75C6.76 7.75 6.53 7.76999 6.3 7.79999C4.1 8.07999 2.75 9.68 2.75 12V17C2.75 19.58 4.42 21.25 7 21.25H17C19.58 21.25 21.25 19.58 21.25 17V12C21.25 9.66 19.88 8.05001 17.66 7.79001C17.42 7.75001 17.21 7.75 17 7.75H7Z"
                                                fill="#667085" />
                                        <path
                                                d="M6.19005 7.81044C5.95005 7.81044 5.73005 7.70044 5.58005 7.50044C5.41005 7.27044 5.39005 6.97044 5.52005 6.72044C5.69005 6.38044 5.93005 6.05044 6.24005 5.75044L9.49005 2.49043C11.15 0.84043 13.85 0.84043 15.51 2.49043L17.26 4.26045C18 4.99045 18.45 5.97045 18.5 7.01045C18.51 7.24045 18.42 7.46042 18.25 7.61042C18.08 7.76043 17.85 7.83045 17.63 7.79045C17.43 7.76045 17.22 7.75044 17 7.75044H7.00005C6.76005 7.75044 6.53005 7.77043 6.30005 7.80043C6.27005 7.81043 6.23005 7.81044 6.19005 7.81044ZM7.86005 6.25044H16.82C16.69 5.91044 16.48 5.60045 16.2 5.32045L14.44 3.54045C13.37 2.48045 11.62 2.48045 10.54 3.54045L7.86005 6.25044Z"
                                                fill="#667085" />
                                        <path
                                                d="M22 17.25H19C17.48 17.25 16.25 16.02 16.25 14.5C16.25 12.98 17.48 11.75 19 11.75H22C22.41 11.75 22.75 12.09 22.75 12.5C22.75 12.91 22.41 13.25 22 13.25H19C18.31 13.25 17.75 13.81 17.75 14.5C17.75 15.19 18.31 15.75 19 15.75H22C22.41 15.75 22.75 16.09 22.75 16.5C22.75 16.91 22.41 17.25 22 17.25Z"
                                                fill="#667085" />
                                    </svg>
                                    Wallet
                                </a>
                            </li>
                            <li class="profile-settings-menu-item ">
                                <a href="/user-ticket" class="profile-settings-menu-item-link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_6522_7043" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                              x="0" y="0" width="24" height="24">
                                            <rect width="24" height="24" fill="#D9D9D9" />
                                        </mask>
                                        <g mask="url(#mask0_6522_7043)">
                                            <path
                                                    d="M12 22.5C11.8011 22.5 11.6103 22.421 11.4697 22.2803C11.329 22.1397 11.25 21.9489 11.25 21.75C11.25 21.5511 11.329 21.3603 11.4697 21.2197C11.6103 21.079 11.8011 21 12 21C14.3 21 16.16 20.3 16.9 19.5C16.1898 19.4692 15.5186 19.1666 15.0253 18.6547C14.5321 18.1428 14.2545 17.4609 14.25 16.75V13.75C14.2552 13.0223 14.5466 12.3258 15.0612 11.8112C15.5758 11.2966 16.2723 11.0052 17 11H18C18.4348 10.9971 18.8638 11.1001 19.25 11.3V10.75C19.25 9.79792 19.0625 8.85516 18.6981 7.97554C18.3338 7.09593 17.7997 6.2967 17.1265 5.62348C16.4533 4.95025 15.6541 4.41622 14.7745 4.05187C13.8948 3.68753 12.9521 3.5 12 3.5C11.0479 3.5 10.1052 3.68753 9.22554 4.05187C8.34593 4.41622 7.5467 4.95025 6.87348 5.62348C6.20025 6.2967 5.66622 7.09593 5.30187 7.97554C4.93753 8.85516 4.75 9.79792 4.75 10.75V11.3C5.13616 11.1001 5.56517 10.9971 6 11H7C7.72773 11.0052 8.42416 11.2966 8.93876 11.8112C9.45335 12.3258 9.74476 13.0223 9.75 13.75V16.75C9.74476 17.4777 9.45335 18.1742 8.93876 18.6888C8.42416 19.2034 7.72773 19.4948 7 19.5H6C5.27227 19.4948 4.57584 19.2034 4.06124 18.6888C3.54665 18.1742 3.25524 17.4777 3.25 16.75V10.75C3.25 8.42936 4.17187 6.20376 5.81282 4.56282C7.45376 2.92187 9.67936 2 12 2C14.3206 2 16.5462 2.92187 18.1872 4.56282C19.8281 6.20376 20.75 8.42936 20.75 10.75V16.75C20.7499 17.1109 20.6783 17.4681 20.5392 17.8011C20.4002 18.1341 20.1965 18.4362 19.94 18.69C19.5907 19.0543 19.1421 19.3081 18.65 19.42C18.11 21.22 15.43 22.5 12 22.5ZM17 12.5C16.6693 12.5026 16.3529 12.6352 16.119 12.869C15.8851 13.1029 15.7526 13.4193 15.75 13.75V16.75C15.7526 17.0807 15.8851 17.3971 16.119 17.631C16.3529 17.8649 16.6693 17.9974 17 18H18C18.3307 17.9974 18.6471 17.8649 18.881 17.631C19.1149 17.3971 19.2474 17.0807 19.25 16.75V13.75C19.2474 13.4193 19.1149 13.1029 18.881 12.869C18.6471 12.6352 18.3307 12.5026 18 12.5H17ZM4.75 13.75V16.75C4.75261 17.0807 4.88515 17.3971 5.11901 17.631C5.35286 17.8649 5.66929 17.9974 6 18H7C7.33071 17.9974 7.64714 17.8649 7.88099 17.631C8.11485 17.3971 8.24739 17.0807 8.25 16.75V13.75C8.24739 13.4193 8.11485 13.1029 7.88099 12.869C7.64714 12.6352 7.33071 12.5026 7 12.5H6C5.66929 12.5026 5.35286 12.6352 5.11901 12.869C4.88515 13.1029 4.75261 13.4193 4.75 13.75Z"
                                                    fill="#667085" />
                                        </g>
                                    </svg>
                                    Support tickets
                                </a>
                            </li>

                            <li class="profile-settings-menu-item">
                                <a href="/chat" class="profile-settings-menu-item-link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_6522_7114" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                              x="0" y="0" width="24" height="24">
                                            <rect width="24" height="24" fill="#D9D9D9" />
                                        </mask>
                                        <g mask="url(#mask0_6522_7114)">
                                            <path
                                                    d="M2.98121 20.7488C2.87552 20.749 2.771 20.7268 2.67449 20.6837C2.57798 20.6406 2.49167 20.5776 2.42121 20.4988C2.33208 20.4003 2.27112 20.2796 2.24473 20.1494C2.21834 20.0192 2.22748 19.8843 2.27121 19.7588L3.45121 16.1988C2.35425 14.3826 2.00494 12.2116 2.47686 10.143C2.94879 8.07433 4.2051 6.26958 5.98121 5.10883C7.87969 3.80773 10.148 3.15537 12.4476 3.24909C14.7472 3.3428 16.9549 4.17757 18.7412 5.62883C19.5817 6.30768 20.2784 7.14724 20.7907 8.09846C21.303 9.04967 21.6206 10.0935 21.7249 11.1688C21.8291 12.2442 21.718 13.3295 21.3981 14.3614C21.0781 15.3933 20.5556 16.3511 19.8612 17.1788C18.3665 18.8724 16.3667 20.0404 14.1573 20.5104C11.9479 20.9803 9.64586 20.7274 7.59121 19.7888L3.14121 20.7288L2.98121 20.7488ZM7.68121 18.2488C7.79567 18.2516 7.9082 18.2789 8.01121 18.3288C9.77535 19.1905 11.7729 19.4517 13.6992 19.0726C15.6256 18.6934 17.3752 17.6948 18.6812 16.2288C19.2483 15.5503 19.6743 14.7654 19.9343 13.9202C20.1943 13.075 20.2832 12.1864 20.1957 11.3064C20.1081 10.4265 19.846 9.57279 19.4245 8.79537C19.0031 8.01795 18.4308 7.3324 17.7412 6.77883C16.2119 5.53354 14.3201 4.81756 12.3495 4.73823C10.3789 4.6589 8.43568 5.2205 6.81121 6.33883C6.06825 6.82298 5.42879 7.4498 4.92992 8.18295C4.43104 8.91611 4.08267 9.741 3.905 10.6098C3.72733 11.4786 3.7239 12.374 3.89491 13.2442C4.06592 14.1143 4.40796 14.9419 4.90121 15.6788C4.96467 15.7751 5.0057 15.8844 5.02127 15.9986C5.03685 16.1128 5.02658 16.2291 4.99121 16.3388L4.11121 18.9988L7.52121 18.2788L7.68121 18.2488Z"
                                                    fill="#667085" />
                                        </g>
                                    </svg>
                                    Live Chat
                                </a>
                            </li>
                            
                            <li class="profile-settings-menu-item ">
                                <a href="/change-password" class="profile-settings-menu-item-link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M18 10.75C17.59 10.75 17.25 10.41 17.25 10V8C17.25 4.85 16.36 2.75 12 2.75C7.64 2.75 6.75 4.85 6.75 8V10C6.75 10.41 6.41 10.75 6 10.75C5.59 10.75 5.25 10.41 5.25 10V8C5.25 5.1 5.95 1.25 12 1.25C18.05 1.25 18.75 5.1 18.75 8V10C18.75 10.41 18.41 10.75 18 10.75Z"
                                                fill="#667085" />
                                        <path
                                                d="M12 19.25C10.21 19.25 8.75 17.79 8.75 16C8.75 14.21 10.21 12.75 12 12.75C13.79 12.75 15.25 14.21 15.25 16C15.25 17.79 13.79 19.25 12 19.25ZM12 14.25C11.04 14.25 10.25 15.04 10.25 16C10.25 16.96 11.04 17.75 12 17.75C12.96 17.75 13.75 16.96 13.75 16C13.75 15.04 12.96 14.25 12 14.25Z"
                                                fill="#667085" />
                                        <path
                                                d="M17 22.75H7C2.59 22.75 1.25 21.41 1.25 17V15C1.25 10.59 2.59 9.25 7 9.25H17C21.41 9.25 22.75 10.59 22.75 15V17C22.75 21.41 21.41 22.75 17 22.75ZM7 10.75C3.42 10.75 2.75 11.43 2.75 15V17C2.75 20.57 3.42 21.25 7 21.25H17C20.58 21.25 21.25 20.57 21.25 17V15C21.25 11.43 20.58 10.75 17 10.75H7Z"
                                                fill="#667085" />
                                    </svg>
                                    Change Password
                                </a>
                            </li>
                            <li class="profile-settings-menu-item ">
                                <a href="/client-profile-set" class="profile-settings-menu-item-link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M12 15.75C9.93 15.75 8.25 14.07 8.25 12C8.25 9.93 9.93 8.25 12 8.25C14.07 8.25 15.75 9.93 15.75 12C15.75 14.07 14.07 15.75 12 15.75ZM12 9.75C10.76 9.75 9.75 10.76 9.75 12C9.75 13.24 10.76 14.25 12 14.25C13.24 14.25 14.25 13.24 14.25 12C14.25 10.76 13.24 9.75 12 9.75Z"
                                                fill="#667085" />
                                        <path
                                                d="M15.21 22.1903C15 22.1903 14.79 22.1603 14.58 22.1103C13.96 21.9403 13.44 21.5503 13.11 21.0003L12.99 20.8003C12.4 19.7803 11.59 19.7803 11 20.8003L10.89 20.9903C10.56 21.5503 10.04 21.9503 9.42 22.1103C8.79 22.2803 8.14 22.1903 7.59 21.8603L5.87 20.8703C5.26 20.5203 4.82 19.9503 4.63 19.2603C4.45 18.5703 4.54 17.8603 4.89 17.2503C5.18 16.7403 5.26 16.2803 5.09 15.9903C4.92 15.7003 4.49 15.5303 3.9 15.5303C2.44 15.5303 1.25 14.3403 1.25 12.8803V11.1203C1.25 9.66029 2.44 8.47029 3.9 8.47029C4.49 8.47029 4.92 8.30029 5.09 8.01029C5.26 7.72029 5.19 7.26029 4.89 6.75029C4.54 6.14029 4.45 5.42029 4.63 4.74029C4.81 4.05029 5.25 3.48029 5.87 3.13029L7.6 2.14029C8.73 1.47029 10.22 1.86029 10.9 3.01029L11.02 3.21029C11.61 4.23029 12.42 4.23029 13.01 3.21029L13.12 3.02029C13.8 1.86029 15.29 1.47029 16.43 2.15029L18.15 3.14029C18.76 3.49029 19.2 4.06029 19.39 4.75029C19.57 5.44029 19.48 6.15029 19.13 6.76029C18.84 7.27029 18.76 7.73029 18.93 8.02029C19.1 8.31029 19.53 8.48029 20.12 8.48029C21.58 8.48029 22.77 9.67029 22.77 11.1303V12.8903C22.77 14.3503 21.58 15.5403 20.12 15.5403C19.53 15.5403 19.1 15.7103 18.93 16.0003C18.76 16.2903 18.83 16.7503 19.13 17.2603C19.48 17.8703 19.58 18.5903 19.39 19.2703C19.21 19.9603 18.77 20.5303 18.15 20.8803L16.42 21.8703C16.04 22.0803 15.63 22.1903 15.21 22.1903ZM12 18.4903C12.89 18.4903 13.72 19.0503 14.29 20.0403L14.4 20.2303C14.52 20.4403 14.72 20.5903 14.96 20.6503C15.2 20.7103 15.44 20.6803 15.64 20.5603L17.37 19.5603C17.63 19.4103 17.83 19.1603 17.91 18.8603C17.99 18.5603 17.95 18.2503 17.8 17.9903C17.23 17.0103 17.16 16.0003 17.6 15.2303C18.04 14.4603 18.95 14.0203 20.09 14.0203C20.73 14.0203 21.24 13.5103 21.24 12.8703V11.1103C21.24 10.4803 20.73 9.96029 20.09 9.96029C18.95 9.96029 18.04 9.52029 17.6 8.75029C17.16 7.98029 17.23 6.97029 17.8 5.99029C17.95 5.73029 17.99 5.42029 17.91 5.12029C17.83 4.82029 17.64 4.58029 17.38 4.42029L15.65 3.43029C15.22 3.17029 14.65 3.32029 14.39 3.76029L14.28 3.95029C13.71 4.94029 12.88 5.50029 11.99 5.50029C11.1 5.50029 10.27 4.94029 9.7 3.95029L9.59 3.75029C9.34 3.33029 8.78 3.18029 8.35 3.43029L6.62 4.43029C6.36 4.58029 6.16 4.83029 6.08 5.13029C6 5.43029 6.04 5.74029 6.19 6.00029C6.76 6.98029 6.83 7.99029 6.39 8.76029C5.95 9.53029 5.04 9.97029 3.9 9.97029C3.26 9.97029 2.75 10.4803 2.75 11.1203V12.8803C2.75 13.5103 3.26 14.0303 3.9 14.0303C5.04 14.0303 5.95 14.4703 6.39 15.2403C6.83 16.0103 6.76 17.0203 6.19 18.0003C6.04 18.2603 6 18.5703 6.08 18.8703C6.16 19.1703 6.35 19.4103 6.61 19.5703L8.34 20.5603C8.55 20.6903 8.8 20.7203 9.03 20.6603C9.27 20.6003 9.47 20.4403 9.6 20.2303L9.71 20.0403C10.28 19.0603 11.11 18.4903 12 18.4903Z"
                                                fill="#667085" />
                                    </svg>
                                    Profile Settings
                                </a>
                            </li>
                            {{-- <li class="profile-settings-menu-item ">
                                <a href="https://xilancer.xgenious.com/client/profile/identity-verification"
                                   class="profile-settings-menu-item-link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M17 21.75H7C2.59 21.75 1.25 20.41 1.25 16V8C1.25 3.59 2.59 2.25 7 2.25H17C21.41 2.25 22.75 3.59 22.75 8V16C22.75 20.41 21.41 21.75 17 21.75ZM7 3.75C3.42 3.75 2.75 4.43 2.75 8V16C2.75 19.57 3.42 20.25 7 20.25H17C20.58 20.25 21.25 19.57 21.25 16V8C21.25 4.43 20.58 3.75 17 3.75H7Z"
                                                fill="#667085" />
                                        <path
                                                d="M19 8.75H14C13.59 8.75 13.25 8.41 13.25 8C13.25 7.59 13.59 7.25 14 7.25H19C19.41 7.25 19.75 7.59 19.75 8C19.75 8.41 19.41 8.75 19 8.75Z"
                                                fill="#667085" />
                                        <path
                                                d="M19 12.75H15C14.59 12.75 14.25 12.41 14.25 12C14.25 11.59 14.59 11.25 15 11.25H19C19.41 11.25 19.75 11.59 19.75 12C19.75 12.41 19.41 12.75 19 12.75Z"
                                                fill="#667085" />
                                        <path
                                                d="M19 16.75H17C16.59 16.75 16.25 16.41 16.25 16C16.25 15.59 16.59 15.25 17 15.25H19C19.41 15.25 19.75 15.59 19.75 16C19.75 16.41 19.41 16.75 19 16.75Z"
                                                fill="#667085" />
                                        <path
                                                d="M8.4975 12.04C7.0875 12.04 5.9375 10.89 5.9375 9.47998C5.9375 8.06998 7.0875 6.91998 8.4975 6.91998C9.9075 6.91998 11.0575 8.06998 11.0575 9.47998C11.0575 10.89 9.9075 12.04 8.4975 12.04ZM8.4975 8.41998C7.9175 8.41998 7.4375 8.89998 7.4375 9.47998C7.4375 10.06 7.9175 10.54 8.4975 10.54C9.0775 10.54 9.5575 10.06 9.5575 9.47998C9.5575 8.89998 9.0775 8.41998 8.4975 8.41998Z"
                                                fill="#667085" />
                                        <path
                                                d="M11.998 17.08C11.618 17.08 11.288 16.79 11.248 16.4C11.138 15.32 10.268 14.45 9.17795 14.35C8.71795 14.31 8.25795 14.31 7.79795 14.35C6.70795 14.45 5.83795 15.31 5.72795 16.4C5.68795 16.81 5.31795 17.12 4.90795 17.07C4.49795 17.03 4.19795 16.66 4.23795 16.25C4.41795 14.45 5.84795 13.02 7.65795 12.86C8.20795 12.81 8.76795 12.81 9.31795 12.86C11.118 13.03 12.558 14.46 12.738 16.25C12.778 16.66 12.478 17.03 12.068 17.07C12.048 17.08 12.018 17.08 11.998 17.08Z"
                                                fill="#667085" />
                                    </svg>
                                    Identity Verification
                                </a>
                            </li> --}}
                            <li class="profile-settings-menu-item">
                                <a href="/" class="profile-settings-menu-item-link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M15.24 22.2705H15.11C10.67 22.2705 8.53002 20.5205 8.16002 16.6005C8.12002 16.1905 8.42002 15.8205 8.84002 15.7805C9.24002 15.7405 9.62002 16.0505 9.66002 16.4605C9.95002 19.6005 11.43 20.7705 15.12 20.7705H15.25C19.32 20.7705 20.76 19.3305 20.76 15.2605V8.74047C20.76 4.67047 19.32 3.23047 15.25 3.23047H15.12C11.41 3.23047 9.93002 4.42047 9.66002 7.62047C9.61002 8.03047 9.26002 8.34047 8.84002 8.30047C8.42002 8.27047 8.12001 7.90047 8.15001 7.49047C8.49001 3.51047 10.64 1.73047 15.11 1.73047H15.24C20.15 1.73047 22.25 3.83047 22.25 8.74047V15.2605C22.25 20.1705 20.15 22.2705 15.24 22.2705Z"
                                                fill="#667085" />
                                        <path
                                                d="M15.0001 12.75H3.62012C3.21012 12.75 2.87012 12.41 2.87012 12C2.87012 11.59 3.21012 11.25 3.62012 11.25H15.0001C15.4101 11.25 15.7501 11.59 15.7501 12C15.7501 12.41 15.4101 12.75 15.0001 12.75Z"
                                                fill="#667085" />
                                        <path
                                                d="M5.84994 16.0998C5.65994 16.0998 5.46994 16.0298 5.31994 15.8798L1.96994 12.5298C1.67994 12.2398 1.67994 11.7598 1.96994 11.4698L5.31994 8.11984C5.60994 7.82984 6.08994 7.82984 6.37994 8.11984C6.66994 8.40984 6.66994 8.88984 6.37994 9.17984L3.55994 11.9998L6.37994 14.8198C6.66994 15.1098 6.66994 15.5898 6.37994 15.8798C6.23994 16.0298 6.03994 16.0998 5.84994 16.0998Z"
                                                fill="#667085" />
                                    </svg>
                                    Log Out
                                </a>
                            </li>
                        </ul>
                                                        </div>
    </div>
</div>
                        <div class="col-xl-9 col-lg-8">
                            <div class="profile-settings-wrapper">

                                <div class="single-profile-settings">
                                    <div class="single-profile-settings-header d-flex">
                                        <div class="single-profile-settings-header-flex">
                                            <h4 class="single-profile-settings-header-title">Dashboard Info</h4> <br><br>
<p></p>
                                        </div>
                                                                                <div class="switcher">
                                            <div>
                                                <select class="btn-profile btn-bg-1" onchange="switchProfile(this.value)">
                                                                                                            <option value="client" selected  class="d-none" >Loged in as Client</option>
                                                        <option value="freelancer">Switch to Freelancer</option>
                                                                                                    </select>
                                            </div>
                                        </div>
                                                                            </div>
                                    <div class="single-profile-settings-inner profile-border-top">
                                        <div class="row">

                                            <div class="col-xxl-3 col-lg-6 col-sm-6 col-md-4">
                                                <div class="myJob-wrapper-single-balance total_balance">
                                                    <div class="myJob-wrapper-single-balance-contents">
                                                        <div class="myJob-wrapper-single-balance-price d-flex gap-2 justify-content-between">
                                                            <h4 class="contract_single__balance-price">$154.00</h4>
                                                        </div>
                                                        <p class="myJob-wrapper-single-balance-para">Wallet Balance</p>
                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="col-xxl-3 col-lg-6 col-sm-6 col-md-4">
                                                <div class="myJob-wrapper-single-balance">
                                                    <div class="myJob-wrapper-single-balance-contents">
                                                        <div class="myJob-wrapper-single-balance-price d-flex gap-2 justify-content-between">
                                                            <h4 class="contract_single__balance-price">39</h4>
                                                        </div>
                                                        <p class="myJob-wrapper-single-balance-para">Total Jobs</p>
                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="col-xxl-3 col-lg-6 col-sm-6 col-md-4">
                                                <div class="myJob-wrapper-single-balance">
                                                    <div class="myJob-wrapper-single-balance-contents">
                                                        <div class="myJob-wrapper-single-balance-price d-flex gap-2 justify-content-between">
                                                            <h4 class="contract_single__balance-price">18</h4>
                                                        </div>
                                                        <p class="myJob-wrapper-single-balance-para">Complete Order</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-lg-6 col-sm-6 col-md-4">
                                                <div class="myJob-wrapper-single-balance">
                                                    <div class="myJob-wrapper-single-balance-contents">
                                                        <div class="myJob-wrapper-single-balance-price d-flex gap-2 justify-content-between">
                                                            <h4 class="contract_single__balance-price">26</h4>
                                                        </div>
                                                        <p class="myJob-wrapper-single-balance-para">Active Order</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                
                                <div class="single-profile-settings">
                                    <div class="single-profile-settings-header">
                                        <div class="single-profile-settings-header-flex pb-2">
                                            <h4 class="single-profile-settings-header-title">Latest Orders</h4> <br><br>
<p></p>
                                            <a href="/posted-orders" class="btn-profile btn-bg-1"> All Orders </a>
                                        </div>
                                        <div class="alert alert-warning " role="alert">
    <p>Notice: The admin has the ability to update the payment status for transactions that are pending.</p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
</div>
                                    </div>
                                    <div class="single-profile-settings-inner profile-border-top">
                                        <div class="custom_table style-04">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Budget</th>
                                                    <th>Delivery Time</th>
                                                    <th>Payment Status</th>
                                                    <th>Create Date</th>
                                                    <th>Order Details</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                                                                    <tr>
                                                        <td>$60.00</td>
                                                        <td>1 Days</td>
                                                        <td>
                                                                                                                            <span class="btn btn-success btn-sm">Complete</span>
                                                                                                                    </td>
                                                        <td>Oct 24, 2024</td>
                                                        <td><a href="" class="btn-profile btn-bg-1">Order Details</a></td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>$40.00</td>
                                                        <td>1 Days</td>
                                                        <td>
                                                                                                                            <span class="btn btn-success btn-sm">Complete</span>
                                                                                                                    </td>
                                                        <td>Oct 24, 2024</td>
                                                        <td><a href="" class="btn-profile btn-bg-1">Order Details</a></td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>$100.00</td>
                                                        <td>Less than a month</td>
                                                        <td>
                                                                                                                            <span class="btn btn-warning btn-sm">Pending</span>
                                                                                                                    </td>
                                                        <td>Oct 23, 2024</td>
                                                        <td><a href="" class="btn-profile btn-bg-1">Order Details</a></td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>$100.00</td>
                                                        <td>3 Days</td>
                                                        <td>
                                                                                                                            <span class="btn btn-success btn-sm">Complete</span>
                                                                                                                    </td>
                                                        <td>Oct 22, 2024</td>
                                                        <td><a href="" class="btn-profile btn-bg-1">Order Details</a></td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>$100.00</td>
                                                        <td>3 Days</td>
                                                        <td>
                                                                                                                            <span class="btn btn-success btn-sm">Complete</span>
                                                                                                                    </td>
                                                        <td>Oct 22, 2024</td>
                                                        <td><a href="" class="btn-profile btn-bg-1">Order Details</a></td>
                                                    </tr>
                                                                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                
                                                                    <div class="single-profile-settings">
                                        <div class="single-profile-settings-header">
                                            <div class="single-profile-settings-header-flex">
                                                <h4 class="single-profile-settings-header-title">Latest Jobs</h4> <br><br>
<p></p>
                                                <a href="https://xilancer.xgenious.com/client/job/all" class="btn-profile btn-bg-1"> All Jobs </a>
                                            </div>
                                        </div>
                                        <div class="single-profile-settings-inner profile-border-top">
                                            <div class="custom_table style-04">
                                                <table>
                                                    <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                                                                            <tr>
                                                            <td>need a graphic designer</td>
                                                            <td>
                                                                <a href="" class="btn-profile btn-bg-1 edit_info_show_hide"> Edit Job </a>
                                                            </td>
                                                        </tr>
                                                                                                            <tr>
                                                            <td>6wyjeheje</td>
                                                            <td>
                                                                <a href="" class="btn-profile btn-bg-1 edit_info_show_hide"> Edit Job </a>
                                                            </td>
                                                        </tr>
                                                                                                            <tr>
                                                            <td>software engineer</td>
                                                            <td>
                                                                <a href="" class="btn-profile btn-bg-1 edit_info_show_hide"> Edit Job </a>
                                                            </td>
                                                        </tr>
                                                                                                            <tr>
                                                            <td>test my app</td>
                                                            <td>
                                                                <a href="" class="btn-profile btn-bg-1 edit_info_show_hide"> Edit Job </a>
                                                            </td>
                                                        </tr>
                                                                                                            <tr>
                                                            <td>xxxxx</td>
                                                            <td>
                                                                <a href="" class="btn-profile btn-bg-1 edit_info_show_hide"> Edit Job </a>
                                                            </td>
                                                        </tr>
                                                                                                        </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Profile Settings area end -->
        </main>
<!-- footer area start -->
<footer class="footer-area footer-fluid white-footer footer-bg-1">
    <div class="container">
        <div class="footer-area-wrapper footer-bg-1">

            <div class="row gx-5 footer-area-top">
                   <div class="col-lg-3 col-sm-6 mt-4">
            <div class="footer-widget widget">
                <div class="footer-contents-logo">
                    <a href="/clientlog" class="footer-contents-logo-img"> 
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
        <a href="#/"> +254712 345 678</a> 
     </span>
     <span class="footer-widget-contact-item"> 
         <span> 
         <i class="far fa-envelope"></i> 
         </span> 
        <a href="#/"> info@email.co.ke </a> 
     </span>
     <span class="footer-widget-contact-item"> 
         <span> 
         <i class="fas fa-map-marker"></i> 
         </span> 
        <a href="#/"> 8702 Syokimau, pacific mall </a> 
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
                            <p>©  2024  All right reserved by  <a href="#">ROberms</a></p>
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
<script> $.ajaxSetup({headers: {'X-CSRF-TOKEN': 'qz2ZqU6CepE7kKpKNeQ14ZIRA3hvTaLHYzzJcysj'} }) </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
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
                    url:"https://xilancer.xgenious.com/client/notification/read",
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
                    url:"https://xilancer.xgenious.com/news-letter/subscribe/by/user",
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
                    url:"https://xilancer.xgenious.com/news-letter/subscribe/by/user",
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
                    url:"https://xilancer.xgenious.com/faq/question/by/user",
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
                        url:"https://xilancer.xgenious.com/job/project/search/from/home/page",
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
</script>


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
        function switchProfile(role) {
            console.log(role)
            $.ajax({
                url:"",
                method:'post',
                data:{role:role},
                success:function(res){
                    if(res.status=='success'){
                        if(res.user_role == 'freelancer'){
                            window.location.href = "/freelancelog";
                        }
                        if(res.user_role == 'client'){
                            window.location.href = "/create-project";
                        }
                    }
                }
            });
        }
    </script>
<!--Start of Google Captcha V3 Script-->
    <script src="https://www.google.com/recaptcha/api.js?render=6LcJtlYpAAAAAAZAJk7pjWKhz09FRSWLCYyKVpAd"></script>
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
    </script>
    <!--End of Google Captcha V3 Script-->

</body>

</html>
