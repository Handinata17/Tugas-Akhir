@extends('templates.home')

@section('sidebar')
    @include('templates.partials.superadmin._sidebar')
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
                            <h4 class="page-title">Recruitment</h4></div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Open Recruitment</h4>
                                <p class="text-muted mb-3">Isi form yang telah di sediakan, disertakan dengan uploud file yang sudah di tetapkan</p>
                                <!-- <form class="form-parsley" method="POST" action="{{route('event.store')}}" enctype="multipart/form-data"> -->
                                <!-- @csrf -->
                                <form class="form-parsley" action="#">
                                    <div class="form-group">
                                        <label>Nim</label>
                                        <input type="text" class="form-control" type="text" class="form-control" placeholder="Type something">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" type="text" class="form-control" placeholder="Type something">
                                    </div>
                                    <div class="form-group">
                                        <label>Prodi</label>
                                        <input type="text" class="form-control" type="text" class="form-control" placeholder="Type something">
                                    </div>
                                    <div class="form-group">
                                        <label>Semester</label>
                                        <input type="text" class="form-control" type="text" class="form-control" placeholder="Type something">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" type="text" class="form-control" placeholder="Type something">
                                    </div>
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input type="text" class="form-control" type="text" class="form-control" placeholder="Type something">
                                    </div>
                                    <div class="form-group">
                                            <label>Organisasi</label>
                                            <div class="col-sm-15">
                                                <select class="form-control">
                                                    <option>BPM</option>
                                                    <option>BEM</option>
                                                    <option>HIMA PRODI</option>
                                                </select>
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <label>Visi</label>
                                        <textarea required class="form-control" name="perbaikan" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Misi</label>
                                        <textarea required class="form-control" name="perbaikan" rows="5"></textarea>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label>Uploud File</label>
                                        <input type="file" class="form-control" name="proposal"   accept=".doc,.docx,.pdf" placeholder="Enter alphanumeric value">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Uploud Lpj</label>
                                        <input data-parsley-type="alphanum" type="file" class="form-control" required placeholder="Enter alphanumeric value">
                                    </div> -->
                                    <!--end form-group-->
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