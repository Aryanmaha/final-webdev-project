

<?php $__env->startSection('title','edit post'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid px-4">

<div class = "card mt-4">

       

    <div class="card-header">
        <h4>Edit Posts
            <a href="<?php echo e(url('admin/post')); ?>" class="btn btn-danger float-end"> Back</a>
        </h4>
    </div>
    <div class="card-body">

         <?php if($errors->any()): ?>
               <div class="alert alert-danger">
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div><?php echo e($error); ?></div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

    <form action="<?php echo e(url('admin/update-post/'.$post->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

    <div class = "mb-3">
        <label for="">Category</label>
        <select name="category_id" required class ="form-control">
            <option value="">--select Category--</option>
        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cateitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($cateitem->id); ?>" <?php echo e($post->category_id == $cateitem->id ? 'selected':''); ?>>
                 <?php echo e($cateitem->name); ?> </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </select>
    </div>

    <div class="mb-3">
        <label for="">Post Name</label>
        <input type="text" name="name" value= "<?php echo e($post->name); ?>"class="form-control">
    </div>

    
    <div class="mb-3">
        <label for="">slug</label>
        <input type="text" name="slug" value = "<?php echo e($post-> slug); ?>" class="form-control">
    </div>

    
    <div class="mb-3">
        <label for="">Description</label>
        <textarea name="description" class="form-control" row="4" id="mySummernote" ><?php echo $post->description; ?></textarea>
    </div>

    
    <div class="mb-3">
        <label for="">Youtube Iframe link</label>
        <input type="text" name="yt_iframe" class="form-control" value="<?php echo e($post->yt_iframe); ?>" >
    </div>

    <h4>SEO Tags</h4>
    <div class="mb-3">
        <label for="">Meta Title</label>
        <input type="text" name="meta_title" class="form-control" value="<?php echo e($post->meta_title); ?>">
    </div>

    
    <div class="mb-3">
        <label for="">Meta Description</label>
        <textarea name="meta_description" class="form-control" row="3"><?php echo $post->meta_description; ?></textarea>
    </div>

    <div class="mb-3">
        <label for="">meta keyword</label>
        <textarea name="meta_keyword" class="form-control" row="3"><?php echo $post->meta_keyword; ?></textarea>
    </div>

    <h4>Status</h4>

    <div class="row">

     <div class="col-md-4">
         <div class="mb-3">
            <label for="">Status</label>
            <input type="checkbox" name="status" <?php echo e($post->status == '1' ? 'checked':''); ?>>
        </div>
      </div>

      <div class="col-md-8">
        <div class="mb-3">
            <button type="submit" class="btn btn-primary float-end"> Update Post</button>
        </div>
       </div>
    </div>
    </form>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\final_project\resources\views/admin/post/edit.blade.php ENDPATH**/ ?>