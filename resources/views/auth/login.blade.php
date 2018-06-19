@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>Login</h3>
        @if($errors->any())
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
        @endif
        <form class="col s12" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
         <div class="row">
           <div class="input-field col s12">
             <input id="email" type="email" name="email" class="validate {{ $errors->has('email') ? ' invalid' : '' }}" value="{{ old('email') }}">
             <label for="email">{{ __('E-Mail Address') }}</label>
             <span class="helper-text" data-success="right">Enter your email address</span>
           </div>

           <div class="input-field col s12">
             <input id="password" type="password" name="password" class="validate {{ $errors->has('password') ? ' invalid' : '' }}" value="{{ old('password') }}">
             <label for="password">{{ __('Password') }}</label>
             <span class="helper-text" data-success="right">Your super secret password</span>
           </div>
           <div class="input-field col s12">
               <label>
                   <input type="checkbox" name="remember">
                   <span>Remember me</span>
               </label>
           </div>
         </div>
         <div class="right-align">
           <button class="btn waves-effect waves-light" type="submit" name="action">Sign
             <i class="material-icons right">send</i>
           </button>
         </div>
       </form>
     </div>
</div>
@endsection
