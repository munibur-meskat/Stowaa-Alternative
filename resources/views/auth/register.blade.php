@extends('layouts.frontend')
@section('title','Register')
@section('frontendContent')
     <div class="row">
        <div class="col-lg-5 m-auto py-4">
            <div class="register_wrap tab-content">
                <div class="tab-pane fade show active" id="signin_tab" role="tabpanel">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form_item_wrap">
                            <h3 class="input_title">Name*</h3>
                            <div class="form_item">
                                <label for="name"><i class="fas fa-user"></i></label>
                                <input type="text" name="name" placeholder="Name">
                            </div>
                        </div>

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

                        <div class="form_item_wrap">
                            <h3 class="input_title">Confirm Password*</h3>
                            <div class="form_item">
                                <label for="password_confirmation"><i class="fas fa-lock"></i></label>
                                <input type="password" name="password_confirmation" placeholder="Password">
                            </div>
                        </div>

                        <div class="form_item_wrap">
                            <button type="submit" class="btn btn_primary">Sign In</button>
                        </div>
                    </form>
                </div>

                 
            </div>
        </div>
     </div>
@endsection
