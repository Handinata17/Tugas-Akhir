@extends('templates.home')

@section('sidebar')
    @include('templates.partials._sidebar')
@endsection

@section('content')
                    <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right">
                                <ol class="breadcrumb">
                                    <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li> -->
                                    <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li> -->
                                    <!-- <li class="breadcrumb-item active">Validation</li> -->
                                </ol>
                            </div>
                            <h4 class="page-title">Event</h4></div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>

                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Revisi</h4>
                                <p class="text-muted mb-3">Revisian</p>
                                <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#lihat" >Lihat </button>

                                <form class="form-parsley" method="POST" action="{{route('revisi.event', $event->id)}}" enctype="multipart/form-data">
                                    @method('PUT')
                                @csrf

                                    <div class="form-group">
                                        <label>Perbaikan</label>
                                        <input type="text" class="form-control" value="{{$event->revisi}}" name="revisi" placeholder="">
                                    </div>
                                    {{-- <div class="form-group">
                                        <label>Nama Event</label>
                                        <input type="text" class="form-control" value="{{$event->nama_event}}" name="nama_event" placeholder="Type something">
                                    </div> --}}
                                    <!--end form-group-->
                                        {{-- <div class="form-group">
                                        <label>Deskripsi</label>
                                        <input type="text" class="btn btn-gradient-primary waves-effect waves-light" value="{{$event->deskripsi}}" name="deskripsi" placeholder="Type something">
                                    </div> --}}
                                    <!--end form-group-->
                                    {{-- <div class="form-group">
                                        <label>Uploud Proposal</label>
                                        <input type="file" class="form-control" value="{{$event->proposal}}" name="proposal" accept=".doc,.docx,.pdf" placeholder="Enter alphanumeric value">
                                    </div> --}}
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-gradient-primary waves-effect waves-light">Submit</button>
                                        <button type="reset" class="btn btn-gradient-danger waves-effect m-l-5">Cancel</button>
                                    </div>
                                    <!--end form-group-->
                                </form>
                                <!--end form-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->


                        <div class="modal fade" id="lihat" tabindex="-1" role="dialog" aria-labelledby="contohModalScrollableTitle" aria-hidden="true">
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

                    </div>
                    <!-- end col -->
                    <!-- /.modal -->
                    <footer class="footer text-center text-sm-left">ORMAWA KMPHB <span class="text-muted d-none d-sm-inline-block float-right">Politeknik Harapan Bersama</footer>
                    <!--end footer-->
                </div>
                <!-- end page content -->
            </div>
                    <!-- end col -->


@endsection
