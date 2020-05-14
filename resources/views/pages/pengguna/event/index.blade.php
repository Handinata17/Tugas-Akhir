@extends('templates.home')

@section('sidebar')
    @include('templates.partials._sidebar')
@endsection

@section('content')


                
                <div class="page-wrapper">
                <h4 class="page-title">Data Event</h4></div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Data List</h4>
                                <p class="text-muted mb-4 font-13">Data Event</p>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Nama Event</th>
                                            <th>Pembuat</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Deskripsi</th>
                                            <th>Proposal</th>
                                            <th>Perbaikan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($events as $event)
                                        @if($event->pengguna->organisasi === Auth::user()->organisasi)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$event->nama_event}}</td>
                                            <td>{{$event->pengguna->nama}}</td>
                                            <td>{{$event->tanggal_mulai}}</td>
                                            <td>{{$event->tanggal_selesai}}</td>
                                            <td>{{$event->deskripsi}}</td>
                                            <td> <button class="btn btn-primary" onclick="window.location='{{config("app.url").$event->proposal}}'">Download</button> </td>
                                            <td>{{$event->perbaikan}}</td>
                                            <td><a href="{{route('edit.event', $event->id)}}"><i class="far fa-edit text-info mr-1"></i></a> 
                                            <a href="{{route('destroy.event', $event->id)}}"><i class="far fa-trash-alt text-danger"></i></a></td>
                                        </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- container -->
            <!--  Modal content for the above example -->
        
            <!-- /.modal -->
            <footer class="footer text-center text-sm-left">&copy; 2019 - 2020 Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span></footer>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>

@endsection