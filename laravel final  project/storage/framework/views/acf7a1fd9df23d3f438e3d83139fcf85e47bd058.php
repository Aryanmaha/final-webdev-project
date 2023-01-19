

<?php $__env->startSection('title','Add post'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid px-4">

<div class = "card mt-4">

        <?php if($errors->any()): ?>
               <div class="alert alert-danger">
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div><?php echo e($error); ?></div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

    <div class="card-header">
        <h4>Add Posts
            <a href="<?php echo e(url('admin/add-post')); ?>" class="btn btn-primary float-end"> ADD posts</a>
        </h4>
    </div>
    <div class="card-body">

    <form action="<?php echo e(url('admin/add-post')); ?>" method="POST">
        <?php echo csrf_field(); ?>

    <div class = "mb-3">
        <label for="">Category</label>
        <select name="category_id" class ="form-control">
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cateitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($cateitem->id); ?>"> <?php echo e($cateitem->name); ?> </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </select>
    </div>

    <div class="mb-3">
        <label for="">Post Name</label>
        <input type="text" name="name" class="form-control">
    </div>

    
    <div class="mb-3">
        <label for="">slug</label>
        <input type="text" name="slug" class="form-control">
    </div>

    
    <div class="mb-3">
        <label for="">Description</label>
        <textarea name="description" class="form-control" id="mySummernote" row="4"></textarea>
    </div>

    
    <div class="mb-3">
        <label for="">Youtube Iframe link</label>
        <input type="text" name="yt_iframe" class="form-control">
    </div>

    <h4>SEO Tags</h4>
    <div class="mb-3">
        <label for="">Meta Title</label>
        <input type="text" name="meta_title" class="form-control">
    </div>

    
    <div class="mb-3">
        <label for="">Meta Description</label>
        <textarea name="meta_description" class="form-control" row="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="">meta keyword</label>
        <textarea name="meta_keyword" class="form-control" row="3"></textarea>
    </div>

    <h4>Status</h4>

    <div class="row">

     <div class="col-md-4">
         <div class="mb-3">
            <label for="">Status</label>
            <input type="checkbox" name="status" >
        </div>
      </div>

      <div class="col-md-8">
        <div class="mb-3">
            <button type="submit" class="btn btn-primary float-end"> Save Post</button>
        </div>
       </div>
    </div>
    </form>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\final_project\resources\views/admin/post/create.blade.php ENDPATH**/ ?>