<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  <div class="Container">
    <button class="btn btn-primary my-5"><a href="clg_mangement.php" class="text-light">Add User</a></button>
  </div>
<?php
$db = "PHPcon";
$tb = "stud_tb";
$con = mysqli_connect("localhost","root","",$db);
if(!$con) die ("Connection Error");

$sql = "SELECT * FROM $tb";
$res = mysqli_query($con,$sql)
?>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Course</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    while($a = mysqli_fetch_assoc($res)) {?>
        <tr>
            <td><?php echo $a['ID']?></td>
            <td><?php echo $a['First_Name']?></td>
            <td><?php echo $a['Last_Name']?></td>
            <td><?php echo $a['Age']?></td>
            <td><?php echo $a['Gender']?></td>
            <td><?php echo $a['Email']?></td>
            <td><?php echo $a['Course']?></td>
            <td><?php echo $a['Phone']?></td>
            
            <td><a href="Update.php" class="btn btn-primary " class="text-light">Update</a></td>
          
            <td><a href="delete.php?id=<?php echo $a['ID']?>" class="btn btn-danger"  class="text-light">Delete</a></td>
        </tr> 
  
    <?php }
    ?>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
