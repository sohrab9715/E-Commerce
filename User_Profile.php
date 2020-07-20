<!DOCTYPE html>
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="User_Profile.css">
</head>
<body>
        <nav class="navbar navbar-light fixed-top navbar-expand-sm color" >
                <a class="navbar-brand logo" href=""> <img src="Pic/logo.png" height="55px" width="100px" alt=""> </a>
                <button type="button"  class="navbar-toggler"  data-toggle="collapse" data-target="#mymenu"style="border:none;" >
                 <i class="fa fa-bars" aria-hidden="true" style="color: #36B449; font-size:28px;"></i>
                </button>  
                <div class="collapse navbar-collapse " id="mymenu">
                            <ul class="navbar-nav ml-auto ">
                                <li class="nav-item "> <a class="nav-link txtcolor " href="index.html">HOME</a> </li>
                                <li class="nav-item "> <a class="nav-link txtcolor " href="">SHOP</a> </li>
                                <li class="nav-item"> <a class="nav-link txtcolor" href="Contact.html">CONTACT</a> </li>
                                <li class="nav-item"> <a class="nav-link txtcolor" href="Add-Cart.html">CHART</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#"><i class="fa fa-search btnsearch" aria-hidden="true"></i></i></a> </li>
                            </ul>
                </div> 
        </nav>
        <div class="search-box">
            <input type="text" placeholder="Search Here...">
            <span><i class="fa fa-times search-btnclose" aria-hidden="true"></i></span>
        </div>
        <div class="container-flude profile_container">
                <div class="row row1">
                    <div class="col-md-2 profiles">
                          <div class="profile-name">
                                <div class="profile-pic"></div>
                                <div class="name">
                                    <h4><?= $username ?></h4>
                                </div>
                          </div>
                          <div class="menu">
                            <button onclick="btnprofile()" class="menu-button">Profile</button>
                            <button onclick="btnorder()" class="menu-button">Order</button>
                            <button onclick="btnaddress()" class="menu-button">Address</button>
                            <button onclick="btnpayment()" class="menu-button">Payment</button>
                            <button onclick="coupon()" class="menu-button">Coupon</button>
                            <a href="LogOut.php"><button onclick="logout()" class="menu-button">Logout</button></a>
                          </div>
                    </div>
                    <div class="col-md-10 details_containers">
                            <div class="profile" style="display: none">
                                  <form action="">
                                        <label class="lblprofiles" for="">Name</label><br>
                                        <input class="txtprofiles" type="text"value="<?php echo $username ?>"readonly><br>
                                        <label class="lblprofiles"  for="">Mobile Number</label><br>
                                        <input class="txtprofiles"type="text"value="<?php echo $mobile_no ?>" readonly maxlength="10"> <a href="">Edit</a><br>
                                        <label class="lblprofiles"  for="">Email Id</label><br>
                                        <input class="txtprofiles" type="text" value="<?php echo $email_id ?>" readonly> <a href="">Edit</a>


                                  </form>
                            </div>
                            <div class="order" style="display: none">
                                order
                            </div>
                            <div class="address"style="display: none">
                                <button class="add-new-address">Add New Address</button>
                                
                                  <div class="address-container">
                                      <form action="Add_Address.php" method="POST">
                                          <label class="lbladdress" for="">Pincode</label><br>
                                          <input class="txtaddress" type="text" name="txtpincode" placeholder="[0-9] 6 digits" maxlength="6"> <br>
                                          <label class="lbladdress" for="">Address</label> <br>   
                                          <input class="txtaddress" type="text" name="txtflat" placeholder="Flat/House No./Floor/Building"><br>
                                          <input class="txtaddress" type="text" name="txtcolony" placeholder="Colony/Locality/Street"><br>
                                          <label class="lbladdress" for="">Landmark</label>   <br>    
                                          <input class="txtaddress" type="text" name="txtlandmark" placeholder="eg-Near LNCT College"><br>
                                          <label class="lbladdress" for="">City</label><br>
                                          <input class="txtaddress" type="text" name="txtcity" placeholder="eg- bhopal"><br>
                                          <label class="lbladdress" for="">State</label><br>
                                          <select name="txtstate">
                                          <option selected="selected">State...</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Madhya Predesh">Madhya Pradesh</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            
                                          </select> <br> <br>
                                          <input type="submit" value="Add Address">
    
                                    </form>
                                  </div>
                                  <hr>  
                                  <?php
                                       include("connection.php");
                                     
                                       session_start();
                                       $sql="SELECT * FROM `Address` ";
                                       $result=mysqli_query($conn,$sql);

                                           while($row=mysqli_fetch_array($result))
                                           {
                                           
                                             
                                               echo "<div class=search_address> 
                                               <input type=radio name=address>  
                                                 <tr><td> ".$row["Flat"]."</td><td> ," .$row["Colony"]."</td><td> ," .$row["City"]."</td><td>, "
                                                 .$row["Landmark"]."</td><td>,".$row["State"]."</td><td>-".$row["Pin_Code"]." </td></tr>
                                                
                                                 </div>"; 
                                                 echo "<hr />";
                                           
                                           }
                                   
                                  ?>
                                  
                            </div>
                            <div class="payment"style="display: none">
                                <a href="">Add a New card</a><br>
                              
                                <a href="">Add a New Bank Account</a>
                            </div>
                    </div>
                </div>
        </div>

        <footer>
            <div class="container-flude ftr">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-2 p ">
                          <h6 class="text-uppercase mb-4 ">policy</h6>
                          <p>
                            <a href="#!">Term of Use</a>
                          </p>
                          <p>
                            <a href="#!">Security</a>
                          </p>
                          <p>
                            <a href="#!">Privacy</a>
                          </p>
                          <p>
                            <a href="#!">Return Policy</a>
                          </p>
                         
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2 q ">
                          <h6 class="text-uppercase mb-4 ">company</h6>
                          <p>
                            <a href="#!">Home</a>
                          </p>
                          <p>
                            <a href="#!">Careers</a>
                          </p>
                          <p>
                            <a href="#!">About Us</a>
                          </p>
                          <p>
                            <a href="#!">Blog</a>
                          </p>
                </div>
                    <div class="col-sm-6 col-md-4 col-lg-2 r">
                          <h6 class="text-uppercase mb-4 ">Product</h6>
                          <p>
                            <a href="#!">Latest Product</a>
                          </p>
                          <p>
                            <a href="#!">Trending product</a>
                          </p>
                          <p>
                            <a href="#!">Shipping Rates</a>
                          </p>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2 s">
                          <h6 class="text-uppercase mb-4 ">Resources</h6>
                          <p>
                            <a href="#!">Your Account</a>
                          </p>
                          <p>
                            <a href="#!">FAQ</a>
                          </p>
                          <p>
                            <a href="#!">Help</a>
                          </p>
                          <p>
                            <a href="#!">Support</a>
                          </p>
                </div>
                   
                    <div class="col-sm-6 col-md-4 col-lg-2 q ">
                      <h6 class="text-uppercase mb-4 ">FOLLOW</h6>
                     <p><a href="#!">Facebook</a></p>
                      <p> <a href="#!">Twiter</a></p>  
                      <p>   <a href="#!">Instragram</a></p>
                     <p>  <a href="#!">Linkdn</a></p>
                       
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 p ">
                    <h6 class="text-uppercase mb-4 ">Contact</h6>
                    <p>
                      <a href="#!">Press Colony, Ashok Vihar</a>
                    </p>
                    <p>
                      <a href="#!">Bhopal, Madhya Pradesh</a>
                    </p>
                    <p>
                      <a href="#!">+917631487916</a>
                    </p>
                    <p>
                      <a href="#!">+916200539128</a>
                    </p>
                   
              </div>
                </div>
      
                <hr>
                <div class="col-12 copy">
                      <p>© 2020 Copyright :Dealmart.com (Under Development)</p>
                      
                </div>
                
            </div>
      
        </footer>
        <script src="user-profile.js"></script>
        <script src="search-btn.js"></script>  
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
</body>
</html>