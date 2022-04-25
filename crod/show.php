<?php  


  session_start();  
 
  include_once '../model/model_SignUp.php'; 
  include_once '../model/user.php';  

  $user = new Sign();  
  $contact = new user();  



  $id = $_GET['id']; 
  
  if (!$user->session()){  
    header("location: ../Page d'accueil/singIn.php");  
  }  

  if (isset($_REQUEST['q'])){  
    $user->logout();  
    header("location: ../Page d'accueil/singIn.php"); 
  } 


  $data = $contact->get_record($id);


    if(isset($_POST['submit']))
    {
      $fullname = $_POST['fullname'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $address = $_POST['address'];


      if($contact->update_Data($fullname,$phone,$email,$address,$id))
      {
          echo '<div class="alert alert-success"> Your Record Has Been Saved :) </div>';
          header("location: ../Admin/contactsAdmin.php");
      }
      else
      {
          echo '<div class="alert alert-danger"> Failed </div>';
      }
    }


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>DashbordAdmin</title>
        <!-- Favicon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

          <!-- Bootstrap core JS-->
         

         <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>


        <link rel="stylesheet" href="../styleAdmin/bootstrap.css">
        <link rel="stylesheet" href="../style/styleColors.css">
        <link rel="stylesheet" href="../styleAdmin/indexDashbord.css">
        <link rel="stylesheet" href="../styleAdmin/style.admin.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            
            <div class="Sidebar slidarcolor" id="sidebar-wrapper">

                <div class="boxImage">
                    <img src="../images/logo/rsz_black_and_yellow_typographic_art___design_logo__3_-removebg-preview.png" alt="">
                </div>

                
                <div class="list-group list-group-flush list-link">
                      
                      <div class="mt-3 d-flex justify-content-center">
                        <a href="../Admin/indexDashbord.php" class="fs-5 text-center me-3 text-decoration-none text-dark ">
                            <i class="bi bi-columns-gap icon-list"></i>
                            Home
                        </a>
                      </div>

                      <div class="mt-3 d-flex justify-content-center">
                        <a href="" class="fs-5 text-center me-3 text-decoration-none text-dark ">
                            <i class="bi bi-people icon-list"></i>
                            friends 
                        </a>
                      </div>
                      
                      <div class="mt-3 d-flex justify-content-center">
                        <a href="student.php" class="fs-5 text-center  text-decoration-none text-dark ">
                            <i class="bi bi-chat-dots icon-list"></i>
                            Messages
                        </a>
                      </div>

                      <div class="mt-3 d-flex justify-content-center">
                        <a href="../Admin/contactsAdmin.php" class="fs-5 text-center me-1 text-decoration-none text-dark">
                            <i class="bi bi-person-rolodex icon-list"></i>
                            contacts
                        </a>
                      </div>

                      
                      <div class="mt-3 d-flex justify-content-center">
                        <a href="" class="fs-5 text-center me-3 text-decoration-none text-dark ">
                            <i class="bi bi-card-checklist icon-list"></i>
                            mission 
                        </a>
                      </div>

                      <div class="mt-3 d-flex justify-content-center">
                        <a href="payment.php" class="fs-5 text-center me-1 text-decoration-none text-dark">
                            <i class="bi bi-gear icon-list"></i>
                            setting
                        </a>
                      </div>



                      <div class="mt-3 d-flex justify-content-center">
                        <a href="?q=logout" class="fs-5 text-center me-1 text-decoration-none text-dark">
                          <i class="bi bi-box-arrow-left icon-list"></i>
                            LOGOUT
                        </a>
                      </div>


                      
                     
                    </div>
            </div>




            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->

                <nav class="navbar navbar-expand-lg  bg-light navbar-light ">
                    <div class="container-fluid">
                        <a class="navbar-brand navIcons" id="sidebarToggle">
                            <i class="bi bi-arrow-left-right"></i>
                        </a>
                    </div>
                </nav>

                
                <!-- Page content-->
                <div class="container-fluid">
                    
                    <div class="container">

                        <div class="container-content">


                            <div class="content-left">   

                              <div class="cartShow">

                                <div class="iconBack mglf">
                                  <a href="../Admin/contactsAdmin.php"><i class="bi bi-arrow-left-circle"></i></a>
                                </div>

                                <ul>
                                  <li>user name :</li>
                                  <li><?php echo $data['fullname']  ?></li>
                                </ul>
                                <ul>
                                  <li>gmail :</li>
                                  <li><?php echo $data['email']  ?></li>
                                </ul>
                                <ul>
                                  <li>phone :</li>
                                  <li><?php echo $data['phone']  ?></li>
                                </ul>
                                <ul>
                                  <li>address :</li>
                                  <li><?php echo $data['address']  ?></li>
                                </ul>
                              </div>

                            </div>

                            <div class="content-re">
                                <div class="cartAdmin">
                                    <div class="imagedash"></div>
                                    <p><?php echo $_SESSION['full_name'] ?></p>
                                    <span>admin</span>
                                    <a href="">setting</a>
                                </div>
                            </div>

                            <div class="calendar">
                                
                            </div>
                        </div>
                    </div>

                    
                </div>
           </div>
       </div>


        <!-- Core theme JS-->
        <script src="../scriptAdmin/scripts.js"></script>
    </body>
</html>
