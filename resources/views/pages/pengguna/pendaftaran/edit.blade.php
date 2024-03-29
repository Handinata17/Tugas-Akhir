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
                                <h4 class="mt-0 header-title">Membuat Event</h4>
                                <p class="text-muted mb-3">Isi form yang telah di sediakan, untuk uploud proposal LPJ bisa di kosongkan terlebih dahulu</p>
                                <form class="form-parsley" method="POST" action="{{route('update.pendaftaran', $pendaftaran->id)}}" enctype="multipart/form-data">
                                    @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label>NIM</label>
                                    <input type="text" class="form-control" value="{{$pendaftaran->nim}}" name="deskripsi" placeholder="Masukan Nim">
                                </div>
                                <div class="form-group">
                                    <label>Nama Mahasiswa</label>
                                    <input type="text" class="form-control" value="{{$pendaftaran->nama_mahasiswa}}" name="deskripsi" placeholder="Masukan Nama">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="{{$pendaftaran->email}}" name="deskripsi" placeholder="Masukan Email">
                                </div>
                                {{-- <div class="form-group">
                                    <label>Organisasi</label>
                                    <div class="col-sm-4">
                                        <select class="for'm-control" name="organisasi" id="organisasi">
                                            <option value="BEM">BEM</option>
                                            <option value="BPM">BPM</option>
                                            <option value="HIMA">HIMA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" id="display-keterangan" style="display: none">
                                    <label>Keterangan</label>
                                    <div class="col-sm-12">
                                        <select class="for'm-control" name="keterangan" id="keterangan"></select>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                        <label>Tanggal Pendaftaran</label>
                                        <div class="col-sm-15">
                                            <input class="form-control" type="date" name="tanggal_pendaftaran" value="2011-08-19" id="example-date-input">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                            <label>Tanggal Mulai</label>
                                            <div class="col-sm-15">
                                                <input class="form-control" type="date" value="{{$event->tanggal_mulai}}" name="tanggal_mulai" value="2011-08-19" id="example-date-input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Selesai</label>
                                            <div class="col-sm-15">
                                                <input class="form-control" type="date" value="{{$event->tanggal_selesai}}" name="tanggal_selesai" value="2011-08-19" id="example-date-input">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="form-group">
                                            <label>Tempat</label>
                                            <div class="col-sm-15">
                                                <select class="form-control"  name="tempat">
                                                    <option value="{{$event->tempat}}"
                                                     @if($event->tempat === 'Kmpus')
                                                     selected
                                                     @endif
                                                        >Kampus</option>
                                                    <option value="{{$event->tempat}}"
                                                    @if($event->tempat === 'Kmpus')
                                                     selected
                                                     @endif
                                                        >Luar Kampus</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="form-group">
                                    <label>Alokasi Dana</label>
                                    <input type="text" class="form-control" name="alokasi_dana" placeholder="Type something">
                                </div> --}}
                                        {{-- <div class="form-group">
                                        <label>Deskripsi</label>
                                        <input type="text" class="form-control" value="{{$event->deskripsi}}" name="deskripsi" placeholder="Type something">
                                    </div> --}}
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label>Uploud Gambar</label>
                                        <input type="file" class="form-control" value="{{$pendaftaran->gambar}}" name="gambar" accept=".jpg,.jpeg,.png" placeholder="Enter alphanumeric value">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Uploud Lpj</label>
                                        <input data-parsley-type="alphanum" type="file" class="form-control" required placeholder="Enter alphanumeric value">
                                    </div> -->
                                    <!--end form-group-->
                                    <!-- <div class="form-group"> -->
                                        <!-- <label>Perbaikan</label> -->
                                        <!-- <textarea required class="form-control" name="perbaikan" rows="5"></textarea> -->
                                    <!-- </div> -->
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
                    <footer class="footer text-center text-sm-left">ORMAWA KMPHB <span class="text-muted d-none d-sm-inline-block float-right">Politeknik Harapan Bersama</footer>
                    <!--end footer-->
                </div>
                <!-- end page content -->
            </div>
                    <!-- end col -->


{{-- <script>
 const keterangan = document.querySelector('#keterangan');
 const organisasi = document.querySelector('#organisasi');
 const displayKet = document.querySelector('#display-keterangan');

  const hima = [ 'D4 Teknik Informatika','D4 Akuntansi Sektor Publik' ,'D3 Perhotelan'
                ,'D3 DKV ( Desain Komunikasi Visual )','D3 Teknik Elektro','D3 Teknik Mesin'
                ,'D3 Teknik Komputer','D3 Akuntansi','D3 Kebidanan','D3 Farmasi'];

  organisasi.addEventListener('change', function(){
    let option;
    if(this.value === 'HIMA'){
    displayKet.style.display = '';
    keterangan.required = true;
    option = `<option>PIlih HIMA</option>`;
    hima.map(h => option += `<option value="${h}">${h}</option>` );
    keterangan.innerHTML = option
    }
    else{
    displayKet.style.display = 'none';
    keterangan.required = false;
    }
    })
</script> --}}

@endsection
