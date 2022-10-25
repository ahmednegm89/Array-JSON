@extends('layout')
@section('title')
    Add book
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

<form method="POST" action="{{route('books.store')}}"  >
    @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">book Name</label>
        <input type="text" name="name" class="form-control" >
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="cats[]" value="Action" id="Action">
        <label class="form-check-label" for="Action">
            Action
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="cats[]" value="Classics" id="Classics">
        <label class="form-check-label" for="Classics">
                Classics
        </label>
      </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="cats[]" value="Fantasy" id="Fantasy">
        <label class="form-check-label" for="Fantasy">
            Fantasy
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="cats[]" value="Horror" id="Horror">
        <label class="form-check-label" for="Horror">
            Horror
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="cats[]" value="Historical" id="Historical">
        <label class="form-check-label" for="Historical">
            Historical 
        </label>
        </div>
        @foreach ($errors->all() as $error)
        <p class="" style="color: red">
            {{$error}}
            </p>
        @endforeach
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection