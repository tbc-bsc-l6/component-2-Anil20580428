<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Local Styles -->
	<link rel="stylesheet" href="{{ asset('adminlogin/css/style.css') }}">
  </head>
  <body class="img js-fullheight" style="background-image: url('{{ asset('adminlogin/images/bg.jpg') }}');">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Admin Login Panel</h2>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
		      	<form action="{{route('admin.login.submit')}}" class="signin-form" method="POST">
					@csrf

		      		<div class="form-group">
		      			<input name="email" type="email" class="form-control" placeholder="email" required>
						@error('email')
							<span class="text-danger">{{$message}}</span>
						@enderror
		      		</div>
	            <div class="form-group">
	              <input name="password" id="password-field" type="password" class="form-control" placeholder="Password" required>
				  @error('password')
							<span class="text-danger">{{$message}}</span>
						@enderror
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button class="btn btn-success" type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

    <!-- Local Scripts -->
	<script src="{{ asset('adminlogin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('adminlogin/js/popper.js') }}"></script>
    <script src="{{ asset('adminlogin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('adminlogin/js/main.js') }}"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>
