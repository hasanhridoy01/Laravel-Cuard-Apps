<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Cuard</title>
	<link rel="stylesheet" href="{{ asset('assert/bootstrap-4.3.1-dist/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assert/css/style.css') }}">
</head>
<body>
	<div class="container">
		<div class="row mt-5 mb-5">
			<div class="card shadow-lg m-auto" style="width: 420px;">
				<div class="card-header">
					<h2>Staff {{ $single_edit_data -> name }} Form</h2>
					<a href="{{ route('staff.index') }}" class="btn btn-outline-warning">View All Staff</a>
				</div>
				<div class="card-body">
					<form action="{{ route('staff.update', $single_edit_data -> id ) }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')

						<div class="form-group">
							<label for="">Name</label>
							<input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="{{ $single_edit_data -> name }}">
						</div>

						<div class="form-group">
							<label for="">Email</label>
							<input type="text" class="form-control" placeholder="Enter Your Email" name="email" value="{{ $single_edit_data -> email }}">
						</div>

						<div class="form-group">
							<label for="">Cell</label>
							<input type="text" class="form-control" placeholder="Enter Your Cell" name="cell" value="{{ $single_edit_data -> cell }}">
						</div>

						<div class="form-group">
							<label for="">UserName</label>
							<input name="uname" type="text" class="form-control" placeholder="Enter Your UserName" value="{{ $single_edit_data -> uname }}">
						</div>

						<div class="form-group">
							<img style="height: 200px; width: 200px;" src="{{ URL::to('/') }}/media/staff/{{ $single_edit_data -> photo }}" alt="">
							<input type="hidden" value="{{ $single_edit_data -> photo }}" name="old_photo">
						</div>

						<div class="form-group">
							<label for="">Photo</label>
							<input type="file" class="form-control" name="new_photo">
						</div>

						<div class="form-group">
							<input type="submit" value="Update" name="singup" class="btn btn-outline-success">
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	
     <script src="{{ asset('assert/js/jquery-3.5.1.min.js') }}"></script>
	 <script src="{{ asset('assert/bootstrap-4.3.1-dist/js/bootstrap.js') }}"></script>
</body>
</html>