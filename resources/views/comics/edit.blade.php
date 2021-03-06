@extends('layouts.default')

@section('content')

<h1 class="my-4 text-center">Edit Comic #{{$comic->id}}</h1>

    <div class="container my-5">
        <form action="{{ route('comics.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group my-3">
                <label for="test">Title</label>
                <input type="text" class="form-control" name="title" value="{{$comic->title}}" placeholder="Enter Title" >
            </div>

            <div class="form-group mb-3">
                <label for="test">Description</label>
                <textarea type="text" class="form-control" name="description" placeholder="Enter Description">{{$comic->description}}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="test">Url</label>
                <input type="url" class="form-control" name="thumb" value="{{$comic->thumb}}" placeholder="Enter Url">
            </div>

            <div class="form-group mb-3">
                <label for="test">Price</label>
                <input type="number" step="any" class="form-control" name="price" value="{{$comic->price}}" placeholder="Enter Price">
            </div>

            <div class="form-group mb-3">
                <label for="test">Series</label>
                <input type="text" class="form-control" name="series" value="{{$comic->series}}" placeholder="Enter Series">
            </div>

            <div class="form-group mb-3">
                <label for="test">Sale Date</label>
                <input type="date" class="form-control" value="{{$comic->sale_date}}"  name="sale_date">
            </div>
            
            <div class="form-group mb-3">
                <label for="test">Type</label>
                <input type="text" class="form-control" name="type" value="{{$comic->type}}" placeholder="Enter Type">
            </div>
            
            
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection