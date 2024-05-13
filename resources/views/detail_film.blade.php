{{-- <h1>Judul Film : {{ $film->judul }}</h1> 
<p>Deskripsi Film : {{ $film->deskripsi }}</p> 
<span>
    Detail Film 
    <h3>Kode Film : {{ $film->DetailFilm->code_film }}</h3> 
    <h3>Url IMDB : <a href="{{ $film->DetailFilm->url_imdb }}" target="_blank"> 
        Klik Disini</a>
    </h3>
</span>  --}}
{{-- end one to one --}}

{{-- start one to many --}}
{{-- @foreach ($film->MediaFilm as $item) 
    <p>Media Title : {{ $item->media_title }}</p> 
    @if ($item->media_type) 
        Url Media : <a href="{{ $item->url_media }}">Klik Disini</a> 
    @else 
        <img src="{{ $item->url_media }}" alt="" height="200"> 
        @endif
    <hr>
@endforeach 
end one to many --}}

@extends('master.layout')
@section('content')

<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">{{$film->judul}}</h1>
            <p class="lead text-muted">{{$film->deskripsi}}</p>
            <p>
                <a href="{{$film->DetailFilm->url_imdb}}" class="btn btn-primary my-2">Lihat Halaman IMDB</a>
                <a href="{{ url('/film')}}" class="btn btn-secondary my-2">Kembali Ke Home</a>
            </p>
        </div>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($film->MediaFilm as $item)
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card shadow-sm">
                        @if ($item->media_type)
                        <iframe width="300" height="200" src="{{$item->url_media}}"></iframe>
                        @else
                        <img src="{{ $item->url_media }}" alt="" height="200px" width="200px" >
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection