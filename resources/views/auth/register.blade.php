{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation"  type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
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

                            <div class="card mx-auto rounded-0 border-0" style="max-width: 400px;">
								<div class="card-body" style="padding: 40px;">
                                    <x-jet-validation-errors class="mb-4" />
                                        <form id="register-form" name="register-form" class="row mb-0" action="#" method="post">
                                            @csrf                           
                                            <div class="col-12 form-group">
                                                <label for="register-form-name">Name:</label>
                                                <input type="text" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control">
                                            </div>

                                            <div class="col-12 form-group">
                                                <label for="register-form-email">Email Address:</label>
                                                <input type="text" id="email" type="email" name="email" :value="old('email')" required class="form-control">
                                            </div>

                                            

                                            
                                            <div class="col-12 form-group">
                                                <label for="register-form-password">Choose Password:</label>
                                                <input type="password" id="password" type="password" name="password" required autocomplete="new-password" class="form-control">
                                            </div>

                                            <div class="col-12 form-group">
                                                <label for="register-form-repassword">Re-enter Password:</label>
                                                <input type="password" id="password_confirmation"  type="password" name="password_confirmation" required autocomplete="new-password" class="form-control">
                                            </div>@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                    <div class="mt-4">
                                                        <x-jet-label for="terms">
                                                            <div class="flex items-center">
                                                                <x-jet-checkbox name="terms" id="terms"/>

                                                                <div class="ml-2">
                                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                                    ]) !!}
                                                                </div>
                                                            </div>
                                                        </x-jet-label>
                                                    </div>
                                                @endif

                                                <div class="flex items-center justify-end mt-4">
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                        {{ __('Already registered?') }}
                                                    </a>

                                                    
                                                </div>



                                            <div class="col-12 form-group">
                                                <button class="button button-3d button-black m-0" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
                                
</x-guest-layout>