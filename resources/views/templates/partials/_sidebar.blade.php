<li class="menu-label">Main</li>
            @if(Auth::user()->organisasi == 'BEM')
            <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Dashboard</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                   </ul>
            </li>

            <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i> <span>Event</span> <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{route('create.event')}}"><i class="ti-control-record"></i>Membuat Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('event')}}"><i class="ti-control-record"></i>Data Event</a></li>

                    </ul>
            </li>

             <li class="leftbar-menu-item"><a class="nav-link" href="{{url('create')}}"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Dana RAB</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>
            @elseif(Auth::user()->organisasi == 'BPM')
            <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i> <span>Recruitment</span> <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{url('formoprecbpm')}}"><i class="ti-control-record"></i>Membuat Oprec</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('dataoprecbpm')}}"><i class="ti-control-record"></i>Data Oprec</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('dataopreclolosbpm')}}"><i class="ti-control-record"></i>Data Oprec Lolos</a></li>

                    </ul>
            </li>

            <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i> <span>Event</span> <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{route('create.event')}}"><i class="ti-control-record"></i>Membuat Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('event')}}"><i class="ti-control-record"></i>Data Event</a></li>

                    </ul>
            </li>

             <li class="leftbar-menu-item"><a class="nav-link" href="{{url('create')}}"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Dana RAB</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>
            @elseif(Auth::user()->organisasi == 'HIMA')
            <li class="leftbar-menu-item"><a class="nav-link" href="{{url('create')}}"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Membuat Event</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>

            <li class="leftbar-menu-item"><a class="nav-link" href="{{url('index')}}"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Data Event</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>

             <li class="leftbar-menu-item"><a class="nav-link" href="{{url('create')}}"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Dana RAB</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>
            @elseif(Auth::user()->organisasi == 'UKM')
            <li class="leftbar-menu-item"><a class="nav-link" href="{{url('create')}}"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Membuat Event</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>

            <li class="leftbar-menu-item"><a class="nav-link" href="{{url('index')}}"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Data Event</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>

             <li class="leftbar-menu-item"><a class="nav-link" href="{{url('create')}}"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Dana RAB</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>
            @endif
