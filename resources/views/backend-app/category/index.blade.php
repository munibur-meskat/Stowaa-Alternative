
{{-- {{ $category }} --}}

@extends('layouts.dashboard')
@section('title','Category')
@section('backendContent')
     <div class="content container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="action_bar d-flex">
                    <div class="col-auto" style="margin-right: 30px">
                        <a class="btn btn-primary btn-sm" href="{{ route('dashboard.category.create') }}" title="create role">
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
                        <a class="btn btn-primary btn-sm" href="{{ route('dashboard.category.index') }}" title="refresh">
                          Refresh 
                          <i class="bi-box-arrow-up-right ms-1"></i>
                        </a>
                    </div>
                </div>
                 
            </div>
        </div>

        <div class="card mb-3 mb-lg-5 mt-5">
            <!-- Header -->
            <div class="card-header">
              <div class="row justify-content-between align-items-center flex-grow-1">
                <div class="col-md">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-header-title">Category</h4>
    
                    <!-- Datatable Info -->
                    <div id="datatableCounterInfo" style="display: none;">
                      <div class="d-flex align-items-center">
                        <span class="fs-6 me-3">
                          <span id="datatableCounter">0</span>
                          Selected
                        </span>
                        <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                          <i class="tio-delete-outlined"></i> Delete
                        </a>
                      </div>
                    </div>
                    <!-- End Datatable Info -->
                  </div>
                </div>
                <!-- End Col -->
    
                <div class="col-auto">
                  <!-- Filter -->
                  <div class="row align-items-sm-center">
                    <div class="col-sm-auto">
                      <div class="row align-items-center gx-0">
                        <div class="col">
                          <span class="text-secondary me-2">Status:</span>
                        </div>
                        <!-- End Col -->
    
                        <div class="col-auto">
                          <!-- Select -->
                          <div class="tom-select-custom tom-select-custom-end">
                            <select class="js-select js-datatable-filter form-select form-select-sm form-select-borderless tomselected ts-hidden-accessible" data-target-column-index="2" data-target-table="datatable" autocomplete="off" data-hs-tom-select-options="{
                                      &quot;searchInDropdown&quot;: false,
                                      &quot;hideSearch&quot;: true,
                                      &quot;dropdownWidth&quot;: &quot;10rem&quot;
                                    }" id="tomselect-1" tabindex="-1">
                              
                              <option value="successful">Successful</option>
                              <option value="overdue">Overdue</option>
                              <option value="pending">Pending</option>
                            <option value="null" selected="">All</option></select><div class="ts-wrapper js-select js-datatable-filter form-select form-select-sm form-select-borderless single plugin-change_listener plugin-hs_smart_position input-hidden full has-items"><div class="ts-control"><div data-value="null" class="item" data-ts-item="">All</div></div><div class="tom-select-custom"><div class="ts-dropdown single plugin-change_listener plugin-hs_smart_position" style="display: none; visibility: visible; opacity: 1; width: 10rem;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-1-ts-dropdown"><div data-selectable="" data-value="null" class="option selected active" role="option" id="tomselect-1-opt-1" aria-selected="true">All</div><div data-selectable="" data-value="successful" class="option" role="option" id="tomselect-1-opt-2">Successful</div><div data-selectable="" data-value="overdue" class="option" role="option" id="tomselect-1-opt-3">Overdue</div><div data-selectable="" data-value="pending" class="option" role="option" id="tomselect-1-opt-4">Pending</div></div></div></div></div>
                          </div>
                          <!-- End Select -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                    <!-- End Col -->
    
                    <div class="col-sm-auto">
                      <div class="row align-items-center gx-0">
                        <div class="col">
                          <span class="text-secondary me-2">Signed up:</span>
                        </div>
                        <!-- End Col -->
    
                        <div class="col-auto">
                          <!-- Select -->
                          <div class="tom-select-custom tom-select-custom-end">
                            <select class="js-select js-datatable-filter form-select form-select-sm form-select-borderless tomselected ts-hidden-accessible" data-target-column-index="5" data-target-table="datatable" autocomplete="off" data-hs-tom-select-options="{
                                      &quot;searchInDropdown&quot;: false,
                                      &quot;hideSearch&quot;: true,
                                      &quot;dropdownWidth&quot;: &quot;10rem&quot;
                                    }" id="tomselect-2" tabindex="-1">
                              
                              <option value="1 year ago">1 year ago</option>
                              <option value="6 months ago">6 months ago</option>
                            <option value="null" selected="">All</option></select><div class="ts-wrapper js-select js-datatable-filter form-select form-select-sm form-select-borderless single plugin-change_listener plugin-hs_smart_position input-hidden full has-items"><div class="ts-control"><div data-value="null" class="item" data-ts-item="">All</div></div><div class="tom-select-custom"><div class="ts-dropdown single plugin-change_listener plugin-hs_smart_position" style="display: none;"><div role="listbox" tabindex="-1" class="ts-dropdown-content" id="tomselect-2-ts-dropdown"></div></div></div></div>
                          </div>
                          <!-- End Select -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                    <!-- End Col -->
    
                    <div class="col-md">
                      <form>
                        <!-- Search -->
                        <div class="input-group input-group-merge input-group-flush">
                          <div class="input-group-prepend input-group-text">
                            <i class="bi-search"></i>
                          </div>
                          <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
                        </div>
                        <!-- End Search -->
                      </form>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Filter -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Header -->
    
            <!-- Table -->
            <div class="table-responsive datatable-custom">
              <div id="datatable_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="datatable"></label></div><table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table dataTable no-footer" data-hs-datatables-options="{
                       &quot;columnDefs&quot;: [{
                          &quot;targets&quot;: [0, 1, 4],
                          &quot;orderable&quot;: false
                        }],
                       &quot;order&quot;: [],
                       &quot;info&quot;: {
                         &quot;totalQty&quot;: &quot;#datatableWithPaginationInfoTotalQty&quot;
                       },
                       &quot;search&quot;: &quot;#datatableSearch&quot;,
                       &quot;entries&quot;: &quot;#datatableEntries&quot;,
                       &quot;pageLength&quot;: 8,
                       &quot;isResponsive&quot;: false,
                       &quot;isShowPaging&quot;: false,
                       &quot;pagination&quot;: &quot;datatablePagination&quot;
                     }" role="grid" aria-describedby="datatable_info">
                <thead class="thead-light">
                  <tr role="row"><th scope="col" class="table-column-pe-0 sorting_disabled" rowspan="1" colspan="1" aria-label="
                      
                    " style="width: 37.1px;">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                        <label class="form-check-label" for="datatableCheckAll"></label>
                      </div>
                    </th>
                    
                    <th class="table-column-ps-0 sorting_disabled" rowspan="1" colspan="1" aria-label="Full name" style="width: 239.125px;">Category Image</th>
                    
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 124.562px;">Name</th>
                    
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" style="width: 160.488px;">Title</th>
                    
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Signed up: activate to sort column ascending" style="width: 129.663px;">Description</th>
                    
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="User ID: activate to sort column ascending" style="width: 96.7px;">Actions</th></tr>
                </thead>
    
            <tbody>
                  
              
              @forelse ($categories as $category)
              <tr role="row" class="odd">
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="usersDataCheck2">
                    <label class="form-check-label" for="usersDataCheck2"></label>
                  </div>
                </td>

                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="user-profile.html">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-circle">
                         @if (empty($category->image))
                         <img id="avatarImg" class="avatar-img" src="{{ asset('assets/backend/img/160x160/img1.jpg') }}" alt="Image Description">
                         @else
                         <img class="avatar-img" src="{{ asset('storage/category/'.$category->image) }}" alt="{{ asset('assets/backend/img/160x160/img10.jpg') }}">  
                         @endif
                      </div>
                    </div>
                     
                  </a>
                </td>
                
               
                <td>{{ $category->name }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ Str::limit($category->description, 20, '...') }}</td>
                <td>
                  <a href="{{ route('dashboard.category.edit',$category->id) }}" class="btn btn-primary">Edit</a>
                  <form action="{{ route('dashboard.category.delete',$category->id) }}" method="POST" style="display: inline-block">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger delete_btn" type="button">Delete</button>
                  </form>
                </td>
            </tr>
             
              @empty
                
              @endforelse
                 
                  
                </tbody>
              </table>
              
            </div>
            </div>
            <!-- End Table -->
    
            <!-- Footer -->
            <div class="card-footer">
              <!-- Pagination -->
              <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
   
                <div class="col-sm-auto">
                  <div class="d-flex justify-content-center justify-content-sm-end">
                    <!-- Pagination -->
                    <nav id="datatablePagination" aria-label="Activity pagination"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul id="datatable_pagination" class="pagination datatable-custom-pagination"><li class="paginate_item page-item disabled"><a class="paginate_button previous page-link" aria-controls="datatable" data-dt-idx="0" tabindex="0" id="datatable_previous"><span aria-hidden="true">Prev</span></a></li><li class="paginate_item page-item active"><a class="paginate_button page-link" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_item page-item"><a class="paginate_button page-link" aria-controls="datatable" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_item page-item"><a class="paginate_button page-link" aria-controls="datatable" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_item page-item"><a class="paginate_button next page-link" aria-controls="datatable" data-dt-idx="4" tabindex="0" id="datatable_next"><span aria-hidden="true">Next</span></a></li></ul></div></nav>
                  </div>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Pagination -->
            </div>
            <!-- End Footer -->
          </div>
         
         
        
     </div>
@endsection

@section('delete-js')
    <script>
      $('.delete_btn').on('click',function(){
        Swal.fire({
        title: 'Are you sure?',
        text: "Do You want to delete this ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            //  $('#delete_form').submit();
            // $(this).parents('form:first').submit();
            $(this).parent('form').submit();
        }
        })
      })
        
    </script>
@endsection