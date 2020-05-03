<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

	<title>Employees</title>
</head>
<body>
	<div class="container mt-5">
		<?php if (isset($_SESSION['notice'])): ?>
		<div class="alert alert-danger">
			<?php echo $_SESSION['notice']; unset($_SESSION['notice']); ?>
		</div>
		<?php endif;?>
		<div class="row">
			<div class="col-12 col-sm-10">
				<form class="form-inline mb-3" method="GET">
					<div class="form-group mr-2">
						<select class="form-control" name="salary">
							<option<?php echo !isset($_GET['salary']) ? ' selected="selected"' : ''; ?> disabled="disabled">
								Please select salary
							</option>
							<option<?php showSelected('salary', 100) ?>>100</option>

							<option<?php showSelected('salary', 500) ?>>500</option>

							<option<?php showSelected('salary', 1000) ?>>1000</option>
						</select>
					</div>

					<div class="form-group mr-2">
						<select class="form-control" name="position">
							<option<?php echo !isset($_GET['position']) ? ' selected="selected"' : ''; ?> disabled="disabled">
								Please select position
							</option>
							<?php foreach($positions as $position): ?>
								<option value="<?php show($position->id); ?>"<?php showSelected('position', $position->id) ?>>
								<?php show($position->name); ?>
							</option>
							<?php endforeach;?>
						</select>
					</div>
					
					
					<button type="submit" class="btn btn-primary mr-2">Filter</button>
					<a href="http://php.local/www/FullStack/HomeWork/hw_final_base/public/" class="btn btn-danger">Clear</a>
				</form>
			</div>
			<div class="col-12 col-sm-2">
				<button class="btn btn-success btn-block" data-toggle="modal" data-target="#new-employee">Add</button>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Surname</th>
						<th>Position</th>
						<th>Salary</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($employees as $employee): ?>
					<tr>
						<td><?php show($employee->id); ?></td>
						<td><?php show($employee->name); ?></td>
						<td><?php show($employee->surname); ?></td>
						<td><?php show($employee->position); ?></td>
						<td><?php show($employee->salary); ?></td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="new-employee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">New Employee</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="index.php?page=add" method="POST">
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="Enter name" name="name" value="<?php echo getPrevVal('name'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Surname</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="Enter surname" name="surname" value="<?php echo getPrevVal('surname'); ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Position</label>
							<div class="col-sm-10">
								<select class="form-control" name="position">
									<option selected="selected" disabled="disabled">
										Please select position
									</option>
									<?php foreach($positions as $position): ?>
										<option value="<?php show($position->id); ?>">
											<?php show($position->name); ?>
										</option>
									<?php endforeach;?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Salary</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" placeholder="Enter salary" name="salary" value="<?php echo getPrevVal('salary'); ?>">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" id="add-employee">Add</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>

	<script src="assets/app.js"></script>
</body>
</html>