<?php


function add($num1, $num2) {
  return $num1 + $num2;
}

function sub($num1, $num2) {
  return $num1 - $num2;
}

function mul($num1, $num2) {
  return $num1 * $num2;
}

function div($num1, $num2) {
  if($num2 != 0) {
    return $num1 / $num2;
  } else {
    return "Error: Division by zero!";
  }
}


if(isset($_POST['submit'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operation = $_POST['operation'];


  switch($operation) {
    case "add":
      $result = add($num1, $num2);
      break;
    case "sub":
      $result = sub($num1, $num2);
      break;
    case "mul":
      $result = mul($num1, $num2);
      break;
    case "div":
      $result = div($num1, $num2);
      break;
  }
}

?>


<form action="" method="post">
  <label for="num1">Number 1:</label>
  <input type="number" id="num1" name="num1"><br><br>
  <label for="num2">Number 2:</label>
  <input type="number" id="num2" name="num2"><br><br>
  <label for="operation">Operation:</label>
  <select id="operation" name="operation">
    <option value="add">Add</option>
    <option value="sub">Subtract</option>
    <option value="mul">Multiply</option>
    <option value="div">Divide</option>
  </select><br><br>
  <input type="submit" name="submit" value="Calculate">
</form>


<?php if(isset($result)) { ?>
  <p>The result is: <?php echo $result; ?></p>
<?php } ?>