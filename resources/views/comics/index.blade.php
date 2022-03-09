@extends('layouts.default')
@section('content')


    <main>
        <div class="card-container d-flex flex-wrap justify-content-between">
            @foreach ($comics as $value)
              <div class="comic-card my-3">
                  <div class="card-img">
                    <a href="{{route('comics.show', $value->id)}}"> <img src="{{$value['thumb']}}" alt=""> </a>
                    <strong class="type px-3 py-1">{{$value['type']}}</strong>
                  </div>
                
                <strong class="text py-3">{{$value['series']}}</strong>
              </div>
            @endforeach
        </div>
    </main>

    
@endsection