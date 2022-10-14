<div class="mainnav__inner">

    <!-- Navigation menu -->
    <div class="mainnav__top-content scrollable-content pb-5">

        <!-- Profile Widget -->
        <div class="mainnav__profile mt-3 d-flex3">

            <div class="mt-2 d-mn-max"></div>

            <!-- Profile picture  -->
            <div class="mininav-toggle text-center py-2">

                <img class="mainnav__avatar img-md rounded-circle border" src=" {{ isset(Auth::user()->image) ? asset("storage/images/thumbnail/".Auth::user()->image) : asset('assets/img/profile-photos/1.png') }}" alt="Profile Picture">
            </div>

            <div class="mininav-content collapse d-mn-max">
                <div class="d-grid">

                    <!-- User name and position -->
                    <button class="d-block btn shadow-none p-2" data-bs-toggle="collapse" data-bs-target="#usernav" aria-expanded="false" aria-controls="usernav">
                        <span class="dropdown-toggle d-flex justify-content-center align-items-center">
                            <h6 class="mb-0 me-3">{{Auth::user()->name}}</h6>
                        </span>
                        <small class="text-muted">{{Auth::user()->roles[0]->name}}</small>
                    </button>

                    <!-- Collapsed user menu -->
                    <div id="usernav" class="nav flex-column collapse">

                        {{-- <a href="#" class="nav-link">
                            <i class="demo-pli-male fs-5 me-2"></i>
                            <span class="ms-1">Profile</span>
                        </a> --}}
                        <a href="#" class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalChangePassword">
                            <i class="demo-pli-gear fs-5 me-2"></i>
                            <span class="ms-1">Ubah Password</span>
                        </a>
                        <a href="{{ route('logout') }}" class="nav-link">
                            <i class="demo-pli-unlock fs-5 me-2"></i>
                            <span class="ms-1">Logout</span>
                        </a>
                    </div>

                </div>
            </div>

        </div>
        <!-- End - Profile widget -->

        <!-- Navigation Category -->
        <div class="mainnav__categoriy py-3">
            {!! Menu::sidebar() !!}
            {{-- <ul class="mainnav__menu nav flex-column">

                <!-- Link with submenu -->
                <li class="nav-item">

                    <a href="{{ url('backend/dashboard') }}" class=" mininav-toggle nav-link"><i class="demo-pli-home fs-5 me-2"></i>
                        <span class="nav-label mininav-content ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item has-sub">

                    <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-boot-2 fs-5 me-2"></i>
                        <span class="nav-label ms-1">Master</span>
                    </a>

                    <!-- Ui Elements submenu list -->
                    <ul class="mininav-content nav collapse">
                        <li class="nav-item">
                            <a href="../../ui-elements/buttons/index.html" class="nav-link">Test</a>
                        </li>


                    </ul>
                    <!-- END : Ui Elements submenu list -->

                </li>
                <li class="nav-item has-sub">

                    <a href="#" class="mininav-toggle nav-link active collapsed"><i class="demo-pli-boot-2 fs-5 me-2"></i>
                        <span class="nav-label ms-1">Pengaturan</span>
                    </a>

                    <!-- Ui Elements submenu list -->
                    <ul class="mininav-content nav collapse">
                        <li class="nav-item ">
                            <a href="{{ url('backend/permissions') }}" class="nav-link active">Permissions</a>
                        </li>

                    </ul>
                    <!-- END : Ui Elements submenu list -->

                </li>

            </ul> --}}
        </div>
        <!-- END : Navigation Category -->

    </div>


</div>
