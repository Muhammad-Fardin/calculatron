<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link type="image/png" sizes="32x32" rel="icon" href=".../icons8-calculator-32.png">
     <link href="css/style.css" rel="stylesheet">
     <title>Document</title>
</head>
<body>

<?php
     $num1 = $_POST["digit1"];
     $num2 = $_POST["digit2"];
     $operator = $_POST["operator"]
?>

<?php
$result = '';
if (is_numeric($num1) && is_numeric($num2)) {
    switch ($operator) {
        case "add":
           $result = $num1 + $num2;
            break;
        case "subtract":
           $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "square":
            $result = $num1 * $num1;
               
               break; 
        case "divide":
            $result = $num1 / $num2;
    }
}
?>



     <div class="background">
          <?php 
               include 'background.php';
          ?>
     </div>

     <div class="heading">
          <h1>
               Hello I am Calculatron
          </h1>
     </div>
     
     <form class="form" method="POST" action="">
          <label for="digit1" id="digit1-label">Enter First Number</lable><br>
          <input type=number name="digit1" id="digit1" class="digit"><br>
          <label for="digit2" id="digit2-label">Enter Second Number</lable><br>
          <input type=number name="digit2" id="digit2" class="digit"><br>
          <button class="buttons" id="divide" title="Divide" name="operator" value="divide">/</button>
          <button class="buttons" id="multiply" title="Multiply" name="operator" value="multiply">X</button>
          <button class="buttons" id="add" title="Add" name="operator" value="add">+</button>
          <button class="buttons" id="substract" title="Substract" name="operator" value="subtract">-</button><br>
          <button class="square" id="square" title="Square" name="operator" value="square">X<sup>2</button><br>
          <b>Result</b><br>
          <input class="digit"readonly="readonly" name="result" value="<?php echo $result; ?>">
          <h4>Note: For Square put '0' in second number</h4>
     </form>

</body>
</html>