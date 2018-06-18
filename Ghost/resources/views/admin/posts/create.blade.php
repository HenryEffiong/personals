@extends('layouts.app')

@section('content')

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Create a new post</h3>
    </div>

  @if (count ($errors)>0)

    <ul class="list-group">
      @foreach ($errors->all() as $error)
        <li class="list-group-item text-danger" >
          {{ $error }}
        </li>
      @endforeach
    </ul>

  @endif

    <div class="panel-body">
      <form class="" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" id="" placeholder="">
          <p class="help-block"></p>
        </div>

        <div class="form-group">
          <label for="featured">Featured Image</label>
          <input type="file" name="featured" class="form-control" id="" placeholder="">
          <p class="help-block"></p>
        </div>






        <div class="form-group">
            <label for="category">Select a Category</label>
            <select class="form-control" id="category" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" rows="5" cols="5" class="form-control"></textarea>
          <p class="help-block"></p>
        </div>

        <div class="form-group">

        <div class="text-center">
          <button type="submit" class="btn btn-success">
            Store post
          </button>
        </div>

        </div>

      </form>
    </div>
    <div class="panel-footer">

    </div>
  </div>


@endsection
