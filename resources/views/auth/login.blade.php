{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> 
--}}
<x-guest-layout>
<section id="content">
			<div class="content-wrap py-0">

				<div class="section dark p-0 m-0 h-100 position-absolute"></div>

				<div class="section bg-transparent min-vh-100 p-0 m-0 d-flex">
					<div class="vertical-middle">
						<div class="container py-5">

							<div class="text-center">
								<a href="index.html"><img src="{{ asset('images/logo-dark@2x.png')}}" alt="Canvas Logo" style="height: 100px;"></a>
							</div>
                            <x-jet-validation-errors class="mb-4" />
							<div class="card mx-auto rounded-0 border-0" style="max-width: 400px;">
								<div class="card-body" style="padding: 40px;">
									<form id="login-form" name="login-form" class="mb-0" action="{{route('login')}}" method="post">
                                        @csrf
                                        <h3>Login to your Account</h3>

										<div class="row">
											<div class="col-12 form-group">
												<label for="login-form-username">Username:</label>
												<input  id="login-form-username" class="form-control not-dark" type="email" name="email" :value="old('email')" required autofocus />
											</div>

											<div class="col-12 form-group">
												<label for="login-form-password">Password:</label>
												<input type="password" name="password" required autocomplete="current-password" id="password" class="form-control not-dark" />
											</div>

											<div class="col-12 form-group mb-0">
												<button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
												<a href="{{ route('password.request') }}" class="float-end">Forgot Password?</a>
											</div>
										</div>
									</form>

									<!-- <div class="line line-sm"></div>

									<div class="center">
										<h4 style="margin-bottom: 15px;">or Login with:</h4>
										<a href="#" class="button button-rounded si-facebook si-colored">Facebook</a>
										<span class="d-none d-md-inline-block">or</span>
										<a href="#" class="button button-rounded si-twitter si-colored">Twitter</a>
									</div> -->
								</div>
							</div>

							<div class="text-center text-muted mt-3"><small>Copyrights &copy; All Rights Reserved by Canvas Inc.</small></div>

						</div>
					</div>
				</div>

			</div>
		</section>
        </x-guest-layout>
