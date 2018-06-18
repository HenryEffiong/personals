@extends('layouts.app')

@section('content')
    <div class="panel panel-default">

                <div class="panel-body">

                      <table class="table" table-hover>

                          <thead>

                              <th>

                                  Image

                              </th>

                              <th>

                                  Title

                              </th>

                              <th>
                                  Edit
                              </th>

                              <th>

                                  Deleting

                              </th>
                          </thead>

                          <tbody>

                              @foreach ($posts as $post)

                                  <tr>
                                      <td> <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="50px" height="50px"> </td>
                                      <td>{{ $post->title }}</td>
                                      <td>Edit</td>
                                      <td>
                                        <form  action="{{route('posts.destroy',['id' => $post->id])}}" method="post">
                                                  {{ csrf_field() }}
                                                {{ method_field('delete') }}

                                                <button  type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">Trash

                                                </button>
                                      </td>
                                  </tr>

                              @endforeach

                          </tbody>

                      </table>

                </div>

    </div>
@endsection
