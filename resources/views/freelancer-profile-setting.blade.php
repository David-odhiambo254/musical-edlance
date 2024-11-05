<!DOCTYPE html>
<html lang="en_GB" dir="ltr">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="QBz2I8EiJyZZ9UnkKlvqzITV597a2ERjYuMUclOi">
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
        <link rel="stylesheet" href="https://xilancer.xgenious.com/assets/common/css/select2.min.css">
    <style>
        button.close {
            width: 30px;
            height: 30px;
            border: none;
            background: #000;
            color: #fff;
            border-radius: 3px;
            float: right;
            font-size: 20px;
        }
        .popup-contents-form .single-input .select2-container {
            z-index: 9 !important;
        }
    </style>

            <title>Profile Settings</title>
                            
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
                <a href="/" class="logo">
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
                        <a href="/chat" class="navbar-right-chat position-relative reload_unseen_message_count"> <i class="fa-regular fa-comment-dots"></i>
                            </a>
        </div>
    
    <div class="navbar-right-item bookmark_area position-relative">
        <a href="#0" class="navbar-right-chat nav-right-bookmark-icon position-relative">
            <i class="fa-regular fa-bookmark"></i>
                            <span
                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                                    1
                                </span>
                    </a>
        <div class="bookmark-wrap">
                                                <div class="bookmark-item">
                                                    <a href=""
                               class="bookmark-item-para"><span class="bookmark-header-icon"><i class="fa-regular fa-bookmark"></i></span>
                                Virtual Spanish assistant, Customer support over the phone
                            </a>
                                                <span class="bookmark-item-close remove_from_bookmark"
                              data-identity = "8"
                              data-route = "">
                                            <i class="fas fa-times"></i>
                                        </span>
                    </div>
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
                                                    <span
                                                            class="navbar-right-notification-wrapper-list-item-content-title">
                                                        <strong>No Notification</strong> </span>
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
                                                            <img src="https://xilancer.xgenious.com/assets/uploads/profile/1713787258-6626517ab5fb3.png" alt="profile img">
                                                </div>
            <span class="navbar-author-name">Montag</span>
        </a>
        <div class="navbar-author-wrapper">
            <div class="navbar-author-wrapper-list">
                                                            <a href="/freelancelog" class="navbar-author-wrapper-list-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 10.75H5C2.58 10.75 1.25 9.42 1.25 7V5C1.25 2.58 2.58 1.25 5 1.25H7C9.42 1.25 10.75 2.58 10.75 5V7C10.75 9.42 9.42 10.75 7 10.75ZM5 2.75C3.42 2.75 2.75 3.42 2.75 5V7C2.75 8.58 3.42 9.25 5 9.25H7C8.58 9.25 9.25 8.58 9.25 7V5C9.25 3.42 8.58 2.75 7 2.75H5Z" fill="#667085"/>
                                <path d="M19 10.75H17C14.58 10.75 13.25 9.42 13.25 7V5C13.25 2.58 14.58 1.25 17 1.25H19C21.42 1.25 22.75 2.58 22.75 5V7C22.75 9.42 21.42 10.75 19 10.75ZM17 2.75C15.42 2.75 14.75 3.42 14.75 5V7C14.75 8.58 15.42 9.25 17 9.25H19C20.58 9.25 21.25 8.58 21.25 7V5C21.25 3.42 20.58 2.75 19 2.75H17Z" fill="#667085"/>
                                <path d="M19 22.75H17C14.58 22.75 13.25 21.42 13.25 19V17C13.25 14.58 14.58 13.25 17 13.25H19C21.42 13.25 22.75 14.58 22.75 17V19C22.75 21.42 21.42 22.75 19 22.75ZM17 14.75C15.42 14.75 14.75 15.42 14.75 17V19C14.75 20.58 15.42 21.25 17 21.25H19C20.58 21.25 21.25 20.58 21.25 19V17C21.25 15.42 20.58 14.75 19 14.75H17Z" fill="#667085"/>
                                <path d="M7 22.75H5C2.58 22.75 1.25 21.42 1.25 19V17C1.25 14.58 2.58 13.25 5 13.25H7C9.42 13.25 10.75 14.58 10.75 17V19C10.75 21.42 9.42 22.75 7 22.75ZM5 14.75C3.42 14.75 2.75 15.42 2.75 17V19C2.75 20.58 3.42 21.25 5 21.25H7C8.58 21.25 9.25 20.58 9.25 19V17C9.25 15.42 8.58 14.75 7 14.75H5Z" fill="#667085"/>
                            </svg>
                            Dashboard
                        </a>
                        <a href="/profile-Details"
                           class="navbar-author-wrapper-list-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M12.12 13.5305C12.1 13.5305 12.07 13.5305 12.05 13.5305C12.02 13.5305 11.98 13.5305 11.95 13.5305C9.67998 13.4605 7.97998 11.6905 7.97998 9.51047C7.97998 7.29047 9.78998 5.48047 12.01 5.48047C14.23 5.48047 16.04 7.29047 16.04 9.51047C16.03 11.7005 14.32 13.4605 12.15 13.5305C12.13 13.5305 12.13 13.5305 12.12 13.5305ZM12 6.97047C10.6 6.97047 9.46998 8.11047 9.46998 9.50047C9.46998 10.8705 10.54 11.9805 11.9 12.0305C11.93 12.0205 12.03 12.0205 12.13 12.0305C13.47 11.9605 14.52 10.8605 14.53 9.50047C14.53 8.11047 13.4 6.97047 12 6.97047Z"
                                        fill="#667085" />
                                <path
                                        d="M12.0001 22.7503C9.31008 22.7503 6.74008 21.7503 4.75008 19.9303C4.57008 19.7703 4.49008 19.5303 4.51008 19.3003C4.64008 18.1103 5.38008 17.0003 6.61008 16.1803C9.59008 14.2003 14.4201 14.2003 17.3901 16.1803C18.6201 17.0103 19.3601 18.1103 19.4901 19.3003C19.5201 19.5403 19.4301 19.7703 19.2501 19.9303C17.2601 21.7503 14.6901 22.7503 12.0001 22.7503ZM6.08008 19.1003C7.74008 20.4903 9.83008 21.2503 12.0001 21.2503C14.1701 21.2503 16.2601 20.4903 17.9201 19.1003C17.7401 18.4903 17.2601 17.9003 16.5501 17.4203C14.0901 15.7803 9.92008 15.7803 7.44008 17.4203C6.73008 17.9003 6.26008 18.4903 6.08008 19.1003Z"
                                        fill="#667085" />
                                <path
                                        d="M12 22.75C6.07 22.75 1.25 17.93 1.25 12C1.25 6.07 6.07 1.25 12 1.25C17.93 1.25 22.75 6.07 22.75 12C22.75 17.93 17.93 22.75 12 22.75ZM12 2.75C6.9 2.75 2.75 6.9 2.75 12C2.75 17.1 6.9 21.25 12 21.25C17.1 21.25 21.25 17.1 21.25 12C21.25 6.9 17.1 2.75 12 2.75Z"
                                        fill="#667085" />
                            </svg>
                            Profile Details
                        </a>
                        <a href="/my-orders"
                           class="navbar-author-wrapper-list-item">
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
                        {{-- <a href=""
                           class="navbar-author-wrapper-list-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M12 22.7503C11.37 22.7503 10.78 22.5104 10.34 22.0604L8.82001 20.5404C8.70001 20.4204 8.38 20.2904 8.22 20.2904H6.06C4.76 20.2904 3.70999 19.2403 3.70999 17.9403V15.7804C3.70999 15.6204 3.57999 15.3004 3.45999 15.1804L1.94 13.6604C1.5 13.2204 1.25 12.6303 1.25 12.0003C1.25 11.3703 1.49 10.7803 1.94 10.3403L3.45999 8.82028C3.57999 8.70028 3.70999 8.3803 3.70999 8.2203V6.06039C3.70999 4.76039 4.76 3.71029 6.06 3.71029H8.22C8.38 3.71029 8.70001 3.58029 8.82001 3.46029L10.34 1.94027C11.22 1.06027 12.78 1.06027 13.66 1.94027L15.18 3.46029C15.3 3.58029 15.62 3.71029 15.78 3.71029H17.94C19.24 3.71029 20.29 4.76039 20.29 6.06039V8.2203C20.29 8.3803 20.42 8.70028 20.54 8.82028L22.06 10.3403C22.5 10.7803 22.75 11.3703 22.75 12.0003C22.75 12.6303 22.51 13.2204 22.06 13.6604L20.54 15.1804C20.42 15.3004 20.29 15.6204 20.29 15.7804V17.9403C20.29 19.2403 19.24 20.2904 17.94 20.2904H15.78C15.62 20.2904 15.3 20.4204 15.18 20.5404L13.66 22.0604C13.22 22.5104 12.63 22.7503 12 22.7503ZM4.51999 14.1203C4.91999 14.5203 5.20999 15.2204 5.20999 15.7804V17.9403C5.20999 18.4103 5.59 18.7904 6.06 18.7904H8.22C8.78 18.7904 9.48001 19.0803 9.88 19.4803L11.4 21.0003C11.72 21.3203 12.28 21.3203 12.6 21.0003L14.12 19.4803C14.52 19.0803 15.22 18.7904 15.78 18.7904H17.94C18.41 18.7904 18.79 18.4103 18.79 17.9403V15.7804C18.79 15.2204 19.08 14.5203 19.48 14.1203L21 12.6003C21.16 12.4403 21.25 12.2303 21.25 12.0003C21.25 11.7703 21.16 11.5604 21 11.4004L19.48 9.88034C19.08 9.48034 18.79 8.7803 18.79 8.2203V6.06039C18.79 5.59039 18.41 5.21029 17.94 5.21029H15.78C15.22 5.21029 14.52 4.92035 14.12 4.52035L12.6 3.00033C12.28 2.68033 11.72 2.68033 11.4 3.00033L9.88 4.52035C9.48001 4.92035 8.78 5.21029 8.22 5.21029H6.06C5.59 5.21029 5.20999 5.59039 5.20999 6.06039V8.2203C5.20999 8.7803 4.91999 9.48034 4.51999 9.88034L3 11.4004C2.84 11.5604 2.75 11.7703 2.75 12.0003C2.75 12.2303 2.84 12.4403 3 12.6003L4.51999 14.1203Z"
                                        fill="#667085" />
                                <path
                                        d="M15.0002 16C14.4402 16 13.9902 15.55 13.9902 15C13.9902 14.45 14.4402 14 14.9902 14C15.5402 14 15.9902 14.45 15.9902 15C15.9902 15.55 15.5502 16 15.0002 16Z"
                                        fill="#667085" />
                                <path
                                        d="M9.01001 10C8.45001 10 8 9.55 8 9C8 8.45 8.45 8 9 8C9.55 8 10 8.45 10 9C10 9.55 9.56001 10 9.01001 10Z"
                                        fill="#667085" />
                                <path
                                        d="M8.99994 15.7495C8.80994 15.7495 8.61994 15.6795 8.46994 15.5295C8.17994 15.2395 8.17994 14.7595 8.46994 14.4695L14.4699 8.46945C14.7599 8.17945 15.2399 8.17945 15.5299 8.46945C15.8199 8.75945 15.8199 9.23951 15.5299 9.52951L9.52994 15.5295C9.37994 15.6795 9.18994 15.7495 8.99994 15.7495Z"
                                        fill="#667085" />
                            </svg>
                            My Offers
                        </a> --}}
                        <a href="/flproposal"
                           class="navbar-author-wrapper-list-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.6201 9.62012H12.3701C11.9601 9.62012 11.6201 9.28012 11.6201 8.87012C11.6201 8.46012 11.9601 8.12012 12.3701 8.12012H17.6201C18.0301 8.12012 18.3701 8.46012 18.3701 8.87012C18.3701 9.28012 18.0401 9.62012 17.6201 9.62012Z" fill="#667085"/>
                                <path d="M7.12006 10.3803C6.93006 10.3803 6.74006 10.3103 6.59006 10.1603L5.84006 9.41031C5.55006 9.12031 5.55006 8.64031 5.84006 8.35031C6.13006 8.06031 6.61006 8.06031 6.90006 8.35031L7.12006 8.57031L8.84006 6.85031C9.13006 6.56031 9.61006 6.56031 9.90006 6.85031C10.1901 7.14031 10.1901 7.62031 9.90006 7.91031L7.65006 10.1603C7.51006 10.3003 7.32006 10.3803 7.12006 10.3803Z" fill="#667085"/>
                                <path d="M17.6201 16.6201H12.3701C11.9601 16.6201 11.6201 16.2801 11.6201 15.8701C11.6201 15.4601 11.9601 15.1201 12.3701 15.1201H17.6201C18.0301 15.1201 18.3701 15.4601 18.3701 15.8701C18.3701 16.2801 18.0401 16.6201 17.6201 16.6201Z" fill="#667085"/>
                                <path d="M7.12006 17.3803C6.93006 17.3803 6.74006 17.3103 6.59006 17.1603L5.84006 16.4103C5.55006 16.1203 5.55006 15.6403 5.84006 15.3503C6.13006 15.0603 6.61006 15.0603 6.90006 15.3503L7.12006 15.5703L8.84006 13.8503C9.13006 13.5603 9.61006 13.5603 9.90006 13.8503C10.1901 14.1403 10.1901 14.6203 9.90006 14.9103L7.65006 17.1603C7.51006 17.3003 7.32006 17.3803 7.12006 17.3803Z" fill="#667085"/>
                                <path d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z" fill="#667085"/>
                            </svg>
                            My proposals
                        </a>
                                                                                                                        <a href="/create-project"
                                       class="navbar-author-wrapper-list-item">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M8 16.75H5.43C2.74 16.75 1.25 15.27 1.25 12.57V5.43C1.25 2.74 2.73 1.25 5.43 1.25H10C12.69 1.25 14.18 2.73 14.18 5.43C14.18 5.84 13.84 6.18 13.43 6.18C13.02 6.18 12.68 5.84 12.68 5.43C12.68 3.55 11.88 2.75 10 2.75H5.43C3.55 2.75 2.75 3.55 2.75 5.43V12.57C2.75 14.45 3.55 15.25 5.43 15.25H8C8.41 15.25 8.75 15.59 8.75 16C8.75 16.41 8.41 16.75 8 16.75Z"
                                                    fill="#667085" />
                                            <path
                                                    d="M18.5701 22.75H14.0001C11.3101 22.75 9.82007 21.27 9.82007 18.57V11.43C9.82007 8.74 11.3001 7.25 14.0001 7.25H18.5701C21.2601 7.25 22.7501 8.73 22.7501 11.43V18.57C22.7501 21.27 21.2701 22.75 18.5701 22.75ZM14.0001 8.75C12.1201 8.75 11.3201 9.55 11.3201 11.43V18.57C11.3201 20.45 12.1201 21.25 14.0001 21.25H18.5701C20.4501 21.25 21.2501 20.45 21.2501 18.57V11.43C21.2501 9.55 20.4501 8.75 18.5701 8.75H14.0001Z"
                                                    fill="#667085" />
                                            <path
                                                    d="M18.1299 15.75H14.8799C14.4699 15.75 14.1299 15.41 14.1299 15C14.1299 14.59 14.4699 14.25 14.8799 14.25H18.1299C18.5399 14.25 18.8799 14.59 18.8799 15C18.8799 15.41 18.5399 15.75 18.1299 15.75Z"
                                                    fill="#667085" />
                                            <path
                                                    d="M16.5 17.3799C16.09 17.3799 15.75 17.0399 15.75 16.6299V13.3799C15.75 12.9699 16.09 12.6299 16.5 12.6299C16.91 12.6299 17.25 12.9699 17.25 13.3799V16.6299C17.25 17.0399 16.91 17.3799 16.5 17.3799Z"
                                                    fill="#667085" />
                                        </svg>
                                        Project Create
                                    </a>
                                                                                                            <a href="/freelance-setup"
                           class="navbar-author-wrapper-list-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M12 12.75C8.83 12.75 6.25 10.17 6.25 7C6.25 3.83 8.83 1.25 12 1.25C15.17 1.25 17.75 3.83 17.75 7C17.75 10.17 15.17 12.75 12 12.75ZM12 2.75C9.66 2.75 7.75 4.66 7.75 7C7.75 9.34 9.66 11.25 12 11.25C14.34 11.25 16.25 9.34 16.25 7C16.25 4.66 14.34 2.75 12 2.75Z"
                                        fill="#667085" />
                                <path
                                        d="M15.8201 22.7504C15.4401 22.7504 15.0801 22.6103 14.8201 22.3503C14.5101 22.0403 14.3701 21.5904 14.4401 21.1204L14.6301 19.7704C14.6801 19.4204 14.8901 19.0104 15.1401 18.7504L18.68 15.2104C20.1 13.7904 21.3501 14.6004 21.9601 15.2104C22.4801 15.7304 22.7501 16.2903 22.7501 16.8503C22.7501 17.4203 22.4901 17.9503 21.9601 18.4803L18.42 22.0204C18.17 22.2704 17.7501 22.4804 17.4001 22.5304L16.05 22.7203C15.97 22.7403 15.9001 22.7504 15.8201 22.7504ZM20.31 15.9203C20.13 15.9203 19.97 16.0404 19.74 16.2704L16.2001 19.8104C16.1701 19.8404 16.12 19.9403 16.12 19.9803L15.9401 21.2303L17.1901 21.0504C17.2301 21.0404 17.33 20.9904 17.36 20.9604L20.9001 17.4203C21.0601 17.2603 21.2501 17.0303 21.2501 16.8503C21.2501 16.7003 21.1301 16.4904 20.9001 16.2704C20.6601 16.0304 20.48 15.9203 20.31 15.9203Z"
                                        fill="#667085" />
                                <path
                                        d="M20.9201 19.2203C20.8501 19.2203 20.7801 19.2104 20.7201 19.1904C19.4001 18.8204 18.3501 17.7704 17.9801 16.4504C17.8701 16.0504 18.1001 15.6404 18.5001 15.5304C18.9001 15.4204 19.3101 15.6503 19.4201 16.0503C19.6501 16.8703 20.3001 17.5204 21.1201 17.7504C21.5201 17.8604 21.7501 18.2803 21.6401 18.6703C21.5501 19.0003 21.2501 19.2203 20.9201 19.2203Z"
                                        fill="#667085" />
                                <path
                                        d="M3.41016 22.75C3.00016 22.75 2.66016 22.41 2.66016 22C2.66016 17.73 6.85018 14.25 12.0002 14.25C13.0902 14.25 14.1702 14.41 15.1802 14.71C15.5802 14.83 15.8002 15.25 15.6802 15.64C15.5602 16.04 15.1402 16.26 14.7502 16.14C13.8702 15.88 12.9502 15.74 12.0002 15.74C7.68018 15.74 4.16016 18.54 4.16016 21.99C4.16016 22.41 3.82016 22.75 3.41016 22.75Z"
                                        fill="#667085" />
                            </svg>
                            Account Setup
                        </a>
                        <a href="/profile"
                           class="navbar-author-wrapper-list-item">
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
                        <a href="/logout"
                           class="navbar-author-wrapper-list-item">
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
                    <h4 class="breadcrumb-contents-title"> Profile Settings </h4>
                    <ul class="breadcrumb-contents-list list-style-none">
                        <li class="breadcrumb-contents-list-item"> <a href="/freelancelog" class="breadcrumb-contents-list-item-link"> Home  </a> </li>
                        <li class="breadcrumb-contents-list-item"> Profile Settings </li>
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
                    <a href="/freelancelog" class="profile-settings-menu-item-link">
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
                                <a href="/create-project" class="profile-settings-menu-item-link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M17 22.75H7C3.56 22.75 1.25 20.44 1.25 17V12C1.25 8.92 3.15 6.69001 6.1 6.32001C6.38 6.28001 6.69 6.25 7 6.25H17C17.24 6.25 17.55 6.26 17.87 6.31C20.82 6.65 22.75 8.89 22.75 12V17C22.75 20.44 20.44 22.75 17 22.75ZM7 7.75C6.76 7.75 6.53 7.76999 6.3 7.79999C4.1 8.07999 2.75 9.68 2.75 12V17C2.75 19.58 4.42 21.25 7 21.25H17C19.58 21.25 21.25 19.58 21.25 17V12C21.25 9.66 19.88 8.05001 17.66 7.79001C17.42 7.75001 17.21 7.75 17 7.75H7Z"
                                                fill="#667085" />
                                        <path
                                                d="M6.192 7.81001C5.952 7.81001 5.732 7.70001 5.582 7.50001C5.412 7.27001 5.392 6.97001 5.522 6.72001C5.692 6.38001 5.932 6.05001 6.242 5.75001L9.492 2.49C11.152 0.840002 13.852 0.840002 15.512 2.49L17.262 4.26002C18.002 4.99002 18.452 5.97002 18.502 7.01002C18.512 7.24002 18.422 7.46 18.252 7.61C18.082 7.76 17.852 7.83002 17.632 7.79002C17.432 7.76002 17.222 7.75001 17.002 7.75001H7.002C6.762 7.75001 6.532 7.77 6.302 7.8C6.272 7.81 6.232 7.81001 6.192 7.81001ZM7.862 6.25001H16.822C16.692 5.91001 16.482 5.60002 16.202 5.32002L14.442 3.54002C13.372 2.48002 11.622 2.48002 10.542 3.54002L7.862 6.25001Z"
                                                fill="#667085" />
                                        <path
                                                d="M22 17.25H19C17.48 17.25 16.25 16.02 16.25 14.5C16.25 12.98 17.48 11.75 19 11.75H22C22.41 11.75 22.75 12.09 22.75 12.5C22.75 12.91 22.41 13.25 22 13.25H19C18.31 13.25 17.75 13.81 17.75 14.5C17.75 15.19 18.31 15.75 19 15.75H22C22.41 15.75 22.75 16.09 22.75 16.5C22.75 16.91 22.41 17.25 22 17.25Z"
                                                fill="#667085" />
                                    </svg>
                                    Create a Project
                                </a>
                            </li>
                                                                                                    <li class="profile-settings-menu-item">
                    <a href="/my-orders" class="profile-settings-menu-item-link">
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
                {{-- <li class="profile-settings-menu-item">
                    <a href="https://xilancer.xgenious.com/freelancer/live/all-offers" class="profile-settings-menu-item-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 22.75C11.37 22.75 10.78 22.51 10.34 22.06L8.82001 20.54C8.70001 20.42 8.38 20.29 8.22 20.29H6.06C4.76 20.29 3.70999 19.2399 3.70999 17.9399V15.78C3.70999 15.62 3.57999 15.3 3.45999 15.18L1.94 13.66C1.5 13.22 1.25 12.63 1.25 12C1.25 11.37 1.49 10.7799 1.94 10.3399L3.45999 8.81991C3.57999 8.69991 3.70999 8.37994 3.70999 8.21994V6.06002C3.70999 4.76002 4.76 3.70993 6.06 3.70993H8.22C8.38 3.70993 8.70001 3.57993 8.82001 3.45993L10.34 1.93991C11.22 1.05991 12.78 1.05991 13.66 1.93991L15.18 3.45993C15.3 3.57993 15.62 3.70993 15.78 3.70993H17.94C19.24 3.70993 20.29 4.76002 20.29 6.06002V8.21994C20.29 8.37994 20.42 8.69991 20.54 8.81991L22.06 10.3399C22.5 10.7799 22.75 11.37 22.75 12C22.75 12.63 22.51 13.22 22.06 13.66L20.54 15.18C20.42 15.3 20.29 15.62 20.29 15.78V17.9399C20.29 19.2399 19.24 20.29 17.94 20.29H15.78C15.62 20.29 15.3 20.42 15.18 20.54L13.66 22.06C13.22 22.51 12.63 22.75 12 22.75ZM4.51999 14.12C4.91999 14.52 5.20999 15.22 5.20999 15.78V17.9399C5.20999 18.4099 5.59 18.79 6.06 18.79H8.22C8.78 18.79 9.48 19.0799 9.88 19.4799L11.4 21C11.72 21.32 12.28 21.32 12.6 21L14.12 19.4799C14.52 19.0799 15.22 18.79 15.78 18.79H17.94C18.41 18.79 18.79 18.4099 18.79 17.9399V15.78C18.79 15.22 19.08 14.52 19.48 14.12L21 12.5999C21.16 12.4399 21.25 12.23 21.25 12C21.25 11.77 21.16 11.56 21 11.4L19.48 9.87997C19.08 9.47997 18.79 8.77994 18.79 8.21994V6.06002C18.79 5.59002 18.41 5.20993 17.94 5.20993H15.78C15.22 5.20993 14.52 4.91999 14.12 4.51999L12.6 2.99997C12.28 2.67997 11.72 2.67997 11.4 2.99997L9.88 4.51999C9.48 4.91999 8.78 5.20993 8.22 5.20993H6.06C5.59 5.20993 5.20999 5.59002 5.20999 6.06002V8.21994C5.20999 8.77994 4.91999 9.47997 4.51999 9.87997L3 11.4C2.84 11.56 2.75 11.77 2.75 12C2.75 12.23 2.84 12.4399 3 12.5999L4.51999 14.12Z"
                                fill="#667085" />
                            <path
                                d="M15.0022 16C14.4422 16 13.9922 15.55 13.9922 15C13.9922 14.45 14.4422 14 14.9922 14C15.5422 14 15.9922 14.45 15.9922 15C15.9922 15.55 15.5522 16 15.0022 16Z"
                                fill="#667085" />
                            <path
                                d="M9.01001 10C8.45001 10 8 9.55 8 9C8 8.45 8.45 8 9 8C9.55 8 10 8.45 10 9C10 9.55 9.56001 10 9.01001 10Z"
                                fill="#667085" />
                            <path
                                d="M8.9975 15.75C8.8075 15.75 8.6175 15.68 8.4675 15.53C8.1775 15.24 8.1775 14.7599 8.4675 14.4699L14.4675 8.46994C14.7575 8.17994 15.2375 8.17994 15.5275 8.46994C15.8175 8.75994 15.8175 9.24 15.5275 9.53L9.5275 15.53C9.3775 15.68 9.1875 15.75 8.9975 15.75Z"
                                fill="#667085" />
                        </svg>
                        My Offers
                    </a>
                </li> --}}
                <li class="profile-settings-menu-item">
                    <a href="/flproposal" class="profile-settings-menu-item-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.6201 9.62012H12.3701C11.9601 9.62012 11.6201 9.28012 11.6201 8.87012C11.6201 8.46012 11.9601 8.12012 12.3701 8.12012H17.6201C18.0301 8.12012 18.3701 8.46012 18.3701 8.87012C18.3701 9.28012 18.0401 9.62012 17.6201 9.62012Z" fill="#667085"/>
                            <path d="M7.12006 10.3803C6.93006 10.3803 6.74006 10.3103 6.59006 10.1603L5.84006 9.41031C5.55006 9.12031 5.55006 8.64031 5.84006 8.35031C6.13006 8.06031 6.61006 8.06031 6.90006 8.35031L7.12006 8.57031L8.84006 6.85031C9.13006 6.56031 9.61006 6.56031 9.90006 6.85031C10.1901 7.14031 10.1901 7.62031 9.90006 7.91031L7.65006 10.1603C7.51006 10.3003 7.32006 10.3803 7.12006 10.3803Z" fill="#667085"/>
                            <path d="M17.6201 16.6201H12.3701C11.9601 16.6201 11.6201 16.2801 11.6201 15.8701C11.6201 15.4601 11.9601 15.1201 12.3701 15.1201H17.6201C18.0301 15.1201 18.3701 15.4601 18.3701 15.8701C18.3701 16.2801 18.0401 16.6201 17.6201 16.6201Z" fill="#667085"/>
                            <path d="M7.12006 17.3803C6.93006 17.3803 6.74006 17.3103 6.59006 17.1603L5.84006 16.4103C5.55006 16.1203 5.55006 15.6403 5.84006 15.3503C6.13006 15.0603 6.61006 15.0603 6.90006 15.3503L7.12006 15.5703L8.84006 13.8503C9.13006 13.5603 9.61006 13.5603 9.90006 13.8503C10.1901 14.1403 10.1901 14.6203 9.90006 14.9103L7.65006 17.1603C7.51006 17.3003 7.32006 17.3803 7.12006 17.3803Z" fill="#667085"/>
                            <path d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z" fill="#667085"/>
                        </svg>
                        My Proposals
                    </a>
                </li>
                <li class="profile-settings-menu-item ">
                    <a href="/ticket-support" class="profile-settings-menu-item-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_6522_7043" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                y="0" width="24" height="24">
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
                <li class="profile-settings-menu-item ">
                    <a href="/wallet" class="profile-settings-menu-item-link">
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
                {{-- <li class="profile-settings-menu-item ">
                    <a href="https://xilancer.xgenious.com/freelancer/wallet/withdraw/history"
                        class="profile-settings-menu-item-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_6523_7035" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                y="0" width="24" height="24">
                                <rect width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_6523_7035)">
                                <path
                                    d="M11.9793 21C10.4948 20.9991 9.03322 20.6344 7.72293 19.9382C6.36675 19.2152 5.21967 18.1564 4.39188 16.8635V19.4673C4.39188 19.6509 4.31876 19.8271 4.18862 19.9569C4.05847 20.0868 3.88196 20.1598 3.69791 20.1598C3.51386 20.1598 3.33734 20.0868 3.2072 19.9569C3.07705 19.8271 3.00394 19.6509 3.00394 19.4673V14.8506C3.00634 14.6677 3.08022 14.4929 3.20985 14.3636C3.33948 14.2342 3.5146 14.1605 3.69791 14.1581H8.32437C8.50842 14.1581 8.68493 14.2311 8.81508 14.3609C8.94522 14.4908 9.01834 14.6669 9.01834 14.8506C9.01834 15.0343 8.94522 15.2104 8.81508 15.3403C8.68493 15.4701 8.50842 15.5431 8.32437 15.5431H5.22464C6.07617 17.1672 7.48471 18.4314 9.19303 19.1049C10.9013 19.7784 12.7954 19.8163 14.5294 19.2116C16.2634 18.6069 17.7215 17.3999 18.6375 15.8112C19.5536 14.2225 19.8663 12.3579 19.5187 10.5581C19.1711 8.75833 18.1864 7.14334 16.7443 6.0081C15.3022 4.87286 13.499 4.29312 11.664 4.37476C9.82901 4.45641 8.08467 5.19398 6.74954 6.45278C5.41441 7.71158 4.57758 9.40761 4.39188 11.2311C4.37225 11.4148 4.2803 11.5832 4.13628 11.6992C3.99225 11.8152 3.80794 11.8694 3.62388 11.8498C3.43983 11.8302 3.27112 11.7384 3.15486 11.5947C3.03859 11.451 2.98431 11.2671 3.00394 11.0834C3.17277 9.44185 3.79051 7.87817 4.78966 6.56324C5.78881 5.24831 7.13093 4.23272 8.66936 3.62745C10.2078 3.02217 11.8834 2.8505 13.5129 3.13119C15.1425 3.41188 16.6635 4.13414 17.9095 5.21903C19.1556 6.30393 20.0789 7.70972 20.5785 9.2828C21.0781 10.8559 21.1347 12.5357 20.7423 14.1388C20.3499 15.7418 19.5235 17.2064 18.3533 18.3725C17.1832 19.5386 15.7144 20.3613 14.1074 20.7507C13.4101 20.9158 12.6959 20.9994 11.9793 21ZM13.8299 14.6198C13.7387 14.6202 13.6483 14.6025 13.5641 14.5676C13.4799 14.5327 13.4035 14.4814 13.3395 14.4166L11.4889 12.57C11.3587 12.4402 11.2855 12.2642 11.2853 12.0806V8.38728C11.2853 8.20362 11.3584 8.02748 11.4886 7.89761C11.6187 7.76774 11.7952 7.69478 11.9793 7.69478C12.1633 7.69478 12.3398 7.76774 12.47 7.89761C12.6001 8.02748 12.6732 8.20362 12.6732 8.38728V11.7944L14.3203 13.4379C14.4502 13.5678 14.5232 13.7438 14.5232 13.9273C14.5232 14.1108 14.4502 14.2868 14.3203 14.4166C14.2562 14.4814 14.1798 14.5327 14.0956 14.5676C14.0114 14.6025 13.921 14.6202 13.8299 14.6198Z"
                                    fill="#667085" />
                            </g>
                        </svg>
                        Withdraw History
                    </a>
                </li> --}}
                                       
                                        <li class="profile-settings-menu-item ">
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
                    <a href="/profile" class="profile-settings-menu-item-link">
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
                <li class="profile-settings-menu-item">
                    <a href="/freelance-setup"
                        class="profile-settings-menu-item-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 12.75C8.83 12.75 6.25 10.17 6.25 7C6.25 3.83 8.83 1.25 12 1.25C15.17 1.25 17.75 3.83 17.75 7C17.75 10.17 15.17 12.75 12 12.75ZM12 2.75C9.66 2.75 7.75 4.66 7.75 7C7.75 9.34 9.66 11.25 12 11.25C14.34 11.25 16.25 9.34 16.25 7C16.25 4.66 14.34 2.75 12 2.75Z"
                                fill="#667085" />
                            <path
                                d="M15.8201 22.7504C15.4401 22.7504 15.0801 22.6103 14.8201 22.3503C14.5101 22.0403 14.3701 21.5904 14.4401 21.1204L14.6301 19.7704C14.6801 19.4204 14.8901 19.0104 15.1401 18.7504L18.68 15.2104C20.1 13.7904 21.3501 14.6004 21.9601 15.2104C22.4801 15.7304 22.7501 16.2903 22.7501 16.8503C22.7501 17.4203 22.4901 17.9503 21.9601 18.4803L18.42 22.0204C18.17 22.2704 17.7501 22.4804 17.4001 22.5304L16.05 22.7203C15.97 22.7403 15.9001 22.7504 15.8201 22.7504ZM20.31 15.9203C20.13 15.9203 19.97 16.0404 19.74 16.2704L16.2001 19.8104C16.1701 19.8404 16.12 19.9403 16.12 19.9803L15.9401 21.2303L17.1901 21.0504C17.2301 21.0404 17.33 20.9904 17.36 20.9604L20.9001 17.4203C21.0601 17.2603 21.2501 17.0303 21.2501 16.8503C21.2501 16.7003 21.1301 16.4904 20.9001 16.2704C20.6601 16.0304 20.48 15.9203 20.31 15.9203Z"
                                fill="#667085" />
                            <path
                                d="M20.9201 19.2203C20.8501 19.2203 20.7801 19.2104 20.7201 19.1904C19.4001 18.8204 18.3501 17.7704 17.9801 16.4504C17.8701 16.0504 18.1001 15.6404 18.5001 15.5304C18.9001 15.4204 19.3101 15.6503 19.4201 16.0503C19.6501 16.8703 20.3001 17.5204 21.1201 17.7504C21.5201 17.8604 21.7501 18.2803 21.6401 18.6703C21.5501 19.0003 21.2501 19.2203 20.9201 19.2203Z"
                                fill="#667085" />
                            <path
                                d="M3.41016 22.75C3.00016 22.75 2.66016 22.41 2.66016 22C2.66016 17.73 6.85018 14.25 12.0002 14.25C13.0902 14.25 14.1702 14.41 15.1802 14.71C15.5802 14.83 15.8002 15.25 15.6802 15.64C15.5602 16.04 15.1402 16.26 14.7502 16.14C13.8702 15.88 12.9502 15.74 12.0002 15.74C7.68018 15.74 4.16016 18.54 4.16016 21.99C4.16016 22.41 3.82016 22.75 3.41016 22.75Z"
                                fill="#667085" />
                        </svg>
                        Account Setup
                    </a>
                </li>
                {{-- <li class="profile-settings-menu-item ">
                    <a href="https://xilancer.xgenious.com/freelancer/profile/identity-verification"
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
                </li>
                <li class="profile-settings-menu-item ">
                    <a href="https://xilancer.xgenious.com/freelancer/profile/-2fa" class="profile-settings-menu-item-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.9984 22.76C10.9084 22.76 9.82844 22.44 8.97844 21.81L4.67844 18.6C3.53844 17.75 2.64844 15.97 2.64844 14.56V7.12C2.64844 5.58 3.77844 3.94 5.22844 3.4L10.2184 1.53C11.2084 1.16 12.7684 1.16 13.7584 1.53L18.7484 3.4C20.1984 3.94 21.3284 5.58 21.3284 7.12V14.55C21.3284 15.97 20.4384 17.74 19.2984 18.59L14.9984 21.8C14.1684 22.44 13.0884 22.76 11.9984 22.76ZM10.7484 2.94L5.75844 4.81C4.90844 5.13 4.15844 6.21 4.15844 7.13V14.56C4.15844 15.51 4.82844 16.84 5.57844 17.4L9.87844 20.61C11.0284 21.47 12.9684 21.47 14.1284 20.61L18.4284 17.4C19.1884 16.83 19.8484 15.51 19.8484 14.56V7.12C19.8484 6.21 19.0984 5.13 18.2484 4.8L13.2584 2.93C12.5784 2.69 11.4184 2.69 10.7484 2.94Z"
                                fill="#667085" />
                            <path
                                d="M10.6622 14.23C10.4722 14.23 10.2822 14.16 10.1322 14.01L8.52219 12.4C8.23219 12.11 8.23219 11.63 8.52219 11.34C8.81219 11.05 9.29219 11.05 9.58219 11.34L10.6622 12.42L14.4322 8.65C14.7222 8.36 15.2022 8.36 15.4922 8.65C15.7822 8.94 15.7822 9.42 15.4922 9.71L11.1922 14.01C11.0422 14.16 10.8522 14.23 10.6622 14.23Z"
                                fill="#667085" />
                        </svg>
                        2 Factor Authentication
                    </a>
                </li> --}}
                <li class="profile-settings-menu-item">
                    <a href="/profile-Details"
                        class="profile-settings-menu-item-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.12 13.5305C12.1 13.5305 12.07 13.5305 12.05 13.5305C12.02 13.5305 11.98 13.5305 11.95 13.5305C9.67998 13.4605 7.97998 11.6905 7.97998 9.51047C7.97998 7.29047 9.78998 5.48047 12.01 5.48047C14.23 5.48047 16.04 7.29047 16.04 9.51047C16.03 11.7005 14.32 13.4605 12.15 13.5305C12.13 13.5305 12.13 13.5305 12.12 13.5305ZM12 6.97047C10.6 6.97047 9.46998 8.11047 9.46998 9.50047C9.46998 10.8705 10.54 11.9805 11.9 12.0305C11.93 12.0205 12.03 12.0205 12.13 12.0305C13.47 11.9605 14.52 10.8605 14.53 9.50047C14.53 8.11047 13.4 6.97047 12 6.97047Z"
                                fill="#667085" />
                            <path
                                d="M12.0001 22.7503C9.31008 22.7503 6.74008 21.7503 4.75008 19.9303C4.57008 19.7703 4.49008 19.5303 4.51008 19.3003C4.64008 18.1103 5.38008 17.0003 6.61008 16.1803C9.59008 14.2003 14.4201 14.2003 17.3901 16.1803C18.6201 17.0103 19.3601 18.1103 19.4901 19.3003C19.5201 19.5403 19.4301 19.7703 19.2501 19.9303C17.2601 21.7503 14.6901 22.7503 12.0001 22.7503ZM6.08008 19.1003C7.74008 20.4903 9.83008 21.2503 12.0001 21.2503C14.1701 21.2503 16.2601 20.4903 17.9201 19.1003C17.7401 18.4903 17.2601 17.9003 16.5501 17.4203C14.0901 15.7803 9.92008 15.7803 7.44008 17.4203C6.73008 17.9003 6.26008 18.4903 6.08008 19.1003Z"
                                fill="#667085" />
                            <path
                                d="M12 22.75C6.07 22.75 1.25 17.93 1.25 12C1.25 6.07 6.07 1.25 12 1.25C17.93 1.25 22.75 6.07 22.75 12C22.75 17.93 17.93 22.75 12 22.75ZM12 2.75C6.9 2.75 2.75 6.9 2.75 12C2.75 17.1 6.9 21.25 12 21.25C17.1 21.25 21.25 17.1 21.25 12C21.25 6.9 17.1 2.75 12 2.75Z"
                                fill="#667085" />
                        </svg>
                        Profile Details
                    </a>
                </li>
                <li class="profile-settings-menu-item">
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
                <li class="profile-settings-menu-item">
                    <a href="/account-delete" class="profile-settings-menu-item-link">
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
                        Account Delete
                    </a>
                </li>
                <li class="profile-settings-menu-item">
                    <a href="/logout" class="profile-settings-menu-item-link">
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
                            <div class="single-profile-settings d-flex flex-wrap align-items-center justify-content-between" id="display_freelancer_profile_photo">
    <div class="single-profile-settings-flex">
        <div class="single-profile-settings-thumb">
                                                <img src="https://xilancer.xgenious.com/assets/uploads/profile/1713787258-6626517ab5fb3.png" alt="profile img">
                                    </div>
        <div class="single-profile-settings-contents">
            <div class="single-profile-settings-contents-upload">
                <div class="single-profile-settings-contents-upload-btn">
                    <span>
                        <svg class="me-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_6531_8660" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                            <rect width="24" height="24" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_6531_8660)">
                            <path d="M18.3415 21.5C18.1482 21.4975 17.9635 21.4197 17.8269 21.2832C17.6902 21.1467 17.6123 20.9623 17.6098 20.7692V18.5769H15.4146C15.2206 18.5769 15.0345 18.4999 14.8972 18.3629C14.76 18.2258 14.6829 18.04 14.6829 17.8462C14.6829 17.6523 14.76 17.4665 14.8972 17.3294C15.0345 17.1924 15.2206 17.1154 15.4146 17.1154H17.6098V14.9231C17.6098 14.7293 17.6868 14.5434 17.8241 14.4064C17.9613 14.2693 18.1474 14.1923 18.3415 14.1923C18.5355 14.1923 18.7216 14.2693 18.8589 14.4064C18.9961 14.5434 19.0732 14.7293 19.0732 14.9231V17.1154H21.2683C21.4624 17.1154 21.6485 17.1924 21.7857 17.3294C21.9229 17.4665 22 17.6523 22 17.8462C22 18.04 21.9229 18.2258 21.7857 18.3629C21.6485 18.4999 21.4624 18.5769 21.2683 18.5769H19.0732V20.7692C19.0706 20.9623 18.9927 21.1467 18.8561 21.2832C18.7194 21.4197 18.5347 21.4975 18.3415 21.5ZM11.5122 19.5513H4.68293C3.97295 19.5462 3.2935 19.2622 2.79146 18.7608C2.28941 18.2594 2.00511 17.5809 2 16.8718V8.10258C2.00511 7.39352 2.28941 6.71494 2.79146 6.21354C3.2935 5.71214 3.97295 5.4282 4.68293 5.4231H5.65854C5.98118 5.42055 6.28989 5.29142 6.51804 5.06356C6.7462 4.8357 6.8755 4.52739 6.87805 4.20515C6.87675 3.98087 6.92003 3.75856 7.00537 3.5511C7.09072 3.34364 7.21643 3.15516 7.37522 2.99657C7.53402 2.83797 7.72275 2.71242 7.93048 2.62719C8.1382 2.54196 8.3608 2.49874 8.58537 2.50003H14.439C14.6636 2.49874 14.8862 2.54196 15.0939 2.62719C15.3016 2.71242 15.4904 2.83797 15.6492 2.99657C15.808 3.15516 15.9337 3.34364 16.019 3.5511C16.1044 3.75856 16.1476 3.98087 16.1463 4.20515C16.1489 4.52739 16.2782 4.8357 16.5063 5.06356C16.7345 5.29142 17.0432 5.42055 17.3659 5.4231H18.3415C19.0514 5.4282 19.7309 5.71214 20.2329 6.21354C20.735 6.71494 21.0193 7.39352 21.0244 8.10258V11.5128C21.0244 11.7066 20.9473 11.8925 20.8101 12.0296C20.6729 12.1666 20.4867 12.2436 20.2927 12.2436C20.0986 12.2436 19.9125 12.1666 19.7753 12.0296C19.6381 11.8925 19.561 11.7066 19.561 11.5128V8.10258C19.5584 7.78035 19.4291 7.47204 19.201 7.24418C18.9728 7.01632 18.6641 6.88718 18.3415 6.88464H17.3659C16.6559 6.87954 15.9764 6.5956 15.4744 6.0942C14.9723 5.5928 14.688 4.91422 14.6829 4.20515C14.6843 4.1728 14.6789 4.14051 14.6672 4.11033C14.6554 4.08015 14.6375 4.05274 14.6146 4.02984C14.5916 4.00694 14.5642 3.98905 14.534 3.9773C14.5038 3.96554 14.4714 3.96019 14.439 3.96156H8.58537C8.55297 3.96019 8.52064 3.96554 8.49042 3.9773C8.4602 3.98905 8.43276 4.00694 8.40983 4.02984C8.3869 4.05274 8.36898 4.08015 8.35722 4.11033C8.34545 4.14051 8.34008 4.1728 8.34146 4.20515C8.33636 4.91422 8.05205 5.5928 7.55001 6.0942C7.04796 6.5956 6.36851 6.87954 5.65854 6.88464H4.68293C4.36028 6.88718 4.05157 7.01632 3.82342 7.24418C3.59527 7.47204 3.46597 7.78035 3.46341 8.10258V16.8718C3.46597 17.194 3.59527 17.5023 3.82342 17.7302C4.05157 17.9581 4.36028 18.0872 4.68293 18.0897H11.5122C11.7063 18.0897 11.8924 18.1667 12.0296 18.3038C12.1668 18.4408 12.2439 18.6267 12.2439 18.8205C12.2439 19.0143 12.1668 19.2002 12.0296 19.3372C11.8924 19.4743 11.7063 19.5513 11.5122 19.5513ZM11.5122 15.6539C10.7891 15.6532 10.0824 15.4386 9.48131 15.037C8.88025 14.6355 8.41183 14.0651 8.13519 13.3978C7.85854 12.7306 7.7861 11.9964 7.927 11.2881C8.0679 10.5797 8.41582 9.92895 8.92683 9.41797C9.62246 8.75218 10.5487 8.38048 11.5122 8.38048C12.4757 8.38048 13.4019 8.75218 14.0976 9.41797C14.6086 9.92895 14.9565 10.5797 15.0974 11.2881C15.2383 11.9964 15.1658 12.7306 14.8892 13.3978C14.6126 14.0651 14.1441 14.6355 13.5431 15.037C12.942 15.4386 12.2353 15.6532 11.5122 15.6539ZM11.5122 9.80771C11.0783 9.80809 10.6543 9.93687 10.2937 10.1778C9.93303 10.4187 9.65197 10.761 9.48599 11.1613C9.32 11.5617 9.27654 12.0022 9.36108 12.4272C9.44562 12.8522 9.65437 13.2427 9.96098 13.5492C10.3808 13.9439 10.9356 14.1636 11.5122 14.1636C12.0887 14.1636 12.6436 13.9439 13.0634 13.5492C13.2691 13.3472 13.432 13.1059 13.5426 12.8398C13.6532 12.5737 13.7092 12.2881 13.7073 12C13.7047 11.4192 13.4734 10.8627 13.0634 10.4508C12.8611 10.2454 12.6195 10.0827 12.3531 9.97219C12.0866 9.86173 11.8007 9.8058 11.5122 9.80771Z" fill="#fff"/>
                            </g>
                        </svg>
                        Change Photo
                    </span>
                    <input type="file" name="image" id="profile_photo" class="upload-file">
                </div>
            </div>
            <p class="single-profile-settings-contents-para mt-2">Profile photo recomended size 80x80 pixels
            </p>
        </div>
    </div>
    <div class="btn-wrapper">
                <a href="javascript:void(0)" class="btn-profile btn-outline-1 open_freelancer_feedback_modal" data-bs-target="#feedbackModal"
            data-bs-toggle="modal"
           data-feedback-title="Outstanding Platform"
           data-feedback-description="I am working on Freelancer Platform since 2018 and I was amazed by the outcomes I got in my life Thanks to them for freeing me from 9-5 Now I can proudly say it is a outstanding platform"
           data-feedback-rating="5"
        >
            Feedback
        </a>
    </div>
</div>
                            <div class="single-profile-settings" id="display_freelancer_profile_info">
    <div class="single-profile-settings-header">
        <div class="single-profile-settings-header-flex">
            <h4 class="single-profile-settings-header-title">Personal Information</h4> <br><br>
<p></p>
            <div class="btn-wrapper">
                <a href="javascript:void(0)" class="btn-profile btn-outline-gray profile-click"><i
                        class="fa-regular fa-edit"></i>Edit Info</a>
            </div>
        </div>
    </div>
    <div class="single-profile-settings-inner profile-border-top">
        <div class="single-profile-settings-form custom-form">
            <div class="single-flex-input">
                <div class="single-input">
                    <label for="title" class="label-title">First Name</label>
                    <input value="William" class="form-control" readonly
                        disabled>
                </div>
                <div class="single-input">
                    <label for="title" class="label-title">Last Name</label>
                    <input value="Montag" class="form-control" readonly
                        disabled>
                </div>
            </div>
            <div class="single-input">
                <label for="title" class="label-title">Your Email</label>
                <input value="ali.abdulah.sd@gmail.com" class="form-control" readonly disabled>
            </div>
            <div class="single-input">
                <label for="title" class="label-title">Your Country</label>
                <input value="Pakistan"
                    class="form-control" readonly disabled>
            </div>
                        <div class="single-input">
                <label for="title" class="label-title">Your State</label>
                <input value="Lahore" class="form-control"
                    readonly disabled>
            </div>

                <div class="single-input">
                    <label for="title" class="label-title">Your City</label>
                    <input value="Dhanmondi" class="form-control"
                           readonly disabled>
                </div>
                            <div class="single-input">
                    <label for="title" class="label-title">Your Experience Level</label>
                    <input value="Senior" class="form-control"
                           readonly disabled>
                </div>
        </div>
    </div>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Profile Settings area end -->
       <!-- Profile Settings Popup Starts -->
<div class="popup-overlay"></div>
<form id="edit_profile_form" method="post">
    <input type="hidden" name="_token" value="QBz2I8EiJyZZ9UnkKlvqzITV597a2ERjYuMUclOi" autocomplete="off">    <div class="popup-fixed profile-popup">
        <div class="popup-contents">
            <span class="popup-contents-close popup-close"> <i class="fas fa-times"></i> </span>
            <h2 class="popup-contents-title"> Personal Information </h2>
            <div class="alert alert-warning " role="alert">
    <p>Notice: Except state and city all fields are required. Your identity verify documents info must be similar your personal info.</p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
</div>
            <div class="popup-contents-form custom-form profile-border-top">
                <div class="error_msg_container"></div>
                <div class="single-flex-input">
                    <div class="single-input mb-3">
    <label for="first_name" class="label-title">First Name</label>
    <input type="text" name="first_name" id="first_name" value="William" step="" placeholder="Type First Name" class="form-control" >
</div>
                    <div class="single-input mb-3">
    <label for="last_name" class="label-title">Last Name</label>
    <input type="text" name="last_name" id="last_name" value="Montag" step="" placeholder="Type Last Name" class="form-control" >
</div>
                </div>
                <div class="single-flex-input">
                    <div class="single-input">
    <label for="title" class="label-title">Your Email</label>
    <input type="email" name="email" id="email" value="ali.abdulah.sd@gmail.com" placeholder="Type Email" class="form-control" >
</div>
                </div>
                <div class="single-flex-input">
                    <div class="single-input">
    <label class="label-title">Select Your Country</label>
    <select name="" id="country_id" class="form-control country_select2">
        <option value="">Select Country</option>
                    <option value="1" >Bangladesh</option>
                    <option value="2" >Argentina</option>
                    <option value="6" >United Kingdom</option>
                    <option value="7" >United States</option>
                    <option value="8" >Malayesia</option>
                    <option value="9" >Canada</option>
                    <option value="10" >Soudi Arabia</option>
                    <option value="11"  selected >Pakistan</option>
                    <option value="12" >Australia</option>
                    <option value="13" >Norway</option>
                    <option value="14" >India</option>
            </select>
    <span class="country_info"></span>
</div>
                </div>
                                <div class="single-flex-input">
                    <div class="single-input">
    <label class="label-title">Select Your State</label>
    <select name="" id="state_id" class="form-control get_country_state state_select2">
        <option value="">Select State</option>
                                    <option value="20"  selected >Lahore</option>
                        </select>
    <span class="state_info"></span>
</div>
                    <div class="single-input">
    <label class="label-title">Select Your City</label>
    <select name="" id="city_id" class="form-control get_state_city city_select2">
        <option value="">Select City</option>
                                </select>
    <span class="city_info"></span>
</div>
                </div>
                                <div class="single-flex-input">
                    <div class="single-flex-input">
                        <div class="single-input">
                            <label class="label-title">Select Experience Level</label>
                            <select name="level" id="level" class="form-control">
                                <option value="">Select</option>
                                <option value="junior" >Junior</option>
                                <option value="midlevel"  >Mid Level</option>
                                <option value="senior"   selected >Senior</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup-contents-btn flex-btn profile-border-top justify-content-end">
                <a href="javascript:void(0)" class="btn-profile btn-outline-gray btn-hover-danger color-one popup-close"> <i class="las la-arrow-left"></i> Cancel </a>
                <button type="submit" class="btn-profile btn-bg-1">Update Profile</button>
            </div>
        </div>
    </div>
</form>
</div>
<!-- Profile Settings Popup Ends -->
       <form id="profile_photo_change" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="QBz2I8EiJyZZ9UnkKlvqzITV597a2ERjYuMUclOi" autocomplete="off">    <!-- Modal -->
    <div class="modal fade" id="profilePhotoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Profile Photo Preview</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="error_msg_container"></div>
                    <div class="modal-body file-wrapper text-center">
                        <img src="" alt="" class="profile_photo_preview">
                        <input type="file" name="image" class="d-none profile_photo_upload">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
       <!-- Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Submit Feedback</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" id="reviewForm">
                <input type="hidden" name="_token" value="QBz2I8EiJyZZ9UnkKlvqzITV597a2ERjYuMUclOi" autocomplete="off">                <div class="modal-body">
                    <div class="error-message"></div>
                    <div class="single-input">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter title">
                    </div>
                    <div class="single-input mt-3">
                        <label>Description</label>
                        <textarea cols="30" rows="5" name="description" class="form-control"
                            placeholder="Enter description"></textarea>
                    </div>
                    <div class="single-input mt-3">
                        <label>Rating</label>
                        <input type="number" name="rating" class="form-control"
                            placeholder="Enter rating">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary submit_your_review">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
    </main>
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
<script> $.ajaxSetup({headers: {'X-CSRF-TOKEN': 'QBz2I8EiJyZZ9UnkKlvqzITV597a2ERjYuMUclOi'} }) </script>

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
                    url:"https://xilancer.xgenious.com/freelancer/notification/read",
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
    <script src="https://xilancer.xgenious.com/assets/common/js/select2.min.js"></script>
    <script>
    (function($){
        "use strict";
        $(document).ready(function(){
            $('.country_select2').select2({
                dropdownParent: $('.popup-fixed')
            });
            $('.state_select2').select2({
                dropdownParent: $('.popup-fixed')
            });
            $('.city_select2').select2({
                dropdownParent: $('.popup-fixed')
            });


            // profile photo change
            document.querySelector('#profile_photo').addEventListener('change', function() {
                $("#profilePhotoModal").modal('show');
                if (this.files && this.files[0]) {
                    let img = document.querySelector('.profile_photo_preview');
                    img.onload = () => {
                        URL.revokeObjectURL(img.src);  // no longer needed, free memory
                    }

                    img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                    document.querySelector(".profile_photo_upload").files = this.files;
                    document.querySelector(".profile_photo_upload").value = this.value;
                }
            });

            //change profile photo
            $(document).on('submit','#profile_photo_change',function(e){
                e.preventDefault();
                $.ajax({
                    url:"https://xilancer.xgenious.com/freelancer/profile/edit-profile-photo",
                    method:'post',
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success:function(){
                        $('#profilePhotoModal').modal('hide');
                        $('#display_freelancer_profile_photo').load(location.href + " #display_freelancer_profile_photo");
                        toastr_success_js("Profile Photo Successfully Changed");
                    },
                    error: function (err) {
                        let error = err.responseJSON;
                        $('.error_msg_container').html('');
                        $.each(error.errors, function (index, value) {
                            $('.error_msg_container').append('<p class="text-danger">'+value+'<p>');
                        });
                    }
                })
            });

            // change country and get state
            $('#country_id').on('change', function() {
                let country = $(this).val();
                $.ajax({
                    method: 'post',
                    url: "https://xilancer.xgenious.com/get-state",
                    data: {
                        country: country
                    },
                    success: function(res) {
                        if (res.status == 'success') {
                            let all_options = "<option value=''>Select State</option>";
                            let all_state = res.states;
                            $.each(all_state, function(index, value) {
                                all_options += "<option value='" + value.id +
                                    "'>" + value.state + "</option>";
                            });
                            $(".get_country_state").html(all_options);
                            $(".state_info").html('');
                            if(all_state.length <= 0){
                                $(".state_info").html('<span class="text-danger"> No state found for selected country! <span>');
                            }
                        }
                    }
                })
            })

            // change state and get city
            $('#state_id').on('change', function() {
                let state = $(this).val();
                $.ajax({
                    method: 'post',
                    url: "https://xilancer.xgenious.com/get-city",
                    data: {
                        state: state
                    },
                    success: function(res) {
                        if (res.status == 'success') {
                            let all_options = "<option value=''>Select City</option>";
                            let all_city = res.cities;
                            $.each(all_city, function(index, value) {
                                all_options += "<option value='" + value.id +
                                    "'>" + value.city + "</option>";
                            });
                            $(".get_state_city").html(all_options);

                            $(".city_info").html('');
                            if(all_city.length <= 0){
                                $(".city_info").html('<span class="text-danger"> No city found for selected state! <span>');
                            }
                        }
                    }
                })
            })

            //update profile
            $(document).on('submit','#edit_profile_form',function(e){
                e.preventDefault();
                let first_name = $('#first_name').val();
                let last_name = $('#last_name').val();
                let email = $('#email').val();
                let country = $('#country_id').val();
                let state = $('#state_id').val();
                let city = $('#city_id').val();
                let level = $('#level').val();

                if(first_name == '' || last_name == '' || email == '' || country == '' || level == ''){
                    toastr_warning_js('Except state and city all fields required !');
                    return false;
                }else{
                    $.ajax({
                        url: "https://xilancer.xgenious.com/freelancer/profile/edit-profile",
                        type: 'post',
                        data: {
                            first_name: first_name,
                            last_name:last_name,
                            email:email,
                            country:country,
                            state:state,
                            city:city,
                            level:level,
                        },
                        success: function(res){
                            if(res.status == 'ok'){
                                $('.popup-fixed, .popup-overlay').removeClass('popup-active');
                                $('#display_freelancer_profile_info').load(location.href + " #display_freelancer_profile_info");
                                toastr_success_js("Profile Info Successfully Updated");
                            }
                        },
                        error: function (err) {
                            let error = err.responseJSON;
                            $('.error_msg_container').html('');
                            $.each(error.errors, function (index, value) {
                                $('.error_msg_container').append('<p class="text-danger">'+value+'<p>');
                            });
                        }
                    });
                }
            })


            //open feedback modal
            $(document).on('click','.open_freelancer_feedback_modal',function(){
                $('#reviewForm input[name="title"]').val($(this).data('feedback-title'));
                $('#reviewForm textarea[name="description"]').val($(this).data('feedback-description'));
                $('#reviewForm input[name="rating"]').val($(this).data('feedback-rating'));
            });

            //submit review
            $(document).on('click', '.submit_your_review', function(e){
                e.preventDefault();
                let title = $('#reviewForm input[name="title"]').val();
                let description = $('#reviewForm textarea[name="description"]').val();
                let rating = $('#reviewForm input[name="rating"]').val();
                let erContainer = $(".error-message");
                erContainer.html('');
                $.ajax({
                    url:"https://xilancer.xgenious.com/freelancer/profile/submit/feedback",
                    data:{title:title,description:description,rating:rating},
                    method:'POST',
                    error:function(res){
                        let errors = res.responseJSON;
                        erContainer.html('<div class="alert alert-danger"></div>');
                        $.each(errors.errors, function(index,value){
                            erContainer.find('.alert.alert-danger').append('<p>'+value+'</p>');
                        });
                    },
                    success: function(res){
                        if(res.status=='success'){
                            toastr_success_js("Thanks to Feedback Us.")
                            $('#reviewForm')[0].reset();
                            $("#feedbackModal").modal('hide');
                            location.reload();
                        }
                        if(res.status == 'failed'){
                            erContainer.html('<div class="alert alert-danger">'+res.msg+'</div>');
                        }
                    }

                });
            });

        });
    }(jQuery));

    // todo toastr warning
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
    //toastr delete
    function toastr_delete_js(msg){
        Command: toastr["error"](msg, "Delete !")
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
