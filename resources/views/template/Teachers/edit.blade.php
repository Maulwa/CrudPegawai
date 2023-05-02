@extends('template.main')
@section('konten')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-secondary">
                <div class="card-header">
                    <div class="card-title">Edit Data Artikel</div>
                </div>
                <form action="{{ route('template.Teachers.update', $edit['id']) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jd">Nama</label>
                                            <input type="text" value="{{$edit['nama']}}" name="nama" class="form-control {{ $errors->first('nama') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Judul">
                                            @error('nama')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jd">Phone</label>
                                            <input type="text" value="{{$edit['phone']}}" name="phone" class="form-control {{ $errors->first('phone') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Judul">
                                            @error('phone')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jd">Email</label>
                                            <input type="text" value="{{$edit['email']}}" name="email" class="form-control {{ $errors->first('email') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Judul">
                                            @error('email')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jd">Address</label>
                                            <input type="text" value="{{$edit['address']}}" name="address" class="form-control {{ $errors->first('address') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Judul">
                                            @error('adrress')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jd">Perusahan</label>
                                            <input type="text" value="{{$edit['perusahan']}}" name="perusahan" class="form-control {{ $errors->first('perusahan') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Judul">
                                            @error('perusahan')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">Photo</label>
                                            @if($edit['photo'])
                                            <h3>
                                                <img src="{{asset('upload/'.$edit->photo)}}" alt="..." class="avatar">

                                                <input type="file" name="photo" class="mt-3 form-control {{ $errors->first('photo') ? "is-invalid":""}}">
                                                <small class="text-danger">*kosongkan jika tidak mau mengubah Gambar</small>
                                            </h3>
                                            @else
                                            <input type="file" name="gambar" class="form-control {{ $errors->first('gambar') ? "is-invalid":""}}">

                                            @endif

                                        </div>
                                    </div>
                                </div>
                         
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <center>
                            <button type="submit" class="btn btn-dark " id="alert_demo_4"><i class="fas fa-refresh"> Update</i></button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection