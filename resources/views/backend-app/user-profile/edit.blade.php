{{-- @foreach ($user_profiles as $key => $user_profile)
{{ $user_profiles[$key]['name'] }}
@endforeach --}}

@extends('layouts.dashboard')
@section('title','User-Profile')
@section('backendContent')

<div class="content container-fluid">
    <div class="card">
      {{-- {{ $users }} --}}
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                  @forelse ($users as $user)
                  <form action="{{ route('dashboard.user-profile.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-4">
                      <label class="col-sm-3 col-form-label form-label">Avatar</label>
                
                      <div class="col-sm-9">
                        <div class="d-flex align-items-center">
                          <!-- Avatar -->
                          <label class="avatar avatar-xl avatar-circle avatar-uploader me-5" for="avatarUploader">
                          @if (!empty($user->user_profiles->image))
                            <img class="avatar-img" src="{{ asset('storage/profile-upload/' .$user->user_profiles->image) }}" alt="done">
                          @else
                          <img id="avatarImg" class="avatar-img" src="{{ asset('assets/backend/img/160x160/img3.jpg') }}" alt="Image Description">
                          @endif
                            
                            <input type="file" name="image" class="js-file-attach avatar-uploader-input" id="avatarUploader" data-hs-file-attach-options="{
                                      &quot;textTarget&quot;: &quot;#avatarImg&quot;,
                                      &quot;mode&quot;: &quot;image&quot;,
                                      &quot;targetAttr&quot;: &quot;src&quot;,
                                      &quot;resetTarget&quot;: &quot;.js-file-attach-reset-img&quot;,
                                      &quot;resetImg&quot;: &quot;./assets/img/160x160/img1.jpg&quot;,
                                      &quot;allowTypes&quot;: [&quot;.png&quot;, &quot;.jpeg&quot;, &quot;.jpg&quot;]}">
                            <span class="avatar-uploader-trigger">
                              <i class="bi-pencil avatar-uploader-icon shadow-sm"></i>
                            </span>
                          </label>
                          <!-- End Avatar -->
                
                          <button type="button" class="js-file-attach-reset-img btn btn-white">Delete</button>
                        </div>
                      </div>
                    </div>
                    <!-- End Form -->
                
                    <!-- Form -->
                    <div class="row mb-4">
                      <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Full Name <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Displayed on public forums, such as Front."></i></label>
                
                      <div class="col-sm-9">
                        <div class="input-group input-group-sm-vertical">
                          <input type="text" name="name"  value="{{ $user->name }}"  class="form-control" name="firstName" id="firstNameLabel" placeholder="Clarice" aria-label="Clarice">
                        </div>
                      </div>
                    </div>
                    <!-- End Form -->
                
                    <!-- Form -->
                    <div class="row mb-4">
                      <label for="emailLabel" name="email" class="col-sm-3 col-form-label form-label">Email</label>
                
                      <div class="col-sm-9">
                        <input type="email" value="{{ $user->email }}" class="form-control" name="email" id="emailLabel" placeholder="clarice@site.com" aria-label="clarice@site.com">
                      </div>
                    </div>
                    <!-- End Form -->
                
                    <!-- Form -->
                    <div class="js-add-field row mb-4" data-hs-add-field-options="{
                            &quot;template&quot;: &quot;#addPhoneFieldTemplate&quot;,
                            &quot;container&quot;: &quot;#addPhoneFieldContainer&quot;,
                            &quot;defaultCreated&quot;: 0
                          }">
                      <label for="phoneLabel" class="col-sm-3 col-form-label form-label">Phone <span class="form-label-secondary">(Optional)</span></label>
                
                      <div class="col-sm-9">
                        <div class="input-group input-group-sm-vertical">
                          <input type="number" name="phone" value="{{ !empty($user->user_profiles->phone) ? $user->user_profiles->phone : '' }}" class="js-input-mask form-control" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options="{
                                   &quot;mask&quot;: &quot;+0(000)000-00-00&quot;
                                 }">
                 
                        </div>
                
                        <!-- Container For Input Field -->
                        <div id="addPhoneFieldContainer"></div>
                
                        <a class="js-create-field form-link" href="javascript:;">
                          <i class="bi-plus"></i> Add phone</a>
                      </div>
                    </div>
                    <!-- End Form -->
                    <div class="row mb-4">
                      <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Country<i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Displayed on public forums, such as Front."></i></label>
                
                      <div class="col-sm-9">
                        <div class="input-group input-group-sm-vertical">
                          <input type="text" name="country"  value="{{ !empty($user->user_profiles->country) ? $user->user_profiles->country : '' }}"  class="form-control" id="firstNameLabel" placeholder="Clarice" aria-label="Clarice">
                        </div>
                      </div>
                    </div>
                    
                
                    <div class="col-auto" style="margin-right: 30px">
                      <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                  </div>
                     
                    <!-- Form -->
                  </form>
                  @empty
                    
                  @endforelse
                   
                    <!-- End Form -->
                   
                </div>
            </div>
        </div>
    </div>
</div>
     
@endsection