@extends('Store/base')
@section('title', 'Login')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
  <h3 class="text-center">تسجيل الدخول</h3>
  <br>
        <form class="login-form"  method="POST" action="{{ route('login') }}">

          {{ csrf_field() }}

          <input name="email" value="{{ old('email') }}" required class="login-form-input" type="email" placeholder=" البريد الألكتروني" />
          <br><br>
          <input name="password" required class="login-form-input" type="password" placeholder=" كلمة المرور" />
          <br><br>
          <input  name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }} /><b> تذكر كلمة المرور </b><br>
          <a class="" href="{{ route('password.request') }}"> نسيت كلمة المرور ؟</a>
          <br><br>
          <button style="height: 40px;" class="btn-block btn-primary">تسجيل الدخول</button>
          
        </form>
        
</div>

@endsection