<?php
					
	include ('connection.php');
	session_start();

	// Checking if user has logged in or not
	
	if ( $_SESSION['logged_in'] != 1 )
	{
	 // $_SESSION['message'] = "You must log in before viewing your profile page !";
	 // echo '<script language = "javascript">alert("Logout Successfully");</script>';
	  header("location: index.html");    
	}
	
	else
	{
    $username = $_SESSION['name'];
    $email_id = $_SESSION['email'];
    $mobile_no= $_SESSION['mobile'];
	}
								
?>
<?php
$pincode=$_POST['txtpincode'];
$flat=$_POST['txtflat'];
$colony=$_POST['txtcolony'];
$landmark=$_POST['txtlandmark'];
$city=$_POST['txtcity'];
$state=$_POST['txtstate'];


	$sql = "INSERT INTO `E-Commerce`.`Address` (`Name`, `Mobile_No`, `Pin_Code`, `Flat`, `Colony`, `Land_Mark`, `City`, `State`) 
    VALUES('".$username."','".$mobile_no."','".$pincode."','".$flat."','".$colony."','".$landmark."','".$city."','".$state."');";
	if ($conn->query($sql) === TRUE) 
	{
  
		echo '<script language = "javascript">alert("Address Add Successfully......");</script>';
		header('Refresh:0;url=User_Profile.php');
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}


?>