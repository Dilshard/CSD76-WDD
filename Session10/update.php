<?php

include 'con.php';

$id = $_GET['id'];

$sql = "SELECT * FROM personal WHERE id = $id";

$status = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($status)){
    $fname = $row['fullname'];
    $gender = $row['gender'];
    $address = $row['address'];
    $username = $row['username'];
    $pass = $row['password'];
}

?>

<form action="" method="post">
    <input type="text" name="txtfname" value="<?php echo $fname ?>"> <br>
    <input type="text" name="txtgender" value="<?php echo $gender ?>"><br>
    <input type="text" name="txtadd" value="<?php echo $address ?>"><br>
    <input type="text" name="txtusername" value="<?php echo $username ?>"><br>
    <input type="text" name="txtpass" value="<?php echo $pass ?>"> <br>
    <input type="submit" name="btnsave" value="Save">
</form>

<?php

    if(isset($_POST['btnsave'])){
        $fname = $_POST['txtfname'];
        $gender = $_POST['txtgender'];
        $address = $_POST['txtadd'];
        $username = $_POST['txtusername'];
        $pass = $_POST['txtpass'];

        $sql2 = "UPDATE `personal` SET `fullname` = '$fname',`gender` = '$gender',address = '$address', username = '$username', password = $pass WHERE `personal`.`id` = $id";

        $status2 = mysqli_query($con,$sql2);

        if($status2){
            header("Location: view.php");
        }else{
            echo "Error!";
        }

        

    }

?>