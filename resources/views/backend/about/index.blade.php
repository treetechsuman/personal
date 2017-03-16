@extends('backend.layouts.app')
@section('title')
	index
@endsection
@section('site_map')
	about/index
@endsection
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">index</h3>
					<a href="{{url('admin/about/create')}}" data-toggle="tooltip" title="Create!" class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i></a>
				</div>
				<div class="box-body">
					<table class="table table-condensed table-hover">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Mobile</th>
								<th>Gender</th>
								<th>Url</th>
								<th>Address</th>
								<th>Job Title</th>
								<th>Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($abouts as $about)
							<tr>
								<td>{{$about['name']}}</td>
								<td>{{$about['email']}}</td>
								<td>{{$about['mobile']}}</td>
								<td>{{$about['gender']}}</td>
								<td>{{$about['url']}}</td>
								<td>{{$about['address']}}</td>
								<td>{{$about['job_title']}}</td>
								<td>{{$about['description']}}</td>
								<td>
									<a href="{{url('admin/about/'.$about['id'].'/edit')}}" data-toggle="tooltip" title="Edit" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
									<a href="{{url('admin/about/delete/'.$about['id'])}}" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a></i></a>
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
