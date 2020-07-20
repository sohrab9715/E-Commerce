<?php
	session_start();
	include("connection.php");
?>

<?php
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
	$_SESSION['logged_in'] = true;     //check for login or not
	 $sql = "SELECT * FROM `User` WHERE Mobile_No='$mobile' AND password='$password'";
	$result = $conn->query($sql);

	$email = $_POST['mobile'];
	$password = $_POST['password'];
	$_SESSION['logged_in'] = true;  
	$qry = "SELECT * FROM `User` WHERE Email_Id='$email' AND password='$password'";
    $data = $conn->query($qry);
    if (!$result->num_rows == 1) 
	{
		header('Refresh:0;url=login.html');
	   // echo '<script language = "javascript">alert("Your Mobile Number and Password did not matched! Please try again.");</script>';
	
		if(!$data->num_rows == 1)
	    {
		header('Refresh:0;url=login.html');
		//echo '<script language = "javascript">alert("Your Username and Password did not matched! Please try again.");</script>';
	
	   }
	   else
	  {
		$user_details = $data->fetch_assoc();
		$_SESSION['name'] = $user_details['Name'];
		$_SESSION['logged_in'] = true;
		header('Refresh:0;url=admin.php');

	  }
	}
	else 
	{
					$user_details = $result->fetch_assoc();
                    $_SESSION['name'] = $user_details['Name'];
                    $_SESSION['email'] = $user_details['Email_Id'];
                    $_SESSION['mobile'] = $user_details['Mobile_No'];
					$_SESSION['logged_in'] = true;
					header('Refresh:0;url=User_Profile.php');
	}
	
	
	
?>
