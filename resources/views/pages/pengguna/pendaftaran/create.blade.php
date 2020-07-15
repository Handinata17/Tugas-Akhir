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
                            <h4 class="page-title">Recruitment</h4></div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>

                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Join Recruitment</h4>
                                <p class="text-muted mb-3">Isi form yang telah di sediakan</p>
                                <form class="form-parsley" method="POST" action="{{route('store.pendaftaran')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Recruitment</label>
                                    <select name="id_recruitment" class="form-control recruitment" id="recruitment">
                                        @foreach($recruitments as $recruitment)
                                            <option value="{{ $recruitment->id }}">{{$recruitment->nama_recruitment}}</option>
                                        @endforeach
                                    </select>

                                    <div class="form-group">
                                        <label>NIM</label>
                                        <input type="text" class="form-control" type="text" class="form-control" placeholder="Masukan Nim">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Mahasiswa</label>
                                        <input type="text" class="form-control" type="text" class="form-control" placeholder="Masukan Nama">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" type="text" class="form-control" placeholder="Masukan Email">
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
                                            <input class="form-control" type="date" name="tanggal_pendaftaran" value="2020-08-19" id="example-date-input">
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
                                        <label>Uploud Gambar</label>
                                        <input type="file" class="form-control" name="gambar"   accept=".jpg,.jpeg,.png" placeholder="Enter alphanumeric value">
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


@endsection

@section('script')
<script>

    // const keterangan = document.querySelector('#keterangan');
    // const organisasi = document.querySelector('#organisasi');
    // const displayKet = document.querySelector('#display-keterangan');

    // const hima = [ 'D4 Teknik Informatika','D4 Akuntansi Sektor Publik' ,'D3 Perhotelan'
    //                 ,'D3 DKV ( Desain Komunikasi Visual )','D3 Teknik Elektro','D3 Teknik Mesin'
    //                 ,'D3 Teknik Komputer','D3 Akuntansi','D3 Kebidanan','D3 Farmasi'];

    // organisasi.addEventListener('change', function(){
    //     let option;
    //     if(this.value === 'HIMA'){
    //         displayKet.style.display = '';
    //         keterangan.required = true;
    //         option = `<option>PIlih HIMA</option>`;
    //         hima.map(h => option += `<option value="${h}">${h}</option>` );
    //         keterangan.innerHTML = option
    //     }
    //     else{
    //         displayKet.style.display = 'none';
    //         keterangan.required = false;
    //     }
    // })


    $(document).ready(function(){
        $(".recruitment").on('change',function(e){
            if($(this).val() != ''){
                var id = e.target.value;
                var url = '{{ route("show.recruitment", ":id") }}'
                url =url.replace(':id', id)
                $.get(url, function(data){
                    $('#data_recruitment').css("display", "");

                    $('#nama_recruitment').empty()
                    $('#tanggal_mulai').empty()
                    $('#tanggal_selesai').empty()

                    $('#nama_reruitment').append("nama_recruitment : "+data.nama_recruitment)
                    $('#tanggal_mulai').append("Tanggal Mulai : "+data.tanggal_mulai)
                    $('#tanggal_selesai').append("Tanggal Selesai : "+data.tanggal_selesai)

                })
            }
        });
    });
</script>
@endsection
