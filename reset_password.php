<?php require 'controllers/authController.php';
if(isset($_GET['password-token'])){
    $passwordToken = $_GET['password-token'];
    resetPassword($passwordToken);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/app.css" />
    <link href="signIn.html" rel="import" />
</head>
<body>
<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form" action="login.php" method="post">
            <?php if(count($errors) > 0 ):?>
                            <div class="alert alert-danger">
                                <?php foreach($errors as $error): ?>
                                    <li><?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </div> 
                        <?php endif; ?>
            <h2 class="title">Reset Your Password</h2>
            
            <div class="input-field">
              <i class="bx bxs-lock-alt"></i>
              <input name="password" type="password" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="bx bxs-lock-alt"></i>
              <input name="passwordConf" type="password" placeholder="Re-enter password" />
            </div>
            <input type="submit" name="reset-password-btn" value="Reset password" class="btn solid" />
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
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Go back to login page</h3>
            <br />
            <a href="login.php"
              ><button class="btn transparent" id="sign-up-btn">
                login
              </button></a
            >
          </div>
          <img
            src="/images/Authentication_Two Color.png"
            class="image"
            alt=""
          />
        </div>
      </div>
    </div>

    <script src="js/app.js"></script>
</body>
</html>