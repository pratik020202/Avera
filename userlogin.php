<?php 
@include 'config.php';



if(isset($_POST['submit'])){
    $showaerror=false;
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from user where username='$username' and password='$password'";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if($count==1){
       
       header('location:index.php');
       die();
 
    }else{
       $showaerror=true;
    }
}


?>



<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LoginUp</title>
  <link rel="stylesheet" href="assets/css/style2.css">
  
  
</head>
<video autoplay muted loop play-inline class="bg-vid" >
        <source src="images/bubble.mp4" type="video/mp4">
    </video>

<body >
  <nav>
      <div class="navbar">
          <img class="logo" src="images/log.png" href="index.php">
          <div class="conatiner nav-container">
              
              <input type="checkbox" class="checkbox" />
              <div class="hamburger-lines">
                  <span class="line line1"></span>
                  <span class="line line2"></span>
                  <span class="line line3"></span>
    
              </div>
              
              
              <ul class="menu-items1" id="menulist1">
                  <li><a href="howToOrder.php">How To Order</a></li>
                  <li><a href="ContactUs.php">Contact Us</a></li>
                  <li><a href="signUp.php">Sign Up</a></li>
              </ul>
              <ul class="menu-items" id="menulist">
                  <li><a href="howToOrder.html">How To Order</a></li>
                  <li><a href="ContactUs.html">Contact Us</a></li>
                  <li><a href="signUp.html">Sign Up</a></li>
              </ul>

              

                      
          </div>
      </div>
  </nav>
  
      <?php
      if(isset($showerror)){ 
        echo'
        <div class="alert" role="alert" >
          <strong>Error!</strong> No Account found.
          
          
        </div> ';
      }
      ?> 
  <div class="signup">
    <form name="form1" method="POST">
      <h1>Login </h1>
      
      
      <label>Username:</label>
      <input type="text" id="name" placeholder="Username" name="username" />
      <br /><br />
      <label>Password:</label>
      <input type="password" placeholder="Password" name="password"/>
      <br /><br />
      <input type="submit" name="submit" value="Login" class="form-btn">
      
      <p>Admin Login?
        <br>
        <a href="login.php">Login here
        </a> 
      </p>
    </form>
  </div>
  

  <footer class="footer">
        
            <div class="links-container">
                <div class="links">
                    <div class="footer-col">
                        <h3 class="quickL">Quick links</h3>
                        <ul class="ul-foot">
                            <li>
                                <a href="#">How To Order </a>
                            </li>
                            <li>
                                <a href="ContactUs.html">Contact Us </a>
                            </li>
                            <li>
                                <a href="#">Sign Up </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h3 class="quickL">get help</h4>
                        <ul class="ul-foot">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">shipping</a></li>
                            <li><a href="#">returns</a></li>
                            <li><a href="#">order status</a></li>
                            <li><a href="#">payment options</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h3 class="quickL">follow us</h4>
                        <div class="social-links">
                            <a href="#" class="facebook-logo"><i class="facebook"></i></a>
                            <a href="#" class="twitter-logo"><i class="twitter"></i></a>
                            <a href="#" class="instagram-logo"><i class="instagram"></i></a>
                            <a href="#" class="linkedin-logo"><i class="linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        
    </footer>
</body>

</html>