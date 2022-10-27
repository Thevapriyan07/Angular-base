<?php
session_start();
if(count($_POST)>0){
$fna=$_POST['fname'];
$lna=$_POST['lname'];
$id=$_POST['id'];
$link=new mysqli("localhost","root","","phpLearn");
$result=$link->query("update students set first_name='$fna',last_name='$lna' where id=$id");
$link->close();

$_SESSION['msg']='<br><b style="color:green">Update Successfully!!!</b>';
header('location:connection.php');
}else{
    header('location:connection.php');
}

?>