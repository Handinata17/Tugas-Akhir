@extends('templates.home')

@section('head')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

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
            <h4 class="page-title">Recruitment</h4>
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Input Recruitment</h4>
                <p class="text-muted mb-3">Isi form yang telah di sediakan, untuk uploud proposal LPJ bisa di kosongkan
                    terlebih dahulu</p>
                <form class="form-parsley" method="POST" action="{{route('store.recruitment')}}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Recruitment</label>
                        <input type="text"
                            class="form-control {{ $errors->has('nama_recruitment') ? 'is-invalid' : '' }}"
                            name="nama_recruitment" value="{{old('nama_recruitment')}}" required>
                        @if ($errors->has('nama_recruitment'))
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $errors->first('nama_recruitment') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Organisasi</label>
                            <select class="form-control" name="organisasi" id="organisasi">
                                <option value="BEM">BEM</option>
                                <option value="BPM">BPM</option>
                                <option value="HIMA">HIMA</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6" id="display-keterangan" style="display: none">
                            <label>Keterangan</label>
                            <select class="form-control" name="keterangan" id="keterangan"></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Tanggal Recruitment</label>
                        <input type="text" class="form-control" name="tanggal" id="daterange" readonly
                            style="background: white; cursor: pointer;" />
                    </div>

                    {{-- <div class="form-group">
                                            <label>Tanggal Mulai</label>
                                            <div class="col-sm-15">
                                            <input class="form-control" type="text" name="tanggal_mulai" value="{{old('tanggal_mulai')}}"
                    id="datepicker1" readonly style="cursor: pointer; background: white">
            </div>
        </div>
        <div class="form-group">
            <label>Tanggal Selesai</label>
            <div class="col-sm-15">
                <input class="form-control" type="text" name="tanggal_selesai" value="{{old('tanggal_selesai')}}"
                    id="datepicker2" readonly style="cursor: pointer; background: white">
            </div>
        </div> --}}
        {{-- <div class="form-group">
                                            <label>Tempat</label>
                                            <div class="col-sm-15">
                                                <select class="form-control" name="tempat">
                                                    <option>Kampus</option>
                                                    <option>Luar Kampus</option>
                                                </select>
                                            </div>
                                        </div> --}}
        {{-- <div class="form-group">
                                        <label>Alokasi Dana</label>
                                        <input type="text" class="form-control" name="alokasi_dana" placeholder="Masukan Dana RAB">
                                    </div> --}}
        <!--end form-group-->
        <!-- <div class="form-group">
                                        <label>Uploud Proposal</label>
                                        <input type="file" class="form-control" name="proposal"   accept=".doc,.docx,.pdf" placeholder="Enter alphanumeric value">
                                    </div> -->
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
            {{-- <button type="reset" class="btn btn-gradient-danger waves-effect m-l-5">Cancel</button> --}}
            <a class="btn btn-gradient-danger btn-close waves-effect m-l-5" href="{{ route('recruitment') }}">Cancel</a>
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
<footer class="footer text-center text-sm-left">ORMAWA KMPHB <span
        class="text-muted d-none d-sm-inline-block float-right">Politeknik Harapan Bersama</footer>
<!--end footer-->
</div>
<!-- end page content -->
</div>
<!-- end col -->


<script>
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
</script>

@endsection

@section('script')
{{--     
    <script>
        $( function() {
            $( "#datepicker1, #datepicker2" ).datepicker({
                dateFormat: 'yy-mm-dd',
                startDate: new Date(),
                minDate: new Date()
            });
        } );

        // $( function() {
        //     $( "#datepicker" ).datepicker({
        //         dateFormat: 'yy-mm-dd',
        //         startDate: new Date(),
        //         minDate: new Date()
        //     });
        // } );
    </script> --}}
@endsection