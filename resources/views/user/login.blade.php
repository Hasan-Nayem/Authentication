<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('admin/lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/bracket.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/bracket.dark.css') }}">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center ht-100v">
      <form action="{{ route('user.login') }}" method="POST">
      @csrf
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-br-primary rounded bd bd-white-1">
          <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
          <div class="tx-center mg-b-60">The Admin Template For Perfectionist</div>
          @if(Session::has('info'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong> {{session::get('info')}} </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
          @endif
          <div class="form-group">
            <input type="text" name="email" class="form-control form-control-dark" placeholder="Enter your email">
          </div><!-- form-group -->
          <div class="form-group">
            <input type="password" name="password" class="form-control form-control-dark" placeholder="Enter your password">
            <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
          </div><!-- form-group -->
          <input type="submit" class="btn btn-info btn-block" value="Sign In"></input>

          <div class="mg-t-60 tx-center">Not yet a member? <a href="{{ route('user.signup.form') }}" class="tx-info">Sign Up</a></div>
        </div><!-- login-wrapper -->
      </form>

    </div><!-- d-flex -->

    <script src="{{ asset('admin/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <script src="{{ asset('admin/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  </body>
</html>
