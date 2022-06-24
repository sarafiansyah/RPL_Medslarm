<?php
//REG
require '_php/function.php';
session_start();
verifyCookie();

if (isset($_SESSION['username'])) {
   header("Location: userMain.php");
}

if(isset($_POST['register'])) {
  if(registration($_POST) > 0){
    echo "<script>
          alert('User baru berhasil');
          </script>";
  }
}
else {
  echo mysqli_error($conn);
}


//LOG
if(isset($_POST['loginBtn'])) {
  $username = $_POST["loginUsername"];
  $password = $_POST["loginPassword"];
  $resultLog = mysqli_query($conn, "SELECT * FROM users WHERE username ='$username'");

  //Username check
  if(mysqli_num_rows($resultLog) === 1){
    //Password Check
    $row = mysqli_fetch_assoc($resultLog);
    if(password_verify($password, $row["password"])){
       $_SESSION['username'] = $username;
      // remember me
      if(isset($_POST['rememberme'])) {
         setcookie('id', $row['id'], mktime(0, 0, 0, 0, 0, 25));
         setcookie('key', hash('sha256', $username), mktime(0, 0, 0, 0, 0, 25));
      }
      header("Location: userMain.php");
      exit;
    }
  }

  $error = true;


}
?>


<!doctype html>

<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  </head>
  <body>
  <div class="mainbg1">
<?php  include("fw/nav-main.php") ?>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,160L120,165.3C240,171,480,181,720,170.7C960,160,1200,128,1320,112L1440,96L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>


<div class="container-fluid" style="padding: 100px; border-radius: 20px; margin-top: -500px;">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image" style="border-radius: 20px 0px 0px 20px;"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light" style="border-radius: 0px 20px 20px 0px;">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">Sign In!</h3>
                            <p class="text-muted mb-4">Login to access your reminder anywhere, anytime, at all costs!</p>
                            <form class="" action="#" method="post">
                                <div class="form-group mb-3">
                                    <input id="loginUsername" type="text" name="loginUsername" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                    <input id="loginPassword" type="password" name="loginPassword"placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                               
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Remember password</label>
                                </div>
                                <button type="submit" name="loginBtn" id="register" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign in</button>
                                <div class="text-center d-flex justify-content-between mt-4"><p>Don't have an account? <a href="public-signIn.php" class="font-italic text-muted"> <u>Sign Up</u></a></p></div>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>


  <!-- Footer -->
  <?php  include("fw/footer-main.php") ?>
  <!-- Footer -->

<!-- End of .container -->
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>