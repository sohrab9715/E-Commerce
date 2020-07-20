<?php
	include('connection.php');
	session_start();
?>
<?php
$txtname=$_POST['txtname'];
$txtemail=$_POST['txtemail'];
$txtmobile=$_POST['txtmobile'];
$txtpassword=$_POST['txtpassword'];

$sql = "SELECT * FROM User WHERE Mobile_No='$txtmobile'";
$check = $conn->query($sql);
if ($check->num_rows >0 ) 
{
		echo '<script language = "javascript">alert("This Mobile Number is already exists! Please try Another Mobile Number....");</script>';
		header('Refresh: 0;url=SignUp.html');
		
}
else
{
	$sql = "INSERT INTO `E-Commerce`.`User` (`Name`,  `Email_Id`, `Mobile_No`, `Password`) 
    VALUES('".$txtname."','".$txtemail."','".$txtmobile."','".$txtpassword."');";
	if ($conn->query($sql) === TRUE) 
	{
  
		echo '<script language = "javascript">alert("Account Created Successfully......");</script>';
		header('Refresh:0;url=login.html');
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

?>