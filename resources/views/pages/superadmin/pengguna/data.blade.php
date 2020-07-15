@extends('templates.home')

@section('sidebar')
    @include('templates.partials._sidebar')
@endsection

@section('content')
<div class="page-wrapper">
        <h4 class="page-title">Data Proker</h4></div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right">
                                <a href="{{route('create.pengguna')}}" class="btn btn-gradient-primary">Tambah</a>
                                </div>
                            <h4 class="page-title">Dashboard</h4></div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <p class="text-muted mb-4 font-13">Data Pengguna</p>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Organisasi</th>
                                            <th>Keterangan</th>
                                            <th>Jabatan</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($pengguna as $data)
                                        <tr>
                                            <td>{{$data->nama}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->organisasi}}</td>
                                            <td>{{$data->keterangan}}</td>
                                            <td>{{$data->jabatan}}</td>

                                            <td><a href="{{route('edit.pengguna', $data->id)}}"><i class="far fa-edit text-info mr-1"></i></a>
                                            <a href="{{route('destroy.pengguna', $data->id)}}"><i class="far fa-trash-alt text-danger"></i></a></td>
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

            <!-- container -->
            <!--  Modal content for the above example -->

            <!-- /.modal -->
            <footer class="footer text-center text-sm-left">ORMAWA KMPHB <span class="text-muted d-none d-sm-inline-block float-right">Politeknik Harapan Bersama</footer>
            <!--end footer-->


@endsection
