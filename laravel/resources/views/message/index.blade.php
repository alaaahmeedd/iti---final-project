@extends('layouts.admin')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                    <i class="fas fa-envelope"></i> Message
                    </h3>
                    <ol class="breadcrumb">
                        <li>
                            <a href="dash"><i class="fa fa-laptop"></i> Dashboard</a>
                        </li>
                        <li class="active">Message</li>
                    </ol>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                           

                            <div id="hide-table">
                                <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th class="col-sm-1"style="vertical-align: middle;text-align:center">#</th>
                                            <th class="col-sm-3"style="vertical-align: middle;text-align:center">Message Title</th>
                                            <th class="col-sm-1"style="vertical-align: middle;text-align:center">Time</th>
                                            <th class="col-sm-2"style="vertical-align: middle;text-align:center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contactMessage as $msg)
                                        <tr>
                                            <td data-title="#"style="vertical-align: middle;text-align:center">{{$msg->id}}</td>
                                            <td data-title="name"style="vertical-align: middle;text-align:center">{{$msg->subject}}</td>
                                            <td data-title="grade"style="vertical-align: middle;text-align:center">{{$msg->created_at}}</td>

                                            <td data-title="Action"style="vertical-align: middle;text-align:center">
                                                <a href="{{route('message.show',$msg)}}" class="btn btn-success btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="View"><i class="fas fa-eye"></i></a>

                                                <form action='{{route("message.destroy",$msg)}}' method="Post" style="display:inline-block">
                                                    @csrf
                                                    @method("delete")
                                                    <button type="submit" class="btn btn-danger btn-xs mrg"><i class="fa fa-trash-o"> </i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection