@extends('templates.home')

@section('sidebar')
    @include('templates.partials._sidebar')
@endsection

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">Profile</li> --}}
                </ol>
            </div>
            <h4 class="page-title">Profile</h4>
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->
</div>
<!-- end page title end breadcrumb -->

<!--end row-->
@if($errors->all())
    <div class="alert alert-danger" role="alert">
        Update profil gagal {{ $errors->first() }}
    </div>
@elseif(Session::has('failed'))
<div class="alert alert-danger" role="alert">
        Update profil gagal {{ Session::get('failed') }}
    </div>

@elseif(Session::has('success'))
    <div class="alert alert-success" role="alert">
            Update profil berhasil {{ Session::get('success') }}
        </div>
@endif

        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                            <form class="form-horizontal form-material mb-0" method="post" action="{{route('pengguna.update')}}">
                                    @csrf
                                    @method('PATCH')
                                <h5>Pribadi</h5>
                                <div class="form-group">
                                <input type="text" name="nama" placeholder="Nama" value="{{Auth::user()->nama}}" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" value="{{Auth::user()->email}}" class="form-control" />
                                </div>

                                <button type="submit" class="btn btn-gradient-primary btn-sm px-4 mt-3 float-right mb-0"></li>Simpan</button>

                            </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                          <form class="form-horizontal form-material mb-0" method="post" action="{{route('pengguna.update.password')}}">
                            @csrf
                            @method('PATCH')
                            <h5>Ubah Password</h5>
                                    <div class="form-group">
                                        <label for="">Password Lama</label>
                                    <input type="password" name="old_password" placeholder="" value="" class="form-control @if(Session::has('failed')) is-invalid @endif" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password Baru</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ulangi Password Baru</label>
                                    <input type="password" name="password_confirmation" placeholder="" value="" class="form-control" />
                                    </div>
                                    <button type="submit" class="btn btn-gradient-primary btn-sm px-4 mt-3 float-right mb-0"></li>Simpan</button>

                                </form>
                        </div>
                    </div>
                </div>
        </div>

@endsection

