<?php
//initilize the page
/*require_once(base_path('resources/views/inc/init.blade.php'));*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login :: {{config('admin.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ admin_asset("vendor/smartadmin-laravel/smartadmin/img/favicon/apple-touch-icon.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ admin_asset(config('admin.themes.favicon')) }}">

        <!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{admin_asset('vendor/smartadmin-laravel/smartadmin/endless/bootstrap.min.css')}}">

		<!-- Font Awesome -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{admin_asset('vendor/smartadmin-laravel/smartadmin/endless/font-awesome.min.css')}}">

        <!-- Endless -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{admin_asset('vendor/smartadmin-laravel/smartadmin/endless/endless.min.css')}}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{admin_asset('vendor/smartadmin-laravel/smartadmin/endless/asem_style.css')}}">

		<link rel="stylesheet" type="text/css" media="screen" href="{{admin_asset('vendor/smartadmin-laravel/smartadmin/endless/smartadmin-production.min.css')}}">

		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="{{admin_asset('vendor/smartadmin-laravel/smartadmin/endless/open-sans.css')}}">
		@if (isset($_SERVER['HTTP_HOST']) && ($_SERVER['HTTP_HOST'] == 'localhost' || strpos($_SERVER['HTTP_HOST'],'127.0') !== false || strpos($_SERVER['HTTP_HOST'],'10.102') !== false))
			<style type="text/css">
				html {
				  background: url({{admin_asset('vendor/smartadmin-laravel/smartadmin/endless/img/morning.jpg')}}) no-repeat center center fixed;
				  margin:0
				  -webkit-background-size: contain;
				  -moz-background-size: contain;
				  -o-background-size: contain;
				  background-size: cover;
				}
			</style>
		@else
			<style type="text/css">
				html {
				  margin:0
				  -webkit-background-size: contain;
				  -moz-background-size: contain;
				  -o-background-size: contain;
				  background-size: cover;
				}
				</style>
		@endif
  </head>

  <body>
	<div class="login-wrapper">
		<div class="text-center">
			<h2 class="fadeInUp animation-delay8" style="font-weight:bold">
				<span class="text-info">{{config('admin.name')}} <small class="txt-color-white"> {{config('admin.app_version')}}</small></span> <span style="color:#ccc; text-shadow:0 1px #fff">Login</span>
			</h2>
		</div>
		<div class="login-widget animation-delay1">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<div class="pull-left">
						<i class="fa fa-lock fa-lg"></i> Login
					</div>

					<div class="pull-right">
						<span style="font-size:11px;">Don't have any account?</span>
						<a class="btn btn-default btn-xs" href="#" style="margin-top:-2px;"><i class="fa fa-plus-circle"></i> Register</a>
					</div>
				</div>
                @if($errors->has('username'))
                    @foreach($errors->get('username') as $message)
                            <div class="my-box my-error-box">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Error! </strong>
                                    {{ $message }}
                            </div>
                    @endforeach
                @elseif ($errors->has('password'))
                    @foreach($errors->get('password') as $message)
                            <div class="my-box my-error-box">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Success! </strong>
                                    {{ $message }}
                            </div>
                    @endforeach
                @endif
				<div class="panel-body">
                                    <form method="POST" action="{{admin_url('auth/login')}}" id="login-form" class="smart-form client-form">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <fieldset>
						<section class="bounceIn animation-delay2">
								<label class="label">Username/NIP</label>
								<label class="input"> <i class="icon-append fa fa-user"></i>
									<input type="username" id="username" name="username" >
									<b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter username</b></label>
							</section>

							<section class="bounceIn animation-delay4">
								<label class="label">Password</label>
								<label class="input"> <i class="icon-append fa fa-lock"></i>
									<input type="password" name="password" >
									<b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>

							</section>
						<section class="bounceIn animation-delay6">
								<label class="checkbox">
									<input type="checkbox" name="remember" checked="">
									<i></i>Remember Me</label>
									<div class="note">
									<myba href="href=#">Forgot Password</myba>
								</div>
							</section>
						</fieldset>
						<hr/>
                        <button type="submit" class="btn btn-info btn-sm bounceIn animation-delay5 login-link pull-right"><i class="fa fa-sign-in"></i> Sign in </button>
					</form>
				</div>
			</div><!-- /panel -->
		</div><!-- /login-widget -->
		<div class="text-center">
		<img width="800" height="200" src="{{admin_asset('vendor/smartadmin-laravel/smartadmin/img/asem/asem-logo.png')}}" alt="{{config('admin.name')}}"></img>
		</div>
	</div><!-- /login-wrapper -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- JQuery & UI Scripts -->
    <script src="{{admin_asset('vendor/smartadmin-laravel/smartadmin/endless/jquery-2.2.4.min.js')}}"></script>

	<!-- BOOTSTRAP JS -->
	<script src="{{admin_asset('vendor/smartadmin-laravel/smartadmin/endless/bootstrap.min.js')}}"></script>

	<!-- JQUERY VALIDATE -->
	<script src="{{admin_asset('vendor/smartadmin-laravel/smartadmin/endless/jquery.validate.min.js')}}"></script>


	<!-- Endless -->
	{{--HTML::script('endless/endless.js')--}}

        <script type="text/javascript">
        $(document).ready(function(){

            //login focus on username
            $('#username').focus();

            $(function() {
				// Validation
				$("#login-form").validate({
					// Rules for form validation
					rules : {
						username : {
							required : true,
							//email : true
						},
						password : {
							required : true,
							minlength : 1,
							maxlength : 20
						}
					},

					// Messages for form validation
					messages : {
						email : {
							required : "Please enter username",
							//email : 'Please enter a VALID email address'
						},
						password : {
							required : "Please fill the password"
						}
					},

					// Do not change code below
					errorPlacement : function(error, element) {
						error.insertAfter(element.parent());
					}
				});
			});

        });
        </script>
  </body>

</html>
