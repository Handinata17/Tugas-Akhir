@extends('templates.home')

@section('sidebar')
    @include('templates.partials._sidebar')
@endsection

@section('content')



                <div class="page-wrapper">
                <h4 class="page-title">Data Pendaftaran</h4></div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Data List</h4>
                                <p class="text-muted mb-4 font-13">Data Pendaftaran</p>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Nama Recruitment</th>
                                            {{-- <th>Pembuat</th> --}}
                                            {{-- <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th> --}}
                                            {{-- <th>organisasi</th> --}}
                                            {{-- <th>Keterangan</th> --}}
                                            {{-- <th>Tipe</th> --}}
                                            <th>File</th>
                                            {{-- <th>Perbaikan</th> --}}
                                            {{-- <th>Status</th> --}}
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                     @foreach($pendaftarans as $pendaftaran)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$pendaftaran->nim }}
                                            <td>{{$pendaftaran->nama_mahasiswa}}</td>
                                            <td>{{$pendaftaran->email}}</td>
                                            <td>{{$pendaftaran->recruitment->nama_recruitment}}</td>
                                            {{-- <td>{{$pendaftaran->pengguna->organisasi}}</td> --}}
                                            {{-- <td>{{$pendaftaran->pengguna->keterangan}}</td> --}}


                                            <td>
                                            <a class="btn btn-success btn-sm" href="{{$pendaftaran->file}}">Download</a>
                                            </td>
                                            {{-- src="{{ $pendaftaran->file }}" size = "2048;"> --}}
                                            {{-- height="100px" width="100px;" --}}
                                            {{-- <td>{{$event->proker->tanggal_mulai}}</td>
                                            <td>{{$event->proker->tanggal_selesai}}</td> --}}
                                            {{-- <td>{{ $event->proker->tempat}}</td>
                                            <td>{{ $event->proker->alokasi_dana}}</td> --}}
                                            {{-- <td>{{$event->tipe}}</td> --}}

                                            {{-- <td> <button class="btn btn-primary" onclick="window.location='{{config("app.url").$pendaftaran->gambar}}'">Download</button> </td> --}}

                                            {{-- <td>{{$event->perbaikan}}</td> --}}
                                            <td><a href="{{route('edit.pendaftaran', $pendaftaran->id)}}"><i class="far fa-edit text-info mr-1"></i></a>
                                            <a href="{{route('destroy.pendaftaran', $pendaftaran->id)}}"><i class="far fa-trash-alt text-danger"></i></a></td>
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
