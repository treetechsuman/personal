@extends('backend.layouts.app')
@section('title')
	index
@endsection
@section('site_map')
	message/index
@endsection
@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">index</h3>
					<a href="{{url('admin/message/create')}}" data-toggle="tooltip" title="Create!" class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i></a>
				</div>
				<div class="box-body">
					<table class="table table-condensed table-hover">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Message</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($messages as $message)
							<tr>
								<td>{{$message['name']}}</td>
								<td>{{$message['email']}}</td>
								<td>{{$message['phone']}}</td>
								<td>{{$message['message']}}</td>
								<td>{{$message['status']}}</td>
								
								<td>
									<a href="{{url('admin/message/'.$message['id'].'/edit')}}" data-toggle="tooltip" title="Edit" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
									<a href="{{url('admin/message/delete/'.$message['id'])}}" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a></i></a>
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
