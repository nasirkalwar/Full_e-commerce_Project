<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            
        </x-slot>
<style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: skyblue;
}
    .div_deg{
        margin-top:300px;
        margin:auto;
        width:40%;
        text-align:center;
        padding-top:40px;
        padding: 16px;
      background-color: white;
    }
    .font_size{
        font-size:40px;
        padding-bottom:40px;
    }
    label{
        display:inline-block;
        width:200px;
    }
    .div_design{
            padding-bottom:30px;
    }
    hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
    .registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}
input, input[type=password] {
  width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
.registerbtn:hover {
  opacity: 1;
}
.btn
{
    background-color: red;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}
.btn:hover {
  opacity: 1;

}
</style>
        <x-validation-errors class="mb-4" />
            <div class="div_deg">
            <h1 class="font-size">Registration</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="div_design">
                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name" class="block mt-1 w-full" placeholder="Name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="div_design">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>
                    <div class="div_design">
                        <x-label for="phone" value="{{ __('phone') }}" />
                        <x-input id="phone" class="block mt-1 w-full" placeholder="Phone Number" type="number" name="phone" :value="old('phone')" required autocomplete="username" />
                    </div>
                    <div class="div_design">
                        <x-label for="address" value="{{ __('address') }}" />
                        <x-input id="address" class="block mt-1 w-full" placeholder="Address" type="text" name="address" :value="old('eaddress')" required autocomplete="username" />
                    </div>


                    <div class="div_design">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" placeholder="Password" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="div_design">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-input id="password_confirmation" class="block mt-1 w-full" placeholder="Confirm Password" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="div_design">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            <button class="btn" >{{ __('Already registered?') }}</button>
                        </a>

                        <x-button class="registerbtn" >
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>
            </div>
                                    
    </x-authentication-card>
</x-guest-layout>
