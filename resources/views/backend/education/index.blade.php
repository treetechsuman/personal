@extends('backend.layouts.app')
@section('title')
	index
@endsection
@section('site_map')
	education/index
@endsection
@section('content')
	<div class="row">
		<div class="col-md-8">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">index</h3>
					<a href="{{url('admin/education/create')}}" data-toggle="tooltip" title="Create!" class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i></a>
				</div>
				<div class="box-body">
					<table class="table table-condensed table-hover">
						<thead>
							<tr>
								<th>Institute</th>
								<th>Programm</th>
								<th>University</th>
								<th>Start</th>
								<th>End</th>
								<th>Descritption</th>
								<th>Display Order</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($educations as $education)
							<tr>
								<td>{{$education['institute']}}</td>
								<td>{{$education['programm']}}</td>
								<td>{{$education['university']}}</td>
								<td>{{$education['start']}}</td>
								<td>{{$education['end']}}</td>
								<td>{{$education['description']}}</td>
								<td>{{$education['display_order']}}</td>
								<td>{{$education['status']}}</td>
								<td>
									<a href="{{url('admin/education/'.$education['id'].'/edit')}}" data-toggle="tooltip" title="Edit" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
									<a href="{{url('admin/education/delete/'.$education['id'])}}" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
