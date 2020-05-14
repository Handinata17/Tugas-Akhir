@extends('templates.home')

@section('sidebar')
    @include('templates.partials.adminbpm._sidebar')
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
                            <h4 class="page-title">Dana RAB</h4></div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>

                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Dana Rancang Anggaran Belanja</h4>
                                <p class="text-muted mb-3">Isi form yang telah di sediakan, untuk uploud anggaran sesuai RAB</p>
                                <form class="form-parsley" method="POST" action="{{route('create')}}" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <label>No</label>
                                        <input type="text" class="form-control" name="nama_event" placeholder="Type something">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama_event" placeholder="Type something">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                            <label>Tanggal</label>
                                            <div class="col-sm-15">
                                                <input class="form-control" type="date" name="tanggal" value="2011-08-19" id="example-date-input">
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <label>Uraian</label>
                                        <input type="text" class="form-control" name="deskripsi" placeholder="Type something">
                                    </div>
                                    <div class="form-group">
                                        <label>Total Anggaran</label>
                                        <input type="text" class="form-control" name="jumlah_anggaran" placeholder="Type something">
                                    </div>
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
                    </div>
                    <!-- end col -->
                
                    <!-- end col -->
            

@endsection