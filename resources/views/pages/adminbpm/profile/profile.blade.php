@extends('templates.home')

@section('sidebar')
    @include('templates.partials.adminbpm._sidebar')
@endsection

@section('content')

            <div class="pro-metrica-end"><a href="" class="help" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Chat"><i data-feather="message-circle" class="align-self-center menu-icon icon-md icon-dual mb-4"></i> </a>
                <a href="" class="profile"><img src="../assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle thumb-sm"></a>
            </div>
        </div>
        <!--end main-icon-menu-->
        <div class="main-menu-inner">
            <!-- LOGO -->
            <div class="topbar-left"><a href="../dashboard/crm-index.html" class="logo"><span><img src="../assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark"> <img src="../assets/images/logo.png" alt="logo-large" class="logo-lg logo-light"></span></a></div>
            <!--end logo-->
            <div class="menu-body slimscroll">
                <div id="MetricaDashboard" class="main-icon-menu-pane">
                    <div class="title-box">
                        <h6 class="menu-title">Dashboard</h6></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Profile</h4></div>
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
                                                <div class="met-profile-main-pic"><img src="../assets/images/users/user-4.jpg" alt="" class="rounded-circle"> <span class="fro-profile_main-pic-change"><i class="fas fa-camera"></i></span></div>
                                                <div class="met-profile_user-detail">
                                                    <h5 class="met-user-name">Rosa Dodson</h5>
                                                    <p class="mb-0 met-user-name-post">UI/UX Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4 ml-auto">
                                            <ul class="list-unstyled personal-detail">
                                                <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b>phone </b>: +91 23456 78910</li>
                                                <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b>Email </b>: mannat.theme@gmail.com</li>
                                                <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i> <b>Location</b> : USA</li>
                                            </ul>
                                            <div class="button-list btn-social-icon">
                                                <button type="button" class="btn btn-blue btn-circle"><i class="fab fa-facebook-f"></i></button>
                                                <button type="button" class="btn btn-secondary btn-circle ml-2"><i class="fab fa-twitter"></i></button>
                                                <button type="button" class="btn btn-pink btn-circle ml-2"><i class="fab fa-dribbble"></i></button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end f_profile-->
                            </div>
                            <!--end card-body-->
                            <div class="card-body">
                                <ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="general_detail_tab" data-toggle="pill" href="#general_detail">General</a></li>
                                    <li class="nav-item"><a class="nav-link" id="activity_detail_tab" data-toggle="pill" href="#activity_detail">Activity</a></li>
                                    <li class="nav-item"><a class="nav-link" id="portfolio_detail_tab" data-toggle="pill" href="#portfolio_detail">Portfolio</a></li>
                                    <li class="nav-item"><a class="nav-link" id="settings_detail_tab" data-toggle="pill" href="#settings_detail">Settings</a></li>
                                </ul>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
</body>

</html>