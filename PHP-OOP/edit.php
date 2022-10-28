<?php
session_start();
if(isset($_GET['id'])){
$id=$_GET['id'];
$link=new mysqli("localhost","root","","phpLearn");
$result=$link->query("select * from students where id=$id");
$link->close();

$row = $result-> fetch_assoc();

//print_r($row);

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
    <form action="update.php" method="post">
        <input type="hidden" name="id" id="id" value="<?php echo $row['ID']; ?>">
        <br>
        <label for="fname">First_Name</label>
        <input type="text" name="fname" id="fname" value="<?php echo $row['first_name']; ?>">
        <br>
        <label for="lname">Last_Name </label>
        <input type="text" name="lname" id="lname" value="<?php echo $row['last_name']; ?>" >
        <br>
        <input type="submit" value="Save">
        
    </form>
</body>
</html>
<?php
//$_SESSION['msg']='<br><b style="color:yellow">Edit Successfully!!!</b>';
//header('location:connection.php');
}else{
    header('location:connection.php');
}
?>