@extends('templates.home')

@section('sidebar')
    @include('templates.partials._sidebar')
@endsection

@section('content')
                    <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right">
                            </div>
                            <h4 class="page-title">Revisi Event</h4></div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>

                <!-- end page title end breadcrumb -->
                <div class="row">
                  <div class="col-lg-12">
        						<div class="card">
        							<div class="card-body">
        								<div class="main-timeline mt-3">
                          @foreach($revisi as $r)
        									<div class="timeline"><span class="timeline-icon"></span>  <span class="year">{{$r->created_at->format('d-m-Y')}}</span>
        										<div class="timeline-content">
        											<h5 class="title">{{$r->pengguna->nama}} {{$r->pengguna->organisasi ? $r->pengguna->organisasi : $r->pengguna->keterangan}}</h5><span class="post">{{$r->created_at->format('d-m-Y')}}</span>
        											<p class="description">{!! $r->revisi !!}</p>
        										</div>
        									</div>
                          @endforeach
        								</div>
                        @if($event->acc_wadir_3 == 3)
                        <div class="d-flex justify-content-center mt-5">
                          <button type="button" class="btn btn-success" onclick="window.location='{{route("event")}}'" name="button">Selesai</button>
                        </div>
                        @endif
        							</div>
                </div>
                <!-- end page content -->
            </div>
                    <!-- end col -->


@endsection
