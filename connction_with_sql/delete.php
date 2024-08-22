<?php
if(isset($_GET["id"])){
    $con = mysqli_connect("localhost","root","",$db);
if(!$con) die ("Connection Error");
    $id = $_GET["id"];
   $sql = "DELETE FROM stud_tb WHERE id = ".$id;
   if(mysqli_query($con,$sql))
        {
            
            header('Location:Display.php');
        }
        else
        {
            echo "Not Deleted ";
        }
}else{
    echo "ID Not Found";
}
?>