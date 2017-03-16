@extends('backend.layouts.app')
@section('title')
	index
@endsection
@section('site_map')
	portfolio/index
@endsection
@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">index</h3>
					<a href="{{url('admin/portfolio/create')}}" data-toggle="tooltip" title="Create!" class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i></a>
				</div>
				<div class="box-body">
					<table class="table table-condensed table-hover">
						<thead>
							<tr>
								<th>Image</th>
								<th>Title</th>
								<th>Description</th>
								<th>Url</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($portfolios as $portfolio)
							<tr>
								<td>{{$portfolio['image']}}</td>
								<td>{{$portfolio['title']}}</td>
								<td>{{$portfolio['description']}}</td>
								<td>{{$portfolio['url']}}</td>
								<td>{{$portfolio['status']}}</td>
								<td>
									<a href="{{url('admin/portfolio/'.$portfolio['id'].'/edit')}}" data-toggle="tooltip" title="Edit" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
									<a href="{{url('admin/portfolio/delete/'.$portfolio['id'])}}" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a></i></a>
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
