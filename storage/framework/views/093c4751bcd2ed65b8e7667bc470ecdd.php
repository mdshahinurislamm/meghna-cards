<?php $__env->startSection('content'); ?>

<!-- cards  -->
<?php if($posttype->category_main_id === 7): ?>  
<!-- slider  -->

<div id="carouselExampleFade" class="carousel slide carousel-fade topspage-90 "
  data-bs-ride="carousel">
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
        class="d-block w-100" alt="...">
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


<!--<section>-->
<!--    <div class="masonry">-->
<!--        <div class="container cards_credit">-->
<!--            <?php $__currentLoopData = getPostsByType($posttype->slug); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
            <!-- card -->
<!--            <div class="card " data-aos="fade-down"-->
<!--         data-aos-easing="linear"-->
<!--         data-aos-duration="1500" style="height:20%;">-->
<!--                <a href="<?php echo e(url($post->post_type,$post->slug)); ?>"> <img-->
<!--                        src="<?php echo asset('public/uploads/' . $post->thumbnail_path) ?? ''; ?>"-->
<!--                        class="card-img-top"-->
<!--                        alt="...">-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title text-center"> <?php echo e($post->title); ?></h5>-->
<!--                        <p class="card-text"><?php echo e($post->excerpt); ?></p>-->
<!--                        <a href="<?php echo e(url($post->post_type,$post->slug)); ?>"-->
<!--                            class="btn btn-secondary text-white">Know-->
<!--                            More</a></a>-->
<!--                    </div>-->
<!--            </div>-->
            <!-- End card -->      
<!--            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->



<section>
  <div class="container cards_credit">
        <div class="row justify-content-center">
          <div class="col-lg-8 d-flex justify-content-center">
            <div class="<?php echo e(getPostsByType($posttype->slug)->count() == 1? 'masonry1':'masonry'); ?>">
                
                
                <?php $__currentLoopData = getPostsByType($posttype->slug); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- card -->
                <div class="card" data-aos="fade-down"
                     data-aos-easing="linear"
                     data-aos-duration="1500">
                    <a href="<?php echo e(url($post->post_type, $post->slug)); ?>">
                        <img src="<?php echo asset('public/uploads/' . $post->thumbnail_path) ?? ''; ?>"
                             class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="<?php echo e(url($post->post_type, $post->slug)); ?>">
                            <h5 class="card-title text-center"><?php echo e($post->title); ?></h5>
                            <p class="card-text text-center"><?php echo e($post->excerpt); ?></p>
                        </a>
                        <a href="<?php echo e(url($post->post_type, $post->slug)); ?>"
                           class="btn btn-secondary text-white">Know More</a>
                    </div>
                </div>
                <!-- End card -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>  
  </div>
</section>


<?php else: ?>
<!-- others, current offer etc-->



        <div class="breadcrumb-area breadcrumb-bg" data-background="<?php echo asset('public/uploads/' . $posttype->pt_thumbnail_path) ?? ''; ?>" style="background-image: url(&quot;<?php echo asset('public/uploads/' . $posttype->pt_thumbnail_path) ?? ''; ?>&quot;);">
            <div class="container d-none">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2><?php echo e($posttype->name); ?></h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active"
                                        aria-current="page"><?php echo e($posttype->name); ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
            $filteredPosts = collect(getAllPosttype())->filter(function($post) use ($posttype) {
                return $post->menu_icon == $posttype->name;
            });
        ?>

        <?php if($filteredPosts->isNotEmpty()): ?>
        <section id="about" class="about section catStylept">
            <div class="container valetineiconbox">
                <div class="row gy-4 justify-content-center text-center"> 
                    <?php $__currentLoopData = $filteredPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-2" data-aos="fade-up" data-aos-delay="100">
                            <a href="<?php echo e(url($post->slug)); ?>">
                                <div class="valetineiconboxbg">
                                    <div class="valetineicon">
                                        <?php echo $post->pt_content; ?>

                                    </div>
                                    <h4 class="text-uppercase"><?php echo e($post->name); ?> </h4>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                </div>
            </div>
        </section>
        <?php else: ?>

        <!-- <?php $__currentLoopData = getAllPosttype(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($post1->menu_icon == $posttype->name): ?>      
            <?php endif; ?> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        <?php if($post1->menu_icon): ?>  
        <section id="about1" class="about section">
            <div class="container valetineiconbox">
                <div class="row gy-4 justify-content-center text-center"> 
                    <?php $__currentLoopData = getAllPosttype(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($post->menu_icon == $posttype->name): ?>        
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
                        <?php endif; ?> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                </div>
            </div>
        </section>
        <?php else: ?>
        <?php endif; ?>     -->



                    <!-- About Section -->
                    <section id="about" class="about section">
                        <!--<div class="sear_offer">-->
                        <!--    <form>-->
                        <!--        <label for="input">Search</label>-->
                        <!--        <input required pattern=".*\S.*" autocomplete="off"-->
                        <!--            type="text" class="input" id="input"-->
                        <!--            onkeyup="instantSearch()">-->
                        <!--        <span class="caret"></span>-->
                        <!--    </form>-->
                        <!--</div>-->
                        
                        
                        
                        <div class="search-box">
                            <button class="btn-search"><img
                                    src="<?php echo asset('public/uploads/search.png') ?? ''; ?>"></button>
                            <!--<input type="text" id="psearch" class="input-search"-->
                            <!--    placeholder="Type to Search...">-->
                                
                                <input required pattern=".*\S.*" autocomplete="off"
                                    type="text" class="input-search" id="input"
                                    onkeyup="instantSearch()" placeholder="Type to Search...">
                                
                        </div>

                        <!-- Section Title -->
                        <div class="container section-title" data-aos="fade-up">
                            <h1><?php echo e($posttype->name); ?><br></h1>
                        </div><!-- End Section Title -->

                        <div class="container">

                                <?php $__currentLoopData = getAllCategory(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat_post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                     
                                <?php
                                    $matchedPosts = [];
                                    foreach(getPostsByType($posttype->slug) as $post) {
                                        // Convert comma-separated category IDs into array
                                        $postCategoryIds = explode(',', $post->category_id ?? '');
                                        
                                        if (in_array($cat_post->id, $postCategoryIds)) {
                                            $matchedPosts[] = $post;
                                        }
                                    }
                                ?>

                                <?php if(count($matchedPosts)): ?>
                                    <div class="row gy-4 justify-content-center text-center mb-5">
                                        <h3><?php echo e($cat_post->name); ?></h3>

                                        <?php $__currentLoopData = $matchedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <!-- card -->
                                            <div class="col-lg-3 col-sm-6 item-offer_search" data-aos-delay="100">
                                                <div class="card card_offer">
                                                    <a href="<?php echo e($post->excerpt); ?>">
                                                        <div class="dining_upper">
                                                            <img src="<?php echo asset('public/uploads/' . $post->thumbnail_path) ?? ''; ?>" alt>
                                                        </div>
                                                        <div class="dining_lowar">
                                                            <h3><?php echo e((strlen($post->title) > 30) ? substr($post->title, 0, 30) . '...' : $post->title); ?></h3>
                                                            <h2><?php echo e($post->title ?? 'Post Title'); ?> </h2>
                                                        </div>
                                                    </a>
                                                    <div class="dining_bottom">
                                                        <a data-bs-toggle="modal" data-bs-target="#exampleModa<?php echo e($post->id); ?>">View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card end-->
                                            <div class="modal fade" id="exampleModa<?php echo e($post->id); ?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5"
                                                                id="exampleModalLabel"><?php echo e($post->title ?? 'Post Title'); ?></h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body custom_modall">
                                                            <?php echo $post->content; ?>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                    
                        </div> 
                    </section><!-- /About Section -->
        <?php endif; ?>
        <!-- <?php
                $values = explode(',', $posttype->slug);
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
            ?> -->


<?php endif; ?>
<?php $__env->stopSection(); ?>      

 
<?php echo $__env->make('front.themes.meghna.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /skl/home/devailsnew/public_html/meghna-cards/resources/views/front/themes/meghna/posts.blade.php ENDPATH**/ ?>