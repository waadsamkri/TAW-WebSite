<!DOCTYPE HTML> 
<?php
session_start();
ob_start();
include_once 'C:\xampp\htdocs\project_IT230\conn.php';
?>
<?php
$designid  = isset($_GET['designid ']) && is_numeric($_GET['designid ']) ? intval(($_GET['designid '])) : 0;
$query = "SELECT * FROM designs" ;
$result =mysqli_query($conn,$query);
?>
<?php
include_once 'C:\xampp\htdocs\project_IT230\template\style.php';
?>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<?php
include_once 'C:\xampp\htdocs\project_IT230\header.php';
?></section> 
</head>
<body> 
  <section>
<br><br><br><br><br><br>
<h2>Update designs </h2>
<p><span class="error" >* required field</span></p>
 <?php 
          if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
		    $designName = $row['designName'];
        $price = $row['price'];
        $photo = $row['photo'];
                ?>
<form class="card" method="post" action="/project_IT230/edit.php"; >
  <br>
  <img src="images/<?php echo $photo ;?>" alt="Design photo "style=" width:100%">
  <div>
  Design Name: <input type="text" name="designName" value="<?php echo $designName;?>">
  <br><br>
  Price: <input type="text" name="price" value="<?php echo $price;?>">
  <button type="submit" value="edit" name="edit"   name="edit">edit Design</button>
  <br><br>
  <button   type="submit" value="delete" name="delete"  name="edit">Delete Design</button> 
<br>
<br><br>
</form>
<br />
   <?php 
			   }
			   } else {
             echo 'No design added , please add new design .';
         }
   ?>  
</body>
</html>