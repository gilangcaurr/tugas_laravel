@php 
  
    $sekolah =\App\Models\Sekolah::all(); 
@endphp 


@foreach ($sekolah as $data1) 
    <h1>ID: {{ $data1->id }}</h1>
    <h1>Nama : {{ $data1->nama }}</h1> 
    <h1>Email: {{ $data1->email }}</h1> 
    <h1>Tlp : {{ $data1->telp }}</h1> 
    <h1>Alamat : {{ $data1->alamat }}</h1> 
    <h1>Status : {{ $data1->status }}</h1> 
    <hr> 
@endforeach