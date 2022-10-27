<?php
$link=new mysqli("localhost","root","","phpLearn");
$result=$link->query("select * from students");
$link->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width='100%' border='1'>
        <?php
        session_start();

        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }?>
    <tr>
        <th>ID</th>
        <th>First_Name</th>
        <th>Last_Name</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    <?php foreach($result as $row){
        ?>
    <tr>
        <td><?php echo $row['ID']; ?></td>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        <td><a href="delete.php?id=<?php echo $row['ID'];?> " onclick="return confirm('Are you sure to Delete???')">Delete</a></td>
        <td><a href="edit.php?id=<?php echo $row['ID'];?> ">Edit</td>
    </tr>
    <?php } ?>
    </table>
    <br>
    <a href="add_new_student.php">Add New Student</a>
    <br>
</body>
</html>

