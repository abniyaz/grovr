<!-- Bootstrap core CSS -->
<link href="<?php echo e(asset('css/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('login.css')); ?>" rel="stylesheet">

<div class="container">
    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="<?php echo e(asset('img/GRO.png')); ?>" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" action="<?php echo e(action('Registration@signup')); ?>"  method="post">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="text" name="username" class="form-control" placeholder="username" required autofocus>
            <input type="text" name="desc" class="form-control" placeholder="desc"  >
            <input type="password" name="pass" class="form-control" placeholder="Password" required>

            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign Up</button>
        </form><!-- /form -->
    </div><!-- /card-container -->
</div><!-- /container -->