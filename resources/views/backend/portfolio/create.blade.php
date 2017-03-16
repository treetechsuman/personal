@extends('backend.layouts.app')
@section('title')
	create
@endsection
@section('site_map')
	portfolio/create
@endsection
@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">create</h3>
					<a href="{{url('admin/portfolio/create')}}" data-toggle="tooltip" title="Create!" class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i></a>
				</div>
				<div class="box-body">
					<form role="form" action="{{url('admin/portfolio/store')}}" method="post" enctype="multipart/form-data">
						{!! csrf_field() !!}
						<div class="form-group">
							<div class="col-md-3">
								<label for="title" {{ $errors->has('title') ? ' has-error' : '' }}>Title:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="{{old('title')}}" required>
								@if ($errors->has('title'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('title') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="description" {{ $errors->has('description') ? ' has-error' : '' }}>Description:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="description" placeholder="Enter Name" name="description" value="{{old('description')}}" required>
								@if ($errors->has('description'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('description') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="url" {{ $errors->has('url') ? ' has-error' : '' }}>Url:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="url" placeholder="Enter Name" name="url" value="{{old('url')}}" required>
								@if ($errors->has('url'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('url') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="image" {{ $errors->has('image') ? ' has-error' : '' }}>image:</label>
							</div>
							<div class="col-md-9">
								<input type="file" name="image[]" class="form-control" id="image" multiple>
								@if ($errors->has('image'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('image') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="display_order" {{ $errors->has('display_order') ? ' has-error' : '' }}>display_order:</label>
							</div>
							<div class="col-md-9">
								<input type="number" class="form-control" id="display_order" placeholder="Enter Name" name="display_order" value="{{old('display_order')}}" required>
								@if ($errors->has('display_order'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('display_order') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="status" {{ $errors->has('status') ? ' has-error' : '' }}>Status:</label>
							</div>
							<div class="col-md-9">
								<select name="status" class="form-control" id="status">
									<option value="active">Active</option>
									<option value="inactive">InActive</option>
								</select>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary btn-flat btn-sm">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
