@extends('layouts.dashboard')
@section('title','Role - Assign')
@section('backendContent')
    <div class="content container-fluid">

      <div class="row">
        <div class="col-lg-12">
            <div class="action_bar d-flex">
                <div class="col-auto" style="margin-right: 30px">
                    <a class="btn btn-primary btn-sm" href="{{ route('dashboard.role-assign.create') }}" title="create role">
                      Create 
                      <i class="bi-box-arrow-up-right ms-1"></i>
                    </a>
                </div>

                <div class="col-auto" style="margin-right: 30px">
                    <a class="btn btn-primary btn-sm" href="#" title="archieve">
                      Archieve 
                      <i class="bi-box-arrow-up-right ms-1"></i>
                    </a>
                </div>

                <div class="col-auto" style="margin-right: 30px">
                    <a class="btn btn-primary btn-sm" href="{{ route('dashboard.role-assign.index') }}" title="refresh">
                      Refresh 
                      <i class="bi-box-arrow-up-right ms-1"></i>
                    </a>
                </div>
            </div>
             
        </div>
    </div>

 
  <div class="card mt-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive datatable-custom">
                            <table class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                                   data-hs-datatables-options='{
                                           "order": []
                                         }'>
                              <thead class="thead-light">
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th> 
                                <th>Action</th>
                              </tr>
                              </thead>
                              @can(['show']) 
                              <tbody>
                                @forelse ($users as $user)
                                <tr>
                                  <td>
                                    {{ $user->id }}
                                   </a>
                                 </td>
                                  <td>
                                    <span class="d-block h5 mb-0">{{ $user->name }}</span>
                                     
                                  </td>
                                  <td>{{ $user->email }}</td>
                                  @foreach ($user->roles as $role)
                                  <td>
                                      {{ $role->name }}
                                  </td>
                                  @endforeach
                                  
                                  <td>
                                    <a href="{{ route('dashboard.role-assign.edit' ,$user->id) }}" class="btn btn-primary">Edit</a>
                                  </td>
                                </tr>
                                @empty
                                  
                                @endforelse
                               
                          
                              </tbody>
                              @endcan
                            </table>
                          </div>
                  </div>
                  </div>
                 </div>
        </div>
@endsection