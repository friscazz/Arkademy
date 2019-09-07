<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bootcamp</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div id="arka">
		<div id="menu">
			<img id="logo" class="mb-3 ml-2 mt-1" src="arka.png">
			<div id="font" class="mb-3 mt-3" ><h5>ARKADEMY BOOTCAMP</h5></div>
		</div>
	</div>
	<table class="table table-bordered">
	
		<tr >
			<th>Nama</th>
			<th>Work</th>
			<th>Salary</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$sql = mysqli_query($conn,"SELECT nama.name,nama.id,nama.id_salary,nama.id_work,work.nama_work,kategori.salary FROM nama JOIN kategori JOIN work ");
		while ($row = mysqli_fetch_assoc($sql)) {
		?>
		<tr>
			<td><?= $row['name'];?></td>
			<td><?= $row['nama_work'];?></td>
			<td><?= $row['salary'];?></td>
			
			<th></th>
		<?php } ?>
		</tr>
	</table>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>