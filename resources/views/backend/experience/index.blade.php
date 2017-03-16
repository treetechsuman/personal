@extends('backend.layouts.app')
@section('title')
	index
@endsection
@section('site_map')
	experience/index
@endsection
@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">index</h3>
					<a href="{{url('admin/experience/create')}}" data-toggle="tooltip" title="Create!" class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i></a>
				</div>
				<div class="box-body">
					<table class="table table-condensed table-hover">
						<thead>
							<tr>
								<th>Office</th>
								<th>Post</th>
								<th>Description</th>
								<th>From</th>
								<th>To</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($experiences as $experience)
							<tr>
								<td>{{$experience['office']}}</td>
								<td>{{$experience['post']}}</td>
								<td>{{$experience['description']}}</td>
								<td>{{$experience['from']}}</td>
								<td>{{$experience['to']}}</td>
								<td>{{$experience['status']}}</td>
								<td>
									<a href="{{url('admin/experience/'.$experience['id'].'/edit')}}" data-toggle="tooltip" title="Edit" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
									<a href="{{url('admin/experience/delete/'.$experience['id'])}}" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a></i></a>
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
