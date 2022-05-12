<!--<html>
<head>
<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<form class="myform" action="#" method="post"><br>

 Admin Display<br>


<?php

/*$con=mysqli_connect("localhost","root","")or die("Unable to connect to database");

mysqli_select_db($con,"salon management");

?>

<?php

if (isset($_POST['logout'])) {

header('location:index.php');	# code...
}
?>
<div class="tbl-header">


<table>

	<th>Full Name</th>
	<th>Phone</th>
	<th>Email</th>
	<th>Gender</th>
	<th>Service type</th>
	<th>Employee Name</th>
	<th>Extras</th>
	<th>Date and time</th>
	<th>Special Instruction</th>
	
<?php

$con=mysqli_connect("localhost","root","")or die("Unable to connect to database");

mysqli_select_db($con,"salon management");

$query ="SELECT * FROM appointment;";

$query_run = mysqli_query($con,$query);

$num = mysqli_num_rows($query_run);

while ($row = mysqli_fetch_assoc($query_run)) 
{

mysqli_query($con,$query);

?>

<tr>
	<td> <?php echo $row['fullname']; ?></td>
	<td> <?php echo $row['phone']; ?></td>
	<td> <?php echo $row['email']; ?></td>
	<td> <?php echo $row['gender']; ?></td>
	<td> <?php echo $row['service_type']; ?></td>
	<td> <?php echo $row['employee_name']; ?></td>
	<td> <?php echo $row['extras']; ?></td>
	<td> <?php echo $row['appointment date/time']; ?></td>
	<td> <?php echo $row['specialinstructions']; ?></td>

</tr>

<?php
}


?>
</table>


</div>


