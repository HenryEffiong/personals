@extends('layouts.app')

@section('content')

      <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Update category</h3>
            </div>


                <div class="panel-body">
                      <form class="" action="{{ route('categories.update', ['id' => $category->id]) }}" method="post">
                          {{ csrf_field() }}

                          {{ method_field('patch') }}

                            <div class="form-group">
                                  <label for="name">Name</label>
                                  <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="" placeholder="">
                                  <p class="help-block"></p>
                            </div>

                            <div class="form-group">

                                  <div class="text-center">
                                        <button type="submit" class="btn btn-success">
                                              Store category
                                        </button>
                                  </div>

                            </div>

                      </form>
                </div>
            <div class="panel-footer">

            </div>
      </div>


@endsection
