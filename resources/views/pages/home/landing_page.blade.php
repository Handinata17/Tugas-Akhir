<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Ormawa</title>

<link rel="stylesheet" href="{{ asset ('landing_page/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/fontawesome-5.8.1.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/lity.min.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/slicknav.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/style.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/theme.css') }}">
<link rel="stylesheet" href="{{ asset ('landing_page/css/responsive.css') }}">
</head>
<body>


<div id="mainmenu-area">
<div class="header-area header-absolute">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 w-50">
<a href="index.html" class="header-logo">
<img src="{{ asset ('landing_page/image/phb2.png') }}" alt="">
</a>
</div>
<div class="col-lg-9 col-md-9 w-50 t-right">
<button class="toggle">
<span></span>
</button>
<div class="mainmenu">
<nav>
<ul>
<li><a href="#home">Home</a>
<!-- <ul>
<li><a href="index.html" class="active">Home 1</a></li>
<li><a href="home-2.html">Home 2</a></li>
<li><a href="home-3.html">Home 3</a></li>
<li><a href="home-4.html">Home 4</a></li>
<li><a href="home-5.html">Home 5</a></li>
<li><a href="home-6.html">Home 6</a></li>
<li><a href="home-7.html">Home 7</a></li>
<li><a href="home-8.html">Home 8</a></li>
<li><a href="home-9.html">Home 9</a></li>
</ul> -->
</li>
<li><a class="nav-link" href="#recruitmen">Recruitment</a></li>
{{-- <li><a class="nav-link" href="#event">Event</a></li> --}}
<li><a class="nav-link" href="#proker">Dana RAB</a></li>
<li><a href="#">Login</a>
<ul>
<li><a href="{{route('pengguna.login')}}" class="active">Pengguna</a></li>
<li><a href="{{route('superadmin.login')}}">Admin</a></li>
</ul>
</li>
        <div class="col-md-12 text-center">
            <div class="mb-5 element-animate">
</ul>
</nav>
</div>
</div>
<div class="row aic">
        <div class="col-md-12 text-center" data-wow-delay="0.2s">
<h1>
        <p class="text-info">Organisasi Keluarga Mahasiswa</p>
        <p class="text-danger">Politeknik Harapan Bersama </p>
        <p class="text-primary">Tegal</p>
    </h1>
</div>
</div>
</div>
</div>
</div>

<img src="{{ asset ('landing_page/image/gedung1.jpg') }}" id="home">
<div class="container">
<div class="row aic">
<div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
{{-- <h2>Organisasi Mahasiswa</h2> <h2>Politeknik Harapan Bersama</span></h2> --}}
</div>
<div class="col-lg-5 text-right col-md-12 wow fadeInUp" data-wow-delay="0.4s">
<!-- <div class="hero-img"> -->
<!-- <div class="waves-block">
<div class="waves wave-1"></div>
<div class="waves wave-2"></div>
<div class="waves wave-3"></div>
</div> -->
{{-- <img src="{{ asset ('landing_page/image/phb.png') }}" alt=""> --}}
{{-- <img src="{{ asset ('landing_page/image/Path-2.png') }}" alt="" class="path-1-img">
<img src="{{ asset ('landing_page/image/Path-1.png') }}" alt="" class="path-1-img path-2-img">
<img src="{{ asset ('landing_page/image/Path-3.png') }}" alt="" class="path-1-img path-3-img"> --}}
</div>
</div>
</div>
</div>
</div>

<div class="features-area pt-100" id="recruitmen">
<div class="container">
<div class="row">

<div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">
        <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                            <div class="row">
                                    <div class="col-sm-12">
                                        <div class="page-title-box">
                                            <div class="float-right">
                                            </div>
                                            <h4 class="page-title">Recruitment</h4></div>
                                        <!--end page-title-box-->
                                    </div>
                                    <!--end col-->
                                </div>

                                    <div class="row">
                                    <div class="col-lg-12">
                                        @if(Session::has('failed'))
                                            <div class="alert alert-danger" role="alert">
                                                   Pendaftaran Recruitment sudah tidak tersedia
                                                  </div>
                                        @endif
                                        @if($errors->all())
                                        <div class="alert alert-danger" role="alert">
                                            {{-- {{ dd($errors) }} --}}
                                                Pendaftaran Recruitment gagal! cek kembali

                                              </div>
                                        @endif
                                        @if(Session::has('success'))
                                        <div class="alert alert-success" role="alert">
                                               Pendaftaran Recruitment berhasil
                                              </div>
                                    @endif
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="mt-0 header-title">Join Recruitment</h4>
                                                <p class="text-muted mb-3">Isi form yang telah di sediakan</p>
                                                <form class="form-parsley" method="POST" action="{{route('store.pendaftaran')}}" enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-group">
                                                        <label>NIM</label>
                                                    <input type="text" id="nim" class="form-control" name="nim" type="text" class="form-control" value="{{old('nim')}}" placeholder="Masukan Nim">
                                                    </div>
                                                <div class="form-group">
                                                        <label>Nama Mahasiswa</label>
                                                        <input type="text" class="form-control" name="nama_mahasiswa" type="text" class="form-control" placeholder="Masukan Nama">
                                                    </div>
                                                <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email" type="text" class="form-control" placeholder="Masukan Email">
                                                    </div>

                                                <div class="form-group">
                                                    <label for="">Recruitment</label>
                                                    <select name="id_recruitment" class="form-control recruitment" id="recruitment" required>
                                                        <option value="">Pilih</option>
                                                        @foreach($recruitments as $recruitment)
                                                            <option value="{{ $recruitment->id }}">{{$recruitment->nama_recruitment}} {{$recruitment->keterangan}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="row" id="tanggal" style="display: none">
                                                        <div class="col-6">
                                                            <label for="">Tanggal Mulai</label>
                                                        <input type="text" class="form-control" id="mulai" type="text" class="form-control" readonly>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="">Tanggal Selesai</label>
                                                            <input type="text" class="form-control" id="selesai" type="text" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="card" style="display :none" id="data_recruitment">
                                                        <div class="card-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-sm">
                                                                        <p id="organisasi">Organisasi : </p>
                                                                        <p id="keterangan">Keterangan : </p>
                                                                        <p id="tanggal_mulai">Tanggal Mulai : </p>
                                                                    </div>
                                                                    <div class="col-sm">
                                                                        <p id="tanggal_selesai">Tanggal Selesai : </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end form-group-->
                                                    <div class="form-group">
                                                        <label>Uploud File</label>
                                                        <input type="file" class="form-control" name="file" accept=".rar,.zip" placeholder="Enter alphanumeric value">
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
                                    <!-- /.modal -->
                                </div>
                                    <!-- end page content -->
                            </div>
                                    <!-- end col -->


<script>

    const nim = document.querySelector('#nim');
    const appUrl = '{{ config('app.url') }}';

    nim.addEventListener('change', async function(){
        var str = nim.value.substring(2, 4);
        console.log(url+str);

        const data = await getData(str);
        console.log(data);

        //await fetch(appUrl+str).then(res => res.json()).then(out => console.log('Output: ', out));

    });

    // function getData(prodi) {
    //   return  fetch(url+prodi).then(res => res.json()).then(res => res)
    // }

</script>
    <script>
    // const keterangan = document.querySelector('#keterangan');
    // const prodi = document.querySelector('#prodi');
    // const displayKet = document.querySelector('#display-keterangan');

    // const prodi = [ 'D4 Teknik Informatika','D4 Akuntansi Sektor Publik' ,'D3 Perhotelan'
    //                 ,'D3 DKV ( Desain Komunikasi Visual )','D3 Teknik Elektro','D3 Teknik Mesin'
    //                 ,'D3 Teknik Komputer','D3 Akuntansi','D3 Kebidanan','D3 Farmasi'];

    // prodi.addEventListener('change', function(){
    //     let option;
    //    wq if(this.value === 'Prodi'){
    //         displayKet.style.display = '';
    //         keterangan.required = true;
    //         option = `<option>PIlih PRODI</option>`;
    //         prodi.map(h => option += `<option value="${h}">${h}</option>` );
    //         keterangan.innerHTML = option
    //     }
    //     else{
    //         displayKet.style.display = 'none';
    //         keterangan.required = false;
    //     }
    // })

                    const tanggal = document.querySelector('#tanggal');
                    const mulai = document.querySelector('#mulai');
                    const selesai = document.querySelector('#selesai');
                    const recruitmen = document.querySelector('#recruitment');
                    const url = '{{config('app.url')}}'
                    recruitmen.addEventListener('change', async function(){
                        const id = this.value
                        if(this.value !== ''){
                            const data = await fetch(url+'recruitment/'+id).then(res => res.json()).then(res => res)
                           tanggal.style.display = '';
                           mulai.value = data.tanggal_mulai;
                           selesai.value = data.tanggal_selesai
                        }else{
                           tanggal.style.display = 'none';
                           mulai.value = '';
                           selesai.value = '';
                        }
                    })

                </script>


        </div>
        {{-- <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="contact-img">
                <img src="{{ asset('landing_page/image/contac-img.png')}}" alt="">
                 </div>
             </div> --}}
</div>

</div>

{{-- EVENT --}}
{{-- <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                        <li class="breadcrumb-item active">Calendar</li>
                    </ol>
                </div>
                <h4 class="page-title">Calendar</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div> --}}
    <!-- end page title end breadcrumb -->
    {{-- <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <img src="../assets/images/widgets/calendar.svg" alt="" class="img-fluid" />
                        <ul class="list-group">
                            <li class="list-group-item align-items-center d-flex">
                                <div class="media">
                                    <img src="../assets/images/widgets/project1.jpg" class="mr-3 thumb-sm align-self-center rounded-circle" alt="..." />
                                    <div class="media-body align-self-center">
                                        <h5 class="mt-0 mb-1">Meeting with UI/UX Designers</h5>
                                        <p class="text-muted mb-0">Today 07:30 AM</p>
                                    </div>
                                    <!--end media body-->
                                </div>
                            </li>
                            <li class="list-group-item align-items-center">
                                <div class="media">
                                    <img src="../assets/images/users/user-5.jpg" class="mr-3 thumb-sm align-self-center rounded-circle" alt="..." />
                                    <div class="media-body align-self-center">
                                        <h5 class="mt-0 mb-1">Lunch with my friend</h5>
                                        <p class="text-muted mb-0">Today 12:30 PM</p>
                                    </div>
                                    <!--end media body-->
                                </div>
                            </li>
                            <li class="list-group-item align-items-center">
                                <div class="media">
                                    <img src="../assets/images/widgets/project3.jpg" class="mr-3 thumb-sm align-self-center rounded-circle" alt="..." />
                                    <div class="media-body align-self-center">
                                        <h5 class="mt-0 mb-1">Call for payment Project ID : #254136</h5>
                                        <p class="text-muted mb-0">Tomorrow 10:30 AM</p>
                                    </div>
                                    <!--end media body-->
                                </div>
                            </li>
                            <li class="list-group-item align-items-center">
                                <div class="media">
                                    <img src="../assets/images/users/user-4.jpg" class="mr-3 thumb-sm align-self-center rounded-circle" alt="..." />
                                    <div class="media-body align-self-center">
                                        <h5 class="mt-0 mb-1">Picnic with my Family</h5>
                                        <p class="text-muted mb-0">01 June 2019 - 09:30 AM</p>
                                    </div>
                                    <!--end media body-->
                                </div>
                            </li>
                            <li class="list-group-item align-items-center">
                                <div class="media">
                                    <img src="../assets/images/widgets/project4.jpg" class="mr-3 thumb-sm align-self-center rounded-circle" alt="..." />
                                    <div class="media-body align-self-center">
                                        <h5 class="mt-0 mb-1">Meeting with Developers</h5>
                                        <p class="text-muted mb-0">04 June 2019 - 07:30 AM</p>
                                    </div>
                                    <!--end media body-->
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->

            <!--end col-->
        </div> --}}






        {{-- <div class="screen-slider">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-7 text-center wow fadeIn" data-wow-delay="0.2s">
<div class="title">
<h6>SCREENSHOT</h6>
<h2>All App Screen <span>& App Flow</span></h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 wow fadeInUp" data-wow-delay="0.4s">
<div class="swiper-container gallery-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="slide-item">
<img src="{{ asset ('landing_page/image/screen2.png') }}" alt="" class="img-responsive">
</div>
</div>
<div class="swiper-slide">
<div class="slide-item">
<img src="{{ asset ('landing_page/image/screen3.png') }}" alt="" class="img-responsive">
</div>
</div>
<div class="swiper-slide">
<div class="slide-item">
<img src="{{ asset ('landing_page/image/screen2.png') }}" alt="" class="img-responsive">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> --}}

<div>
<div class="pricing-area price2 pd-80" id="proker">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-12 text-center wow fadeInUp" data-wow-delay="0.2s">
<div class="title white">
<h2>DATA RANCANG ANGGARAN BELANJA</h2>
<p>Berdasarkan dari lembaga </p>
</div>
</div>
<div class="page-wrapper">
        {{-- <h4 class="page-title">Data Proker</h4></div> --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="mt-0 header-title">Data List</h4>
                        <p class="text-muted mb-4 font-13">Data Proker</p> --}}
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                    <th>No</th>
                                    <th>Nama Event</th>
                                    <th>Organisasi</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Tempat</th>
                                    <th>Alokasi Dana</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($rabs as $rab)
                                {{-- @if($rab->pengguna->organisasi === Auth::user()->organisasi) --}}
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$rab->nama_event}}</td>
                                    <td>{{$rab->organisasi}}</td>
                                    <td>{{$rab->keterangan}}</td>
                                    <td>{{$rab->tanggal_mulai}}</td>
                                    <td>{{$rab->tanggal_selesai}}</td>
                                    <td>{{$rab->tempat}}</td>
                                    <td>{{$rab->alokasi_dana}}</td>
                                    {{-- <td><a href="{{route('edit.proker', $proker->id)}}"><i class="far fa-edit text-info mr-1"></i></a>
                                    <a href="{{route('destroy.proker', $proker->id)}}"><i class="far fa-trash-alt text-danger"></i></a></td> --}}
                                </tr>
                                {{-- @endif --}}
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
</div>
<!-- end page content -->
</div>




            </div>
        </div>
    </div>
</div>


{{-- <div class="animation-4">
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
</div>
</div>


<div class="case-study case-study2 padding-t">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 text-center wow fadeInUp" data-wow-delay="0.2s">
<div class="title">
<h4>Case Study</h4>
<h2>Our Project & Research</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="0.2s">
<div class="single-study9">
<img src="{{ asset ('landing_page/image/study9/study9-1.jpg') }}" alt="">
<div class="study-text">
<h3><a href="#">ICO Website Seo</a></h3>
<p>Cras eu elit congue, placerat dui ut, tincidunt nisl. Nulla leo elit, </p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="0.4s">
<div class="single-study9">
<img src="{{ asset ('landing_page/image/study9/study9-2.jpg') }}" alt="">
<div class="study-text">
<h3><a href="#">Mastermind Research</a></h3>
<p>Cras eu elit congue, placerat dui ut, tincidunt nisl. Nulla leo elit, </p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 wow fadeInRight hidden-sm" data-wow-delay="0.6s">
<div class="single-study9">
<img src="{{ asset ('landing_page/image/study9/study9-3.jpg') }}" alt="">
<div class="study-text">
<h3><a href="#">ICO Website Seo</a></h3>
<p>Cras eu elit congue, placerat dui ut, tincidunt nisl. Nulla leo elit, </p>
</div>
</div>
</div>
</div>
</div>
</div> --}}


{{-- <div class="subscribe pt-100">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 text-center wow fadeInUp" data-wow-delay="0.2s">
<div class="subscribe-bg-c">
<div class="title">
<span class="mdi mdi-google-nearby"></span>
<h2>Subscribe to <span>Our Newsletter</span></h2>
</div>
<div class="form-area">
<form action="#" method="POST">
<span class="form-icon">
<i class="mdi mdi-email-outline"></i>
</span>
<input type="email" id="email" placeholder="Enter Email Address ...">
<button type="submit" id="submit" class="button">SUBSCRIBE</button>
</form>
<p class="circle-text"><span class="mdi mdi-alert-circle-outline"></span> We never Send you any spam mail.</p>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="footer-area pd-100">
<div class="footer">
<div class="container">
<div class="row">
<div class="col-lg-6 col-sm-12 tc col-md-12">
<a href="index.html" class="footer-logo">
<img src="{{ asset ('landing_page/image/logo.png') }}" alt="">
</a>
<p># 1 Music App for Music Lover.</p>
</div>
<div class="col-lg-6 col-sm-12 tc col-md-12">
<div class="footer-btn">
<h4>Download App Now!</h4>
<a href="#" class="boxed-btn">
<div class="dfx aic">
<div class="btn-icon-img">
<img src="{{ asset ('landing_page/image/google-play.png') }}" alt="">
</div>
<div class="btn-content">
<h6><span>Getiton</span> Google Play</h6>
</div>
</div>
</a>
<a href="#" class="boxed-btn active right-btn">
<div class="dfx aic">
<div class="btn-icon-img">
<img src="{{ asset ('landing_page/image/app.png') }}" alt="">
</div>
<div class="btn-content">
<h6><span>Download on the</span> App Store</h6>
</div>
 </div>
</a>
</div>
</div>
</div>
</div>
</div> --}}
<div class="copyright">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 tc">
<p>ORMAWA KMPHB</p>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 tc">
<div class="copyright-section">
<ul>
<li><a href="">Privecy & Policy</a></li>
<li><a href="">Trems & Condition </a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="{{ asset ('landing_page/js/jquery-1.12.4.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/popper.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/bootstrap.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/owl.carousel.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/swiper.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/jquery.counterup.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/waypoints.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/jquery.sticky.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/scrolltotop.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/contact-form-script.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/jquery.ajaxchimp.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/wow.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/lity.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/smooth-scroll.min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/slicknav-min.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/jquery.barChart.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/jquery.barfiller.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/jquery.lineProgressbar.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="{{ asset ('landing_page/js/main.js') }}" type="d8c396bb02207cc85c9c2094-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="d8c396bb02207cc85c9c2094-|49" defer=""></script></body>

</html>
