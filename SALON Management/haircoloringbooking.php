<?php
$con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'salon management') or die("cannot select DB");  
      
   $query = "select * from services";

    $con=mysqli_query($con,$query);

    if($row=mysqli_fetch_assoc($con)){
    $services =$row['service_type'];
     }

?>

<?php 
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'salon management') or die("cannot select DB");  

 $query = "select employee_name from employee where service_type='haircoloring'";

    $con=mysqli_query($con,$query);

    if($row=mysqli_fetch_assoc($con)){
      $employees= $row['employee_name'];
 
}
?>
<!doctype html>
<html>

<link href="https://fonts.googleapis.com/css?family=Unkempt" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="SMbooking.css">

<body>
<img src="login.jpg">
 
<div class="bg-img">

  <div class="container">

 <form method="POST">
  <h1 style="text-align:center;">BOOK APPOINTMENT</h1>
  <h1 style="text-align:center;">FOR HAIR COLORING</h1>
  <label for="full name">Full Name</label>
  <input type="text" name="name" placeholder="Fullname" required>

  <label for="phone_number">Phone </label>
  <input type="tel" name="phone" placeholder="Phone" required>

  <label for="email_address">Email </label>
  <input type="email" name="email"placeholder="Email" required>

<label for="gender">Gender</label>
  <select name="gender" id="gender">
    <option value="" selected="selected">Select One</option>
    <option value="male" >Male</option>
    <option value="female" >Female</option>
    <option value="others" >Others</option>
  </select>

  

  

  <fieldset>
    <legend>Extras</legend>
    <label> <input type="checkbox" name="extras" id="extras_baby" value="baby"> Baby Seat </label>
    <label> <input type="checkbox" name="extras" id="extras_wheel" value="wheelchair"> Wheelchair Access </label>
    <label> <input type="checkbox" name="extras" id="extras_bag" value="bag"> Baggage </label>
  </fieldset>

  <label for="appointment_time">Appointment Date/Time</label>
  <input type="datetime-local" name="time" id="appointment_time" required>


 
  <label for="comments">Special Instructions</label>
  <textarea name="comments" id="comments" maxlength="500"></textarea>

  <button type="submit" name="sbt">Submit Booking</button>

</form>
</div>
<div class="head-container">
 
</div>
</div>
</body>
<?php  

if(isset($_POST["sbt"])){ 

    $phone=$_POST['phone']; 
    $name=$_POST['name'];
    $email=$_POST['email']; 
    $gender=$_POST['gender']; 
    $extras=$_POST['extras']; 
    $time = $_POST['time'];
    $comments = $_POST['comments'];
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'salon management') or die("cannot select DB");  
  
    
   
    $sql="INSERT INTO appointment VALUES('$name','$phone','$email','$gender','$services','$employees','$extras','$time','$comments')";  
  
    $result=mysqli_query($con,$sql);  
        if($result){  

    header("Location: SMhomepage.php");    

    } else {  
    echo "Failure!"; 

    }
  
  
}
?>  
</html>


