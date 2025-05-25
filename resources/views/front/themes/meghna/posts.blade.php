@extends('front.themes.meghna.layouts.master')
@section('content')

<!-- cards  -->
@if($posttype->category_main_id === 7)  
<!-- slider  -->

<div id="carouselExampleFade" class="carousel slide carousel-fade topspage-90 "
  data-bs-ride="carousel">
  <div class="carousel-inner banner-home">
  @php $cnt = 1; @endphp
  @foreach(getPostsByType('meghna-slider-cards') as $post)
    <div class="carousel-item {{$cnt == 1 ? 'active':''}}" data-bs-interval="2000">
      <div class="scrollit">
        <a data-scroll="true" href="#ex-saving" class="btn btn-primary">
          Explore Offers <svg version="1.1"
            xmlns="http://www.w3.org/2000/svg" width="32" height="32"
            viewBox="0 0 32 32"> <path fill="#00294f"
              d="M7.84 9.333l8.16 8.241 8.16-8.241 2.507 2.537-10.667 10.796-10.667-10.796 2.507-2.537z"></path></svg></a>
      </div>
      <img src="{!! asset('public/uploads/' . $post->thumbnail_path) ?? '' !!}"
        class="d-block w-100" alt="...">
    </div>
    @php $cnt++; @endphp
    @endforeach 
  </div>
  <button class="carousel-control-prev" type="button"
    data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button"
    data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<section>
    <div class="container cards_credit">
        @foreach(getPostsByType($posttype->slug) as $post)
        <!-- card -->
        <div class="card ">
            <a href="{{url($post->post_type,$post->slug)}}"> <img
                    src="{!! asset('public/uploads/' . $post->thumbnail_path) ?? '' !!}"
                    class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center"> {{$post->title}} </h5>
                    <p class="card-text">{{$post->excerpt}}</p>
                    <a href="{{url($post->post_type,$post->slug)}}"
                        class="btn btn-secondary text-white">Know
                        More</a></a>
                </div>
        </div>
        <!-- End card -->      
        @endforeach 
    </div>
</section>


@else
<!-- others, current offer etc-->



        <section class="breadcrumb-area breadcrumb-bg" data-background="{!! asset('public/uploads/' . $posttype->pt_thumbnail_path) ?? '' !!}" style="background-image: url(&quot;{!! asset('public/uploads/' . $posttype->pt_thumbnail_path) ?? '' !!}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2>{{$posttype->name}}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active"
                                        aria-current="page">{{$posttype->name}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @php
            $filteredPosts = collect(getAllPosttype())->filter(function($post) use ($posttype) {
                return $post->menu_icon == $posttype->name;
            });
        @endphp

        @if($filteredPosts->isNotEmpty())
        <section id="about" class="about section">
            <div class="container valetineiconbox">
                <div class="row gy-4 justify-content-center text-center"> 
                    @foreach($filteredPosts as $post)
                        <div class="col-lg-2" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{ url($post->slug) }}">
                                <div class="valetineiconboxbg">
                                    <div class="valetineicon">
                                        {!! $post->pt_content !!}
                                    </div>
                                    <h4 class="text-uppercase">{{ $post->name }}</h4>
                                </div>
                            </a>
                        </div>
                    @endforeach  
                </div>
            </div>
        </section>
        @else

        <!-- @foreach(getAllPosttype() as $post1)
            @if($post1->menu_icon == $posttype->name)      
            @endif 
        @endforeach 
        @if($post1->menu_icon)  
        <section id="about1" class="about section">
            <div class="container valetineiconbox">
                <div class="row gy-4 justify-content-center text-center"> 
                    @foreach(getAllPosttype() as $post)
                        @if($post->menu_icon == $posttype->name)        
                        <div class="col-lg-2" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{url($post->slug)}}">
                                <div class="valetineiconboxbg">
                                    <div class="valetineicon">
                                        {!! $post->pt_content !!}
                                    </div>
                                    <h4 class="text-uppercase">{{$post->name}}</h4>
                                </div>
                            </a>
                        </div>
                        @endif 
                    @endforeach  
                </div>
            </div>
        </section>
        @else
        @endif     -->



                    <!-- About Section -->
                    <section id="about" class="about section">
                        <div class="sear_offer">
                            <form>
                                <label for="input">Search</label>
                                <input required pattern=".*\S.*" autocomplete="off"
                                    type="text" class="input" id="input"
                                    onkeyup="instantSearch()">
                                <span class="caret"></span>
                            </form>
                        </div>

                        <!-- Section Title -->
                        <div class="container section-title" data-aos="fade-up">
                            <h1>{{$posttype->name}}<br></h1>
                        </div><!-- End Section Title -->

                        <div class="container">

                                @foreach(getAllCategory() as $cat_post)                     
                                @php
                                    $matchedPosts = [];
                                    foreach(getPostsByType($posttype->slug) as $post) {
                                        // Convert comma-separated category IDs into array
                                        $postCategoryIds = explode(',', $post->category_id ?? '');
                                        
                                        if (in_array($cat_post->id, $postCategoryIds)) {
                                            $matchedPosts[] = $post;
                                        }
                                    }
                                @endphp

                                @if(count($matchedPosts))
                                    <div class="row gy-4 justify-content-center text-center mb-5">
                                        <h3>{{ $cat_post->name }}</h3>

                                        @foreach($matchedPosts as $post)
                                            <!-- card -->
                                            <div class="col-lg-3 item-offer_search" data-aos="fade-up" data-aos-delay="100">
                                                <div class="card card_offer">
                                                    <a href="{{$post->excerpt}}">
                                                        <div class="dining_upper">
                                                            <img src="{!! asset('public/uploads/' . $post->thumbnail_path) ?? '' !!}" alt>
                                                        </div>
                                                        <div class="dining_lowar">
                                                            <h3>{{ $post->title ?? 'Post Title' }}</h3>
                                                            <h2>{{ $post->title ?? 'Post Title' }}</h2>
                                                        </div>
                                                    </a>
                                                    <div class="dining_bottom">
                                                        <a data-bs-toggle="modal" data-bs-target="#exampleModa{{$post->id}}">View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card end-->
                                            <div class="modal fade" id="exampleModa{{$post->id}}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5"
                                                                id="exampleModalLabel">{{ $post->title ?? 'Post Title' }}</h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {!! $post->content !!}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach
                                    </div>
                                @endif
                            @endforeach                    
                        </div> 
                    </section><!-- /About Section -->
        @endif
        <!-- @getTemplate($posttype->slug) -->


@endif
@endsection      

 