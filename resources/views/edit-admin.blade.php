@extends('layouts.app')
@extends('layouts.admin')

@section('content')

@section('body')

<div class="panel panel-default">
	<div class="panel-body">
		<h2>Update Admin Profile</h2>
		<hr>
		<a href="{{ url('/home') }}" class="btn btn-primary btn-md"><i class="fa fa-dashboard"></i> Dashboard</a>
		<a href="{{ url('/all-staff-members') }}" class="btn btn-primary btn-md"><i class="fa fa-users"></i> View staff members</a>
		<hr>
		@include('parts.message-block')
		<form action="{{ route('update-admin',$user) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="form-group">
				<label for="name">Full name</label>
				<input type="text" name="name" placeholder="Full name" value="{{ $user->name }}" class="form-control">
			</div>


			<div class="form-group">
				<label for="email">Email Address</label>
				<input type="email" name="email" placeholder="Email Address" value="{{ $user->email }}" class="form-control">
			</div>

			<div class="form-group">
				<label for="level">Staff Level</label>
				<select name="is_super_admin" class="form-control" required>
					<option value="">Select Admin Type</option>
					<option value="0">Normal</option>
					<option value="1">Super</option>
				</select>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-md">Edit Admin</button>
			</div>
		</form>
	</div>
</div>

@endsection

@endsection