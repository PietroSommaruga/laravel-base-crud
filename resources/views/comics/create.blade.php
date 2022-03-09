@extends('layouts.default')

@section('content')

    <h1 class="my-4 text-center">Create</h1>

<div class="container my-5">
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div class="form-group my-3">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control my-1" name="title" placeholder="Enter Title" >
        </div>

        <div class="form-group mb-3">
            <label for="test">Description</label>
            <textarea type="text" class="form-control my-1" name="description" placeholder="Enter Description"></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="test">Image Url</label>
            <input type="url" class="form-control my-1" name="thumb" placeholder="Enter Url">
        </div>

        <div class="form-group mb-3">
            <label for="test">Price</label>
            <input type="number" step="any" class="form-control my-1" name="price" placeholder="Enter Price">
        </div>

        <div class="form-group mb-3">
            <label for="test">Series</label>
            <input type="text" class="form-control my-1" name="series" placeholder="Enter Series">
        </div>

        <div class="form-group mb-3">
            <label for="test">Select Date</label>
            <input type="date" class="form-control my-1" name="sale_date">
        </div>

        <div class="form-group mb-3">
            <label for="test">Type</label>
            <input type="text" class="form-control my-1" name="type" placeholder="Enter Type">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
</div>