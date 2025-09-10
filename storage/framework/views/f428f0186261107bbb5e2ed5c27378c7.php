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
          <div class="col-lg-3 text-white text-start">
           <a class="helpe-line-icon" href="tel:16735">
               <div class="dis_nub_top"><img src="<?php echo e(url('/public/uploads/contact-2.png')); ?>" alt="mobile"> </div> </a>
          </div>
          <div class="col-lg-6 footer-links2 pt-3">

              <?php $__currentLoopData = getPostsByType('footer'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php echo $post->content; ?>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              
               <p >&copy; <span>Copyright</span> <?php echo e(date('Y')); ?> Meghna Bank PLC. All rights reserved.</p>
              
          
          </div>
          <div class="col-lg-3 text-white pt-3">
            <div class="social-links d-flex" style="justify-content: right;">
              <?php $__currentLoopData = getPostsByType('social-link'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e($post->option_3); ?>"><i class="bi bi-facebook"></i></a>
              <a href="<?php echo e($post->option_1); ?>"><i class="bi bi-instagram"></i></a>
              <a href="<?php echo e($post->option_2); ?>"><i class="bi bi-linkedin"></i></a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              
            </div>
          </div>
        </div>

       
      </div>
    </footer>
    <!-- Scroll Top -->
    
      <button class="scrollToTop">
      <span id="progress-bar">
        <svg width="48" height="48" viewBox="-5 -5 60 60" fill="none">
          <path stroke="#37256e" stroke-width="2"
            d="M0.5,25a24.5,24.5 0 1,0 49,0a24.5,24.5 0 1,0 -49,0"></path>
        </svg>
      </span>
    </button>
    
    <!-- Preloader -->
    <div id="preloader"></div>
    
        <script>
      document.addEventListener("DOMContentLoaded", () => {
  const scrollToTopBtn = document.querySelector(".scrollToTop");
  const rootElement = document.documentElement;
  const bodyElement = document.body;
  const progressBar = document.getElementById("progress-bar");
  const pathLength = document
    .querySelector("#progress-bar > svg > path")
    .getTotalLength();

  scrollToTopBtn.addEventListener("click", () => {
    rootElement.scrollTo({ top: 0, behavior: "smooth" });
  });

  document.addEventListener("scroll", () => {
    const scrollAmount = pathLength / 100;
    const scrollPosition = Math.round(
      ((rootElement.scrollTop || bodyElement.scrollTop) /
        ((rootElement.scrollHeight || bodyElement.scrollHeight) -
          innerHeight)) *
        100 *
        scrollAmount
    );

    if (scrollPosition > 5) {
      scrollToTopBtn.classList.add("showBtn");
      progressBar.style.setProperty("--scrollAmount", scrollPosition + "px");
    } else {
      scrollToTopBtn.classList.remove("showBtn");
    }
  });
});
    </script>


<?php /**PATH /skl/home/devailsnew/public_html/meghna-cards/resources/views/front/template/meghna_footer/meghna_footer.blade.php ENDPATH**/ ?>