@extends('layouts.dashboard')
@section('title','Category - Edit')
@section('backendContent')
     <div class="content container-fluid">
      <div class="card">
        <div class="card-body">
          <div class="col-lg-6 m-auto">
            <div class="tab-pane fade p-4 show active" id="nav-result14" role="tabpanel" aria-labelledby="nav-resultTab14">
              <div class="w-md-100">
                <!-- Form -->
                <h2 class="text-center">Category Edit</h2>
                @forelse ($categories as $category)
                <form action="{{ route('dashboard.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Category Name*</label>
      
                      <input type="text" name="name" value="{{ $category->name }}" class="form-control form-control-light" placeholder="name">
                    </div>
  
                    <div class="mb-3">
                      <label for="title" class="form-label">Category title*</label>
      
                      <input type="text" name="title" value="{{ $category->title }}" class="form-control form-control-light" placeholder="title">
                    </div>
  
                    <div class="mb-3">
                      <label for="parent_id" class="form-label">Parent Category</label>
      
                      <select name="parent_id" class="form-select form-select-light">
                        <option>Choose a gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                      </select>
                    </div>
  
                    <div class="mb-3">
                      <label for="description">Category Description*</label>
                      <textarea name="description" class="form-control form-control-light" placeholder="description" rows="6">{{ $category->description }}</textarea>
                    </div>
  
                    
                    <div class="mb-3">
                      <label for="formControlLightEmail" class="form-label">Category Image*</label>
                      <input type="file" name="image" class="form-control form-control-light">

                      <div class="image_div mt-3">
                        @if (!empty($category->image))
                        <img src="{{ asset('storage/category/' .$category->image) }}" alt="" width="100">
                        @endif
                        
                      </div>
                    </div>
  
                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                     
                  </form>
                @empty
                    {{ "No funckig data found" }}
                @endforelse
                
            
              </div>
            </div>
          </div>
           
        </div>
      </div>
    
     </div>
@endsection



  