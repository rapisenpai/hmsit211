<?php
include_once 'includes/dbs.inc.php';
$conn = connection();

if (!isset($_SESSION)) {
	session_start();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HMS</title>
	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
</head>

<body>

	<nav class="container navbar navbar-expand-lg mt-2">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>


			<!-- Button trigger modal -->
			<button type="button" style="text-decoration: none; border: none; background-color: white; " data-bs-toggle="modal" data-bs-target="#exampleModal">
				<img src="./img/PngItem_1468479.png" style="border-radius: 100%;" height="40px">

			</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">Logout</h1>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to log-off?</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
							<a href="./index.php" type="button" class="btn btn-danger">Yes</a>
						</div>
					</div>
				</div>
			</div>
			<p class="navbar-brand" href="#"><?php ?></p>

			<div class="d-flex justify-content-end">
				<form class=" d-flex">
					<input class="form-control me-2" id="myInput" name="search" type="search" placeholder="Search" onkeyup="myFunction()" aria-label="Search">
					<!-- <button class="btn btn-outline-success" onkeyup="myFunction()" type="submit">Search</button> -->
				</form>
			</div>
		</div>
	</nav>





	<div class="container mt-1">
		<div class="p-2 d-flex justify-content-between d-flex align-items-center">
			<div>
				<h1 class="fw-bold">Manage Patient Information</h1>
			</div>
			<div>
				<a href="add.php" type="button" class="btn btn-success">Add new</a>
			</div>

		</div>
		<div>
			<?php
			if (isset($_GET['delete'])) {
			?>
				<p class="bg-danger text-light rounded p-3">You deleted an item.</p>
			<?php
			}
			?>

		</div>
		<table class="table table-striped" id="myTable">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Birthdate</th>
					<th scope="col">Sex</th>
					<th scope="col">Status</th>
					<th scope="col">Address</th>
					<th scope="col">Phone Number</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php do { ?>
					<tr>
						<th scope="row"><?php echo $row['patientID'] . "<br>"; ?></th>
						<td><?php echo $row['firstName'] . " " . $row['middleName'] .  " " . $row['lastName'] . "<br>"; ?></td>
						<td><?php echo $row['dateOfBirth'] . "<br>"; ?></td>
						<td><?php echo $row['gender'] . "<br>"; ?></td>
						<td><?php echo $row['maritalStatus'] . "<br>"; ?></td>
						<td><?php echo $row['p_address'] . "<br>"; ?></td>
						<td><?php echo $row['contactNumber'] . "<br>"; ?></td>
						<td>
							<a href="view.php?ID=<?php echo $row['patientID'] ?>" type="button" class="btn btn-primary">View</a>
							<a href="delete.php?ID=<?php echo $row['patientID'] ?>" type="button" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				<?php } while ($row = $patientInformation->fetch_assoc()) ?>
			</tbody>
		</table>
	</div>
	<script src="js/bootstrap.bundle.min.js"></script>



	<script>
		function myFunction() {
			var input, filter, table, tr, td, i, txtValue;
			input = document.getElementById("myInput");
			filter = input.value.toUpperCase();
			table = document.getElementById("myTable");
			tr = table.getElementsByTagName("tr");
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[0];
				if (td) {
					txtValue = td.textContent || td.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
						tr[i].style.display = "";
					} else {
						tr[i].style.display = "none";
					}
				}
			}
		}
	</script>




</body>

</html>