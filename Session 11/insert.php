<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create record</title>
    <style>
        input{
            margin : 4px;
        }
    </style>
</head>
<body>
    <?php include 'menu.php' ?>
    <form method="post">
        <input type="text" name="fname" placeholder="Full Name"> <br>
        <input type="text" name="gender" placeholder="Gender"> <br>
        <input type="text" name="address" placeholder="Address"> <br>
        <input type="text" name="uname" placeholder="User Name"> <br>
        <input type="password" name="pass" placeholder="Password"> <br>
        <input type="submit" name="submit" value="Save">

    </form>

    <?php 
    include 'con.php'; 

    if(isset($_POST['submit'])){
        $fullName = $_POST['fname'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $userName = $_POST['uname'];
        $pass = $_POST['pass'];

        $sample = "INSERT INTO `personal` (`fullname`, `gender`, `address`, `username`, `password`) VALUES ('$fullName', '$gender', '$address', '$userName', '$pass')";

        $status = mysqli_query($con,$sample);

        if($status){
            header("Location: view.php");
        }else{
            echo "Error - Add";
        }
    }


    
    ?>
</body>
</html>