@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
          @include('layouts.side_navbar')
        </div>
        <style type="text/css">
            td{padding: 10px;text-align: right;}
            .align_left{text-align: left;}
        </style>
        <div class="col-md-10 panel panel-default" >
                @php $i=0; @endphp 

                <div class="col-md-6"><h3>Permanent Address <span style="font-size:15px; background-color: #546716;padding: 10px;border-radius: 50%;"><a style="cursor: pointer;" onclick="event.preventDefault(); document.getElementById('main_part').style.display='none';document.getElementById('edit_part').style.display='block';">Edit</a></span></h3><hr></div>
                <div class="col-md-6"><h3>Present Address <span style="font-size:15px; background-color: #546716;padding: 10px;border-radius: 50%;"><a style="cursor: pointer;" onclick="event.preventDefault(); document.getElementById('main_part').style.display='none';document.getElementById('edit_part').style.display='block';">Edit</a></span></h3><hr></div>
                
                {{--Main part--}}
                <div id="main_part">
                @foreach($data as $value)
                <div class="col-md-6">
                <table >
                    <tr>
                        <td>House Name/no :</td>
                        <td class="align_left">{{$value->house_name_no}}</td>
                    </tr>
                    <tr>
                        <td>Road Name/no :</td>
                        <td class="align_left">{{$value->road_name_no}}</td>
                    </tr> <tr>
                        <td>Village Name :</td>
                        <td class="align_left">{{$value->village_name}}</td>
                    </tr><tr>
                        <td>Union :</td>
                        <td class="align_left">{{$value->union}}</td>
                    </tr><tr>
                        <td>Post Code :</td>
                        <td class="align_left">{{$value->post_code}}</td>
                    </tr><tr>
                        <td>Thana Name :</td>
                        <td class="align_left">{{$value->thana_name}}</td>
                    </tr><tr>
                        <td style="padding-bottom: 30px;">District Name :</td>
                        <td class="align_left">{{$value->district}}</td>
                    </tr>
                </table>
                </div>
                @php $i++; @endphp
                @endforeach

                @if($i == 0)
                @for($i=0;$i<2;$i++)
                <div class="col-md-6">
                  <table >
                    <tr>
                        <td>House Name/no :</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Road Name/no :</td>
                        <td></td>
                    </tr> <tr>
                        <td>Village Name :</td>
                        <td></td>
                    </tr><tr>
                        <td>Union :</td>
                        <td></td>
                    </tr><tr>
                        <td>Post Code :</td>
                        <td></td>
                    </tr><tr>
                        <td>Thana Name :</td>
                        <td></td>
                    </tr><tr>
                        <td style="padding-bottom: 30px;">District Name :</td>
                        <td></td>
                    </tr>
                </table>  
                </div>
                @endfor
                @endif
            </div>
            {{--Edit part--}}
            <div id="edit_part" style="display: none;">
                <form class="form-horizontal" method="POST" action="{{ route('create_address') }}" id="edit_form">
                  {{ csrf_field() }}
                 @php $i=1; @endphp
                @foreach($data as $value)
                <div class="col-md-6">
                    <input type="hidden" name="id{{$i}}" value="{{$value->id}}">
                <table >
                    @if($i==2)
                    <tr>
                        <td>
                            <input type="checkbox" name="" id="same_as" class="form-control" onclick="Same_As();">
                        </td>
                        <td style="text-align: left;">Same As Permanent Address </td>
                    </tr>
                    @endif
                    <tr>
                        <td>House Name/no :</td>
                        <td><input type="text" class="form-control" id="houseno{{$i}}" name="house_name_no{{$i}}" placeholder="Enter houseno or name" value="{{$value->house_name_no}}"></td>
                    </tr>
                    <tr>
                        <td>Road Name/no :</td>
                        <td><input type="text" class="form-control" id="roadno{{$i}}" name="road_name_no{{$i}}" placeholder="Enter road no or name" value="{{$value->road_name_no}}"></td>
                    </tr> <tr>
                        <td>Village Name :</td>
                        <td><input type="text" class="form-control" id="village{{$i}}" name="village_name{{$i}}" placeholder="Enter Village name" value="{{$value->village_name}}"></td>
                    </tr><tr>
                        <td>Union :</td>
                        <td><input type="text" class="form-control" id="unionno{{$i}}" name="union{{$i}}" placeholder="Enter Union name" value="{{$value->union}}"></td>
                    </tr><tr>
                        <td>Post Code :</td>
                        <td><input type="text" class="form-control" id="postcode{{$i}}" name="post_code{{$i}}" placeholder="Enter post code " value="{{$value->post_code}}"></td>
                    </tr><tr>
                        <td>Thana Name :</td>
                        <td><input type="text" class="form-control" id="thana{{$i}}" name="thana_name{{$i}}" placeholder="Enter thana name" value="{{$value->thana_name}}"></td>
                    </tr><tr>
                        <td>District Name :</td>
                        <td><input type="text" class="form-control" id="district{{$i}}" name="district{{$i}}" placeholder="Enter district name" value="{{$value->district}}"></td>
                    </tr>
                </table> </div>
                @php $i++; @endphp
               @endforeach

               @if($i==1)
               @for($i=1;$i<3;$i++)
               <div class="col-md-6">
                <input type="hidden" name="id{{$i}}" value="0">
                    <table >
                        @if($i==2)
                    <tr>
                        <td>
                            <input type="checkbox" name="" id="same_as" class="form-control" onclick="Same_As()">
                        </td>
                        <td style="text-align: left;">Same As Permanent Address </td>
                    </tr>
                    @endif
                    <tr>
                        <td>House Name/no :</td>
                        <td><input type="text" class="form-control" id="houseno{{$i}}" name="house_name_no{{$i}}" placeholder="Enter houseno or name" value=""></td>
                    </tr>
                    <tr>
                        <td>Road Name/no :</td>
                        <td><input type="text" class="form-control" id="roadno{{$i}}" name="road_name_no{{$i}}" placeholder="Enter road no or name" value=""></td>
                    </tr> <tr>
                        <td>Village Name :</td>
                        <td><input type="text" class="form-control" id="village{{$i}}" name="village_name{{$i}}" placeholder="Enter Village name" value=""></td>
                    </tr><tr>
                        <td>Union :</td>
                        <td><input type="text" class="form-control" id="unionno{{$i}}" name="union{{$i}}" placeholder="Enter Union name" value=""></td>
                    </tr><tr>
                        <td>Post Code :</td>
                        <td><input type="text" class="form-control" id="postcode{{$i}}" name="post_code{{$i}}" placeholder="Enter post code " value=""></td>
                    </tr><tr>
                        <td>Thana Name :</td>
                        <td><input type="text" class="form-control" id="thana{{$i}}" name="thana_name{{$i}}" placeholder="Enter thana name" value=""></td>
                    </tr><tr>
                        <td>District Name :</td>
                        <td><input type="text" class="form-control" id="district{{$i}}" name="district{{$i}}" placeholder="Enter district name" value=""></td>
                    </tr>
                </table>
               </div>
               @endfor 
               @endif

               <div class="col-md-10"></div>
               <div class="col-md-2">
                   <input type="submit" style="margin-bottom: 15px;" name="submit_address" value="Submit" class="btn btn-lg btn-primary">
               </div>              
           </form>
            </div>
        </div>
    </div>
</div>
@endsection

<script type="text/javascript">
    function Same_As() {
       var edit_form=document.getElementById('edit_form');
       edit_form.house_name_no2.value=edit_form.house_name_no1.value;
       edit_form.road_name_no2.value=edit_form.road_name_no1.value;
       edit_form.village_name2.value=edit_form.village_name1.value;
       edit_form.union2.value=edit_form.union1.value;
       edit_form.post_code2.value=edit_form.post_code1.value;
       edit_form.thana_name2.value=edit_form.thana_name1.value;
       edit_form.district2.value=edit_form.district1.value;
    }
</script>

