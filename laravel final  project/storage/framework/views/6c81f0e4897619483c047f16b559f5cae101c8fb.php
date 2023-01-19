

<?php $__env->startSection('title',"$post->meta_title"); ?>

<?php $__env->startSection('title',"$post->meta_description"); ?>

<?php $__env->startSection('title',"$post->meta_keyword"); ?>

<?php $__env->startSection('content'); ?>
<div class="container post_page">
    <div class="post_title">
    <h1><?php echo $post->name; ?></h1>
    <H2><?php echo $post->category->name; ?></h2>
    </div>
    <div class="post_video">
    <iframe width="700" height="345" src="<?php echo $post-> yt_iframe; ?>">
      </iframe>
    </div>
    <div class="post_description"> <?php echo $post->description; ?></div>
          <div class="post_author">
        <h3>Posted by: <?php echo e($post->user->name); ?></h3>
        <h3>Posted On: <?php echo e($post->created_at->format('d/m/Y H:i:s')); ?></h3>
    </div>
</div>

<div class="comment-area container mt-4">
    <?php if(session('message')): ?>
    <h6 class="alert alert-warning md-3"><?php echo e(session('message')); ?></h6>
    <?php endif; ?>
    <div class="card card-body">
        <h6 class="card-title">Leave a comment</h6>
        <form action="<?php echo e(url('comments')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="post_slug" value="<?php echo e($post->slug); ?>">
            <textarea name="comment_body" class="form-control" rows="3" required></textarea>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>

    <?php $__empty_1 = true; $__currentLoopData = $post-> comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="comment-container card card-body shadow-sm mt-3">
        <div class="detail-area">
            <h6 class="User-name mb-1">
                <?php if($comment->user): ?>
                <?php echo e($comment->user->name); ?>

                <?php endif; ?>
                <small class="ms-3 text-primary"> commented on: <?php echo e($comment->created_at->format('d/m/Y H:i:s')); ?></small>
            </h6>
            <p class="user-comment mb-1">
                <?php echo $comment->comment_body; ?>

            </p>
        </div>
        <?php if(Auth::check() && Auth::id() == $comment->user_id): ?>
        <div>
            <button type="button" value="<?php echo e($comment->id); ?>" class="deleteComment btn btn-danger me-2" style="color:white!important;">Delete</button>
        </div>
        <?php endif; ?>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="card card-body shadow-sm mt-3">
    <h6>No comments Yet.</h6>
</div>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
     $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
    });

    $(document).ready(function () {
        $(document).on('click','.deleteComment',function(){
            if(confirm('Are you sure you want to delete this comment'))
            {
                var thisClicked = $(this);
                var comment_id = thisClicked.val();

                $.ajax({
                    type: "POST",
                    url: "/delete-comment",
                    data: {
                        'comment_id' : comment_id
                    },
                    success: function (res){
                        if(res.status == 200){
                            thisClicked.closest('.comment_container').remove();
                            alert(res.message);
                        }else{
                            alert(res.message);
                        }
                    }
                });
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\final_project\resources\views/frontend/post/view.blade.php ENDPATH**/ ?>