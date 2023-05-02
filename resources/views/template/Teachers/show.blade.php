@extends('template.main')
@section('konten')
<div class="page-inner">
<div class="row">
    <div class="col-md-12">
       <div class="card-header">
        <h4 class="page-title">Detail Artikel</h4>
        <a href="{{ route ('table') }}">
        <button type="button" class="btn btn-lg btn-lg-square btn-outline-primary m-2 "><i class="fa fa-home"></i></button>
        </a>
        </div>
        
        <div class="card-body">
            <center>
            <img style="width: 50%" src="{{ asset('upload/'.$show['photo'])}}" alt="">
            <h3 class="pt-3 page-title">{{$show['name']}}</h3>
            <h5 class="pt-3 page-title">Nomor Hp : {{$show['phone']}}</h5>
            <h5 class="pt-3 page-title">Email    : {{$show['email']}}</h5>
            <h5 class="pt-3 page-title">Alamat   :{{$show['address']}}</h5>
        </center>
       </div>
    </div>
</div>

</div>


@endsection
