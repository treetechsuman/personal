@extends('backend.layouts.app')
@section('title')
	edit
@endsection
@section('site_map')
	message/edit
@endsection
@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">edit</h3>
					<a href="{{url('admin/message/create')}}" data-toggle="tooltip" title="Create!" class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i></a>
				</div>
				<div class="box-body">
					<form role="form" action="{{url('admin/message/update/'.$message['id'])}}" method="post" enctype="multipart/form-data">
						{!! csrf_field() !!}
						<div class="form-group">
							<div class="col-md-3">
								<label for="name" {{ $errors->has('name') ? ' has-error' : '' }}>Name:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{$message['name']}}" required>
								@if ($errors->has('name'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('name') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="email" {{ $errors->has('email') ? ' has-error' : '' }}>email:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$message['email']}}" required>
								@if ($errors->has('email'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="phone" {{ $errors->has('phone') ? ' has-error' : '' }}>phone:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="{{$message['phone']}}" required>
								@if ($errors->has('phone'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('phone') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="message" {{ $errors->has('message') ? ' has-error' : '' }}>message:</label>
							</div>
							<div class="col-md-9">
								<input type="text" class="form-control" id="message" placeholder="Enter message" name="message" value="{{$message['message']}}" required>
								@if ($errors->has('message'))
									<span class="help-block" style="color: #cc0000">
										<strong> * {{ $errors->first('message') }}</strong>
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
									<option value="unread">Unread</option>
									<option value="read">Read</option>
									<option value="replied">Replied</option>
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
