@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
          @include('layouts.side_navbar')
        </div>
        <div class="col-md-10 panel panel-default" style="padding: 10px">
        	<h3>Member Details</h3><hr>
        	<style type="text/css">
            td{padding: 10px;text-align: right;}
            .align_left{text-align: left;}
        </style>
        	<div class="col-md-6">
        	<table>
        		<tr>
        			<td>Name : </td>
        			<td class="align_left">{{$data->name}}</td>
        		</tr><tr>
        			<td>NID : </td>
        			<td class="align_left">{{$data->nid}}</td>
        		</tr><tr>
        			<td>BID : </td>
        			<td class="align_left">{{$data->bid}}</td>
        		</tr><tr>
        			<td>Birth Date : </td>
        			<td class="align_left">{{$data->birth_date}}</td>
        		</tr><tr>
        			<td>Occupation : </td>
        			<td class="align_left">{{$data->occupation}}</td>
        		</tr><tr>
        			<td>Education : </td>
        			<td class="align_left">{{$data->education}}</td>
        		</tr><tr>
        			<td>Relation With Khana : </td>
        			<td class="align_left">{{$data->relation_with_khana}}</td>
        		</tr>
        	</table>
        	</div>

        	<div class="col-md-6">
        	<table>
        		<tr>
        			<td>Present Address : </td>
        			<td class="align_left">{{$data->present_address}}</td>
        		</tr><tr>
        			<td>Mobile No : </td>
        			<td class="align_left">{{$data->mobile_no}}</td>
        		</tr><tr>
        			<td>Sex : </td>
        			<td class="align_left">{{$data->sex}}</td>
        		</tr><tr>
        			<td>Marital Status : </td>
        			<td class="align_left">{{$data->marital_status}}</td>
        		</tr><tr>
        			<td>Religion : </td>
        			<td class="align_left">{{$data->religion}}</td>
        		</tr><tr>
        			<td>Nationality : </td>
        			<td class="align_left">{{$data->nationality}}</td>
        		</tr><tr>
        			<td>Living Style : </td>
        			<td class="align_left">{{$data->living_style}}</td>
        		</tr>
        	</table>
        	</div>

        </div>
    </div>
</div>
@endsection