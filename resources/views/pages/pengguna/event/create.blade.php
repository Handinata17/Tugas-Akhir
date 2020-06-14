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
                                <form class="form-parsley" method="POST" action="{{route('store.event')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Proker</label>
                                    <select name="" class="form-control proker" id="proker">
                                        @foreach($prokers as $proker)
                                            <option value="{{ $proker->id }}">{{$proker->nama_event}}</option>
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
                                        <label>Nama Event</label>
                                        <input type="text" class="form-control" name="nama_event" placeholder="Type something">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                            <label>Tanggal Mulai</label>
                                            <div class="col-sm-15">
                                                <input class="form-control" type="date" name="tanggal_mulai" value="2011-08-19" id="example-date-input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Selesai</label>
                                            <div class="col-sm-15">
                                                <input class="form-control" type="date" name="tanggal_selesai" value="2011-08-19" id="example-date-input">
                                            </div>
                                        </div>
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
                                        <label>Deskripsi</label>
                                        <input type="text" class="form-control" name="deskripsi" placeholder="Type something">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label>Uploud Proposal</label>
                                        <input type="file" class="form-control" name="proposal"   accept=".doc,.docx,.pdf" placeholder="Enter alphanumeric value">
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