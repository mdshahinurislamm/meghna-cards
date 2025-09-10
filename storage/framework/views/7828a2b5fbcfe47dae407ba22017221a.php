<?php
/* Template Name: Meghna Slider Cards
    Version: 1.0
*/
?>
<?php echo e(insertDummyData('meghna-slider-cards',3)); ?>


<!-- Hero Section -->

<div id="carouselExampleFade" class="carousel slide carousel-fade topspage-90 "
  data-bs-ride="carousel" data-aos="fade-down">
  <div class="carousel-inner banner-home">
  <?php $cnt = 1; ?>
  <?php $__currentLoopData = getPostsByType('meghna-slider-cards'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="carousel-item <?php echo e($cnt == 1 ? 'active':''); ?>" data-bs-interval="2000">
      <div class="scrollit">
        <a data-scroll="true" href="<?php echo e(url('/posts/card-offers')); ?>" class="btn btn-primary">
          Explore Offers <svg version="1.1"
            xmlns="http://www.w3.org/2000/svg" width="32" height="32"
            viewBox="0 0 32 32"> <path fill="#00294f"
              d="M7.84 9.333l8.16 8.241 8.16-8.241 2.507 2.537-10.667 10.796-10.667-10.796 2.507-2.537z"></path></svg></a>
      </div>
      <img src="<?php echo asset('public/uploads/' . $post->thumbnail_path) ?? ''; ?>"
        class="d-block " alt="...">
    </div>
    <?php $cnt++; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
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




 <?php /**PATH /skl/home/devailsnew/public_html/meghna-cards/resources/views/front/template/meghna_slider_cards/meghna_slider_cards.blade.php ENDPATH**/ ?>