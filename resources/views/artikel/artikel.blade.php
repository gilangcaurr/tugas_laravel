@extends('master.layout')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($artikels as $artikel)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $artikel->foto }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="artikel/id/{{ $artikel->id }}">{{ $artikel->judul }}</a> 
                                <br> 
                                 <a href="artikel/kategori/{{ $artikel->kategori }}">{{ $artikel->kategori }}</a> 
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
