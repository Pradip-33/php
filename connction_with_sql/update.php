<?php
$db = "PHPcon";
$tb = "stud_tb";
    if(isset($_POST['Submit'])){
        $id = $_POST['uid'];
        $F_name = $_POST['First_Name'];
        $L_name = $_POST['Last_Name'];
        $age = $_POST['Age'];
        $Gender = $_POST['gender'];
        $email =  $_POST['emailAddress'];
        $phone = $_POST['Phone_Number'];
        $Course = $_POST['course'];
        $con = mysqli_connect("localhost","root","",$db);
        if(!$con) die("DB Connection Error");
         $sql = "UPDATE $tb SET First_Name='$F_name',Last_Name='$L_name',Age='$age',gender='$Gender',Email='$email',Course='$Course',Phone='$phone' WHERE id= ".$id;
      
        if(mysqli_query($con,$sql)){
            echo "Updated successfully...";
            // echo "<script></script>";
    
        } else {
            echo "Error in Update operation";
        }
    }
?>