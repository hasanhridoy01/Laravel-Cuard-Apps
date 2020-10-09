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
					<h2>Single Student Show</h2>
					<a href="{{ url('student-all') }}" class="btn btn-outline-warning">View All Students</a>
				</div>
				<div class="card-body">
					<img class="shadow-lg" src="{{ URL::to('/') }}/media/student/{{ $single_student_data -> photo }}" alt="" style="height: 250px; width: 250px; border: 10px solid white; border-radius: 50%; margin-left: 45px;">
					<h2 style="margin-top: 11px;">{{ $single_student_data -> name }}</h2>
					<table class="table table-striped mt-3">
						<tr>
							<td>Name</td>
							<td>{{ $single_student_data -> name }}</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>hasanhridoy1367@gmail.com</td>
						</tr>
						<tr>
							<td>Cell</td>
							<td>01701007493</td>
						</tr>
						<tr>
							<td>UserName</td>
							<td>Hridu</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	
     <script src="{{ asset('assert/js/jquery-3.5.1.min.js') }}"></script>
	 <script src="{{ asset('assert/bootstrap-4.3.1-dist/js/bootstrap.js') }}"></script>
</body>
</html>