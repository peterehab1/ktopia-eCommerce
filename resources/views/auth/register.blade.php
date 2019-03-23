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
  <h3 class="text-center">أنشاء حساب</h3>
  <br>
        <form class="login-form"  method="POST" action="{{ route('register') }}">

          {{ csrf_field() }}

          <input name="name" required class="login-form-input" value="{{ old('name') }}" type="name" placeholder=" الأسم " />
          <br><br>
          <input name="email" required class="login-form-input" value="{{ old('email') }}" type="email" placeholder=" البريد الألكتروني" />
          <br><br>
          <input name="password" required class="login-form-input" type="password" placeholder=" كلمة المرور" />
          <br><br>
          <input name="password_confirmation"  required class="login-form-input" type="password" placeholder="تأكيد كلمة المرور" />
          <br><br>
          <button style="height: 40px;" class="btn-block btn-primary">أنشاء الحساب</button>
        </form>
      

</div>

@endsection