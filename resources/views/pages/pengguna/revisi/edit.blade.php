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
                            <h4 class="page-title">Riwayat</h4></div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>

                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Input Riwayat</h4>
                                <p class="text-muted mb-3">Isi form yang telah di sediakan, untuk uploud proposal LPJ bisa di kosongkan terlebih dahulu</p>
                                <form class="form-parsley" method="POST" action="{{route('update.riwayat', $riwayat->id)}}" enctype="multipart/form-data">
                                    @method('PUT')
                                @csrf
                                    <div class="form-group">
                                        <label>Nama Event</label>
                                        <input type="text" class="form-control" value="{{$riwayat->nama_event}}" name="nama_event" placeholder="">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                            <label>Organisasi</label>
                                            <div class="col-sm-4">
                                                <select class="for'm-control" name="organisasi" id="organisasi">
                                                    <option value="BEM">BEM</option>
                                                    <option value="BPM">BPM</option>
                                                    <option value="HIMA">HIMA</option>
                                                    <option value="UKM">UKM</option>
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
                                                <label>Revisi</label>
                                                <input type="text" class="form-control" value="{{$riwayat->revisi}}" name="revisi" placeholder="">
                                            </div>
                                    <div class="form-group">
                                            <label>Tanggal Revisi</label>
                                            <div class="col-sm-15">
                                                <input class="form-control" type="date" value="{{$riwayat->tanggal_revisi}}" name="tanggal_revisi" value="2020-08-19" id="example-date-input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label>Ke</label>
                                        <input type="text" class="form-control" value="{{$riwayat->ke}}" name="ke" placeholder="Type something">
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
                    <footer class="footer text-center text-sm-left">ORMAWA KMPHB <span class="text-muted d-none d-sm-inline-block float-right">Politeknik Harapan Bersama</footer>
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
