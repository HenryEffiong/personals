@extends('layouts.master')


<div class="row">

  <div class="col-lg-6 col-lg-offset-3">
    <form class="" action="/create/todo" method="post">
      {{ csrf_field() }}
      <input type="text" class="form-control" name="todo" input-lg placeholder="Create new todo">

    </form>

  </div>

</div>
<hr>
@section('content')
  @foreach ($todos as $todo)
    {{ $todo->todo }} <a href="" class="btn btn-danger"> x </a>  
    <hr>
  @endforeach
@endsection
