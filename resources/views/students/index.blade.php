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
			<div class="card shadow-lg m-auto" style="width: 1500px;">
				<div class="card-header">
					<h2>View All Students</h2>
					@include('validation')
					<a href="{{ url('student') }}" class="btn btn-outline-warning">Add New Student</a>
				</div>
				<div class="card-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Email</th>
								<th>Cell</th>
								<th>UserName</th>
								<th>Photo</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach( $all_student_data as $student_data )
							<tr>
								<td>{{ $loop -> index + 1 }}</td>
								<td>{{ $student_data -> name }}</td>
								<td>{{ $student_data -> email }}</td>
								<td>{{ $student_data -> cell }}</td>
								<td>{{ $student_data -> uname }}</td>
								<td>
								   <img src="{{ URL::to('/') }}/media/student/{{ $student_data -> photo }}" alt="" style="height: 60px; width: 60px;" alt="">
								</td>
								<td>
									<a href="{{ url('student-show/' . $student_data -> id ) }}" class="btn btn-sm btn-info">View</a>
									<a href="{{ url('student-edit/' . $student_data -> id ) }}" class="btn btn-sm btn-warning">Edit</a>
									<a href="{{ url('student-delete/' . $student_data -> id ) }}" class="btn btn-sm btn-danger">Delete</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
     <script src="{{ asset('assert/js/jquery-3.5.1.min.js') }}"></script>
	 <script src="{{ asset('assert/bootstrap-4.3.1-dist/js/bootstrap.js') }}"></script>
</body>
</html>