@extends('layouts.admin.app')
@section('content')
<div class="card">
	<div class="card-body">
		<h5 class="card-title">Complex Layout</h5>
		<p>More complex layouts can also be created with the grid system.</p>
		<form action="{{ route('user.add.save') }}" method="POST">
			@csrf
			<div class="form-group">
				<label for="inputAddress">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Name">
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Email</label>
					<input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">Password</label>
					<input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<label for="inputAddress2">Address 2</label>
				<input type="text" class="form-control" id="inputAddress2" name="adress" placeholder="Apartment, studio, or floor">
			</div>
			
			<button type="submit" class="btn btn-primary">Add User</button>
		</form>
	</div>
</div>
@endsection