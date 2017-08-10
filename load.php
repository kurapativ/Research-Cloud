<?php
$data="<br>".$_POST['name']."\n".$_POST['email']."<br>".$_POST['website']."<br>".$_POST['message'];
mail("atchyutnagabhairava@gmail.com","contacts",$data);
header('location:index.php');
?>