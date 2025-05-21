<?php
/* Template Name: current-offer-slider
    Version: 1.0
*/
?>
{{insertDummyData('current-offer-slider',3)}}

<!-- Hero Section -->
<section>
<div id="carouselExampleFade" class="carousel slide carousel-fade"
  data-bs-ride="carousel">
  <div class="carousel-inner banner-home">
  @php $cnt = 1; @endphp
  @foreach(getPostsByType('current-offer-slider') as $post)
    <div class="carousel-item {{$cnt == 1 ? 'active':''}}" data-bs-interval="2000">
      <!-- <div class="scrollit">
        <a data-scroll="true" href="#ex-saving" class="btn btn-primary">
          Explore Offers <svg version="1.1"
            xmlns="http://www.w3.org/2000/svg" width="32" height="32"
            viewBox="0 0 32 32"> <path fill="#00294f"
              d="M7.84 9.333l8.16 8.241 8.16-8.241 2.507 2.537-10.667 10.796-10.667-10.796 2.507-2.537z"></path></svg></a>
      </div> -->
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
</section><!-- /Hero Section -->



 