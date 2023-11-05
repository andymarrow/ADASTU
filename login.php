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
    .error-message {
      color: red;
      display: block;
      
      white-space: nowrap;
      margin-left:80px;
    
}
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
              <input name="useremail" type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="bx bxs-lock-alt"></i>
              <input name="userpassword" type="password" placeholder="Password" />
            </div>
            <div>
              <?php echo $error ?>
            </div>
            <div class="forget-link">
              <i class="bx bxs-forget"></i>
              <a href="forgetPass.php">Forgot password?</a>
            </div>
            <input name='login-btn' type="submit" value="login" class="btn solid" />
            <p class="social-text">Or sign in with social platforms</p>

            <div class="social-media">
              <a href="https://www.instagram.com/gtb0909/" class="social-icon">
                <i class="bx bxl-instagram"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="bx bxl-twitter"></i>
              </a>
              <a href="https://t.me/+4OSrJNIvHc00ODM0" class="social-icon">
                <i class="bx bxl-telegram"></i>
              </a>

              <a href="#" class="social-icon">
                <i class="bx bxl-linkedin"></i>
              </a>
            </div>
          </form>

          <form class="sign-up-form" action="login.php" method="POST" onsubmit="return validatePassword()">
            <h2 class="title">Sign Up</h2>
            <div class="input-field">
              <i class="bx bxs-user"></i>
              <input name="name" type="text" placeholder="username" required/>
            </div>
            <div class="input-field">
              <i class="bx bxs-envelope"></i>
              <input name="newemail" type="email" placeholder="Email" required/>
            </div>
            <div class="input-field">
              <i class="bx bxs-lock-alt"></i>
              <input name="newpassword"  id="new-password" type="password" placeholder="Password" required/>
            </div>
            <div class="input-field">
                <i class="bx bxs-lock-alt"></i>
                <input name="cpassword" id="confirm-password" type="password" placeholder="Confirm Password" required/>
               
                <span id="password-error" class="error-message"></span>

              </div>
              <div>
                <?php echo $error ?>
              </div>
            <input name="singnup-btn" type="submit" value="Sign Up" class="btn solid" />
            <p class="social-text">Or sign up with social platforms</p>

            <div class="social-media">
              <a href="https://www.instagram.com/gtb0909/" class="social-icon">
                <i class="bx bxl-instagram"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="bx bxl-twitter"></i>
              </a>
              
              <a href="#" class="social-icon">
                <i class="bx bxl-linkedin"></i>
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
            <h3>New here?</h3>
            <br />
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
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
    <script src="app.js"></script>
  </body>
</html>
