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
        <style>
        .single-profile-settings-flex {
            justify-content: space-between;
        }
        .single-profile-settings-contents .single-profile-settings-contents-upload-btn {
            padding: 0;
        }
        .single-profile-settings .single-profile-settings-thumb {
            max-width: unset;
        }
        .balance-wallet {
            color: var(--paragraph-color);
        }
        .balance-wallet strong {
            color: var(--heading-color);
        }
        .single-profile-settings-thumb {
            width:unset;
        }
    </style>

            <title>Wallet History</title>
                            
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
                <a href="/clientlog" class="logo">
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
                                                            <a href="/clientlog" class="navbar-author-wrapper-list-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 10.75H5C2.58 10.75 1.25 9.42 1.25 7V5C1.25 2.58 2.58 1.25 5 1.25H7C9.42 1.25 10.75 2.58 10.75 5V7C10.75 9.42 9.42 10.75 7 10.75ZM5 2.75C3.42 2.75 2.75 3.42 2.75 5V7C2.75 8.58 3.42 9.25 5 9.25H7C8.58 9.25 9.25 8.58 9.25 7V5C9.25 3.42 8.58 2.75 7 2.75H5Z" fill="#667085"/>
                                <path d="M19 10.75H17C14.58 10.75 13.25 9.42 13.25 7V5C13.25 2.58 14.58 1.25 17 1.25H19C21.42 1.25 22.75 2.58 22.75 5V7C22.75 9.42 21.42 10.75 19 10.75ZM17 2.75C15.42 2.75 14.75 3.42 14.75 5V7C14.75 8.58 15.42 9.25 17 9.25H19C20.58 9.25 21.25 8.58 21.25 7V5C21.25 3.42 20.58 2.75 19 2.75H17Z" fill="#667085"/>
                                <path d="M19 22.75H17C14.58 22.75 13.25 21.42 13.25 19V17C13.25 14.58 14.58 13.25 17 13.25H19C21.42 13.25 22.75 14.58 22.75 17V19C22.75 21.42 21.42 22.75 19 22.75ZM17 14.75C15.42 14.75 14.75 15.42 14.75 17V19C14.75 20.58 15.42 21.25 17 21.25H19C20.58 21.25 21.25 20.58 21.25 19V17C21.25 15.42 20.58 14.75 19 14.75H17Z" fill="#667085"/>
                                <path d="M7 22.75H5C2.58 22.75 1.25 21.42 1.25 19V17C1.25 14.58 2.58 13.25 5 13.25H7C9.42 13.25 10.75 14.58 10.75 17V19C10.75 21.42 9.42 22.75 7 22.75ZM5 14.75C3.42 14.75 2.75 15.42 2.75 17V19C2.75 20.58 3.42 21.25 5 21.25H7C8.58 21.25 9.25 20.58 9.25 19V17C9.25 15.42 8.58 14.75 7 14.75H5Z" fill="#667085"/>
                            </svg>
                            Dashboard
                        </a>
                        
                        <a href="https://xilancer.xgenious.com/freelancer/order/all"
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
                        </a> --}}
                        {{-- <a href="https://xilancer.xgenious.com/freelancer/proposal/all"
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
                                                                                                                        <a href="/create"
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
                                                                                                            {{-- <a href="https://xilancer.xgenious.com/freelancer/account/setup"
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
                        </a> --}}
                        <a href="/client-profile-set"
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
                    <h4 class="breadcrumb-contents-title"> Wallet History </h4>
                    <ul class="breadcrumb-contents-list list-style-none">
                        <li class="breadcrumb-contents-list-item"> <a href="/clientlog" class="breadcrumb-contents-list-item-link"> Home  </a> </li>
                        <li class="breadcrumb-contents-list-item"> Wallet History </li>
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
                        <li class="profile-settings-menu-item ">
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
                                                <li class="profile-settings-menu-item ">
                            
                        </li>
                                                                                                                                                <li class="profile-settings-menu-item">
                                        <a href="/create" class="profile-settings-menu-item-link">
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
                        <li class="profile-settings-menu-item">
                            
                        </li>
                        <li class="profile-settings-menu-item">
                            
                        </li>
                        <li class="profile-settings-menu-item ">
                            <a href="/user-ticket" class="profile-settings-menu-item-link">
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
                        <li class="profile-settings-menu-item  active ">
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

                            <div class="single-profile-settings" id="display_client_profile_photo">
                                <div class="single-profile-settings-flex">

                                    <div class="single-profile-settings-thumb">
                                        <h4 class="balance-wallet">Balance:
                                            <strong>$1,330.60</strong>
                                        </h4>
                                        <p class="job-progress mt-2">Earning+Deposit</p>
                                    </div>
                                    <div class="d-flex gap-2">
                                                                                <div class="single-profile-settings-contents">
                                            <div class="single-profile-settings-contents-upload">
                                                <div class="single-profile-settings-contents-upload-btn">
                                                                                                                                                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#withdrawModal">Withdraw Request</button>
                                                                                                                                                            </div>
                                            </div>
                                        </div>
                                                                                <div class="single-profile-settings-contents">
                                            <div class="single-profile-settings-contents-upload">
                                                <div class="single-profile-settings-contents-upload-btn">
                                                    <button class="btn-profile btn-bg-1" data-bs-toggle="modal" data-bs-target="#paymentGatewayModal">Deposit to Wallet</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="single-profile-settings" id="display_client_profile_info">
                                <div class="single-profile-settings-header">
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

                                    <div class="single-profile-settings-header-flex">
                                        <h4 class="single-profile-settings-header-title">Wallet History</h4> <br><br>
<p></p>
                                        <div class="search_wrapper">
    <span class="search_wrapper_icon"><i class="fa-solid fa-search"></i></span>
    <input type="text" placeholder="Enter date to search" id="string_search"  class="form--control">
</div>
                                    </div>
                                </div>
                                <div class="single-profile-settings-inner profile-border-top">
                                    <div class="custom_table style-04 search_result">
                                          <table>
    <thead>
    <tr>
        <th>Payment Gateway</th>
        <th>Payment Status</th>
        <th>Deposit Amount</th>
        <th>Deposit Date</th>
    </tr>
    </thead>
    <tbody>
            <tr>
            <td>
                                    Stripe
                            </td>
            <td>
                                    <span class="btn btn-success btn-sm">Pending</span>
                            </td>
            <td>$100.00</td>
            <td>2024-10-22 04:39:54</td>
        </tr>
            <tr>
            <td>
                                    Paystack
                            </td>
            <td>
                                    <span class="btn btn-success btn-sm">Complete</span>
                            </td>
            <td>$200.00</td>
            <td>2024-10-07 05:56:10</td>
        </tr>
            <tr>
            <td>
                                    Paypal
                            </td>
            <td>
                                    <span class="btn btn-success btn-sm">Pending</span>
                            </td>
            <td>$200.00</td>
            <td>2024-09-21 07:00:04</td>
        </tr>
            <tr>
            <td>
                                    Paypal
                            </td>
            <td>
                                    <span class="btn btn-success btn-sm">Pending</span>
                            </td>
            <td>$10.00</td>
            <td>2024-09-01 19:47:22</td>
        </tr>
            <tr>
            <td>
                                    Stripe
                            </td>
            <td>
                                    <span class="btn btn-success btn-sm">Pending</span>
                            </td>
            <td>$100.00</td>
            <td>2024-09-01 19:44:27</td>
        </tr>
            <tr>
            <td>
                                    Stripe
                            </td>
            <td>
                                    <span class="btn btn-success btn-sm">Pending</span>
                            </td>
            <td>$50.00</td>
            <td>2024-08-20 08:57:38</td>
        </tr>
            <tr>
            <td>
                                    Stripe
                            </td>
            <td>
                                    <span class="btn btn-success btn-sm">Pending</span>
                            </td>
            <td>$50.00</td>
            <td>2024-08-20 08:56:11</td>
        </tr>
            <tr>
            <td>
                                    Stripe
                            </td>
            <td>
                                    <span class="btn btn-success btn-sm">Pending</span>
                            </td>
            <td>$100.00</td>
            <td>2024-07-28 07:21:45</td>
        </tr>
            <tr>
            <td>
                                    Paypal
                            </td>
            <td>
                                    <span class="btn btn-success btn-sm">Pending</span>
                            </td>
            <td>$1,111.00</td>
            <td>2024-07-28 07:20:32</td>
        </tr>
            <tr>
            <td>
                                    Paytabs
                            </td>
            <td>
                                    <span class="btn btn-success btn-sm">Pending</span>
                            </td>
            <td>$25.00</td>
            <td>2024-07-27 07:17:09</td>
        </tr>
        </tbody>
</table>
<div class="deposit-history-pagination mt-4">
    <div class="custom_pagination mt-5" data-route="">
    <nav>
        <ul class="pagination">
            
                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            
            
                            
                
                
                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                                        
            
                            <li class="page-item">
                    {{-- <a class="page-link" href="https://xilancer.xgenious.com/freelancer/wallet/history?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a> --}}
                </li>
                    </ul>
    </nav>

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
        <!-- Profile Settings area end -->
        <div class="modal fade" id="withdrawModal" tabindex="-1" aria-labelledby="withdrawModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="QBz2I8EiJyZZ9UnkKlvqzITV597a2ERjYuMUclOi" autocomplete="off">            <div class="modal-content">

                <div class="modal-header">
                    <h2 class="popup-contents-title"> Withdraw Money </h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-danger"><strong>Minimum: </strong> $50.00</p>
                    <p class="text-danger"><strong>Maximum:</strong> $500.00</p>
                    <div class="popup-contents-inner profile-border-top">
                        <div class="withdrawal-single-item">
                            <span class="withdrawal-single-item-subtitle">Available balance</span>
                            <h2 class="withdrawal-single-item-balance mt-2">$1,330.60</h2>
                        </div>
                    </div>
                    <div class="popup-contents-form custom-form profile-border-top">
                        <div class="single-input">
                            <label class="label-title"> Enter amount </label>
                            <input type="number" name="amount" class="form--control" id="withdraw_request_amount" placeholder="00">
                        </div>
                        <div class="single-input">
                            <label class="label-title"> Withdraw method </label>
                            <select name="gateway_name" class="form-control gateway-name">
                                <option value="">Select gateway</option>
                                                                    <option  value="1" data-fields="[&quot;Bank Name&quot;,&quot;Swift Code&quot;,&quot;Account Number&quot;]">Bank</option>
                                                                    <option  value="4" data-fields="[&quot;Account Name&quot;,&quot;Account Number&quot;,&quot;Account Type&quot;,&quot;Account Id&quot;]">Paypal</option>
                                                            </select>
                        </div>

                        <div class="gateway-information-wrapper mt-3">

                        </div>

                    </div>

                    <div class="popup-contents-withdraw mt-4 fee_and_receive_amount_container d-none">
                        <div class="popup-contents-withdraw-item">
                            <div class="popup-contents-withdraw-flex">
                                <span class="popup-contents-withdraw-title">Withdraw Fee</span>
                                <h3 class="popup-contents-withdraw-price withdraw_fee_amount_for_each_transaction"></h3>
                            </div>
                        </div>
                        <div class="popup-contents-withdraw-item">
                            <div class="popup-contents-withdraw-flex">
                                <span class="popup-contents-withdraw-title">Amount you&#039;ll receive</span>
                                <h3 class="popup-contents-withdraw-price"><span class="receiveable_amount"></span></h3>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-profile btn-outline-gray btn-hover-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn-profile btn-bg-1 withdraw_amount_from_wallet">Submit Now</button>
                </div>
            </div>

        </form>
    </div>
</div>

        <div class="modal fade" id="paymentGatewayModal" tabindex="-1" aria-labelledby="paymentGatewayModalLabel" aria-hidden="true">
    <div class="modal-dialog ab">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="QBz2I8EiJyZZ9UnkKlvqzITV597a2ERjYuMUclOi" autocomplete="off">            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="paymentGatewayModalLabel">You can deposit to your wallet from the available payment gateway</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="single-input mb-3">
    <label for="amount" class="label-title">Enter Deposit Amount</label>
    <input type="number" name="amount" id="amount" value="" step="" placeholder="Max Limit: 500" class="form-control" >
</div>
                    <div class="confirm-payment payment-border">
                        <div class="single-checkbox">
                            <div class="checkbox-inlines">
                                <label class="checkbox-label" for="check2">
                                    <div class="payment-gateway-wrapper payment_getway_image"><input type="hidden" name="selected_payment_gateway" id="order_from_user_wallet" value="paypal"><ul><li data-gateway="manual_payment" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748921680684065.png"  alt=""/></div></li><li data-gateway="paypal" class="selected active"><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748761680683992.png"  alt=""/></div></li><li data-gateway="mollie" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748811680684064.png"  alt=""/></div></li><li data-gateway="paytm" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748781680684016.png"  alt=""/></div></li><li data-gateway="stripe" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748801680684063.png"  alt=""/></div></li><li data-gateway="razorpay" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748791680684063.png"  alt=""/></div></li><li data-gateway="flutterwave" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748821680684064.png"  alt=""/></div></li><li data-gateway="paystack" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748771680684126.png"  alt=""/></div></li><li data-gateway="marcadopago" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748861680684099.png"  alt=""/></div></li><li data-gateway="instamojo" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748851680684099.png"  alt=""/></div></li><li data-gateway="cashfree" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748871680684064.png"  alt=""/></div></li><li data-gateway="payfast" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748831680684064.png"  alt=""/></div></li><li data-gateway="midtrans" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748841680684099.png"  alt=""/></div></li><li data-gateway="squareup" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748911680684065.png"  alt=""/></div></li><li data-gateway="cinetpay" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748961680684065.png"  alt=""/></div></li><li data-gateway="paytabs" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748971680684099.png"  alt=""/></div></li><li data-gateway="billplz" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748981680684100.png"  alt=""/></div></li><li data-gateway="zitopay" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/Group 11712748891680684065.png"  alt=""/></div></li><li data-gateway="toyyibpay" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/toybppay1681276253.png"  alt=""/></div></li><li data-gateway="pagali" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/pagali1681276333.png"  alt=""/></div></li><li data-gateway="authorize_dot_net" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/authorize1681276383.png"  alt=""/></div></li><li data-gateway="sitesway" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/sitesway1681276405.png"  alt=""/></div></li><li data-gateway="iyzipay" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/iyzipay17010664851703684447.svg"  alt=""/></div></li><li data-gateway="kineticpay" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/logo-new16898646091722251084.png"  alt=""/></div></li><li data-gateway="awdpay" ><div class="img-select"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/logoedcaf74517197336801722251157.png"  alt=""/></div></li></ul></div><div class="kinetic_payment_show_hide mt-4"> <div class="form-group kinetic_payment_field">
                            <div class="label">Choose Payment Method</div>
                            <select name="kineticpay_bank" id="kineticpay_bank" class="select" data-allow_clear="true" data-placeholder="Select Bank">
                                <option value="" selected="selected">Select Bank</option>
                                <option value="ABMB0212">Alliance Bank Malaysia Berhad</option>
                                <option value="ABB0233">Affin Bank Berhad</option>
                                <option value="AMBB0209">AmBank (M) Berhad</option>
                                <option value="BCBB0235">CIMB Bank Berhad</option>
                                <option value="BIMB0340">Bank Islam Malaysia Berhad</option>
                                <option value="BKRM0602">Bank Kerjasama Rakyat Malaysia Berhad</option>
                                <option value="BMMB0341">Bank Muamalat (Malaysia) Berhad</option>
                                <option value="BSN0601">Bank Simpanan Nasional Berhad</option>
                                <option value="CIT0219">Citibank Berhad</option>
                                <option value="HLB0224">Hong Leong Bank Berhad</option>
                                <option value="HSBC0223">HSBC Bank Malaysia Berhad</option>
                                <option value="KFH0346">Kuwait Finance House</option>
                                <option value="MB2U0227">Maybank2u / Malayan Banking Berhad</option>
                                <option value="MBB0228">Maybank2E / Malayan Banking Berhad E</option>
                                <option value="OCBC0229">OCBC Bank (Malaysia) Berhad</option>
                                <option value="PBB0233">Public Bank Berhad</option>
                                <option value="RHB0218">RHB Bank Berhad</option>
                                <option value="SCB0216">Standard Chartered Bank (Malaysia) Berhad</option>
                                <option value="UOB0226">United Overseas Bank (Malaysia) Berhad</option>
                            </select>
                        </div> </div><div class="payment_gateway_extra_field_information_wrap"><div class="manual_payment_gateway_extra_field"><div class="form-group"> <div class="label mt-3 mb-2">Bank  TransferReceipt</div> <input type="file" name="manual_payment_image" class="form-control" style="line-height: 1.15"></div><div class="manual_description"></div></div></div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-profile btn-outline-gray btn-hover-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn-profile btn-bg-1 deposit_amount_to_wallet">Deposit</button>
                </div>
            </div>
        </form>
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
        <a href="#/"> +627-521-1504 </a> 
     </span>
     <span class="footer-widget-contact-item"> 
         <span> 
         <i class="far fa-envelope"></i> 
         </span> 
        <a href="#/"> info@example.co.uke </a> 
     </span>
     <span class="footer-widget-contact-item"> 
         <span> 
         <i class="fas fa-map-marker"></i> 
         </span> 
        <a href="#/"> 8702 Syokimau, Pacific mall </a> 
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
    (function($){
        "use strict";
        $(document).ready(function(){
            //update profile
            $(document).on('click','.deposit_amount_to_wallet',function(e){
                let amount  = parseInt($('#amount').val());
                let max_amount = parseInt("500");
                if(amount == '' || isNaN(amount) || amount <= 0){
                    toastr_warning_js("Please enter your deposit amount.");
                    return false;
                }
                if(amount  > max_amount){
                    toastr_warning_js("Deposit amount must not greater than the max limit.");
                    return false;
                }
            })

            // pagination
            $(document).on('click', '.pagination a', function(e){
                e.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                histories(page);
            });
            function histories(page){
                $.ajax({
                    url:"https://xilancer.xgenious.com/freelancer/wallet/paginate/data?page=" + page,
                    success:function(res){
                        $('.search_result').html(res);
                    }
                });
            }

            // search history
            $(document).on('keyup','#string_search',function(){
                let string_search = $(this).val();
                $.ajax({
                    url:"https://xilancer.xgenious.com/freelancer/wallet/search-history",
                    method:'GET',
                    data:{string_search:string_search},
                    success:function(res){
                        if(res.status=='nothing'){
                            $('.search_result').html('<h3 class="text-center text-danger">'+"Nothing Found"+'</h3>');
                        }else{
                            $('.search_result').html(res);
                        }
                    }
                });
            })

            // get fields
            $(document).on("change", ".gateway-name", function() {
                let gatewayInformation = "";
                $(".gateway-information-wrapper").fadeOut(150);

                JSON.parse($(this).find(":selected").attr("data-fields")).forEach(function(value, index) {
                    let gateway_name = value.toLowerCase().replaceAll(" ", "_").replaceAll("-", "_");

                    gatewayInformation += `
                        <div class="single-input">
                            ${ value }
                            <input type="text" name="gateway_field[${ gateway_name }]" class="form-control" placeholder="Write ${ value.toLowerCase() }" />
                        </div>
                    `;
                })

                $(".gateway-information-wrapper").html(gatewayInformation);
                $(".gateway-information-wrapper").fadeIn(250);
            })

            //fee and amount container
            $(document).on('keyup','#withdraw_request_amount',function(){
                let site_default_currency_symbol = '$';
                $('.fee_and_receive_amount_container').removeClass('d-none');

                let withdraw_fee = 0;
                let withdraw_fee_amount = 0;
                let receiveable_amount = 0;

                let amount = $(this).val()
                let withdraw_fee_type = ""
                withdraw_fee = "5"

                console.log(amount,withdraw_fee_type,withdraw_fee)

                withdraw_fee_amount = withdraw_fee_type == 'percentage' ? (amount*withdraw_fee/100).toFixed(2) : withdraw_fee;
                receiveable_amount = parseFloat(amount - withdraw_fee_amount);

                $('.withdraw_fee_amount_for_each_transaction').text(site_default_currency_symbol + withdraw_fee_amount)
                $('.receiveable_amount').text(site_default_currency_symbol + receiveable_amount.toFixed(2))
            })

        });
    }(jQuery));
</script>
    <script>
    (function($){
        "use strict";
        $(document).ready(function(){
            // if the wallet checkbox is checked need to show this value as current selected payment gateway
            $(document).on('click', '.wallet_selected_payment_gateway',function(){
                $('.payment-gateway-wrapper li').removeClass('active');
                $('.payment-gateway-wrapper li').removeClass('selected');
                $('.wallet-payment-gateway-wrapper .wallet_selected_payment_gateway').addClass('selected');
                $('.payment-gateway-wrapper #order_from_user_wallet').val('wallet');
            });

            //Payment gateway select
            $(document).on('click', '.payment_getway_image ul li',function(){
                //wallet start
                $('.wallet_selected_payment_gateway').removeClass('selected')
                $( ".wallet_selected_payment_gateway" ).prop( "checked", false );
                //wallet end

                //current balance start
                $('.current_balance_selected_gateway').addClass('selected');
                $( ".current_balance_selected_gateway" ).prop( "checked", false );
                //current balance end

                $(this).siblings().removeClass('active');
                $(this).addClass('active');
                let payment_gateway_name = $(this).data('gateway');

                $('.kinetic_payment_show_hide').hide();
                if(payment_gateway_name == 'kineticpay'){
                    $('.kinetic_payment_show_hide').show();
                }

                $('#msform input[name=selected_payment_gateway]').val();

                $('.payment_gateway_extra_field_information_wrap > div').hide();
                $('.payment_gateway_extra_field_information_wrap div.'+payment_gateway_name+'_gateway_extra_field').show();

                $(this).addClass('selected').siblings().removeClass('selected');
                $('.payment-gateway-wrapper').find(('input')).val(payment_gateway_name);
            });
            $('.payment_getway_image ul li.selected.active').trigger('click');
        });
    }(jQuery));
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
