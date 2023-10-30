<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RAP - Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('frontend/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('frontend/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png')}}" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>
</head>

<body>
  <div class="container mt-5">
    <div class="row d-flex justify-content-center">    
        <div class="col-md-7 col-sm-4 d-none d-md-block">
          <div class="card mb-2">
            <img src="{{ asset('frontend/images/pastorchris.jpg') }}" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-md-5 col-sm-8">
          <div class="card shadow">
            <div class="card-body">
              {{-- <img src="{{ asset('frontend/images/logo-icon2.png') }}" alt=""> --}}
              <div class="text-center">
                <img src="{{ asset('frontend/images/logo-icon2.png') }}" alt="">
                <h5>Rehearsals Archival Portal</h5>
                <h5 class="create">Login</h5>
                <!-- <h3>school account</h3> -->
                <p class="small-text">Sign in to continue</p>
              </div>
              <div>
                <form action="{{ route('login') }}" method="post">
                  @csrf
                  <div class="mb-3">
                    <label for="" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="" placeholder="info@rap.com">
                      @error('email')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="" placeholder="password">
                      @error('password')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                  <div class="d-grid gap-2 mb-2">
                    <button class="btn btn-primary" type="submit">Login</button>
                  </div>
                  <div class="text-center" style="margin-bottom: -20px;">
                    <p>Click here to login as an<span> <a href="{{ route('admin.login') }}" class="link"> Admin</a></span></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      
    </div>
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('frontend/js/off-canvas.js')}}"></script>
  <script src="{{asset('frontend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('frontend/js/template.js')}}"></script>
  <script src="{{asset('frontend/js/settings.js')}}"></script>
  <script src="{{asset('frontend/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>
