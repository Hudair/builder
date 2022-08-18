
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @if(_lang('SYSDIRECTIONDIR') == 'rtl')direction="rtl" dir="rtl" style="direction: rtl"@endif >

    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
        <base href="{{ asset('public/backend/assets/admin')}}"><!--end::Base Path -->
        <meta charset="utf-8" />
        <title>{{ get_option('site_title', 'Spotlayer Framework') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
		<!-- App favicon -->
        <link rel="shortcut icon" href="{{ get_favicon() }}">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="keywords" content="" />
		<meta name="description" content="">
        <meta name="author" content=""/>

        <!--begin::Fonts -->
        <link href="//fonts.googleapis.com/css?family=Nunito|Roboto" rel="stylesheet">
        <!--end::Fonts -->

		<!-- App Css -->
        <link rel="stylesheet" href="{{ asset('public/backend/assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('public/backend/assets/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('public/backend/assets/css/themify-icons.css') }}">
		<link rel="stylesheet" href="{{ asset('public/backend/assets/css/metisMenu.css') }}">
		<link rel="stylesheet" href="{{ asset('public/backend/assets/css/slicknav.min.css') }}">
		
		<!-- Others css -->
		<link rel="stylesheet" href="{{ asset('public/backend/assets/css/styles.css?v=1.2') }}">
		<link rel="stylesheet" href="{{ asset('public/backend/assets/css/responsive.css?v=1.2') }}">
		

        <!--begin::Global Theme Styles(used by all pages) -->
            <link href="./admin/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
			<link href="{{ asset('public/backend/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
			<link href="{{ asset('public/backend/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
            @if (_lang('SYSDIRECTIONDIR') == 'rtl')
                <link href="./admin/css/demo1/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
                <link href="{{ asset('public/backend/admin/vendors/custom/notifications/css/ns-default.rtl.css') }}" rel="stylesheet" type="text/css" />
                <link href="{{ asset('public/backend/admin/vendors/custom/notifications/css/ns-style-other.rtl.css') }}" rel="stylesheet" type="text/css" />
                <link href="//fonts.googleapis.com/css?family=Cairo:300,400,600,700" rel="stylesheet">


                <!--begin::Layout Skins(used by all pages) -->
                <link href="./admin/css/demo1/skins/header/base/light.rtl.css" rel="stylesheet" type="text/css" />
                <link href="./admin/css/demo1/skins/header/menu/light.rtl.css" rel="stylesheet" type="text/css" />
                <link href="./admin/css/demo1/skins/brand/light.rtl.css" rel="stylesheet" type="text/css" />
                <link href="./admin/css/demo1/skins/aside/light.rtl.css" rel="stylesheet" type="text/css" />
                <!--end::Layout Skins -->
            @else
                <link href="./admin/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
                <link href="./admin/vendors/custom/notifications/css/ns-default.css" rel="stylesheet" type="text/css" />
                <link href="./admin/vendors/custom/notifications/css/ns-style-other.css" rel="stylesheet" type="text/css" />

                <!--begin::Layout Skins(used by all pages) -->
                <link href="./admin/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
                <link href="./admin/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
                <link href="./admin/css/demo1/skins/brand/light.css" rel="stylesheet" type="text/css" />
                <link href="./admin/css/demo1/skins/aside/light.css" rel="stylesheet" type="text/css" />
                <!--end::Layout Skins -->
            @endif
        <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        <!--end::Layout Skins -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.3.8/css/ajax-bootstrap-select.min.css'>
		
		@include('layouts.others.languages')

    </head>

    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed"  >
     <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
            <div class="kt-header-mobile__logo">
		  		<a href="{{ url('dashboard') }}">
           			<img alt="Logo" src="{{ Auth::user()->company_id != '' ? get_company_logo() : get_logo() }}" style="max-height:40px"/>
             	</a>
            </div>
            <div class="kt-header-mobile__toolbar">
                <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
                <button class="kt-header-mobile__toggler kt-hidden-tablet-and-mobile" id="kt_header_mobile_toggler"><span></span></button>
             <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
            </div>
        </div>
		<!-- end:: Header Mobile -->
		



        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                <!-- begin:: Aside -->
                <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>

                <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
                    <!-- begin:: Aside -->
                    <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
                        <div class="kt-aside__brand-logo">
		  					<a href="{{ url('dashboard') }}">
                                <img alt="Logo" src="{{ Auth::user()->company_id != '' ? get_company_logo() : get_logo() }}" style="max-height:50px;"/>
                            </a>
                        </div>

                    <div class="kt-aside__brand-tools">
                        <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                                        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                                        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                                    </g>
                                </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero"/>
                                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                                    </g>
                                </svg>
                            </span>
                        </button>
                    <!--
                    <button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
                    -->
                    </div>
                </div>
                <!-- end:: Aside -->
                <!-- begin:: Aside Menu -->
                <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">

                    <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">

                        <div class="kt-widget kt-widget--user-profile-1 kt-padding-l-20 kt-padding-r-20 kt-padding-b-0">
                            <div class="kt-widget__head">

									
                                @if(Auth::user()->profile_picture != '')
                                    <div class="kt-widget__media">
                                        <img src="{{asset('public/uploads/profile/'.Auth::user()->profile_picture)}}" alt="image">
                                    </div>
                                @else
                                    <span class="kt-media kt-media--lg kt-media--brand ">
                                        <span>{{ Auth::user()->name }}</span>
                                    </span>
                                @endif
                                <div class="kt-widget__content kt-padding-t-10">
                                    <div class="kt-widget__section">
                                        <a href="javascript:;" class="kt-widget__username">
                                            {{ Auth::user()->name }}
                                        </a>
                                        <span class="kt-widget__subtitle">
                                            {{_lang('Welcome back')}},
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

						<ul class="kt-menu__nav ">
							@include('layouts.menus.'.Auth::user()->user_type)
						</ul>
                    </div>
                </div>
                <!-- end:: Aside Menu -->
            </div>
            <!-- end:: Aside -->
			
			
			<!--REMORE-->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <!-- begin:: Header -->
                    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " >
                        <!-- begin:: Header Menu -->
                        <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                        <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                            <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default "  >
                                <ul class="kt-menu__nav ">
                                    <li class="kt-menu__item">
                                        <a  href="{{url('/')}}" target="_blank" class="kt-menu__link kt-menu__time">
                                            <i class="kt-menu__link-icon flaticon-earth-globe"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end:: Header Menu -->
                        <!-- begin:: Header Topbar -->
                        <div class="kt-header__topbar">
									

							@if(Auth::user()->user_type != 'admin')
                            	<!--begin: Notifications -->
								<div id="notificationsmenu" class="kt-header__topbar-item dropdown">
									<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px" aria-expanded="true">
										<span class="kt-header__topbar-icon kt-pulse kt-pulse--brand">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24"/>
													<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
													<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" id="Combined-Shape" fill="#000000"/>
												</g>
											</svg>
											@if (Auth::user()->unreadNotifications->count() > 0)
												<span class="kt-pulse__ring"></span>
											@endif
										</span>

										<span class="@if (Auth::user()->unreadNotifications->count() > 0)kt-hidden @endif kt-badge kt-badge--danger">{{Auth::user()->unreadNotifications->count()}}</span>
									</div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
										<!--begin: Head -->
										<div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
											<h3 class="kt-head__title kt-padding-b-30">
												{{ _lang('You have').' '.Auth::user()->unreadNotifications->count().' '._lang('new notifications') }}
											</h3>
										</div>
										<!--end: Head -->

										<div id="topbar_notifications_notifications">
											@if (Auth::user()->unreadNotifications->count() > 0)
												<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
													@foreach (Auth::user()->notifications->take(15) as $notification)
														<a href="{{ url('notification/'.$notification->id) }}" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<img src="{{ asset('public/uploads/profile/'.$notification->user->profile_picture) }}">
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	<b>{{ $notification->user->name }}</b> {{ $notification->data['title'] }}<br />
																	{{ $notification->data['content'] }}
																</div>
																<div class="kt-notification__item-time kt-font-sm">
																	{{ $notification->created_at->diffForHumans() }}
																</div>
															</div>
														</a>
													@endforeach
												</div>
											@else
												<div class="kt-grid kt-grid--ver" style="min-height: 200px;">
													<div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
														<div class="kt-grid__item kt-grid__item--middle kt-align-center">
															{{_lang('All caught up!')}}
															<br>
															{{_lang('No new notifications.')}}
														</div>
													</div>
												</div>
											@endif
										</div>
									</div>
								</div>
								<!--end: Notifications -->
							@endif

							@if(get_option('website_language_dropdown','yes') == 'yes')
                                <!--begin: Language bar -->
                                <div class="kt-header__topbar-item kt-header__topbar-item--langs">
                                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                        <span class="kt-header__topbar-icon kt-header__topbar-icon--info">
											<img class="" src="./../../uploads/flags/{{ session('language') =='' ? (Auth::user()->language == '' ? get_option('language') : Auth::user()->language) : session('language') }}.png" alt="" />
                                        </span>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim">
                                        <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                                            @foreach(get_language_list() as $language)
                                                <li class="kt-nav__item">
                                                    <a href="{{url('?language=')}}{{ $language }}" class="kt-nav__link">
                                                        <span class="kt-nav__link-icon"><img src="./../../uploads/flags/{{$language}}.png" alt="" /></span>
                                                        <span class="kt-nav__link-text">{{ $language }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
								<!--end: Language bar -->
							@endif
							
                            <!--begin: User bar -->
                            <div class="kt-header__topbar-item kt-header__topbar-item--user">
                                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                    <div class="kt-header__topbar-user">
                                        <span class="kt-header__topbar-welcome">{{_lang('Hi')}},</span>
                                        <span class="kt-header__topbar-username">{{ Auth::user()->name }}</span>
										@if(Auth::user()->profile_picture != '')
                                             <img alt="Pic" src="{{asset('public/uploads/profile/'.Auth::user()->profile_picture)}}" />
                                		@else
                                           <span class="kt-badge kt-badge--username kt-badge--unified-brand kt-badge--lg kt-badge--rounded kt-font-light kt-badge--bold">{{ Auth::user()->name }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                                    <!--begin: Head -->
                                    <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
                                        <div class="kt-user-card__avatar">
											@if(Auth::user()->profile_picture != '')
												<div class="kt-widget__media">
													<img src="{{asset('public/uploads/profile/'.Auth::user()->profile_picture)}}" alt="image">
												</div>
											@else
                                                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">
													<span>{{ \Illuminate\Support\Str::limit(Auth::user()->name, 2) }}</span>
												</span>
											@endif
                                        </div>
                                        <div class="kt-user-card__name">
                                            {{ Auth::user()->name }}
                                        </div>
                                    </div>
                                    <!--end: Head -->

                                    <div class="kt-notification">
										@if(Auth::user()->user_type == 'user' && get_option('membership_system') == 'enabled')

											<a href="{{ url('membership/my_subscription') }}" class="kt-notification__item">
												<div class="kt-notification__item-icon">
                                                	<i class="flaticon2-cardiogram kt-font-warning"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title kt-font-bold">
														{{ _lang('My Subscription') }}
													</div>
													<div class="kt-notification__item-time">
													{{_lang('Account settings and more')}}
													</div>
												</div>
											</a>

											<a href="{{ url('membership/extend') }}" class="kt-notification__item">
												<div class="kt-notification__item-icon">
                                                	<i class="flaticon2-cardiogram kt-font-warning"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title kt-font-bold">
														{{ _lang('Upgrade Subscription') }}
													</div>
													<div class="kt-notification__item-time">
													{{_lang('Account settings and more')}}
													</div>
												</div>
											</a>
										@endif
										<a href="{{ url('profile/edit') }}" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-calendar-3 kt-font-success"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													{{ _lang('Profile Settings') }}
												</div>
												<div class="kt-notification__item-time">
													{{_lang('Account settings and more')}}
												</div>
											</div>
										</a>
										<a href="{{ url('profile/change_password') }}" class="kt-notification__item">
											<div class="kt-notification__item-icon">
                                                <i class="flaticon2-hourglass kt-font-brand"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													{{ _lang('Change Password') }}
												</div>
											</div>
										</a>
										<a href="{{ url('logout') }}" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-calendar-3 kt-font-success"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													{{ _lang('Logout') }}
												</div>
											</div>
										</a>
									</div>
                                    <!--end: Navigation -->
                                </div>
                            </div>
                            <!--end: User bar -->
                        </div>
                        <!-- end:: Header Topbar -->
                    </div>
                    <!-- end:: Header -->
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        <!-- begin:: Content Head -->
                        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                            <div class="kt-container  kt-container--fluid  ">
                                <div class="kt-subheader__main">
									@if(isset($page))
										<h3 class="kt-subheader__title "><button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"></button>{{$page['title']}}</h3>
										<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									@endif
									
									<div class="kt-subheader__breadcrumbs">
										@php $segments = ''; @endphp
										@foreach(Request::segments() as $segment)

											@if ($segment == "dashboard")
												@php continue; @endphp
											@endif
											
											@php $segments .= '/'.$segment; @endphp
											
											@if(is_numeric($segment) || strlen($segment) > 30)
											@php $segment = 'View'; @endphp
											@endif
											
											@if(! checkRoute($segments))
												@php continue; @endphp
											@endif
											
											@if($loop->last)
												<span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">{{ ucwords(str_replace("_"," ",$segment)) }}</span>
											@else
												<a href="{{ url($segments) }}" class="kt-subheader__breadcrumbs-home">
													@if($loop->last)
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect id="bound" x="0" y="0" width="24" height="24"/>
																<path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" id="Combined-Shape" fill="#000000"/>
															</g>
														</svg>
													@endif
													{{ ucwords(str_replace("_"," ",$segment)) }}
												</a>
											@endif
										@endforeach
									</div>
                                </div>
                            </div>
                        </div>
                        <!-- end:: Content Head -->
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<!-- Trial and Membership Alert -->
							@php $user = Auth::user(); @endphp

							@if(has_membership_system() == 'enabled' && $user->user_type == 'user')
								
								@if( membership_validity() < date('Y-m-d'))
									<div class="alert alert-danger" role="alert">
										<b class="float-left pt-2">{{ _lang('Please make your membership payment for further process !') }}</b>
										<a href="{{ url('membership/extend') }}" class="btn btn-primary btn-xs float-right"><b>{{ _lang('Pay Now') }}</b></a>
										<div class="clearfix"></div>
									</div>
								@endif
								
								@if( $user->company->membership_type == 'trial' && membership_validity() > date('Y-m-d'))
									<div class="alert alert-warning" role="alert">
										<b>{{ _lang('You Are Currenly Using Trial Account !') }}&emsp;<a href="{{ url('membership/extend') }}" class="btn btn-danger btn-xs">{{ _lang('Upgrade Now') }}</a></b>
										<div class="clearfix"></div>
									</div>
								@endif
								
							@endif
							<!-- End Trial and Membership Alert -->
							
							<div class="alert alert-success alert-dismissible" id="main_alert" role="alert">
								<button type="button" id="close_alert" class="close">
									<span aria-hidden="true"><i class="far fa-times-circle"></i></span>
								</button>
								<span class="msg"></span>
							</div>
							
							@yield('content')

                        </div>
                        <!-- end:: Content -->
                    </div>

                    <!-- begin:: Footer -->
                    <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                        <div class="kt-container  kt-container--fluid ">
                            <div class="kt-footer__copyright">
								&copy; {{ date('Y').' '.get_option('company_name') }}
                            </div>
                        </div>
                    </div>
                    <!-- end:: Footer -->
                </div>
            </div>
        </div>
        <!-- end:: Page -->


        <!-- begin::Scrolltop -->
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>
        <!-- end::Scrolltop -->

		<!-- Main Modal -->
		<div id="main_modal" class="modal" tabindex="-1" role="dialog">
		    <div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				    <div class="modal-header bg-primary">
						<h5 class="modal-title mt-0 text-white"></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
				    </div>
				  
				    <div class="alert alert-danger d-none m-3"></div>
				    <div class="alert alert-secondary d-none m-3"></div>			  
				    <div class="modal-body overflow-hidden"></div>
				  
				</div>
		    </div>
		</div>
		
		<!-- Secondary Modal -->
		<div id="secondary_modal" class="modal" tabindex="-1" role="dialog">
		    <div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				    <div class="modal-header bg-dark">
						<h5 class="modal-title mt-0 text-white"></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
				    </div>
				  
				    <div class="alert alert-danger d-none m-3"></div>
				    <div class="alert alert-secondary d-none m-3"></div>			  
				    <div class="modal-body overflow-hidden"></div>
				</div>
		    </div>
		</div>
	     
		<!-- Preloader area start -->
		<div id="preloader"></div>
		<!-- Preloader area end -->
		





        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
                "colors":{
                    "state":{
                        "brand":"#5d78ff",
                        "light":"#ffffff",
                        "dark":"#282a3c",
                        "primary":"#5867dd",
                        "success":"#34bfa3",
                        "info":"#36a3f7",
                        "warning":"#ffb822",
                        "danger":"#fd3995"
                    },
                    "base":{
                        "label":[
                            "#c5cbe3",
                            "#a1a8c3",
                            "#3d4465",
                            "#3e4466"
                        ],
                        "shape":[
                            "#f0f3ff",
                            "#d9dffa",
                            "#afb4d4",
                            "#646c9a"
                        ]
                    }
                },
                "text":{
                    'loading' : '{{_lang('Loading ...')}}'
                },
            };
        </script>
        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
            <script src="./admin/vendors/custom/notifications/js/modernizr.custom.js" type="text/javascript"></script>
            <script src="./admin/vendors/custom/notifications/js/classie.js" type="text/javascript"></script>
            <script src="./admin/vendors/custom/notifications/js/notificationFx.js" type="text/javascript"></script>
            <script src="./admin/vendors/global/vendors.bundle.js" type="text/javascript"></script>
            <script src="./admin/js/demo1/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Global Theme Bundle -->

		
        <!-- jQuery  -->
		<script src="{{ asset('public/backend/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
		<script src="{{ asset('public/backend/assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('public/backend/assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('public/backend/assets/js/metisMenu.min.js') }}"></script>
		<script src="{{ asset('public/backend/assets/js/jquery.slimscroll.min.js') }}"></script>
		<script src="{{ asset('public/backend/assets/js/jquery.slicknav.min.js') }}"></script>
        
		<script src="{{ asset('public/backend/assets/js/print.js') }}"></script>
		<script src="{{ asset('public/backend/assets/js/pace.min.js') }}"></script>
		<script src="{{ asset('public/backend/assets/js/clipboard.min.js') }}"></script>
        <script src="{{ asset('public/backend/plugins/moment/moment.js') }}"></script>
		
		<!-- Required datatable js -->
        <script src="{{ asset('public/backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('public/backend/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <!-- datatable Buttons -->
        <script src="{{ asset('public/backend/plugins/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('public/backend/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('public/backend/plugins/datatables/jszip.min.js') }}"></script>
        <script src="{{ asset('public/backend/plugins/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('public/backend/plugins/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('public/backend/plugins/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('public/backend/plugins/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('public/backend/plugins/datatables/buttons.colVis.min.js') }}"></script>
        <!-- Responsive datatable -->
        <script src="{{ asset('public/backend/plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('public/backend/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

		<script src="{{ asset('public/backend/plugins/dropify/js/dropify.min.js') }}"></script>
		<script src="{{ asset('public/backend/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
		<script src="{{ asset('public/backend/plugins/select2/select2.min.js') }}"></script>
		<script src="{{ asset('public/backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
		<script src="{{ asset('public/backend/plugins/tinymce/tinymce.min.js') }}"></script>
		<script src="{{ asset('public/backend/plugins/parsleyjs/parsley.min.js') }}"></script>
		<script src="{{ asset('public/backend/plugins/jquery-toast-plugin/jquery.toast.min.js') }}"></script>

		
        <!-- App js -->
        <script src="{{ asset('public/backend/assets/js/scripts.js?v=1.7') }}"></script>

		<script type="text/javascript">		
			(function($){

				"use strict";	
				
				$(document).on('click', 'a[href="#"]', function(e){
					e.preventDefault();
				})
				@if(Request::is('dashboard'))
					$(".page-title").html("{{ _lang('Dashboard') }}"); 
				@else
					$(".page-title").html($(".title").html()); 
					$(".page-title").html($(".panel-title").html());
				@endif			

				
				//Show Success Message
				@if(Session::has('success'))
					$("#main_alert > span.msg").html(" {{ session('success') }} ");
					$("#main_alert").addClass("alert-success").removeClass("alert-danger");
					$("#main_alert").css('display','block');
				@endif
				
				//Show Single Error Message
				@if(Session::has('error'))
					$("#main_alert > span.msg").html(" {{ session('error') }} ");
					$("#main_alert").addClass("alert-danger").removeClass("alert-success");
					$("#main_alert").css('display','block');
				@endif
				
				
				@php $i =0; @endphp

				@foreach ($errors->all() as $error)
					@if ($loop->first)
						$("#main_alert > span.msg").html("<i class='typcn typcn-delete'></i> {{ $error }} ");
						$("#main_alert").addClass("alert-danger").removeClass("alert-success");
					@else
						$("#main_alert > span.msg").append("<br><i class='typcn typcn-delete'></i> {{ $error }} ");					
					@endif
					
					@if ($loop->last)
						$("#main_alert").css('display','block');
					@endif
					
					@if(isset($errors->keys()[$i]))
						var name = "{{ $errors->keys()[$i] }}";
					
						$("input[name='" + name + "']").addClass('error is-invalid');
						$("select[name='" + name + "'] + span").addClass('error is-invalid');
					
						$("input[name='"+name+"'], select[name='"+name+"']").parent().append("<span class='v-error'>{{$error}}</span>");
					@endif
					@php $i++; @endphp
				
				@endforeach
				
			})(jQuery); <!-- End jQuery -->

		</script>
	 
	 <!-- Custom JS -->
	 @yield('js-script')
		
    </body>
</html>