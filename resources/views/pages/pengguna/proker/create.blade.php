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
            <h4 class="page-title">Proker</h4>
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Input Proker</h4>
                <p class="text-muted mb-3">Isi form yang telah di sediakan</p>
                <form class="form-parsley" method="POST" action="{{route('store.proker')}}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Event</label>
                        <input type="text" class="form-control {{ $errors->has('nama_event') ? 'is-invalid' : '' }}"
                            name="nama_event" value="{{old('nama_event')}}" required>
                        @if ($errors->has('nama_event'))
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $errors->first('nama_event') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Organisasi</label>
                            <select class="form-control" name="organisasi" id="organisasi">
                                <option value="BEM">BEM</option>
                                <option value="BPM">BPM</option>
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

{{-- 
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <div class="col-sm-15">
                            <input class="form-control" type="text" name="tanggal_mulai"
                                value="{{old('tanggal_mulai')}}" id="datepicker1" readonly
                                style="cursor: pointer; background: white">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <div class="col-sm-15">
                            <input class="form-control" type="text" name="tanggal_selesai"
                                value="{{old('tanggal_selesai')}}" id="datepicker2" readonly
                                style="cursor: pointer; background: white">
                        </div>
                    </div> --}}


                    <div class="form-group">
                        <label>Tempat</label>
                        <div class="col-sm-15">
                            <select class="form-control" name="tempat">
                                <option>Kampus</option>
                                <option>Luar Kampus</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alokasi Dana</label>
                        <input type="number" value="{{old('alokasi_dana')}}"
                            class="form-control {{ $errors->has('alokasi_dana') ? 'is-invalid' : '' }}"
                            name="alokasi_dana" placeholder="Masukan Dana RAB" required>
                        @if ($errors->has('alokasi_dana'))
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $errors->first('alokasi_dana') }}</strong>
                        </span>
                        @endif

                    </div>

                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-gradient-primary waves-effect waves-light">Submit</button>
                        <button onclick="window.location='{{route('proker')}}'" type="reset"
                            class="btn btn-gradient-danger waves-effect m-l-5">Cancel</button>

                        {{-- <button class="btn btn-gradient-danger waves-effect m-l-5" a href="{{ route('proker') }}">Cancel</button></a>
                        --}}

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
    const ukm = ['Teater','Racana','Catur','Cinema71','Fotografi rana9','Tari','Basket','Futsal','Voli','Bulu tangkis',
        'Popala','Paduan suara','Karate','Silat','Formasi','Robotika','Musik','Tenis meja','Jqh almizan','Politeknik english club',
        'SMIT'];

    organisasi.addEventListener('change', function(){
        let option;
        if(this.value === 'HIMA'){
            displayKet.style.display = '';
            keterangan.required = true;
            option = `<option>PIlih HIMA</option>`;
            hima.map(h => option += `<option value="${h}">${h}</option>` );
            keterangan.innerHTML = option
        }else if(this.value === 'UKM'){
            displayKet.style.display = '';
            keterangan.required = true;
            option = `<option>PIlih UKM</option>`;
            ukm.map(u => option += `<option value="${u}">${u}</option>` );
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
{{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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