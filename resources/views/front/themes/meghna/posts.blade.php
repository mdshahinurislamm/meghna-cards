@extends('front.themes.meghna.layouts.master')
@section('content')

<section class="breadcrumb-area breadcrumb-bg"
                data-background="{!! asset('public/uploads/' . $posttype->pt_thumbnail_path) ?? '' !!}"
                style="background-image: url(&quot;{!! asset('public/uploads/' . $posttype->pt_thumbnail_path) ?? '' !!}&quot;);">
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

            <!-- About Section -->
            <section id="about" class="about section ">
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
                        <h5>{{ $cat_post->name }}</h5>

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

<!-- @getTemplate($posttype->slug) -->
@endsection      

 