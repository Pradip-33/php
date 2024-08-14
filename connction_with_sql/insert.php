<?php
$db = "PHPcon";
$tb = "stud_tb";
    if(isset($_POST['Submit']))
    {
        $F_name = $_POST['First_Name'];
        $L_name = $_POST['Last_Name'];
        $age = $_POST['Age'];
        $Gender = $_POST['gender'];
        $email =  $_POST['emailAddress'];
        $phone = $_POST['Phone_Number'];
        $Course = $_POST['course'];
        $con = mysqli_connect("localhost","root","",$db);
        if(!$con) die ("Connection Error");
        $sql = "INSERT INTO $tb values('$F_name','$L_name','$age','$Gender','$email','$Course','$phone')";
        echo $sql;
        if(mysqli_query($con,$sql))
        {
            echo "Inserted... ";
            header('Location:Display.php');
        }
        else
        {
            echo "Not Inserted ";
        }
    }
?>
