@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <ol class="breadcrumb">
                        <li><a href="dash"><i class="fa fa-laptop"></i> Dashboard</a></li>
                        <li class="active">ADD USER</li>
                    </ol>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-10">

                            <form class="form-horizontal" role="form" method="post" action="{{route('user.store')}}">
                                @csrf

                                <div class='form-group'> <label for="name_id" class="col-sm-2 control-label">
                                        Name
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="name_id" name="name" value="">
                                    <span class="text-danger">@error('name'){{$message}}@enderror </span>
                                    </div>
                                </div>


                                <div class='form-group'> <label for="email" class="col-sm-2 control-label">
                                        Email </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="email" name="email" value="">
                                        <span class="text-danger">@error('email'){{$message}}@enderror </span>

                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>
                                <div class='form-group'> <label for="name_id" class="col-sm-2 control-label">
                                        PassWord 
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" id="name_id" name="password">
                                        <span class="text-danger">@error('password'){{$message}}@enderror </span>

                                    </div>
                                    <span class="col-sm-4 control-label">
                                    </span>
                                </div>
                                
                               


                               

                                <div class='form-group'>
                                    <label for="photo" class="col-sm-2 control-label">
                                        Photo </label>
                                        <div class="col-sm-6">
                                        <input type="file" class="form-control" id="title" name="photo" value="">
                                    </div>
                                        </div>
                                    

                                    <span class="col-sm-6">
                                    </span>


                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-8">
                                        <input type="submit" class="btn btn-success" value="ADD USER">
                                    </div>
                                </div>

                            </form>
                                </div>

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