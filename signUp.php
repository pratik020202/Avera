<?php

@include 'config.php';

if(isset($_POST['submit'])){

    $showalert=false;
    $showerror=false;
    $username =$_POST["username"];
    $password = $_POST["password"];
    $cpass = $_POST["cpassword"];
    $exsits=false;
    $user_type = $_POST['user_type'];

    

    if(($password == $cpass) && $exsits==false){
      if($user_type == "admin"){
        $sql = "INSERT INTO `admin_users` ( `username`, `Password`) VALUES ( '$username', '$password')";
        $result = mysqli_query($con, $sql);
  
        if($result ){
          header('location:login.php');
          die();
        }

      }
      else{
        $sql = "INSERT INTO `user` ( `username`, `Password`) VALUES ( '$username', '$password')";
        $result = mysqli_query($con, $sql);
  
        if($result ){
          header('location:userlogin.php');
          die();
  
        }

      }
     
    }
    if(($password != $cpass ) && $exsits==false){
      $showerror = true;
    }
};


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SignUp</title>
  <link rel="stylesheet" href="assets/css/style2.css">
  
  
</head>

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
          <strong>Error!</strong> Password dose not match.
          
          
        </div> ';
      }
      ?> 
  <div class="signup">
    <form name="form1" method="POST">
      <h1>Sign Up / <a href="userlogin.php" name="login" class="log-btn">Login</a></h1>
      
      
      <label>Username:</label>
      <input type="text" id="name" placeholder="Username" name="username" />
      <br /><br />
      <label>Password:</label>
      <input type="password" placeholder="Password" name="password"/>
      <br /><br />
      <label>Confirm Password:</label>
      <input type="password"  placeholder="cPassword" name="cpassword"/>
      <br /><br />
      <input type="submit" name="submit" value="SignUP" class="form-btn">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <p>
        By clicking the Sign Up button, you agree to our
        <a href="">Terms and Conditions</a>
        and <a href="">Privacy Policy</a>
      </p>
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

