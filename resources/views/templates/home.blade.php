<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mannatthemes.com/metrica/light/projects/projects-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2020 14:16:17 GMT -->

@include('templates.partials._head')

<body class="dark-sidenav">
    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="topbar-left"><a href="../dashboard/crm-index.html" class="logo"><span><img src="{{asset('template/images/phb.png')}}" alt="logo-small" class="logo-sm"> </span><span><img src="{{asset('template/images/ormawa.png')}}" alt="logo-large" class="logo-lg logo-light"> <img src="{{asset('template/images/ormawa.png')}}" alt="logo-large" class="logo-lg logo-dark"></span></a></div>
        <!--end logo-->
        <div class="leftbar-profile p-3 w-100">
            <div class="media position-relative">
                <div class="leftbar-user online"><img src="{{asset('template/images/users/user.png')}}" alt="" class="thumb-md rounded-circle"></div>
                <div class="media-body align-self-center text-truncate ml-3">
                    <h5 class="mt-0 mb-1 font-weight-semiboldk">{{Auth::user()->nama}}</h5>
                    <p class="text-muted text-uppercase mb-0 font-12">{{Auth::user()->organisasi}}</p>
                    <p class="text-muted text-uppercase mb-0 font-12">{{Auth::user()->keterangan}}</p>
                </div>
                <!--end media-body-->
            </div>
        </div>
        <ul class="metismenu left-sidenav-menu slimscroll">
           @yield('sidebar')
        </ul>
    </div>
    <!-- end left-sidenav-->
    <!-- Top Bar Start -->
   @include('templates.partials._topbar')
    <!-- Top Bar End -->
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content-tab">
            <div class="container-fluid">
              <!-- Page-Title -->
           @yield('content')
           </div>
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
    <!-- jQuery  -->
  @include('templates.partials._script')
</body>
</html>