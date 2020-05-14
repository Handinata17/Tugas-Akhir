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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                    <li class="breadcrumb-item active">Validation</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Validation</h4></div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>

<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Validation type</h4>
                                <p class="text-muted mb-3">Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.</p>
                                <form class="form-parsley" method="POST" action="{{route('update.events',$datas->id)}}" enctype="multipart/form-data">
                                @csrf
                                {{method_field('PATCH')}}
                                    <div class="form-group">
                                        <label>Nama Event</label>
                                        <input type="text" class="form-control" name="nama_event" placeholder="Type something">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                            <label>Date</label>
                                            <div class="col-sm-15">
                                                <input class="form-control" type="date" name="tanggal_mulai" value="2011-08-19" id="example-date-input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Date</label>
                                            <div class="col-sm-15">
                                                <input class="form-control" type="date" name="tanggal_selesai" value="2011-08-19" id="example-date-input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat</label>
                                            <div class="col-sm-15">
                                                <select class="form-control"  name="tempat">
                                                    <option value="{{$eventbpm->tempat}}" 
                                                     @if($eventbem->tempat === 'Kmpus')
                                                     selected
                                                     @endif
                                                        >Kampus</option>
                                                    <option value="{{$eventbpm->tempat}}"
                                                    @if($eventbem->tempat === 'Kmpus')
                                                     selected
                                                     @endif
                                                        >Luar Kampus</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" name="deskripsi" placeholder="Type something">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label>Uploud Proposal</label>
                                        <input type="file" class="form-control" name="proposal"   accept=".doc,.docx,.pdf" placeholder="Enter alphanumeric value">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Uploud Lpj</label>
                                        <input data-parsley-type="alphanum" type="file" class="form-control" required placeholder="Enter alphanumeric value">
                                    </div> -->
                                    <!--end form-group-->
                                    <!-- <div class="form-group"> -->
                                        <!-- <label>Perbaikan</label> -->
                                        <!-- <textarea required class="form-control" name="perbaikan" rows="5"></textarea> -->
                                    </div>
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