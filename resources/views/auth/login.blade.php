<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>INSTAVISAS</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('vendor/adminlte/dist/img/instavisas.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('vendor/adminlte/dist/img/instavisas.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('vendor/adminlte/dist/img/instavisas.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('vendores/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendores/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendores/styles/style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="login-page">
    {{-- <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="{{asset('vendores/images/logo.png')}}" alt="" width="250"></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Cargando...
			</div>
		</div>
	</div> --}}
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="{{ route('login') }}">
					<img src="{{asset('vendor/adminlte/dist/img/instavisas.png')}}" width="50" alt="">
				</a>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendores/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Iniciar Sesión</h2>
						</div>
						<form method="POST" action="{{ route('login') }}">
                            @csrf
                
                            <div>
                                <x-jet-label for="email" value="{{ __('Correo Electronico') }}" />
                                <x-jet-input id="email" class="block form-control mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>
                
                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                                <x-jet-input id="password" class="block form-control mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            </div>
                
                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                                </label>
                            </div>
                
                            <div class="flex items-centermt-4">
                                {{-- @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif --}}
                
                                <x-jet-button class="btn bg-primary btn-block">
                                    {{ __('Iniciar sesión') }}
                                </x-jet-button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{asset('vendores/scripts/core.js')}}"></script>
	<script src="{{asset('vendores/scripts/script.min.js')}}"></script>
	<script src="{{asset('vendores/scripts/process.js')}}"></script>
	<script src="{{asset('vendores/scripts/layout-settings.js')}}"></script>
</body>
</html>