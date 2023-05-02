@extends('template.main')
@section('konten')
<div class="page-inner">
   
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-secondary">
                <div class="card-header">
                    <div class="card-title">Tambah Data Artikel</div>
                </div>
                <form action="{{ route('Teachers.store') }}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jd">Name</label>
                                            <input type="text" value="{{ old('nama')}}" name="nama" class="form-control {{ $errors->first('nama') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Judul">

                                            @error('nama')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jd">Phone</label>
                                            <input type="text" value="{{ old('phone')}}" name="phone" class="form-control {{ $errors->first('phone') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Judul">

                                            @error('phone')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jd">Email</label>
                                            <input type="text" value="{{ old('email')}}" name="email" class="form-control {{ $errors->first('email') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Judul">

                                            @error('email')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jd">Address</label>
                                            <input type="text" value="{{ old('address')}}" name="address" class="form-control {{ $errors->first('address') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Judul">

                                            @error('address')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jd">Perusahan</label>
                                            <input type="text" value="{{ old('perusahan')}}" name="perusahan" class="form-control {{ $errors->first('perusahan') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Judul">

                                            @error('perusahan')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="password">Photo</label>
                                            <input type="file" name="photo" class="form-control bg-secondary {{ $errors->first('photo') ? "is-invalid":""}}">

                                            @error('photo')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <center>
                            <button type="submit" class="btn btn-dark " id="alert_demo_4"> Show me</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection