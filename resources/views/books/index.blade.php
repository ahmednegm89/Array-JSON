@extends('layout')
@section('title')
    Home
@endsection
@section('content')
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('books.index')}}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('books.create')}}">Add</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

@foreach ($books as $book)
<div class="card mt-3" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title">{{$book->name}}</h5>
    <ul>
        @foreach ($book->cats as $cat)
            <li>
                {{$cat}}
            </li>
        @endforeach
    </ul>
    <a href="{{route('books.show',$book)}}" class="btn btn-primary">show</a>
</div>
</div>
@endforeach

@endsection