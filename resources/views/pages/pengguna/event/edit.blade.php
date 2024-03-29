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
                                <h4 class="mt-0 header-title">Edit Event</h4>
                                <embed src="{{config("app.url").$event->proposal}}" framborder="0" width="100%" height="350px" class="mb-2">
                                <p class="text-muted mb-3">Isi form yang telah di sediakan</p>
                                <form class="form-parsley" method="POST" action="{{route('update.event', $event->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label>Uploud Proposal</label>
                                        <input type="file" class="form-control" name="proposal"  value="{{ $event->proposal }}" accept=".pdf" placeholder="Enter alphanumeric value">
                                    </div>

                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-gradient-primary waves-effect waves-light">Submit</button>
                                        {{-- <button type="reset" class="btn btn-gradient-danger waves-effect m-l-5">Cancel</button> --}}
                                        <a class="btn btn-gradient-danger btn-close waves-effect m-l-5" href="{{ route('event') }}">Cancel</a>
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
