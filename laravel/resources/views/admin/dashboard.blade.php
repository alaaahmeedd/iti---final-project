@extends('layouts.admin')
@section('content')

<section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-sm-12" id="resetDummyData">



                                <div class="col-lg-3 col-xs-6" >
                                    <div class="small-box "style="vertical-align: middle;">
                                        <a class="small-box-footer bg-orange-dark" href="{{url('admin/dash')}} ">
                                            <div class="icon bg-orange-dark" style="padding: 9.5px 18px 6px 18px;">
                                                <i class="fas fa-graduation-cap"></i>
                                            </div>
                                            <div class="inner " style="height: 82px;">
                                                <h4 class="text-white"  >
                                                  Admin </h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <div class="small-box " style="vertical-align: middle;">
                                        <a class="small-box-footer bg-teal-light" href="{{url('admin/parent')}}">
                                            <div class="icon bg-teal-light" style="padding: 9.5px 18px 6px 18px;">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div class="inner " style="height: 82px;">
                                                <h4 class="text-white">
                                                    Parent</h4>
                                                
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <div class="small-box "  style="vertical-align: middle;">
                                        <a class="small-box-footer bg-pink-light" href="{{url('admin/teacher')}}">
                                            <div class="icon bg-pink-light" style="padding: 9.5px 18px 6px 18px;">
                                                <i class="fas fa-chalkboard-teacher"></i>
                                            </div>
                                            <div class="inner "style="height: 82px;">
                                                <h4 class="text-white">
                                                Teacher </h4>
                                               
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-xs-6">
                                    <div class="small-box " style="vertical-align: middle;">
                                        <a class="small-box-footer bg-purple-light" href="{{url('admin/year1')}}">
                                            <div class="icon bg-purple-light" style="padding: 9.5px 18px 6px 18px;">
                                                <i class="fas fa-book"></i>
                                            </div>
                                            <div class="inner " style="height: 82px;">
                                                <h4 class="text-white">
                                                Student </h4>
                                               
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                           

                            <div class="row">
                                <div class="col-sm-6 " style="margin-left:25%">
                                    <section class="panel">
                                        <div class="profile-db-head bg-maroon-light">
                                            <a href="">
                                                <img src="https://demo.inilabs.net/school/v4.7/uploads/images/default.png" alt="" /> </a>

                                            <h1>Admin</h1>
                                            <p>Admin</p>

                                        </div>
                                        <table class="table table-hover" style="height:250px;vertical-align: middle;">
                                            <tbody>
                                                <tr>
                                                    <td  style="vertical-align: middle;text-align:center">
                                                        <i class="fas fa-user-edit text-maroon-light"></i>
                                                    </td>
                                                    <td  style="vertical-align: middle;">Name</td>
                                                    <td  style="vertical-align: middle;">admin</td>
                                                </tr>
                                                <tr>
                                                    <td  style="vertical-align: middle;text-align:center">
                                                        <i class="fa fa-envelope text-maroon-light"></i>
                                                    </td>
                                                    <td  style="vertical-align: middle;">Email</td>
                                                    <td  style="vertical-align: middle;">admin@gmail.com</td>
                                                </tr>
                                             
                                            </tbody>
                                        </table>
                                    </section>
                                </div>
                                <div class="col-sm-8" style="margin-left: 15%;">
                                    <div class="box">
                                        <div class="box-body" style="padding: 0px;">
                                            <div id="attendanceGraph"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-8" style="margin-left: 15%;">
                                    <div class="box">
                                        <div class="box-body">
                                            <!-- THE CALENDAR -->
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.row -->

                        
                            <script type="application/javascript">
                                $(function() {
                                    $('#calendar').fullCalendar({
                                        theme: true,
                                        customButtons: {
                                            reload: {
                                                text: 'Reload',
                                                click: function() {}
                                            }
                                        },
                                        header: {
                                            left: 'prev,next today',
                                            center: 'title',
                                            right: 'month,agendaWeek,agendaDay,listMonth'
                                        },
                                        navLinks: true,
                                        editable: false,
                                        eventLimit: true,
                                        events: [{
                                            title: 'HACKATHON',
                                            start: '2020-10-29T00:00:00',
                                            end: '2020-10-29T23:00:00',
                                            url: 'https://demo.inilabs.net/school/v4.7/event/view/1',
                                            color: '#5C6BC0'
                                        }, {
                                            title: 'Football Tournament',
                                            start: '2020-09-17T00:00:00',
                                            end: '2020-10-15T23:00:00',
                                            url: 'https://demo.inilabs.net/school/v4.7/event/view/3',
                                            color: '#5C6BC0'
                                        }, {
                                            title: 'International Mother Language Day',
                                            start: '2020-02-20T00:00:00',
                                            end: '2020-03-22T23:00:00',
                                            url: 'https://demo.inilabs.net/school/v4.7/event/view/2',
                                            color: '#5C6BC0'
                                        }, {
                                            title: 'Eid-ul-Fitr',
                                            start: '2020-07-14',
                                            end: '2020-07-29',
                                            url: 'https://demo.inilabs.net/school/v4.7/holiday/view/1',
                                            color: '#C24984'
                                        }, {
                                            title: 'Durga Puza 2020',
                                            start: '2020-08-16',
                                            end: '2020-08-20',
                                            url: 'https://demo.inilabs.net/school/v4.7/holiday/view/2',
                                            color: '#C24984'
                                        }, {
                                            title: 'Victory Day',
                                            start: '2020-12-16',
                                            end: '2020-12-17',
                                            url: 'https://demo.inilabs.net/school/v4.7/holiday/view/3',
                                            color: '#C24984'
                                        }, {
                                            title: 'Christmas Day',
                                            start: '2020-12-25',
                                            end: '2020-12-25',
                                            url: 'https://demo.inilabs.net/school/v4.7/holiday/view/4',
                                            color: '#C24984'
                                        }, ]
                                    });
                                });
                            </script>
                            <script type="application/javascript">
                                $(function() {
                                    LoadVisitor();

                                    function LoadVisitor() {
                                        $('#visitor').highcharts({
                                            chart: {
                                                type: 'line',
                                                height: 240
                                            },
                                            title: {
                                                text: 'Site Stats'
                                            },
                                            subtitle: {
                                                text: ''
                                            },
                                            xAxis: {
                                                categories: [
                                                    '13 Jan'
                                                ],
                                                title: {
                                                    text: 'Date',
                                                    align: 'low'
                                                }
                                            },
                                            yAxis: {
                                                min: 0,
                                                title: {
                                                    text: 'Visitors',
                                                    align: 'high'
                                                },
                                                labels: {
                                                    overflow: 'justify'
                                                }
                                            },
                                            tooltip: {
                                                pointFormat: '{series.name}: <b>{point.y}</b>'
                                            },
                                            plotOptions: {
                                                bar: {
                                                    dataLabels: {
                                                        enabled: true
                                                    }
                                                },
                                                series: {
                                                    cursor: 'pointer',
                                                    point: {
                                                        events: {
                                                            click: function(e) {

                                                            }
                                                        }
                                                    }
                                                }
                                            },
                                            legend: {
                                                layout: 'vertical',
                                                align: 'left',
                                                verticalAlign: 'top',
                                                x: 5,
                                                y: -10,
                                                floating: true,
                                                borderWidth: 1,
                                                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                                                shadow: true
                                            },
                                            credits: {
                                                enabled: false
                                            },
                                            series: [{
                                                name: 'Visitors',
                                                data: [{
                                                    y: 3
                                                }, ],
                                                color: 'rgb(225,83,135)'
                                            }]
                                        });
                                    }

                                });
                            </script>
                        </div>
                    </div>
            </section>
@endsection