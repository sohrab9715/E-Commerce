<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Multi Step Bootstrap Form with animations</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="Buy-Now.css">
</head>
<body>
<div class="content">
  <!--content inner-->
  <div class="content__inner">
  
    <div class="container overflow-hidden">
      <!--multisteps-form-->
      <div class="multisteps-form">
        <!--progress bar-->
        <div class="row">
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Product</button>
              <button class="multisteps-form__progress-btn" type="button" title="Address">Address</button>
              <button class="multisteps-form__progress-btn" type="button" title="Order Info">Payment</button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">Conform</button>
            </div>
          </div>
        </div>
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <form class="multisteps-form__form">
              <!--Product Details-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Product details</h3>
                <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                    <div class="col-12 col-sm-6 img">
                      <img src="pic/Product/l8.jpg" alt="">
                      <h6>Casual Cutout Sleeve Solid Women Red Shirt</h6>
                        <p>Rs 300 </p>
                        Quantity: <input type="text" required>
                    </div>
                    </div>
                   <div class="button-row d-flex mt-4">
                    <button class="btnnext ml-auto js-btn-next" type="button" title="Next">Next</button>
                   </div>
                </div>
              </div>
              <!--Address-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Your Address</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Flat/House No./Floor/Building"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Colony/Locality/Street"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text" placeholder="City"/>
                    </div>
                    <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">State...</option>
                        <option>Bihar</option>
                        <option>Delhi</option>
                        <option>Madhya Pradesh</option>
                        <option>Uttar Pradesh</option>
                        
                      </select>
                    </div>
                    <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Zip"/>
                    </div>
                  </div>
                 <br>
                    <?php
                    include("connection.php");
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

               
                  <div class="button-row d-flex mt-4">
                    <button class="btnnext js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btnnext ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              
              </div>
              <!--Payment-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Payment</h3>
                <div class="multisteps-form__content">
                  <div class="row">
                    <div class="col-12 col-md-6 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
                          <h5 class="card-title">Select Payment Mode</h5>
                          <hr>
                          <input type="radio" id="net-banking" name="payment"  onclick="net_banking()" value="netbaning">
                          <label for="male">Internet banking</label><br>
                          <input type="radio" id="debit-card" name="payment"checked onclick="debit_card()" value="debit-card">
                          <label for="female">Debit card</label><br>
                          <input type="radio" id="credit-card" name="payment" value="credit-card">
                          <label for="other">Credit Card</label> <br>
                          <input type="radio" id="ewallets" name="payment" value="ewallets">
                          <label for="male">Ewallets</label><br>
                          <input type="radio" id="cash-on-delivery" name="payment" value="cash-on-delivery">
                          <label for="female">Cash on Delivery</label><br>
                          <input type="radio" id="other" name="payment" value="other">
                          <label for="other">Other</label>
    
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4 payment-mode" style="display: block">
                      <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="form-row mt-4">
                                <div class="col">
                                  <input class="multisteps-form__input form-control" type="text" placeholder="Card Holder Name"/>
                                </div>
                              </div>
                              <div class="form-row mt-4">
                                <div class="col">
                                  <input class="multisteps-form__input form-control" type="text" maxlength="16" placeholder="Card Number"/>
                                </div>
                              </div>
                              <div class="form-row mt-4">
                                <div class="col-12 col-sm-6">
                                    <select class="multisteps-form__select form-control">
                                        <option selected="selected">Month</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>

                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>

                                        
                                      </select>
                                </div>
                                <div class="col-12 col-sm-6 ">
                                  <select class="multisteps-form__select form-control">
                                    <option selected="selected">Year    </option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                    <option>2025</option>
                                    <option>2026</option>
                                    <option>2027</option>

                                    <option>2028</option>
                                    <option>2029</option>
                                    <option>2030</option>
                                    
                                  </select>
                                </div>
                               
                                
                    </div>      
                    <div class="form-row mt-4">
                        <div class="col">
                          <input class="multisteps-form__input form-control" type="password" maxlength="3" placeholder="CVV"/>
                        </div>
                      </div>   
                      <div class="form-row mt-4">
                          <div class="col">
                              <button class="btnnext js-btn-prev" type="button" title="Prev">Payment</button>

                          </div>
                        </div>     
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btnnext js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btnnext ml-auto js-btn-next" type="button" title="Next">Next</button>
                    </div>
                  </div>
                </div>
              </div>
              <!--Conform-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Order Conformation </h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <textarea class="multisteps-form__textarea form-control" placeholder="Additional Comments and Requirements"></textarea>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btnnext js-btn-prev" type="button" title="Prev">Prev</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
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
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
<script  src="./script.js"></script>

</body>
</html>