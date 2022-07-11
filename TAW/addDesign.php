
	<?php
session_start();
ob_start();
include_once 'C:\xampp\htdocs\TAW\conn.php';

?>
<?php
include_once 'C:\xampp\htdocs\TAW\template\style.php';
?>
<section>
  <br><br>
<?php
include_once 'C:\xampp\htdocs\TAW\header.php';
?>

</section>
<?php

if (isset($_SESSION['username'])){
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/temolate/style.css">
    <title>Add Design</title>
</head>
<body>
<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<section >
</section>
<section id="add">
    <h2> ADD Design Form</h2>
	<div class="well">
          <form action="" method="post" enctype="multipart/form-data">
		<h3>New Design</h3>
                <div class="control-group">
			<label class="option" for="inputFname"><sup> Design type</sup></label>
			<div class="controls">
                          <select name="designtype">
                              <option >Black & white Skitck</option>
                              <option >Color  Skitck</option>
                              <option >Full home Interface</option>
                          </select>
			</div>
		 </div>
         <br>   
         <!-- Add design -->
		<div class="control-group">
			<label class="control-label" for="inputFname"><sup> Design name </sup></label>
			<div class="controls">
			  <input type="text" id="inputFname" placeholder="Design Name" name="designName" required>
			</div>
		 </div>
         <br>
         <!-- Add price-->
		<div class="control-group">
                    <label class="control-label" for="inputEmail"><sup> Price </sup></label>
                    <div class="controls">
                      <input type="text" placeholder="Price" name="price" required>
                    </div>
                      <br>
                    <!-- Add photo-->
                    <div>
                       <label> <sup> Design Photo </sup><br> </label>
                   <input type="file" name="photo" class="control-group" required />
                  </div>
                </div>	 
                <br> 
	<div class="control-group">
		<div class="controls">
                    <button type="submit" value="Register" class="exclusive shopBtn" name="add">Add Design</button>
		</div>
	</div>
</div>
</section>
<?php
 if(isset($_POST['add'])){
    $price = $_POST['price'];
    $designName = $_POST['designName'];
    $designtype = $_POST['designtype'];
    $photo = $_FILES['photo'];    
    $photoname = $_FILES['photo']['name']; 
    $photosize = $_FILES['photo']['size'];
    $phototmp = $_FILES['photo']['tmp_name'];
    $phototype = $_FILES['photo']['type'];
    $photoAllowedExtension = array("jpeg", "jpg", "png", "gif");
    $exp = explode('.',$photoname);
    $photoExtension = strtolower(end($exp));

    if (in_array($photoExtension, $photoAllowedExtension)) {
      $new_img_name = uniqid("IMG-", true).'.'.$photoExtension;
      $img_upload_path = 'images/'.$new_img_name;
      move_uploaded_file($phototmp, $img_upload_path);
    }
    $resulty = mysqli_query($conn , 'SELECT * FROM designs WHERE  designName ="'.$designName.'"  ');
    if(mysqli_num_rows($resulty) > 0){
             echo '<script> alert("This design are already Added try editing or deleting the design.")</script>';
     }else    
     {
        $sql = "INSERT INTO designs(designName,price,photo,designtype)
             VALUES ('$designName','$price','$new_img_name','$designtype')";
       mysqli_query($conn, $sql);
                                         echo '<script>alert("New design added Successfully .")</script>';
           } 
   }
  ?>
 <?php
include_once 'C:\xampp\htdocs\TAW\template\footer.php';
?>
</body>
</html>
<?php
}else{
    header('Location:main.php');
    exit();
    ob_end_flush();
}
?>


