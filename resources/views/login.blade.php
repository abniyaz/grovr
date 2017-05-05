<!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<link href="{{asset('login.css')}}" rel="stylesheet">

<div class="container">
    <div class="card card-container">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        @if (session('logout'))
        <div class="alert alert-success">
            {{ session('logout') }}
        </div>
        @endif
                <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="{{asset('img/GRO.png')}}" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" action="{{action('Registration@login')}}"  method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <span id="reauth-email" class="reauth-email"></span>
            @if(!empty(session('name')))
            <input type="text" id="username" name="username" value="{{$name}}" class="form-control" placeholder="{{$name}}" required autofocus>
            @else
            <input type="text" name="username" class="form-control" placeholder=""  required autofocus>
            @endif
            <input type="password" name="pwd" class="form-control" placeholder="Password" required>
            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
        </form><!-- /form -->
        <a href="{{url('/signup')}}" class="forgot-password">
            Sign up
        </a>
    </div><!-- /card-container -->
</div><!-- /container -->