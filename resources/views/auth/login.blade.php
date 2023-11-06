<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">

        </x-slot>
<style>
body
{
  font-family: Arial, Helvetica, sans-serif;
  background-color: skyblue;
}
.center
{
    margin-top:300px;
    margin:auto;
    width:40%;
    height:820px;
    text-align:center;
    padding-top:40px;
    padding: 16px;
    background-color: white;
}
.font_size
{
    font-size:40px;
}
label
{
    display:inline-block;
    width:200px;
}
hr 
{
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
input, input[type=password] {
  width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  margin-top:40px;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus 
{
  background-color: #ddd;
  outline: none;
}
button
{
    margin:auto;
}
.btn
{
    background-color: blue;
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

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
            
        <div class="center col-xs-3">
        <a><img src="admin/assets/images/logodesign.png" alt="logo" style="width:300px; height:200px;" /></a> 
        <h1 class="font_size">Login Page</h1>
                <hr>
                <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <b><x-label for="email" value="{{ __('Email') }}" /></b>
                    <x-input id="email" class="block mt-1 w-full" type="email" placeholder="Enter Email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="mt-4">
                <b><x-label for="password" value="{{ __('Password') }}" /></b>
                    <x-input id="password" class="block mt-1 w-full" type="password" placeholder="Enter Password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-button class="btn">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>
