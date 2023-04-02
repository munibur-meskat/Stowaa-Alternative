<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>{{ config('app.name') }} - @yield('title') </title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('assets/backend/css/vendor.min.css') }}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('assets/backend/css/theme.minc619.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/css/theme-dark.min.css') }}" data-hs-appearance="dark" as="style">
  <link rel="stylesheet" href="{{ asset('assets/backend/css/theme.min.css') }}" data-hs-appearance="default" as="style">
  <link rel="stylesheet" href="{{ asset('assets/backend/css/toasts.css') }}">
  {{-- sweet alert css cdn --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.css" integrity="sha512-JzSVRb7c802/njMbV97pjo1wuJAE/6v9CvthGTDxiaZij/TFpPQmQPTcdXyUVucsvLtJBT6YwRb5LhVxX3pQHQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
</head>



<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl footer-offset">
  
  <script src="{{ asset('assets/backend/js/hs.theme-appearance.js') }}"></script>

  <script src="{{ asset('assets/backend/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js') }}"></script>
 

  <!-- ========== HEADER ========== -->

  <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
    @yield('message')  
    <div class="navbar-nav-wrap">
      <!-- Logo -->
      <a class="navbar-brand" href="#" aria-label="Front">
         
        <img class="navbar-brand-logo" src="{{ asset('assets/backend/svg/logos/logo.svg') }}" alt="logo" data-hs-theme-appearance="default">
        <img class="navbar-brand-logo" src="{{ asset('assets/backend/svg/logos-light/logo.svg') }}" alt="Logo" data-hs-theme-appearance="dark">
        <img class="navbar-brand-logo-mini" src="{{ asset('assets/backend/svg/logos/logo-short.svg') }}" alt="Logo" data-hs-theme-appearance="default">
        <img class="navbar-brand-logo-mini" src="{{ asset('assets/backend/svg/logos-light/logo-short.svg') }}}" alt="Logo" data-hs-theme-appearance="dark">
      </a>
      <!-- End Logo -->

      <div class="navbar-nav-wrap-content-start">
        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
          <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
        </button>

        <!-- End Navbar Vertical Toggle -->

        <!-- Search Form -->
        <div class="dropdown ms-2">
          <!-- Input Group -->
          <div class="d-none d-lg-block">
            <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
              <div class="input-group-prepend input-group-text">
                <i class="bi-search"></i>
              </div>

              <input type="search" class="js-form-search form-control" placeholder="Search in front" aria-label="Search in front" data-hs-form-search-options='{
                       "clearIcon": "#clearSearchResultsIcon",
                       "dropMenuElement": "#searchDropdownMenu",
                       "dropMenuOffset": 20,
                       "toggleIconOnFocus": true,
                       "activeClass": "focus"
                     }'>
              <a class="input-group-append input-group-text" href="javascript:;">
                <i id="clearSearchResultsIcon" class="bi-x-lg" style="display: none;"></i>
              </a>
            </div>
          </div>

          <button class="js-form-search js-form-search-mobile-toggle btn btn-ghost-secondary btn-icon rounded-circle d-lg-none" type="button" data-hs-form-search-options='{
                       "clearIcon": "#clearSearchResultsIcon",
                       "dropMenuElement": "#searchDropdownMenu",
                       "dropMenuOffset": 20,
                       "toggleIconOnFocus": true,
                       "activeClass": "focus"
                     }'>
            <i class="bi-search"></i>
          </button>
          <!-- End Input Group -->

          <!-- Card Search Content -->
          <div id="searchDropdownMenu" class="hs-form-search-menu-content dropdown-menu dropdown-menu-form-search navbar-dropdown-menu-borderless">
            <div class="card">
              <!-- Body -->
              <div class="card-body-height">
                <div class="d-lg-none">
                  <div class="input-group input-group-merge navbar-input-group mb-5">
                    <div class="input-group-prepend input-group-text">
                      <i class="bi-search"></i>
                    </div>

                    <input type="search" class="form-control" placeholder="Search in front" aria-label="Search in front">
                    <a class="input-group-append input-group-text" href="javascript:;">
                      <i class="bi-x-lg"></i>
                    </a>
                  </div>
                </div>

                <span class="dropdown-header">Recent searches</span>

                <div class="dropdown-item bg-transparent text-wrap">
                  <a class="btn btn-soft-dark btn-xs rounded-pill" href="index-2.html">
                    Gulp <i class="bi-search ms-1"></i>
                  </a>
                  <a class="btn btn-soft-dark btn-xs rounded-pill" href="index-2.html">
                    Notification panel <i class="bi-search ms-1"></i>
                  </a>
                </div>

                <div class="dropdown-divider"></div>

                <span class="dropdown-header">Tutorials</span>

                <a class="dropdown-item" href="index-2.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <span class="icon icon-soft-dark icon-xs icon-circle">
                        <i class="bi-sliders"></i>
                      </span>
                    </div>

                    <div class="flex-grow-1 text-truncate ms-2">
                      <span>How to set up Gulp?</span>
                    </div>
                  </div>
                </a>

                <a class="dropdown-item" href="index-2.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <span class="icon icon-soft-dark icon-xs icon-circle">
                        <i class="bi-paint-bucket"></i>
                      </span>
                    </div>

                    <div class="flex-grow-1 text-truncate ms-2">
                      <span>How to change theme color?</span>
                    </div>
                  </div>
                </a>

                <div class="dropdown-divider"></div>

                <span class="dropdown-header">Members</span>

                <a class="dropdown-item" href="index-2.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xs avatar-circle" src="assets/img/160x160/img10.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 text-truncate ms-2">
                      <span>Amanda Harvey<i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                    </div>
                  </div>
                </a>

                <a class="dropdown-item" href="index-2.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xs avatar-circle" src="assets/img/160x160/img3.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 text-truncate ms-2">
                      <span>David Harrison</span>
                    </div>
                  </div>
                </a>

              </div>
              <!-- End Body -->

              <!-- Footer -->
              <a class="card-footer text-center" href="index-2.html">
                See all results <i class="bi-chevron-right small"></i>
              </a>
              <!-- End Footer -->
            </div>
          </div>
          <!-- End Card Search Content -->

        </div>

        <!-- End Search Form -->
      </div>

      <div class="navbar-nav-wrap-content-end">
        <!-- Navbar -->
        <ul class="navbar-nav">
          <li class="nav-item d-none d-sm-inline-block">
            <!-- Notification -->
            <div class="dropdown">
              <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                <i class="bi-bell"></i>
                <span class="btn-status btn-sm-status btn-status-danger"></span>
              </button>

              <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdown" style="width: 25rem;">
                <div class="card">
                  <!-- Header -->
                  <div class="card-header card-header-content-between">
                    <h4 class="card-title mb-0">Notifications</h4>
 
                  </div>
                  <a class="card-footer text-center" href="#">
                    View all notifications <i class="bi-chevron-right"></i>
                  </a>
                  <!-- End Card Footer -->
                </div>
              </div>
            </div>
            <!-- End Notification -->
          </li>

          <li class="nav-item d-none d-sm-inline-block">
            <!-- Apps -->
            <div class="dropdown">
              <button type="button" class="btn btn-icon btn-ghost-secondary rounded-circle" id="navbarAppsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                <i class="bi-app-indicator"></i>
              </button>

                <div class="card">
             
                </div>
              </div>
            </div>
            <!-- End Apps -->
          </li>

          <li class="nav-item d-none d-sm-inline-block">
            <!-- Activity -->
            <button class="btn btn-ghost-secondary btn-icon rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasActivityStream" aria-controls="offcanvasActivityStream">
              <i class="bi-x-diamond"></i>
            </button>
            <!-- Activity -->
          </li>

          <li class="nav-item">
            <!-- Account -->
            <div class="dropdown">
              <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                <div class="avatar avatar-sm avatar-circle">
                  
                  @foreach ($user_profiles as $key => $user_profile)
                  @if ($user_profiles[$key]['user_id'] == auth()->user()->id)
                  <img class="avatar-img" src="{{ asset('storage/profile-upload/'.$user_profile->image) }}" alt="">
                  @endif
                  @endforeach
                   
                  <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                </div>
              </a>

              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                <div class="dropdown-item-text">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-sm avatar-circle">
                       
                      @foreach ($user_profiles as $key => $user_profile)
                      @if ($user_profiles[$key]['user_id'] == auth()->user()->id)
                      <img class="avatar-img" src="{{ asset('storage/profile-upload/'.$user_profile->image) }}" alt="">
                      @endif
                      @endforeach
                      
                       
                    </div>

                    @foreach ($activeUsers as $activeUser)
                    @if ($activeUser->id == auth()->user()->id)
                    <div class="flex-grow-1 ms-3">
                      <h5 class="mb-0">{{ $activeUser->name }}</h5>
                      <p class="card-text text-body">{{ $activeUser->email }}</p>
                    </div>
                    @endif
                     
                    @endforeach
                  </div>
                </div>

                <div class="dropdown-divider"></div>

                <!-- Dropdown -->
                <div class="dropdown">
                  <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown1" data-bs-toggle="dropdown" aria-expanded="false">Set status</a>

                  <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown1">
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-success me-1"></span> Available
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-danger me-1"></span> Busy
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-warning me-1"></span> Away
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"> Reset status
                    </a>
                  </div>
                </div>
                <!-- End Dropdown -->

                <a class="dropdown-item" href="#">Profile &amp; account</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="{{ route('dashboard.user-profile.edit' , auth()->user()->id) }}">Profile Edit</a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-dark avatar-circle">
                        <span class="avatar-initials">HS</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-2">
                      <h5 class="mb-0">Htmlstream<span class="badge bg-primary rounded-pill text-uppercase ms-1">PRO</span></h5>
                      <span class="card-text">hs.example.com</span>
                    </div>
                  </div>
                </a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                </form>
              </div>
            </div>
            <!-- End Account -->
          </li>
        </ul>
        <!-- End Navbar -->
      </div>
    </div>
  </header>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->

  <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
    <div class="navbar-vertical-container">
      <div class="navbar-vertical-footer-offset">
        <!-- Logo -->

        <a class="navbar-brand" href="index-2.html" aria-label="Front">
          <img class="navbar-brand-logo" src="{{ asset('assets/backend/svg/logos/logo.svg') }}" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo" src="{{ asset('assets/backend/svg/logos-light/logo.svg') }}" alt="Logo" data-hs-theme-appearance="dark">
        </a>

        <!-- End Logo -->

        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
          <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
        </button>

        <!-- End Navbar Vertical Toggle -->

        <!-- Content -->
        <div class="navbar-vertical-content">
          <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
            <!-- Collapse -->
            <div class="nav-item">
              <a class="nav-link dropdown-toggle active" href="#navbarVerticalMenuDashboards" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuDashboards" aria-expanded="true" aria-controls="navbarVerticalMenuDashboards">
                <i class="bi-house-door nav-icon"></i>
                <span class="nav-link-title">Dashboards</span>
              </a>

              <div id="navbarVerticalMenuDashboards" class="nav-collapse collapse show" data-bs-parent="#navbarVerticalMenu">
                <a class="nav-link active" href="{{ route('dashboard.index') }}">Default</a>
              </div>
            </div>
            <!-- End Collapse -->
             
            <span class="dropdown-header mt-4">Managment</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>
            <div id="navbarVerticalMenuPagesMenu">
              <!-- Collapse -->

              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesUsersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesUsersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesUsersMenu">
                  <i class="bi-people nav-icon"></i>
                  <span class="nav-link-title">User Managment</span>
                </a>

                <div id="navbarVerticalMenuPagesUsersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="{{ route('dashboard.role.index') }}">All Role</a>
              
                </div>

                <div id="navbarVerticalMenuPagesUsersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="{{ route('dashboard.role.create') }}">Role Create</a>
              
                </div>
                 

                <div id="navbarVerticalMenuPagesUsersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="{{ route('dashboard.role-assign.index') }}">Role Assign</a>
              
                </div>
              </div>
              <!--category -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#navbarVerticalCategoryPage" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCategoryPage" aria-expanded="false" aria-controls="navbarVerticalCategoryPage">
                  <i class="bi-people nav-icon"></i>
                  <span class="nav-link-title">Category Management</span>
                </a>

                <div id="navbarVerticalCategoryPage" class="nav-collapse collapse " data-bs-parent="#navbarVerticalCategoryPage">
                  <a class="nav-link " href="{{ route('dashboard.category.index') }}">Category</a>
              
                </div>

                <div id="navbarVerticalCategoryPage" class="nav-collapse collapse " data-bs-parent="#navbarVerticalCategoryPage">
                  <a class="nav-link " href="{{ route('dashboard.category.create') }}">Create Category</a>
              
                </div>
                <div id="navbarVerticalCategoryPage" class="nav-collapse collapse " data-bs-parent="#navbarVerticalCategoryPage">
                  <a class="nav-link " href="{{ route('dashboard.category.index') }}">Archieve</a>
              
                </div>
 
              </div>
               <!-- category -->

              <a class="nav-link " href="apps-kanban.html" data-placement="left">
                <i class="bi-kanban nav-icon"></i>
                <span class="nav-link-title">Kanban</span>
              </a>
            </div>
            
          </div>

        </div>
        <!--category -->

        <!-- Footer -->
        <div class="navbar-vertical-footer">
          <ul class="navbar-vertical-footer-list">
            <li class="navbar-vertical-footer-list-item">
              <!-- Style Switcher -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                </button>
              </div>
            </li>

            <li class="navbar-vertical-footer-list-item">
              <!-- Other Links -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                  <i class="bi-info-circle"></i>
                </button>
              </div>
              <!-- End Other Links -->
            </li>

            <li class="navbar-vertical-footer-list-item">
              <!-- Language -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                  <img class="avatar avatar-xss avatar-circle" src="assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States Flag">
                </button>
 
              </div>

              <!-- End Language -->
            </li>
          </ul>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </aside>

  <!-- End Navbar Vertical -->

  <main id="content" role="main" class="main">
    <!-- Content -->
    
    @yield('backendContent')
 

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="fs-6 mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2022 Htmlstream.</span></p>
        </div>
        <!-- End Col -->

        <div class="col-auto">
          <div class="d-flex justify-content-end">
            <!-- List Separator -->
            <ul class="list-inline list-separator">
              <li class="list-inline-item">
                <a class="list-separator-link" href="#">FAQ</a>
              </li>

              <li class="list-inline-item">
                <a class="list-separator-link" href="#">License</a>
              </li>

              <li class="list-inline-item">
                <!-- Keyboard Shortcuts Toggle -->
                <button class="btn btn-ghost-secondary btn btn-icon btn-ghost-secondary rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasKeyboardShortcuts" aria-controls="offcanvasKeyboardShortcuts">
                  <i class="bi-command"></i>
                </button>
                <!-- End Keyboard Shortcuts Toggle -->
              </li>
            </ul>
            <!-- End List Separator -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>


    @include('flash-message.message')
    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

 
  <script src="{{ asset('assets/backend/js/demo.js') }}"></script>
  <script src="{{ asset('assets/backend/js/vendor.min.js') }}"></script>
  <script src="{{ asset('assets/backend/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js') }}"></script>
  <!-- JS Front -->
  <script src="{{ asset('assets/backend/js/theme.min.js') }}"></script>
  <script src="{{ asset('assets/backend/js/hs.theme-appearance-charts.js') }}"></script>
  {{-- sweet alert cdn --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.min.js" integrity="sha512-Z4QYNSc2DFv8LrhMEyarEP3rBkODBZT90RwUC7dYQYF29V4dfkh+8oYZHt0R6T3/KNv32/u0W6icGWUUk9V0jA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

  @yield('toast-js')
  @yield('delete-js')
  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATERANGEPICKER
      // =======================================================
      $('.js-daterangepicker').daterangepicker();

      $('.js-daterangepicker-times').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });

      var start = moment();
      var end = moment();

      function cb(start, end) {
        $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
      }

      $('#js-daterangepicker-predefined').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);

      cb(start, end);
    });


    // INITIALIZATION OF DATATABLES
    // =======================================================
    HSCore.components.HSDatatables.init($('#datatable'), {
      select: {
        style: 'multi',
        selector: 'td:first-child input[type="checkbox"]',
        classMap: {
          checkAll: '#datatableCheckAll',
          counter: '#datatableCounter',
          counterInfo: '#datatableCounterInfo'
        }
      },
      language: {
        zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
      }
    });

    const datatable = HSCore.components.HSDatatables.getItem(0)

    document.querySelectorAll('.js-datatable-filter').forEach(function (item) {
      item.addEventListener('change',function(e) {
        const elVal = e.target.value,
    targetColumnIndex = e.target.getAttribute('data-target-column-index'),
    targetTable = e.target.getAttribute('data-target-table');

    HSCore.components.HSDatatables.getItem(targetTable).column(targetColumnIndex).search(elVal !== 'null' ? elVal : '').draw()
      })
    })
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      localStorage.removeItem('hs_theme')

      window.onload = function () {
        

        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        const HSFormSearchInstance = new HSFormSearch('.js-form-search')

        if (HSFormSearchInstance.collection.length) {
          HSFormSearchInstance.getItem(1).on('close', function (el) {
            el.classList.remove('top-0')
          })

          document.querySelector('.js-form-search-mobile-toggle').addEventListener('click', e => {
            let dataOptions = JSON.parse(e.currentTarget.getAttribute('data-hs-form-search-options')),
              $menu = document.querySelector(dataOptions.dropMenuElement)

            $menu.classList.add('top-0')
            $menu.style.left = 0
          })
        }


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart')


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('#updatingBarChart')
        const updatingBarChart = HSCore.components.HSChartJS.getItem('updatingBarChart')

        // Call when tab is clicked
        document.querySelectorAll('[data-bs-toggle="chart-bar"]').forEach(item => {
          item.addEventListener('click', e => {
            let keyDataset = e.currentTarget.getAttribute('data-datasets')

            const styles = HSCore.components.HSChartJS.getTheme('updatingBarChart', HSThemeAppearance.getAppearance())

            if (keyDataset === 'lastWeek') {
              updatingBarChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
              updatingBarChart.data.datasets = [
                {
                  "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor,
                  "maxBarThickness": 10
                },
                {
                  "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
                  "backgroundColor": styles.data.datasets[1].backgroundColor,
                  "borderColor": styles.data.datasets[1].borderColor,
                  "maxBarThickness": 10
                }
              ];
              updatingBarChart.update();
            } else {
              updatingBarChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
              updatingBarChart.data.datasets = [
                {
                  "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor,
                  "maxBarThickness": 10
                },
                {
                  "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                  "backgroundColor": styles.data.datasets[1].backgroundColor,
                  "borderColor": styles.data.datasets[1].borderColor,
                  "maxBarThickness": 10
                }
              ]
              updatingBarChart.update();
            }
          })
        })


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart-datalabels', {
          plugins: [ChartDataLabels],
          options: {
            plugins: {
              datalabels: {
                anchor: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? 'end' : 'center';
                },
                align: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? 'end' : 'center';
                },
                color: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
                },
                font: function (context) {
                  var value = context.dataset.data[context.dataIndex],
                    fontSize = 25;

                  if (value.r > 50) {
                    fontSize = 35;
                  }

                  if (value.r > 70) {
                    fontSize = 55;
                  }

                  return {
                    weight: 'lighter',
                    size: fontSize
                  };
                },
                formatter: function (value) {
                  return value.r
                },
                offset: 2,
                padding: 0
              }
            },
          }
        })

        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        HSCore.components.HSClipboard.init('.js-clipboard')
      }
    })()
  </script>

  <!-- Style Switcher JS -->

  <script>
      (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
          $variants.forEach($item => {
            if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
              $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
              return $item.classList.add('active')
            }

            $item.classList.remove('active')
          })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
          $item.addEventListener('click', function () {
            HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
          })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
          setActiveStyle()
        })
      })()
    </script>
</body>
</html>
