<?php
include_once 'C:\xampp\htdocs\TAW\template\style.php';
?>

<!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   

    
  
</head>
  <header>
      
     <img id="logo" src=" logo/logo.png" alt="" height="50px" width="150px">
     
    <nav class="navigation">
      <ul>
       <?php 
      if (isset($_SESSION['username'])){
?></a> 
        <li> <a href="/TAW/contact.php ">Contact us</a>  </li> 
        <li> <a href="#">Booking</a>  
                   <ul> 
                <li> <a  href="/TAW/checkbooking.php ">My Booking</a>  </li> 
                <li> <a  href="/TAW/addbooking.php"> New Booking </a></li>
                   </ul>
        </li> 
        <li>  <a href="/TAW/main.php">HOME</a> </li>
        <li> <a href="#">
       <?php      echo  $_SESSION['username']; ?></a> 
                   <ul> 
                <li> <a  href="/TAW/addDesign.php ">Add Design </a>  </li> 
                <li> <a  href="/TAW/updatedesign.php ">update Design</a>  </li> 
                <li> <a  href="/TAW/booking.php ">Booking</a>  </li> 
                   
                <li> <a id="logout" href="/TAW/logout.php"> Logout </a></li>
                   </ul>
       </li> 
     </ul>
    </nav>
</header> 
<?php

}else{
  ?>
       <li> <a href="/TAW/contact.php ">Contact us</a>  </li> 
       <li> <a href="#">Booking</a>  
              <ul> 
                <li> <a  href="/TAW/checkbooking.php "> My Booking</a>  </li> 
                <li> <a  href="/TAW/addbooking.php"> New Booking </a>  </li>
              </ul>
       </li>      
              <li>  <a href="/TAW/main.php">HOME</a> </li>
              <li> <a href="/TAW/login.php ">Login</a> </li>
        <body>  
</body>
     </ul>
    </nav>
</header>
  <?php 
    }
  ?>
</html>
