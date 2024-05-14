@extends('master.layout') 
@section('content') 
<div class ="container"> 
    <div class="row justify-content-center"> 
        <div class="col-md-8"> 
            <div class="card"> 
                <img src="{{$art->foto}}" class="card-img-top" alt="..."> 
                <div class="card-body"> 
                    <p class="card-text">{{$art->judul}}</p> 
                    <p>Penulis  : <b>{{$art->penulis}}</b></p> 
                    <p>Kategori : <b>{{$art->kategori}}</b></p> 
                    <p>Konten : <b>{{$art->konten}}</b></p> 

                </div> 
            </div> 
        </div> 
    </div> 
</div> 
@endsection
