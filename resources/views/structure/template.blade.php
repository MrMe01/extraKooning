<!doctype html>
<html lang="{{ app()->getLocale() }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />

    <title>Extranet | Kooning</title>
    <meta name="description" content="Latest updates and statistic charts">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!--begin::Web font -->

    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/webfont.js')}}"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto:300,400,500,600,700" media="all">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{URL::asset('js/browserfile.js')}} "></script>

    <!--end::Web font -->

    <!--begin::Base Styles -->


    <!--begin::Page Vendors -->
    <link href="{{URL::asset('css/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('css/header.css')}}" rel="stylesheet" type="text/css" />

    <!--end::Page Vendors -->


    <link href="{{URL::asset('css/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->

    <link rel="shortcut icon" href="{{URL::asset('img/icons/favicon.ico')}}" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/browserfile.css')}}">

<script src="{{URL::asset('js/webfont.js')}}"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->

        <!--begin::Base Styles -->  

                 
        <!--begin::Page Vendors --> 
                <!--end::Page Vendors -->
         
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
        <link href="{{URL::asset('css/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
            <!--end::Base Styles -->

        <link rel="shortcut icon" href="{{URL::asset('')}}favicon.ico" /> 
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','{{URL::asset('js/analytics.js')}}','ga');

  ga('create', 'UA-37564768-1', 'auto');
  ga('send', 'pageview');

  </script>


</head>
<!-- end::Head -->


<!-- end::Body -->

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">



    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">


        <!-- BEGIN: Header -->
        <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
            <div class="m-container m-container--fluid m-container--full-height">
                <div class="m-stack m-stack--ver m-stack--desktop">
                    <!-- BEGIN: Brand -->
                    <div class="m-stack__item m-brand  m-brand--skin-dark ">
                        <div class="m-stack m-stack--ver m-stack--general">
                            <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                <a href="/" class="m-brand__logo-wrapper logo_kooning">
                                    
                                </a>
                            </div>
                            <div class="m-stack__item m-stack__item--middle m-brand__tools">

                                <!-- BEGIN: Left Aside Minimize Toggle -->
                                <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block 
                     ">
                    <span></span>
                </a>
                                <!-- END -->

                                <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                    <span></span>
                </a>
                                <!-- END -->



                               


                                <!-- BEGIN: Topbar Toggler -->
                                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                <i class="flaticon-more"></i>
            </a>
                                <!-- BEGIN: Topbar Toggler -->
                            </div>
                        </div>
                    </div>


                    <!-- END: Brand -->

                    <div style="background-color: #2C2E3E;" class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                        <!-- BEGIN: Horizontal Menu -->
                        <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>

                        <!-- END: Horizontal Menu -->
                        <!-- BEGIN: Topbar -->
                        <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">


                            <div class="m-stack__item m-topbar__nav-wrapper">
                                <ul class="m-topbar__nav m-nav m-nav--inline">

                                    <li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center  m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
                                        <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                            <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                                            <span class="m-nav__link-icon"><i class="flaticon-music-2"></i></span>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__header m--align-center" style="background: url(images/app/media/img/misc/notification_bg.jpg); background-size: cover;">
                                                    <span class="m-dropdown__header-title">9 Noticias</span>
                                                    <span class="m-dropdown__header-subtitle">Notificaciones del usuario</span>
                                                </div>
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                                                            <li class="nav-item m-tabs__item">
                                                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">Movimientos
                                                                </a>
                                                            </li>
                                                            <li class="nav-item m-tabs__item">
                                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">Eventos</a>
                                                            </li>
                                                            <li class="nav-item m-tabs__item">
                                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">Mensajes</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
                                                                <div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
                                                                    <div class="m-list-timeline m-list-timeline--skin-light">
                                                                        <div class="m-list-timeline__items">
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                                                                <span class="m-list-timeline__text">12 usuarios nuevos agregados</span>
                                                                                <span class="m-list-timeline__time">Just now</span>
                                                                            </div>
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge"></span>
                                                                                <span class="m-list-timeline__text">Agregado nuevo traslado <span class="m-badge m-badge--success m-badge--wide">pending</span></span>
                                                                                <span class="m-list-timeline__time">14 min</span>
                                                                            </div>
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge"></span>
                                                                                <span class="m-list-timeline__text">New invoice received</span>
                                                                                <span class="m-list-timeline__time">20 mins</span>
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                                                <div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
                                                                    <div class="m-list-timeline m-list-timeline--skin-light">
                                                                        <div class="m-list-timeline__items">
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                                <a href="#" class="m-list-timeline__text">Cotizacion pendiente</a>
                                                                                <span class="m-list-timeline__time">Just now</span>
                                                                            </div>
                                                                            <div class="m-list-timeline__item">
                                                                                <span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
                                                                                <a href="#" class="m-list-timeline__text">Cambiar los precios de hoteles</a>
                                                                                <span class="m-list-timeline__time">20 mins</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                                                <div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
                                                                    <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                                        <span class="">Tienes que salir a realizar un pago el miercoles</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li id="m_quick_sidebar_toggle" class="m-nav__item">
                                        <a href="login" class="m-nav__link m-dropdown__toggle">
                                            <span class="m-nav__link-icon"><i class="fa fa-question-circle"></i></span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                                        <a href="#" class="m-nav__link m-dropdown__toggle">
                                            <span class="m-topbar__userpic">
                                                <img src="{{URL::asset('images/app/media/img/users/user4.jpg')}}" class="m--img-rounded m--marginless m--img-centered" alt=""/>
                                            </span>
                                            <span class="m-topbar__username m--hide">Nick</span>                    
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__header m--align-center" style="background: url(images/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                                                    <div class="m-card-user m-card-user--skin-dark">
                                                        <div class="m-card-user__pic">
                                                            <img src="{{URL::asset('images/app/media/img/users/user4.jpg')}}" class="m--img-rounded m--marginless" alt="" />
                                                        </div>
                                                        <div class="m-card-user__details">
                                                            <span class="m-card-user__name m--font-weight-500">{{ Auth::user()->name }}</span>
                                                            <a href="#" class="m-card-user__email m--font-weight-300 m-link">{{ Auth::user()->email }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav m-nav--skin-light">
                                                            <li class="m-nav__section m--hide">
                                                                <span class="m-nav__section-text">Section</span>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="indexa80c.html?page=header/profile&amp;demo=default" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-title">  
                                                                        <span class="m-nav__link-wrap">      
                                                                            <span class="m-nav__link-text">My Profile</span>      
                                                                            <span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span>  
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="indexa80c.html?page=header/profile&amp;demo=default" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-share"></i>
                                                                    <span class="m-nav__link-text">Activity</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="indexa80c.html?page=header/profile&amp;demo=default" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                    <span class="m-nav__link-text">Messages</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__separator m-nav__separator--fit">
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="indexa80c.html?page=header/profile&amp;demo=default" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-info"></i>
                                                                    <span class="m-nav__link-text">FAQ</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="indexa80c.html?page=header/profile&amp;demo=default" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                    <span class="m-nav__link-text">Support</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__separator m-nav__separator--fit">
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li id="m_quick_sidebar_toggle" class="m-nav__item">
                                        <a class="m-nav__link m-dropdown__toggle" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <span class="m-nav__link-icon"><i class="fa fa-sign-out"></i></span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- END: Topbar -->
                    </div>
                </div>
            </div>
        </header>
        <!-- END: Header -->
        <!-- begin::Body -->
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

            <!-- BEGIN: Left Aside -->
            <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>

            <div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">
                <!-- BEGIN: Aside Menu -->
                <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
                    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                      
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"><a href="index9bfb.html?page=index&amp;demo=default" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title">  <span class="m-menu__link-wrap">      <span class="m-menu__link-text">Perfil</span>      <span class="m-menu__link-badge"></span>  </span></span></a></li>
                        <li class="m-menu__item  m-menu__item--submenu m-menu__item" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Reportes</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Graficas</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                            <ul class="m-menu__subnav">
                                                <li class="m-menu__item " aria-haspopup="true"><a href="index1f9d.html?page=components/base/tabs/bootstrap&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Visitas</span></a></li>
                                                <li class="m-menu__item " aria-haspopup="true"><a href="index64cb.html?page=components/base/tabs/line&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Horas</span></a></li>
                                            </ul>
                                        </div>
                                    </li>    
                                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Reportes</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                            <ul class="m-menu__subnav">
                                                <li class="m-menu__item " aria-haspopup="true"><a href="index1f9d.html?page=components/base/tabs/bootstrap&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Paginas visitadas</span></a></li>
                                            </ul>
                                        </div>
                                    </li>                                    
                                

                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Reservas</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true"><a href="indexd68c.html?page=components/base/state&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Cotizar</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="indexd68c.html?page=components/base/state&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Lista de reservas</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="indexd68c.html?page=components/base/state&amp;demo=default" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Buscador de promociones</span></a></li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="m-menu__section ">
                            <h4 class="m-menu__section-text">Kooning</h4>
                            <i class="m-menu__section-icon flaticon-more-v3"></i>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Actividades</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true"><a href="/Actividades" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Actividades</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="/Traslados" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Traslados</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Campañas</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true"><a href="/Campañas" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Campañas</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="/promocion" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Promocion</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="/ofertas" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ofertas</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--" aria-haspopup="true"><a href="index9bfb.html?page=index&amp;demo=default" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title">  <span class="m-menu__link-wrap">      <span class="m-menu__link-text">Blog</span>      <span class="m-menu__link-badge"></span>  </span></span></a></li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Home</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true"><a href="homeofertas" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ofertas</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="playas" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Playas</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="ciudades" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ciudades</span></a></li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- END: Aside Menu -->
            </div>
            <!-- END: Left Aside -->
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <div class="m-content">
                    <!--Begin::Section-->
                    @yield("content")
                    <!--End::Section-->
                </div>
            </div>


        </div>
        <!-- end:: Body -->


        <!-- begin::Footer -->
        <footer class="m-grid__item     m-footer ">
            <div class="m-container m-container--fluid m-container--full-height m-page__container">
                <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                    <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                        <span class="m-footer__copyright">
                    2018 &copy; Extranet Kooning Travel by <a href="https://www.kooningtravel.com/" class="m-link">Kooning Travel</a>
                </span>
                    </div>
                    
                </div>
            </div>
        </footer>
        <!-- end::Footer -->



    </div>
    <!-- end:: Page -->

    <!-- begin::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
        <i class="la la-arrow-up"></i>
    </div>
    <!-- end::Scroll Top -->
    <!--begin::Base Scripts -->

    <script src="{{URL::asset('js/vendors.bundle.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/scripts.bundle.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/fullcalendar.bundle.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/dashboard.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/html-table.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('js/bootstrap.js')}}" type="text/javascript"></script>


    

</body>


</html>