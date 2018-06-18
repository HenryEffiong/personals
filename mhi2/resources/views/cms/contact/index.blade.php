@extends('cms')

@section('content')
    <!--Page Header-->
    <div class="header">
        <div class="header-content">
            <div class="page-title">
                <i class="icon-table2 position-left"></i>Contact Message
            </div>
            <ul class="breadcrumb">
                <li><a href="#"></a></li>
                <li>Contact Message</li>
                <li class="active">All Contact Messages</li>
            </ul>
        </div>
    </div>
    <!--/Page Header-->

    <div class="container-fluid page-content">

        <!-- Basic datatable -->
        <div class="card card-inverse card-flat table-responsive">
            <div class="card-header">
                <div class="card-title">Contact Message</div>
            </div>

            <table class="table datatable table-striped">
                <thead>
                <tr>
                    <th>#</th>

                    <th>Name</th>

                    <th>Subject</th>
                    <th>Message</th>
                    <th>Page</th>
                    <th>Time</th>


                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{{$message->id}}</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->subject}}</td>
                        <td>{{$message->message}}</td>
                        <td>Contact Page</td>
                        <td>{{$message->created_at}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /Basic datatable -->



    </div>


@endsection


