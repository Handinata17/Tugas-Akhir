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
                        <img src="{{ asset ('landing_page/image/ormawa1.png') }}" alt="">
                    </a>
                    </div>
                    <div class="col-lg-9 col-md-9 w-50 t-right">
                        <button class="toggle slicknav_open">
                    <span></span>
                    </button>
                        <div class="mainmenu">
                            <nav>
                                <ul>
                                    <li>
                                        <h3><a class="text-white" href="#home">Home</a></h3>
                                    </li>
                                    <li>
                                        <h3><a class="text-white" href="#recruitmen">Recruitment</a></h3>
                                    </li>

                                    <li>
                                        <h3><a class="text-white" href="#proker">Dana RAB</a></h3>
                                    </li>
                                    <li>
                                        <h3><a class="text-white" href="#">Login</a></h3>
                                        <ul>
                                            <li>
                                                <h3><a href="{{route('pengguna.login')}}" class="active">Pengguna</a></h3>
                                            </li>
                                            <li>
                                                <h3><a href="{{route('superadmin.login')}}" class="active">Admin</a></h3>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center mt-5" data-wow-delay="0.2s">
                            <h1>
                                <p class="text-white ml-5">Organisasi Keluarga Mahasiswa</p>
                                <p class="text-danger ml-5">Politeknik Harapan Bersama </p>
                                <p class="text-primary ml-5">Tegal</p>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <img src="{{ asset ('template/images/bg.jpg') }}" style="height: 600px; width: 100%" id="home">
            <div class="container">
                <div class="row aic">
                    <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
                    </div>
                    <div class="col-lg-5 text-right col-md-12 wow fadeInUp" data-wow-delay="0.4s">
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
                                                            <h2>
                                                                <p style="text-align:center">OPEN RECRUITMENT</p>
                                                            </h2>
                                                            <h4>
                                                                <p style="text-align:center">Pengurus Badan Perwakilan Mahasiswa dan Badan Eksekutif Mahasiswa</h4>
                                                            </p>
                                                            <!--end page-title-box-->
                                                        </div>
                                                        <!--end col-->
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            @if(Session::has('failed'))
                                                            <div class="alert alert-danger" role="alert">
                                                                Pendaftaran Recruitment sudah tidak tersedia
                                                            </div>
                                                            @endif

															@if($errors->all())
                                                            <div class="alert alert-danger" role="alert">
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
                                                                            <input type="number" id="nim" class="form-control" name="nim" type="text" value="{{old('nim')}}" placeholder="Masukan Nim">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Nama Mahasiswa</label>
                                                                            <input type="text" class="form-control {{ $errors->has('nama_mahasiswa') ? 'is-invalid' : '' }}" name="nama_mahasiswa" value="{{old('nama_mahasiswa')}}" required> @if ($errors->has('nama_mahasiswa'))
											                                                                           <span class="invalid-feedback text-danger" role="alert">
											                                                      <strong>{{ $errors->first('nama_mahasiswa') }}</strong>
											                                                    </span> @endif
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <label>Email</label>
                                                                                <input type="text" value="{{old('email')}}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Masukan Email">
                                                                                @if ($errors->has('email'))
                                                                               <span class="invalid-feedback text-danger" role="alert">
                                                                                 <strong>{{ $errors->first('email') }}</strong>
                                                                               </span>
                                                                               @endif
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
                                                                                            <div class="col-sm-12">
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

                                                                    <!--end form-->
                                                                    </div>
																																	</form>
                                                                    <!--end card-body-->
                                                                </div>
                                                                <!--end card-->
                                                            </div>

                                                            <!-- end col -->
                                                            <!-- /.modal -->
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <p>Persyaratan Pendaftaran Pengurus BPM dan BEM Periode 2020/2021 :</p>
                                                                    <P>1. Mengisi Form Pendaftaran</p>
                                                                    <p>2. Scan Ijazah Terakhir SMA sederajat ( Semester 1 ) </p>
                                                                    <p>3. Scan KHS ( Semester 3,5 )</p>
                                                                    <p>3. Scan Nilai UN ( Mahasiswa Semester 1 )</p>
                                                                    <p>4. Scan Sertifikat Kejuaraan ( Jika Ada )</p>
                                                                    <p>5. File Pas Photo Berwarna 4X6</p>


                                                                    <p> Note : Berkas di scan kemudian di jadikan file zip</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end page content -->
                                                    </div>
                                                    <!-- end col -->

                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="hero-area o-hi" id="home"> -->
                                        <div class="container">
                                            <div class="row aic">
                                                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.2s"></div>
                                                <div class="col-lg-5 text-right col-md-12 wow fadeInUp" data-wow-delay="0.4s"></div>
	                                                <div class="features-area pt-100" id="recruitmen">
                                                    <div class="container mb-5">
                                                        <div class="row">
                                                            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">
                                                                <div class="row">
                                                                    {{--<div class="col-sm-12 mb-5">
                                                                        <div class="page-title-box">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="page-title-box">
                                                                                        <div class="float-right"></div>
                                                                                        <h2>
                                                                                            <p style="text-align:center">OPEN RECRUITMENT</p>
                                                                                        </h2>
                                                                                        <h4>
                                                                                            <p style="text-align:center">Pengurus Badan Perwakilan Mahasiswa dan Badan Eksekutif Mahasiswa</h4>
                                                                                        </p>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">@if(Session::has('failed'))
                                                                                        <div class="alert alert-danger" role="alert">Pendaftaran Recruitment sudah tidak tersedia</div>@endif @if($errors->all())
                                                                                        <div class="alert alert-danger" role="alert">{{ dd($errors) }} Pendaftaran Recruitment gagal! cek kembali</div>@endif @if(Session::has('success'))
                                                                                        <div class="alert alert-success" role="alert">Pendaftaran Recruitment berhasil</div>@endif
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <h4 class="mt-0 header-title">Join Recruitment</h4>
                                                                                                <p class="text-muted mb-3">Isi form yang telah di sediakan</p>
                                                                                                <form class="form-parsley" method="POST" action="{{route('store.pendaftaran')}}" enctype="multipart/form-data">@csrf
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
																																																					<option value="">Pilih</option>@foreach($recruitments as $recruitment)
																																																					<option value="{{ $recruitment->id }}">{{$recruitment->nama_recruitment}} {{$recruitment->keterangan}}</option>@endforeach</select>
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
                                                                                                                            <p id="organisasi">Organisasi :</p>
                                                                                                                            <p id="keterangan">Keterangan :</p>
                                                                                                                            <p id="tanggal_mulai">Tanggal Mulai :</p>
                                                                                                                        </div>
                                                                                                                        <div class="col-sm">
                                                                                                                            <p id="tanggal_selesai">Tanggal Selesai :</p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label>Uploud File</label>
                                                                                                            <input type="file" class="form-control" name="file" accept=".rar,.zip" placeholder="Enter alphanumeric value">
                                                                                                        </div>

                                                                                                        <div class="form-group mb-0">
                                                                                                            <button type="submit" class="btn btn-gradient-primary waves-effect waves-light">Submit</button>
                                                                                                            <button type="reset" class="btn btn-gradient-danger waves-effect m-l-5">Cancel</button>
                                                                                                        </div>

                                                                                                </form>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <p>Persyaratan Pendaftaran Pengurus BPM dan BEM Periode 2020/2021 :</p>
                                                                                                <P>1. Mengisi Form Pendaftaran</p>
                                                                                                <p>2. Scan Ijazah Terakhir ( Semester 1 )</p>
                                                                                                <p>3. Scan KHS ( Semester 3,5 )</p>
                                                                                                <p>3. Scan Nilai UN ( Mahasiswa Semester 1 )</p>
                                                                                                <p>4. Scan Sertifikat ( Jika Ada )</p>
                                                                                                <p>5. File Pas Photo Berwarna 4X6</p>
                                                                                                <p>Note : Berkas di scan kemudian di jadikan file zip</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div> --}}
                                                                    <div>
                                                                        <div class="pricing-area price2 pd-80" id="dana">
                                                                            <div class="container">
                                                                                <div class="row justify-content-center">
                                                                                    <div class="col-lg-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                                                                                        <div class="title white">
                                                                                            <h2>DATA RANCANG ANGGARAN BELANJA</h2>
                                                                                            <p>Berdasarkan dari lembaga</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="page-wrapper">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="card">
                                                                                                    <div class="card-body">
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
                                                                                                                </tr>
                                                                                                            </thead>
                                                                                                            <tbody>@foreach($rabs as $rab)
                                                                                                                <tr>
                                                                                                                    <td>{{$loop->iteration}}</td>
                                                                                                                    <td>{{$rab->nama_event}}</td>
                                                                                                                    <td>{{$rab->organisasi}}</td>
                                                                                                                    <td>{{$rab->keterangan}}</td>
                                                                                                                    <td>{{$rab->tanggal_mulai}}</td>
                                                                                                                    <td>{{$rab->tanggal_selesai}}</td>
                                                                                                                    <td>{{$rab->tempat}}</td>
                                                                                                                    <td>{{$rab->alokasi_dana}}</td>
                                                                                                                </tr>
                                                                                                                @endforeach
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="copyright">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 tc">
                                                            <p>ORMAWA KMPHB</p>
                                                        </div>
                                                        <br>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 tc">
                                                            <div class="copyright-section">
                                                                <ul>
                                                                    {{--
                                                                    <li><a href="">Privecy & Policy</a></li> --}}
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
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="d8c396bb02207cc85c9c2094-|49" defer=""></script>
    <script>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
        @if(Session::has('emailSuccess'))
        Swal.fire(
          'konfirmasi Email',
          'Email anda berhasil di konfirmasi',
          'success'
        )
        @endif

        @if(Session::has('emailFailed'))
        Swal.fire(
          'konfirmasi Email',
          'Email anda sudah di konfirmasi',
          'error'
        )
        @endif
    </script>
</body>

</html>
