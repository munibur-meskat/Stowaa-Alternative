{{-- {{ $roles }} --}}
@extends('layouts.dashboard')
@section('title','RoleAssign - Edit')
@section('backendContent')

<div class="content container-fluid">
    <div class="card mt-5">
        <div class="card-body">
            <h2 class="text-center is-valid">Role Edit</h2>
            <div class="row">
                <div class="col-lg-6 m-auto">
                
                    @foreach ($users as $user)
                         {{-- @foreach ($user->roles as $role)
                             {{ $role->id }}
                         @endforeach --}}
                    
                    <form action="{{ route('dashboard.role-assign.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control is-valid" placeholder="name">
                        </div>
                    
                        <div class="mb-3">
                        <label for="role">Select Role for User</label>
                        <select class="form-select is-valid" name="role">
                            <option disabled>Choose an option</option>
                            @foreach ($roles as $role)
                            <option @foreach ($user->roles as $role_p)
                                {{ $role->id == $role_p->id ? 'selected' : '' }}
                            @endforeach>{{ $role->name }}</option>
                            @endforeach
                             
                        </select>
                         
                        </div>
                    
                        <div class="col-auto" style="margin-right: 30px">
                            <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

 
@endsection