<?php
/* Template Name: Cards Type
    Version: 1.0
*/
?>   
<!-- About Section -->
      <section>
        <div class="container cards_ban">
        @foreach(getAllPosttype() as $post)
        @if($post->category_main_id == 7)       
          <!-- card -->
          <div class="card w-100 mb-3 m-0 p-0">
            <div class="card-body m-0 p-0">
              <a href="{{url($post->slug)}}">
                <img src="{!! asset('public/uploads/' . $post->pt_thumbnail_path) ?? '' !!}">
              </a>
            </div>
          </div>
          <!-- End card -->
        @endif
        @endforeach           

        </div>
      </section><!-- /About Section -->   