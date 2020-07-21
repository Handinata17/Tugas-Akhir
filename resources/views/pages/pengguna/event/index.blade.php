@extends('templates.home')

@section('sidebar')
    @include('templates.partials._sidebar')
@endsection

@section('content')
                <div class="page-wrapper">
                <h4 class="page-title">Data Event</h4></div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Data List</h4>
                                <p class="text-muted mb-4 font-13">Data Event</p>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Nama Event</th>
                                            <th>Organisasi</th>
                                            <th>Tempat</th>
                                            <th>Alokasi Dana</th>
                                            <th>Tipe</th>
                                            <th>Proposal</th>
                                            <th>Perbaikan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @foreach($events as $event)
                                        @if(Auth::user()->organisasi == 'BEM')
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$event->proker->nama_event}}</td>
                                            <td>{{$event->pengguna->organisasi}}</td>
                                            <td>{{$event->proker->tempat}}</td>
                                            <td>{{$event->proker->alokasi_dana}}</td>
                                            {{-- <td>Rp. {{ number_format($event->proker->alokasi_dana, 0, ',','.')}}</td> --}}
                                            <td>{{$event->tipe}}</td>
                                            <td>@if($event->acc_wadir_3 == 3)
                                            <a class="btn btn-success btn-sm" href="{{config("app.url").$event->proposal}}" download="{{$event->proker->nama_event}}" >Download</a>
                                            @else
                                            <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#lihat{{$event->id}}" >Lihat </button>
                                            @endif
                                            </td>
                                              <td>
                                                @if($event->acc == 1 || $event->acc_wadir_3 == 2 && count($event->revisi) > 0)
                                                <button class="btn btn-danger btn-sm" onclick="window.location='{{route("pengguna.revisi.event.show", $event->id)}}'">Lihat Revisi</button>
                                                @elseif($event->acc == 2 && count($event->revisi) > 0)
                                                <button class="btn btn-success btn-sm" onclick="window.location='{{route("pengguna.revisi.event.show", $event->id)}}'">Lihat Revisi</button>
                                                @endif
                                            </td>
                                            <td>
                                              @if($event->acc == 2 && $event->acc_wadir_3 == null)
                                              <span class="badge badge-success">Data masuk ke wadir 3</span>
                                              @elseif($event->acc == 2 && $event->acc_wadir_3 == 2)
                                                <span class="badge badge-warning">Revisi dari wadir 3</span>
                                              @elseif($event->acc == 1)
                                              <span class="badge badge-warning">Dalam Revisi</span>
                                              @elseif($event->acc == null && count($event->revisi) > 0)
                                              <span class="badge badge-warning">Telah melakuan revisi</span>
                                              @elseif($event->acc_wadir_3 == 3)
                                              <span class="badge badge-success">Selesai</span>
                                              @else
                                              <span class="badge badge-danger">Belum ada Revisi</span>
                                              @endif
                                            </td>
                                            <td>
                                              @if($event->acc_wadir_3 !== '3')
                                              <button type="button" class="btn btn-warning" onclick="window.location='{{route("edit.event", $event->id)}}'">Edit</button>
                                              @endif
                                            </td>
                                        </tr>
                                        @elseif(Auth::user()->organisasi === 'BPM')
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$event->proker->nama_event}}</td>
                                            <td>{{$event->pengguna->organisasi}}</td>
                                            <td>{{ $event->proker->tempat}}</td>
                                            <td>{{$event->proker->alokasi_dana}}</td>
                                            {{-- <td>Rp. {{ number_format($event->proker->alokasi_dana, 0, ',','.')}}</td> --}}
                                            <td>{{$event->tipe}}</td>
                                            <td>
                                            @if($event->acc_wadir_3 == 3)
                                            <a class="btn btn-success btn-sm" href="{{config("app.url").$event->proposal}}" download="{{$event->proker->nama_event}}" >Download</a>
                                            @else
                                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#lihat{{$event->id}}" >Lihat </button>
                                            @endif
                                            </td>
                                            <td>
                                              @if($event->acc == 1 || $event->acc == null)
                                              <button class="btn btn-warning btn-sm" onclick="window.location='{{route("revisi.event", $event->id)}}'">Revisi</button>
                                              @elseif($event->acc == 2 && count($event->revisi) > 0)
                                              <button class="btn btn-success btn-sm" onclick="window.location='{{route("pengguna.revisi.event.show", $event->id)}}'">Lihat Revisi</button>
                                              @endif
                                            </td>
                                            <td>
                                              @if($event->acc == 2 && $event->acc_wadir_3 == null)
                                              <span class="badge badge-success">Data masuk ke wadir 3</span>
                                              @elseif($event->acc == 1)
                                              <span class="badge badge-warning">Dalam Revisi</span>
                                              @elseif($event->acc == 2 && $event->acc_wadir_3 == 2)
                                                <span class="badge badge-warning">Revisi dari wadir 3</span>
                                              @elseif($event->acc == null && count($event->revisi) > 0)
                                              <span class="badge badge-warning">Telah melakuan revisi</span>
                                              @elseif($event->acc == 3)
                                              <span class="badge badge-info">Telah dikonfirmasi wadir</span>
                                              @elseif($event->acc_wadir_3 == 3)
                                              <span class="badge badge-success">Selesai</span>
                                              @else
                                              <span class="badge badge-danger">Belum ada Revisi</span>
                                              @endif
                                            </td>
                                            <td>
                                            @if($event->acc == null || $event->acc == 1)
                                              <a href="{{route('acc.event', $event->id)}}" class="btn btn-sm btn-success">Acc</a>
                                              @endif
                                            </td>
                                        </tr>
                                        @elseif(Auth::user()->keterangan === 'Direktur 3')
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$event->proker->nama_event}}</td>
                                            <td>{{$event->pengguna->organisasi}}</td>
                                            <td>{{ $event->proker->tempat}}</td>
                                            <td>{{$event->proker->alokasi_dana}}</td>
                                            {{-- <td>Rp. {{ number_format($event->proker->alokasi_dana, 0, ',','.')}}</td> --}}
                                            <td>{{$event->tipe}}</td>
                                            <td>@if($event->acc_wadir_3 == 3)
                                            <a class="btn btn-success btn-sm" href="{{config("app.url").$event->proposal}}" download="{{$event->proker->nama_event}}" >Download</a>
                                            @else
                                            <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#lihat{{$event->id}}" >Lihat </button>
                                            @endif
                                            </td>
                                            <td>
                                              @if($event->acc_wadir_3 == null || $event->acc_wadir_3 == 2)
                                              <button class="btn btn-warning btn-sm" onclick="window.location='{{route("revisi.event", $event->id)}}'">Revisi</button>
                                              @elseif($event->acc_wadir_3 == 3 && count($event->revisi) > 0)
                                              <button class="btn btn-success btn-sm" onclick="window.location='{{route("pengguna.revisi.event.show", $event->id)}}'">Lihat Revisi</button>
                                              @endif
                                            </td>
                                            <td>
                                              @if($event->acc_wadir_3 == 2)
                                              <span class="badge badge-warning">Dalam Revisi</span>
                                                @elseif($event->acc_wadir_3 == 3)
                                                <span class="badge badge-success">Selesai</span>
                                              @else
                                              <span class="badge badge-danger">Belum ada Revisi</span>
                                              @endif
                                            </td>
                                            <td>
                                            @if($event->acc_wadir_3 == null || $event->acc_wadir_3 == 2)
                                              <a href="{{route('acc.event', $event->id)}}" class="btn btn-sm btn-success">Acc</a>
                                              @endif
                                            </td>
                                        </tr>
                                        @endif

                                    <div class="modal fade" id="lihat{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="contohModalScrollableTitle" aria-hidden="true">
                                      <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                          <h5 class="modal-title" id="contohModalScrollableTitle">Proposal Event {{$event->proker->nama_event}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                           <embed src="{{config("app.url").$event->proposal}}" framborder="0" width="100%" height="450px">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
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
