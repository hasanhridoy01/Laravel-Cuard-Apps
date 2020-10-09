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
			<div class="card shadow-lg m-auto">
				<div class="card-header">
					<h2>Update {{ $edit_data -> name }} Data</h2>
					@include('validation')
					<a href="{{ url('student-all') }}" class="btn btn-outline-warning">View All Students</a>
				</div>
				<div class="card-body">
					<form action="{{ url('student-update/' . $edit_data -> id ) }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="form-group">
							<label for="">Name</label>
							<input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="{{ $edit_data -> name }}">
						</div>

						<div class="form-group">
							<label for="">Email</label>
							<input type="text" class="form-control" placeholder="Enter Your Email" name="email" value="{{ $edit_data -> email }}">
						</div>

						<div class="form-group">
							<label for="">Cell</label>
							<input type="text" class="form-control" placeholder="Enter Your Cell" name="cell" value="{{ $edit_data -> cell }}">
						</div>

						<div class="form-group">
							<label for="">UserName</label>
							<input type="text" class="form-control" placeholder="Enter Your UserName" name="uname" value="{{ $edit_data -> uname }}">
						</div>

                        <div class="form-group">
                        	<img src="{{ URL::to('/') }}/media/student/{{ $edit_data -> photo }}" alt="" style="height: 200px; width: 200px;">
                        	<input type="hidden" value="{{ $edit_data -> photo }}" name="old_photo">
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