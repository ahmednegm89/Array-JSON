@extends('layout')
@section('title')
    show {{$book->name}}
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


<h1 class="text-center" >{{$book->name}}</h1>

<ul>
    @foreach ($book->cats as $cat)
        <li>
            {{$cat}}
        </li>
    @endforeach
</ul>

<a href="{{route('books.edit',$book)}}" class="btn btn-primary">edit</a>
<form action="{{route('books.destroy',$book)}}" method="post" style="display: inline">
  @csrf
  @method('DELETE')
  <button class="btn btn-danger" type="submit">delete</button>
</form>


@endsection