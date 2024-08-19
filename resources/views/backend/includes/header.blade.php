<div class="page-header row">
    <div class="header-logo-wrapper col-auto">
      <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="{{ asset('backend/assets/images/logo/logo.png') }}" alt=""/><img class="img-fluid for-dark" src="{{ asset('backend/assets/images/logo/logo_light.png') }}" alt=""/></a></div>
    </div>
    <div class="col-4 col-xl-4 page-title">
      <x-breadcrumb :breadCrumb="$breadCrumb" />
    </div>

    <!-- Page Header Start-->
    <div class="header-wrapper col m-0">
      <div class="row">
        <form class="form-inline search-full col" action="#" method="get">
          <div class="form-group w-100">
            <div class="Typeahead Typeahead--twitterUsers">
              <div class="u-posRelative">
                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Mofi .." name="q" title="" autofocus>
                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
              </div>
              <div class="Typeahead-menu"></div>
            </div>
          </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0">
          <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{ asset('backend/assets/images/logo/logo.png') }}" alt=""></a></div>
          <div class="toggle-sidebar">
            <svg class="stroke-icon sidebar-toggle status_toggle middle">
              <use href="{{ asset('backend/assets/svg/icon-sprite.svg#toggle-icon') }}"></use>
            </svg>
          </div>
        </div>
        <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
          <ul class="nav-menus">
            <li>                         <span class="header-search">
                <svg>
                  {{-- <use href="../assets/svg/icon-sprite.svg#search"></use> --}}
                </svg></span></li>
            <li>
              <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                  <div class="u-posRelative d-flex align-items-center">
                    <svg class="search-bg svg-color"> 
                      {{-- <use href="../assets/svg/icon-sprite.svg#search"></use> --}}
                    </svg>
                    <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Mofi .." name="q" title="">
                  </div>
                </div>
              </div>
            </li>
            <li class="onhover-dropdown">
              <div class="notification-box custom-notification-icon">
                  <i class="{{ _icons('bell') }}"></i>
                <span class="badge rounded-pill badge-primary">4 </span>
              </div>
              <div>
              </div>
              <div class="onhover-show-div notification-dropdown">
                <h5 class="f-18 f-w-600 mb-0 dropdown-title">Notifications                               </h5>
                <ul class="notification-box">
                  <li class="toast default-show-toast align-items-center border-0 fade show" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                    <div class="d-flex justify-content-between">
                      <div class="toast-body d-flex p-0">
                        <div class="flex-shrink-0 bg-light-primary"><img class="w-auto" src="{{ asset('backend/assets/images/dashboard/icon/wallet.png') }}" alt="Wallet"></div>
                        <div class="flex-grow-1"> <a href="private-chat.html">
                            <h6 class="m-0">Daily offer added</h6></a>
                          <p class="m-0">User-only offer added</p>
                        </div>
                      </div>
                      <button class="btn-close btn-close-white shadow-none" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                  </li>
                  <li class="toast default-show-toast align-items-center border-0 fade show" aria-live="assertive" aria-atomic="true" data-bs-autohide="false"> 
                    <div class="d-flex justify-content-between">
                      <div class="toast-body d-flex p-0">
                        <div class="flex-shrink-0 bg-light-info"><img class="w-auto" src="{{ asset('backend/assets/images/dashboard/icon/shield-dne.png') }}" alt="Shield-dne"></div>
                        <div class="flex-grow-1"> <a href="private-chat.html">
                            <h6 class="m-0">Product Review</h6></a>
                          <p class="m-0">Changed to a workflow</p>
                        </div>
                      </div>
                      <button class="btn-close btn-close-white shadow-none" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                  </li>
                  <li class="toast default-show-toast align-items-center border-0 fade show" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">  
                    <div class="d-flex justify-content-between">
                      <div class="toast-body d-flex p-0">
                        <div class="flex-shrink-0 bg-light-warning"><img class="w-auto" src="{{ asset('backend/assets/images/dashboard/icon/graph.png') }}" alt="Graph"></div>
                        <div class="flex-grow-1"> <a href="private-chat.html">
                            <h6 class="m-0">Return Products</h6></a>
                          <p class="m-0">52 items were returned</p>
                        </div>
                      </div>
                      <button class="btn-close btn-close-white shadow-none" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                  </li>
                  <li class="toast default-show-toast align-items-center border-0 fade show" aria-live="assertive" aria-atomic="true" data-bs-autohide="false"> 
                    <div class="d-flex justify-content-between"> 
                      <div class="toast-body d-flex p-0">
                        <div class="flex-shrink-0 bg-light-tertiary"><img class="w-auto" src="{{ asset('backend/assets/images/dashboard/icon/ticket-star.png') }}" alt="Ticket-star"></div>
                        <div class="flex-grow-1"> <a href="private-chat.html">
                            <h6 class="m-0">Recently Paid</h6></a>
                          <p class="m-0">Card payment of $343   </p>
                        </div>
                      </div>
                      <button class="btn-close btn-close-white shadow-none" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            
            <li class="profile-nav onhover-dropdown px-0 py-0">
              <div class="d-flex profile-media align-items-center"><img class="img-30" src="{{ asset('backend/assets/images/dashboard/profile.png') }}" alt="">
                <div class="flex-grow-1"><span>{{auth()->user()->name}}</span>
                  <p class="mb-0 font-outfit">{{ session('role') }}<i class="fa fa-angle-down"></i></p>
                </div>
              </div>
              <ul class="profile-dropdown onhover-show-div">
                <li>
                  <a href="">
                    <i class="{{ _icons('user') }}"></i>
                    <span>Profile </span>
                  </a>
                </li>
                <li>
                  <a  href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="{{ _icons('logout') }}"> </i><span>Log out</span></a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
          <div class="ProfileCard u-cf">                        
          <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
          <div class="ProfileCard-details">
          <div class="ProfileCard-realName">name</div>
          </div>
          </div>
        </script>
        <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
      </div>
    </div>
    <!-- Page Header Ends -->
  </div>
