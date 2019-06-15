@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
          @include('layouts.side_navbar')
        </div>
        <div class="col-md-10 panel panel-default">
        	<h3>HOUSE-HOLD  <span style="font-size:15px; background-color: #546716;padding: 10px;border-radius: 50%;"><a style="cursor: pointer;" onclick="event.preventDefault(); document.getElementById('main_part').style.display='none';document.getElementById('edit_part').style.display='block';">Edit</a></span></h3><hr>
        	<style type="text/css">
            td{padding: 10px;text-align: right;}
            .align_left{text-align: left;}
           </style>
        	<div id="main_part">
        		<div class="col-md-6">
        			<table>
        			<tr>
        				<td>House : </td>
        				<td class="align_left">{{$data->house_own_type}}</td>
        			</tr><tr>
        				<td>House wall : </td>
        				<td class="align_left">{{$data->house_wall}}</td>
        			</tr><tr>
        				<td>Latrine : </td>
        				<td class="align_left">{{$data->latrin_type}}</td>
        			</tr><tr>
        				<td>Total Land : </td>
        				<td class="align_left">{{$data->total_land}}</td>
        			</tr>
        		</table>
        		</div>
        		<div class="col-md-6">
        			<table>
        			<tr>
        				<td>Source of Water : </td>
        				<td class="align_left">{{$data->source_of_water}}</td>
        			</tr><tr>
        				<td>Occupation : </td>
        				<td class="align_left">{{$data->occupation}}</td>
        			</tr><tr>
        				<td>Number of Person in Abroad : </td>
        				<td class="align_left">{{$data->number_of_person_in_abroad}}</td>
        			</tr><tr>
        				<td style="padding-bottom: 30px;">Electricity : </td>
        				<td class="align_left">{{$data->electricity}}</td>
        			</tr>
        		</table>
        		</div>		
        	</div>
        	<div id="edit_part" style="display: none;">
        		<div class="row">
        		   <form class="form-horizontal" method="POST" action="{{ route('update_house_hold') }}" id="edit_form">
                  {{ csrf_field() }}
                  <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="col-md-3">
                        <div class="household_first">

                            <h1>House</h1>
                            @php $houses=['Own','Leaseholder','Homeless'] @endphp
                            @foreach($houses as $house)
                            	<label class="container">
                                    <input type="radio" name="house_own_type" value="{{$house}}" @if($data->house_own_type == $house) checked @endif > <span class="checkmark">{{$house}}</span> </label>
                            @endforeach
                                

                                <h1>House wall</h1>
                                @php $house_walls=['Brick','Bamboo','Tin','Others'] @endphp
                                @foreach($house_walls as $house_wall)
                                <label class="container">
                                    <input type="radio" name="house_wall" value="{{$house_wall}}" @if($data->house_wall==$house_wall) checked @endif> <span class="checkmark">{{$house_wall}}</span> </label>
                                 @endforeach

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="household_second">

                            <h1>Latrine</h1>
                             @php $latrines=['Sanitary','Paka-Sanitary','Un-sanitary'] @endphp
                             @foreach($latrines as $latrine)
                            <label class="container">
                                <input type="radio" name="latrin_type" value="{{$latrine}}"  @if($latrine == $data->latrin_type) checked @endif> <span class="checkmark" >{{$latrine}}</span> </label>
                             @endforeach

                            <h1>Total Land</h1>
                            @php $lands=['No Land','Below One-Akor','One-Akor','OverOne-akor'] @endphp
                            @foreach($lands as $land)
                            <label class="container">
                                <input type="radio" name="total_land" value="{{$land}}" @if($land==$data->total_land) checked @endif> <span class="checkmark">{{$land}}</span> </label>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="household_third">

                            <h1>Source of Water</h1>
                            @php $water_sources=['Suplay','Tube-well','Others'] @endphp
                            @foreach($water_sources as $water_source)
                            <label class="container">
                                <input type="radio" name="source_of_water" value="{{$water_source}}" @if($water_source==$data->source_of_water) checked @endif> <span class="checkmark">{{$water_source}}</span> </label>
                            @endforeach

                            <h1>Occupation</h1>
                            @php $occupations=['Farming','Business','Politician','Educational'] @endphp
                            @foreach($occupations as $occupation)
                            <label class="container">
                                <input type="radio" name="farming" value="{{$occupation}}" @if($occupation==$data->occupation) checked @endif> <span class="occupation">{{$occupation}}</span> </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="household_forth">

                            <h1>Number of Person in Abroad</h1>
                            @php $abroad_persons=['One','Two','Three','Four'] @endphp
                            @foreach($abroad_persons as $abroad_person)
                            <label class="container">
                                <input type="radio" name="number_of_person_in_abroad" value="{{$abroad_person}}" @if($abroad_person==$data->number_of_person_in_abroad) checked @endif> <span class="checkmark">{{$abroad_person}}</span> </label>
                            @endforeach

                            <h1>Electricity</h1>
                            @php $electricitys=['Yes','No'] @endphp
                            @foreach($electricitys as $electricity)
                            <label class="container">
                                <input type="radio" name="electricity" value="{{$electricity}}" @if($electricity==$data->electricity) checked @endif> <span class="checkmark">{{$electricity}}</span> </label>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-md-10"></div>
                    <div class="col-md-2" style="margin-top: 15px;margin-bottom: 15px;">
                    	<input type="submit" class="btn btn-lg btn-primary" value="Submit">
                    </div>
                </form>
                </div>
        	</div>
        </div>
    </div>
</div>
@endsection