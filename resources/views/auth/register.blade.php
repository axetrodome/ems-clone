@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <h3>Register</h3>
            @if($errors->any())
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif
            <form class="col s12" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf
                <div class="input-field col s12">
                  <input id="name" type="text" name="name" class="validate {{ $errors->has('name') ? ' invalid' : '' }}" value="{{ old('name') }}">
                  <label for="name">{{ __('Name') }}</label>
                </div>

                <div class="input-field col s12">
                  <input id="email" type="email" name="email" class="validate {{ $errors->has('email') ? ' invalid' : '' }}"value="{{ old('email') }}">
                  <label for="email">{{ __('E-Mail Address') }}</label>
                  <span class="helper-text" data-success="right">Your email address</span>
                </div>

                <div class="input-field col s12">
                  <input id="password" type="password" name="password" class="validate {{ $errors->has('password') ? ' invalid' : '' }}" value="{{ old('password') }}">
                  <label for="password">{{ __('Password') }}</label>
                  <span class="helper-text" data-success="right">Your super secret password</span>
                </div>

                <div class="input-field col s12">
                  <input id="password-confirm" type="password" name="password_confirmation" class="validate {{ $errors->has('password_confirmation') ? ' invalid' : '' }}" value="{{ old('password_confirmation') }}">
                  <label for="password-confirm">{{ __('Confirm Password') }}</label>
                </div>

                <div class="right-align">
                  <button class="btn waves-effect waves-light" type="submit" name="action">Sign up
                    <i class="material-icons right">send</i>
                  </button>
                </div>
            </form>
    </div>
</div>
@endsection
