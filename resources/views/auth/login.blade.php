@extends('layouts.frontend')
@section('title','Login')
@section('frontendContent')
<div class="row">
    <div class="col-lg-5 m-auto py-4">
        <div class="register_wrap tab-content">
            <div class="tab-pane fade show active" id="signin_tab" role="tabpanel">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form_item_wrap">
                        <h3 class="input_title">Email*</h3>
                        <div class="form_item">
                            <label for="email"><i class="fas fa-user"></i></label>
                            <input type="email" name="email" placeholder="email">
                        </div>
                    </div>

                    <div class="form_item_wrap">
                        <h3 class="input_title">Password*</h3>
                        <div class="form_item">
                            <label for="password"><i class="fas fa-lock"></i></label>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                     

                    <div class="form_item_wrap">
                        <button type="submit" class="btn btn_primary">Login</button>
                        @if (Route::has('password.request'))
                            <a class="btn btn_primary" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>

             
        </div>
    </div>
 </div>
@endsection