<?php
header("Content-Type:application/json");
@$myList = $_REQUEST['pass'];
$conn = mysqli_connect("127.0.0.1",'root','','amazon');
$sql = "SET NAMES UTF8";
$a=json_decode($myList)
$test=$a['count']
mysqli_query($conn,$sql);
$sql = "INSERT INTO cart VALUES(null,$test,'资',2,23,1,'asd',12)";
// $result = mysqli_query($conn,$sql);
mysqli_query($conn,$sql);
echo($a)
?>
<?php
header("Content-Type:application/text");
@$name = $_REQUEST['name'];
@$city = $_REQUEST['city'];
@$community = $_REQUEST['community'];
@$mail = $_REQUEST['mail'];
@$phone = $_REQUEST['phone'];
$conn = mysqli_connect("127.0.0.1",'root','','amazon');
$sql = "SET NAMES UTF8";
mysqli_query($conn,$sql);
$sql = "INSERT INTO address VALUES(null,'$name','$city','$community','$mail','$phone')";
$res = mysqli_query($conn,$sql);
echo($res)
?>
