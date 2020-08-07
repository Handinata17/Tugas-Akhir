@extends('templates.home')

@section('sidebar')
    @include('templates.partials._sidebar')
@endsection

@section('content')

        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                Data Sudah Terkirim
                    </div>
        @endif
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

                @if($errors->all())
                <div class="alert alert-danger" role="alert">

                        Membuat Event Gagal! Cek Kembali

                      </div>
                @endif
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                       Membuat Event Berhasil
                      </div>
            @endif


                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Membuat Event</h4>
                                <p class="text-muted mb-3">Isi form yang telah di sediakan</p>
                                <form class="form-parsley" method="POST" action="{{route('store.event')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Proker</label>
                                        <select name="id_proker" class="form-control proker" value="{{old('proker')}}" id="proker" required>
                                            @foreach($prokers as $proker)
                                              @if(!$proker->event)
                                                <option value="{{ $proker->id }}">{{$proker->nama_event}}</option>
                                              @endif
                                            @endforeach
                                        </select>

                                        <div class="card" style="display :none" id="data_proker">
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
                                                            <p id="tempat">Tempat : </p>
                                                            <p id="alokasi_dana">Alokasi Dana : </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                                <label>Tipe</label>
                                                <select name="tipe" value="{{old('tipe')}}" class="form-control">
                                                    <option value="mahasiswa">Mahasiswa</option>
                                                    <option value="anggota ormawa">Anggota Ormawa</option>
                                                    <option value="umum">Umum</option>
                                                </select>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label>Uploud Proposal</label>
                                        <input type="file" class="form-control" name="proposal" value="{{old('proposal')}}" accept=".pdf" placeholder="Enter alphanumeric value">
                                        @if ($errors->has('proposal'))
                                        <span class="valid-feedback" role="alert">
                                            <p><b>{{ $errors->first('proposal') }}</b></p>
                                        </span>
                                        @endif
                                    </div>

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
    $(document).ready(function(){
        $(".proker").on('change',function(e){
            if($(this).val() != ''){
                var id = e.target.value;
                var url = '{{ route("show.proker", ":id") }}'
                url =url.replace(':id', id)
                $.get(url, function(data){
                    $('#data_proker').css("display", "");

                    $('#organisasi').empty()
                    $('#keterangan').empty()
                    $('#tanggal_mulai').empty()
                    $('#tanggal_selesai').empty()
                    $('#tempat').empty()
                    $('#alokasi_dana').empty()

                    $('#organisasi').append("Organisasi : "+data.organisasi)
                    $('#keterangan').append("Keterangan : "+data.keterangan)
                    $('#tanggal_mulai').append("Tanggal Mulai : "+data.tanggal_mulai)
                    $('#tanggal_selesai').append("Tanggal Selesai : "+data.tanggal_selesai)
                    $('#tempat').append("Tempat : "+data.tempat)
                    $('#alokasi_dana').append("Alokasi Dana : "+data.alokasi_dana)

                })
            }
        });
    });
</script>
@endsection
