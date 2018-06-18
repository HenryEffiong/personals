@extends('layouts.app')

@section('content')
    <div class="panel panel-default">

                <div class="panel-body">

                      <table class="table" table-hover>

                          <thead>

                              <th>

                                  Category name

                              </th>

                              <th>

                                  Editing

                              </th>

                              <th>

                                  Deleting

                              </th>
                          </thead>

                          <tbody>

                              @foreach ($categories as $category)

                                  <tr>
                                      <td>{{ $category->name }}</td>
                                      <td> <a href="{{route('categories.edit',['id' => $category->id])}}" class="btn btn-xs btn-info">Edit</a> </td>
                                      <td> <form  action="{{route('categories.destroy',['id' => $category->id])}}" method="post">
                                                {{ csrf_field() }}
                                              {{ method_field('delete') }}

                                              <button  type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete

                                              </button>

                                            </form>
                                      </td>
                                  </tr>

                              @endforeach

                          </tbody>

                      </table>

                </div>

    </div>
@endsection
