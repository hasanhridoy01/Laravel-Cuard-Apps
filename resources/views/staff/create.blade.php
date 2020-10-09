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
			<div class="card shadow-lg m-auto" style="width: 400px;">
				<div class="card-header">
					<h2>Staff Sing Up Form</h2>
					@include('validation')
					<a href="{{ route('staff.index') }}" class="btn btn-outline-warning">View All Staff</a>
				</div>
				<div class="card-body">
					<form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="form-group">
							<label for="">Name</label>
							<input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="{{ old('name') }}">
						</div>

						<div class="form-group">
							<label for="">Email</label>
							<input type="text" class="form-control" placeholder="Enter Your Email" name="email" value="{{ old('email') }}">
						</div>

						<div class="form-group">
							<label for="">Cell</label>
							<input type="text" class="form-control" placeholder="Enter Your Cell" name="cell" value="{{ old('cell') }}">
						</div>

						<div class="form-group">
							<label for="">UserName</label>
							<input type="text" class="form-control" placeholder="Enter Your UserName" name="uname" value="{{ old('uname') }}">
						</div>

						<div class="form-group">
							<label for="">Photo</label>
							<input type="file" class="form-control" name="photo">
						</div>

						<div class="form-group">
							<input type="submit" value="Sing Up" name="singup" class="btn btn-outline-success">
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