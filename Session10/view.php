<?php include 'menu.php' ?>
<table border = 1px>
    <tr>
        <th>Full Name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Username</th>
    </tr>
<?php

include 'con.php';

$sql = "SELECT * FROM personal";

$status = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($status)){
    // echo $row["fullname"]." ";
    // echo $row["gender"]." ";
    // echo $row["address"]." ";
    // echo $row["username"]."<br>";
    // echo $row["password"]."<br>";

    echo"<tr>";
        echo"<td>".$row["fullname"]."</td>";
        echo"<td>".$row["gender"]."</td>";
        echo"<td>".$row["address"]."</td>";
        echo"<td>".$row["username"]."</td>";
    echo"</tr>";
}
?>
</table>

    
