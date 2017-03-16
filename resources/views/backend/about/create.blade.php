@extends('backend.layouts.app')
@section('title')
	create
@endsection
@section('site_map')
	about/create
@endsection
@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">create</h3>
					<a href="{{url('admin/about/create')}}" data-toggle="tooltip" title="Create!" class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i></a>
				</div>
				<div class="box-body">
					<form role="form" action="{{url('admin/about/store')}}" method="post" enctype="multipart/form-data">
						{!! csrf_field() !!}
						<div class="form-group">
							<div class="col-md-3">
								<label for="name" {{ $errors->has('name') ? ' has-error' : '' }}>Name:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{old('name')}}" required>
								@if ($errors->has('name'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('name') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="job_title" {{ $errors->has('job_title') ? ' has-error' : '' }}>job_title:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="job_title" placeholder="Enter Name" name="job_title" value="{{old('job_title')}}" required>
								@if ($errors->has('job_title'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('job_title') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="gender" {{ $errors->has('gender') ? ' has-error' : '' }}>gender:</label>
							</div>
							<div class="col-md-9">
								<select name="gender" class="form-control" id="gender">
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="email" {{ $errors->has('email') ? ' has-error' : '' }}>email:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="email" placeholder="Enter Name" name="email" value="{{old('email')}}" required>
								@if ($errors->has('email'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="mobile" {{ $errors->has('mobile') ? ' has-error' : '' }}>mobile:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="mobile" placeholder="Enter Name" name="mobile" value="{{old('mobile')}}" required>
								@if ($errors->has('mobile'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('mobile') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="address" {{ $errors->has('address') ? ' has-error' : '' }}>address:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="address" placeholder="Enter Name" name="address" value="{{old('address')}}" required>
								@if ($errors->has('address'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('address') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="url" {{ $errors->has('url') ? ' has-error' : '' }}>url:</label>
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
								<label for="description" {{ $errors->has('description') ? ' has-error' : '' }}>description:</label>
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
						
						<div class="box-footer">
							<button type="submit" class="btn btn-primary btn-flat btn-sm">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
