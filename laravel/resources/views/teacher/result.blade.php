@extends('layouts.teacher')
@section ('content')
@if(count($video->task)>0)



<div class="container-fluid">
<div class="row" >
<div class="col-lg-8">
<iframe width='100%' height="500px"style=' display:inline-block'
 src="{{$video->task[0]->result}}"></iframe>
 </div>
 
 <div class="col-lg-4" style="display:inline-block">
                                    <div id="all" class="tab-pane active">
                                        <div id="hide-table">
                                            <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer" >
                                                <thead>
                                                    <tr>
                                                        <th >task name</th>
                                                        <th >Student Name</th>
                                                    
                                                        <th >Task Number</th>
                                                        <th >Score</th>
                                                        <th colspan="3"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                               
                    
                                                   @foreach($students as $user)
                                                  
                                                 
                                                
                                                
                                                   
                                                   
                                                                                                     
                                                   
                                                    <form action="{{route('studenttask.store')}}" method="Post" style="display:inline-block">
                                                                @csrf
                                                    <tr>
                                                    
                                                        <td data-title="#">{{$video->name}}</td>

                                                        <td data-title="Photo">
                                                            {{$user->name}}
                                                        </td>
                                                       
                                                        <td data-title="Name">{{$video->task[0]->id}}</td>
                                                        <td data-title="Email" style="color:black;">
                                                        <input name="marks" type="number">
                                                        <input name="taskId" type="hidden" value={{$video->task[0]->id}}>
                                                        <input name="studentId" type="hidden" value={{$user->id}}>
                                                        </td>
                                                     

                                                        <td data-title="Action"  >
                                                                <button type="submit"  class="btn btn-success btn-xs mrg">submit</button>
                                                        </td>
                                                    </tr>
                                                            </form>
                                                            @endforeach
                                                  
                                                            

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>  
</div></div>

@endif        
                                                 
@endsection