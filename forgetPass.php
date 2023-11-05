<?php require 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forget password</title>
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/app.css" />
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form" action="forgetPass.php" method="post">
          <?php if(count($errors) > 0 ):?>
                  <div class="alert alert-danger">
                      <?php foreach($errors as $error): ?>
                          <li><?php echo $error; ?></li>
                      <?php endforeach; ?>
                  </div> 
              <?php endif; ?>
            <p>
              Forgot your account password? Enter your email and we will send
              you a recovery link.
            </p>

            <div class="input-field">
              <i class="bx bxs-envelope"></i>
              <input type="email" name="email" placeholder="Email" />
            </div>
            <input type="submit" name="forgot-password" value="Reset password" class="btn solid" />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
