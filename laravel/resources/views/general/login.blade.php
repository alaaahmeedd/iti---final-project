@extends ('layouts.guest')
@section('content')<div class="limiter">
		<div class="container-login100">
			
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(l1jpg.jpg);">
					<span class="login100-form-title-1">
						User Login
					</span>
				</div>
				<form class="login100-form validate-form" action="{{ route('login') }}" method="post">
				@csrf
				<div class="results">
				@if(Session::get('error'))
				<div class="alert alert-danger">
				{{Session::get('error')}}
				</div>
				@endif
				</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter username" value="{{old ('email')}}">
						<span class="text-danger">@error('email'){{$message}}@enderror </span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="text-danger">@error('password'){{$message}}@enderror </span>

					</div>


					<div class="container-login100-form-btn" style="margin-top:20px">
						<button class="login100-form-btn" type="submit" >
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection