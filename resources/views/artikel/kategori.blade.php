@extends('master.layout') 
@section('content') 
<div class ="container"> 
    <div class="row justify-content-center"> 
        @foreach ($kategoris as $erer)
        <div class="col-md-8"> 
            <div class="card"> 
                <img src="{{$erer->foto}}" class="card-img-top" alt="..."> 
                <div class="card-body"> 
                    <p class="card-text">{{$erer->judul}}</p> 
                    <p>Penulis  : <b>{{$erer->penulis}}</b></p> 
                    <p>Kategori : <b>{{$erer->kategori}}</b></p> 
                    <p>Konten : <b>{{$erer->konten}}</b></p> 
                </div> 
            </div> 
        </div> 
        @endforeach
    </div> 
</div> 
@endsection
