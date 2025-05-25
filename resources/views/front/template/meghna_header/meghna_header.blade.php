<?php
/* Template Name: Meghna Header
    Version: 1.0
*/
?>
<header id="header" class="header fixed-top corporate-bg">
    <div class="branding d-flex align-items-cente">
    <div
        class="container position-relative d-flex align-items-center justify-content-between">       
        <a class="logo d-flex align-items-center" href="{{url('/')}}">
            <img src="{{ getSetting('site_logo') == null ? asset('packages/larapress/src/Assets/admin/img/larapress.png') : asset('public/uploads/').'/'.getSetting('site_logo') }}" alt="@getSetting('site_title')">
        </a>                
        <nav id="navmenu" class="navmenu show_but">
        <ul>
            <!-- <li><a href="{{url('/')}}">Home</a></li> -->
            <!-- <li class="dropdown"><a href="#"><span>Menu</span> <i
                class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul> -->           


                @foreach(getMenus() as $menu)
                @if($menu->sub_menu_id == 0) 
                    <li class="nav-item">  
                        <!-- finddin dropdown for arraw  -->
                        <a href="{{ $menu->target == 'external_link' ? $menu->url : url('/') . $menu->url }}" target="{{$menu->target}}" class="nav-link">{{$menu->title}}</a>    
                    </li>
                @endif
                @endforeach                               
              <li><a class="e-button" href="#"> Apply Now</a></li>
            <!-- </ul>
            </li> -->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
    </div>
</header>
<main class="main">