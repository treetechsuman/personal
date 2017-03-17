@extends('backend.layouts.app')
@section('title')
	create
@endsection
@section('site_map')
	social/create
@endsection
@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">create</h3>
					<a href="{{url('admin/social/create')}}" data-toggle="tooltip" title="Create!" class="btn btn-primary btn-xs pull-right"><i class="fa fa-facebook"></i><i class="glyphicon glyphicon-plus"></i></a>
				</div>
				<div class="box-body">
					<form role="form" action="{{url('admin/social/store')}}" method="post" enctype="multipart/form-data">
						{!! csrf_field() !!}
						<div class="form-group">
							<div class="col-md-3">
								<label for="icon" {{ $errors->has('icon') ? ' has-error' : '' }}>Icon  :</label>
							</div>
							<div class="col-md-9">

								<input type="text" class="form-control" id="icon" placeholder="Enter Name" name="icon" value="{{old('icon')}}" required>
								@if ($errors->has('icon'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('icon') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="link" {{ $errors->has('link') ? ' has-error' : '' }}>link:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="link" placeholder="Enter Name" name="link" value="{{old('link')}}" required>
								@if ($errors->has('link'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('link') }}</strong>
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
