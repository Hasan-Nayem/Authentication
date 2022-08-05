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
    <link href="{{ asset('admin/lib/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/bracket.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/bracket.dark.css') }}">
  </head>

  <body>

    <div class="row no-gutters flex-row-reverse ht-100v">
      <div class="col-md-6 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-250 wd-xl-350 mg-y-30">
          <h4 class="tx-white tx-center">Sign Up</h4>
          <p class="tx-center mg-b-60">Create your own account.</p>

          <form action="{{ route('signup') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-dark" placeholder="Enter your email">
                @error('email')
                  <br>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @enderror
              </div><!-- form-group -->
            <div class="form-group">
                <input type="password" name="password" class="form-control form-control-dark" placeholder="Enter your password">
                @error('password')
                  <br>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @enderror
              </div><!-- form-group -->
            <div class="form-group">
                <input type="text" name="name" value="{{ old('name') }}" class="form-control form-control-dark" placeholder="Enter your fullname">
                @error('name')
                  <br>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @enderror
              </div><!-- form-group -->
            <div class="form-group">
                <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Birthday</label>
                <div class="row row-xs">
                <div class="col-sm-4">
                    <select class="form-control select2" data-placeholder="Month">
                    <option label="Month"></option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    </select>
                </div><!-- col-4 -->
                <div class="col-sm-4 mg-t-20 mg-sm-t-0">
                    <select class="form-control select2" data-placeholder="Day">
                    <option label="Day"></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    </select>
                </div><!-- col-4 -->
                <div class="col-sm-4 mg-t-20 mg-sm-t-0">
                    <select class="form-control select2" data-placeholder="Year">
                    <option label="Year"></option>
                    <option value="1">2010</option>
                    <option value="2">2011</option>
                    <option value="3">2012</option>
                    <option value="4">2013</option>
                    <option value="5">2014</option>
                    </select>
                </div><!-- col-4 -->
                </div><!-- row -->
            </div><!-- form-group -->
            <div class="form-group tx-12">By clicking the Sign Up button below you agreed to our privacy policy and terms of use of our website.</div>
            <button type="submit" class="btn btn-info btn-block">Sign Up</button>
        </form>

          <div class="mg-t-60 tx-center">Already a member? <a href="{{ route('user.login.form') }}" class="tx-info">Sign In</a></div>
        </div><!-- login-wrapper -->
      </div><!-- col -->
      <div class="col-md-6 bg-br-primary d-flex align-items-center justify-content-center">
        <div class="wd-250 wd-xl-450 mg-y-30">
          <div class="signin-logo tx-28 tx-bold tx-white"><span class="tx-normal">[</span> bracket <span class="tx-white-8">plus</span> <span class="tx-normal">]</span></div>
          <div class="tx-white-6 mg-b-60">The Admin Template For Perfectionist</div>

          <h5 class="tx-white">Why bracket plus?</h5>
          <p class="tx-white-6">When it comes to websites or apps, one of the first impression you consider is the design. It needs to be high quality enough otherwise you will lose potential users due to bad design.</p>
          <p class="tx-white-6 mg-b-60">When your website or app is attractive to use, your users will not simply be using it, they’ll look forward to using it. This means that you should fashion the look and feel of your interface for your users.</p>
          <a href="" class="btn btn-outline-white pd-x-25 tx-uppercase tx-12 tx-spacing-2 tx-medium">Purchase Template</a>
        </div><!-- wd-500 -->
      </div>
    </div><!-- row -->

    <script src="{{ asset('admin/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <script src="{{ asset('admin/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/lib/select2/js/select2.min.js') }}"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>
