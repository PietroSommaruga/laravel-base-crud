@extends('layouts.default')

@section('content')
<section class="details">
        
            <div class="show-details d-flex ">
                <div class="show-img mx-3">
                    <img src="{{$comic['thumb']}}" alt="">
                    <strong class="type px-3 py-1">{{$comic['type']}}</strong>
                </div>
                <div class="show-text">
                    <h3 class="pb-3">{{$comic['title']}}</h3>
                
                    <div class="price">
                        <strong class="text-gray">Price: ${{$comic['price']}}</strong>
                    </div>
                    <p class="pt-3">{{$comic['description']}}</p>
                    <div>On Sale Date: {{$comic['sale_date']}}</div>


                    <div class="my-3">
                        <a class="btn btn-primary px-4 d-inline" href="{{route('comics.edit', $comic['id'])}}">Edit</a>
        
                        <form  class="d-inline" action="{{route('comics.destroy', $comic->id)}}" method="post" id="form_delete">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger px-4 d-inline" type="submit">Delete</button>
                        </form>
        
                        <script>
                            const form = document.getElementById('form_delete');
                            form.addEventListener('submit', function (e) {
                                e.preventDefault();
                                const choise = confirm("Sei sicuro di voler cancellare l'elemento? #{{$comic->id}}");
                                if(choise) {
                                    form.submit()
                                }
                            })
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        </div>
    </section>
    @endsection