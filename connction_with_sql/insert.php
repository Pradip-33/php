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
        $qual = json_encode($_POST['qual']);
        $con = mysqli_connect("localhost","root","",$db);
        if(!$con) die ("Connection Error");
        echo $sql = "INSERT INTO $tb values(NULL,'$F_name','$L_name','$age','$Gender','$email','$Course','$phone','$qual')";
        
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
