<?php
/* Template Name: Cards Type
    Version: 1.0
*/
?>    
<!-- About Section -->
      <section>
        <div class="container cards_ban">
        <?php $__currentLoopData = getPostsByType("card-home-offer-banners"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             
          <!-- card -->
          <div class="card w-100 mb-3 m-0 p-0" data-aos="<?php echo e($post->id % 2 == 0 ? 'fade-right':'fade-left'); ?>">
            <div class="card-body m-0 p-0">
              <a href="<?php echo e($post->excerpt); ?>">
                <img src="<?php echo asset('public/uploads/' . $post->thumbnail_path) ?? ''; ?>">
              </a>
            </div>
          </div>
          <!-- End card -->
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>           

        </div>
      </section><!-- /About Section -->   
      
      <!--<div data-aos="fade-left"></div>-->
      
       <?php /**PATH /skl/home/devailsnew/public_html/meghna-cards/resources/views/front/template/meghna_type_cards/meghna_type_cards.blade.php ENDPATH**/ ?>