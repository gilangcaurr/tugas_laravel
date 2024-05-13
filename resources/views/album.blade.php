@php 
  
    // $album_musik = App\Models\Album_musik::all(); 
    //$album_musik = App\Models\Album_musik::get(); 
    $album_musik2 = App\Models\Album_musik::find(1); 
    $album_musik = App\Models\Album_musik::where('tahun',2001)->orderby('id','desc')->get(); 
    $album_musik4 = App\Models\Album_musik::first(); 
    
@endphp 

<h1 style="color:blue">Menampilkan Get</h1>
@foreach ($album_musik as $data) 
    <h1>ID: {{ $data->id }}</h1>
    <h1>Judul : {{ $data->judul }}</h1> 
    <h1>Tahun: {{ $data->tahun }}</h1> 
    <h1>Cover album : {{ $data->cover_album }}</h1> <hr>
@endforeach

<h1 style="color:green">Menampilkan Find</h1>
<h1>ID: {{ $album_musik2->id ?? '-'}}</h1>
<h1>Judul : {{ $album_musik2->judul ?? '-'}}</h1> 
<h1>Tahun: {{ $album_musik2->tahun ?? '-'}}</h1> 
<h1>Cover album : {{ $album_musik2->cover_album ?? '-'}}</h1> <hr>
 
<h1 style="color:red">Menampilkan First</h1>
<h1>ID: {{ $album_musik4->id ?? '-'}}</h1>
<h1>Judul : {{ $album_musik4->judul ?? '-'}}</h1> 
<h1>Tahun: {{ $album_musik4->tahun ?? '-'}}</h1> 
<h1>Cover album : {{ $album_musik4->cover_album ?? '-'}}</h1> 
