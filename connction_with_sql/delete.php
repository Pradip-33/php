<?php
$db = "PHPcon";
$tb = "stud_tb";
if(isset($_GET['id'])){
    $con = mysqli_connect("localhost","root","",$db);
    if(!$con) die("DB Connection Error");
    $id = $_GET["id"];
    $sql = "DELETE FROM $tb where id = ".$id;
    if(mysqli_query($con,$sql)){
        echo "Deleted successfully...";
  
        header('Location:display.php');
    } else {
        echo "Error in Deletion";
    }

} else {
    echo "Id not found...";
}

?>