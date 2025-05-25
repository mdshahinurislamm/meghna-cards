<?php
/* Template Name: Meghna Footer
    Version: 1.0
*/
//insertDummyData('Post Type Name' , 'Number of post', 'Post title', 'Content')
?>
</main>

    <footer id="footer" class="footer footer-back">
      <div class="container copyright text-center ">

        <div class="row">
          <div class="col text-white text-start">
            <p class="pt-3">&copy; <span>Copyright</span> {{date('Y')}} Meghna Bank PLC. All rights reserved.</p>
          </div>
          <div class="col-5 footer-links2 pt-3">
            <ul>
              @foreach(getPostsByType('footer') as $post)
              {!! $post->content !!}
              @endforeach    
              
            </ul>
          </div>
          <div class="col text-white">
            <div class="social-links d-flex" style="justify-content: right;">
              <a href><i class="bi bi-twitter-x"></i></a>
              <a href><i class="bi bi-facebook"></i></a>
              <a href><i class="bi bi-instagram"></i></a>
              <a href><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>













       
      </div>
    </footer>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Preloader -->
    <div id="preloader"></div>


