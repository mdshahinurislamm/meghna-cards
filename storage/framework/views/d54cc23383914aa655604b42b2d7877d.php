<?php $__env->startSection('content'); ?>
<?php if(optional(auth()->user())->role == 111): ?>
<!-- Nested Row within Card Body -->
<form method="POST" action="<?php echo e(url('/dashboard/posttypes',$posttype->id)); ?>" accept-charset="UTF-8" class="user">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PATCH'); ?> 

    <div class="row">
        <div class="col-xl-9 col-lg-8">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit a Post Type!</h6>                
                </div>
                <!-- Card Body -->
                <div class="card-body"> 
                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <input type="text" name='name' value='<?php echo e($posttype->name); ?>' class="form-control form-control-user" id="exampleFirstName"
                                placeholder=" Post Type Name">
                                <input type="hidden" name='user_id' class="form-control form-control-user" id="exampleFirstName"
                                placeholder="user" value="<?php if(auth()->guard()->check()): ?><?php echo e(optional(auth()->user())->id); ?><?php endif; ?>">
                        </div> 
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <input type="text" name='slug' value='<?php echo e($posttype->slug); ?>' class="form-control form-control-user" id="exampleFirstName"
                                placeholder="slug">
                        </div> 
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">                                
                            <!-- choose editor  -->
                            <?php if($settingsAdmin->editor == "classic"): ?>
                            <!-- editor 1-->
                                <textarea name="pt_content"><?php echo $posttype->pt_content; ?></textarea>  
                            <?php else: ?>
                            <!-- editor 2-->                
                            <textarea id="html" name="pt_content"><?php echo $posttype->pt_content; ?></textarea>
                            <textarea id="css" name="pt_content_css"><?php echo $posttype->pt_content_css; ?></textarea>                
                            <div id="gjs" style="height:500px !important;"></div>                      
                            <?php endif; ?>                                  
                        </div>                             
                    </div>
                </div>
            </div>
            
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Turn on off post sections</h6>                
                </div>
                <!-- Card Body -->
                <div class="card-body">

                    <!-- Options text -->
                    <label for="basic-url">If you visible this fields please input your placeholder. Turn off # Code: title</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> 
                                <?php if($posttype->title == '#'): ?>
                                <span class="input-group-text badge-danger"><i class="fa fa-times" aria-hidden="true"></i></span>
                                <?php else: ?>
                                <span class="input-group-text badge-success"><i class="fa fa-check" aria-hidden="true"></i></span>
                                <?php endif; ?> 
                            <span class="input-group-text">title</span>
                        </div>
                        <input type="text" name="title" value="<?php echo e($posttype->title); ?>" class="form-control form-control-user" aria-label="Dollar amount (with dot and two decimal places)">
                    </div>
                    <label for="basic-url">If you visible this fields please input your placeholder. Turn off # Code: content</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <?php if($posttype->content == '#'): ?>
                            <span class="input-group-text badge-danger"><i class="fa fa-times" aria-hidden="true"></i></span>
                            <?php else: ?>
                            <span class="input-group-text badge-success"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <?php endif; ?> 
                            <span class="input-group-text">content or Editor section</span>
                        </div>
                        <input type="text" name="content" value="<?php echo e($posttype->content); ?>" class="form-control form-control-user" aria-label="Dollar amount (with dot and two decimal places)">
                    </div>

                    <label for="basic-url">If you visible this fields please input your placeholder. Turn off # Code: excerpt</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <?php if($posttype->excerpt == '#'): ?>
                            <span class="input-group-text badge-danger"><i class="fa fa-times" aria-hidden="true"></i></span>
                            <?php else: ?>
                            <span class="input-group-text badge-success"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <?php endif; ?> 
                            <span class="input-group-text">Excerpt</span>
                        </div>
                        <input type="text" name="excerpt" value="<?php echo e($posttype->excerpt); ?>" class="form-control form-control-user" >
                    </div>

                    <label for="basic-url">If you visible this fields please input your placeholder. Turn off # Code: thumbnail_path</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <?php if($posttype->thumbnail_path == '#'): ?>
                            <span class="input-group-text badge-danger"><i class="fa fa-times" aria-hidden="true"></i></span>
                            <?php else: ?>
                            <span class="input-group-text badge-success"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <?php endif; ?> 
                            <span class="input-group-text">thumbnail_path</span>
                        </div>
                        <input type="text" name="thumbnail_path" class="form-control form-control-user" value="<?php echo e($posttype->thumbnail_path); ?>">
                    </div>

                    <label for="basic-url">If you visible this fields please input your placeholder. Turn off # Code: option_1</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <?php if($posttype->option_1 == '#'): ?>
                            <span class="input-group-text badge-danger"><i class="fa fa-times" aria-hidden="true"></i></span>
                            <?php else: ?>
                            <span class="input-group-text badge-success"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <?php endif; ?> 
                            <span class="input-group-text">option_1</span>
                        </div>
                        <input type="text" name="option_1" class="form-control form-control-user" value="<?php echo e($posttype->option_1); ?>">
                    </div>

                    <label for="basic-url">If you visible this fields please input your placeholder. Turn off # Code: option_2</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <?php if($posttype->option_2 == '#'): ?>
                            <span class="input-group-text badge-danger"><i class="fa fa-times" aria-hidden="true"></i></span>
                            <?php else: ?>
                            <span class="input-group-text badge-success"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <?php endif; ?> 
                            <span class="input-group-text">option_2</span>
                        </div>
                        <input type="text" name="option_2" class="form-control form-control-user" value="<?php echo e($posttype->option_2); ?>">
                    </div>

                    <label for="basic-url">If you visible this fields please input your placeholder. Turn off # Code: option_3</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <?php if($posttype->option_3 == '#'): ?>
                            <span class="input-group-text badge-danger"><i class="fa fa-times" aria-hidden="true"></i></span>
                            <?php else: ?>
                            <span class="input-group-text badge-success"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <?php endif; ?> 
                            <span class="input-group-text">option_3</span>
                        </div>
                        <input type="text" name="option_3" class="form-control form-control-user" value="<?php echo e($posttype->option_3); ?>">
                    </div>

                    <label for="basic-url">If you visible this fields please input your placeholder. Turn off # Code: option_4</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <?php if($posttype->option_4 == '#'): ?>
                            <span class="input-group-text badge-danger"><i class="fa fa-times" aria-hidden="true"></i></span>
                            <?php else: ?>
                            <span class="input-group-text badge-success"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <?php endif; ?> 
                            <span class="input-group-text">option_4</span>
                        </div>
                        <input type="text" name="option_4" class="form-control form-control-user" value="<?php echo e($posttype->option_4); ?>">
                    </div>


                    <label for="basic-url">If you visible this fields please input your placeholder. Turn off # Code: more_option_1 Positions</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <?php if($posttype->more_option_1 == '#'): ?>
                            <span class="input-group-text badge-danger"><i class="fa fa-times" aria-hidden="true"></i></span>
                            <?php else: ?>
                            <span class="input-group-text badge-success"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <?php endif; ?> 
                            <span class="input-group-text">more_option_1</span>
                        </div>
                        <input type="text" name="more_option_1" class="form-control form-control-user" value="<?php echo e($posttype->more_option_1); ?>">
                    </div>

                    <label for="basic-url">If you visible this fields please input your placeholder. Turn off # Code: more_option_2</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <?php if($posttype->more_option_2 == '#'): ?>
                            <span class="input-group-text badge-danger"><i class="fa fa-times" aria-hidden="true"></i></span>
                            <?php else: ?>
                            <span class="input-group-text badge-success"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <?php endif; ?> 
                            <span class="input-group-text">more_option_2</span>
                        </div>
                        <input type="text" name="more_option_2" class="form-control form-control-user" value="<?php echo e($posttype->more_option_2); ?>">
                    </div>

                    <label for="basic-url">If you visible this fields please input your placeholder. Turn off # Code: gallery_img</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <?php if($posttype->gallery_img == '#'): ?>
                            <span class="input-group-text badge-danger"><i class="fa fa-times" aria-hidden="true"></i></span>
                            <?php else: ?>
                            <span class="input-group-text badge-success"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <?php endif; ?> 
                            <span class="input-group-text">gallery_img</span>
                        </div>
                        <input type="text" name="gallery_img" class="form-control form-control-user" value="<?php echo e($posttype->gallery_img); ?>">
                    </div>

                    <label for="basic-url">If you visible this fields please input your placeholder. Turn off # Code: category_id</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <?php if($posttype->category_id == '#'): ?>
                            <span class="input-group-text badge-danger"><i class="fa fa-times" aria-hidden="true"></i></span>
                            <?php else: ?>
                            <span class="input-group-text badge-success"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <?php endif; ?> 
                            <span class="input-group-text">category_id</span>
                        </div>
                        <input type="text" name="category_id" class="form-control form-control-user" value="<?php echo e($posttype->category_id); ?>">
                    </div>
                    
                </div>
            </div> 
        </div>
        <div class="col-xl-3 col-lg-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Publish</h6>                
                </div>            
                <div class="card-body"> 
                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <input type="text" name='paginate' value="<?php echo e($posttype->paginate); ?>" class="form-control form-control-user" id="exampleFirstName" placeholder="100">
                        </div> 
                    </div> 
                    <div class="form-group row">                        
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <select class="form-control form-control-user form-select form-select-sm custom-select" aria-label=".form-select-sm example" name="status">
                                <option value="0" <?php echo e($posttype->status == 0 ? 'selected' : ''); ?>  >Unpublish</option>
                                <option value="1" <?php echo e($posttype->status == 1 ? 'selected' : ''); ?>  >Publish</option>
                            </select>
                        </div> 
                    </div> 
                    <div class="text-center mt-2">
                        <button type="submit" class="btn btn-primary btn-user btn-block">Update</button>                    
                    </div>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($message); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>   
            </div>

            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Thumbnails</h6>              
                </div>
                <!-- Card Body -->
                <div class="card-body"> 
                    <div class="form-group">                        
                            <input type="hidden" id="type" name='pt_thumbnail_path' placeholder="Image Url" class="form-control" value="<?php echo e($posttype->pt_thumbnail_path); ?>">
                            <img id="myImg" src="<?php echo e($posttype->pt_thumbnail_path == null ? asset('packages/larapress/src/Assets/admin/img/dummy-image-square.jpg') : asset('public/uploads').'/'.$posttype->pt_thumbnail_path); ?>" width="100%" height="auto" data-toggle="modal" data-target="#exampleModalCenter" class="border border-info">
                            <button type="button" onclick="removeValue('<?php echo e(url('packages/larapress/src/Assets/admin/img/dummy-image-square.jpg')); ?>')" class="btn btn-secondary btn-sm mt-3">Remove Images</button>                        
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Display Options</h6>                
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!-- Display Options -->
                    <div class="form-group">
                        <label for="basic-url">Main menu. Turn On Off</label>
                        <div class="input-group mb-3">
                            <label class="switch">
                                <input type="checkbox" name="in_menu_swh" value="1" <?php echo e($posttype->in_menu_swh == '1' ? 'checked' : ''); ?> >
                                <span class="sliderswitch round"></span>
                            </label>
                        </div> 

                        <label for="basic-url">Dashboard Turn On Off</label>
                        <div class="input-group mb-3">
                            <label class="switch">
                                <input type="checkbox" name="in_dashboard" value="1" <?php echo e($posttype->in_dashboard == '1' ? 'checked' : ''); ?>>
                                <span class="sliderswitch round"></span>
                            </label>
                        </div> 
                        <label for="basic-url">Template Design Turn On Off</label>
                        <div class="input-group mb-3">
                            <label class="switch">
                                <input type="checkbox" name="template" value="1" <?php echo e($posttype->template == '1' ? 'checked' : ''); ?>>
                                <span class="sliderswitch round"></span>
                            </label>
                        </div>
                    </div> 
                    
                    <label for="basic-url">Main Categories</label>
                    <div class="form-group">
                        <select class="form-control form-control-user form-select form-select-sm custom-select" aria-label=".form-select-sm example" name="category_main_id">
                            <option value="0">No Categories</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" <?php echo e($posttype->category_main_id == $category->id ? 'selected' : ''); ?> ><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>                    
                        
                    <label for="basic-url">Select menu name or create</label>
                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <input type="text" name="menu_icon" value="<?php echo e($posttype->menu_icon); ?>" class="form-control form-control-user">
                            <?php $__currentLoopData = $posttypesD; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posttype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($posttype->menu_icon): ?>
                                <div class="form-check" style="display:inline-block">
                                    <input class="form-check-input" name="menu_icon" type="checkbox" value="<?php echo e($posttype->menu_icon); ?>" id="for<?php echo e($posttype->menu_icon); ?>">
                                    <label class="form-check-label" for="for<?php echo e($posttype->menu_icon); ?>">
                                    <?php echo e($posttype->menu_icon); ?>

                                    </label>
                                </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </div> 
                    </div>                           
                    <!-- Display Options -->  
                </div>
            </div>  



        </div>
    </div> 
</form>
<!-- Insert Image from library -->
<?php echo $__env->make('admin.media.medialibrary', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('admin.media.mediauploads', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- Modal -->
<?php else: ?>
You can't access this page. Please contact admin.
<?php endif; ?>
<?php $__env->stopSection(); ?>      
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /skl/home/devailsnew/public_html/meghna-cards/packages/larapress/src/Resources/views/admin/posttypes/edit.blade.php ENDPATH**/ ?>