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
        .rating_profile_details {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .level-badge-wrapper {
            top: 10px;
            right: 14px;
        }
        .disabled-link {
            background-color: #ccc !important;
            pointer-events: none;
            cursor: default;
        }
        [data-star] {
            text-align:left;
            font-style:normal;
            display:inline-block;
            position: relative;
            unicode-bidi: bidi-override;
        }
        [data-star]::before {
            display:block;
            content: "\f005" "\f005" "\f005" "\f005" "\f005";
            width: 100%;
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            font-size: 15px;;
            color: var(--body-color);
        }
        [data-star]::after {
            white-space:nowrap;
            position:absolute;
            top:0;
            left:0;
            content: "\f005" "\f005" "\f005" "\f005" "\f005";
            width: 100%;
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            font-size: 15px;;
            width: 0;
            color: var(--secondary-color);
            overflow:hidden;
            height:100%;
        }

        [data-star^="0.1"]::after{width:2%}
        [data-star^="0.2"]::after{width:4%}
        [data-star^="0.3"]::after{width:6%}
        [data-star^="0.4"]::after{width:8%}
        [data-star^="0.5"]::after{width:10%}
        [data-star^="0.6"]::after{width:12%}
        [data-star^="0.7"]::after{width:14%}
        [data-star^="0.8"]::after{width:16%}
        [data-star^="0.9"]::after{width:18%}
        [data-star^="1"]::after{width:20%}
        [data-star^="1.1"]::after{width:22%}
        [data-star^="1.2"]::after{width:24%}
        [data-star^="1.3"]::after{width:26%}
        [data-star^="1.4"]::after{width:28%}
        [data-star^="1.5"]::after{width:30%}
        [data-star^="1.6"]::after{width:32%}
        [data-star^="1.7"]::after{width:34%}
        [data-star^="1.8"]::after{width:36%}
        [data-star^="1.9"]::after{width:38%}
        [data-star^="2"]::after{width:40%}
        [data-star^="2.1"]::after{width:42%}
        [data-star^="2.2"]::after{width:44%}
        [data-star^="2.3"]::after{width:46%}
        [data-star^="2.4"]::after{width:48%}
        [data-star^="2.5"]::after{width:50%}
        [data-star^="2.6"]::after{width:52%}
        [data-star^="2.7"]::after{width:54%}
        [data-star^="2.8"]::after{width:56%}
        [data-star^="2.9"]::after{width:58%}
        [data-star^="3"]::after{width:60%}
        [data-star^="3.1"]::after{width:62%}
        [data-star^="3.2"]::after{width:64%}
        [data-star^="3.3"]::after{width:66%}
        [data-star^="3.4"]::after{width:68%}
        [data-star^="3.5"]::after{width:70%}
        [data-star^="3.6"]::after{width:72%}
        [data-star^="3.7"]::after{width:74%}
        [data-star^="3.8"]::after{width:76%}
        [data-star^="3.9"]::after{width:78%}
        [data-star^="4"]::after{width:80%}
        [data-star^="4.1"]::after{width:82%}
        [data-star^="4.2"]::after{width:84%}
        [data-star^="4.3"]::after{width:86%}
        [data-star^="4.4"]::after{width:88%}
        [data-star^="4.5"]::after{width:90%}
        [data-star^="4.6"]::after{width:92%}
        [data-star^="4.7"]::after{width:94%}
        [data-star^="4.8"]::after{width:96%}
        [data-star^="4.9"]::after{width:98%}
        [data-star^="5"]::after{width:100%}

        .project_reject_reason_description
        {
            white-space: pre-line
        }
    </style>

            <title>Profile Details</title>
                            
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
        <div class="categorySub-area categorySub-padding border-top bg-white">
                <div class="container custom-container-one">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="categorySub">
                                <div class="categorySub-list nav-horizontal-scroll has-arrows" id="categoryWrap-list">
                                    <div class="categorySub-arrow" id="left-arrow"></div>
                                    {{-- <ul class="categorySub-list-slide" id="categoryslide-list">
                                                                                    <li class="categorySub-list-slide-list">
                                                <a href="https://xilancer.xgenious.com/categories/design-and-creative" class="categorySub-list-slide-link">Design and Creative<span class="mobileIcon"></span></a>
                                                <ul class="categorySub-slide-submenu">
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/uiux-design">UI/UX Design</a></li>
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/graphic-design">Graphic Design</a></li>
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/website-design">Website Design</a></li>
                                                                                                    </ul>
                                            </li>
                                                                                    <li class="categorySub-list-slide-list">
                                                <a href="https://xilancer.xgenious.com/categories/website-development" class="categorySub-list-slide-link">Website Development<span class="mobileIcon"></span></a>
                                                <ul class="categorySub-slide-submenu">
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/wordpress">Wordpress</a></li>
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/php-developer">Php Developer</a></li>
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/frontend-developer">Frontend Developer</a></li>
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/backend-developer">Backend Developer</a></li>
                                                                                                    </ul>
                                            </li>
                                                                                    <li class="categorySub-list-slide-list">
                                                <a href="https://xilancer.xgenious.com/categories/mobile-app-development" class="categorySub-list-slide-link">Mobile App Development<span class="mobileIcon"></span></a>
                                                <ul class="categorySub-slide-submenu">
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/flutter-development">Flutter Development</a></li>
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/android-development">Android Development</a></li>
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/ios-development">ios Development</a></li>
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/kotlin-development">Kotlin Development</a></li>
                                                                                                    </ul>
                                            </li>
                                                                                    <li class="categorySub-list-slide-list">
                                                <a href="https://xilancer.xgenious.com/categories/digital-marketing" class="categorySub-list-slide-link">Digital Marketing<span class="mobileIcon"></span></a>
                                                <ul class="categorySub-slide-submenu">
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/search-engine-optimization--seo-">Search Engine Optimization (SEO)</a></li>
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/branding">Branding</a></li>
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/social-media-marketing">Social Media Marketing</a></li>
                                                                                                    </ul>
                                            </li>
                                                                                    <li class="categorySub-list-slide-list">
                                                <a href="https://xilancer.xgenious.com/categories/writing-and-translation" class="categorySub-list-slide-link">Writing and Translation<span class="mobileIcon"></span></a>
                                                <ul class="categorySub-slide-submenu">
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/content-writing">Content Writing</a></li>
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/website-content">Website Content</a></li>
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/article-and-blog-post">Article and Blog Post</a></li>
                                                                                                            <li><a href="https://xilancer.xgenious.com/sub-categories/script-writing">Script Writing</a></li>
                                                                                                    </ul>
                                            </li>
                                                                            </ul> --}}
                                    <div class="categorySub-arrow right-arrow" id="right-arrow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="breadcrumb-area border-top">
    <div class="container custom-container-one">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-contents">
                    <h4 class="breadcrumb-contents-title"> Profile Details </h4>
                    <ul class="breadcrumb-contents-list list-style-none">
                        <li class="breadcrumb-contents-list-item"> <a href="/freelancelog" class="breadcrumb-contents-list-item-link"> Home  </a> </li>
                        <li class="breadcrumb-contents-list-item"> Profile Details </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Profile Details area Starts -->
        <div class="profile-area pat-100 pab-100 section-bg-2">
            <div class="container">
                <div class="row gy-4 justify-content-center">
                    <div class="col-xl-7">
                        <div class="profile-wrapper">

                            <div class="profile-wrapper-item radius-10 display_profile_info">
    <div class="profile-wrapper-flex flex-between">
        <div class="profile-wrapper-author">
            <div class="profile-wrapper-author-flex d-flex gap-3">
                <div class="profile-wrapper-author-thumb position-relative">
                                            <a href="#/">
                                                            <img src="https://xilancer.xgenious.com/assets/uploads/profile/1713787258-6626517ab5fb3.png" alt="profile img">
                                                    </a>
                                                                                    <div class="freelancer-level-badge position-absolute">
                                    <div class="level-badge-wrapper"><img src="https://xilancer.xgenious.com/assets/uploads/media-uploader/51704372063.png"  alt=""/> <span class="badge-title">Rated Plus</span></div>
                                </div>
                                                                        
                </div>
                <div class="profile-wrapper-author-cotents">
                    <h4 class="single-freelancer-author-name">
                        <a href="#/" tabindex="0">
                            William Montag<small>(Rated Plus)</small>                        </a>
                                                    <span class="single-freelancer-author-status"> Active </span>
                                            </h4>
                    <span class="single-freelancer-author-para mt-2">
                        Laravel Developer  <i class="fas fa-circle-check"></i>                    </span>
                     <div class="single-project-content-review mt-2">
                           <span class="single-project-content-review-icon">
                               <i class="fa-solid fa-star"></i>
                           </span>
                           <span class="single-project-content-review-rating">4.9(7)</span>
                    </div>
                     
                </div>
            </div>
        </div>
        <div class="profile-wrapper-right">
            <div class="profile-wrapper-right-flex flex-btn">
                                <span class="profile-wrapper-switch-title"> Available for Work</span>
                                    
                <div class="profile-wrapper-switch-custom display_work_availability">
                    <label class="custom_switch">
                            <input type="checkbox" id="check_work_availability" data-user_id="7" data-check_work_availability="1" checked >
                            <span class="slider round"></span>

                    </label>
                </div>
                                </div>
        </div>
    </div>

            <div class="profile-wrapper-details profile-border-top">
                                <div class="profile-wrapper-details-single">
                <div class="profile-wrapper-details-single-flex">
                    <h4 class="profile-wrapper-details-single-price display_hourly_rate"> $30 <sub>hour</sub></h4>
                                            <span class="profile-wrapper-details-edit price_edit_show_hide" data-bs-toggle="modal" data-bs-target="#priceModal"><i class="fas fa-edit"></i></span>
                                    </div>
            </div>
                    
        <div class="profile-wrapper-details-single">
            <div class="profile-wrapper-details-single-flex">
                <div class="profile-wrapper-details-single-flag">
                    <i class="flag flag-pakistan"></i>
                </div>
                <span class="profile-wrapper-details-para">  Lahore,  Pakistan </span>
            </div>
        </div>

        
    </div>
    
        <div class="profile-wrapper-about profile-border-top">
        <h4 class="profile-wrapper-about-title"> About Me </h4>
        <p class="profile-wrapper-about-para mt-2">I am a professional web developer work experience with 5 years. I will able to develop your any business  with laravel.</p>
    </div>
               <div class="d-flex">
            <div class="profile-wrapper-item-btn flex-btn profile-border-top">
                <div class="change_client_view">
                    <a href="javascript:void(0)" class="btn-profile btn-outline-gray view_as_a_client"> View as Client </a>
                </div>
                <a href="javascript:void(0)" class="btn-profile btn-bg-1 edit_info_show_hide" data-bs-toggle="modal" data-bs-target="#profileModal"> Edit info </a>
            </div>
            <div class="promote_profile profile-border-top">

                                    
                                            <a href="javascript:void(0)"
                           class="btn-profile btn-bg-1 open_project_promote_modal"
                           data-bs-target="#openProjectPromoteModal"
                           data-bs-toggle="modal"
                           data-project-id="0">
                            Promote Profile
                        </a>
                    
                
            </div>
        </div>
    </div>

<!--price update modal-->
<div class="modal fade" id="priceModal" tabindex="-1" aria-labelledby="PriceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="PriceModalLabel">Edit Price</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="single-profile-settings-form custom-form">
                    <div class="error_msg_container"></div>
                    <div class="single-input mb-3">
    <label for="hourly_rate" class="label-title">Enter Price</label>
    <input type="number" name="" id="hourly_rate" value="30" step="" placeholder="" class="form-control" >
</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary edit_public_hourly_rate">Save</button>
            </div>
        </div>
    </div>
</div>

<!--Update info Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="profileModalLabel">Edit Profile Info</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="single-profile-settings-form custom-form">
                    <div class="error_msg_container"></div>
                    <div class="single-flex-input">
                        <div class="single-input mb-3">
    <label for="first_name" class="label-title">First Name</label>
    <input type="text" name="" id="first_name" value="William" step="" placeholder="" class="form-control" >
</div>
                        <div class="single-input mb-3">
    <label for="last_name" class="label-title">Last Name</label>
    <input type="text" name="" id="last_name" value="Montag" step="" placeholder="" class="form-control" >
</div>
                    </div>
                    <div class="single-input mb-3">
    <label for="professional_title" class="label-title">Professional Title</label>
    <input type="text" name="" id="professional_title" value="Laravel Developer" step="" placeholder="" class="form-control" >
</div>
                    <span id="professional_title_char_length_check"></span>
                    <div class="single-input">
    <label class="label-title">Intro About Yourself</label>
    <textarea name="" id="professional_description" class="form-message" cols="30" rows="3" placeholder="">I am a professional web developer work experience with 5 years. I will able to develop your any business  with laravel.</textarea>
</div>
                    <span id="professional_description_char_length_check"></span>
                    <div class="single-input">
    <label class="label-title">Your Country</label>
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
                    <div class="single-input">
    <label class="label-title">Your State</label>
    <select name="" id="state_id" class="form-control get_country_state state_select2">
        <option value="">Select State</option>
                                    <option value="20"  selected >Lahore</option>
                        </select>
    <span class="state_info"></span>
</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary edit_public_profile_info">Save</button>
            </div>
        </div>
    </div>
</div>

    <!-- Level Add Modal -->
<div class="modal fade" id="openProjectPromoteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 heading_title_for_promotion_modal" id="exampleModalLabel">Promotion Project</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="QBz2I8EiJyZZ9UnkKlvqzITV597a2ERjYuMUclOi" autocomplete="off">                <input type="hidden" name="set_package_budget" id="set_package_budget">
                <input type="hidden" name="set_project_id_for_promote" id="set_project_id_for_promote" value="0">
                <input type="hidden" name="transaction_fee" id="transaction_fee" value="0">
                
                <div class="modal-body">
                    <div class="alert alert-warning mb-5" role="alert">
                        <p class="warning_for_promotion_modal">Notice: Days refers to the number of days a freelancer project will be displayed in the promotional area after he buy a package.</p>
                    </div>
                    <div class="single-input mb-3">
                        <label class="label-title mt-3">Choose Package</label>
                            <select id="get_package_budget" name="package_id" class="form-control get_package_budget">
                                <option>Choose Package</option>
                                                                    <option value="1" data-budget="10">10 Days (<strong>Price:</strong>$10.00/<strong>Duration:</strong>10 days)</option>
                                                                    <option value="2" data-budget="30">30 Days (<strong>Price:</strong>$30.00/<strong>Duration:</strong>30 days)</option>
                                                                    <option value="3" data-budget="300">150 Days (<strong>Price:</strong>$300.00/<strong>Duration:</strong>150 days)</option>
                                                            </select>
                    </div>
                    <label class="checkbox-label" for="choose">
                                                    <div class="wallet-payment-gateway-wrapper"><input type="checkbox" name="selected_payment_gateway" id="wallet_selected_payment_gateway" class="me-2 wallet_selected_payment_gateway"><label for="wallet_selected_payment_gateway">Use Wallet balance</label></div>
                            <span class="wallet-balance mt-2 d-block">Wallet Balance:
                                <strong class="main-balance">$1,330.60</strong>
                            </span>
                            <span class="display_wallet_shortage_balance py-3"></span>
                                                <p class="d-none show_hide_transaction_section">
                            <strong>Transaction Fee</strong>
                            <span class="currency_symbol"></span>
                            <span class="transaction_fee_amount"></span>
                        </p>
                        <br>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mt-4" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary mt-4 pr-4 pl-4 confirm_promote_project">Promote Now <span id="promote_project_load_spinner"></span></button>
                </div>
            </form>
        </div>
    </div>
</div>

                            <div class="profile-wrapper-item radius-10">
                                <div class="profile-wrapper-details">
                                    <div class="profile-wrapper-details-single">
                                        <div class="profile-wrapper-details-single-flex">
                                            <div class="profile-wrapper-details-single-thumb">
                                                $
                                            </div>
                                            <div class="profile-wrapper-details-single-contents">
                                                <h4 class="profile-wrapper-details-single-contents-title"> $3,090.60 </h4>
                                                <p class="profile-wrapper-details-single-contents-para"> Total Earned </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-wrapper-details-single">
                                        <div class="profile-wrapper-details-single-flex">
                                            <div class="profile-wrapper-details-single-thumb"><img
                                               src="https://xilancer.xgenious.com/assets/static/icons/project_complete.svg" alt="complete order"></div>
                                            <div class="profile-wrapper-details-single-contents">
                                                <h4 class="profile-wrapper-details-single-contents-title"> 19 </h4>
                                                <p class="profile-wrapper-details-single-contents-para"> Order Completed </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-wrapper-details-single">
                                        <div class="profile-wrapper-details-single-flex">
                                            <div class="profile-wrapper-details-single-thumb"><img
                                               src="https://xilancer.xgenious.com/assets/static/icons/active_order.svg" alt="active order"></div>
                                            <div class="profile-wrapper-details-single-contents">
                                                <h4 class="profile-wrapper-details-single-contents-title"> 26 </h4>
                                                <p class="profile-wrapper-details-single-contents-para"> Active Orders </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                        <div class="profile-wrapper-item add-project-parent radius-10 project_wrapper_area">
    <div class="profile-wrapper-item-flex flex-between align-items-center profile-border-bottom">
        <h4 class="profile-wrapper-item-title"> Project Catalogues </h4>
                    <div class="profile-wrapper-item-plus create_project_show_hide">
               <a href="/create-project"><i class="fas fa-plus"></i></a>
            </div>
            </div>
                        <div class="single-project project-catalogue">
                <div class="project-catalogue-flex">
                    <div class="single-project-thumb project-catalogue-thumb">
                        <a href="#">

                                                            <img src="https://xilancer.xgenious.com/assets/uploads/project/1729761435-671a109b469c7.jpg" alt="project">
                            
                        </a>
                    </div>
                    <div class="single-project-content project-catalogue-contents mt-0">
                        <div class="single-project-content-top align-items-center flex-between">
                            <div class="single-project-content-review">
                        <span class="single-project-content-review-rating">No Review</span>
                   </div>
                    <a href="#/" class="single-project-orderCompleted">No Order </a>
                        </div>
                        <h4 class="single-project-content-title">
                            <a href="#"> Rtttttttttttttt ggffffftfffffffttftfttttttttttt </a>
                        </h4>

                        <div class="project-catalogue-bottom flex-between mt-3">
                                                            <span class="single-project-content-price"> $9 <s>$10</s> </span>
                                                        <div class="single-project-delivery">
                            <span class="single-project-delivery-icon">
                                <i class="fa-regular fa-clock"></i> Delivery
                            </span>
                                <span class="single-project-delivery-days"> 1 Days </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="profile-wrapper-item-bottom profile-border-top">
                    <div class="profile-wrapper-item-bottom-flex flex-between align-items-center">
                                                    <div class="flex-btn">
                                <style>
    .alert-warning {
        border-color: #f2f2f2;
        border-left: 3px solid #e0a800;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-success {
        border-color: #f2f2f2;
        border-left: 3px solid #319a31;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-danger {
        border-color: #f2f2f2;
        border-left: 3px solid #dd0000;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
</style>

    <span class="alert alert-warning">Pending</span>
                                                            </div>
                                                <div class="profile-wrapper-item-btn flex-btn">
                                                        <a href="javascript:void(0)" class="btn-profile btn-outline-cancel delete_project edit_info_show_hide" data-project-id="162"> Delete </a>
                                                                                                                            <a href="#" class="btn-profile btn-bg-1 edit_info_show_hide"> Edit Project </a>
                                                            
                                                            
                                                                    <a href="javascript:void(0)"
                                       class="btn-profile btn-bg-1 open_project_promote_modal"
                                       data-bs-target="#openProjectPromoteModal"
                                       data-bs-toggle="modal"
                                       data-project-id="162">
                                        Promote Project
                                    </a>
                                                                                   </div>
                    </div>
                </div>
            </div>
                                <div class="single-project project-catalogue">
                <div class="project-catalogue-flex">
                    <div class="single-project-thumb project-catalogue-thumb">
                        <a href="#">

                                                            <img src="https://xilancer.xgenious.com/assets/uploads/project/1726819103-66ed2b1ff1e1d.jpg" alt="project">
                            
                        </a>
                    </div>
                    <div class="single-project-content project-catalogue-contents mt-0">
                        <div class="single-project-content-top align-items-center flex-between">
                            <div class="single-project-content-review">
                        <span class="single-project-content-review-rating">No Review</span>
                   </div>
                    <a href="#/" class="single-project-orderCompleted">No Order </a>
                        </div>
                        <h4 class="single-project-content-title">
                            <a href="#"> Testdesigb sites write </a>
                        </h4>

                        <div class="project-catalogue-bottom flex-between mt-3">
                                                            <span class="single-project-content-price"> $9 <s>$10</s> </span>
                                                        <div class="single-project-delivery">
                            <span class="single-project-delivery-icon">
                                <i class="fa-regular fa-clock"></i> Delivery
                            </span>
                                <span class="single-project-delivery-days"> 1 Days </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="profile-wrapper-item-bottom profile-border-top">
                    <div class="profile-wrapper-item-bottom-flex flex-between align-items-center">
                                                    <div class="flex-btn">
                                <style>
    .alert-warning {
        border-color: #f2f2f2;
        border-left: 3px solid #e0a800;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-success {
        border-color: #f2f2f2;
        border-left: 3px solid #319a31;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-danger {
        border-color: #f2f2f2;
        border-left: 3px solid #dd0000;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
</style>

    <span class="alert alert-warning">Pending</span>
                                                            </div>
                                                <div class="profile-wrapper-item-btn flex-btn">
                                                        <a href="javascript:void(0)" class="btn-profile btn-outline-cancel delete_project edit_info_show_hide" data-project-id="149"> Delete </a>
                                                                                                                            <a href="" class="btn-profile btn-bg-1 edit_info_show_hide"> Edit Project </a>
                                                            
                                                            
                                                                    <a href="javascript:void(0)"
                                       class="btn-profile btn-bg-1 open_project_promote_modal"
                                       data-bs-target="#openProjectPromoteModal"
                                       data-bs-toggle="modal"
                                       data-project-id="149">
                                        Promote Project
                                    </a>
                                                                                   </div>
                    </div>
                </div>
            </div>
                                <div class="single-project project-catalogue">
                <div class="project-catalogue-flex">
                    <div class="single-project-thumb project-catalogue-thumb">
                        <a href="">

                                                            <img src="https://xilancer.xgenious.com/assets/uploads/project/1724310669-66c6e48d35a57.jpg" alt="project">
                            
                        </a>
                    </div>
                    <div class="single-project-content project-catalogue-contents mt-0">
                        <div class="single-project-content-top align-items-center flex-between">
                            <div class="single-project-content-review">
                        <span class="single-project-content-review-rating">No Review</span>
                   </div>
                    <a href="#/" class="single-project-orderCompleted">No Order </a>
                        </div>
                        <h4 class="single-project-content-title">
                            <a href=""> والله مش عارف والله، لاه </a>
                        </h4>

                        <div class="project-catalogue-bottom flex-between mt-3">
                                                            <span class="single-project-content-price"> $9 <s>$10</s> </span>
                                                        <div class="single-project-delivery">
                            <span class="single-project-delivery-icon">
                                <i class="fa-regular fa-clock"></i> Delivery
                            </span>
                                <span class="single-project-delivery-days"> 2 Days </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="profile-wrapper-item-bottom profile-border-top">
                    <div class="profile-wrapper-item-bottom-flex flex-between align-items-center">
                                                    <div class="flex-btn">
                                <style>
    .alert-warning {
        border-color: #f2f2f2;
        border-left: 3px solid #e0a800;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-success {
        border-color: #f2f2f2;
        border-left: 3px solid #319a31;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-danger {
        border-color: #f2f2f2;
        border-left: 3px solid #dd0000;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
</style>

    <span class="alert alert-warning">Pending</span>
                                                            </div>
                                                <div class="profile-wrapper-item-btn flex-btn">
                                                        <a href="javascript:void(0)" class="btn-profile btn-outline-cancel delete_project edit_info_show_hide" data-project-id="148"> Delete </a>
                                                                                                                            <a href="#" class="btn-profile btn-bg-1 edit_info_show_hide"> Edit Project </a>
                                                            
                                                            
                                                                    <a href="javascript:void(0)"
                                       class="btn-profile btn-bg-1 open_project_promote_modal"
                                       data-bs-target="#openProjectPromoteModal"
                                       data-bs-toggle="modal"
                                       data-project-id="148">
                                        Promote Project
                                    </a>
                                                                                   </div>
                    </div>
                </div>
            </div>
                                <div class="single-project project-catalogue">
                <div class="project-catalogue-flex">
                    <div class="single-project-thumb project-catalogue-thumb">
                        <a href="#">

                                                            <img src="https://xilancer.xgenious.com/assets/uploads/project/1722009477-66a3c7855990d.png" alt="project">
                            
                        </a>
                    </div>
                    <div class="single-project-content project-catalogue-contents mt-0">
                        <div class="single-project-content-top align-items-center flex-between">
                            <div class="single-project-content-review">
                        <span class="single-project-content-review-rating">No Review</span>
                   </div>
                    <a href="#/" class="single-project-orderCompleted">No Order </a>
                        </div>
                        <h4 class="single-project-content-title">
                            <a href="#"> https://bostake.co.in </a>
                        </h4>

                        <div class="project-catalogue-bottom flex-between mt-3">
                                                            <span class="single-project-content-price"> $9 <s>$10</s> </span>
                                                        <div class="single-project-delivery">
                            <span class="single-project-delivery-icon">
                                <i class="fa-regular fa-clock"></i> Delivery
                            </span>
                                <span class="single-project-delivery-days"> 1 Days </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="profile-wrapper-item-bottom profile-border-top">
                    <div class="profile-wrapper-item-bottom-flex flex-between align-items-center">
                                                    <div class="flex-btn">
                                <style>
    .alert-warning {
        border-color: #f2f2f2;
        border-left: 3px solid #e0a800;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-success {
        border-color: #f2f2f2;
        border-left: 3px solid #319a31;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-danger {
        border-color: #f2f2f2;
        border-left: 3px solid #dd0000;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
</style>

    <span class="alert alert-warning">Pending</span>
                                                            </div>
                                                <div class="profile-wrapper-item-btn flex-btn">
                                                        <a href="javascript:void(0)" class="btn-profile btn-outline-cancel delete_project edit_info_show_hide" data-project-id="144"> Delete </a>
                                                                                                                            <a href="#" class="btn-profile btn-bg-1 edit_info_show_hide"> Edit Project </a>
                                                            
                                                            
                                                                    <a href="javascript:void(0)"
                                       class="btn-profile btn-bg-1 open_project_promote_modal"
                                       data-bs-target="#openProjectPromoteModal"
                                       data-bs-toggle="modal"
                                       data-project-id="144">
                                        Promote Project
                                    </a>
                                                                                   </div>
                    </div>
                </div>
            </div>
                                <div class="single-project project-catalogue">
                <div class="project-catalogue-flex">
                    <div class="single-project-thumb project-catalogue-thumb">
                        <a href="#">

                                                            <img src="https://xilancer.xgenious.com/assets/uploads/project/1721792438-66a077b690cd8.jpg" alt="project">
                            
                        </a>
                    </div>
                    <div class="single-project-content project-catalogue-contents mt-0">
                        <div class="single-project-content-top align-items-center flex-between">
                            <div class="single-project-content-review">
                        <span class="single-project-content-review-rating">No Review</span>
                   </div>
                    <a href="#" class="single-project-orderCompleted">No Order </a>
                        </div>
                        <h4 class="single-project-content-title">
                            <a href="#"> i will create a great AI potrait of you </a>
                        </h4>

                        <div class="project-catalogue-bottom flex-between mt-3">
                                                            <span class="single-project-content-price"> $9 <s>$10</s> </span>
                                                        <div class="single-project-delivery">
                            <span class="single-project-delivery-icon">
                                <i class="fa-regular fa-clock"></i> Delivery
                            </span>
                                <span class="single-project-delivery-days"> 1 Days </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="profile-wrapper-item-bottom profile-border-top">
                    <div class="profile-wrapper-item-bottom-flex flex-between align-items-center">
                                                    <div class="flex-btn">
                                <style>
    .alert-warning {
        border-color: #f2f2f2;
        border-left: 3px solid #e0a800;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-success {
        border-color: #f2f2f2;
        border-left: 3px solid #319a31;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-danger {
        border-color: #f2f2f2;
        border-left: 3px solid #dd0000;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
</style>

    <span class="alert alert-warning">Pending</span>
                                                            </div>
                                                <div class="profile-wrapper-item-btn flex-btn">
                                                        <a href="javascript:void(0)" class="btn-profile btn-outline-cancel delete_project edit_info_show_hide" data-project-id="143"> Delete </a>
                                                                                                                            <a href="#" class="btn-profile btn-bg-1 edit_info_show_hide"> Edit Project </a>
                                                            
                                                            
                                                                    <a href="javascript:void(0)"
                                       class="btn-profile btn-bg-1 open_project_promote_modal"
                                       data-bs-target="#openProjectPromoteModal"
                                       data-bs-toggle="modal"
                                       data-project-id="143">
                                        Promote Project
                                    </a>
                                                                                   </div>
                    </div>
                </div>
            </div>
                                <div class="single-project project-catalogue">
                <div class="project-catalogue-flex">
                    <div class="single-project-thumb project-catalogue-thumb">
                        <a href="#">

                                                            <img src="https://xilancer.xgenious.com/assets/uploads/project/1721334007-669978f704b0a.png" alt="project">
                            
                        </a>
                    </div>
                    <div class="single-project-content project-catalogue-contents mt-0">
                        <div class="single-project-content-top align-items-center flex-between">
                            <div class="single-project-content-review">
                        <span class="single-project-content-review-rating">No Review</span>
                   </div>
                    <a href="#" class="single-project-orderCompleted">No Order </a>
                        </div>
                        <h4 class="single-project-content-title">
                            <a href="#"> gggghjjjjjhhhhgxxxxxxxd£dfff </a>
                        </h4>

                        <div class="project-catalogue-bottom flex-between mt-3">
                                                            <span class="single-project-content-price"> $9 <s>$10</s> </span>
                                                        <div class="single-project-delivery">
                            <span class="single-project-delivery-icon">
                                <i class="fa-regular fa-clock"></i> Delivery
                            </span>
                                <span class="single-project-delivery-days"> 1 Days </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="profile-wrapper-item-bottom profile-border-top">
                    <div class="profile-wrapper-item-bottom-flex flex-between align-items-center">
                                                    <div class="flex-btn">
                                <style>
    .alert-warning {
        border-color: #f2f2f2;
        border-left: 3px solid #e0a800;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-success {
        border-color: #f2f2f2;
        border-left: 3px solid #319a31;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-danger {
        border-color: #f2f2f2;
        border-left: 3px solid #dd0000;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
</style>

    <span class="alert alert-warning">Pending</span>
                                                            </div>
                                                <div class="profile-wrapper-item-btn flex-btn">
                                                        <a href="javascript:void(0)" class="btn-profile btn-outline-cancel delete_project edit_info_show_hide" data-project-id="140"> Delete </a>
                                                                                                                            <a href="#" class="btn-profile btn-bg-1 edit_info_show_hide"> Edit Project </a>
                                                            
                                                            
                                                                    <a href="javascript:void(0)"
                                       class="btn-profile btn-bg-1 open_project_promote_modal"
                                       data-bs-target="#openProjectPromoteModal"
                                       data-bs-toggle="modal"
                                       data-project-id="140">
                                        Promote Project
                                    </a>
                                                                                   </div>
                    </div>
                </div>
            </div>
                                <div class="single-project project-catalogue">
                <div class="project-catalogue-flex">
                    <div class="single-project-thumb project-catalogue-thumb">
                        <a href="#">

                                                            <img src="https://xilancer.xgenious.com/assets/uploads/project/1718885279-66741b9fbb62f.jpg" alt="project">
                            
                        </a>
                    </div>
                    <div class="single-project-content project-catalogue-contents mt-0">
                        <div class="single-project-content-top align-items-center flex-between">
                            <div class="single-project-content-review">
                        <span class="single-project-content-review-rating">No Review</span>
                   </div>
                    <a href="#/" class="single-project-orderCompleted">No Order </a>
                        </div>
                        <h4 class="single-project-content-title">
                            <a href="#"> criação de de app mobile </a>
                        </h4>

                        <div class="project-catalogue-bottom flex-between mt-3">
                                                            <span class="single-project-content-price"> $9 <s>$10</s> </span>
                                                        <div class="single-project-delivery">
                            <span class="single-project-delivery-icon">
                                <i class="fa-regular fa-clock"></i> Delivery
                            </span>
                                <span class="single-project-delivery-days"> 1 Days </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="profile-wrapper-item-bottom profile-border-top">
                    <div class="profile-wrapper-item-bottom-flex flex-between align-items-center">
                                                    <div class="flex-btn">
                                <style>
    .alert-warning {
        border-color: #f2f2f2;
        border-left: 3px solid #e0a800;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-success {
        border-color: #f2f2f2;
        border-left: 3px solid #319a31;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-danger {
        border-color: #f2f2f2;
        border-left: 3px solid #dd0000;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
</style>

    <span class="alert alert-warning">Pending</span>
                                                            </div>
                                                <div class="profile-wrapper-item-btn flex-btn">
                                                        <a href="javascript:void(0)" class="btn-profile btn-outline-cancel delete_project edit_info_show_hide" data-project-id="124"> Delete </a>
                                                                                                                            <a href="#" class="btn-profile btn-bg-1 edit_info_show_hide"> Edit Project </a>
                                                            
                                                            
                                                                    <a href="javascript:void(0)"
                                       class="btn-profile btn-bg-1 open_project_promote_modal"
                                       data-bs-target="#openProjectPromoteModal"
                                       data-bs-toggle="modal"
                                       data-project-id="124">
                                        Promote Project
                                    </a>
                                                                                   </div>
                    </div>
                </div>
            </div>
                                <div class="single-project project-catalogue">
                <div class="project-catalogue-flex">
                    <div class="single-project-thumb project-catalogue-thumb">
                        <a href="#">

                                                            <img src="https://xilancer.xgenious.com/assets/uploads/project/1717307008-665c06802f55e.jpg" alt="project">
                            
                        </a>
                    </div>
                    <div class="single-project-content project-catalogue-contents mt-0">
                        <div class="single-project-content-top align-items-center flex-between">
                            <div class="single-project-content-review">
                        <span class="single-project-content-review-rating">No Review</span>
                   </div>
                    <a href="#/" class="single-project-orderCompleted">No Order </a>
                        </div>
                        <h4 class="single-project-content-title">
                            <a href="#"> came to mind and morty season and morty </a>
                        </h4>

                        <div class="project-catalogue-bottom flex-between mt-3">
                                                            <span class="single-project-content-price"> $9 <s>$10</s> </span>
                                                        <div class="single-project-delivery">
                            <span class="single-project-delivery-icon">
                                <i class="fa-regular fa-clock"></i> Delivery
                            </span>
                                <span class="single-project-delivery-days"> 1 Days </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="profile-wrapper-item-bottom profile-border-top">
                    <div class="profile-wrapper-item-bottom-flex flex-between align-items-center">
                                                    <div class="flex-btn">
                                <style>
    .alert-warning {
        border-color: #f2f2f2;
        border-left: 3px solid #e0a800;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-success {
        border-color: #f2f2f2;
        border-left: 3px solid #319a31;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-danger {
        border-color: #f2f2f2;
        border-left: 3px solid #dd0000;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
</style>

    <span class="alert alert-warning">Pending</span>
                                                            </div>
                                                <div class="profile-wrapper-item-btn flex-btn">
                                                                                                                            <a href="#" class="btn-profile btn-bg-1 edit_info_show_hide"> Edit Project </a>
                                                            
                                                            
                                                                    <a href="javascript:void(0)"
                                       class="btn-profile btn-bg-1 open_project_promote_modal"
                                       data-bs-target="#openProjectPromoteModal"
                                       data-bs-toggle="modal"
                                       data-project-id="120">
                                        Promote Project
                                    </a>
                                                                                   </div>
                    </div>
                </div>
            </div>
                                <div class="single-project project-catalogue">
                <div class="project-catalogue-flex">
                    <div class="single-project-thumb project-catalogue-thumb">
                        <a href="#">

                                                            <img src="https://xilancer.xgenious.com/assets/uploads/project/1706367303-65b51947c480b.png" alt="project">
                            
                        </a>
                    </div>
                    <div class="single-project-content project-catalogue-contents mt-0">
                        <div class="single-project-content-top align-items-center flex-between">
                            <div class="single-project-content-review">
                        <span class="single-project-content-review-rating">No Review</span>
                   </div>
                    <a href="#/" class="single-project-orderCompleted">No Order </a>
                        </div>
                        <h4 class="single-project-content-title">
                            <a href="#"> Ще получите минимум 20 символа </a>
                        </h4>

                        <div class="project-catalogue-bottom flex-between mt-3">
                                                            <span class="single-project-content-price"> $40 <s>$50</s> </span>
                                                        <div class="single-project-delivery">
                            <span class="single-project-delivery-icon">
                                <i class="fa-regular fa-clock"></i> Delivery
                            </span>
                                <span class="single-project-delivery-days"> 1 Days </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="profile-wrapper-item-bottom profile-border-top">
                    <div class="profile-wrapper-item-bottom-flex flex-between align-items-center">
                                                    <div class="flex-btn">
                                <style>
    .alert-warning {
        border-color: #f2f2f2;
        border-left: 3px solid #e0a800;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-success {
        border-color: #f2f2f2;
        border-left: 3px solid #319a31;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
    .alert-danger {
        border-color: #f2f2f2;
        border-left: 3px solid #dd0000;
        background-color: #f2f2f2;
        color: #333;
        border-radius: 0;
        padding: 5px;
    }
</style>

    <span class="alert alert-warning">Pending</span>
                                                            </div>
                                                <div class="profile-wrapper-item-btn flex-btn">
                                                                                                                            <a href="#" class="btn-profile btn-bg-1 edit_info_show_hide"> Edit Project </a>
                                                            
                                                            
                                                                    <a href="javascript:void(0)"
                                       class="btn-profile btn-bg-1 open_project_promote_modal"
                                       data-bs-target="#openProjectPromoteModal"
                                       data-bs-toggle="modal"
                                       data-project-id="114">
                                        Promote Project
                                    </a>
                                                                                   </div>
                    </div>
                </div>
            </div>
                                <div class="single-project project-catalogue">
                <div class="project-catalogue-flex">
                    <div class="single-project-thumb project-catalogue-thumb">
                        <a href="#">

                                                            <img src="https://xilancer.xgenious.com/assets/uploads/project/1700027551-65545c9f71231.png" alt="project">
                            
                        </a>
                    </div>
                    <div class="single-project-content project-catalogue-contents mt-0">
                        <div class="single-project-content-top align-items-center flex-between">
                            <div class="single-project-content-review">
                        <span class="single-project-content-review-rating">No Review</span>
                   </div>
                    <a href="#/" class="single-project-orderCompleted"> 5 Orders Completed </a>
                        </div>
                        <h4 class="single-project-content-title">
                            <a href=""> Qixer service provider buyer mobile appp </a>
                        </h4>

                        <div class="project-catalogue-bottom flex-between mt-3">
                                                            <span class="single-project-content-price"> $40 <s>$50</s> </span>
                                                        <div class="single-project-delivery">
                            <span class="single-project-delivery-icon">
                                <i class="fa-regular fa-clock"></i> Delivery
                            </span>
                                <span class="single-project-delivery-days"> 1 Days </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="profile-wrapper-item-bottom profile-border-top">
                    <div class="profile-wrapper-item-bottom-flex flex-between align-items-center">
                                                    <div class="profile-wrapper-right-flex flex-btn order_availability_show_hide">
                                <span class="profile-wrapper-switch-title"> Available for order </span>
                                <div class="profile-wrapper-switch-custom display_availability_for_order_or_not_110">
                                    <label class="custom_switch">
                                        <input type="checkbox" id="available_for_order_or_not" data-id="110" data-project_on_off="1" checked >
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                                                <div class="profile-wrapper-item-btn flex-btn">
                                                                                                                            <a href="" class="btn-profile btn-bg-1 edit_info_show_hide"> Edit Project </a>
                                                            
                                                            
                                                                    <a href="javascript:void(0)"
                                       class="btn-profile btn-bg-1 open_project_promote_modal"
                                       data-bs-target="#openProjectPromoteModal"
                                       data-bs-toggle="modal"
                                       data-project-id="110">
                                        Promote Project
                                    </a>
                                                                                   </div>
                    </div>
                </div>
            </div>
                                <div class="single-project project-catalogue">
                <div class="project-catalogue-flex">
                    <div class="single-project-thumb project-catalogue-thumb">
                        <a href="">

                                                            <img src="https://xilancer.xgenious.com/assets/uploads/project/1699164445-6547311def884.png" alt="project">
                            
                        </a>
                    </div>
                    <div class="single-project-content project-catalogue-contents mt-0">
                        <div class="single-project-content-top align-items-center flex-between">
                            <div class="single-project-content-review">
                        <span class="single-project-content-review-icon"> <i class="fa-solid fa-star"></i> </span>
                        <span class="single-project-content-review-rating">4.7(1) </span>
                   </div>
                     <a href="#/" class="single-project-orderCompleted"> 2 Orders Completed </a>
                        </div>
                        <h4 class="single-project-content-title">
                            <a href=""> I will build responsive WordPress website design and ecommerce website </a>
                        </h4>

                        <div class="project-catalogue-bottom flex-between mt-3">
                                                            <span class="single-project-content-price"> $100</span>
                                                        <div class="single-project-delivery">
                            <span class="single-project-delivery-icon">
                                <i class="fa-regular fa-clock"></i> Delivery
                            </span>
                                <span class="single-project-delivery-days"> Less than a week </span>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="profile-wrapper-item-bottom profile-border-top">
                    <div class="profile-wrapper-item-bottom-flex flex-between align-items-center">
                                                    <div class="profile-wrapper-right-flex flex-btn order_availability_show_hide">
                                <span class="profile-wrapper-switch-title"> Available for order </span>
                                <div class="profile-wrapper-switch-custom display_availability_for_order_or_not_68">
                                    <label class="custom_switch">
                                        <input type="checkbox" id="available_for_order_or_not" data-id="68" data-project_on_off="1" checked >
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                                                <div class="profile-wrapper-item-btn flex-btn">
                                                                                                                            <a href="#" class="btn-profile btn-bg-1 edit_info_show_hide"> Edit Project </a>
                                                            
                                                            
                                                                    <a href="javascript:void(0)"
                                       class="btn-profile btn-bg-1 open_project_promote_modal"
                                       data-bs-target="#openProjectPromoteModal"
                                       data-bs-toggle="modal"
                                       data-project-id="68">
                                        Promote Project
                                    </a>
                                                                                   </div>
                    </div>
                </div>
            </div>
                <div class="modal fade" id="rejectProjectReason" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Reject Reason</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="project_reject_reason_description"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mt-4" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

        <!-- Level Add Modal -->
<div class="modal fade" id="openProjectPromoteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 heading_title_for_promotion_modal" id="exampleModalLabel">Promotion Project</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="QBz2I8EiJyZZ9UnkKlvqzITV597a2ERjYuMUclOi" autocomplete="off">                <input type="hidden" name="set_package_budget" id="set_package_budget">
                <input type="hidden" name="set_project_id_for_promote" id="set_project_id_for_promote" value="0">
                <input type="hidden" name="transaction_fee" id="transaction_fee" value="0">
                
                <div class="modal-body">
                    <div class="alert alert-warning mb-5" role="alert">
                        <p class="warning_for_promotion_modal">Notice: Days refers to the number of days a freelancer project will be displayed in the promotional area after he buy a package.</p>
                    </div>
                    <div class="single-input mb-3">
                        <label class="label-title mt-3">Choose Package</label>
                            <select id="get_package_budget" name="package_id" class="form-control get_package_budget">
                                <option>Choose Package</option>
                                                                    <option value="1" data-budget="10">10 Days (<strong>Price:</strong>$10.00/<strong>Duration:</strong>10 days)</option>
                                                                    <option value="2" data-budget="30">30 Days (<strong>Price:</strong>$30.00/<strong>Duration:</strong>30 days)</option>
                                                                    <option value="3" data-budget="300">150 Days (<strong>Price:</strong>$300.00/<strong>Duration:</strong>150 days)</option>
                                                            </select>
                    </div>
                    <label class="checkbox-label" for="choose">
                                                    <div class="wallet-payment-gateway-wrapper"><input type="checkbox" name="selected_payment_gateway" id="wallet_selected_payment_gateway" class="me-2 wallet_selected_payment_gateway"><label for="wallet_selected_payment_gateway">Use Wallet balance</label></div>
                            <span class="wallet-balance mt-2 d-block">Wallet Balance:
                                <strong class="main-balance">$1,330.60</strong>
                            </span>
                            <span class="display_wallet_shortage_balance py-3"></span>
                                                <p class="d-none show_hide_transaction_section">
                            <strong>Transaction Fee</strong>
                            <span class="currency_symbol"></span>
                            <span class="transaction_fee_amount"></span>
                        </p>
                        <br>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mt-4" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary mt-4 pr-4 pl-4 confirm_promote_project">Promote Now <span id="promote_project_load_spinner"></span></button>
                </div>
            </form>
        </div>
    </div>
</div>
    </div>
                                                        <div class="profile-wrapper-item add-experience-parent radius-10" id="display_user_experience_data">
    <div class="profile-wrapper-item-flex flex-between align-items-center profile-border-bottom">
        <h4 class="profile-wrapper-item-title">Work experience  </h4>
                   <div class="profile-wrapper-item-plus add-experience add_experience_show_hide"><i class="fas fa-plus"></i></div>
                    </div>

           <div class="setup-wrapper-experience-details">
            <div class="setup-wrapper-experience-details-flex">
                <div class="setup-wrapper-experience-details-left">
                    <h5 class="setup-wrapper-experience-details-title"> PHP Laravel Developer </h5>
                    <p class="setup-wrapper-experience-details-subtitle"> iHelpBD </p>
                </div>
                                    <a href="javascript:void(0)" class="setup-wrapper-experience-details-edit btn-profile btn-hover-danger delete_experience delete_experience_show_hide" data-id="3">
                        <i class="fa-regular fa-trash-can"></i>
                    </a>
                    <a href="javascript:void(0)"
                       class="setup-wrapper-experience-details-edit experience-click edit_single_experience edit_experience_show_hide"
                       data-id="3"
                       data-title="PHP Laravel Developer"
                       data-organization="iHelpBD"
                       data-address="Dhanmondi 27"
                       data-short_description="In iHelpBD I was working as a PHP developer. I developed multiple products like CRM, Real estate etc."
                       data-country_id="1"
                       data-state_id="1"
                       data-start_date="Feb 29, 2020"
                       data-end_date="Mar 30, 2022"
                    > <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                                            </div>
            <ul class="setup-wrapper-experience-details-list">
                <li class="setup-wrapper-experience-details-list-item">
                        <span class="list-inner">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span class="list-inner-para">Duration</span>
                        </span>
                    <span class="list-inner">
                        <span class="list-inner-para">
                            Feb 29, 2020 - <a
                                href="javascript:void(0)">Mar 30, 2022 </a>
                        </span>
                    </span>
                </li>
                <li class="setup-wrapper-experience-details-list-item">
                        <span class="list-inner"> <i class="fa-solid fa-location-dot"></i> <span
                                class="list-inner-para">Location</span> </span>
                    <span class="list-inner"> <span
                            class="list-inner-para">Dhanmondi 27</span></span>
                </li>
            </ul>
       </div>
           <div class="setup-wrapper-experience-details">
            <div class="setup-wrapper-experience-details-flex">
                <div class="setup-wrapper-experience-details-left">
                    <h5 class="setup-wrapper-experience-details-title"> Frontend Developer </h5>
                    <p class="setup-wrapper-experience-details-subtitle"> Avery and Palmer Co </p>
                </div>
                                    <a href="javascript:void(0)" class="setup-wrapper-experience-details-edit btn-profile btn-hover-danger delete_experience delete_experience_show_hide" data-id="2">
                        <i class="fa-regular fa-trash-can"></i>
                    </a>
                    <a href="javascript:void(0)"
                       class="setup-wrapper-experience-details-edit experience-click edit_single_experience edit_experience_show_hide"
                       data-id="2"
                       data-title="Frontend Developer"
                       data-organization="Avery and Palmer Co"
                       data-address="Dhaka Bangladesh"
                       data-short_description="I was working for a php developer. I developed multiple products like crm, real estate etc."
                       data-country_id="1"
                       data-state_id="2"
                       data-start_date="Feb 28, 2018"
                       data-end_date="Mar 30, 2019"
                    > <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                                            </div>
            <ul class="setup-wrapper-experience-details-list">
                <li class="setup-wrapper-experience-details-list-item">
                        <span class="list-inner">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span class="list-inner-para">Duration</span>
                        </span>
                    <span class="list-inner">
                        <span class="list-inner-para">
                            Feb 28, 2018 - <a
                                href="javascript:void(0)">Mar 30, 2019 </a>
                        </span>
                    </span>
                </li>
                <li class="setup-wrapper-experience-details-list-item">
                        <span class="list-inner"> <i class="fa-solid fa-location-dot"></i> <span
                                class="list-inner-para">Location</span> </span>
                    <span class="list-inner"> <span
                            class="list-inner-para">Dhaka Bangladesh</span></span>
                </li>
            </ul>
       </div>
    </div>


<div class="popup-fixed add-experience-popup">
    <div class="popup-contents">
        <span class="popup-contents-close popup-close"> <i class="fas fa-times"></i> </span>
        <h2 class="popup-contents-title">Add work experience</h2>
        <p class="popup-contents-para">Fill the form below to add your work experience</p>
        <div class="popup-contents-form custom-form">
            <form action="#" name="addExperienceForm">
                <div class="single-input mb-0">
    <label for="experience_title" class="label-title">Title</label>
    <input type="text" name="experience_title" id="experience_title" value="" step="" placeholder="Front-End Developer" class="form-control" >
</div>
                <div class="single-input mb-0">
    <label for="organization" class="label-title">Organization</label>
    <input type="text" name="organization" id="organization" value="" step="" placeholder="Xgenious" class="form-control" >
</div>
                <div class="single-input mb-0">
    <label for="address" class="label-title">Address</label>
    <input type="text" name="address" id="address" value="" step="" placeholder="8502 Preston Rd. Ingle" class="form-control" >
</div>
                <div class="single-input">
    <label class="label-title">Short Description</label>
    <textarea name="short_description" id="short_description" class="form-message" cols="30" rows="3" placeholder="I am a professional develop..."></textarea>
</div>
                <div class="single-flex-input mt-0">
                    <div class="single-input mb-0">
    <label for="start_date" class="label-title">Start date</label>
    <input type="text" name="start_date" id="start_date" value="" step="" placeholder="" class="form-control date-picker" >
</div>
                    <div class="single-input mb-0">
    <label for="end_date" class="label-title">End date</label>
    <input type="text" name="end_date" id="end_date" value="" step="" placeholder="" class="form-control date-picker" >
</div>
                </div>
                <div class="single-flex-input mt-0">
    <div class="single-input"></div>
    <div class="single-input">
        <span><strong>info:</strong> If you currently working here please leave this field empty</span>
    </div>
</div>
            </form>
        </div>
        <div class="popup-contents-btn flex-btn justify-content-end profile-border-top">
            <a href="javascript:void(0)" class="btn-profile btn-outline-gray btn-hover-danger popup-close"> <i class="las la-arrow-left"></i>Cancel</a>
            <a href="javascript:void(0)" class="btn-profile btn-bg-1 add_experience">Save</a>
        </div>
    </div>
</div>



<div class="popup-overlay"></div>
<div class="popup-fixed experience-popup">
    <div class="popup-contents">
        <span class="popup-contents-close popup-close"> <i class="fas fa-times"></i> </span>
        <h2 class="popup-contents-title"> Edit work experience </h2>
        <p class="popup-contents-para"> Fill the form below to add your work experience </p>
        <div class="popup-contents-form custom-form">
            <form action="#">
                <input type="hidden" name="edit_id" id="edit_id">
                <div class="single-input mb-3">
    <label for="edit_experience_title" class="label-title">Title</label>
    <input type="text" name="edit_experience_title" id="edit_experience_title" value="" step="" placeholder="Front-End Developer" class="form-control" >
</div>
                <div class="single-input mb-3">
    <label for="edit_organization" class="label-title">Organization</label>
    <input type="text" name="edit_organization" id="edit_organization" value="" step="" placeholder="Xgenious" class="form-control" >
</div>
                <div class="single-input mb-3">
    <label for="edit_address" class="label-title">Address</label>
    <input type="text" name="edit_address" id="edit_address" value="" step="" placeholder="8502 Preston Rd. Ingle" class="form-control" >
</div>
                <div class="single-input">
    <label class="label-title">Short Description</label>
    <textarea name="edit_short_description" id="edit_short_description" class="form-message" cols="30" rows="3" placeholder="I am a professional develop..."></textarea>
</div>
                <div class="single-flex-input">
                    <div class="single-input mb-3">
    <label for="edit_start_date" class="label-title">Start date</label>
    <input type="text" name="edit_start_date" id="edit_start_date" value="" step="" placeholder="" class="form-control date-picker" >
</div>
                    <div class="single-input mb-3">
    <label for="edit_end_date" class="label-title">End date</label>
    <input type="text" name="edit_end_date" id="edit_end_date" value="" step="" placeholder="" class="form-control date-picker" >
</div>
                </div>
                <div class="single-flex-input mt-0">
    <div class="single-input"></div>
    <div class="single-input">
        <span><strong></strong> If you currently working here please leave this field empty</span>
    </div>
</div>
            </form>
        </div>
        <div class="popup-contents-btn flex-btn justify-content-end profile-border-top">
            <a href="javascript:void(0)" class="btn-profile btn-outline-gray btn-hover-danger popup-close"> <i class="las la-arrow-left"></i>Cancel </a>
            <a href="javascript:void(0)" class="btn-profile btn-bg-1 update_single_experience"> Update </a>
        </div>
    </div>
</div>

                            <div class="profile-wrapper-item add-education-parent radius-10" id="display_user_education_data">
    <div class="profile-wrapper-item-flex flex-between align-items-center profile-border-bottom">
        <h4 class="profile-wrapper-item-title"> Education </h4>
                   <div class="profile-wrapper-item-plus add-education add_education_show_hide"><i class="fas fa-plus"></i></div>
                    </div>
        <div class="setup-wrapper-experience-details">

        <div class="setup-wrapper-experience-details-flex">
            <div class="setup-wrapper-experience-details-left">
                <h5 class="setup-wrapper-experience-details-title">Computer Science and Engineering</h5>
                <p class="setup-wrapper-experience-details-subtitle">Dhaka International university</p>
            </div>
                            <a href="javascript:void(0)" class="setup-wrapper-experience-details-edit btn-profile btn-hover-danger delete_education delete_education_show_hide" data-id="1">
                    <i class="fa-regular fa-trash-can"></i>
                </a>
                <a href="javascript:void(0)"
                   class="setup-wrapper-experience-details-edit education-click edit_single_education edit_education_show_hide"
                   data-id ="1"
                   data-institution ="Dhaka International university"
                   data-subject ="Computer Science and Engineering"
                   data-degree ="Bsc in CSE"
                   data-start_date="Jun 30, 2013"
                   data-end_date="Nov 30, 2017"
                ><i class="fa-regular fa-pen-to-square"></i>
                </a>
                                </div>
        <ul class="setup-wrapper-experience-details-list">
            <li class="setup-wrapper-experience-details-list-item">
                <span class="list-inner"> <i class="fa-solid fa-graduation-cap"></i>
                    <span class="list-inner-para">Degree</span>
                </span>
                <span class="list-inner">
                    <span class="list-inner-para">Bsc in CSE</span>
                </span>
            </li>
            <li class="setup-wrapper-experience-details-list-item">
                <span class="list-inner"> <i class="fa-solid fa-calendar-days"></i> <span class="list-inner-para">From-To</span> </span>
                <span class="list-inner">
                    <span class="list-inner-para">Jun 30, 2013 - <a href="javascript:void(0)">Nov 30, 2017</a></span>
                </span>
            </li>
        </ul>

    </div>
    </div>

<!-- Add Education Starts  -->
<div class="popup-fixed add-education-popup">
    <div class="popup-contents">
        <span class="popup-contents-close popup-close"> <i class="fas fa-times"></i> </span>
        <h2 class="popup-contents-title">Educational background</h2>
        <p class="popup-contents-para">Fill the form below to add your educational background</p>
        <div class="popup-contents-form custom-form">
            <form action="#" name="addEducationForm">
                <div class="single-input mb-0">
    <label for="institution" class="label-title">Institution</label>
    <input type="text" name="institution" id="institution" value="" step="" placeholder="University of Oxford" class="form-control" >
</div>
                <div class="single-input mb-0">
    <label for="degree" class="label-title">Degree</label>
    <input type="text" name="degree" id="degree" value="" step="" placeholder="B.Sc. in Computer Science" class="form-control" >
</div>
                <div class="single-input mb-0">
    <label for="subject" class="label-title">Major (Field of study)</label>
    <input type="text" name="subject" id="subject" value="" step="" placeholder="Computer Science Engineering" class="form-control" >
</div>
                <div class="single-flex-input">
                    <div class="single-input mb-0">
    <label for="start_date_edu" class="label-title">Start date</label>
    <input type="text" name="start_date" id="start_date_edu" value="" step="" placeholder="" class="form-control date-picker" >
</div>
                    <div class="single-input mb-0">
    <label for="end_date_edu" class="label-title">End date</label>
    <input type="text" name="end_date" id="end_date_edu" value="" step="" placeholder="" class="form-control date-picker" >
</div>
                </div>
                <div class="single-flex-input mt-0">
    <div class="single-input"></div>
    <div class="single-input">
        <span><strong>info:</strong> If you are studying currently please choose an expected date</span>
    </div>
</div>
            </form>
        </div>
        <div class="popup-contents-btn flex-btn justify-content-end profile-border-top">
            <a href="javascript:void(0)" class="btn-profile btn-outline-gray btn-hover-danger popup-close"> <i class="las la-arrow-left"></i>Cancel</a>
            <a href="javascript:void(0)" class="btn-profile btn-bg-1 add_education">Save</a>
        </div>
    </div>
</div>
<!-- Add Education Ends  -->



<!-- Edit Education Starts  -->
<div class="popup-fixed education-popup">
    <div class="popup-contents">
        <span class="popup-contents-close popup-close"> <i class="fas fa-times"></i> </span>
        <h2 class="popup-contents-title"> Edit educational background </h2>
        <p class="popup-contents-para">Fill the form below to edit your educational background</p>
        <div class="popup-contents-form custom-form">
            <form action="#">
                <input type="hidden" name="edit_id" id="edit_id">
                <div class="single-input mb-3">
    <label for="edit_institution" class="label-title">Institution</label>
    <input type="text" name="edit_institution" id="edit_institution" value="" step="" placeholder="University of Oxford" class="form-control" >
</div>
                <div class="single-input mb-3">
    <label for="edit_degree" class="label-title">Degree</label>
    <input type="text" name="edit_degree" id="edit_degree" value="" step="" placeholder="B.Sc. in Computer Science" class="form-control" >
</div>
                <div class="single-input mb-3">
    <label for="edit_subject" class="label-title">Major (Field of study)</label>
    <input type="text" name="edit_subject" id="edit_subject" value="" step="" placeholder="Computer Science Engineering" class="form-control" >
</div>
                <div class="single-flex-input">
                    <div class="single-input mb-3">
    <label for="edit_start_date_edu" class="label-title">Start date</label>
    <input type="text" name="edit_start_date" id="edit_start_date_edu" value="" step="" placeholder="" class="form-control date-picker" >
</div>
                    <div class="single-input mb-3">
    <label for="edit_end_date_edu" class="label-title">End date</label>
    <input type="text" name="edit_end_date" id="edit_end_date_edu" value="" step="" placeholder="" class="form-control date-picker" >
</div>
                </div>
                <div class="single-flex-input mt-0">
    <div class="single-input"></div>
    <div class="single-input">
        <span><strong></strong> If you are studying currently please choose an expected date</span>
    </div>
</div>
            </form>
        </div>
        <div class="popup-contents-btn flex-btn justify-content-end profile-border-top">
            <a href="javascript:void(0)" class="btn-profile btn-outline-gray btn-hover-danger popup-close"> <i class="las la-arrow-left"></i>Cancel</a>
            <a href="javascript:void(0)" class="btn-profile btn-bg-1 update_single_education">Update</a>
        </div>
    </div>
</div>
<!-- Edit Education Ends  -->
                            <div class="profile-wrapper-item radius-10">
        <div class="profile-wrapper-item-flex flex-between align-items-center profile-border-bottom">
            <h4 class="profile-wrapper-item-title"> Skills </h4>
            <div class="profile-wrapper-item-plus display_edit_skill_wrapper edit_skill_show_hide"><i class="fa-regular fa-pen-to-square"></i></div>
        </div>

        <ul class="setup-wrapper-work-list freelancer_skill_list">
                                        <li class="setup-wrapper-work-list-item "> Laravel </li>
                            <li class="setup-wrapper-work-list-item "> Php </li>
                            <li class="setup-wrapper-work-list-item "> Node Js </li>
                            <li class="setup-wrapper-work-list-item "> Firebase on Android </li>
                            <li class="setup-wrapper-work-list-item "> Android </li>
                            <li class="setup-wrapper-work-list-item "> Android foundations </li>
                    </ul>
        <div class="edit_skill_wrapper">
            <div class="setup-wrapper-skill">
                <p class="setup-wrapper-skill-para">Type and hit ↵ Enter to add a skill or choose from suggestions below</p>

                <div class="setup-wrapper-skill-tagInputs mt-4">
                    <input type="text" id="skill_input" placeholder="__('select tags')">
                </div>
            </div>

            <h6 class="setup-wrapper-experience-details-subtitle mt-4">Suggested Skill </h6>
            <ul class="setup-wrapper-work-list mt-3">
                                                                </ul>
            <div class="btn-wrapper d-flex justify-content-end mt-3">
                <a href="javascript:void(0)" class="cmn-btn btn-bg-1 btn-small update_freelancer_skill">Update Skills</a>
            </div>
        </div>
    </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="profile-details-widget sticky_top">

                                                        <div class="profile-details-widget-single radius-10">
                                <div
                                    class="profile-wrapper-item-flex flex-between align-items-center profile-border-bottom">
                                    <h4 class="profile-wrapper-item-title"> Reviews </h4>
                                </div>
                                                                                                                                               <div class="profile-details-widget-inner">
                                            <div class="profile-details-widget-review">
                                                <div class="rating_profile_details">
                                                    <div class="rating_profile_details_icon">
                                                        <i data-star="4.7"></i>
                                                    </div>
                                                    <span class="rating_profile_details-para">4.7</span>
                                                </div>
                                                                                                   <h4 class="profile-details-widget-review-title mt-3">I will build responsive WordPress website design and ecommerce website</h4>
                                                                                            </div>
                                            <div class="profile-wrapper-details profile-border-top">
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Earned </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> $90.00 </h5>
                                                </div>
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Reviewed by </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> Andrew Fateh </h5>
                                                </div>
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Reviewed </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> Nov 25, 2023 </h5>
                                                </div>
                                            </div>
                                            <div class="profile-details-widget-single-bottom profile-border-top">
                                                <p class="profile-details-widget-single-bottom-para">It was a real pleasure working with Riad. I was new to this kind of job, and he took the time to share his knowledge with me so I was better prepared to navigate the process </p>
                                            </div>
                                        </div>
                                                                                                                                                                                   <div class="profile-details-widget-inner">
                                            <div class="profile-details-widget-review">
                                                <div class="rating_profile_details">
                                                    <div class="rating_profile_details_icon">
                                                        <i data-star="4.8"></i>
                                                    </div>
                                                    <span class="rating_profile_details-para">4.8</span>
                                                </div>
                                                                                                   <h4 class="profile-details-widget-review-title mt-3">I will build you a Laravel/WordPress recruitment website and publish for you</h4>
                                                                                            </div>
                                            <div class="profile-wrapper-details profile-border-top">
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Earned </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> $135.00 </h5>
                                                </div>
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Reviewed by </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> Istiak Ahmed </h5>
                                                </div>
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Reviewed </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> Nov 7, 2023 </h5>
                                                </div>
                                            </div>
                                            <div class="profile-details-widget-single-bottom profile-border-top">
                                                <p class="profile-details-widget-single-bottom-para">Just awesome service </p>
                                            </div>
                                        </div>
                                                                                                                                                                                   <div class="profile-details-widget-inner">
                                            <div class="profile-details-widget-review">
                                                <div class="rating_profile_details">
                                                    <div class="rating_profile_details_icon">
                                                        <i data-star="5"></i>
                                                    </div>
                                                    <span class="rating_profile_details-para">5</span>
                                                </div>
                                                                                                   <h4 class="profile-details-widget-review-title mt-3">I will create a responsive web design in HTML with 100% accuracy</h4>
                                                                                            </div>
                                            <div class="profile-wrapper-details profile-border-top">
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Earned </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> $54.00 </h5>
                                                </div>
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Reviewed by </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> Istiak Ahmed </h5>
                                                </div>
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Reviewed </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> Nov 7, 2023 </h5>
                                                </div>
                                            </div>
                                            <div class="profile-details-widget-single-bottom profile-border-top">
                                                <p class="profile-details-widget-single-bottom-para">I was completely impressed with their professionalism and customer service </p>
                                            </div>
                                        </div>
                                                                                                                                                                                   <div class="profile-details-widget-inner">
                                            <div class="profile-details-widget-review">
                                                <div class="rating_profile_details">
                                                    <div class="rating_profile_details_icon">
                                                        <i data-star="5"></i>
                                                    </div>
                                                    <span class="rating_profile_details-para">5</span>
                                                </div>
                                                                                                    <h4 class="profile-details-widget-review-title mt-3">Article Writer Needed ( Blog focusing on Immigration)</h4>
                                                                                            </div>
                                            <div class="profile-wrapper-details profile-border-top">
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Earned </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> $540.00 </h5>
                                                </div>
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Reviewed by </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> Andrew Fateh </h5>
                                                </div>
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Reviewed </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> Nov 7, 2023 </h5>
                                                </div>
                                            </div>
                                            <div class="profile-details-widget-single-bottom profile-border-top">
                                                <p class="profile-details-widget-single-bottom-para">Outstanding communication and exceptional customer service. Thus far, my team and I are highly satisfied with the progress of our platform </p>
                                            </div>
                                        </div>
                                                                                                                                                                                   <div class="profile-details-widget-inner">
                                            <div class="profile-details-widget-review">
                                                <div class="rating_profile_details">
                                                    <div class="rating_profile_details_icon">
                                                        <i data-star="4.8"></i>
                                                    </div>
                                                    <span class="rating_profile_details-para">4.8</span>
                                                </div>
                                                                                                    <h4 class="profile-details-widget-review-title mt-3">Laravel Ecommerce Extension Developer Needed</h4>
                                                                                            </div>
                                            <div class="profile-wrapper-details profile-border-top">
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Earned </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> $450.00 </h5>
                                                </div>
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Reviewed by </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> Andrew Fateh </h5>
                                                </div>
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Reviewed </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> Nov 7, 2023 </h5>
                                                </div>
                                            </div>
                                            <div class="profile-details-widget-single-bottom profile-border-top">
                                                <p class="profile-details-widget-single-bottom-para">As expected and great support. </p>
                                            </div>
                                        </div>
                                                                                                                                                                                   <div class="profile-details-widget-inner">
                                            <div class="profile-details-widget-review">
                                                <div class="rating_profile_details">
                                                    <div class="rating_profile_details_icon">
                                                        <i data-star="5"></i>
                                                    </div>
                                                    <span class="rating_profile_details-para">5</span>
                                                </div>
                                                                                                   <h4 class="profile-details-widget-review-title mt-3">I will develop you a beautiful website with JavaScript, React, Laravel</h4>
                                                                                            </div>
                                            <div class="profile-wrapper-details profile-border-top">
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Earned </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> $270.00 </h5>
                                                </div>
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Reviewed by </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> Andrew Fateh </h5>
                                                </div>
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Reviewed </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> Nov 6, 2023 </h5>
                                                </div>
                                            </div>
                                            <div class="profile-details-widget-single-bottom profile-border-top">
                                                <p class="profile-details-widget-single-bottom-para">Professional seller and responsible. </p>
                                            </div>
                                        </div>
                                                                                                                                                                                   <div class="profile-details-widget-inner">
                                            <div class="profile-details-widget-review">
                                                <div class="rating_profile_details">
                                                    <div class="rating_profile_details_icon">
                                                        <i data-star="4.8"></i>
                                                    </div>
                                                    <span class="rating_profile_details-para">4.8</span>
                                                </div>
                                                                                                   <h4 class="profile-details-widget-review-title mt-3">I will create a responsive web design in HTML with 100% accuracy</h4>
                                                                                            </div>
                                            <div class="profile-wrapper-details profile-border-top">
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Earned </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> $63.00 </h5>
                                                </div>
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Reviewed by </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> Andrew Fateh </h5>
                                                </div>
                                                <div class="profile-wrapper-details-single">
                                                    <span class="profile-wrapper-details-para"> Reviewed </span>
                                                    <h5 class="profile-wrapper-details-single-title mt-1"> Nov 6, 2023 </h5>
                                                </div>
                                            </div>
                                            <div class="profile-details-widget-single-bottom profile-border-top">
                                                <p class="profile-details-widget-single-bottom-para">I have completed my first order effectively. Just awesome seller and no doubt of work quality. </p>
                                            </div>
                                        </div>
                                                                                                </div>
                            
                            <div class="profile-details-widget-single radius-10">
    <div class="profile-wrapper-item-flex flex-between align-items-center profile-border-bottom">
        <h4 class="profile-wrapper-item-title"> Portfolio </h4>
                    <div class="profile-wrapper-item-plus add-portfolio-click add_portfolio_show_hide">
                <i class="fas fa-plus"></i>
            </div>
                    </div>
    <div class="profile-details-widget-portfolio-row portfolio_details_display">
                    <div class="profile-details-widget-portfolio-col click-portfolio view_portfolio_details"
                data-id="5">
                <div class="profile-details-portfolio ">
                    <div class="profile-details-portfolio-thumb">
                        <a href="#/">
                                                            <img src="https://xilancer.xgenious.com/assets/uploads/portfolio/1678798094-64106d0e7e758.png" alt="portfolio">
                                                    </a>
                    </div>
                    <div class="profile-details-portfolio-content mt-3">
                        <h5 class="profile-details-portfolio-content-title d-flex justify-content-between">
                            <a href="#/">Build App Website From Scratch34</a>
                        </h5>
                        <div class="d-flex justify-content-between align-items-center mt-1">
                            <p class="profile-details-portfolio-content-para">
                                Mar 13, 2023 </p>
                            <a href="#/" class="btn-profile btn-outline-1 btn-small">Details</a>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="profile-details-widget-portfolio-col click-portfolio view_portfolio_details"
                data-id="4">
                <div class="profile-details-portfolio ">
                    <div class="profile-details-portfolio-thumb">
                        <a href="#/">
                                                            <img src="https://xilancer.xgenious.com/assets/uploads/portfolio/1678780293-641027851d676.png" alt="portfolio">
                                                    </a>
                    </div>
                    <div class="profile-details-portfolio-content mt-3">
                        <h5 class="profile-details-portfolio-content-title d-flex justify-content-between">
                            <a href="#/">Build PHP Website From Scratch</a>
                        </h5>
                        <div class="d-flex justify-content-between align-items-center mt-1">
                            <p class="profile-details-portfolio-content-para">
                                Mar 13, 2023 </p>
                            <a href="#/" class="btn-profile btn-outline-1 btn-small">Details</a>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="profile-details-widget-portfolio-col click-portfolio view_portfolio_details"
                data-id="3">
                <div class="profile-details-portfolio ">
                    <div class="profile-details-portfolio-thumb">
                        <a href="#/">
                                                            <img src="https://xilancer.xgenious.com/assets/uploads/portfolio/1678780315-6410279b00cb4.png" alt="portfolio">
                                                    </a>
                    </div>
                    <div class="profile-details-portfolio-content mt-3">
                        <h5 class="profile-details-portfolio-content-title d-flex justify-content-between">
                            <a href="#/">Build Ecommerce Website From Scratch</a>
                        </h5>
                        <div class="d-flex justify-content-between align-items-center mt-1">
                            <p class="profile-details-portfolio-content-para">
                                Mar 13, 2023 </p>
                            <a href="#/" class="btn-profile btn-outline-1 btn-small">Details</a>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="profile-details-widget-portfolio-col click-portfolio view_portfolio_details"
                data-id="2">
                <div class="profile-details-portfolio ">
                    <div class="profile-details-portfolio-thumb">
                        <a href="#/">
                                                            <img src="https://xilancer.xgenious.com/assets/uploads/portfolio/1699336547-6549d163cbd51.png" alt="portfolio">
                                                    </a>
                    </div>
                    <div class="profile-details-portfolio-content mt-3">
                        <h5 class="profile-details-portfolio-content-title d-flex justify-content-between">
                            <a href="#/">Build Laravel Website From Scratch</a>
                        </h5>
                        <div class="d-flex justify-content-between align-items-center mt-1">
                            <p class="profile-details-portfolio-content-para">
                                Mar 13, 2023 </p>
                            <a href="#/" class="btn-profile btn-outline-1 btn-small">Details</a>
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
        <!-- Profile Details area end -->

        <!-- Change Portfolio Popup Starts -->
        <div class="popup-fixed change-portfolio-popup">
            <div class="popup-contents"></div>
        </div>
        <!-- Change Portfolio Popup Ends -->

    <!-- Add Portfolio Popup Starts -->
<div class="popup-fixed portfolioadd-popup">
    <div class="popup-contents">
        <span class="popup-contents-close popup-close"> <i class="fas fa-times"></i> </span>
        <h5 class="popup-contents-title">Add Portfolio</h5>
        <div class="error_msg_container mb-3"></div>
        <form action="#" id="add_portfolio_form">
            <div class="photo-uploaded photo-uploaded-padding center-text mt-4">
                <div class="photo-up loaded-flex uploadImage">
                    <div class="photo-uploaded-icon">
                        <img src="" class="portfolio_photo_preview">
                    </div>
                    <span class="create-project-wrapper-upload-browse-icon mt-3">
                        <i class="fa-solid fa-image"></i>
                    </span>
                    <span class="create-project-wrapper-upload-browse-para change_image_text"> Click to upload portfolio image </span>
                </div>
                <input class="photo-uploaded-file" type="file" name="image" id="upload_portfolio_photo">
                <span><strong>info:</strong>dimensions must be: 590x440</span>
            </div>

            <div class="popup-contents-form custom-form mt-4">
                <div class="single-input mb-0">
    <label for="portfolio_title" class="label-title">Title</label>
    <input type="text" name="portfolio_title" id="portfolio_title" value="" step="" placeholder="Write Project Title" class="form--control" >
</div>
                <span id="portfolio_title_char_length_check"></span>
                <div class="single-input">
    <label class="label-title">Description</label>
    <textarea name="portfolio_description" id="portfolio_description" class="form-message" cols="30" rows="3" placeholder="Type Project Details"></textarea>
</div>
                <span id="portfolio_description_char_length_check"></span>
            </div>
            <div class="popup-contents-btn flex-btn justify-content-end profile-border-top">
                <a href="javascript:void(0)" class="btn-profile btn-outline-gray btn-hover-danger popup-close"> Cancel </a>
                <button type="submit" class="btn-profile btn-bg-1 add_portfolio">Save</button>
            </div>
        </form>
    </div>
</div>
<!-- Add Portfolio Popup Ends -->
    <!-- Add Portfolio Popup Starts -->
<div class="popup-fixed portfolio_edit_popup">
    <div class="popup-contents">
        <span class="popup-contents-close popup-close"> <i class="fas fa-times"></i> </span>
        <h5 class="popup-contents-title">Edit Portfolio</h5>
        <div class="error_msg_container mb-3"></div>
        <form action="#" id="edit_portfolio_form">
            <input type="hidden" name="edit_portfolio_id" id="edit_portfolio_id">
            <div class="photo-uploaded photo-uploaded-padding center-text mt-4">
                <div class="photo-up loaded-flex uploadImage">
                    <div class="photo-uploaded-icon">
                        <img src="" id="portfolio_target_img" class="edit_portfolio_photo_preview">
                    </div>
                    <span class="create-project-wrapper-upload-browse-icon mt-3"><i class="fa-solid fa-image"></i></span>
                    <span class="create-project-wrapper-upload-browse-para"> Click to change photo </span>
                </div>
                <input class="photo-uploaded-file" type="file" name="edit_image" id="change_portfolio_photo">
                <small class="text-info">dimensions must be: 590x440</small>
            </div>

            <div class="popup-contents-form custom-form mt-4">
                <div class="single-input mb-0">
    <label for="edit_portfolio_title" class="label-title">Title</label>
    <input type="text" name="edit_portfolio_title" id="edit_portfolio_title" value="" step="" placeholder="Write Project Title" class="form--control" >
</div>
                <span id="edit_portfolio_title_char_length_check"></span>
                <div class="single-input">
    <label class="label-title">Description</label>
    <textarea name="edit_portfolio_description" id="edit_portfolio_description" class="form-message" cols="30" rows="3" placeholder="Type Project Details"></textarea>
</div>
                <span id="edit_portfolio_description_char_length_check"></span>
            </div>
            <div class="popup-contents-btn flex-btn justify-content-end profile-border-top">
                <a href="javascript:void(0)" class="btn-profile btn-outline-gray btn-hover-danger popup-close"> Cancel </a>
                <button type="submit" class="btn-profile btn-bg-1 edit_portfolio">Update</button>
            </div>
        </form>
    </div>
</div>
<!-- Add Portfolio Popup Ends -->

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
    <script src="https://xilancer.xgenious.com/assets/common/js/sweetalert2.js"></script>
    <script src="https://xilancer.xgenious.com/assets/common/js/select2.min.js"></script>
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
    <script>
    (function ($) {
        "use strict";
        $(document).ready(function () {
            //available for work or not
            $(document).on('click','#check_work_availability',function(e){
                e.preventDefault();
                let user_id = $(this).data('user_id');
                let check_work_availability = $(this).data('check_work_availability');
                Swal.fire({
                    title: "Are you sure?",
                    text: "To change work availability status !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Yes, change it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url:"https://xilancer.xgenious.com/freelancer/portfolio/work-availability-status",
                            method:'post',
                            data:{user_id:user_id,check_work_availability:check_work_availability},
                            success:function(res){
                                if(res.status == 'success'){
                                    $('.display_work_availability').load(location.href + ' .display_work_availability');
                                    toastr_success_js("Work Availability Status Successfully Changed")
                                }
                            }
                        })
                    }
                })
            })

            $('#country_id').select2();
            $('#state_id').select2();

            // change country and get state
            $(document).on('change','#country_id', function() {
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

            // professional title length check
            $('#professional_title_char_length_check').hide()
            $('#professional_title').on('keydown keyup change', function(){
                let title_min_length = 10;
                let title_max_length = 60;
                let professional_title_length = $('#professional_title').val().length;
                $('#professional_title_char_length_check').show();

                if(professional_title_length < title_min_length){
                    $('#professional_title_char_length_check').html('<p class="text text-danger">Length is short, minimum '+ title_min_length +' required.</p>');
                }else if(professional_title_length > title_max_length){
                    $('#professional_title_char_length_check').html('<p class="text text-danger">Length is not valid, maximum '+ title_max_length +' allowed.</p>');
                }else{
                    $('#professional_title_char_length_check').html('<p class="text text-success">Length is valid</p>');
                }
            });

            // professional description length check
            $('#professional_description_char_length_check').hide()
            $('#professional_description').on('keydown keyup change', function(){
                let description_min_length = 50;
                let description_max_length = 150;
                let professional_description_length = $('#professional_description').val().length;
                $('#professional_description_char_length_check').show();

                if(professional_description_length < description_min_length){
                    $('#professional_description_char_length_check').html('<p class="text text-danger">Length is short, minimum '+ description_min_length +' required.</p>');
                }else if(professional_description_length > description_max_length){
                    $('#professional_description_char_length_check').html('<p class="text text-danger">Length is not valid, maximum '+ description_max_length +' allowed.</p>');
                }else{
                    $('#professional_description_char_length_check').html('<p class="text text-success">Length is valid</p>');
                }
            });

            //update profile
            $(document).on('click','.edit_public_profile_info',function(e){
                e.preventDefault();
                let first_name = $('#first_name').val();
                let last_name = $('#last_name').val();
                let title = $('#professional_title').val();
                let description = $('#professional_description').val();
                let country_id = $('#country_id').val();
                let state_id = $('#state_id').val();

                if(first_name == '' || last_name =='' || title == '' || description == '' || country_id==''){
                    toastr_warning_js("Please fill all fields.")
                    return false;
                }else{
                    $.ajax({
                        url:"https://xilancer.xgenious.com/freelancer/portfolio/profile-details-update",
                        method:'post',
                        data:{first_name:first_name,last_name:last_name,title:title,description:description,country_id:country_id,state_id:state_id},
                        success:function(res){
                            if(res.status=='success'){
                                $('#profileModal').modal('hide');
                                $('.display_profile_info').load(location.href + ' .display_profile_info');
                                toastr_success_js("Profile Info Successfully Updated")
                            }
                        },
                        error:function(err){
                            let error = err.responseJSON;
                            $('.error_msg_container').html('');
                            $.each(error.errors, function (index, value) {
                                $('.error_msg_container').append('<p class="text-danger">'+value+'<p>');
                            });
                        }
                    });
                }
            });

            //update hourly rate
            $(document).on('click','.edit_public_hourly_rate',function(e){
                e.preventDefault();
                let hourly_rate = $('#hourly_rate').val();

                if(hourly_rate == ''){
                    toastr_warning_js("price is required.")
                    return false;
                }else{
                    $.ajax({
                        url:"https://xilancer.xgenious.com/freelancer/portfolio/profile-details-hourly-rate",
                        method:'post',
                        data:{hourly_rate:hourly_rate},
                        success:function(res){
                            if(res.status=='success'){
                                $('#priceModal').modal('hide');
                                $('.display_hourly_rate').load(location.href + ' .display_hourly_rate');
                                toastr_success_js("Price Successfully Updated")
                            }
                        },
                        error:function(err){
                            let error = err.responseJSON;
                            $('.error_msg_container').html('');
                            $.each(error.errors, function (index, value) {
                                $('.error_msg_container').append('<p class="text-danger">'+value+'<p>');
                            });
                        }
                    });
                }
            });

            //Portfolio add Popup
            $(document).on('click', '.popup-overlay, .popup-close', function() {
                $('.portfolioadd-popup, .popup-overlay').removeClass('popup-active');
            });
            $(document).on('click', '.add-portfolio-click', function() {
                $('.portfolioadd-popup, .popup-overlay').toggleClass('popup-active');
            });

            //portfolio photo upload
            document.querySelector('#upload_portfolio_photo').addEventListener('change', function() {
                $("#add_portfolio_form").find('.change_image_text').text("Click to change photo")
                if (this.files && this.files[0]) {
                    let img = document.querySelector('.portfolio_photo_preview');
                    img.onload = () =>{
                        URL.revokeObjectURL(img.src);  // no longer needed, free memory
                    }
                    img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                    document.querySelector(".portfolio_photo_preview").files = this.files;
                }
            });

            // portfolio title length check
            $('#portfolio_title_char_length_check').hide()
            $('#portfolio_title').on('keydown keyup change', function(){
                let title_min_length = 10;
                let title_max_length = 60;
                let portfolio_title_length = $('#portfolio_title').val().length;
                $('#portfolio_title_char_length_check').show();

                if(portfolio_title_length < title_min_length){
                    $('#portfolio_title_char_length_check').html('<p class="text text-danger">Length is short, minimum '+ title_min_length +' required.</p>');
                }else if(portfolio_title_length > title_max_length){
                    $('#portfolio_title_char_length_check').html('<p class="text text-danger">Length is not valid, maximum '+ title_max_length +' allowed.</p>');
                }else{
                    $('#portfolio_title_char_length_check').html('<p class="text text-success">Length is valid</p>');
                }
            });

            // portfolio description length check
            $('#portfolio_description_char_length_check').hide()
            $('#portfolio_description').on('keydown keyup change', function(){
                let description_min_length = 50;
                let description_max_length = 150;
                let portfolio_description_length = $('#portfolio_description').val().length;
                $('#portfolio_description_char_length_check').show();

                if(portfolio_description_length < description_min_length){
                    $('#portfolio_description_char_length_check').html('<p class="text text-danger">Length is short, minimum '+ description_min_length +' required.</p>');
                }else if(portfolio_description_length > description_max_length){
                    $('#portfolio_description_char_length_check').html('<p class="text text-danger">Length is not valid, maximum '+ description_max_length +' allowed.</p>');
                }else{
                    $('#portfolio_description_char_length_check').html('<p class="text text-success">Length is valid</p>');
                }
            });

            //add portfolio
            $(document).on('submit','#add_portfolio_form',function(e){
                e.preventDefault();
                let image = $('#upload_portfolio_photo').val();
                let title = $('#portfolio_title').val();
                let description = $('#portfolio_description').val();
                let formData = new FormData(this);

                if(image == '' || title == '' || description == ''){
                    toastr_warning_js("Image, title and description fields are require")
                    return false;
                }else{
                    $.ajax({
                        url:"https://xilancer.xgenious.com/freelancer/portfolio/add",
                        method:'post',
                        data:formData,
                        cache:false,
                        contentType: false,
                        processData: false,
                        success:function(res){
                            if(res.status=='success'){
                                $('.portfolioadd-popup, .popup-overlay').removeClass('popup-active');
                                $('.portfolio_details_display').load(location.href + ' .portfolio_details_display');
                                toastr_success_js("Portfolio Successfully Added")
                            }
                        },
                        error:function(err){
                            let error = err.responseJSON;
                            $('.error_msg_container').html('');
                            $.each(error.errors, function (index, value) {
                                $('.error_msg_container').append('<p class="text-danger">'+value+'<p>');
                            });
                        }
                    });
                }
            });

            //Open and close Popup for display Portfolio details
            $(document).on('click', '.popup-overlay, .popup-close', function() {
                $('.change-portfolio-popup, .portfolio_edit_popup, .popup-overlay').removeClass('popup-active');
            });
            $(document).on('click', '.click-portfolio', function() {
                $('.change-portfolio-popup, .popup-overlay').toggleClass('popup-active');
            });

            // view portfolio details
            $(document).on('click','.view_portfolio_details',function(e){
                let portfolio_id = $(this).data('id');
                $.ajax({
                    url:"https://xilancer.xgenious.com/freelancer/portfolio-details/display",
                    method:'post',
                    data:{id:portfolio_id},
                    success:function(res){
                      $('.change-portfolio-popup .popup-contents').html(res);
                    }
                });
            });

            //portfolio photo change
            document.querySelector('#change_portfolio_photo').addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    let img = document.querySelector('.edit_portfolio_photo_preview');
                    img.onload = () =>{
                        URL.revokeObjectURL(img.src);  // no longer needed, free memory
                    }
                    img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                    document.querySelector(".edit_portfolio_photo_preview").files = this.files;
                }
            });

            //edit portfolio popup
            $(document).on('click','.edit_portfolio_details',function(){
                let portfolio_id = $(this).data('id');
                let portfolio_title = $(this).data('title');
                let portfolio_description = $(this).data('description');
                let portfolio_image_name = $(this).data('image');
                let portfolio_image = "../assets/uploads/portfolio/" + portfolio_image_name;

                $('#edit_portfolio_title_char_length_check').html('');
                $('#edit_portfolio_description_char_length_check').html('');
                $('.error_msg_container').html('');

                $('#edit_portfolio_id').val(portfolio_id);
                $('#portfolio_target_img').attr('src', portfolio_image);
                $('#edit_portfolio_title').val(portfolio_title);
                $('#edit_portfolio_description').val(portfolio_description);
                $('.change-portfolio-popup, .popup-overlay').removeClass('popup-active');
                $('.portfolio_edit_popup, .popup-overlay').toggleClass('popup-active');
            });

            // edit portfolio title length check
            $('#edit_portfolio_title_char_length_check').hide()
            $('#edit_portfolio_title').on('keydown keyup change', function(){
                let title_min_length = 10;
                let title_max_length = 60;
                let portfolio_title_length = $('#edit_portfolio_title').val().length;
                $('#edit_portfolio_title_char_length_check').show();

                if(portfolio_title_length < title_min_length){
                    $('#edit_portfolio_title_char_length_check').html('<p class="text text-danger">Length is short, minimum '+ title_min_length +' required.</p>');
                }else if(portfolio_title_length > title_max_length){
                    $('#edit_portfolio_title_char_length_check').html('<p class="text text-danger">Length is not valid, maximum '+ title_max_length +' allowed.</p>');
                }else{
                    $('#edit_portfolio_title_char_length_check').html('<p class="text text-success">Length is valid</p>');
                }
            });

            // edit portfolio description length check
            $('#edit_portfolio_description_char_length_check').hide()
            $('#edit_portfolio_description').on('keydown keyup change', function(){
                let description_min_length = 50;
                let description_max_length = 150;
                let portfolio_description_length = $('#edit_portfolio_description').val().length;
                $('#edit_portfolio_description_char_length_check').show();

                if(portfolio_description_length < description_min_length){
                    $('#edit_portfolio_description_char_length_check').html('<p class="text text-danger">Length is short, minimum '+ description_min_length +' required.</p>');
                }else if(portfolio_description_length > description_max_length){
                    $('#edit_portfolio_description_char_length_check').html('<p class="text text-danger">Length is not valid, maximum '+ description_max_length +' allowed.</p>');
                }else{
                    $('#edit_portfolio_description_char_length_check').html('<p class="text text-success">Length is valid</p>');
                }
            });

            //update portfolio
            $(document).on('submit','#edit_portfolio_form',function(e){
                e.preventDefault();
                let image = $('#edit_upload_portfolio_photo').val();
                let title = $('#edit_portfolio_title').val();
                let description = $('#edit_portfolio_description').val();
                let formData = new FormData(this);

                if(image == '' || title == '' || description == ''){
                    toastr_warning_js("Image, title and description fields are require")
                    return false;
                }else {
                    $.ajax({
                        url: "https://xilancer.xgenious.com/freelancer/portfolio/edit",
                        method: 'post',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (res) {
                            if(res.status=='success'){
                                $('.portfolio_edit_popup, .popup-overlay').removeClass('popup-active');
                                $('.portfolio_details_display').load(location.href + ' .portfolio_details_display');
                                toastr_success_js("Portfolio Successfully Updated")
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
            });

            //delete portfolio
            $(document).on('click','.delete_portfolio',function(e){
                e.preventDefault();
                let portfolio_id = $(this).data('id');
                $('.change-portfolio-popup, .popup-overlay').removeClass('popup-active');
                Swal.fire({
                    title: "Are you sure?",
                    text: "To delete this portfolio !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url:"https://xilancer.xgenious.com/freelancer/portfolio/delete",
                            method:'post',
                            data:{id:portfolio_id},
                            success:function(res){
                                if(res.status == 'success'){
                                    $('.portfolio_details_display').load(location.href + ' .portfolio_details_display');
                                    toastr_delete_js("Portfolio Successfully Deleted")
                                }
                            }
                        })
                    }
                })
            })

            //delete project
            $(document).on('click','.delete_project',function(e){
                e.preventDefault();
                let project_id = $(this).data('project-id');
                $('.change-portfolio-popup, .popup-overlay').removeClass('popup-active');
                Swal.fire({
                    title: "Are you sure?",
                    text: "To delete this project !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url:"https://xilancer.xgenious.com/freelancer/project/delete-project",
                            method:'post',
                            data:{project_id:project_id},
                            success:function(res){
                                if(res.status == 'success'){
                                    $('.project_wrapper_area').load(location.href + ' .project_wrapper_area');
                                    toastr_delete_js("Project Successfully Deleted")
                                }
                            }
                        })
                    }
                })
            })


            //choose skill
            const myTagInput = new TagsInputs({
                selector: 'skill_input',
                duplicate: false,
                max: 30,
            });

            
                        myTagInput.addData(["Laravel"]);
                        myTagInput.addData([" Php"]);
                        myTagInput.addData([" Node Js"]);
                        myTagInput.addData([" Firebase on Android"]);
                        myTagInput.addData([" Android"]);
                        myTagInput.addData([" Android foundations"]);
            
            $(document).on('click','.choose_skill',function (){
                let skill = $(this).text();
                myTagInput.addData([skill]);
            });

            //update skill
            $('.edit_skill_wrapper').hide();
            $(document).on('click','.display_edit_skill_wrapper',function(){
                $('.edit_skill_wrapper').show();
                $('.freelancer_skill_list').hide();
            });
            $(document).on('click','.update_freelancer_skill',function(){
                let skill = $('#skill_input').val();
                $.ajax({
                    url: "https://xilancer.xgenious.com/freelancer/account/add-skill",
                    type: 'post',
                    data: {skill: skill},
                    success: function(res){
                        if(res.status == 'ok'){
                            toastr_success_js("Skill Successfully Updated");
                            $('.edit_skill_wrapper').hide();
                            $('.freelancer_skill_list').show();
                            $('.freelancer_skill_list').load(location.href + ' .freelancer_skill_list');
                        }
                    }
                });
            });

            // todo add education
            $(document).on('click','.add_education',function(){
                let institution = $('#institution').val();
                let degree = $('#degree').val();
                let subject = $('#subject').val();
                let start_date = $('#start_date_edu').val();
                let end_date = $('#end_date_edu').val();
                if(institution == '' || degree == '' || subject == '' || start_date == '' || end_date == ''){
                    toastr_warning_js("Please fill all fields !");
                    return false;
                }else{
                    $.ajax({
                        url: "https://xilancer.xgenious.com/freelancer/account/add-education",
                        type: 'post',
                        data: {
                            institution: institution,
                            degree:degree,
                            subject:subject,
                            start_date:start_date,
                            end_date:end_date,
                        },
                        success: function(res){
                            if(res.status == 'ok'){
                                $('.popup-fixed, .popup-overlay').removeClass('popup-active');
                                $('#display_user_education_data').load(location.href + " #display_user_education_data");
                                $(addEducationForm)[0].reset();
                                toastr_success_js("Education Successfully Added");
                            }
                        }
                    });
                }
            });

            // edit education
            $(document).on('click','.edit_single_education',function(){
                let id = $(this).data('id');
                let institution = $(this).data('institution');
                let subject = $(this).data('subject');
                let degree = $(this).data('degree');
                let start_date = $(this).data('start_date');
                let end_date = $(this).data('end_date');

                $('#edit_id').val(id);
                $('#edit_institution').val(institution);
                $('#edit_subject').val(subject);
                $('#edit_degree').val(degree);
                $('#edit_start_date_edu').val(start_date);
                $('#edit_start_date_edu').parent().find('.date-picker').val(start_date);
                $('#edit_end_date_edu').val(end_date);
                $('#edit_end_date_edu').parent().find('.date-picker').val(end_date);
            });

            // update education
            $(document).on('click','.update_single_education',function(){
                let id = $('#edit_id').val();
                let institution = $('#edit_institution').val();
                let subject = $('#edit_subject').val();
                let degree = $('#edit_degree').val();
                let start_date = $('#edit_start_date_edu').val();
                let end_date = $('#edit_end_date_edu').val();
                if(institution == '' || subject == '' || degree == '' || start_date == '' || end_date == ''){
                    toastr_warning_js('Please fill all fields !');
                    return false;
                }else{
                    $.ajax({
                        url: "https://xilancer.xgenious.com/freelancer/account/update-education",
                        type: 'post',
                        data: {
                            id: id,
                            institution: institution,
                            subject:subject,
                            degree:degree,
                            start_date:start_date,
                            end_date:end_date,
                        },
                        success: function(res){
                            if(res.status == 'ok'){
                                toastr_success_js("Education Successfully Updated");
                                $('.popup-fixed, .popup-overlay').removeClass('popup-active');
                                $('#display_user_education_data').load(location.href + " #display_user_education_data");
                                $(addExperienceForm)[0].reset();
                            }
                        }
                    });
                }
            });

            //delete education
            $(document).on('click','.delete_education',function(e){
                e.preventDefault();
                let education_id = $(this).data('id');
                Swal.fire({
                    title: "Are you sure?",
                    text: "To delete this education !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url:"https://xilancer.xgenious.com/freelancer/portfolio/delete-education",
                            method:'post',
                            data:{id:education_id},
                            success:function(res){
                                if(res.status == 'success'){
                                    $('#display_user_education_data').load(location.href + ' #display_user_education_data');
                                    toastr_delete_js("Education Successfully Deleted")
                                }
                            }
                        })
                    }
                })
            })

            // change country and get state
            $(document).on('change', '#country_id , #edit_country_id', function() {
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

            // add experience
            $(document).on('click','.add_experience',function(){
                let experience_title = $('#experience_title').val();
                let organization = $('#organization').val();
                let address = $('#address').val();
                let short_description = $('#short_description').val();
                let start_date = $('#start_date').val();
                let end_date = $('#end_date').val();

                if(experience_title == '' || organization == '' || address == '' || short_description == '' || start_date == ''){
                    toastr_warning_js("Please fill all fields !");
                    return false;
                }
                if(end_date != '' && start_date >end_date){
                    toastr_warning_js("Start date must not greater than end date !");
                    return false;
                }else{
                    $.ajax({
                        url: "https://xilancer.xgenious.com/freelancer/account/add-experience",
                        type: 'post',
                        data: {
                            experience_title: experience_title,
                            organization:organization,
                            address:address,
                            short_description:short_description,
                            country_id:1,
                            state_id:1,
                            start_date:start_date,
                            end_date:end_date,
                        },
                        success: function(res){
                            if(res.status == 'ok'){
                                $('.popup-fixed, .popup-overlay').removeClass('popup-active');
                                $('#display_user_experience_data').load(location.href + " #display_user_experience_data");
                                $(addExperienceForm)[0].reset();
                                toastr_success_js("Experience Successfully Added");
                            }
                        }
                    });
                }
            });

            // edit experience
            $(document).on('click','.edit_single_experience',function(){
                let id = $(this).data('id');
                let title = $(this).data('title');
                let organization = $(this).data('organization');
                let address = $(this).data('address');
                let short_description = $(this).data('short_description');
                let start_date = $(this).data('start_date');
                let end_date = $(this).data('end_date');

                $('#edit_id').val(id);
                $('#edit_experience_title').val(title);
                $('#edit_organization').val(organization);
                $('#edit_address').val(address);
                $('#edit_short_description').val(short_description);
                $('#edit_start_date').val(start_date);
                $('#edit_start_date').parent().find('.date-picker').val(start_date);
                $('#edit_end_date').parent().find('.date-picker').val(end_date);
                $('#edit_end_date').val(end_date);
            });

            // update experience
            $(document).on('click','.update_single_experience',function(){
                let id = $('#edit_id').val();
                let experience_title = $('#edit_experience_title').val();
                let organization = $('#edit_organization').val();
                let address = $('#edit_address').val();
                let short_description = $('#edit_short_description').val();
                let start_date = $('#edit_start_date').val();
                let end_date = $('#edit_end_date').val();
                if(experience_title == '' || organization == '' || address == '' || short_description == '' || start_date == ''){
                    toastr_warning_js('Please fill all fields !');
                    return false;
                }
                if(end_date != '' && start_date >end_date){
                    toastr_warning_js("Start date must not greater than end date !");
                    return false;
                }else{
                    $.ajax({
                        url: "https://xilancer.xgenious.com/freelancer/account/update-experience",
                        type: 'post',
                        data: {
                            id: id,
                            experience_title: experience_title,
                            organization:organization,
                            address:address,
                            short_description:short_description,
                            country_id:1,
                            state_id:1,
                            start_date:start_date,
                            end_date:end_date,
                        },
                        success: function(res){
                            if(res.status == 'ok'){
                                $('.popup-fixed, .popup-overlay').removeClass('popup-active');
                                $('#display_user_experience_data').load(location.href + " #display_user_experience_data");
                                $(addExperienceForm)[0].reset();
                                toastr_success_js("Experience Successfully Updated");
                            }
                        }
                    });
                }
            });

            //delete experience
            $(document).on('click','.delete_experience',function(e){
                e.preventDefault();
                let education_id = $(this).data('id');
                Swal.fire({
                    title: "Are you sure?",
                    text: "To delete this experience !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url:"https://xilancer.xgenious.com/freelancer/portfolio/delete-experience",
                            method:'post',
                            data:{id:education_id},
                            success:function(res){
                                if(res.status == 'success'){
                                    $('#display_user_experience_data').load(location.href + ' #display_user_experience_data');
                                    toastr_delete_js("Experience Successfully Deleted")
                                }
                            }
                        })
                    }
                })
            })

            //available for order or not
            $(document).on('click','#available_for_order_or_not',function(e){
                e.preventDefault();
                let project_id = $(this).data('id');
                let project_on_off = $(this).data('project_on_off');
                Swal.fire({
                    title: "Are you sure?",
                    text: "To change availability status !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Yes, change it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url:"https://xilancer.xgenious.com/freelancer/portfolio/availability-status",
                            method:'post',
                            data:{id:project_id,project_on_off:project_on_off},
                            success:function(res){
                                if(res.status == 'success'){
                                    $('.display_availability_for_order_or_not_'+project_id).load(location.href + ' .display_availability_for_order_or_not_'+project_id);
                                    toastr_success_js("Availability Status Successfully Changed")
                                }
                            }
                        })
                    }
                })
            })

            // view as a client
            $(document).on('click','.view_as_a_client',function(){
                $('.change_client_view').html('<a href="javascript:void(0)" class="btn-profile btn-outline-gray view_original"> Exit View as Client </a>')
                $('.price_edit_show_hide').hide();
                $('.edit_info_show_hide').hide();
                $('.create_project_show_hide').hide();
                $('.order_availability_show_hide').hide();
                $('.add_experience_show_hide').hide();
                $('.edit_experience_show_hide').hide();
                $('.delete_experience_show_hide').hide();
                $('.add_education_show_hide').hide();
                $('.edit_education_show_hide').hide();
                $('.delete_education_show_hide').hide();
                $('.edit_skill_show_hide').hide();
                $('.add_portfolio_show_hide').hide();
                $('.profile-wrapper-item-bottom.profile-border-top').addClass("d-none")
            })

            $(document).on('click','.view_original',function(){
                $('.change_client_view').html('<a href="javascript:void(0)" class="btn-profile btn-outline-gray view_as_a_client"> View as Client </a>')
                $('.price_edit_show_hide').show();
                $('.edit_info_show_hide').show();
                $('.create_project_show_hide').show();
                $('.order_availability_show_hide').show();
                $('.add_experience_show_hide').show();
                $('.edit_experience_show_hide').show();
                $('.delete_experience_show_hide').show();
                $('.add_education_show_hide').show();
                $('.edit_education_show_hide').show();
                $('.delete_education_show_hide').show();
                $('.edit_skill_show_hide').show();
                $('.add_portfolio_show_hide').show();
                $('.profile-wrapper-item-bottom.profile-border-top').removeClass("d-none")
            })

            //view project reject details
            $(document).on('click','.view_project_reject_reason_details',function(){
                let description = $(this).data('project-reject-description')
                $('.project_reject_reason_description').text(description);
            })

            // promotion plugin js start
            $(document).on('change','#get_package_budget',function (){
                let package_budget = $(this).find(':selected').attr('data-budget')
                $('#set_package_budget').val(package_budget);
            });

            //promote project
            $(document).on('click', '#get_package_budget, .wallet_selected_payment_gateway , .payment_getway_image ul li',function() {
                let site_default_currency_symbol = '$';
                let gateway = $('#order_from_user_wallet').val();
                let package_budget = $('#set_package_budget').val();

                
                if(gateway == 'wallet' || gateway == 'manual_payment'){
                    $('.show_hide_transaction_section').addClass('d-none');
                    let wallet_balance = 1330.6;
                    if(package_budget > wallet_balance){
                        $('.display_wallet_shortage_balance').html('<span class="text-danger">Wallet Balance Shortage:'+ site_default_currency_symbol + (package_budget-wallet_balance) +'<a class="btn btn-primary btn-sm ml-2" href="https://xilancer.xgenious.com/freelancer/wallet/history" target="_blank">Deposit Wallet</a></span>');
                    }
                }else{
                    if(""){
                        let transaction_amount = 0;
                        $('.show_hide_transaction_section').removeClass('d-none');
                        let transaction_type = "";
                        let transaction_charge = parseFloat("0");
                        transaction_amount = transaction_type == 'fixed' ? transaction_charge : (package_budget*transaction_charge/100);
                        $('.currency_symbol').text(site_default_currency_symbol);
                        $('.transaction_fee_amount').text(transaction_amount.toFixed(2));
                        $('#transaction_fee').val(transaction_amount)
                    }
                }
            });

            $(document).on('click','.open_project_promote_modal',function(){
                $('#set_project_id_for_promote').val($(this).data('project-id'))

                if($('#set_project_id_for_promote').val() == 0){
                    $('.heading_title_for_promotion_modal').text("Promote Profile")
                    $('.warning_for_promotion_modal').text("Notice: Days refers to the number of days a freelancer profile will be displayed in the talent page promotional area after he buy a package.")
                }else{
                    $('.heading_title_for_promotion_modal').text("Promote Project")
                    $('.warning_for_promotion_modal').text("Notice: Days refers to the number of days a freelancer project will be displayed in the project promotional area after he buy a package.")

                }
            })

            $(document).on('click','.confirm_promote_project',function(){
                let package_budget = $('#set_package_budget').val();
                let payment_gateway = $('#order_from_user_wallet').val();
                let manual_payment_image = $('input[name="manual_payment_image"]').val();

                if(package_budget == ''){
                    toastr_warning_js("Please choose package plan")
                    return false;
                }
                if(payment_gateway == 'manual_payment'){
                    if(manual_payment_image == ''){
                        toastr_warning_js("Please choose image for manual payment.")
                        return false;
                    }
                }

                //load spinner
                $('#promote_project_load_spinner').html('<i class="fas fa-spinner fa-pulse"></i>')
                setTimeout(function () {
                    $('#promote_project_load_spinner').html('');
                }, 10000);
            });

            // promotion plugin js end

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

    //cretae function

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
