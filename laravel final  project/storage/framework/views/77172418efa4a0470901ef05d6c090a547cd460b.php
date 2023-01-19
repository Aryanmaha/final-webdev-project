<nav class=" container navbar-light d-flex justify-content-between mt-10">
        <div class="logo nav-left navbar-brand"> <a href="index.html"> Food resource </a></div>
        <div class="nav-right d-flex justify-content-between align-items-center"> 
            <a href="" class="social-logo"><i class="fa-brands fa-instagram"></i></a>
            <a href="" class="social-logo"><i class="fa-brands fa-twitter"></i></a>
            <a href="" class="social-logo"><i class="fa-brands fa-facebook"></i></a>
            <a href=""></a>
            <form class="d-flex" role="search">
                <input type="search" class="form-control" placeholder="search" arai-label="search">
                <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <ul class="navbar-nav d-flex mx-3">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
        </div>
        </div>
    </nav>
    <!-- content for header ends -->
    <!-- content for seconds header i.e. manu items -->
    <nav class=" second-nav navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class= " collapse navbar-collapse container" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link active" href="<?php echo e(url('/')); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/category')); ?>">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/contact')); ?>">Contact us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/about')); ?>">About us</a>
              </li>
          </ul>
        </div>

      </nav>
      </header><?php /**PATH C:\xampp\htdocs\final_project\resources\views/layouts/inc/frontend-navbar.blade.php ENDPATH**/ ?>