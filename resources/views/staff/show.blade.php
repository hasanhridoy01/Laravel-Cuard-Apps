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
					<h2>Single Staff Show</h2>
					<a href="{{ route('staff.index') }}" class="btn btn-outline-warning">View All Staff</a>
				</div>
				<div class="card-body">
					<img class="shadow-lg" src="{{ URL::to('/') }}/media/staff/{{ $single_show_data -> photo }}" alt="" style=" height: 250px; width: 250px; border: 10px solid white; border-radius: 50%; margin-left: 47px;">
					<h2 style="margin-top: 11px;">{{ $single_show_data -> name }}</h2>
					<table class="table table-striped mt-3">
						<tr>
							<td>Name</td>
							<td>{{ $single_show_data -> name }}</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>{{ $single_show_data -> email }}</td>
						</tr>
						<tr>
							<td>Cell</td>
							<td>{{ $single_show_data -> cell }}</td>
						</tr>
						<tr>
							<td>UserName</td>
							<td>{{ $single_show_data -> uname }}</td>
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