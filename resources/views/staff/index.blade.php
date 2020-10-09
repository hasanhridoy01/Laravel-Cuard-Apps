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
			<div class="card shadow-lg m-auto" style="width: 1400px;">
				<div class="card-header">
					<h2>View All Staff</h2>
					@include('validation')
					<a href="{{ route('staff.create') }}" class="btn btn-outline-warning">Add New Staff</a>
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
							@foreach( $all_staff_data as $staff_data )
							<tr>
								<td>{{ $loop -> index + 1 }}</td>
								<td>{{ $staff_data -> name }}</td>
								<td>{{ $staff_data -> email }}</td>
								<td>{{ $staff_data -> cell }}</td>
								<td>{{ $staff_data -> uname }}</td>
								<td>
								   <img src="{{ URL::to('/') }}/media/staff/{{ $staff_data -> photo }}" alt="" style="height: 60px; width: 60px;" alt="">
								</td>
								<td>
									<a href="{{ route('staff.show', $staff_data -> id ) }}" class="btn btn-sm btn-info">View</a>
									<a href="{{ route('staff.edit', $staff_data -> id ) }}" class="btn btn-sm btn-warning">Edit</a>
									<form style="display: inline;" action="{{ route('staff.destroy', $staff_data -> id ) }}" method="POST">
	 								@csrf
	 								@method('DELETE')
	 								<button class="btn btn-sm btn-danger" >Delete</button>
	 							</form>
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