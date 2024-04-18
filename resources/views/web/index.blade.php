@extends('layouts.web')

@section('content')

<form action="search_data" method="GET" class="col-5">
    <input type="text" name="search" placeholder="search by name">
    <button type="submit">Search</button>
</form>

<div class="container">
    <div class="row d-flex px-3">
         @foreach($data as  $Book)

            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/books/book.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{ $Book->author_id }}</h5>
                      <p class="card-text">{{ $Book->name }}</p>
                      <a href="#" class="btn btn-primary">{{ $Book->price}}</a>
                    </div>
                </div>
            </div>


 @endforeach


