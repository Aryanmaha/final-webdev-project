

<?php $__env->startSection('title',"food resources"); ?>

<?php $__env->startSection('title',"food resources"); ?>

<?php $__env->startSection('title',"food resources"); ?>
<?php $__env->startSection('content'); ?>
<main class>
        <!-- slider for the homepage -->
        <!-- slider1 starts -->
        <div class="sliders-content">
       <div class="button-left"><i class="fa-solid fa-chevron-left"></i></div> 
        <div class="sliders container">
            <?php $__currentLoopData = $all_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_cate_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="slider_container">
            <a class="slider d-flex align-items-center"  href="<?php echo e(url('category/'.$all_cate_item->slug)); ?>">
              <div class="left">
                <img src="<?php echo e(asset('uploads/category/'.$all_cate_item->image)); ?>" alt="blog post 1">
              </div>
              <div class="right">
                <h2><?php echo e($all_cate_item->name); ?></h2>
                <p><?php echo e($all_cate_item->description); ?></p>
             </div>
            </a>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="button-right"><i class="fa-solid fa-chevron-right"></i></div>
        </div>
        <!-- slider for homepage ends  -->
        <div class="second-main container">
        <div class="second-main-left bg-light">
          <h1>Some posts you might like</h1>
          <div class="second-left-content">

          <?php $__currentLoopData = $random_post_one; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $random_one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="second-left-content-left">
            <div class="post_video">
             <iframe width="1000" height="300" src="<?php echo $random_one-> yt_iframe; ?>">
              </iframe>
              </div>
              <a class = "second-left-left-contents" href="<?php echo e(url('category/'.$random_one->category->slug.'/'.$random_one->slug)); ?>">
                <h2> <?php echo e($random_one->name); ?></h2>
                <span class="editor-name"><?php echo e($random_one->user->name); ?></span>
                <span class="date-updated"><?php echo e($random_one->created_at->format('d/m/Y H:i:s')); ?></span>
              </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="second-left-content-right">
            <?php $__currentLoopData = $random_post_two; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $random_two): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a class="mini-blog" href="<?php echo e(url('category/'.$random_two->category->slug.'/'.$random_two->slug)); ?>">
                <div class="mini-blog-contents">
                  <h2><?php echo e($random_two -> name); ?></h2>
                  <span class="editor-name"><?php echo e($random_two->user->name); ?></span>
                <span class="date-updated"><?php echo e($random_two->created_at->format('d/m/Y H:i:s')); ?></span>
                </div>
                </a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
             
            </div>
          </div>
        </div>
        <div class="second-main-right bg-light">
          <h1>latest post....</h1>
          <div class="second-main-right-content" href="">
            <?php $__currentLoopData = $latest_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest_post_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="mini-blog" href="<?php echo e(url('category/'.$latest_post_item->category->slug.'/'.$latest_post_item->slug)); ?>" >
              <div class="mini-blog-contents">
                <h2><?php echo e($latest_post_item-> name); ?></h2>
                <span class="editor-name"><?php echo e($latest_post_item->user->name); ?></span>
              <span class="date-updated"><?php echo e($latest_post_item->created_at->format('d/m/Y H:i:s')); ?></span>
              </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <a href="">see more...</a>
        </div>
      </div>

</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\final_project\resources\views/frontend/index.blade.php ENDPATH**/ ?>