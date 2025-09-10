<?php
/* Template Name: Cards Type
    Version: 1.0
*/
?>    
<!-- About Section -->
      <section>
        <div class="container cards_ban">
        @foreach(getPostsByType("card-home-offer-banners") as $post)
             
          <!-- card -->
          <div class="card w-100 mb-3 m-0 p-0" data-aos="{{$post->id % 2 == 0 ? 'fade-right':'fade-left'}}">
            <div class="card-body m-0 p-0">
              <a href="{{ $post->excerpt }}">
                <img src="{!! asset('public/uploads/' . $post->thumbnail_path) ?? '' !!}">
              </a>
            </div>
          </div>
          <!-- End card -->
        
        @endforeach           

        </div>
      </section><!-- /About Section -->   
      
      <!--<div data-aos="fade-left"></div>-->
      
       