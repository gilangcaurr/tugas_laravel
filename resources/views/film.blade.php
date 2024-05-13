{{-- @php 
    $film = \App\Models\Film::all(); 
    $orangTua = \App\Models\Film::find(1); 
    $anak = \App\Models\DetailFilm::find(1); 


    

@endphp 

@foreach ($film as $item) 
    <h2>ID Film :  {{ $item->id }}</h2>
    <h2>Judul Film : {{ $item->judul }}</h2>  
    <a href="{{ url('film/'.$item->id) }}">Klik Disini</a>
    <h2>Deskripsi Film : {{ $item->deskripsi }}</h2>  
    <h1>Daftar Film</h3>
        <h3>Code Film : {{$item->DetailFilm->code_film}}</h3>
        <h3>Url IMDB : {{$item->DetailFilm->url_imdb}}</h3>
    <hr> 
@endforeach  

{{-- <h1 style="color:blue">Single Film></h1>
<h2>ID Film :  {{ $orangTua->id }}</h2>
    <h2>Judul Film : {{ $orangTua->judul }}</h2> 
    <h2>Deskripsi Film : {{ $orangTua->deskripsi }}</h2>  
    <h1>Daftar Film</h3>
        <h3>Code Film : {{$orangTua->DetailFilm->code_film}}</h3>
        <h3>Url IMDB : {{$orangTua->DetailFilm->url_imdb}}</h3>
    <hr>  --}}

{{-- Menampilkan salah satu Data (Menggunakan Variabel anak) --}}
{{-- <h1 style="color:darkgreen">Single Film (ForeignKey)</h1>  
<h2>ID Film :  {{ $anak->Film->id }}</h2>
    <h2>Judul Film : {{  $anak->Film->judul }}</h2> 
    <h2>Deskripsi Film : {{ $anak->Film->deskripsi }}</h2>  
    <h1>Daftar Film</h3>
        <h3>Code Film : {{$anak->Film->code_film}}</h3>
        <h3>Url IMDB : {{$anak->Film->url_imdb}}</h3> 
    <hr> --}} 
    @extends('master.layout') 
    @section('content')  
    @php  
        $film = \App\Models\Film::all(); 
    @endphp
    <div class="album py-5 bg-light">
        <div class="container">
    
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"> 
            @foreach ($film as $item) 
            <div class="col">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $item->judul }}</text></svg>
      
                  <div class="card-body">
                    <p class="card-text">{{ $item->deskripsi }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="{{ url('film/'.$item->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

           
        </div>
      </div> 
    @endsection