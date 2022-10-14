<div class="header__inner">

    <!-- Brand -->
    <div class="header__brand">
        <div class="brand-wrap">

            <!-- Brand logo -->
            <a href="#" class="brand-img stretched-link">
                <img src="{{URL::to('storage/images/logo/'.Setting::get_setting()->icon)}}"  width="40" height="40">
            </a>

            <!-- Brand title -->
            <div class="brand-title">{{Setting::get_setting()->name}}</div>

            <!-- You can also use IMG or SVG instead of a text element. -->

        </div>
    </div>
    <!-- End - Brand -->

    <div class="header__content">

        <!-- Content Header - Left Side: -->
        <div class="header__content-start">

            <!-- Navigation Toggler -->
            <button type="button" class="nav-toggler header__btn btn btn-icon btn-sm" aria-label="Nav Toggler">
                <i class="demo-psi-view-list"></i>
            </button>

            <!-- Searchbox -->

        </div>
        <!-- End - Content Header - Left Side -->

        <!-- Content Header - Right Side: -->
        <div class="header__content-end">



            <!-- User dropdown -->
            <div class="dropdown">

                <!-- Toggler -->
                <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="User dropdown" aria-expanded="false">
                    <i class="demo-psi-male"></i>
                </button>

                <!-- User dropdown menu -->
                <div class="dropdown-menu dropdown-menu-end w-md-450px">

                    <!-- User dropdown header -->
                    <div class="d-flex align-items-center border-bottom px-3 py-2">
                        <div class="flex-shrink-0">
                            <img class="img-sm rounded-circle" src=" {{ isset(Auth::user()->image) ? asset("storage/images/thumbnail/".Auth::user()->image) : asset('assets/img/profile-photos/1.png') }}" alt="Profile Picture" loading="lazy">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-0">{{Auth::user()->name}}</h5>
                            <span class="text-muted fst-italic"><a href="#" class="__cf_email__">{{Auth::user()->email}}</a></span>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-5">

                            <!-- User menu link -->
                            <div class="list-group list-group-borderless h-100 py-3">

                                <a href="{{ url('backend/users') }}/{{Auth::user()->id}}/edit" class="list-group-item list-group-item-action">
                                    <i class="demo-pli-male fs-5 me-2"></i> Profile
                                </a>
                                <a href="{{ route('logout') }}" class="list-group-item list-group-item-action">
                                    <i class="demo-pli-unlock fs-5 me-2"></i> Logout
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- End - User dropdown -->

            <!-- Sidebar Toggler -->


        </div>
    </div>
</div>
