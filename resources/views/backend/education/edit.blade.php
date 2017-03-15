@extends('backend.layouts.app')
@section('title')
	edit
@endsection
@section('site_map')
	education/edit
@endsection
@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">edit</h3>
					<a href="{{url('admin/education/create')}}" data-toggle="tooltip" title="Create!" class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i></a>
				</div>
				<div class="box-body">
					<form role="form" action="{{url('admin/education/update/'.$education['id'])}}" method="post" enctype="multipart/form-data">
						{!! csrf_field() !!}
						<div class="form-group">
							<div class="col-md-3">
								<label for="institute" {{ $errors->has('institute') ? ' has-error' : '' }}>Institute:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="institute" placeholder="Enter institute" name="institute" value="{{$education['institute']}}" required>
								@if ($errors->has('institute'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('institute') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="programm" {{ $errors->has('programm') ? ' has-error' : '' }}>Programm:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="programm" placeholder="Enter programm" name="programm" value="{{$education['programm']}}" required>
								@if ($errors->has('programm'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('programm') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="university" {{ $errors->has('university') ? ' has-error' : '' }}>University:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="university" placeholder="Enter university" name="university" value="{{$education['university']}}" required>
								@if ($errors->has('university'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('university') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="start" {{ $errors->has('start') ? ' has-error' : '' }}>Start Date:</label>
							</div>
							<div class="col-md-9">
								<input type="date" class="form-control" id="start" placeholder="Enter start" name="start" value="{{$education['start']}}" required>
								@if ($errors->has('start'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('start') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="end" {{ $errors->has('end') ? ' has-error' : '' }}>End Date:</label>
							</div>
							<div class="col-md-9">
								<input type="date" class="form-control" id="end" placeholder="Enter end" name="end" value="{{$education['end']}}" required>
								@if ($errors->has('end'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('end') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="description" {{ $errors->has('description') ? ' has-error' : '' }}>Description:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="description" placeholder="Enter description" name="description" value="{{$education['description']}}" required>
								@if ($errors->has('description'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('description') }}</strong>
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
