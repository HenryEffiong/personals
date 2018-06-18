@extends('cms')

@section('content')
    <!--Page Header-->
    <div class="header">
        <div class="header-content">
            <div class="page-title">
                <i class="icon-table2 position-left"></i>Volunteer
            </div>
            <ul class="breadcrumb">
                <li><a href="#"></a></li>
                <li>Volunteer</li>
                <li class="active">All Volunteers</li>
            </ul>
        </div>
    </div>
    <!--/Page Header-->

    <div class="container-fluid page-content">

        <!-- Basic datatable -->
        <div class="card card-inverse card-flat table-responsive">
            <div class="card-header">
                <div class="card-title">Volunteer</div>
            </div>

            <table class="table datatable table-striped">
                <thead>
                <tr>
                    <th>#</th>

                    <th>Name</th>

                    <th>Gender</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Career</th>
                    <th>Interest</th>
                    <th>Registration Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($volunteers as $volunteer)
                    <tr>
                        <td>{{$volunteer->id}}</td>
                        <td>{{$volunteer->firstname}} {{$volunteer->lastname}}</td>
                        <td>{{$volunteer->gender}}</td>
                        <td>{{$volunteer->age}}</td>

                        <td>{{$volunteer->phone}}</td>

                        <td>
                            {{$volunteer->email}}
                        </td>
                        <td>{{$volunteer->country}}</td>

                        <td>{{$volunteer->state}}</td>

                        <td>
                            {{$volunteer->city}}
                        </td>
                        <td>{{$volunteer->career}}</td>

                        <td>{{$volunteer->interest}}</td>

                        <td>
                            {{$volunteer->created_at}}
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /Basic datatable -->



    </div>


@endsection


