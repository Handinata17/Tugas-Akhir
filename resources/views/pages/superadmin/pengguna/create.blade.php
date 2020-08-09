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
                            <h4 class="page-title">Pengguna</h4></div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                @if($errors->all())
                <div class="alert alert-danger" role="alert">
                  Gagal menambahkan pengguna! Silahkan cek kembali
                </div>
                @endif

                 <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Membuat Pengguna</h4>
                                <p class="text-muted mb-3">Isi form yang telah di sediakan, untuk menambahkan data penggna akun</p>
                                <form class="form-parsley" method="POST" action="{{route('store.pengguna')}}" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" value="{{old('nama')}}" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" placeholder="Masukan Nama">
                                        @if ($errors->has('nama'))
                                       <span class="invalid-feedback text-danger" role="alert">
                                         <strong>{{ $errors->first('nama') }}</strong>
                                       </span>
                                       @endif
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
                                            <label>Organisasi</label>
                                            <div class="col-sm-4">
                                                <select class="for'm-control" name="organisasi" id="organisasi">
                                                    <option value="BEM">BEM</option>
                                                    <option value="BPM">BPM</option>
                                                    {{-- <option value="HIMA">HIMA</option>
                                                    <option value="UKM">UKM</option> --}}
                                                    <option value="">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group" id="display-keterangan" style="display: none">
                                            <label>Keterangan</label>
                                            <div class="col-sm-12">
                                                <select class="for'm-control" name="keterangan" id="keterangan"></select>
                                            </div>
                                        </div>
                                    <div class="form-group">
                                            <label>Jabatan</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" name="jabatan">
                                                    <option value="Ketua" id="ketua">Ketua</option>
                                                    <option value="Wakil" id="wakil">Wakil</option>
                                                    <option value="Sekretaris" id="sekretaris">Sekretaris</option>
                                                    <option value="Bendahara" id="bendahara">Bendahara</option>
                                                    <option value="Anggota" id="anggota">Anggota</option>
                                                </select>
                                            </div>
                                    </div>

                                    <!--end form-group-->
                                    <div class="form-group mb-2 ml-3">
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
          <footer class="footer text-center text-sm-left">ORMAWA KMPHB <span class="text-muted d-none d-sm-inline-block float-right">Politeknik Harapan Bersama</footer>
          <!--end footer-->
      </div>
          <!-- end col -->
  </div>

<script>
    const keterangan = document.querySelector('#keterangan');
    const organisasi = document.querySelector('#organisasi');
    const ketua = document.querySelector('#ketua');
    const wakil = document.querySelector('#wakil');
    const sekretaris = document.querySelector('#sekretaris');
    const bendahara = document.querySelector('#bendahara');
    const anggota = document.querySelector('#anggota');
    const displayKet = document.querySelector('#display-keterangan');

    const hima = [ 'D4 Teknik Informatika','D4 Akuntansi Sektor Publik' ,'D3 Perhotelan'
                    ,'D3 DKV ( Desain Komunikasi Visual )','D3 Teknik Elektro','D3 Teknik Mesin'
                    ,'D3 Teknik Komputer','D3 Akuntansi','D3 Kebidanan','D3 Farmasi'];
    const ukm = ['Teater','Racana','Catur','Cinema71','Fotografi rana9','Tari','Basket','Futsal','Voli','Bulu tangkis',
        'Popala','Paduan suara','Karate','Silat','Formasi','Robotika','Musik','Tenis meja','Jqh almizan','Politeknik english club',
        'SMIT'];

    organisasi.addEventListener('change', function(){
        let option;
        if(this.value === 'HIMA'){
            displayKet.style.display = '';
            keterangan.required = true;
            option = `<option value="">PIlih HIMA</option>`;
            hima.map(h => option += `<option value="${h}">${h}</option>` );
            keterangan.innerHTML = option;
            ketua.disabled = false;
            bendahara.disabled = false;
            sekretaris.disabled = false;
            anggota.disabled = false;
            ketua.selected = true;
            keterangan.value = ''

        }else if(this.value === 'UKM'){
            displayKet.style.display = '';
            keterangan.required = true;
            option = `<option value="">PIlih UKM</option>`;
            ukm.map(u => option += `<option value="${u}">${u}</option>` );
            keterangan.innerHTML = option;
            ketua.disabled = false;
            bendahara.disabled = false;
            sekretaris.disabled = false;
            anggota.disabled = false;
            ketua.selected = true;
            keterangan.value = ''

        }else if(this.value === ''){
            displayKet.style.display = '';
            keterangan.required = true;
            option = `<option>Direktur 3</option>`;
            keterangan.innerHTML = option;
            ketua.disabled = true;
            bendahara.disabled = true;
            sekretaris.disabled = true;
            anggota.disabled = true;
            wakil.selected = true;
        }
        else{
            displayKet.style.display = 'none';
            keterangan.value = ''
            keterangan.required = false;
            ketua.disabled = false;
            bendahara.disabled = false;
            sekretaris.disabled = false;
            anggota.disabled = false;
            ketua.selected = true;
        }
    })
</script>
@endsection
