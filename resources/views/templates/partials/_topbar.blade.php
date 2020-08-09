<div class="topbar">
        <!-- Navbar -->
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-right mb-0">
                <li class="dropdown">
                    @if(!Auth::user()->organisasi && !Auth::user()->keterangan )
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="" role="button" aria-haspopup="false" aria-expanded="false"><img src="{{asset('template/images/users/user.png')}}" alt="profile-user" class="rounded-circle">
                     <span class="ml-1 nav-user-name hidden-sm">{{Auth::user()->nama}}<i class="mdi mdi-chevron-down"></i></span></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href=""><i class="dripicons-user text-muted mr-2"></i> Profile</a> <a class="dropdown-item" href="#">
                        <div class="dropdown-divider">
                            </div>
                            <a class="dropdown-item" href="{{route('superadmin.logout')}}"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                    @else
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="" role="button" aria-haspopup="false" aria-expanded="false"><img src="{{asset('template/images/users/user.png')}}" alt="profile-user" class="rounded-circle">
                     <span class="ml-1 nav-user-name hidden-sm">{{Auth::user()->nama}} <i class="mdi mdi-chevron-down"></i></span></a>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{ route ('index.profil')}}"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                        {{-- <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a> --}}
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="{{route('pengguna.logout')}}"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                    </div>
                    @endauth
                </li>

            </ul>
        </nav>
        <!-- end navbar-->
    </div>
