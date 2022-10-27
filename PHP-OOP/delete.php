<?php
session_start();
if(isset($_GET)){
$id=$_GET['id'];
$link=new mysqli("localhost","root","","phpLearn");

$result=$link->query("delete from students where ID = $id");
$link->close();

$_SESSION['msg']='<br><b style="color:red">Delete Successfully!!!</b>';
header('location:connection.php');
}else{
    header('location:connection.php');
}

?>
<a href="connection.php">Student_List</a>