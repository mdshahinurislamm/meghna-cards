<?php
/* Template Name: Current Offer Type
    Version: 1.0
*/
?>   
    <section id="about" class="about section">
        <div class="container valetineiconbox">
            <div class="row gy-4 justify-content-center text-center">
                <?php $__currentLoopData = getAllPosttype(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($post->category_main_id == 6): ?>               

                <!-- <?php $__currentLoopData = getAllCategory(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat_post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                
                <?php if($cat_post->id == $post->category_main_id): ?>                 -->

                <div class="col-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <a href="<?php echo e(url($post->slug)); ?>">
                        <div class="valetineiconboxbg">
                            <div class="valetineicon">
                                <?php echo $post->pt_content; ?>

                            </div>
                            <h4 class="text-uppercase"><?php echo e($post->name); ?></h4>
                        </div>
                    </a>
                </div>

                <!-- <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   -->

                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
            </div>
        </div>
    </section><?php /**PATH /skl/home/devailsnew/public_html/meghna-cards/resources/views/front/template/meghna_type_current/meghna_type_current.blade.php ENDPATH**/ ?>