<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="display.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>

 <div class="bg-img">

   <div class="container">
   
    <div class="topnav-right">
   <a href="admin.php"><i class="fa fa-fw fa-home"></i> Home</a> 
   <a href="frontpage.php"><i class="fas fa-sign-out-alt"></i> Logout</a> 


   </div>


<a href="admin.php"> Back</a>
<div style="margin-left:80px;">
  <h2>ADMIN</h2><h4>ADMIN DISPLAY</h4>
<form class="myform" action="#" method="post"><br>


</form>
</div>
</body>
</html>

<?php

$con=mysqli_connect("localhost","root","")or die("Unable to connect to database");

mysqli_select_db($con,"salon management");

?>

<?php

if (isset($_POST['logout'])) {

header('location:index.php');	# code...
}
?>


<div class="tbl-header">
	<div class="table1">
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
<div class="table2">
<table>

	<th>Email</th>
	<th>Type</th>
	<th>Time</th>
	
	
<?php

$con=mysqli_connect("localhost","root","")or die("Unable to connect to database");

mysqli_select_db($con,"salon management");

$query ="SELECT * FROM appointment_log;";

$query_run = mysqli_query($con,$query);

$num = mysqli_num_rows($query_run);

while ($row = mysqli_fetch_assoc($query_run)) 
{

mysqli_query($con,$query);

?>

<tr>
	<td> <?php echo $row['email']; ?></td>
	<td> <?php echo $row['Type']; ?></td>
	<td> <?php echo $row['Time']; ?></td>
</tr>

<?php
}


?>
</table>

</div>


