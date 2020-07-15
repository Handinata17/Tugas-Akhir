@extends('templates.home')

@section('sidebar')
    @include('templates.partials._sidebar')
@endsection

@section('content')



                <div class="page-wrapper">
                <h4 class="page-title">Data Event Lain</h4></div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Data List</h4>
                                <p class="text-muted mb-4 font-13">Data Event Lain</p>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Nama Event</th>
                                            <th>Organisasi</th>
                                            {{-- <th>Pembuat</th> --}}
                                            {{-- <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th> --}}
                                            <th>Tempat</th>
                                            <th>Alokasi Dana</th>
                                            <th>Tipe</th>
                                            <th>Proposal</th>
                                            <th>Perbaikan</th>
                                            @if(Auth::user()->organisasi == 'BEM' || Auth::user()->organisasi == 'BPM' ||
                                            Auth::user()->keterangan == 'Kaprodi D4 Teknik Informatika' || Auth::user()->keterangan == 'Direktur 3')
                                            <th>Status</th>
                                            @endif
                                            {{-- <th>Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($event_lainnyas as $eventlainnya)
                                        @if($eventlainnya->pengguna->organisasi === Auth::user()->organisasi)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$eventlainnya->proker->nama_event}}</td>
                                            <td>{{$eventlainnya->pengguna->organisasi}}</td>
                                            {{-- <td>{{$eventlainnya->pengguna->nama}}</td> --}}
                                            {{-- <td>{{$eventlainnya->proker->tanggal_mulai}}</td>
                                            <td>{{$eventlainnya->proker->tanggal_selesai}}</td> --}}
                                            <td>{{ $eventlainnya->proker->tempat}}</td>
                                            <td>{{ $eventlainnya->proker->alokasi_dana}}</td>
                                            <td>{{$eventlainnya->tipe}}</td>
                                            <td> <button class="btn btn-primary" onclick="window.location='{{config("app.url").$eventlainnya->proposal}}'">Download</button> </td>
                                            <td>{{$eventlainnya->perbaikan}}</td>
                                            {{-- <td><a href="{{route('edit.eventlainnya', $eventlainnya->id)}}"><i class="far fa-edit text-info mr-1"></i></a> --}}
                                            {{-- <a href="{{route('destroy.eventlainnya', $eventlainnya->id)}}"><i class="far fa-trash-alt text-danger"></i></a></td> --}}
                                        </tr>
                                        @elseif(Auth::user()->organisasi == 'BEM')
                                        <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$eventlainnya->proker->nama_event}}</td>
                                                <td>{{$eventlainnya->pengguna->organisasi}}</td>
                                                <td>{{ $eventlainnya->proker->tempat}}</td>
                                                <td>{{ $eventlainnya->proker->alokasi_dana}}</td>
                                                <td>{{$eventlainnya->tipe}}</td>
                                                <td> <button class="btn btn-sm btn-primary" onclick="window.location='{{config("app.url").$eventlainnya->proposal}}'">Download</button> </td>
                                                <td>{{$eventlainnya->perbaikan}}</td>
                                                @if($eventlainnya->acc_bem == '2')
                                                <td><span class="badge badge-success">data sudah masuk BPM</span></td>
                                                @endif
                                                @if($eventlainnya->acc_bem == '1')
                                                    <td><a href="{{route('revisi.eventlainnya', $eventlainnya->id)}}" class="btn btn-sm btn-warning">Revisi</a>
                                                        <a href="{{route('acc_bem.eventlainnya', $eventlainnya->id)}}" class="btn btn-sm btn-success">Acc</a></td>
                                                @endif
                                        </tr>
                                        @elseif(Auth::user()->organisasi == 'BPM')
                                        <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$eventlainnya->proker->nama_event}}</td>
                                                <td>{{$eventlainnya->pengguna->organisasi}}</td>
                                                <td>{{ $eventlainnya->proker->tempat}}</td>
                                                <td>{{ $eventlainnya->proker->alokasi_dana}}</td>
                                                <td>{{$eventlainnya->tipe}}</td>
                                                <td> <button class="btn btn-primary" onclick="window.location='{{config("app.url").$eventlainnya->proposal}}'">Download</button> </td>
                                                <td>{{$eventlainnya->perbaikan}}</td>
                                                @if($eventlainnya->acc_bpm == '2')
                                                <td><span class="badge badge-success">data masuk Kaprodi D4 TI</span></td>
                                                @endif
                                                @if($eventlainnya->acc_bpm == '1')
                                                    <td><a href="{{route('revisi.eventlainnya', $eventlainnya->id)}}" class="btn btn-sm btn-warning">Revisi</a>
                                                        <a href="{{route('acc_bpm.eventlainnya', $eventlainnya->id)}}" class="btn btn-sm btn-success">Acc</a></td>
                                                @endif
                                        </tr>
                                        @elseif(Auth::user()->keterangan == 'Kaprodi D4 Teknik Informatika')
                                        <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$eventlainnya->proker->nama_event}}</td>
                                                <td>{{$eventlainnya->pengguna->organisasi}}</td>
                                                <td>{{ $eventlainnya->proker->tempat}}</td>
                                                <td>{{ $eventlainnya->proker->alokasi_dana}}</td>
                                                <td>{{$eventlainnya->tipe}}</td>
                                                <td> <button class="btn btn-primary" onclick="window.location='{{config("app.url").$eventlainnya->proposal}}'">Download</button> </td>
                                                <td>{{$eventlainnya->perbaikan}}</td>
                                                @if($eventlainnya->acc_kaprodi == '2')
                                                <td><span class="badge badge-success">data masuk wadir 3</span></td>
                                                @endif
                                                @if($eventlainnya->acc_kaprodi == '1')
                                                    <td><a href="{{route('revisi.eventlainnya', $eventlainnya->id)}}" class="btn btn-sm btn-warning">Revisi</a>
                                                        <a href="{{route('acc_kaprodi.eventlainnya', $eventlainnya->id)}}" class="btn btn-sm btn-success">Acc</a></td>
                                                @endif
                                        </tr>
                                        @elseif(Auth::user()->keterangan == 'Kaprodi D3 Akuntansi')
                                        <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$eventlainnya->proker->nama_event}}</td>
                                                <td>{{$eventlainnya->pengguna->organisasi}}</td>
                                                <td>{{ $eventlainnya->proker->tempat}}</td>
                                                <td>{{ $eventlainnya->proker->alokasi_dana}}</td>
                                                <td>{{$eventlainnya->tipe}}</td>
                                                <td> <button class="btn btn-primary" onclick="window.location='{{config("app.url").$eventlainnya->proposal}}'">Download</button> </td>
                                                <td>{{$eventlainnya->perbaikan}}</td>
                                                @if($eventlainnya->acc_kaprodi == '2')
                                                <td><span class="badge badge-success">data masuk wadir 3</span></td>
                                                @endif
                                                @if($eventlainnya->acc_kaprodi == '1')
                                                    <td><a href="{{route('revisi.eventlainnya', $eventlainnya->id)}}" class="btn btn-sm btn-warning">Revisi</a>
                                                        <a href="{{route('acc_kaprodi.eventlainnya', $eventlainnya->id)}}" class="btn btn-sm btn-success">Acc</a></td>
                                                @endif
                                        </tr>
                                        @elseif(Auth::user()->keterangan == 'Direktur 3')
                                        <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$eventlainnya->proker->nama_event}}</td>
                                                <td>{{$eventlainnya->pengguna->organisasi}}</td>
                                                <td>{{ $eventlainnya->proker->tempat}}</td>
                                                <td>{{ $eventlainnya->proker->alokasi_dana}}</td>
                                                <td>{{$eventlainnya->tipe}}</td>
                                                <td> <button class="btn btn-primary" onclick="window.location='{{config("app.url").$eventlainnya->proposal}}'">Download</button> </td>
                                                <td>{{$eventlainnya->perbaikan}}</td>
                                                @if($eventlainnya->acc_wadir_3 == '2')
                                                <td><span class="badge badge-success">data diterima Wadir 3</span></td>
                                                @endif
                                                @if($eventlainnya->acc_wadir_3 == '1')
                                                    <td><a href="{{route('revisi.eventlainnya', $eventlainnya->id)}}" class="btn btn-sm btn-warning">Revisi</a>
                                                        <a href="{{route('acc_wadir_3.eventlainnya', $eventlainnya->id)}}" class="btn btn-sm btn-success">Acc</a></td>
                                                @endif
                                        </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- container -->
            <!--  Modal content for the above example -->

            <!-- /.modal -->
            <footer class="footer text-center text-sm-left">ORMAWA KMPHB <span class="text-muted d-none d-sm-inline-block float-right">Politeknik Harapan Bersama</footer>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>

@endsection
