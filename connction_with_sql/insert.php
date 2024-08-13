<?php



$db = "Php";
$tb = "stud_tb";
    if(isset($_POST['Submit']))
    {
        $F_name = $_POST['First_Name'];
        $L_name = $_POST['Last_Name'];
        $Bday = $_POST['Birthday'];
        $Gender = $_POST['gender'];
        $email =  $_POST['emailAddress'];
        $phone = $_POST['Phone_Number'];
        $Course = $_POST['course'];
        $con = mysqli_connect("localhost","root","",$db);
        if(!$con) die ("Connection Error");
        $sql = "INSERT INTO $tb values('','$F_name','$L_name','$Bday','$Gender','$email','$phone','$Course')";
        echo $sql;
        if(mysqli_query($con,$sql))
        {
            echo "Inserted... 😄";
            
        }
        else
        {
            echo "Not Inserted 😵";
        }
    }
?>