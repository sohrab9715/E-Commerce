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
	}
?>		
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="admin.css">
     <link rel="stylesheet" href="style.css">
    <title>Admin</title>

</head>
<body>
    <div class=" bg">
        <div class="  admin_details">
            <div class="profile_pic">
                <!-- <img src="pic/User-Icon/user-icon.jpg" alt=""> -->
            </div>
            <h2>Welcome,</h2>
            <h3><?= $username ?></h3>
        </div>
        <div class="menu">
            
                <button id="btnadd" onclick="add_new()">Add New Product</button>
                <div class="add-new-product" style="display: none">
                    <form action="#" method="POST">
                     <label for="">Product Name</label><span>*</span> <br>
                     <input type="text" placeholder="Product Name"><br>
                     <label for="">Price</label><span>*</span> <br>
                     <input type="text" placeholder="Price"> <br>
                     <label for="">Discription</label><br>
                     <textarea rows="5" cols="45"> </textarea><br>
                     <label for="">Specification</label><span>*</span> <br>
                     <textarea rows="2" cols="45"></textarea><br>
                     <label for="">Product Image</label><span>*</span><br>
                     <input type="file" accept="image/*" onchange="preview_image(event)" ><br>
                     <img id="output_image" src="" alt=" "> <br><br>
                     <input type="submit" value="Upload">
                    
                    </form>
                 </div>
                <button>Edit Product Details</button>
            
                <button>Delete Product</button>
            
                <button>Order Management</button>
            
                <button>Generate Invoice</button>
            
                <button>Payment Gateway</button>

            
                <a href="LogOut.php"><button onclick="logout()" class="menu-button">Logout</button></a>
             
          

        </div>
        
    </div>
    <div class="container-flude footer1">
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
    </div>
    <script>
    
    function preview_image(event) 
    {
        var reader = new FileReader();
        reader.onload = function()
        {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    var btnadd=document.querySelector('.add-new-product');
    function add_new()
{
    if(btnadd.style.display==="none")
    {
        btnadd.style.display="block";
        btnadd.style.animation = 'down 2s ease-in-out';
      
    }
    else
    {
        btnadd.style.display="none";  
        btnadd.style.animation = 'up 2s linear both ';       
    }
   
}
$(document).ready(function()
{
  $("#btnadd").click(function()
  {
    $("#add-new-product").slideToggle("slow");
  }
  );
});
   </script>
    <script src="search-btn.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>