@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
          @include('layouts.side_navbar')
        </div>
        <div class="col-md-10 panel panel-default" style="padding: 10px">
        	<h3>Edit Member Details</h3><hr>
        	<form class="form-horizontal" method="POST" action="{{route('update_member') }}" id="edit_form">
                  {{ csrf_field() }}
                  <input type="hidden" name="id" value="{{$data->id}}">
        	<div class="row">
                <div class="col-md-5">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="number">NID:</label>
                                <div class="col-sm-10">
                                    <input type="number" name="nid" class="form-control" id="NID" placeholder="Enter NID" value="{{$data->nid}}"> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="BID">BID:</label>
                                <div class="col-sm-10">
                                    <input type="number" name="bid" class="form-control" id="BID" placeholder="Enter BID" value="{{$data->bid}}"> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your full name" value="{{$data->name}}"> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="date">Birth Date:</label>
                                <div class="col-sm-10">
                                    <input type="date" name="birth_date" class="form-control" id="date" placeholder="date " value="{{$data->birth_date}}"> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Occupation">Occupation:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Occupation" name="occupation" placeholder="Enter your Occupation" value="{{$data->occupation}}"> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Education">Education:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Education" name="education" placeholder="Enter highest Education" value="{{$data->education}}"> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Education">Relation W khana:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Relation" name="relation_with_khana" placeholder="Relation with khana" value="{{$data->relation_with_khana}}"> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Education">Present Address:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Relation" name="present_address" placeholder="Villege,union,Thana,District" value="{{$data->present_address}}"> </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Education">Mob. Number:</label>
                                <div class="col-sm-10">
                                    <input type="number" name="mobile_no" class="form-control" id="Relation" placeholder="017" value="{{$data->mobile_no}}"> </div>
                            </div>
                </div>
                <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                    <div class="formradio">
                                        <h3 style="font-style: italic;">SEX(choose one)*</h3>
                                        <br>
                                        @php $sexs=['MALE','FEMALE','OTHERS']; @endphp
                                        @foreach($sexs as $sex)
                                        <label class="container">
                                            <input type="radio" name="sex" value="{{$sex}}" @if($sex==$data->sex) checked @endif> <span class="checkmarkradio"></span>{{$sex}} </label>
                                         @endforeach
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="religionsection">
                                    <div class="formradio">
                                        <h3 style="font-style: italic;">RELIGIONS(choose one)*</h3>
                                        @php $religions=['ISLAM','HINDU','CHRISTIAN','BUDDHA']; @endphp
                                        @foreach($religions as $religion)
                                        <label class="container">
                                            <input type="radio" name="religion" value="{{$religion}}" @if($religions==$data->religion) checked @endif> <span class="checkmarkradio"></span> {{$religion}}</label>
                                        @endforeach
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="maritalsection">
                                    <div class="formradio">
                                        <h3 style="font-style: italic;">MARITAL STATUS(choose one)*</h3>
                                        @php $marital_statuses=['MARRIED','UNMARRIED','DEVORSED']; @endphp
                                        @foreach($marital_statuses as $marital_status)
                                        <label class="container">
                                            <input type="radio" name="marital_status" value="{{$marital_status}}" @if($marital_status==$data->marital_status) checked @endif> <span class="checkmarkradio"></span> {{$marital_status}}</label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="nationalsection">
                                    <div class="formradio">
                                        <h3>NATIONALITY(choose one)*</h3>
                                        @php $nationalitys=['BANGLADESHI','OTHERS']; @endphp
                                        @foreach($nationalitys as $nationality)
                                        <label class="container">
                                            <input type="radio" name="nationality" value="{{$nationality}}" @if($nationality==$data->nationality) checked @endif> <span class="checkmarkradio"></span>{{$nationality}} </label>
                                        @endforeach
                                    </div>
                                    <div class="formradio">
                                        <h3 style="font-style: italic;">*Living Style</h3>
                                        <br>
                                        <label class="container">
                                            <input type="radio" name="living_style" value="DED" @if($data->living_style=='DED') checked @endif> <span class="checkmarkradio"></span> DED</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                 <div class="col-md-9"></div>
                 <div class="col-md-1">
                    <a href="{{url('member')}}" class="btn btn-lg btn-danger">Cancle</a>
                 </div>
                 <div class="col-md-2" style="padding-bottom: 25px;">
                 	<input type="submit"  value="Update" class="btn btn-lg btn-primary">
                 </div>
        </div>

         </form>
        </div>
    </div>
</div>
@endsection