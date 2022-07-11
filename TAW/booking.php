<!DOCTYPE html>

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
<?php

if (isset($_SESSION['username'])){ 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Booksing</title>
</head>
<section>
</section>
    <h1>List of Booking</h1>
    <br>
    <table class="table">
        <thead>
			<tr class="table_head">
				<th>Booking ID</th>
				<th>Full name</th>
				<th>email</th>
				<th>Dasign</th>
				<th> Date</th>
			</tr>
		</thead>
        <tbody>
            <?php
            // read all row from database table
			$sql = "SELECT * FROM booking ";
			$result = $conn->query($sql);
            if (!$result) {
				die("Invalid query: " . $conn->error);
			}
            // read data of each row
			while($row = $result->fetch_assoc()) {
               ?>
               <form  method="post" action="/TAW/editbooking.php"; >
                <tr class='results' > 
                <td><?php  echo $row["bookid"] ?></td>
                <td><?php  echo $row["FullName"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["designName"] ?> </td>
                <td><?php echo $row["date"] ?> </td>
                <td> 
                    </form>
                </td>
        </tr>
      <?php
            }
            $conn->close();
            ?> 
        </tbody>
    </table>
</body>
</section>
</html>
<section>
 <?php
include_once 'C:\xampp\htdocs\TAW\template\footer.php';
?>   
<?php
}else{
    header('Location:main.php');
    exit();
    ob_end_flush();
}
?>
