<x-guest-layout>
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
                <x-jet-label for="phone" value="{{ __('Phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required />
            </div>

            <div class="mt-4 mb-4">
                <x-jet-label for="address1" value="{{ __('Address 1') }}" />
                <x-jet-input id="address1" class="block mt-1 w-full" type="text" name="address1" :value="old('address1')" required />
            </div>

            <div class="mt-4 mb-4">
                <x-jet-label for="address2" value="{{ __('Address 2') }}" />
                <x-jet-input id="address2" class="block mt-1 w-full" type="text" name="address2" :value="old('address2')" required />
            </div>

            <div class="mt-4 mb-4">
                <x-jet-label for="city" value="{{ __('City') }}" />
                <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
            </div>

            <div class="mt-4 mb-4">
                <x-jet-label for="state" value="{{ __('State') }}" />
                <x-jet-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" required />
            </div>

            <div class="mt-4 mb-4">
                <x-jet-label for="country" value="{{ __('Country') }}" />
                <x-jet-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required />
            </div>

            <label for="type_user" class="mt-3">
                You are?
              </label>
            <div class="form-check">
             <input class="form-check-input" type="radio" name="type_user" id="vendor" value="1">
              <label class="form-check-label" for="vendor">
                Vendor
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type_user" id="customer" value="0" checked>
              <label class="form-check-label" for="customer">
                Customer
              </label>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
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
