
   
<!DOCTYPE html>
<html>
<head>
<title> TAW </title>
	<?php
session_start();
include_once 'C:\xampp\htdocs\TAW\conn.php';

?>
<?php
include_once 'C:\xampp\htdocs\TAW\template\style.php';
?>
<section>
<?php
include_once 'C:\xampp\htdocs\TAW\header.php';
?>
</section>

<section id="first">
        <div class="back_image" >
		<img class="back_image" src="background/backround2.jpg" alt="" >
          <div class="text">
            <h2>Welcome to</h2><span><h1 id="gear"> TAW </h1></span>
            <h2>For home designs </h2>

          </div>
        </div>
</section>

<?php
    
	$all='All';
           if( $all){
               $sql = "SELECT * FROM designs ";
               $resulty = $conn->query($sql);
           } 
       ?> 
<?php 
            if ($resulty->num_rows > 0) {
              while($row = $resulty->fetch_assoc()) {
              $_SESSION['designName'] = $row['designName'];
              $_SESSION['designtype'] = $row['designtype'];
              $_SESSION['photo'] = $row['photo'];
              $_SESSION['price'] = $row['price'];
               
             
               $designName = $_SESSION['designName'];
               $designtype = $_SESSION['designtype'];
               $photo = $_SESSION['photo'];
               $price = $_SESSION['price'];
			  

                ?>

</head>
<body>
<section id="main_page">
	</div>
	<br><br><br>
  <div class="slideshow-container">
    	<div class="card"  >
					<img src="images/<?php echo $photo ;?>" alt=" design " style="width:100%">
					<h1><?php echo $designName; ?>  - <?php echo $designtype;?></h1>
					<p ><?php echo $price ;?> SAR</p>
					<p><button ><a class="booking_button" href="/TAW/addbooking.php"> Booking</a></button></p>
					</div>
                <br />    
			</form>
      </div>
      </div>
	</div>
	<?php }
                    } else {
                        echo 'No Products available';
                    }
                 ?> 
     </form>
	 <section >
</body>




<?PHP
include_once 'C:\xampp\htdocs\TAW\template\footer.php';
?>
</html>


