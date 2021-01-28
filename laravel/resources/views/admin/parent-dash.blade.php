@extends('layouts.admin')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><i class="fa fa-user"></i> Parents</h3>

          <ol class="breadcrumb">
            <li>
              <a href="dash"><i class="fa fa-laptop"></i> Dashboard</a>
            </li>
            <li class="active">Parents</li>
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
                      <th class="col-sm-2"style="vertical-align: middle;text-align:center">#</th>
                      
                      <th class="col-sm-2"style="vertical-align: middle;text-align:center">Name</th>
                      <th class="col-sm-2"style="vertical-align: middle;text-align:center">Email</th>
                      <th class="col-sm-2"style="vertical-align: middle;text-align:center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      @foreach ($parent as $pr)
                      <td data-title="#"style="vertical-align: middle;text-align:center">{{ $pr -> id}}</td>
                      
                      <td data-title="Name"style="vertical-align: middle;text-align:center">{{$pr -> name}}</td>
                      <td data-title="Email"style="vertical-align: middle;text-align:center">{{$pr -> email}}</td>

                      <td data-title="Action"style="vertical-align: middle;text-align:center">
                        <a href="{{route('user.show',$pr)}}" class="btn btn-success btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="View"><i class="fas fa-eye"></i></a>
                        <a href="{{route('user.edit',$pr)}}" class="btn btn-warning btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                        <form action='{{route("user.destroy",$pr)}}' method="Post" style="display:inline-block">
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

      <script>
        var status = "";
        var id = 0;
        $(".onoffswitch-small-checkbox").click(function() {
          if ($(this).prop("checked")) {
            status = "chacked";
            id = $(this).parent().attr("id");
          } else {
            status = "unchacked";
            id = $(this).parent().attr("id");
          }

          if ((status != "" || status != null) && id != "") {
            $.ajax({
              type: "POST",
              url: "https://demo.inilabs.net/school/v4.7/parents/active",
              data: "id=" + id + "&status=" + status,
              dataType: "html",
              success: function(data) {
                if (data == "Success") {
                  toastr["success"]("Success");
                  toastr.options = {
                    closeButton: true,
                    debug: false,
                    newestOnTop: false,
                    progressBar: false,
                    positionClass: "toast-top-right",
                    preventDuplicates: false,
                    onclick: null,
                    showDuration: "500",
                    hideDuration: "500",
                    timeOut: "5000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                  };
                } else {
                  toastr["error"]("Error");
                  toastr.options = {
                    closeButton: true,
                    debug: false,
                    newestOnTop: false,
                    progressBar: false,
                    positionClass: "toast-top-right",
                    preventDuplicates: false,
                    onclick: null,
                    showDuration: "500",
                    hideDuration: "500",
                    timeOut: "5000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                  };
                }
              },
            });
          }
        });
      </script>
    </div>
  </div>
</section>
@endsection