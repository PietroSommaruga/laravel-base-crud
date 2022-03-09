@extends('layouts.default')
@section('content')


    <main>
        <div class="card-container d-flex flex-wrap justify-content-between">
            @foreach ($comics as $value)
              <div class="comic-card my-3">
                  <div class="card-img">
                    <a href="{{route('comics.show', $value->id)}}"> <img src="{{$value['thumb']}}" alt=""> </a>
                  </div>
                
                <div class="text py-2">{{$value['series']}}</div>
              </div>
            @endforeach
        </div>
    </main>

    
@endsection