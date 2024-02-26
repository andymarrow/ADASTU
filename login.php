<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignIn__SignUp__Landing__Page</title>
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="app.css" />
    <style>
    /* Slideshow container */
.slideshow-container {
    position: relative;
    background: #f1f1f1f1;
  }
  
  /* Slides */
  .mySlides {
    display: none;
    padding: 80px;
    text-align: center;
  }
  
  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -30px;
    padding: 16px;
    color: #888;
    font-weight: bold;
    font-size: 20px;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }
  
  /* Position the "next button" to the right */
  .next {
    position: absolute;
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
    color: white;
  }
  
  /* The dot/bullet/indicator container */
  .dot-container {
      text-align: center;
      padding: 20px;
      background: #ddd;
  }
  
  /* The dots/bullets/indicators */
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  
  /* Add a background color to the active dot/circle */
  .active, .dot:hover {
    background-color: #717171;
  }
  

/* Add a blue color to the author */
.author {color: cornflowerblue;}



</style>
  </head> 
  
  <body>
      <?php
                                              
    require 'controllers/authController.php';
   
   
    
    $_SESSION["user"]="";
    $_SESSION["usertype"]="";
   
    
    // Set the new timezone
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d');

   $_SESSION["date"]=$date;

    //import database
    include("connection.php");
   



    if(isset($_POST['login-btn'])){
        $_GLOBAL['is_included'] = true;
    
       
        $email=$_POST['useremail'];
        $password=$_POST['userpassword'];

        $error='<label for="promter" class="form-label"></label>';

        $result= $database->query("select * from webuser where email='$email'");
        if($result->num_rows==1){
            $utype=$result->fetch_assoc()['usertype'];
            $veridata= $database->query("select * from webuser where email='$email'");
                $verify=$veridata->fetch_assoc()['verified'];
            if ($utype=='p'){
                //TODO
                $re= $database->query("select * from webuser where email='$email'");
                $storedpass=$re->fetch_assoc()['password'];
                if ($verify == '1') {
                if (password_verify($password, $storedpass)) {


                        //   Patient dashbord
                        $_SESSION['user'] = $email;
                        $_SESSION['usertype'] = 'p';


                        header('location: index.php');

                    }
                }
                if ($verify != '1') {
                    header('location: verification.php');
                }
                 else {
                   
                    $error = '<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Wrong credentials: Invalid email or password</label>';
                   
                 }

            }elseif ($utype=='dev'){
              //TODO
              $re= $database->query("select * from webuser where email='$email'");
              $storedpass=$re->fetch_assoc()['password'];
              if ($verify == '1') {
              if (password_verify($password, $storedpass)) {


                      //   Patient dashbord
                      $_SESSION['user'] = $email;
                      $_SESSION['usertype'] = 'dev';


                      header('location: developer/index.php');

                  }
              }
              if ($verify != '1') {
                  header('location: verification.php');
              }
               else {
                 
                  $error = '<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Wrong credentials: Invalid email or password</label>';
                 
               }

          }

            
        }else{
            $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">We cant found any acount for this email.</label>';
        }



    }
    
        
    else{
        $error='<label for="promter" class="form-label">&nbsp;</label>';
    }





    //learn from w3schools.com
//Unset all the server side variables








if(isset($_POST['singnup-btn'])){

    $result= $database->query("select * from webuser");

    $name=$_POST['name'];
    $email=$_POST['newemail'];
    $newpassword=$_POST['newpassword'];
    $cpassword=$_POST['cpassword'];

   
    
    if ($newpassword==$cpassword){
        $sqlmain= "select * from webuser where email=?;";
        $stmt = $database->prepare($sqlmain);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows==1 && count($errors) === 0){
            $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Already have an account for this Email address.</label>';
        }else{
            //TODO
            $token = bin2hex(random_bytes(50));
            $hash = password_hash($newpassword, PASSWORD_DEFAULT);
            $database->query("INSERT INTO `webuser` (name,email,token,password,usertype) VALUES ('$name','$email','$token','$hash','p')");

            
            //print_r("insert into patient values($pid,'$email','$fname','$lname','$newpassword','$address','$nic','$dob','$tele');");
            $_SESSION["user"]=$email;
            $_SESSION["usertype"]="p";
            $_SESSION["username"]=$name;
            
            $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;"></label>';
            header("location: login.php");
        }

        if (count($errors) === 0 ){
          $verified = false;
          $sql = "INSERT INTO webuser (verified) VALUES (?)";
          $stmt = $database->prepare($sql);
          $stmt->bind_param('s',$verified);
        
          if ($stmt->execute()){
              //login user
              $user_id = $database->insert_id;
              $_SESSION['id'] = $user_id;
              $_SESSION['email'] = $email;
              $_SESSION['verified'] = $verified;
        
        
              sendVerificationEmail($email, $token);
        
              // set flash message
        
              $_SESSION['message'] = "You are now logged in!";
              $_SESSION['alert-class'] = "alert-success";
              header('Location: verification.php');
        
              
              
          }
        }
    }
    else{
        $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Password Conformation Error! Reconform Password</label>';
    }



    
}else{
    //header('location: signup.php');
    $error='<label for="promter" class="form-label"></label>';
}

if ( isset($_GLOBAL['is_included']) ) { return; }

    ?> 
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form" action="login.php" method="POST">
            <h2 class="title">Sign In</h2>
            <div class="input-field">
              <i class="bx bxs-user"></i>
              <input name="useremail" type="email" placeholder="Email" required/>
            </div>
            <div class="input-field">
              <i class="bx bxs-lock-alt"></i>
              <input name="userpassword" type="password" placeholder="Password" required/>
            </div>
            <div>
              <?php echo $error ?>
            </div>
            
            <input name='login-btn' type="submit" value="login" class="btn solid" />
            <p class="social-text">Contact us with our social platforms</p>

            <div class="social-media">
              <a href="https://www.instagram.com/gtb0909/" class="social-icon">
                <i class="bx bxl-instagram"></i>
              </a>
              <a href="https://www.facebook.com/profile.php?id=61552844441837" class="social-icon">
                <i class="bx bxl-facebook"></i>
              </a>
              <a href="https://t.me/+4OSrJNIvHc00ODM0" class="social-icon">
                <i class="bx bxl-telegram"></i>
              </a>

              
            </div>
          </form>

          <form class="sign-up-form" action="login.php" method="POST" onsubmit="return validatePassword()">
            
            
            <h2 class="title">Use any of this to login</h2>
            
<div class="slideshow-container">

  <div class="mySlides">
    <h5>EMAIL:-  <span style="color: black;">adastu@gmail.com</span></h5>
    <p class="author"> Password:-  <span >adastu123</span></p>
  </div>
  
  <div class="mySlides">
    <h5>EMAIL:-  <span style="color: black;">astuestudents@gmail.com</span></h5>
    <p class="author"> Password:-  <span >estuds123</span></p>
  </div>
  
 
  
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
  
  </div>
  
  <div class="dot-container">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
   
  </div>
              <div>
                <?php echo $error ?>
              </div>
           
            <p class="social-text">Contact us with our social platforms</p>

            <div class="social-media">
              <a href="https://www.instagram.com/gtb0909/" class="social-icon">
                <i class="bx bxl-instagram"></i>
              </a>
              <a href="https://www.facebook.com/profile.php?id=61552844441837" class="social-icon">
                <i class="bx bxl-facebook"></i>
              </a>
              
              
              <a href="https://t.me/+4OSrJNIvHc00ODM0" class="social-icon">
                <i class="bx bxl-telegram"></i>
              </a>
							
            </div>
          </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Want to get the info for login?</h3>
            <br />
            <button class="btn transparent" id="sign-up-btn">Get info</button>
          </div>
          <img
            src="Authentication_Two Color.png"
            class="image"
            alt=""
          />
        </div>
      <div class="panel right-panel">
        <div class="content">
            <h3>One of us?</h3>
            <br />
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          
          <img
            src="Authentication_Two Color (1).png"
            class="image"
            alt=""
          />
         
        </div>
      </div>
    </div>
    <script>
function validatePassword() {
  var newPassword = document.getElementById("new-password").value;
  var confirmPassword = document.getElementById("confirm-password").value;
  var passwordError = document.getElementById("password-error");

  if (newPassword !== confirmPassword) {
    passwordError.textContent = "Passwords do not match.";
    return false; // Prevent form submission
  } else {
    passwordError.textContent = ""; // Clear error message
    return true; // Allow form submission
  }
}
</script>
<script>
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }
  </script>
    <script src="app.js"></script>
  </body>
</html>
