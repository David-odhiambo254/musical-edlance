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
        <link rel="stylesheet" href="https://xilancer.xgenious.com/assets/backend/css/summernote-lite.min.css">
    <link rel="stylesheet" href="https://xilancer.xgenious.com/assets/common/css/select2.min.css">

            <title>Create Project</title>
                            
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
                <a href="/freelancelog" class="logo">
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
                                                    <a href="#"
                               class="bookmark-item-para"><span class="bookmark-header-icon"><i class="fa-regular fa-bookmark"></i></span>
                                Virtual Spanish assistant, Customer support over the phone
                            </a>
                                                <span class="bookmark-item-close remove_from_bookmark"
                              data-identity = "8"
                              data-route = "#">
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
                        {{-- <a href="https://xilancer.xgenious.com/freelancer/live/all-offers"
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
                        </a>
                        <a href="https://xilancer.xgenious.com/freelancer/proposal/all"
                           class="navbar-author-wrapper-list-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.6201 9.62012H12.3701C11.9601 9.62012 11.6201 9.28012 11.6201 8.87012C11.6201 8.46012 11.9601 8.12012 12.3701 8.12012H17.6201C18.0301 8.12012 18.3701 8.46012 18.3701 8.87012C18.3701 9.28012 18.0401 9.62012 17.6201 9.62012Z" fill="#667085"/>
                                <path d="M7.12006 10.3803C6.93006 10.3803 6.74006 10.3103 6.59006 10.1603L5.84006 9.41031C5.55006 9.12031 5.55006 8.64031 5.84006 8.35031C6.13006 8.06031 6.61006 8.06031 6.90006 8.35031L7.12006 8.57031L8.84006 6.85031C9.13006 6.56031 9.61006 6.56031 9.90006 6.85031C10.1901 7.14031 10.1901 7.62031 9.90006 7.91031L7.65006 10.1603C7.51006 10.3003 7.32006 10.3803 7.12006 10.3803Z" fill="#667085"/>
                                <path d="M17.6201 16.6201H12.3701C11.9601 16.6201 11.6201 16.2801 11.6201 15.8701C11.6201 15.4601 11.9601 15.1201 12.3701 15.1201H17.6201C18.0301 15.1201 18.3701 15.4601 18.3701 15.8701C18.3701 16.2801 18.0401 16.6201 17.6201 16.6201Z" fill="#667085"/>
                                <path d="M7.12006 17.3803C6.93006 17.3803 6.74006 17.3103 6.59006 17.1603L5.84006 16.4103C5.55006 16.1203 5.55006 15.6403 5.84006 15.3503C6.13006 15.0603 6.61006 15.0603 6.90006 15.3503L7.12006 15.5703L8.84006 13.8503C9.13006 13.5603 9.61006 13.5603 9.90006 13.8503C10.1901 14.1403 10.1901 14.6203 9.90006 14.9103L7.65006 17.1603C7.51006 17.3003 7.32006 17.3803 7.12006 17.3803Z" fill="#667085"/>
                                <path d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z" fill="#667085"/>
                            </svg>
                            My proposals
                        </a> --}}
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
                        <a href="/"
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
                    <h4 class="breadcrumb-contents-title"> Create Project </h4>
                    <ul class="breadcrumb-contents-list list-style-none">
                        <li class="breadcrumb-contents-list-item"> <a href="#" class="breadcrumb-contents-list-item-link"> Home  </a> </li>
                        <li class="breadcrumb-contents-list-item"> Create Project </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Account Setup area Starts -->
    <div class="account-area section-bg-2 pat-100 pab-100">
        <div class="container">
            <div class="setup-wrapper create-project-wrap">
                <div class="setup-wrapper-flex">
                    <div class="setup-wrapper-left create-project">
    <div class="single-setup">
        <div class="single-setup-request">
            <ul class="single-setup-request-list list-style-none">
                <li class="single-setup-request-list-item running">
                    <span class="single-setup-request-list-item-number"> 1 </span>
                    <div class="single-setup-request-list-item-contents">
                        <h5 class="single-setup-request-list-item-contents-title">Project Intro</h5>
                        <p class="single-setup-request-list-item-contents-para">Add title &amp; description to your project</p>
                    </div>
                </li>
                <li class="single-setup-request-list-item">
                    <span class="single-setup-request-list-item-number"> 2 </span>
                    <div class="single-setup-request-list-item-contents">
                        <h5 class="single-setup-request-list-item-contents-title">Upload gallery</h5>
                        <p class="single-setup-request-list-item-contents-para">Add some images to your project</p>
                    </div>
                </li>
                <li class="single-setup-request-list-item">
                    <span class="single-setup-request-list-item-number"> 3 </span>
                    <div class="single-setup-request-list-item-contents">
                        <h5 class="single-setup-request-list-item-contents-title">Packages &amp; charge</h5>
                        <p class="single-setup-request-list-item-contents-para">Add what you offer &amp; your charges</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
                    <div class="create-project-wrapper">
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
    </style>

                         <form action="" id="submit_create_project_form" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="QBz2I8EiJyZZ9UnkKlvqzITV597a2ERjYuMUclOi" autocomplete="off">                             <input type="hidden" name="basic_title" id="set_basic_title">
                             <input type="hidden" name="standard_title" id="set_standard_title">
                             <input type="hidden" name="premium_title" id="set_premium_title">

                            <!-- Project Introduction Start -->
<div class="setup-wrapper-contents active">
    <div class="create-project-wrapper-item">
        <div class="create-project-wrapper-item-top profile-border-bottom">
            <h4 class="create-project-wrapper-title">Project Intro</h4>
        </div>
        <div class="create-project-intro-contents">
            <div class="create-project-intro-contents-form custom-form">
                <div class="single-input mt-3">
    <label class="label-title">Select Category</label>
    <select name="category" id="category" class="form-control category_select2">
        <option value="">Select Category</option>
                    <option value="1">Design and Creative</option>
                    <option value="2">Website Development</option>
                    <option value="3">Customer Service</option>
                    <option value="4">Mobile App Development</option>
                    <option value="5">Education &amp; Teachings</option>
                    <option value="9">Research</option>
                    <option value="11">Digital Marketing</option>
                    <option value="13">Writing and Translation</option>
                    <option value="18">Website Design</option>
            </select>
</div>

                <div class="single-input">
                    <label class="label-title">Select Subcategory</label>
                    <select name="subcategory[]" id="subcategory" class="form-control get_subcategory subcategory_select2" multiple>
                    </select>
                    <span id="subcategory_info"></span>
                </div>


               <div class="single-input mb-0">
    <label for="project_title" class="label-title">What are you offering to clients?</label>
    <input type="text" name="project_title" id="project_title" value="" step="" placeholder="You’ll get a Mobile application designed" class="form--control" >
</div>
                <span id="project_title_char_length_check"></span>
                <div class="single-input mb-0">
    <label for="slug" class="d-none display_label_title">Slug</label>
    <input type="text" name="slug" id="slug" value="" step="" placeholder="Slug" class="form--control d-none" >
</div>
                <div class="mb-4">
                    <strong>Slug:</strong>
                    <span class="full-slug-show"></span>
                    <span class="edit_project_slug"><i class="fas fa-edit"></i></span>
                </div>


                <div class="single-input mt-3">
    <label for="" class="label-title">Write a description about your service</label>
    <textarea class="description" name="project_description" id="project_description"></textarea>
</div>
                <span id="project_description_char_length_check"></span>

                <div class="single-input mb-0">
    <label for="meta_title" class="label-title">Meta Title - ideal length is 50–60 characters (optional)</label>
    <input type="text" name="meta_title" id="meta_title" value="" step="" placeholder="Enter meta title" class="form--control" >
</div>

                <div class="single-input">
                    <label class="label-title">Meta Description - ideal length is 150-160 characters (optional)</label>
                    <textarea name="meta_description" id="meta_description" class="form-message" cols="30" rows="3" placeholder="Enter meta description"></textarea>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Project Introduction Ends -->
                            <!-- Upload Gallery Start -->
<div class="setup-wrapper-contents">
    <div class="create-project-wrapper-item">
        <div class="create-project-wrapper-item-top profile-border-bottom">
            <h4 class="create-project-wrapper-title">Upload Project Image </h4>
        </div>
        <div class="create-project-wrapper-upload">
            <div class="create-project-wrapper-upload-browse center-text radius-10">
                <img src="" alt="" class="project_photo_preview">
                <span class="create-project-wrapper-upload-browse-icon mt-3">
                    <i class="fa-solid fa-image"></i>
                </span>
                <span class="create-project-wrapper-upload-browse-para"> Drag and drop or Click to browse file </span>

                <input class="upload-gallery" type="file" name="image" id="upload_project_photo">
            </div>
            <p class="mt-3"><strong>info:</strong> recommended dimensions 1770x960 pixels.Drag and drop single file only</p>
        </div>
    </div>
</div>
<!-- Upload Gallery Ends -->
                            <!-- Package & Charge Start -->
<div class="setup-wrapper-contents">
    <div class="create-project-wrapper-item">
        <div class="create-project-wrapper-item-top profile-border-bottom">
            <h4 class="create-project-wrapper-title"> Package &amp; Charge </h4>
            <div class="custom_switch_wrapper d-flex align-items-center gap-2">
                <span>Enable/Disable package</span>
                <label class="custom_switch">
                    <input class="custom-switch" type="checkbox" name="offer_packages_available_or_not" id="offer_packages_available_or_not" value="1" checked>
                    <span class="switch-label slider round" for="offer_packages_available_or_not"></span>
                </label>
            </div>
        </div>
        <div class="package-contents">
            <div class="package-table">
                <table class="table table-bordered table-responsive create_project_table">
                    <thead>
                    <tr>
                        <th class="package-head">
                        </th>
                        <th class="package-head">
                            <div class="package-head-flex flex-between align-items-center">
                                <span class="package-head-title" id="basic_title">Basic</span>
                                <span class="package-head-edit"></span>
                            </div>
                        </th>
                        <th class="package-head">
                            <div class="package-head-flex flex-between align-items-center">
                                <span class="package-head-title" id="standard_title">Standard</span>
                                <span class="package-head-edit"></span>
                            </div>
                        </th>
                        <th class="package-head">
                            <div class="package-head-flex flex-between align-items-center">
                                <span class="package-head-title" id="premium_title">Premium</span>
                                <span class="package-head-edit"></span>
                            </div>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="add-rows-parent">
                    <tr>
                        <th>
                            <div class="package-head-left">
                                <span class="package-head-left-title">Revisions</span>
                            </div>
                        </th>
                        <td>
                            <div class="package-field">
                                <div class="package-select">
                                    <select class="form-control" name="basic_revision" id="basic_revision">
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                    <option value="9">9</option>
                                                                                    <option value="10">10</option>
                                                                                <option value="1000">Unlimited</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="package-field">
                                <div class="package-select">
                                    <select class="form-control disabled_or_not" name="standard_revision" id="standard_revision">
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                    <option value="9">9</option>
                                                                                    <option value="10">10</option>
                                                                                <option value="1000">Unlimited</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="package-field">
                                <div class="package-select">
                                    <select class="form-control disabled_or_not" name="premium_revision" id="premium_revision">
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                    <option value="9">9</option>
                                                                                    <option value="10">10</option>
                                                                                <option value="1000">Unlimited</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div class="package-head-left">
                                <span class="package-head-left-title">Delivery time</span>
                            </div>
                        </th>
                        <td>
                            <div class="package-select">
                                <select class="form-control" name="basic_delivery" id="basic_delivery">
                                    <option value="1 Days">1 Days</option>
                                    <option value="2 Days">2 Days</option>
                                    <option value="3 Days">3 Days</option>
                                    <option value="Less than a week">Less than a Week</option>
                                    <option value="Less than a month">Less than a month</option>
                                    <option value="Less than 2 month">Less than 2 month</option>
                                    <option value="Less than 3 month">Less than 3 month</option>
                                    <option value="More than 3 month">More than 3 month</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <select class="form-control disabled_or_not" name="standard_delivery" id="standard_delivery">
                                <option value="1 Days">1 Days</option>
                                <option value="2 Days">2 Days</option>
                                <option value="3 Days">3 Days</option>
                                <option value="Less than a week">Less than a Week</option>
                                <option value="Less than a month">Less than a month</option>
                                <option value="Less than 2 month">Less than 2 month</option>
                                <option value="Less than 3 month">Less than 3 month</option>
                                <option value="More than 3 month">More than 3 month</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control disabled_or_not" name="premium_delivery" id="premium_delivery">
                                <option value="1 Days">1 Days</option>
                                <option value="2 Days">2 Days</option>
                                <option value="3 Days">3 Days</option>
                                <option value="Less than a week">Less than a Week</option>
                                <option value="Less than a month">Less than a month</option>
                                <option value="Less than 2 month">Less than 2 month</option>
                                <option value="Less than 3 month">Less than 3 month</option>
                                <option value="More than 3 month">More than 3 month</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="append-include">

                        <th>
                            <div class="package-head-left">
                                <div class="package-head-left-flex flex-column">
                                    <input class="form-control checkbox_or_numeric_title" type="text" name="checkbox_or_numeric_title[]" placeholder="Enter Title">
                                    <div class="text-danger validation-error"></div>
                                </div>
                                <div class="package-field">
                                    <div class="package-field-select">
                                        <select class="form-control checkbox_or_numeric_select" name="checkbox_or_numeric_select[]">
                                            <option value="checkbox">Check Boxes</option>
                                            <option value="numeric">Numeric</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </th>

                        <td>
                            <input name="title[basic]" type="checkbox" class="check-input" value="on" checked>
                        </td>
                        <td>
                            <input name="title[standard]" type="checkbox" class="check-input disabled_or_not" value="on" checked>
                        </td>
                        <td>
                            <input name="title[premium]" type="checkbox" class="check-input disabled_or_not" value="on" checked>
                            <div class="package-button-wrapper">
                                <div class="package-field-icon add-rows">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                                <div class="package-field-icon remove-rows remove-icon">
                                    <i class="fa-solid fa-minus"></i>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="delivery_charge_amount">
                        <th>
                            <div class="package-head-left">
                                <div class="package-head-left-flex">
                                    <span class="package-head-left-title">Charges</span>
                                </div>
                            </div>
                        </th>
                        <td>
                            <div class="package-field">
                                <div class="package-field-price">
                                    <div class="package-field-price-flex flex-between">
                                        <div class="package-field-price-main">
                                            <h5 class="package-field-price-main-title">
                                                <span class="basic_regular_charge">$50.00</span>
                                                <span class="basic_discount_charge"><s>$40.00</s></span>
                                            </h5>
                                        </div>
                                        <div class="package-field-price-edit click-edit-basic-price">
                                            <img src="https://xilancer.xgenious.com/assets/static/icons/edit_color.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="package-field">
                                <div class="package-field-price">
                                    <div class="package-field-price-flex flex-between">
                                        <div class="package-field-price-main">
                                            <h5 class="package-field-price-main-title">
                                                <span class="standard_regular_charge">$60.00</span>
                                                <span class="standard_discount_charge"><s>$50.00</s></span>
                                            </h5>
                                        </div>
                                        <div class="package-field-price-edit click-edit-standard-price">
                                            <img src="https://xilancer.xgenious.com/assets/static/icons/edit_color.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="package-field">
                                <div class="package-field-price">
                                    <div class="package-field-price-flex flex-between">
                                        <div class="package-field-price-main">
                                            <h5 class="package-field-price-main-title">
                                                <span class="premium_regular_charge">$70.00 </span>
                                                <span class="premium_discount_charge"><s>$60.00</s></span>
                                            </h5>
                                        </div>
                                        <div class="package-field-price-edit click-edit-premium-price">
                                            <img src="https://xilancer.xgenious.com/assets/static/icons/edit_color.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="popup-overlay"></div>

<!-- Basic Popup start -->
<div class="popup-fixed price-popup-basic-charge">
    <div class="popup-contents">
        <span class="popup-contents-close popup-close"> <i class="fas fa-times"></i> </span>
        <h2 class="popup-contents-title">Set Charge</h2>
        <div class="popup-contents-form custom-form">
            <div class="single-input single-input-icon">
                <label class="label-title"> Regular Charge </label>
                <input type="number" name="basic_regular_charge" id="basic_regular_charge" class="form--control" value="50">
                <span class="input-icon">USD</span>
            </div>
            <div class="single-input single-input-icon">
                <label class="label-title">Discount Charge(Optional)</label>
                <input type="number" name="basic_discount_charge" id="basic_discount_charge" class="form--control" value="40">
                <span class="input-icon">USD</span>
            </div>
        </div>
        <div class="popup-contents-btn flex-btn justify-content-end profile-border-top">
            <a href="javascript:void(0)" class="btn-profile btn-outline-gray btn-hover-danger popup-close"> <i class="las la-arrow-left"></i>Cancel</a>
            <a href="javascript:void(0)" class="btn-profile btn-bg-1 basic_price_setup">Set Price</a>
        </div>
    </div>
</div>

<!-- Standard Popup start -->
<div class="popup-fixed price-popup-standard-charge">
    <div class="popup-contents">
        <span class="popup-contents-close popup-close"> <i class="fas fa-times"></i> </span>
        <h2 class="popup-contents-title"> Set Charge </h2>
        <div class="popup-contents-form custom-form">
            <div class="single-input single-input-icon">
                <label class="label-title"> Regular Charge </label>
                <input type="text" name="standard_regular_charge" id="standard_regular_charge" class="form--control" value="60">
                <span class="input-icon">USD</span>
            </div>
            <div class="single-input single-input-icon">
                <label class="label-title"> Discount Charge(Optional) </label>
                <input type="text" name="standard_discount_charge" id="standard_discount_charge" class="form--control" value="50">
                <span class="input-icon">USD</span>
            </div>
        </div>
        <div class="popup-contents-btn flex-btn justify-content-end profile-border-top">
            <a href="javascript:void(0)" class="btn-profile btn-outline-gray btn-hover-danger popup-close"> <i class="las la-arrow-left"></i>Cancel</a>
            <a href="javascript:void(0)" class="btn-profile btn-bg-1 standard_price_setup">Set Price</a>
        </div>
    </div>
</div>

<!-- Premium Popup start -->
<div class="popup-fixed price-popup-premium-charge">
    <div class="popup-contents">
        <span class="popup-contents-close popup-close"> <i class="fas fa-times"></i> </span>
        <h2 class="popup-contents-title">Set Charge</h2>
        <div class="popup-contents-form custom-form">
            <div class="single-input single-input-icon">
                <label class="label-title">Regular Charge</label>
                <input type="text" name="premium_regular_charge" id="premium_regular_charge" class="form--control" value="70">
                <span class="input-icon">USD</span>
            </div>
            <div class="single-input single-input-icon">
                <label class="label-title">Discount Charge(Optional)</label>
                <input type="text" name="premium_discount_charge" id="premium_discount_charge" class="form--control" value="60">
                <span class="input-icon">USD</span>
            </div>
        </div>
        <div class="popup-contents-btn flex-btn justify-content-end profile-border-top">
            <a href="javascript:void(0)" class="btn-profile btn-outline-gray btn-hover-danger popup-close"> <i class="las la-arrow-left"></i>Cancel</a>
            <a href="javascript:void(0)" class="btn-profile btn-bg-1 premium_price_setup">Set Price</a>
        </div>
    </div>
</div>
<!-- Package & Charge Ends -->
                            <div class="setup-footer">
    <div class="setup-footer-flex">
        <div class="setup-footer-left">
            <a href="javascript:void(0)" class="setup-footer-back previous" id="previous"> Back </a>
        </div>
        <div class="setup-footer-right">
            <a href="javascript:void(0)" class="setup-footer-next next" id="next"> <i class="fas fa-arrow-right"></i> </a>
        </div>
    </div>
</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Account Setup area end -->
</main>
<!-- footer area start -->
<footer class="footer-area footer-fluid white-footer footer-bg-1">
    <div class="container">
        <div class="footer-area-wrapper footer-bg-1">

            <div class="row gx-5 footer-area-top">
                   <div class="col-lg-3 col-sm-6 mt-4">
            <div class="footer-widget widget">
                <div class="footer-contents-logo">
                    <a href="/freelancelog" class="footer-contents-logo-img"> 
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
        <a href="#/"> info@example.co.ke </a> 
     </span>
     <span class="footer-widget-contact-item"> 
         <span> 
         <i class="fas fa-map-marker"></i> 
         </span> 
        <a href="#/"> 8702 Syokimau, Pacific 348 </a> 
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
   <script>
    (function ($) {
        "use strict";

        let validation = {
            project_title_error: false
        };

        pre_next();
        $(document).ready(function () {
            $('.category_select2').select2();
            $('.subcategory_select2').select2();

            let check_package_titles = {
                "status":false
            };

            // change category and get subcategory
            $('#subcategory_info').hide();
            $(document).on('change','#category', function() {
                let category = $(this).val();
                $('#subcategory_info').show();
                $.ajax({
                    method: 'post',
                    url: "https://xilancer.xgenious.com/get-subcategory",
                    data: {
                        category: category
                    },
                    success: function(res) {
                        if (res.status == 'success') {
                            let all_options = "<option value=''>Select Subcategory</option>";
                            let all_subcategories = res.subcategories;
                            $.each(all_subcategories, function(index, value) {
                                all_options += "<option value='" + value.id +
                                    "'>" + value.sub_category + "</option>";
                            });
                            $(".get_subcategory").html(all_options);
                            $("#subcategory_info").html('');
                            if(all_subcategories.length <= 0){
                                $("#subcategory_info").html('<span class="text-danger"> No sub categories found for selected category! <span>');
                            }
                            else {
                                $("#subcategory_info").hide();
                            }
                        }
                    }
                })
            })

            // project title length check
            $('#project_title_char_length_check').hide();
            $('#project_title').on('keydown keyup change', function(){
                $('#project_title_char_length_check').show();
                let title_min_length = 5;
                let title_max_length = 100;
                let project_title_length = $('#project_title').val().length;

                if(project_title_length < title_min_length){
                    $('#project_title_char_length_check').html('<p class="text text-danger">Length is short, minimum '+ title_min_length +' required.</p>');
                }else if(project_title_length > title_max_length){
                    $('#project_title_char_length_check').html('<p class="text text-danger">Length is not valid, maximum '+ title_max_length +' allowed.</p>');
                }else{
                    $('#project_title_char_length_check').html('<p class="text text-success">Length is valid</p>');
                }
            });

            //slug generate
            // function makeSlug(slug){
            //     let finalSlug = slug.replace(/[^a-zA-Z0-9]/g, ' ');
            //     finalSlug = slug.replace(/  +/g, ' ');
            //     finalSlug = slug.replace(/\s/g, '-').toLowerCase().replace(/[^\w-]+/g, '-');
            //     return finalSlug;
            // }

            function transliterateCyrillic(text) {
                const cyrillicToLatinMap = {
                    'А': 'A', 'а': 'a', 'Б': 'B', 'б': 'b', 'В': 'V', 'в': 'v',
                    'Г': 'G', 'г': 'g', 'Д': 'D', 'д': 'd', 'Е': 'E', 'е': 'e',
                    'Ё': 'Yo', 'ё': 'yo', 'Ж': 'Zh', 'ж': 'zh', 'З': 'Z', 'з': 'z',
                    'И': 'I', 'и': 'i', 'Й': 'Y', 'й': 'y', 'К': 'K', 'к': 'k',
                    'Л': 'L', 'л': 'l', 'М': 'M', 'м': 'm', 'Н': 'N', 'н': 'n',
                    'О': 'O', 'о': 'o', 'П': 'P', 'п': 'p', 'Р': 'R', 'р': 'r',
                    'С': 'S', 'с': 's', 'Т': 'T', 'т': 't', 'У': 'U', 'у': 'u',
                    'Ф': 'F', 'ф': 'f', 'Х': 'Kh', 'х': 'kh', 'Ц': 'Ts', 'ц': 'ts',
                    'Ч': 'Ch', 'ч': 'ch', 'Ш': 'Sh', 'ш': 'sh', 'Щ': 'Shch', 'щ': 'shch',
                    'Ъ': '', 'ъ': '', 'Ы': 'Y', 'ы': 'y', 'Ь': '', 'ь': '',
                    'Э': 'E', 'э': 'e', 'Ю': 'Yu', 'ю': 'yu', 'Я': 'Ya', 'я': 'ya',
                    // Additional characters for other Cyrillic-based languages
                    'Ә': 'Ae', 'ә': 'ae', 'Ғ': 'Gh', 'ғ': 'gh', 'Қ': 'Q', 'қ': 'q',
                    'Ң': 'Ng', 'ң': 'ng', 'Ө': 'Oe', 'ө': 'oe', 'Ұ': 'U', 'ұ': 'u',
                    'Ү': 'Ue', 'ү': 'ue', 'Һ': 'H', 'һ': 'h', 'І': 'I', 'і': 'i',
                    // Ukrainian specific
                    'Є': 'Ye', 'є': 'ye', 'І': 'I', 'і': 'i', 'Ї': 'Yi', 'ї': 'yi',
                    'Ґ': 'G', 'ґ': 'g',
                    // Belarusian specific
                    'Ў': 'U', 'ў': 'u',
                    // Serbian specific
                    'Ђ': 'Dj', 'ђ': 'dj', 'Ј': 'J', 'ј': 'j', 'Љ': 'Lj', 'љ': 'lj',
                    'Њ': 'Nj', 'њ': 'nj', 'Ћ': 'C', 'ћ': 'c', 'Џ': 'Dz', 'џ': 'dz',
                    // Macedonian specific
                    'Ѓ': 'Gj', 'ѓ': 'gj', 'Ѕ': 'Dz', 'ѕ': 'dz', 'Ќ': 'Kj', 'ќ': 'kj',
                    'Љ': 'Lj', 'љ': 'lj', 'Њ': 'Nj', 'њ': 'nj', 'Џ': 'Dz', 'џ': 'dz'
                };

                const arabicToLatinMap = {
                    'ا': 'a', 'أ': 'a', 'إ': 'i', 'آ': 'aa', 'ب': 'b', 'ت': 't', 'ث': 'th',
                    'ج': 'j', 'ح': 'h', 'خ': 'kh', 'د': 'd', 'ذ': 'dh', 'ر': 'r', 'ز': 'z',
                    'س': 's', 'ش': 'sh', 'ص': 's', 'ض': 'd', 'ط': 't', 'ظ': 'dh', 'ع': 'a',
                    'غ': 'gh', 'ف': 'f', 'ق': 'q', 'ك': 'k', 'ل': 'l', 'م': 'm', 'ن': 'n',
                    'ه': 'h', 'و': 'w', 'ي': 'y', 'ى': 'a', 'ة': 'h', 'ئ': 'e', 'ء': 'a',
                    'ؤ': 'o', 'لا': 'la'
                };

                const langToLatinMap = currentLang() === 'ar' ? arabicToLatinMap : cyrillicToLatinMap;

                return text.split('').map(char => langToLatinMap[char] || char).join('');
            }

            function convertToSlug(text) {
                const transliteratedText = transliterateCyrillic(text);

                return transliteratedText
                    .toLowerCase()
                    .trim()
                    .replace(/\s+/g, '-');           // Replace spaces with -
            }

            function currentLang()
            {
                return document.documentElement.lang === 'ar' ? 'ar' : 'cy';
            }


            $('.full-slug-show').hide();
            $(document).on('keyup', '#project_title , #slug', function (e) {
                $('.full-slug-show').show();
                let slug = convertToSlug($(this).val());
                $('#slug').val(slug);

                let url = `https://xilancer.xgenious.com/` + slug;
                $('.full-slug-show').text(url);
            });

            //update slug
            $(document).on('click','.edit_project_slug',function(){
                $('.display_label_title').removeClass('d-none');
                $('#slug').removeClass('d-none');
            })

            // check package is available or not
            $(document).on('change','#offer_packages_available_or_not',function (e) {
                if($(this).prop('checked')){
                    $('.disabled_or_not'). prop('disabled', false);
                    $('#offer_packages_available_or_not').val('1')
                }else{
                    $('.disabled_or_not'). prop('disabled', true);
                    $('#offer_packages_available_or_not').val('0')
                }

            });

            // todo select checkbox or numeric
            $('.package-field-input .disabled_or_not').remove();

            $(document).on('keyup','.checkbox_or_numeric_title',async function(){
                let variable_name = $(this).val().replaceAll(" ","_").toLowerCase();
                let currentRow = $(this).closest(".append-include").find("td input");

                let arrVal = [];
                $(this).parent().find('.validation-error').text("");

                validation.project_title_error = false;

                await $(`.checkbox_or_numeric_title`).each(function (){
                    if(arrVal.includes($(this).val())) {
                        validation.project_title_error = true;
                        arrVal.push($(this).val());

                        if($(this).val().length > 0){
                            $(this).parent().find('.validation-error').text("This title is already in use.");
                        }else{
                            $(this).parent().find('.validation-error').text("This field is required.");
                        }
                    }else{
                        if($(this).val().length < 1){
                            validation.project_title_error = true;
                            $(this).parent().find('.validation-error').text("This field is required.");
                        }

                        arrVal.push($(this).val());
                    }
                });

                let t_array = [
                    "basic",
                    "standard",
                    "premium"
                ];
                let i = 0;

                currentRow.each(function () {
                    let inputName = variable_name + '[' + t_array[i++] + ']';
                    $(this).attr("name", inputName);
                });
            });

            $(document).on('change','.checkbox_or_numeric_select',function(){
                let value = $(this).val().toLowerCase().replaceAll(" ","_");

                let variable_name = $(this).closest(".append-include").find('.checkbox_or_numeric_title').val();
                let currentRow = $(this).closest(".append-include").find("td");
                let add_minus_button = `
                    <div class="package-button-wrapper">
                         <div class="package-field-icon add-rows">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="package-field-icon remove-rows remove-icon">
                            <i class="fa-solid fa-minus"></i>
                        </div>
                    </div>
                `;

                let t_array = [
                    "basic",
                    "standard",
                    "premium"
                ];
                let i = 0;

                currentRow.each(function (){
                    let row_type = t_array[i++];
                    let inputName = variable_name + '['+ row_type +']';

                    let checkbox, number;


                    if($('#offer_packages_available_or_not').val() != 1 && i > 1){
                        checkbox = '<input type="checkbox" name="'+ inputName +'" class="check-input disabled_or_not" checked>';
                        number = '<input type="number" name="'+ inputName +'" class="form-control disabled_or_not" value="5">';
                    }else{
                        checkbox = '<input type="checkbox" name="'+ inputName +'" class="check-input" checked>';
                        number = '<input type="number" name="'+ inputName +'" class="form-control" value="5">';
                    }

                    if(row_type == 'premium'){
                        checkbox  = checkbox + add_minus_button;
                        number  = number + add_minus_button;
                    }

                    if(value == 'checkbox'){
                        $(this).html(checkbox);
                    }else{
                        $(this).html(number);
                    }

                    if($('#offer_packages_available_or_not').val() == 1){
                        $('.disabled_or_not').prop('disabled', false);
                    }else{
                        $('.disabled_or_not').prop('disabled', true);
                    }
                })
            });


            // checkbox numeric title get and set
            $(document).on('keyup','.checkbox_or_numeric_title',function(){
                let check_numeric_title = $(this).text();
                $('#check_numeric_title').val(check_numeric_title);
            });

            //remove row
            $(document).on('click', '.remove-icon', function() {
                $(this).closest('.append-remove').remove();
            });

            //add row
            $(document).on('click', '.add-rows', function() {
                let tableData = `
                    <tr class="append-include append-remove">
                       <th>
                            <div class="package-head-left">
                                <div class="package-head-left-flex flex-column">
                                    <input class="form-control checkbox_or_numeric_title" type="text" name="checkbox_or_numeric_title[]" placeholder="Enter Title">
                                    <div class="text-danger validation-error"></div>
                                </div>
                                <div class="package-field">
                                    <div class="package-field-select">
                                        <select class="form-control checkbox_or_numeric_select" name="checkbox_or_numeric_select[]">
                                            <option value="checkbox">Check Boxes</option>
                                            <option value="numeric">Numeric</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </th>

                        <td>
                                <input type="checkbox" name="title[basic]" class="check-input" checked>
                        </td>

                        <td>
                                <input name="title[standard]" type="checkbox" class="check-input disabled_or_not" checked>
                        </td>

                        <td>
                            <input name="title[premium]" type="checkbox" class="check-input disabled_or_not" checked>

                            <div class="package-button-wrapper">
                                <div class="package-field-icon add-rows">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                                <div class="package-field-icon remove-rows remove-icon">
                                    <i class="fa-solid fa-minus"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
            `;

                $('.create_project_table tr:last').prev().after(tableData);
                $('.package-field-input .disabled_or_not').remove();

                if($('#offer_packages_available_or_not').prop('checked')){
                    $('.create_project_table .disabled_or_not'). prop('disabled', false);
                }else{
                    $('.create_project_table .disabled_or_not'). prop('disabled', true);
                }
            });

            //profile photo upload
            document.querySelector('#upload_project_photo').addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    let img = document.querySelector('.project_photo_preview');
                    img.onload = () =>{
                        URL.revokeObjectURL(img.src);  // no longer needed, free memory
                    }
                    img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                    document.querySelector(".project_photo_preview").files = this.files;
                    $("#crop").trigger("click");
                }
            });

            // basic price setup
            $(document).on('click','.basic_price_setup',function(){
                let basic_regular_charge = $('#basic_regular_charge').val();
                let basic_discount_charge = $('#basic_discount_charge').val();
                if(basic_regular_charge != '' && basic_regular_charge >0){
                    $('.basic_regular_charge').html('<span class="basic_regular_charge">' + '$' + basic_regular_charge + '</span>');
                }else {
                    $('.basic_regular_charge').html('');
                }
                if(basic_discount_charge != '' && basic_discount_charge > 0){
                    $('.basic_discount_charge').html('<span class="basic_discount_charge"><s>' + '$' +basic_discount_charge + '</s></span>');
                }else {
                    $('.basic_discount_charge').html('');
                }
                $('.price-popup-basic-charge, .popup-overlay').removeClass('popup-active');
            })

            // basic price setup
            $(document).on('click','.standard_price_setup',function(){
                let standard_regular_charge = $('#standard_regular_charge').val();
                let standard_discount_charge = $('#standard_discount_charge').val();

                if(standard_regular_charge != '' && standard_regular_charge > 0){
                    $('.standard_regular_charge').html('<span class="standard_regular_charge">' + '$' + standard_regular_charge + '</span>');
                }else {
                    $('.standard_regular_charge').html('');
                }
                if(standard_discount_charge != '' && standard_discount_charge > 0){
                    $('.standard_discount_charge').html('<span class="standard_discount_charge"><s>' + '$' +standard_discount_charge + '</s></span>');
                }else {
                    $('.standard_discount_charge').html('');
                }
                $('.price-popup-standard-charge, .popup-overlay').removeClass('popup-active');
            })

            // basic price setup
            $(document).on('click','.premium_price_setup',function(){
                let premium_regular_charge = $('#premium_regular_charge').val();
                let premium_discount_charge = $('#premium_discount_charge').val();

                if(premium_regular_charge != '' && premium_regular_charge > 0){
                    $('.premium_regular_charge').html('<span class="premium_regular_charge">' + '$' + premium_regular_charge + '</span>');
                }
                else {
                    $('.premium_regular_charge').html('');
                }
                if(premium_discount_charge != '' && premium_discount_charge > 0){
                    $('.premium_discount_charge').html('<span class="premium_discount_charge"><s>' + '$' +premium_discount_charge + '</s></span>');
                }else {
                    $('.premium_discount_charge').html('');
                }
                $('.price-popup-premium-charge, .popup-overlay').removeClass('popup-active');
            })

            function titleShouldBeUnique(){
                toastr_warning_js("All package title is required and title must be unique.");
            }

            // create project
            $(document).on('click','#confirm_create_project',async function(e){

               let basic_title = $('#basic_title').text();
               let standard_title = $('#standard_title').text();
               let premium_title = $('#premium_title').text();
               let checkbox_or_numeric_title = $('.checkbox_or_numeric_title').val();

                $('#set_basic_title').val(basic_title)
                $('#set_standard_title').val(standard_title)
                $('#set_premium_title').val(premium_title)

                let basic_regular_charge = $('#basic_regular_charge').val();
                if(basic_regular_charge == '' || basic_regular_charge <= 0) {
                    toastr_warning_js("Basic regular price is required!");
                    return false;
                }

                // check any validation are have or not if error exist then stop execution
                let selfError = {error: false};
                let arrVal = [];
                let validation = false;

                await $(`.checkbox_or_numeric_title`).each(function (){
                    if(arrVal.includes($(this).val())) {
                        validation = true;
                    }else{
                        if($(this).val().length < 1){
                            validation = true;
                            $(this).parent().find('.validation-error').text("This field is required.");
                        }
                        arrVal.push($(this).val());
                    }
                });

                if(validation){
                    titleShouldBeUnique();
                    e.preventDefault();
                    return false;
                }else{
                    check_package_titles.status = true;
                }

                if(selfError.error){
                    titleShouldBeUnique();
                    return false;
                }

                if(check_package_titles.status){
                    $('#project_create_load_spinner').html('<i class="fas fa-spinner fa-pulse"></i>')
                }else{
                    return false;
                }
            })

        });
    }(jQuery));

    function pre_next()
    {
        let Listings = document.querySelectorAll(".single-setup-request-list li");
        let sections = document.querySelectorAll(".setup-wrapper-contents");
        let current = 0;

        const toggleListings = () => {
            Listings.forEach(function(e) {
                e.classList.remove('running');
            });
            Listings[current].classList.add("running");
            Listings[current].classList.remove("completed");
            if (current != 0) {
                Listings[current - 1].classList.add("completed");
            }
        }

        const toggleSections = () => {
            sections.forEach(function(section) {
                section.classList.remove('active');
            });
            sections[current].classList.add("active");
        }

        $(document).on("click", "#next", function (e){
            e.preventDefault();

            if (current <= Listings.length) {
                current++

                // todo add introduction
                if(current == 1){
                    let category = $('#category').val();
                    let subcategory = $('#subcategory').val();
                    let title = $('#project_title').val();
                    let description = $('#project_description').val();
                    if(category == '' || subcategory == '' || title == '' || description == ''){
                        current = 0;
                        toastr_warning_js("Please fill all fields !");
                        return false;
                    }
                    if(title.length < 5){
                        current = 0;
                        toastr_warning_js("Title must be at least 5 characters");
                        return false;
                    }
                    if(description.length < 10){
                        current = 0;
                        toastr_warning_js("Description must be at least 10 characters");
                        return false;
                    }
                }
                else if(current == 2){
                    let image = $('#upload_project_photo').val();
                    if(image == ''){
                        current = 1;
                        toastr_warning_js("Please upload project photo !");
                        return false;
                    }
                    $('.setup-footer-right').html('<button type="submit" class="btn-profile btn-bg-1" id="confirm_create_project">Create Project<span id="project_create_load_spinner"></span></button>');
                }else{
                    $('.setup-footer-right').html('<a href="javascript:void(0)" class="setup-footer-next next" id="next"> <i class="fas fa-arrow-right"></i> </a>');
                }
            }

            toggleListings();
            toggleSections();
        })

        $(document).on("click", "#previous", function (){
            if (current > 0) {
                current--
                if(current == 2){
                    $('.setup-footer-right').html('<input type="submit" class="btn-profile btn-bg-1" value="Create Project">');
                }else{
                    $('.setup-footer-right').html('<a href="javascript:void(0)" class="setup-footer-next next" id="next"> <i class="fas fa-arrow-right"></i> </a>');
                }
            }
            toggleListings();
            toggleSections();
        });
    }

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
    // todo toastr success
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

</script>
   <script src="https://xilancer.xgenious.com/assets/backend/js/summernote/summernote-lite.min.js"></script>

<script>
    function initializeSummernote(element, options = {}) {
        let summernoteConfig = {
            disableDragAndDrop: true,
            codeviewFilter: true,
            codeviewIframeFilter: true,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['Insert', ['link', 'table', 'video', 'picture']],
            ],
            styleTags: [
                'p',
                {
                    title: 'Blockquote',
                    tag: 'blockquote',
                    className: 'blockquote',
                    value: 'blockquote'
                },
                'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
            ],
            codemirror: { // codemirror options
                theme: 'monokai'
            },
            callbacks: {
                onPaste: function(e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window
                        .clipboardData).getData('Text');
                    e.preventDefault();
                    document.execCommand('insertText', false, bufferText);
                }
            }
        };

        summernoteConfig.callbacks = {...summernoteConfig.callbacks, ...options};

        let summerNote = element;

        if(summerNote.length > 1){
            summerNote.each(function (){
                const singleSummernote = $(this)
                // Get the HTML content from the textarea
                let rawData = singleSummernote.val();
                // Sanitize the HTML content
                let sanitizedData = sanitizeHTML(rawData);

                singleSummernote.html('').summernote(summernoteConfig);

                // Set the sanitized content as the initial value
                singleSummernote.summernote('code', sanitizedData);
            })
        }else{
            // Get the HTML content from the textarea
            let rawData = summerNote.val();
            // Sanitize the HTML content
            let sanitizedData = sanitizeHTML(rawData);

            summerNote.val(sanitizedData);
            summerNote.summernote(summernoteConfig);
        }
    }

    // Function to sanitize HTML content
    function sanitizeHTML(content) {
        // Use jQuery to create a temporary element and set its HTML
        let tempElement = $('<div>').html(content);

        // Remove any script tags
        tempElement.find('script').remove();

        // Return the sanitized HTML
        return tempElement.html();
    }
</script>   <script>
       initializeSummernote($('.description'), {
           onKeyup: function(e) {
               setTimeout(function(){
                   let description_min_length = 10;
                   let project_description_length = $('#project_description').val().length;

                   if(project_description_length < description_min_length){
                       $('#project_description_char_length_check').html('<p class="text text-danger">Length is short, minimum '+ description_min_length +' required.</p>');
                   }else{
                       $('#project_description_char_length_check').html('<p class="text text-success">Length is valid</p>');
                   }
               },200);
           }
       })
   </script>

   <script src="https://xilancer.xgenious.com/assets/common/js/select2.min.js"></script>
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