<?php
$con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'salon management') or die("cannot select DB");  
      
   $query = "select service_type from employee where service_type='Hair Coloring'";

    $con=mysqli_query($con,$query);

    if($row=mysqli_fetch_assoc($con)){
      $service_type= $row['service_type'];
     echo "<h1>Service : $service_type </h1>";
     }
?>
<?php
$con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'salon management') or die("cannot select DB");  
      
   $query = "select service_price from services where service_type='Hair Coloring'";


    $con=mysqli_query($con,$query);

    if($row=mysqli_fetch_assoc($con)){
      $service_type= $row['service_price'];
     echo "<h1>Price: $service_type </h1>";
     }
?>

<?php 
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'salon management') or die("cannot select DB");  

 $query = "select employee_name from employee where service_type='Hair Coloring'";

    $con=mysqli_query($con,$query);

    if($row=mysqli_fetch_assoc($con)){
      $employee= $row['employee_name'];
     echo "<h1> Available Employee: $employee </h1>";
}
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  font-size: 17px;
      background-color: #cba182;
    color: aliceblue;
}

.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); 
  background: rgba(0, 0, 0, 0.5); 
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

.btn {
    border: none;
    background-color: #5d6f7d;
    padding: 14px 28px;
    font-size: 16px;
    font-weight: bold;
    color: white;
    cursor: pointer;
    display: inline-block;
    margin-top: 21px;
    margin-left: 1105px;
      }

.btn:hover {
  background: #7d8992;

}

a {
  text-decoration: none;
  color:white;
}
</style>
</head>
<body>
<form method="POST">
<button name="btn" type="submit" class="btn book">BOOK</button>
</form>
<div class="container">
  <img src="haircolor.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>Hair Coloring</h1>
    <p>We offer different kinds of Hair Coloring.We have well experienced Staffs.</p>

  </div>
</div>

</body>
<?php
session_start();
if (isset($_POST['btn'])) {
 header('location:haircoloringbooking.php');
}
?>
</html>
