@extends('master.layout')
@section('content')
    <div class="container">
        <div class="row"> 
            <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Perkenalan
                </div>
                <div class="card-body">
                    <p>Nama : {{ $data['nama'] }}</p>
                    <p>Alamat : {{ $data['alamat'] }}</p>
                    <p>Agama : {{ $data['agama'] }}</p> 
                    <p>hobi</p> 
                    <ol>
                        @foreach ($data['hobi'] as $item) 
                        <li>{{$item}}</li> 
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
