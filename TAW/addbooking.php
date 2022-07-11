<?php
session_start();
ob_start();
 
include_once 'C:\xampp\htdocs\TAW\conn.php';

?>

<?php
$query1 = "SELECT designtype FROM designs" ;
$result1 =mysqli_query($conn,$query1);

$query3 = "SELECT designName FROM designs     " ;
$result3 =mysqli_query($conn,$query3);

$ref_booking =rand() ;

?>
<?php
include_once 'C:\xampp\htdocs\TAW\template\style.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/temolate/style.css">  
    <title>Booking for Design apointment</title>
</head>
<body> 
<?php
// define variables and set to empty values
  $emailErr = $FullNameErr ="";
  $email = $FullName= $phone_num  = $ref_booking =  "";
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["FullName"])) {
    $FullName = "";
  } else {
    $FullName = test_input($_POST["FullName"]);
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<section >
<?php
include_once 'C:\xampp\htdocs\TAW\header.php'
?>

<script >
	function validate(){
  var FullName = document.getElementById("FullName").value;
  var phone_num = document.getElementById("phone_num").value;
  var email = document.getElementById("email").value;  
  var date = document.getElementById("date").value;
  var error_message = document.getElementById("error_message");
  error_message.style.padding = "10px";  
  var text;
  if(FullName.length < 5){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }
  if(date  < date()){
    text = "Please Enter Correct date after today";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone_num) || phone_num.length != 10){
    text = "Please Enter valid Phone Number";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
 
  alert("Form Submitted Successfully!");
  return true;
}
		</script>
<section class="main">
<div class="content">
</section>
<section id="back_bage">
<section id="add" >
	<div class="well">
  <form class="form_book" action="<?PHP echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<h2 id="book_form"> Booking Design apointment Form</h2>
          <strong>Please Enter Your Infromation</strong>
          <br>
        <div class="control-group">
			<label class="head_book"  >  <strong> Name </strong> </label>
			<div class="controls">
			  <input type="text" value="<?php echo $FullName;?>" placeholder="Full Name" name="FullName" required>
			</div>
		 </div>
         <br>
         <div class="control-group">
			<label class="head_book" >  <strong> Phone number </strong> </label>
			<div class="controls">
			  <input type="text"    value="<?php echo $phone_num;?> " placeholder="0500000000" name="phone_num" required>
			</div>
		 </div>
         <br> 
         <div class="control-group">
			<label class="head_book" for="inputemail"> <strong> e-mail </strong> </label>
			<div class="controls">
			  <input type="email"  value="<?php echo $email;?>" placeholder="abc@abc.com" name="email" required>
			</div>
		 </div>
<br>
                <div class="control-group">
			<label class="head_book">  <strong>Design type</strong> </label>
			<div class="controls">
                          <select name="designtype">
                          <?php 
                          while($row1 = mysqli_fetch_array($result1)):;
                          ?>
                          <option ><?php echo $row1 [0];?> </option>
                          <?php endwhile;?> 
                          </select>
			</div>
		 </div>
         <br>
         <?php    
      $mindate = date("Y-m-d");
      ?>
      <label class="head_book" >  <strong> booking Date</strong>
        <input type="date"  name="date" required>
        </label>
      </select>	 
                <br>
                <div> <notextarea     value=" <?php echo $ref_booking ?>  " name="ref_booking">  </notextarea>   </div>
                
	<div class="control-group">
		<div class="controls">
                    <button type="submit" value="booking" class="butt_book" name="booking">Add booking</button>
		</div>
	</div>
</div>
</section>
<footer>
<?php
include_once 'C:\xampp\htdocs\TAW\template\footer.php';
?>
</footer>
</section>
<?php
if(isset($_POST['booking'])) {
    $FullName = $_POST['FullName'];
    $email = $_POST['email'];
    $designName = $_POST['designName'];
    $date = $_POST['date'];
    $ref_booking = $_POST['ref_booking']  ;
    $phone_num =  $_POST['phone_num'];
    $resulty = mysqli_query($conn, 'SELECT * from booking where  designName ="'.$designName.'" AND email="'.$email.'"  ');
    if (mysqli_num_rows($resulty) == 1){
             echo '<script>alert("This booking already Added try agin.")</script>';
     }else {
        $sql = "INSERT INTO booking (designName,FullName,email,date, ref_booking , phone_num )
             VALUES ('$designName','$FullName','$email','$date','$ref_booking', '$phone_num')";
       mysqli_query($conn, $sql);
                                    echo '<script>alert("New booking added Successfully .") </script>';
           }
}
        ?>
</body>
</html>
<?php
  exit();
ob_end_flush();
?>