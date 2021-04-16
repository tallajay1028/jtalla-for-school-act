<?php 
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM users";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Pageddasdasbdaslfsnalsdjasl;djasdjas</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->

</head>
<body>
	<center>
		<div class="container">
		<h2>users</h2>
	<table class="table">
		<thead>
			<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>	
			<?php
				if ($result->num_rows > 0) {
					//output data of each row
					while ($row = $result->fetch_assoc()) {
			?>

						<tr>
						<td style="font-family:	Copperplate; font-weight: bolder; background-color: rgba(10,10,10,0.3);"><?php echo $row['id']; ?></td>
						<td style="font-family:	Copperplate; font-weight: bolder;  background-color: rgba(30,10,10,0.3);"><?php echo $row['firstname']; ?></td>
						<td style="font-family:	Copperplate; font-weight: bolder;  background-color: rgba(70,10,10,0.3);"><?php echo $row['lastname']; ?></td>
						<td style="font-family:	Copperplate; font-weight: bolder;  background-color: rgba(110,10,10,0.3);"><?php echo $row['email']; ?></td>
						<td style="font-family:	Copperplate; font-weight: bolder;  background-color: rgba(180,10,10,0.3);"><?php echo $row['gender']; ?></td>
						<td style="font-family:	Copperplate; font-weight: bolder;  background-color: rgba(220,10,10,0.3);"><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>" style="background-color: rgba(80,155,250,1); position: absolute;text-align: center; width: 3vw; height: 3vh; color: white;">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>"style="background-color: rgba(200,55,50,1); position: relative; width: 3px; height: 3vh; color: white; left: 50px;">Delete</a></td>
						</tr>	
						
			<?php		}
				}
			?>
		        	
		</tbody>
	</table>
		</div>
	</center>
	

</body>
</html>