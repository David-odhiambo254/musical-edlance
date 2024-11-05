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

            <title>Create Job</title>
                            
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
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">1</span>
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
                        
                        <a href="/posted-orders"
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
                    <h4 class="breadcrumb-contents-title"> Post a Job </h4>
                    <ul class="breadcrumb-contents-list list-style-none">
                        <li class="breadcrumb-contents-list-item"> <a href="/clientlog" class="breadcrumb-contents-list-item-link"> Home  </a> </li>
                        <li class="breadcrumb-contents-list-item"> Post a Job </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Account Setup area Starts -->
        <div class="account-area section-bg-2 pat-100 pab-100">
            <div class="container">
                <div class="account-setup-wrapper">
                    <div class="single-setup single-setup-account">
    <div class="single-setup-request">
        <ul class="single-setup-request-list list-style-none">
            <li class="single-setup-request-list-item running">
                <span class="single-setup-request-list-item-number"> 1 </span>
                <div class="single-setup-request-list-item-contents">
                    <h5 class="single-setup-request-list-item-contents-title">About Job </h5>
                </div>
            </li>
            <li class="single-setup-request-list-item">
                <span class="single-setup-request-list-item-number"> 2 </span>
                <div class="single-setup-request-list-item-contents">
                    <h5 class="single-setup-request-list-item-contents-title"> Budget, Skills </h5>
                </div>
            </li>
        </ul>
    </div>
</div>
                    <div class="single-setup-account-inner custom-form profile-border-top">
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

                        <form action="" method="post"
                              enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="QBz2I8EiJyZZ9UnkKlvqzITV597a2ERjYuMUclOi" autocomplete="off">                            <!-- About Job Start -->
<div class="setup-wrapper-contents active">
    <div class="setup-wrapper-contents-item">
        <div class="setup-bank-form">
            <div class="single-input mb-0">
    <label for="title" class="label-title">Job Title</label>
    <input type="text" name="title" id="title" value="" step="" placeholder="e.g. I need  landing page" class="form--control" >
</div>
            <span id="job_title_char_length_check"></span>

            <div class="single-input mb-0">
    <label for="slug" class="d-none display_label_title">Slug</label>
    <input type="text" name="slug" id="slug" value="" step="" placeholder="Slug" class="form--control d-none" >
</div>
            <div class="mb-0">

                <strong>Slug:</strong>
                <span class="full-slug-show"></span>
                <span class="edit_job_slug"><i class="fas fa-edit"></i></span>
            </div>

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
                <select name="subcategory[]" id="subcategory" class="form-control get_subcategory subcategory_select2" multiple> <option value="">Example</option></select>
                <span id="subcategory_info"></span>
            </div>

                            <div class="single-input">
                    <label class="label-title">Job duration</label>
                    <select name="duration" id="duration" class="form-control">
                        <option value="">Select Duration</option>
                                                <option value="1 Days">1 Days</option>
                                                <option value="2 Days">2 Days</option>
                                                <option value="3 Days">3 Days</option>
                                                <option value="less than a week">Less than a week</option>
                                                <option value="less than a month">Less than a month</option>
                                                <option value="less than 2 month">Less than 2 month</option>
                                                <option value="less than 3 month">Less than 3 month</option>
                                                <option value="More than 3 month">More than 3 month</option>
                                            </select>
                </div>
                        <div class="single-flex-input">
    <div class="single-input">
        <label class="label-title">Select Experience Level</label>
        <select name="level" id="level" class="form-control">
            <option value="">Select</option>
                            <option value="Junior">Junior</option>
                            <option value="MidLevel">MidLevel</option>
                            <option value="Senior">Senior</option>
                            <option value="Not Mandatory">Not Mandatory</option>
                    </select>
    </div>
</div>
            <div class="single-input mt-3">
    <label for="" class="label-title">Write a job description</label>
    <textarea class="description " name="description" id="description"></textarea>
</div>
            <span id="job_description_char_length_check"></span>

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
<!-- About Job Ends -->
                            <!-- Budget, Skills Start -->
<div class="setup-wrapper-contents">
    <div class="setup-wrapper-contents-item">
        <div class="setup-bank-form">
            <div class="setup-bank-form-item">
                <label class="label-title">Job type</label>
                <select class="form-control" name="type" id="type">
                    <option value="fixed" selected>Fixed-Price (Pay a fixed amount for the job)</option>
                                        <option value="hourly">Hourly Rate (Pay based on total hours worked for the job)</option>
                                    </select>
            </div>
                        <div class="setup-bank-form-item setup-bank-form-item-icon d-none manage-hourly-jobs">
                <label class="label-title">Hourly Rate</label>
                <input type="number" class="form--control" name="hourly_rate" onkeyup="setTimeout(() => { if (this.value === '' || this.value <= 0) this.value = 1; if (this.value > 100000) this.value = 100000; }, 1500);" id="hourly_rate" placeholder="Enter Hourly Rate">
                <span class="input-icon">USD</span>
            </div>
            <div class="setup-bank-form-item d-none manage-hourly-jobs">
                <label class="label-title">Estimated Hours</label>
                <input type="number" class="form--control" name="estimated_hours" onkeyup="setTimeout(() => { if (this.value === '' || this.value <= 0) this.value = 1; if (this.value > 100000) this.value = 100000; }, 1500);" id="estimated_hours" placeholder="Enter Estimated Hours">
            </div>
                        <div class="setup-bank-form-item setup-bank-form-item-icon manage-fixed-jobs">
                <label class="label-title">Enter Budget</label>
                <input type="number" class="form--control" name="budget" id="budget" value="0" placeholder="Enter Your Budget">
                <span class="input-icon">USD</span>
            </div>
            <div class="single-input mt-3">
    <label class="label-title">Select Skill</label>
    <select name="skill[]" id="skill" class="form-control skill_select2" multiple>
        <option value="">Select Skill</option>
                    <option value="1">Android</option>
                    <option value="2">Firebase on Android</option>
                    <option value="3">Android foundations</option>
                    <option value="4">Php</option>
                    <option value="6">Javascript</option>
                    <option value="7">HTML</option>
                    <option value="10">Jquery</option>
                    <option value="20">CSS</option>
                    <option value="21">Bootstrap</option>
                    <option value="22">Vue JS</option>
                    <option value="23">Laravel</option>
                    <option value="24">React</option>
                    <option value="25">NodeJS</option>
                    <option value="26">Ajax</option>
                    <option value="27">Rest API</option>
                    <option value="28">Logo Design</option>
                    <option value="29">Graphic Design</option>
                    <option value="30">Photoshop</option>
                    <option value="31">Illustrator</option>
                    <option value="32">3D Design</option>
                    <option value="33">UI/UX Design</option>
                    <option value="34">eCommerce</option>
                    <option value="35">Mobile App Development</option>
                    <option value="36">Software Architecture</option>
                    <option value="37">Article Writing</option>
                    <option value="38">Technical Writing</option>
                    <option value="39">Data Entry</option>
                    <option value="40">Copy Writing</option>
                    <option value="41">Content Writing</option>
                    <option value="42">Blog</option>
                    <option value="43">Accounting</option>
                    <option value="44">Sales</option>
                    <option value="45">Digital Marketing</option>
                    <option value="46">Research</option>
                    <option value="47">Market Research</option>
                    <option value="48">Internet marketing</option>
                    <option value="49">Customer Service</option>
                    <option value="50">English Translator</option>
                    <option value="51">Spanish Translator</option>
                    <option value="52">English Teaching</option>
                    <option value="53">English Grammer</option>
                    <option value="54">English Tutoring</option>
                    <option value="55">Education</option>
                    <option value="56">SEO</option>
                    <option value="57">Serach Engine marketing</option>
            </select>
</div>
            <div class="setup-bank-form-item">
                <label class="photo-uploaded center-text w-100">
                    <div class="photo-uploaded-flex d-flex uploadImage">
                        <div class="photo-uploaded-icon"><i class="fa-solid fa-paperclip"></i></div>
                        <span class="photo-uploaded-para">Add attachments</span>
                    </div>
                    <input class="photo-uploaded-file inputTag" type="file" name="attachment" id="attachment">
                </label>
                                    <p class="mt-2">
                        Supported files: png, jpg, jpeg, gif, pdf, doc, docx, txt, csv, xlsx, xls, ppt, pptx, zip
                    </p>
                            </div>
        </div>
    </div>
</div>
<!-- Budget, Skills Ends -->
                            <div class="setup-footer profile-border-top">
    <div class="setup-footer-flex">
        <div class="setup-footer-left">
            <a href="javascript:void(0)" class="setup-footer-back previous" id="previous">Back</a>
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
                    <a href="#" class="footer-contents-logo-img"> 
                    <img src="/assets/logoipsum.png"  alt=""/>
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
        <a href="#/"> +254-712-345-678 </a> 
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
        pre_next();
        $(document).ready(function(){
            $('.category_select2').select2();
            $('.subcategory_select2').select2();
            $('.skill_select2').select2();

            // change country and get state
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
                            let all_options = "<option value=''>Select Sub Category</option>";
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
                        }
                    }
                })
            })

            // project title length check
            $('#job_title_char_length_check').hide();
            $('#title').on('keydown keyup change', function(){
                $('#job_title_char_length_check').show();
                let title_min_length = 5;
                let title_max_length = 100;
                let job_title_length = $('#title').val().length;

                if(job_title_length < title_min_length){
                    $('#job_title_char_length_check').html('<p class="text text-danger">Length is short, minimum '+ title_min_length +' required.</p>');
                }else if(job_title_length > title_max_length){
                    $('#job_title_char_length_check').html('<p class="text text-danger">Length is not valid, maximum '+ title_max_length +' allowed.</p>');
                }else{
                    $('#job_title_char_length_check').html('<p class="text text-success">Length is valid</p>');
                }
            });


            //slug generate

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
            $(document).on('keyup', '#title , #slug', function (e) {
                $('.full-slug-show').show();
                let slug = convertToSlug($(this).val());
                $('#slug').val(slug);

                let url = `https://xilancer.xgenious.com/` + slug;
                $('.full-slug-show').text(url);
            });

            //update slug
            $(document).on('click','.edit_job_slug',function(){
                $('.display_label_title').removeClass('d-none');
                $('#slug').removeClass('d-none');
            })

            //tags input
            if (document.querySelector('#tags') != null) {
                let myTagInput = new TagsInputs({
                    selector: 'tags',
                    duplicate: false,
                    max: 100,
                });
                myTagInput.addData(['tags']);
            }

            //attachment js
            $(document).on('click , change','#attachment',function(){
                let uploadImage = document.querySelector(".uploadImage");
                let inputTag = document.querySelector(".inputTag");
                if(inputTag != null) {
                    inputTag.addEventListener('change', ()=> {
                        let inputTag = document.querySelector(".inputTag").files[0];
                        uploadImage.innerText = inputTag.name;
                    });
                };
            });

            //hourly rate
            $(document).on('change','#type',function(){
                let type = $(this).val();
                if(type == 'hourly') {
                    $('.manage-hourly-jobs').removeClass('d-none');
                    $('.manage-fixed-jobs').addClass('d-none');
                }else{
                    $('.manage-fixed-jobs').removeClass('d-none');
                    $('.manage-hourly-jobs').addClass('d-none');
                }
            });

            //confirm create job
            $(document).on('click','#confirm_create_job',function(){
                let type = $('#type').val();
                let budget = $('#budget').val();
                let skills = $('#skill').val();
                if(type == '' || budget == '' || skills == ''){
                    toastr_warning_js("Except attachment all fields required !");
                    return false;
                }else{
                    $('#job_create_load_spinner').html('<i class="fas fa-spinner fa-pulse"></i>')
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

                // add introduction
                if(current == 1){
                    let category = $('#category').val();
                    let subcategory = $('#subcategory').val();
                    let title = $('#title').val();
                    let description = $('#description').val();
                    let level = $('#level').val();
                    let duration = $('#duration').val();
                    if(category == '' || subcategory == '' || title == '' || description == '' || level == '' || duration==''){
                        current = 0;
                        toastr_warning_js("Please fill all fields !");
                        return false;
                    }else if(title.length < 5){
                        current = 0;
                        toastr_warning_js("Title must be at least 5 characters");
                        return false;
                    }else if(description.length < 10){
                        current = 0;
                        toastr_warning_js("Description must be at least 10 characters");
                        return false;
                    }
                    else {
                        $('.setup-footer-right').html('<button type="submit" class="btn-profile btn-bg-1" id="confirm_create_job">Create Job<span id="job_create_load_spinner"></span></button>');
                    }
                }
            }

            toggleListings();
            toggleSections();
        })

        $(document).on("click", "#previous", function (){
            if (current > 0) {
                current--
                if(current == 2){
                    $('.setup-footer-right').html('<input type="submit" class="btn-profile btn-bg-1" value="Create Job">');
                }else{
                    $('.setup-footer-right').html('<a href="javascript:void(0)" class="setup-footer-next next" id="next"> <i class="fas fa-arrow-right"></i> </a>');
                }
            }
            toggleListings();
            toggleSections();
        });
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
</script>    <script>
        initializeSummernote($('.description'), {
            onKeyup: function(e) {
                setTimeout(function(){
                    let description_min_length = 10;
                    let job_description_length = $('#description').val().length;

                    if(job_description_length < description_min_length){
                        $('#job_description_char_length_check').html('<p class="text text-danger">Length is short, minimum '+ description_min_length +' required.</p>');
                    }else{
                        $('#job_description_char_length_check').html('<p class="text text-success">Length is valid</p>');
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
