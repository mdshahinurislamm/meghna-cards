@extends('front.themes.meghna.layouts.master')
@auth()
<style>
    .login .headerm_top{margin-top: 38px;}
</style>
<!--toplabel menu -->
<div class="navbar-dark bg-dark fixed-top py-2">
    <div class="container text-center">
        <a class="navbar-brand text-white" href="{{url('/dashboard')}}">Dashboard</a>
        <a class="nav-link text-white d-inline-block" href="{{url('/dashboard/posts/posttype/')}}/{{$post->id}}/edit/{{$post->post_type}}">- Edit Post -</a>
        <a class="nav-link text-white d-inline-block" href="{{ url('/logout') }}">Logout</a>
    </div>
</div>
<!--end top lavel menu-->
@endauth
@section('content')

<!-- cards  -->
@if($post->category_id === '7') 

<div id="carouselExampleFade"
    class="carousel slide carousel-fade topspage-90 "
    data-bs-ride="carousel">
    <div class="carousel-inner banner-home">
        
    @php $values = explode(",",$post->gallery_img); @endphp
        @foreach($values as $imgid)
            @if($imgid)
                 <div class="carousel-item active" data-bs-interval="2000">
                    <div class="scrollit">
                        <a data-scroll="true" href="{{url('/posts/card-offers')}}"
                            class="btn btn-primary">
                            Explore Offers <svg version="1.1"
                                xmlns="http://www.w3.org/2000/svg"
                                width="32" height="32"
                                viewBox="0 0 32 32"> <path fill="#00294f"
                                    d="M7.84 9.333l8.16 8.241 8.16-8.241 2.507 2.537-10.667 10.796-10.667-10.796 2.507-2.537z"></path></svg></a>
                    </div>
                    <img
                        src="{{ asset('public/uploads/') }}/{{$imgid }}"
                        class="d-block w-100" alt="...">
                </div>
            @endif
        @endforeach	
    </div>
    <button class="carousel-control-prev" type="button"
        data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"
            aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button"
        data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon"
            aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- About Section -->
<section id="gray_card">
    <div class="container ">
        <div class="row justify-content-between">
            
            <div class="col-lg-5 card_sides_innar_photo_1 text-white">
            <h3 class="upper text-white pb-3"><span>{!! $post->excerpt ?? '' !!} </span></h3>
             {!! $post->content ?? '' !!} 
            </div>
            <div class="col-lg-6 card_sides_innar_photo">
                <img src="{!! asset('public/uploads/' . $post->thumbnail_path) ?? '' !!}" class="img-fluid rounded " alt="" />
            </div>

        </div>
    </div>
</section>

<section id="gray_card">
    <div class="container ">

        <div class="row">
            <div class="col-lg-12 pb-5">
                <h2 class="text-center text-white">{!! $post->option_1 !!}</h2>
            </div>
            <div class="col-lg-12 exclusive_off cards_credit">
                @php
                $posttype = $post->slug."-features";
                @endphp
                
                @foreach(getPostsByType($posttype) as $postf)
                 
                 <div class="card p-0 hover01 aos-init aos-animate" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <figure><img class="card-img-top" src="{!! asset('public/uploads/' . $postf->thumbnail_path) ?? '' !!}"></figure>
                    <div class="card-body ">
                        <h5 class="card-title text-center text-white">{!! $postf->title !!}</h5>
                        <div class="card-text text-white features_benifit_card">{!! $postf->content !!}</div>
                    </div>
                </div>
                
                @endforeach 

            </div>
            
            <div class="card-text text-white mt-5">
            {!! $post->more_option_2 ?? '' !!}
            </div>
        </div>
    </div>
</section>
<!-- /About Section -->
@endif
@getTemplate($post->template ?? '')  
@endsection      