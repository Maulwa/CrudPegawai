@extends('template.main')
@section('konten')

<div class="page-inner">
    {{-- buat ngecek apakah variabel status ada nilainya atau gak --}}
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card bg-secondary">
                <div class="card-header">
                    <h4 class="page-title float-left " >Data Artikel</h4>
                    <a href="{{ route('template.Teachers.tambah') }}">
                        <button class="btn btn-md btn-primary btn-round float-right">
                            <i class="fas fa-plus-circle"></i> Tambah
                        </button>
                    </a>
                </div>
                <div class="card-body">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th >No</th>
                                <th style="width:10%">Name</th>
                                <th style="width:10%">phone</th>
                                <th style="width:10%">Email</th>
                                <th style="width:20%">Address</th>
                                <th style="width:10%">Photo</th>
                                <th>Perusahan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- lakukan looping data disini --}}
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data as $item);
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->address }}</td>
                                <td>
                                    <div class="avatar">
                                    <img src="{{asset('upload/'.$item->photo)}}" alt="..." class="avatar-img rounded-circle" style="height: 40px;widht: 40px;">
                                </div>
                            </td>
                            <td>
                                {{ $item->Perusahan }}
                            </td>
                                <td>
                                    <a href="{{ route('template.Teachers.destroy',$item->id) }}">
                                        <button type="button" class="btn btn-icon btn-round btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button></a>
                                        <a href="{{ route('template.Teachers.show',$item->id)}}">
                                            <button type="button" class="btn btn-icon btn-round btn-danger">
                                                <i class="fa fa-info-circle"></i>
                                            </button></a>
                                            <a href="{{ route('template.Teachers.edit',$item->id) }}" style="text-decoration: none">
                                                <button type="button" class="btn btn-icon btn-round btn-secondary">
                                                    <i class="fas fa-edit"></i>
                                                </button></a> 
                                </td>
                            </tr>
                            @php
                            $no++;
                            @endphp
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection