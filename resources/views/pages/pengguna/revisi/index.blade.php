@extends('templates.home')

@section('sidebar')
    @include('templates.partials._sidebar')
@endsection

@section('content')



                <div class="page-wrapper">
                <h4 class="page-title">Riwayat Revisi</h4></div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Riwayat Revisi</h4>
                                <p class="text-muted mb-4 font-13">List Revisi</p>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Nama Event</th>
                                            <th>Organisasi</th>
                                            <th>Keterangan</th>
                                            <th>Revisi</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($revisis as $revisi)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$revisi->proker->nama_event}}</td>
                                            <td>{{$revisi->proker->organisasi}}</td>
                                            <td>{{$revisi->proker->keterangan}}</td>
                                            <td>Telah di revisi sebanyak {{count($revisi->revisi)}} kali</td>
                                            <td>
                                              @if($revisi->acc_wadir_3 == '3')
                                              <span class="badge badge-success">Close</span>
                                              @else
                                              <span class="badge badge-success">Open</span>
                                              @endif
                                            </td>
                                            <td>
                                              <button class="btn btn-success btn-sm" onclick="window.location='{{route("pengguna.revisi.event.show", $revisi->id)}}'">Lihat Revisi</button>
                                            </td>
                                        </tr>
                                        </tr>
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
