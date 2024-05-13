@php 
    $siswa =\App\Models\Siswa::where('nama', 'zapnunumberone')->get(); 
    // ->take(100) 
    // ->where('nama', 'zapnunumberone') 
    // ->where('jenis_kelamin', '1') 
    // ->groupBy('id')
    $siswa1 =\App\Models\Siswa::find(5); 
    $siswa2 =\App\Models\Siswa::where('id', 1)->orderBy('id', 'desc')->get(); 
    $siswa3 =\App\Models\Siswa::where('kelas', 'XI RPL 2')->orderBy('id', 'desc')->first(); 



@endphp 

<h2>tanpa foreach</h2> 
<h1>ID : {{ $siswa1->id ?? 'Kosong' }}</h1> 
<h1>Nama : {{ $siswa1->nama ?? 'Kosong' }}</h1>
<h1>Kelas : {{ $siswa1->kelas ?? 'Kosong' }}</h1>
<h1>Jenis Kelamin : {{ $siswa1->jenis_kelamin ?? 'Kosong' }}</h1><hr>

  
<h1>ID : {{ $siswa3->id}}</h1> 
<h1>Nama : {{ $siswa3->nama}}</h1>
<h1>Kelas : {{ $siswa3->kelas}}</h1>
<h1>Jenis Kelamin : {{ $siswa3->jenis_kelamin}}</h1><hr>

@foreach ($siswa2 as $data) 
    <h1>ID: {{ $data->id }}</h1>
    <h1>Nama : {{ $data->nama }}</h1> 
    <h1>Kelas: {{ $data->kelas }}</h1> 
    <h1>Jenis kelamin : {{ $data->jenis_kelamin }}</h1> 
    <hr> 
@endforeach  

