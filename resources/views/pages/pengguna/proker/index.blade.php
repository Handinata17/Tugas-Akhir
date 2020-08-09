@extends('templates.home')

@section('sidebar')
    @include('templates.partials._sidebar')
@endsection

@section('content')



                <div class="page-wrapper">
                <h4 class="page-title">Data Proker</h4></div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Data List</h4>
                                <div class="float-right">
                                <a href="{{route('store.proker')}}" class="btn btn-gradient-primary">Tambah</a>
                                </div>
                                <p class="text-muted mb-4 font-13">Data Proker</p>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Nama Event</th>
                                            <th>Organisasi</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Tempat</th>
                                            <th>Alokasi Dana</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($prokers as $proker)
                                        @if($proker->pengguna->organisasi === Auth::user()->organisasi )
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$proker->nama_event}}</td>
                                            <td>{{$proker->organisasi}}</td>
                                            <td>{{ date('d-m-Y', strtotime($proker->tanggal_mulai) )}}</td>
                                            <td>{{ date('d-m-Y', strtotime($proker->tanggal_selesai) )}}</td>
                                            <td>{{$proker->tempat}}</td>
                                            {{-- <td>Rp. {{ $proker->alokasi_dana }},00</td> --}}
                                            <td>Rp. {{ number_format($proker->alokasi_dana, 0, ',','.')}}</td>
                                            <td><a href="{{route('edit.proker', $proker->id)}}"><i class="far fa-edit text-info mr-1"
                                                onclick="return confirm('apakah anda yakin ingin mengedit data ini?')"></i></a>
                                            <a href="{{route('destroy.proker', $proker->id)}}"><i class="far fa-trash-alt text-danger"
                                                onclick="return confirm('apakah anda yakin ingin menghapus data ini?')"></i></a></td>
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
