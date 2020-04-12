<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "connection successful";
}
else{
	echo "no connection";
}

mysqli_select_db($con,'userdata');

$user = $_POST['user'];
$user = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into userinfodata (user, email, mobile, comment)
values ('$user', '$user', '$mobile', '$comment')";

echo "$query";

mysqli_query($con, $query);

header('location:index.php');


?>