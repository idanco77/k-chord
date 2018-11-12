<!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        
                        <a href="{{ url('') }}" class="logo"><img src="{{ asset('images/full-logo-transparent.png') }}" height="40" alt="kchord-logo"></a>
                    </div>
                </div>

                <nav class="navbar-custom">
                    <!-- Search input -->
                    <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input" type="search" placeholder="Search" />
                            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div>

                    <ul class="list-inline float-right mb-0">
                        <!-- Search -->
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                <i class="mdi mdi-magnify noti-icon"></i>
                            </a>
                        </li>
                        <!-- Fullscreen -->
                        <li class="list-inline-item dropdown notification-list hide-sm">
                            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                <i class="mdi mdi-fullscreen noti-icon"></i>
                            </a>
                        </li>
                        
                        
                        <!-- User-->
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('images/' . Session::get('user_image')) }}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <a class="dropdown-item" href="{{ url('profile') }}"><i class="dripicons-user text-muted"></i> Profile</a>
                                <a class="dropdown-item" href="{{ url('') }}"><i class="dripicons-wallet text-muted"></i> Back to k-chord</a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('user/logout') }}"><i class="dripicons-exit text-muted"></i> Logout</a>
                            </div>
                        </li>
                    </ul>

                    <!-- Menu Collapse Button -->
                    <button type="button" class="button-menu-mobile open-left waves-effect">
                        <i class="ion-navicon"></i>
                    </button>

                    <div class="clearfix"></div>
                </nav>

            </div>