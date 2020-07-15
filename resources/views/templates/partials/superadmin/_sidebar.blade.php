<div class="leftbar-profile p-3 w-100">
        <div class="media position-relative">
          <div class="leftbar-user online"><img src="{{asset('template/images/users/user.png')}}" alt="" class="thumb-md rounded-circle"></div>
          <div class="media-body align-self-center text-truncate ml-3">


          <h5 class="mt-0 mb-1 font-weight-semiboldk">{{Auth::user()->name}}</h5>
         
          <!--end media-body-->
      </div>
  </div>
  <ul class="metismenu left-sidenav-menu slimscroll">
        <li class="menu-label">Main</li>
        <li class="leftbar-menu-item"><a href="{{route('pengguna')}}" class="menu-link"><i data-feather="aperture" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>Pengguna</a></li>
  </ul>



