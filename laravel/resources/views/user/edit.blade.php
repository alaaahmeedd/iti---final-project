
 @extends('layouts.admin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                @if($user->role ==2)
                    <h3 class="box-title"><i class="fa icon-student"></i> Student</h3>
                @endif
                @if($user->role ==4)
                    <h3 class="box-title"><i class="fa icon-student"></i> Teacher</h3>
                @endif
                @if($user->role ==3)
                    <h3 class="box-title"><i class="fa icon-student"></i> Parent</h3>
                @endif

                    <ol class="breadcrumb">
                        <li><a href="dash"><i class="fa fa-laptop"></i> Dashboard</a></li>
                        @if($user->role ==2)
                        <li><a href="">Student</a></li>
                        <li class="active">Edit Student</li>
                @endif
                        @if($user->role ==3)
                        <li><a href="parent">Parent</a></li>
                        <li class="active">Edit Parent</li>
                @endif
                        @if($user->role ==4)
                        <li><a href="user">User</a></li>
                        <li class="active">Edit User</li>
                @endif
                    </ol>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-10">
                        
                            <form class="form-horizontal" role="form" method="post" action='{{route("user.update",$user)}}' >
    @csrf
    @method('put')
                                <div class='form-group'> <label for="name_id" class="col-sm-2 control-label">
                                        Name 
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="name_id" name="name" value="{{$user->name}}">
                                        <span class="text-danger">@error('name'){{$message}}@enderror </span>

                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>

                            
                                <div class='form-group'> <label for="email" class="col-sm-2 control-label">
                                        Email </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
                                        <span class="text-danger">@error('email'){{$message}}@enderror </span>

                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>
                                    @if($user->role==2)
                                <div class='form-group'> <label for="name_id" class="col-sm-2 control-label">
                                        Parent ID <span class="text-red">*</span>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="name_id" name="parentId" value="{{$user->parent_id}}">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>
                           
                                 <div class='form-group'> <label for="classesID" class="col-sm-2 control-label">
                                    Grade 
                                    </label>
                                    <div class="col-sm-6">
                                        <select name="grade" id='classesID' class='form-control select2'>
                                            <option value="0">Select Class</option>
                                            <option value="1" >One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                            <option value="5">Five</option>
                                            <option value="6">Six</option>
                                        </select>
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>
                                @endif

                                @if($user->role==3)
                                @foreach($user->children as $child)
                                <div class='form-group'> <label for="name_id" class="col-sm-2 control-label">
                                        Student ID
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="name_id" name="studentId" value="{{$user->id}}">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>
                                @endforeach
                                @endif

                                @if($user->role==4)
                                @foreach($user->courses as $course)
                                <div class='form-group'> <label for="name_id" class="col-sm-2 control-label">
                                        Course
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="name_id" name="studentId" value="{{$course->name}}">
                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>
                                @endforeach
                                @endif

                                <div class='form-group'>
                                    <label for="photo" class="col-sm-2 control-label">
                                        Photo </label>
                                        <div class="col-sm-6">
                                        <input type="file" class="form-control" id="title" name="photo" value="">
                                    </div>
                                        </div>
                                            </span>
                                      

                                    <span class="col-sm-4">
                                    </span>
                                </div>

                      
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-8">
                                        <input type="submit" class="btn btn-success" value="Update">
                                    </div>
                                </div>

                            </form>

                        </div> <!-- col-sm-8 -->
                    </div><!-- row -->
                </div><!-- Body -->
            </div><!-- /.box -->

            <script type="text/javascript">
                $(".select2").select2();
                $('#dob').datepicker({
                    startView: 2
                });

                $('#username').keyup(function() {
                    $(this).val($(this).val().replace(/\s/g, ''));
                });

                $('#classesID').change(function(event) {
                    var classesID = $(this).val();
                    if (classesID === '0') {
                        $('#classesID').val(0);
                    } else {
                        $.ajax({
                            type: 'POST',
                            url: "https://demo.inilabs.net/school/v4.7/student/sectioncall",
                            data: "id=" + classesID,
                            dataType: "html",
                            success: function(data) {
                                $('#sectionID').html(data);
                            }
                        });

                        $.ajax({
                            type: 'POST',
                            url: "https://demo.inilabs.net/school/v4.7/student/optionalsubjectcall",
                            data: "id=" + classesID,
                            dataType: "html",
                            success: function(data2) {
                                $('#optionalSubjectID').html(data2);
                            }
                        });
                    }
                });

                $(document).on('click', '#close-preview', function() {
                    $('.image-preview').popover('hide');
                    // Hover befor close the preview
                    $('.image-preview').hover(
                        function() {
                            $('.image-preview').popover('show');
                            $('.content').css('padding-bottom', '130px');
                        },
                        function() {
                            $('.image-preview').popover('hide');
                            $('.content').css('padding-bottom', '20px');
                        }
                    );
                });

                $(function() {
                    // Create the close button
                    var closebtn = $('<button/>', {
                        type: "button",
                        text: 'x',
                        id: 'close-preview',
                        style: 'font-size: initial;',
                    });
                    closebtn.attr("class", "close pull-right");
                    // Set the popover default content
                    $('.image-preview').popover({
                        trigger: 'manual',
                        html: true,
                        title: "<strong>Preview</strong>" + $(closebtn)[0].outerHTML,
                        content: "There's no image",
                        placement: 'bottom'
                    });
                    // Clear event
                    $('.image-preview-clear').click(function() {
                        $('.image-preview').attr("data-content", "").popover('hide');
                        $('.image-preview-filename').val("");
                        $('.image-preview-clear').hide();
                        $('.image-preview-input input:file').val("");
                        $(".image-preview-input-title").text("File Browse");
                    });
                    // Create the preview image
                    $(".image-preview-input input:file").change(function() {
                        var img = $('<img/>', {
                            id: 'dynamic',
                            width: 250,
                            height: 200,
                            overflow: 'hidden'
                        });
                        var file = this.files[0];
                        var reader = new FileReader();
                        // Set preview image into the popover data-content
                        reader.onload = function(e) {
                            $(".image-preview-input-title").text("File Browse");
                            $(".image-preview-clear").show();
                            $(".image-preview-filename").val(file.name);
                            img.attr('src', e.target.result);
                            $(".image-preview").attr("data-content", $(img)[0].outerHTML).popover("show");
                            $('.content').css('padding-bottom', '130px');
                        }
                        reader.readAsDataURL(file);
                    });
                });
            </script>
        </div>
    </div>
</section>
@endsection
