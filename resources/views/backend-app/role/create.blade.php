@extends('layouts.dashboard')
@section('title','Role-Create')
@section('backendContent')
<div class="content container-fluid">
    <div class="card mt-5">
        <div class="card-body">
            <div class="row">

                 
                <div class="col-lg-6">
                    <form action="{{ route('dashboard.role.permission') }}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <label for="permission" class="col-sm-3 col-form-label form-label">Enter Permission :-></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="permission" placeholder="enter permission" >
                        </div>
                    </div>

                    <div class="col-auto" style="margin-right: 30px">
                        <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                    </div>
                    </form>
                     
                </div>

               {{-- role and permission assign --}}

                <div class="col-lg-6">
                    
                    <form action="{{ route('dashboard.role.store') }}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <label for="role" class="col-sm-3 col-form-label form-label">Enter Role :-></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="role" placeholder="enter role" >
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="role" class="col-sm-3 col-form-label form-label">Enter Permissions :-></label>
                        @foreach ($permissions as $permission) 
                        <div class="form-check" style="margin-left: 10px">
                            <input class="form-check-input" type="checkbox" name="permission[]" value="{{ $permission->id }}">
                            <label class="form-check-label" for="usersDataCheck2">
                                {{ $permission->name }}
                            </label>
                        </div>
                        @endforeach
                    </div>

                    

                    <div class="col-auto" style="margin-right: 30px">
                        <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                    </div>
                    </form>
                     
                     
                </div>
            </div>
          </div>
    </div>
</div>


 
@endsection

