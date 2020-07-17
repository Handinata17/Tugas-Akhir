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
                                            <th>Tanggal Revisi</th>
                                            <th>Ke</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($revisis as $revisi)
                                        @if($revisi->pengguna->organisasi === Auth::user()->organisasi)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$revisi->nama_event}}</td>
                                            <td>{{$revisi->organisasi}}</td>
                                            <td>{{$revisi->keterangan}}</td>
                                            <td>{{$revisi->revisian}}</td>
                                            <td>{{$revisi->tanggal_revisi}}</td>
                                            <td>{{$revisi->ke}}</td>
                                            <td>{{$revisi->status}}</td>
                                            @if($revisi>acc == '2')
                                            <td><span class="badge badge-success">Close</span></td>
                                            @endif
                                            <td>
                                                    <td><span class="badge badge-success">Open</span></td>
                                    </td>
                                        </tr>
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
