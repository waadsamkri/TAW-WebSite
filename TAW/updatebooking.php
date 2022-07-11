<!DOCTYPE HTML> 


<?php


/// هذي الصفحة لسى فيها مشاكل كثييييرة!!!!!!!!!!

session_start();
ob_start();
include_once 'C:\xampp\htdocs\project_IT230\conn.php';

?>

<?php
//$designid  = isset($_GET['designid ']) && is_numeric($_GET['designid ']) ? intval(($_GET['designid '])) : 0;
$query = "SELECT * FROM booking " ;
$resulty =mysqli_query($conn,$query);

$query3 = "SELECT designName FROM designs     " ;
$result3 =mysqli_query($conn,$query3);

$edit = "";

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
<h2>Update designs</h2>
<p><span class="error">* required field</span></p>


 <?php 


//if ( isset($str)) { 

    $str = $_POST["edit"];
    $sql = "SELECT * FROM booking WHERE email = '$str'";
                $result = $conn->query($sql);
                if (isset($_POST["edit"])) {

          //if ($resulty->num_rows > 0) {
               while($row = $resulty->fetch_assoc()) {
     //   $bookid = $row['bookid'];
		 $FullName = $row['FullName'];
        $phone_num = $row['phone_num'];
        $email = $row['email'];
        $designName = $row['designName'];
        $date = $row['date'];
        $note = $row['note'];

                ?>
<form class="card" method="post" action="/project_IT230/updatebooking.php"; >
 
  <br>

  <div>
        
  Full Name: <input type="text" value="<?php echo $FullName;?>" placeholder="Full Name" name="FullName" >
  
  <br><br>
 Phone Number : <input type="text"    value="<?php echo $phone_num;?> " placeholder="0551234567" name="phone_num" >
  
  <br><br>
    <label> <sup> e-mail: </sup><br> </label>
          <input type="email"  value="<?php echo $email;?>" placeholder="abc@abc.com" name="email" >          
        </div>

  <br><br>
  <label class="control-label" > Car <sup></sup></label>
            <div class="controls">
            <select name="designName">
            <?php 
                          while($row3 = mysqli_fetch_array($result3)):;
                          ?>
                          <option ><?php echo $row3 [0] ;?>  </option>
                          <?php endwhile;  ?>
                            </select>
		 </div>
         <?php
         $mindate = date("Y-m-d");
      ?>
      <label>booking Date
        <input type="date" <?php echo $date;?>  name="date" >
        </label>
<
  <br><br>
  Note: <textarea name="start_date" rows="5" cols="40"><?php echo $note;?></textarea>
  <br><br>
  <button type="submit" value="edit" name="edit"   name="edit">edit booking</button>
  <br> 
  <button   type="submit" value="delete2" name="delete2"  name="edit">booking design </button> 
<br>
</form>
<br />
   <?php    	
			   }
			
			   } else {
             echo 'No booking added , please add some new designs.';
         }
        
   ?>     
       
  
        <?php
        
        exit();
        ob_end_flush();
        ?>
</body>
</html>