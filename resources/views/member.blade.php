@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
          @include('layouts.side_navbar')
        </div>
        <div class="col-md-10 ">
        	<div class="panel panel-default" style="padding: 10px">
        	<h3>Members</h3>
        	<div id="main_part">
        		@php $i=1 @endphp
        	 <table class="table">
        	 	<tr>
        	 		<td>SL</td>
        	 		<td>Name</td>
        	 		<td>Relation With Khana</td>
        	 		<td>Action</td>
        	 	</tr>
        	 	@foreach($data as $value)
        	 	<tr>
        	 		<td>{{$i}}</td>
        	 		<td>{{$value->name}}</td>
        	 		<td>{{$value->relation_with_khana}}</td>
        	 		<td>
        	 			<a href="{{route('view_member',['name'=>$value->id])}}">View</a><b> |</b>
        	 			<a href="{{route('edit_member',['name'=>$value->id])}}"> Edit</a><b> |</b>
        	 			<a href=""> Delete</a>
        	 		</td>
        	 	</tr>
        	 	@endforeach
        	 </table>
        	</div>
          </div>
          <div class="col-md-2">
               <a style="cursor: pointer;" id="add_button" class="btn btn-lg btn-success" onclick="document.getElementById('add_member').style.display='block';document.getElementById('add_button').style.display='none';">Add Member</a>
          </div>
          
        </div>
        
        <div class="col-md-2"></div>
        <div id="add_member" class="col-md-10" style="display: none;">
        	 <form class="form-horizontal" method="POST" action="{{route('add_member') }}" id="edit_form">
                  {{ csrf_field() }}
        	<div class="row">
                <div class="col-md-5">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="number">NID:</label>
                                <div class="col-sm-10">
                                    <input type="number" name="nid" class="form-control" id="NID" placeholder="Enter NID"> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="BID">BID:</label>
                                <div class="col-sm-10">
                                    <input type="number" name="bid" class="form-control" id="BID" placeholder="Enter BID"> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your full name"> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="date">Birth Date:</label>
                                <div class="col-sm-10">
                                    <input type="date" name="birth_date" class="form-control" id="date" placeholder="date "> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Occupation">Occupation:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Occupation" name="occupation" placeholder="Enter your Occupation"> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Education">Education:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Education" name="education" placeholder="Enter highest Education"> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Education">Relation W khana:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Relation" name="relation_with_khana" placeholder="Relation with khana"> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Education">Present Address:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Relation" name="present_address" placeholder="Villege,union,Thana,District"> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Education">Mob. Number:</label>
                                <div class="col-sm-10">
                                    <input type="number" name="mobile_no" class="form-control" id="Relation" placeholder="017"> </div>
                            </div>
                </div>
                <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                    <div class="formradio">
                                        <h3 style="font-style: italic;">SEX(choose one)*</h3>
                                        <br>
                                        <label class="container">
                                            <input type="radio" name="sex" value="MALE"> <span class="checkmarkradio"></span>MALE </label>
                                        <label class="container">
                                            <input type="radio" name="sex" value="FEMALE"> <span class="checkmarkradio"></span> FEMALE</label>
                                        <label class="container">
                                            <input type="radio" name="sex" value="OTHERS"> <span class="checkmarkradio"></span> OTHERS</label>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="religionsection">
                                    <div class="formradio">
                                        <h3 style="font-style: italic;">RELIGIONS(choose one)*</h3>
                                        <label class="container">
                                            <input type="radio" name="religion" value="ISLAM"> <span class="checkmarkradio"></span> ISLAM</label>
                                        <label class="container">
                                            <input type="radio" name="religion" value="HINDU"> <span class="checkmarkradio"></span> HINDU</label>
                                        <label class="container"> 
                                            <input type="radio" name="religion" value="CHRISTIAN"> <span class="checkmarkradio"></span> CHRISTIAN</label>
                                        <label class="container"> 
                                            <input type="radio" name="religion" value="BUDDHA"> <span class="checkmarkradio"></span> BUDDHA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="maritalsection">
                                    <div class="formradio">
                                        <h3 style="font-style: italic;">MARITAL STATUS(choose one)*</h3>
                                        <label class="container">
                                            <input type="radio" name="marital_status" value="MARRIED"> <span class="checkmarkradio"></span> MARRIED</label>
                                        <label class="container">
                                            <input type="radio" name="marital_status" value="UNMARRIED"> <span class="checkmarkradio"></span> UNMARRIED</label>
                                        <label class="container">
                                            <input type="radio" name="marital_status" value="DEVORSED"> <span class="checkmarkradio"></span> DEVORSED</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="nationalsection">
                                    <div class="formradio">
                                        <h3>NATIONALITY(choose one)*</h3>
                                        <label class="container">
                                            <input type="radio" name="nationality" value="BANGLADESHI"> <span class="checkmarkradio"></span>BANGLADESHI </label>
                                        <label class="container">
                                            <input type="radio" name="nationality" value="OTHERS"> <span class="checkmarkradio"></span> OTHERS</label>
                                    </div>
                                    <div class="formradio">
                                        <h3 style="font-style: italic;">*Living Style</h3>
                                        <br>
                                        <label class="container">
                                            <input type="radio" name="living_style" value="DED"> <span class="checkmarkradio"></span> DED</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                 <div class="col-md-9"></div>
                 <div class="col-md-1">
                     <input type="button" value="Cancle" class="btn btn-lg btn-danger" onclick="document.getElementById('add_member').style.display='none';document.getElementById('add_button').style.display='block';">
                 </div>
                 <div class="col-md-2" style="padding-bottom: 25px;">
                 	<input type="submit"  value="Submit" class="btn btn-lg btn-primary">
                 </div>
        </div>

         </form>
      
    </div>
      
</div>
</div>
@endsection