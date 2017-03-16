@extends('backend.layouts.app')
@section('title')
	edit
@endsection
@section('site_map')
	skill/edit
@endsection
@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">edit</h3>
					<a href="{{url('admin/skill/create')}}" data-toggle="tooltip" title="Create!" class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i></a>
				</div>
				<div class="box-body">
					<form role="form" action="{{url('admin/skill/update/'.$skill['id'])}}" method="post" enctype="multipart/form-data">
						{!! csrf_field() !!}
						<div class="form-group">
							<div class="col-md-3">
								<label for="title" {{ $errors->has('title') ? ' has-error' : '' }}>title:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$skill['title']}}" required>
								@if ($errors->has('title'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('title') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="value" {{ $errors->has('value') ? ' has-error' : '' }}>value:</label>
							</div>
							<div class="col-md-9">
								<input type="number" class="form-control" id="value" placeholder="Enter value" name="value" value="{{$skill['value']}}" required>
								@if ($errors->has('value'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('value') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="type" {{ $errors->has('type') ? ' has-error' : '' }}>Type:</label>
							</div>
							<div class="col-md-9">
								<select name="type" class="form-control" id="type">
									<option value="skill">Skill</option>
									<option value="moreSkill">More Skill</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="display_order" {{ $errors->has('display_order') ? ' has-error' : '' }}>display_order:</label>
							</div>
							<div class="col-md-9">
								<input type="number" class="form-control" id="display_order" placeholder="Enter Name" name="display_order" value="{{$skill['display_order']}}" required>
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
