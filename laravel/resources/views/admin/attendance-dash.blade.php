@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa icon-eattendance"></i> Exam Attendance</h3>

                    <ol class="breadcrumb">
                        <li><a href="dash"><i class="fa fa-laptop"></i> Dashboard</a></li>
                        <li class="active">Exam Attendance</li>
                    </ol>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="page-header">
                                <a href="add-attendance">
                                    <i class="fa fa-plus"></i>
                                    Add exam attendance </a>
                            </h5>

                            <form method="POST">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="examID" class="control-label">
                                                        Exam <span class="text-red">*</span>
                                                    </label>

                                                    <select name="examID" id='examID' class='form-control select2'>
                                                        <option value="0">Select Exam</option>
                                                        <option value="1">First Semester</option>
                                                        <option value="2">Second Semester</option>
                                                        <option value="3">Third Semester</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="classesID" class="control-label">
                                                        Class <span class="text-red">*</span>
                                                    </label>

                                                    <select name="classesID" id='classesID' class='form-control select2'>
                                                        <option value="0">Select Class</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                        <option value="4">Four</option>
                                                        <option value="5">Five</option>
                                                        <option value="6">Graduate</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">

                                                    <label for="subjectID" class="control-label">
                                                        Subject <span class="text-red">*</span>
                                                    </label>

                                                    <select name="subjectID" id='subjectID' class='form-control select2'>
                                                        <option value="0" selected="selected">Select Subject</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-success col-md-12" style="margin-top:20px" value="View Attendance">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#all" aria-expanded="true">All Students</a></li>
                                </ul>


                                <div class="tab-content">
                                    <div id="all" class="tab-pane active">
                                        <div id="hide-table">
                                            <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                                                <thead>
                                                    <tr>
                                                        <th class="col-sm-2">#</th>
                                                        <th class="col-sm-2">Photo</th>
                                                        <th class="col-sm-2">Name</th>
                                                        <th class="col-sm-2">Roll</th>
                                                        <th class="col-sm-2">Email</th>
                                                        <th class="col-sm-2">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td data-title="#" class="sorting_1">
                                                            1 </td>

                                                        <td data-title="Photo">
                                                            <img src="https://demo.inilabs.net/school/v4.7/uploads/images/default.png" width="35px" height="35px" class="img-rounded" alt="">
                                                        </td>
                                                        <td data-title="Name">
                                                            Tamim Iqbal </td>
                                                        <td data-title="Roll">
                                                            1 </td>
                                                        <td data-title="Email">
                                                            tamim1@inilabs.net </td>
                                                        <td data-title="Status">
                                                            <button class="btn btn-danger btn-xs">Absent</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- nav-tabs-custom -->
                        </div> <!-- col-sm-12 -->
                    </div><!-- row -->
                </div><!-- Body -->
            </div><!-- /.box -->

            <script type="text/javascript">
                $('.select2').select2();
                $('#classesID').change(function(event) {
                    var classesID = $(this).val();
                    if (classesID === '0') {
                        $('#subjectID').val(0);
                    } else {
                        $.ajax({
                            type: 'POST',
                            url: "https://demo.inilabs.net/school/v4.7/eattendance/subjectcall",
                            data: "id=" + classesID,
                            dataType: "html",
                            success: function(data) {
                                $('#subjectID').html(data);
                            }
                        });
                    }
                });
            </script>
        </div>
    </div>
</section>
@endsection