@extends('layouts.app')

@section('content')
<h2 class="center" style="text-align: center;">Activity Verification</h2>

</div></div>

  
    <div class="row">
  <div class="col-6">
  	<div class="col-md-6" style="align-items: center;padding-left: 50px;padding-top: 70px" >

  		<table class="col-md-12" style="align-items: center;padding-top: 100px">
                        
                        @foreach($users as $user)
                        <style type="text/css">
                        	th, td { 
                width:150px; 
                
                padding:15px
                        </style>
                        <tr>
                        	
                            <td>
                                Uploaded By 
                            </td>
                            <td>
                        		-
                        	</td>
                            <td>
                                {{$user->sname}}
                            </td>
                            
                        </tr>

                        <tr>
                            <td>
                                Activity Name :
                            </td>
                            <td>
                        		-
                        	</td>
                            <td>
                                {{$user->aname}}
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                Activity Type :
                            </td>
                            <td>
                        		-
                        	</td>
                            <td>
                                {{$user->atype}}
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                Activity Scope :
                            </td>
                            <td>
                        		-
                        	</td>
                            <td>
                                {{$user->ascope}}
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                Select Type :
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                <select class="form-control" id="sel1">
    <option>Internship</option>
    <option>Online Course</option>
    <option>WorkShop</option>
    <option>Seminar</option>
    <option>Coding Competition</option>
    <option>Hackaton</option>
    <option>Paper Presentation</option>
    <option>Idea Competition</option>
    <option>Project Competition</option>
    <option>Intra-College Competition</option>
  </select>
                            </td>
                            
                        </tr>
                        
                        </table>
                        <br><br>

  <div style="padding-top: 220px;align-items: center;padding-left: 150px">                      
<a href="/admin" class="btn btn-primary" >Aprrove Activity</a>
<a href="/admin/reject/{{$user->aid}}" class="btn btn-danger">Reject Activity</a>
    </div>
  <div style="padding-top: 20px;align-items: center;padding-left: 170px">
  <h3 style="padding-left: 60px">OR</h3>                     
<a href="/admin/approve/grade/{{$user->aid}}" class="btn btn-primary" >Update Score manaully </a>


    </div>
  </div>
  <div class="col-6">
  	<img src="{{asset('uploads/activity/'.$user->image)}}" style="height: 620px;width: 650px;border:1.5px solid black">
  </div>
</div>
@endforeach

@endsection