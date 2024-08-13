<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="Number" name="no1" id="no1"><br>
        <br><input type="Number" name="no2" id="no2"> 
        <br><br>
        
        <input type="submit" value="+" name="Addition">
        <input type="submit" value="-" name="Subtraction">
        <input type="submit" value="*" name="Multiplication">
        <input type="submit" value="/" name="Division"> <br>
    </form>
    <?php
    $n1 = $_POST['no1'];
    $n2 = $_POST['no2'];
    if (isset($_POST["Addition"]))  {
        echo"<br> Addition is ".($n1+$n2); }
    elseif (isset($_POST["Subtraction"]))  {
         echo"<br> Subtraction is ".($n1-$n2); }
    elseif (isset($_POST["Multiplication"]))  {
         echo"<br> Multiplication is ".($n1*$n2); }
    elseif (isset($_POST["Division"]))  {
         echo"<br> Division is ".($n1/$n2);  }
    ?>  
</body>
</html>