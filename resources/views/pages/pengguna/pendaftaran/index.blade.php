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
                                            <th>File</th>
                                            <th>Status</th>
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
                                            <td>
                                            <a class="btn btn-success btn-sm" href="{{$pendaftaran->file}}">Download</a>
                                            </td>
                                            <td>
                                              @if($pendaftaran->status === null)
                                              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#terima{{$pendaftaran->id}}">
                                                <i class="fa fa-check"></i>
                                              </button>
                                              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#tolak{{$pendaftaran->id}}">
                                                <i class="fa fa-window-close"></i>
                                              </button>
                                              @elseif($pendaftaran->status === 0)
                                                <span class="text-danger">Ditolak</span>
                                              @else
                                                <span class="text-success">Diterima</span>
                                              @endif
                                          </td>

                                          <td>
                                            <a href="{{ route('destroy.pendaftaran', $pendaftaran->id) }}" class="btn btn-danger btn-sm" 
                                            onclick="return confirm('apakah anda yakin ingin menghapus data ini?')"
                                            ><i class="fa fa-trash"></i></a> 
                                          </td>
                                          
                                        </tr>
                                        <div class="modal fade" id="terima{{$pendaftaran->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header bg-primary">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Terima Pendaftar</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <form class="" action="{{route('konfirmasi.diterima', $pendaftaran->id)}}" method="post">
                                                @csrf
                                                @method('put')
                                              <div class="modal-body">
                                                Konfirmasi Pendaftar dengan nama {{$pendaftaran->nama_mahasiswa}}
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Konfirmasi</button>
                                              </div>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal fade" id="tolak{{$pendaftaran->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header bg-danger">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Tolak Pendaftar</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <form class="" action="{{route('konfirmasi.ditolak', $pendaftaran->id)}}" method="post">
                                                @csrf
                                                @method('put')
                                              <div class="modal-body">
                                                Konfirmasi Pendaftar dengan nama {{$pendaftaran->nama_mahasiswa}}
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Konfirmasi</button>
                                              </div>
                                              </form>
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
