<?php if(auth()->guard()->check()): ?>
<style>
    .login .headerm_top{margin-top: 38px;}
</style>
<!--toplabel menu -->
<div class="navbar-dark bg-dark fixed-top py-2">
    <div class="container text-center">
        <a class="navbar-brand text-white" href="<?php echo e(url('/dashboard')); ?>">Dashboard</a>
        <a class="nav-link text-white d-inline-block" href="<?php echo e(url('/dashboard/posts/posttype/')); ?>/<?php echo e($post->id); ?>/edit/<?php echo e($post->post_type); ?>">- Edit Post -</a>
        <a class="nav-link text-white d-inline-block" href="<?php echo e(url('/logout')); ?>">Logout</a>
    </div>
</div>
<!--end top lavel menu-->
<?php endif; ?>
<?php $__env->startSection('content'); ?>

<!-- cards  -->
<?php if($post->category_id === '7'): ?> 

<div id="carouselExampleFade"
    class="carousel slide carousel-fade topspage-90 "
    data-bs-ride="carousel">
    <div class="carousel-inner banner-home">
        
    <?php $values = explode(",",$post->gallery_img); ?>
        <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imgid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($imgid): ?>
                 <div class="carousel-item active" data-bs-interval="2000">
                    <div class="scrollit">
                        <a data-scroll="true" href="<?php echo e(url('/posts/card-offers')); ?>"
                            class="btn btn-primary">
                            Explore Offers <svg version="1.1"
                                xmlns="http://www.w3.org/2000/svg"
                                width="32" height="32"
                                viewBox="0 0 32 32"> <path fill="#00294f"
                                    d="M7.84 9.333l8.16 8.241 8.16-8.241 2.507 2.537-10.667 10.796-10.667-10.796 2.507-2.537z"></path></svg></a>
                    </div>
                    <img
                        src="<?php echo e(asset('public/uploads/')); ?>/<?php echo e($imgid); ?>"
                        class="d-block w-100" alt="...">
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
    </div>
    <button class="carousel-control-prev" type="button"
        data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"
            aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button"
        data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon"
            aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- About Section -->
<section id="gray_card">
    <div class="container ">
        <div class="row justify-content-between">
            
            <div class="col-lg-5 card_sides_innar_photo_1 text-white">
            <h3 class="upper text-white pb-3"><span><?php echo $post->excerpt ?? ''; ?> </span></h3>
             <?php echo $post->content ?? ''; ?> 
            </div>
            <div class="col-lg-6 card_sides_innar_photo">
                <img src="<?php echo asset('public/uploads/' . $post->thumbnail_path) ?? ''; ?>" class="img-fluid rounded " alt="" />
            </div>

        </div>
    </div>
</section>

<section id="gray_card">
    <div class="container ">

        <div class="row">
            <div class="col-lg-12 pb-5">
                <h2 class="text-center text-white"><?php echo $post->option_1; ?></h2>
            </div>
            <div class="col-lg-12 exclusive_off cards_credit">
                <?php
                $posttype = $post->slug."-features";
                ?>
                
                <?php $__currentLoopData = getPostsByType($posttype); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 
                 <div class="card p-0 hover01 aos-init aos-animate" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <figure><img class="card-img-top" src="<?php echo asset('public/uploads/' . $postf->thumbnail_path) ?? ''; ?>"></figure>
                    <div class="card-body ">
                        <h5 class="card-title text-center text-white"><?php echo $postf->title; ?></h5>
                        <div class="card-text text-white features_benifit_card"><?php echo $postf->content; ?></div>
                    </div>
                </div>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

            </div>
            
            <div class="card-text text-white mt-5">
            <?php echo $post->more_option_2 ?? ''; ?>

            </div>
        </div>
    </div>
</section>
<!-- /About Section -->
<?php endif; ?>
<?php
                $values = explode(',', $post->template ?? '');
                foreach ($values as $imgid) {
                    $imgid = trim($imgid); // Trim any whitespace around the imgid
                    if (!empty($imgid)) {
                        // Check if the view exists
                        if (view()->exists('front.template.' . $imgid .'.'.$imgid)) {
                            echo view('front.template.' . $imgid.'.'.$imgid, compact('imgid'))->render();
                        } else {
                            echo ' -> '. $imgid.' Template not found';
                        }
                    }
                }
            ?>  
<?php $__env->stopSection(); ?>      
<?php echo $__env->make('front.themes.meghna.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /skl/home/devailsnew/public_html/meghna-cards/resources/views/front/themes/meghna/single.blade.php ENDPATH**/ ?>