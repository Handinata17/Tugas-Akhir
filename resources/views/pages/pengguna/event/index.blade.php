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
                                {{-- <div class="form-group">
                                        <label>Dari Tanggal</label>
                                        <div class="col-sm-3">
                                            <input class="form-control" type="date" name="dari_tanggal" value="2011-08-19" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label>Sampai</label>
                                            <div class="col-sm-3">
                                                <input class="form-control" type="date" name="sampai" value="2011-08-19" id="example-date-input">
                                            </div>
                                        </div> --}}
                                    <form action="{{route('print.event')}}" method="get">
                                        <div class="form-group">
                                                <label>Organisasi</label>
                                                <div class="col-sm-4">
                                                    <select class="for'm-control" name="organisasi" id="organisasi">
                                                        <option value="">Pilih Organisasi</option>
                                                        <option value="BEM">BEM</option>
                                                        <option value="BPM">BPM</option>
                                                    </select>
                                                </div>
                                            </div>
                                    <button type="submit" class="btn btn-success">Prints</button>
                                    <div class="float-right">
                                        <a href="{{route('store.event')}}" class="btn btn-gradient-primary">Tambah</a>
                                        </div>
                                    </form>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Nama Event</th>
                                            <th>Organisasi</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Alokasi Dana</th>
                                            <th>Tipe</th>
                                            <th>Proposal</th>
                                            <th>Revisi</th>
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
                                            <td>{{$event->proker->tanggal_mulai}}</td>
                                            <td>Rp. {{ number_format($event->proker->alokasi_dana, 0, ',','.')}}</td>
                                            <td>{{$event->tipe}}</td>
                                            <td>@if($event->acc_wadir_3 == 3)
                                            <a class="btn btn-success btn-sm" href="{{$event->proposal}}" download="{{$event->proker->nama_event}}" >Download</a>
                                            @else
                                            <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#lihat{{$event->id}}" >Lihat </button>
                                            @endif
                                            </td>
                                              <td>
                                                @if($event->proker->organisasi === 'BPM' && $event->acc < 2)
                                                <button class="btn btn-warning btn-sm" onclick="window.location='{{route("revisi.event", $event->id)}}'">Revisi</button>
                                                @elseif($event->acc == 2 && count($event->revisi) > 0)
                                                <button class="btn btn-success btn-sm" onclick="window.location='{{route("pengguna.revisi.event.show", $event->id)}}'">Lihat Revisi</button>
                                                @elseif($event->acc == 1 || $event->acc_wadir_3 == 2 && count($event->revisi) > 0)
                                                <button class="btn btn-danger btn-sm" onclick="window.location='{{route("pengguna.revisi.event.show", $event->id)}}'">Lihat Revisi</button>
                                                @endif
                                            </td>
                                            <td>
                                              @if($event->acc == 2 && $event->acc_wadir_3 == null)
                                              <span class="badge badge-success">Data <br> masuk <br> wadir 3</span>
                                              @elseif($event->acc == 2 && $event->acc_wadir_3 == 2)
                                                <span class="badge badge-warning">Revisi <br> dari <br> wadir 3</span>
                                              @elseif($event->acc == 1)
                                              <span class="badge badge-warning">Dalam <br> Revisi</span>
                                              @elseif($event->acc == null && count($event->revisi) > 0)
                                              <span class="badge badge-warning">Telah <br> melakuan <br> revisi</span>
                                              @elseif($event->acc_wadir_3 == 3)
                                              <span class="badge badge-success">Selesai</span>
                                              @else
                                            <span class="badge badge-danger">Belum <br> ada <br> Revisi {{$event->pengguna->organisasi === 'BEM' ? 'BPM' : 'BEM'}}</span>
                                              @endif
                                            </td>
                                            <td>
                                              @if($event->pengguna->organisasi === 'BPM' && $event->acc < 2)
                                              <a href="{{route('acc.event', $event->id)}}" class="btn btn-sm btn-success">Acc</a>
                                              @elseif($event->acc_wadir_3 !== '3' && $event->pengguna->organisasi === 'BEM')
                                              <button type="button" class="btn btn-warning" onclick="window.location='{{route("edit.event", $event->id)}}'">Edit</button>
                                              @endif
                                            </td>
                                        </tr>
                                        @elseif(Auth::user()->organisasi === 'BPM')
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$event->proker->nama_event}}</td>
                                            <td>{{$event->pengguna->organisasi}}</td>
                                            <td>{{$event->proker->tanggal_mulai}}</td>
                                            <td>Rp. {{ number_format($event->proker->alokasi_dana, 0, ',','.')}}</td>
                                            <td>{{$event->tipe}}</td>
                                            <td>
                                            @if($event->acc_wadir_3 == 3)
                                            <a class="btn btn-success btn-sm" href="{{$event->proposal}}" download="{{$event->proker->nama_event}}" >Download</a>
                                            @else
                                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#lihat{{$event->id}}" >Lihat </button>
                                            @endif
                                            </td>
                                            <td>
                                              @if($event->proker->organisasi === 'BPM' && $event->acc < 2)
                                              <button class="btn btn-success btn-sm" onclick="window.location='{{route("pengguna.revisi.event.show", $event->id)}}'">Lihat Revisi</button>
                                              @elseif($event->acc == 1 || $event->acc == null && $event->proker->organisasi === 'BPM' )
                                              <button class="btn btn-warning btn-sm" onclick="window.location='{{route("revisi.event", $event->id)}}'">Revisi</button>
                                              @elseif($event->acc == 2 && count($event->revisi) > 0)
                                              <button class="btn btn-success btn-sm" onclick="window.location='{{route("pengguna.revisi.event.show", $event->id)}}'">Lihat Revisi</button>
                                              @endif
                                            </td>
                                            <td>
                                              @if($event->acc == 2 && $event->acc_wadir_3 == null)
                                              <span class="badge badge-success">Data <br> masuk <br> wadir 3</span>
                                              @elseif($event->acc == 1)
                                              <span class="badge badge-warning">Dalam <br> Revisi</span>
                                              @elseif($event->acc == 2 && $event->acc_wadir_3 == 2)
                                                <span class="badge badge-warning">Revisi <br> dari <br> wadir 3</span>
                                              @elseif($event->acc == null && count($event->revisi) > 0)
                                              <span class="badge badge-warning">Telah <br> melakuan <br> revisi</span>
                                              @elseif($event->acc == 3)
                                              <span class="badge badge-info">Telah <br> dikonfirmasi <br> wadir 3</span>
                                              @elseif($event->acc_wadir_3 == 3)
                                              <span class="badge badge-success">Selesai</span>
                                              @else
                                            <span class="badge badge-danger">Belum <br> ada <br> Revisi {{$event->pengguna->organisasi === 'BPM' ? 'BEM' : 'BPM'}}</span>
                                              @endif
                                            </td>
                                            <td>
                                              @if($event->proker->organisasi === 'BEM' && $event->acc < 2)
                                              <a href="{{route('acc.event', $event->id)}}" class="btn btn-sm btn-success">Acc</a>
                                              @elseif($event->acc_wadir_3 !== '3' && $event->proker->organisasi === 'BPM')
                                              <button type="button" class="btn btn-warning" onclick="window.location='{{route("edit.event", $event->id)}}'">Edit</button>
                                              @endif
                                            </td>
                                        </tr>
                                        @elseif(Auth::user()->keterangan === 'Direktur 3')
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$event->proker->nama_event}}</td>
                                            <td>{{$event->pengguna->organisasi}}</td>
                                            <td>{{$event->proker->tanggal_mulai}}</td>
                                            {{-- <td>{{ $event->proker->tempat}}</td> --}}
                                            {{-- <td>{{$event->proker->alokasi_dana}}</td> --}}
                                            <td>Rp. {{ number_format($event->proker->alokasi_dana, 0, ',','.')}}</td>
                                            <td>{{$event->tipe}}</td>
                                            <td>
                                                {{-- {{ dd($event->acc_wadir_3) }} --}}
                                            @if($event->acc_wadir_3 == 3)
                                            <a class="btn btn-success btn-sm" href="{{$event->proposal}}" download="{{$event->proker->nama_event}}" >Download</a>
                                            @else
                                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#lihat{{$event->id}}" >Lihat </button>
                                            @endif
                                            </td>
                                            <td>
                                              @if($event->acc_wadir_3 == null || $event->acc_wadir_3 == 2 && count($event->revisi) > 0)
                                              <button class="btn btn-warning btn-sm" onclick="window.location='{{route("revisi.event", $event->id)}}'">Revisi</button>
                                              @elseif($event->acc_wadir_3 == 3 && count($event->revisi) > 0)
                                              <button class="btn btn-success btn-sm" onclick="window.location='{{route("pengguna.revisi.event.show", $event->id)}}'">Lihat Revisi</button>
                                              @endif
                                            </td>
                                            <td>
                                              @if($event->acc_wadir_3 == 2)
                                              <span class="badge badge-warning">Dalam <br> Revisi</span>
                                                @elseif($event->acc_wadir_3 == 3)
                                                <span class="badge badge-success">Selesai</span>
                                              @else
                                              <span class="badge badge-danger">Belum <br> ada <br> Revisi</span>
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
                                           <embed src="{{asset($event->proposal)}}" framborder="0" width="100%" height="450px">
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
