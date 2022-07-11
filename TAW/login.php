<!DOCTYPE html>

<?php
session_start();
ob_start();
 
include_once 'C:\xampp\htdocs\TAW\conn.php';

?>

<?php
include_once 'C:\xampp\htdocs\TAW\template\style.php';
?>


<html lang="en">
<head>
    <title> TAW </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
	<section>
	<?php
include_once 'C:\xampp\htdocs\TAW\header.php';
?>	
	</section>


<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <section class="main">
        </div> <br><br><br><br><br><br><br><br><br><br>
        <div class="content">
            <h1>WELCOM TO <br><span>TAW</span> </h1> <br>
            <p class="par">If you are  <strong> NOT ADMIN</strong> press <br> </p>

                <button class="cn"><a href="/TAW/main.php">HERE</a></button>
                <div >
                <form class="form_login" action="<?PHP echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <h2>Admin Login </h2>
                    <br>
                    <input type="text" id='username' name='username' placeholder="User Name" /> 
			        <input type="password" id='pass' name='pass'  placeholder="Password" />
                    <br> <br>
                    <button class="btnn"><a href="#">Login</a></button>
                    <br><br>
                </div>
                    </div>
                </div>
        </div>
    </div>

	</section>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $username = $_POST['username'];
 $pass =sha1( $_POST['pass']);

 
 
 $sql = "SELECT * FROM user WHERE username='$username' AND pass='$pass' AND GroupID = 1   ";
 $result = $conn->query($sql);
 $rowcount = mysqli_num_rows($result);

 if ($rowcount == 0) {
 
 echo '<script>alert("There is Username OR Password WRONG")</script>';
 }
 if ($rowcount > 0) {

 while ($row = mysqli_fetch_assoc($result)) {
 if ($row['pass'] != $pass) {
 echo "Password is incorrect";
 break;
 }
 $_SESSION['username'] = $row['username'];
 $_SESSION['pass'] = $row['pass'];
 header("Location: main.php");
 echo 'WELCOME' ."   " . $username;
exit();
ob_end_flush();
 }
 }
}
        
        ?>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
<?php
include_once 'C:\xampp\htdocs\TAW\template\footer.php';
?>
</html>


</body>
</html>