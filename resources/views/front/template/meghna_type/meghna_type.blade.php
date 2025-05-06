<?php
/* Template Name: Meghna Type
    Version: 1.0
*/
?>   
     <section id="about" class="about section">
        <div class="container valetineiconbox">
            <div class="row gy-4 justify-content-center text-center">
                @foreach(getAllPostsBy() as $post)
                @foreach(getAllCategory() as $cat_post)                
                @if($cat_post->id == $post->category_main_id)
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
                @endforeach      
            </div>
        </div>
    </section>