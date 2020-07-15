
<li class="menu-label">Main</li>
            {{-- <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Dashboard</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                </ul>
            </li> --}}
            @if(Request::is('superadmin') || Request::is('superadmin/*'))

            <li class="leftbar-menu-item">
                <a href="{{route('pengguna')}}" class="menu-link">
                    <i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                Pengguna
            </a>
        </li>
        @endif
            {{-- <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Recruitment<span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{url('formoprec')}}"><i class="ti-control-record"></i>Form Oprec</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('dataoprec')}}"><i class="ti-control-record"></i>Data Oprec</a></li>

                </ul>
            </li> --}}


                   {{-- <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Event<span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{url('formevent')}}"><i class="ti-control-record"></i>Form Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('dataevent')}}"><i class="ti-control-record"></i>Data Event</a></li>

                </ul>
            <li> --}}


            {{-- <li class="leftbar-menu-item"><a class="nav-link" href="{{route('organisasi')}}"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Organisasi</i></a></li> --}}

                {{-- </ul> --}}
            {{-- </li> --}}

            @if(Auth::user()->organisasi == 'BEM')
            <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Dashboard</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                   </ul>
            </li>

            <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i> <span>Event</span> <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{route('create.event')}}"><i class="ti-control-record"></i>Membuat Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('event')}}"><i class="ti-control-record"></i>Data Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('eventlainnya')}}"><i class="ti-control-record"></i>Event Lain</a></li>
                    </ul>
            </li>

            <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i> <span>Status Event</span> <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{url('formoprecbpm')}}"><i class="ti-control-record"></i>Proses Perijinan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('dataoprecbpm')}}"><i class="ti-control-record"></i>Sedang dilaksanakan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('dataoprecbpm')}}"><i class="ti-control-record"></i>Sudah dilaksanakan</a></li>

                    </ul>
            </li>

            {{-- <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i> <span>RAB</span> <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{url('formoprecbpm')}}"><i class="ti-control-record"></i>Form RAB</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('dataoprecbpm')}}"><i class="ti-control-record"></i>Data RAB</a></li>

                    </ul>
            </li> --}}

             {{-- <li class="leftbar-menu-item"><a class="nav-link" href="{{url('create')}}"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Dana RAB</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li> --}}

            @elseif(Auth::user()->organisasi == 'BPM')
            <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i> <span>Recruitment</span> <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{route('store.recruitment')}}"><i class="ti-control-record"></i>Membuat Recruitment </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('recruitment')}}"><i class="ti-control-record"></i>Data Recruitment</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pendaftaran')}}"><i class="ti-control-record"></i>Data Pendaftar</a></li>

                    </ul>
            </li>

            <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i> <span>Proker</span> <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{route('create.proker')}}"><i class="ti-control-record"></i>Input Proker</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('proker')}}"><i class="ti-control-record"></i>Data Proker</a></li>

                    </ul>
            </li>


            <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i> <span>Event</span> <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{route('create.event')}}"><i class="ti-control-record"></i>Membuat Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('event')}}"><i class="ti-control-record"></i>Data Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('eventlainnya')}}"><i class="ti-control-record"></i>Event Lain</a></li>

                    </ul>
            </li>

            <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i> <span>Status Event</span> <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{url('formoprecbpm')}}"><i class="ti-control-record"></i>Proses Perijinan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('dataoprecbpm')}}"><i class="ti-control-record"></i>Sedang dilaksanakan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('dataoprecbpm')}}"><i class="ti-control-record"></i>Sudah dilaksanakan</a></li>

                    </ul>
            </li>

            {{-- <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i> <span>RAB</span> <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{url('formoprecbpm')}}"><i class="ti-control-record"></i>Form RAB</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('dataoprecbpm')}}"><i class="ti-control-record"></i>Data RAB</a></li>

                    </ul>
            </li> --}}

             {{-- <li class="leftbar-menu-item"><a class="nav-link" href="{{url('create')}}"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Dana RAB</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li> --}}
            @elseif(Auth::user()->organisasi == 'HIMA')
            <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i> <span>Event</span> <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{route('create.eventlainnya')}}"><i class="ti-control-record"></i>Membuat Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('eventlainnya')}}"><i class="ti-control-record"></i>Data Event</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="{{route('eventlain')}}"><i class="ti-control-record"></i>Event Lain</a></li> --}}

                    </ul>
            </li>

            {{-- <li class="leftbar-menu-item"><a class="nav-link" href="{{url('index')}}"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Data Event</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li> --}}

             {{-- <li class="leftbar-menu-item"><a class="nav-link" href="{{url('create')}}"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Dana RAB</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li> --}}
            @elseif(Auth::user()->organisasi == 'UKM')
            <li class="leftbar-menu-item"><a href="javascript: void(0);" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i> <span>Event</span> <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{route('create.eventlainnya')}}"><i class="ti-control-record"></i>Membuat Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('eventlainnya')}}"><i class="ti-control-record"></i>Data Event</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="{{route('eventlainnya')}}"><i class="ti-control-record"></i>Event Lain</a></li> --}}

                    </ul>
            </li>

            {{-- <li class="leftbar-menu-item"><a class="nav-link" href="{{url('index')}}"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Data Event</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li> --}}

             {{-- <li class="leftbar-menu-item"><a class="nav-link" href="{{url('create')}}"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Dana RAB</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li> --}}

            @elseif(Auth::user()->keterangan == 'Direktur 3')
            <li class="leftbar-menu-item"><a class="nav-link" href="{{route('event')}}">
                <i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical">
                    </i>Data Event</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>
            <li class="leftbar-menu-item"><a class="nav-link" href="{{route('eventlainnya')}}">
                <i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical">
                    </i>Data Event Lain</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>

            @elseif(Auth::user()->keterangan == 'Kaprodi D4 Teknik Informatika')
            <li class="leftbar-menu-item"><a class="nav-link" href="{{route('eventlainnya')}}">
                <i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical">
                    </i>Data Event Lain</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>

            @elseif(Auth::user()->keterangan == 'Kaprodi D4 Akuntansi Sektor Publik')
            <li class="leftbar-menu-item"><a class="nav-link" href="{{route('eventlainnya')}}">
                <i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical">
                    </i>Data Event Lain</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>

            @elseif(Auth::user()->keterangan == 'Kaprodi D3 Perhotelan')
            <li class="leftbar-menu-item"><a class="nav-link" href="{{route('eventlainnya')}}">
                <i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical">
                    </i>Data Event Lain</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>

            @elseif(Auth::user()->keterangan == 'Kaprodi D3 DKV ( Desain Komunikasi Visual )')
            <li class="leftbar-menu-item"><a class="nav-link" href="{{route('eventlainnya')}}">
                <i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical">
                    </i>Data Event Lain</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>

            @elseif(Auth::user()->keterangan == 'Kaprodi D3 Teknik Elektro')
            <li class="leftbar-menu-item"><a class="nav-link" href="{{route('eventlainnya')}}">
                <i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical">
                    </i>Data Event Lain</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>

            @elseif(Auth::user()->keterangan == 'Kaprodi D3 Teknik Mesin')
            <li class="leftbar-menu-item"><a class="nav-link" href="{{route('eventlainnya')}}">
                <i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical">
                    </i>Data Event Lain</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>

            @elseif(Auth::user()->keterangan == 'Kaprodi D3 Teknik Komputer')
            <li class="leftbar-menu-item"><a class="nav-link" href="{{route('eventlainnya')}}">
                <i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical">
                    </i>Data Event Lain</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>

            @elseif(Auth::user()->keterangan == 'Kaprodi D3 Akuntansi')
            <li class="leftbar-menu-item"><a class="nav-link" href="{{route('eventlainnya')}}">
                <i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical">
                    </i>Data Event Lain</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>

            @elseif(Auth::user()->keterangan == 'Kaprodi D3 Kebidanan')
            <li class="leftbar-menu-item"><a class="nav-link" href="{{route('eventlainnya')}}">
                <i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical">
                    </i>Data Event Lain</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>

            @elseif(Auth::user()->keterangan == 'Kaprodi D3 Farmasi')
            <li class="leftbar-menu-item"><a class="nav-link" href="{{route('eventlainnya')}}">
                <i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical">
                    </i>Data Event Lain</i></a>
                <ul class="nav-second-level" aria-expanded="false">

                    </ul>
            </li>

            @endif
