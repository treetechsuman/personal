@extends('backend.layouts.app')
@section('title')
	create
@endsection
@section('site_map')
	experience/create
@endsection
@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">create</h3>
					<a href="{{url('admin/experience/create')}}" data-toggle="tooltip" title="Create!" class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i></a>
				</div>
				<div class="box-body">
					<form role="form" action="{{url('admin/experience/store')}}" method="post" enctype="multipart/form-data">
						{!! csrf_field() !!}
						<div class="form-group">
							<div class="col-md-3">
								<label for="office" {{ $errors->has('office') ? ' has-error' : '' }}>office:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="office" placeholder="Enter office" name="office" value="{{old('office')}}" required>
								@if ($errors->has('office'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('office') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="post" {{ $errors->has('post') ? ' has-error' : '' }}>post:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="post" placeholder="Enter post" name="post" value="{{old('post')}}" required>
								@if ($errors->has('post'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('post') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="description" {{ $errors->has('description') ? ' has-error' : '' }}>description:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="description" placeholder="Enter description" name="description" value="{{old('description')}}" required>
								@if ($errors->has('description'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('description') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="from" {{ $errors->has('from') ? ' has-error' : '' }}>from:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="from" placeholder="Enter from" name="from" value="{{old('from')}}" required>
								@if ($errors->has('from'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('from') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="to" {{ $errors->has('to') ? ' has-error' : '' }}>to:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="to" placeholder="Enter to" name="to" value="{{old('to')}}" required>
								@if ($errors->has('to'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('to') }}</strong>
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
