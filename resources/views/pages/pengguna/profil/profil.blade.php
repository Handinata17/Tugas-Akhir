@extends('templates.home')

@section('sidebar')
    @include('templates.partials._sidebar')
@endsection

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">Profile</li> --}}
                </ol>
            </div>
            <h4 class="page-title">Profile</h4>
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->
</div>
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body met-pro-bg">
                <div class="met-profile">
                    <div class="row">
                        <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                            <div class="met-profile-main">
                                <div class="met-profile-main-pic">
                                    <img src="{{asset('template/images/users/user-4.jpg')}}" alt="" class="rounded-circle" /> <span class="fro-profile_main-pic-change"><i class="fas fa-camera"></i></span>
                                </div>
                                <div class="met-profile_user-detail">
                                <li class="met-user-nama">{{ $user->nama }}</li>
                                    <li class="met-user-organisasi">{{ $user->organisasi}}</li>
                                    <li class="met-user-keterangan">{{ $user->keterangan}}</li>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-4 ml-auto">
                            <ul class="list-unstyled personal-detail">
                                {{-- <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b>phone </b>: +91 23456 78910</li> --}}
                                <li class="met-user-email">{{ $user->email }}</li>
                                {{-- <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i> <b>Location</b> : USA</li> --}}
                            </ul>
                            {{-- <div class="button-list btn-social-icon">
                                <button type="button" class="btn btn-blue btn-circle"><i class="fab fa-facebook-f"></i></button>
                                <button type="button" class="btn btn-secondary btn-circle ml-2"><i class="fab fa-twitter"></i></button>
                                <button type="button" class="btn btn-pink btn-circle ml-2"><i class="fab fa-dribbble"></i></button>
                            </div> --}}
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end f_profile-->
            </div>
            <!--end card-body-->

            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-12">
            <div class="card">
                    <div class="card-body">
                        <form method="post" class="card-box">
                            <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="{{asset('template/images/users/user-4.jpg')}}" />
                            {{-- <span class="input-icon icon-right"><textarea rows="4" class="form-control" placeholder="Post a new message"></textarea></span>
                            <div class="float-right my-3"><a class="btn btn-sm btn-gradient-primary text-white px-4 mb-0">Send</a></div> --}}
                            <ul class="list-inline mt-1">
                                <li class="list-inline-item">
                                    <a href="#"><i class="fas fa-video font-18 mr-2 mt-2 text-primary"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><i class="fas fa-camera font-18 mt-2 text-primary"></i></a>
                                </li>
                            </ul>
                        </form>
                        <div class="">
                            <form class="form-horizontal form-material mb-0">
                                <div class="form-group"><input type="text" placeholder="Full Name" class="form-control" /></div>
                                <div class="form-group row">
                                    <div class="col-md-4"><input type="email" placeholder="Email" class="form-control" name="example-email" id="example-email" /></div>
                                    <div class="col-md-4"><input type="password" placeholder="password" class="form-control" /></div>
                                    <div class="col-md-4"><input type="password" placeholder="Re-password" class="form-control" /></div>
                                </div>
                                {{-- <div class="form-group row">
                                    <div class="col-md-6"><input type="text" placeholder="Phone No" class="form-control" /></div>
                                    <div class="col-md-6">
                                        <select class="form-control">
                                            <option>London</option>
                                            <option>India</option>
                                            <option>Usa</option>
                                            <option>Canada</option>
                                            <option>Thailand</option>
                                        </select>
                                    </div>
                                </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <button type="submit" class="btn btn-gradient-primary btn-sm px-4 mt-3 float-right mb-0"></li>Update Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        <div class="tab-content detail-list" id="pills-tabContent">

            <div class="tab-pane fade" id="settings_detail">
                <div class="row">
                    <div class="col-lg-12 mx-auto">

                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end settings detail-->
        </div>
        <!--end tab-content-->
    </div>
    <!--end col-->
</div>

@endsection

