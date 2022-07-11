
<?php
session_start();
ob_start();
include_once 'C:\xampp\htdocs\TAW\conn.php';
?>
<?php
$designid  = $photo ='';
if(isset($_POST['edit'])){
        $designName = $_POST['designName'];
        $price = $_POST['price'];
        $result = mysqli_query($conn, "SELECT * from designs where designName ='$designName' ");
        if (mysqli_num_rows($result) > 0){
         $sql = "UPDATE designs SET price='$price'"  
               . " WHERE designName ='$designName'  " ;
             mysqli_query($conn, $sql);
             echo '<p style="color:green">design Updated successfully</p>';
             header('Location: updatedesign.php');
            }else {
                echo ' not found';
                header('Location: updatedesign.php');
            }
        }
if(isset($_POST['delete'])){
          $designName = $_POST['designName'];
          $result = mysqli_query($conn, 'SELECT * from designs where designName ="'.$designName.'" ');
            if (mysqli_num_rows($result) == 1){
              $sql = "DELETE FROM designs WHERE designName = '$designName' " ;
                if ($conn->query($sql) === TRUE) {
                 echo '<p style="color:green">Design Deleted successfully</p>';
                 header('location: updatedesign.php');
                } else {
                    echo "Error deleting record: " . $conn->error;
                    header('Location: updatedesign.php');
                }
            }else {
                echo ' not found'; 
            }
        }    
        ?>