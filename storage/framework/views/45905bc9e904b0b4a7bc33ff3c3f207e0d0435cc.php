<!-- Bootstrap core CSS -->
<link href="<?php echo e(asset('css/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('login.css')); ?>" rel="stylesheet">

<div class="container">
    <div class="card card-container">
        <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>
        <?php if(session('logout')): ?>
        <div class="alert alert-success">
            <?php echo e(session('logout')); ?>

        </div>
        <?php endif; ?>
                <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="<?php echo e(asset('img/GRO.png')); ?>" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" action="<?php echo e(action('Registration@login')); ?>"  method="post">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <span id="reauth-email" class="reauth-email"></span>
            <?php if(!empty(session('name'))): ?>
            <input type="text" id="username" name="username" value="<?php echo e($name); ?>" class="form-control" placeholder="<?php echo e($name); ?>" required autofocus>
            <?php else: ?>
            <input type="text" name="username" class="form-control" placeholder=""  required autofocus>
            <?php endif; ?>
            <input type="password" name="pwd" class="form-control" placeholder="Password" required>
            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
        </form><!-- /form -->
        <a href="<?php echo e(url('/signup')); ?>" class="forgot-password">
            Sign up
        </a>
    </div><!-- /card-container -->
</div><!-- /container -->