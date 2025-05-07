<?php
/* Template Name: Meghna Footer
    Version: 1.0
*/
//insertDummyData('Post Type Name' , 'Number of post', 'Post title', 'Content')
?>
</main>

    <footer id="footer" class="footer accent-background">
      <div class="container copyright text-center ">
        @foreach(getPostsByType('footer') as $post)
        {!! $post->content !!}
        @endforeach         
        <p class="pt-3">&copy; <span>Copyright</span> {{date('Y')}} Meghna Bank PLC. All rights reserved.</p>
      </div>
    </footer>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Preloader -->
    <div id="preloader"></div>


