

<?php $__env->startSection('title',"$category->meta_title"); ?>

<?php $__env->startSection('title',"$category->meta_description"); ?>

<?php $__env->startSection('title',"$category->meta_keyword"); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="category_content">
        <img src="<?php echo e(asset('uploads/category/'.$category->image)); ?>" alt="">
        <h2><?php echo e($category->name); ?></h2>
        <p><?php echo e($category->description); ?></p>
    </div>
</div>

<div class="container category_post">
    <div class="card" style="width: 100%;">
      <div class="card-header">
        Posts related to <?php echo e($category->name); ?>

       </div>
       <ul class="list-group list-group-flush">
    <?php $__empty_1 = true; $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <li class="list-group-item"><a href="<?php echo e(url('category/'.$category->slug.'/'.$postitem->slug)); ?>">
                <?php echo e($postitem->name); ?></a>
                <div class="created_meta">
                <h6>Posted On: <?php echo e($postitem->created_at->format('d/m/Y H:i:s')); ?></h6>
                <h6>Posted by: <?php echo e($postitem->user->name); ?></h6>
                </div>
            </li>
            
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <li class="list-group-item">
        No posts available
      </li>
    <?php endif; ?>
    </ul>
    
  </div>
  
</div>
<div class="your-paginate container">
                <?php echo e($post->links()); ?>

     </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\final_project\resources\views/frontend/post/index.blade.php ENDPATH**/ ?>