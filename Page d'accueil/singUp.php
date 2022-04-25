<?php  
   include_once '../model/model_SignUp.php';  
   $user = new Sign();  
   
   if ($_SERVER["REQUEST_METHOD"] == "POST"){  

       $register = null;
        try {
            $register = $user->register($_REQUEST['first_name'],$_REQUEST['last_name'],$_REQUEST['gmail'],$_REQUEST['password']);  
        } catch(Exception $e) {
            $error = 'User already exists';
        }

      if($register){  

        $error = "Registration Successful!";  

        header("Location: singIn.php");
      }
      else
      {  
        $error = "SQL error!";  
      }  

   }  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style-index.css">
    <link rel="stylesheet" href="../style/styleColors.css">
    <link rel="stylesheet" href="../style/singUp.css">
    <title>sing up</title>
</head>
<body>
    <nav class="navbar">
        <div class="content">
            <div class="nav-bar-logo">
                <img src="../images/logo/rsz_black_and_yellow_typographic_art___design_logo-removebg-preview-removebg-preview.png" alt="">
            </div>
            <ul>
                <li><a href="../index.html">home</a></li>
                <li><a href="singIn.php">sing in</a></li>
                <li><a class="btnBoxShadow" href="singUp.php">sing up </a></li>
            </ul>
        </div>
    </nav>

    <div class="singinBOX">

        <div class="imageBOX">
            <div class="se_color"></div>
            <img src="../images/imageindex/rsz_undraw_mobile_login_re_9ntv__1_-removebg-preview (1).png" alt="">
        </div>
        <div class="formBOX">
            <div class="contentForm">
                <span> hey!</span>
                <span> wellcome back</span>
            </div>
            <form  method="POST">

                <div class="inputUser">
                    <label for="username">first_name</label>
                    <input type="text" name="first_name" placeholder="first_name">
                </div>

                <div class="inputUser">
                    <label for="username">last_name</label>
                    <input type="text" name="last_name" placeholder="last_name">
                </div>

                <div class="inputUser">
                    <label for="username">gmail</label>
                    <input type="text" name="gmail" placeholder="gmail">
                </div>

                <div class="inputPass">         
                    <label for="password">password</label>
                    <input type="password" name="password" placeholder="password">
                </div>

                <div class="inputPass">         
                    <label for="password">password verify</label>
                    <input type="password" name="password_verify" placeholder="password verify">
                </div>

                <input type="submit" value="sing in" name="singin" class="singin">

            </form>

            <p class="singup">already have an account <a href="singIn.php">sing in</a> here.</p>
        </div>
        
    </div>


</body>
</html>