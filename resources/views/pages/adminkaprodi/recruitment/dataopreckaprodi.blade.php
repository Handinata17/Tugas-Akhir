@extends('templates.home')

@section('sidebar')
    @include('templates.partials.adminkaprodi._sidebar')
@endsection

@section('content')


                <li class="hide-phone app-search">
                    <form role="search" class="">
                        <input type="text" id="AllCompo" placeholder="Search..." class="
                        form-control"> <a href=""><i class="fas fa-search"></i></a></form>
                        </li>
                <div class="page-wrapper">
                <h4 class="page-title">Recruitment</h4></div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Data List</h4>
                                <p class="text-muted mb-4 font-13">Data Recruitment Lolos</p>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Prodi</th>
                                            <th>Semester</th>
                                            <th>Email</th>
                                            <th>Telephone</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        {{-- <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->nama_event}}</td>
                                            <td>{{$data->tanggal_mulai}}</td>
                                            <td>{{$data->tanggal_Selesai}}</td>
                                            <td>{{$data->deskripsi}}</td>
                                            <td> <button class="btn btn-primary" onclick="window.location='{{config("app.url").$data->proposal}}'">Download</button> </td>
                                            <td>{{$data->perbaikan}}</td>
                                            <td><a href="{{route('eventbpm.edit', $data->id)}}"><i class="far fa-edit text-info mr-1"></i></a> 
                                            <a href="{{route('eventbpm.destroy', $data->id)}}"><i class="far fa-trash-alt text-danger"></i></a></td>
                                        </tr> --}}
                                    
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