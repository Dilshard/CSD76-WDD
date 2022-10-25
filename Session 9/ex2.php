<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="POST">
        Number 01 <br>
        <input type="number" name="num1"> <br>
        Number 02 <br>
        <input type="number" name="txtnum2"> <br>
        
        <input type="submit" value="Total" name="btntotal">
        <input type="reset" value="Clear">
    </form>
   
    <?php

    if(isset($_POST['btntotal'])){
        $num1 = $_POST["txtnum1"];
        $num2 = $_POST["txtnum2"];
        $tot = $num1 + $num2;
        echo "<br>Total : ".$tot;
    }


    ?>
</body>
</html>