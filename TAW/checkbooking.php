<!DOCTYPE html>

<?php

session_start();

error_reporting(0);
include_once 'C:\xampp\htdocs\TAW\conn.php';
?>
<?php
include_once 'C:\xampp\htdocs\TAW\template\style.php';

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> Check Booking </title> 
</head>
<body>
<section>
<?php
include_once 'C:\xampp\htdocs\TAW\header.php';
?></section>
<br><br><br><br><br><br><br><br><br><br><br><br>
<section class="search">
<div >
<form method="post">
<label > <h3>Write your e-mail for find your booking</h3> </label>
<input class="srch" type="email" name="search" placeholder="abc@abc.abc"> </input><br>
                <button  class="btn" name="submit">Search</button>
</form>
</body>
</html>
        <tbody>
            <?php
        //if ( isset($str)) { 
            $str = $_POST["search"];
            $sql = "SELECT * FROM booking WHERE email = '$str'";
                        $result = $conn->query($sql);
                      if (isset($_POST["search"])) {
            // read data of each row
			while($row = $result->fetch_assoc()) {
                        ?>
                <h1> Your Booking</h1>
                <br>
                <table class="table">
                    <thead>
                        <tr class="table_head">
                            <th>Full name</th>
                            <th>email</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                 <tr class='results' method='post' ; > 
                    <td>"<?php  echo $row["FullName"] ?>"</td>
                    <td>"<?php echo $row["email"] ?>"</td>
                    <td>" <?php echo $row["date"] ?> "</td>
            </tr>
            <?php
            }
       } 
            $conn->close();
            ?>
        </tbody>
    </table>
    </section> 
</html>
 <br><br><br><br><br><br><br><br>
<?php
include_once 'C:\xampp\htdocs\TAW\template\footer.php';
?>
<?php
exit();
ob_end_flush();
?>
