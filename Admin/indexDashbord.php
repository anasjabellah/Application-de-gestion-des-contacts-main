<?php  
   session_start();  

   include_once '../model/model_SignUp.php';  

   $user = new Sign();  


   $id = $_SESSION['id'];  
   if (!$user->session()){  
      header("location: ../Page d'accueil/singIn.php");  
   }  

   if (isset($_REQUEST['q'])){  
      $user->logout();  
      header("location: ../Page d'accueil/singIn.php"); 
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
        <link rel="stylesheet" href="../styleAdmin/bootstrap.css">

        <link rel="stylesheet" href="../style/styleColors.css">
        <link rel="stylesheet" href="../styleAdmin/indexDashbord.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            
            <div class="Sidebar slidarcolor" id="sidebar-wrapper">

                <div class="boxImage">
                    <img src="../images/logo/rsz_black_and_yellow_typographic_art___design_logo__3_-removebg-preview.png" alt="">
                </div>

                
                <div class="list-group list-group-flush list-link">
                      
                      <div class="mt-3 d-flex justify-content-center">
                        <a href="indexDashbord.php" class="fs-5 text-center me-3 text-decoration-none text-dark ">
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
                        <a href="contactsAdmin.php" class="fs-5 text-center me-1 text-decoration-none text-dark">
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
                                <div class="hader-content">
                                    <div class="hader-text">
                                        <h1>hi <?php echo $_SESSION['full_name'] ?></h1>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolores voluptatum modi laborum
                                             repellat dignissimos? Autem, architecto eligendi qui laboriosam neque 
                                            molestiae commodi consequatur inventore nobis fugit porro quibusdam. Accusamus?
                                            </p>
                                    </div>
                                    <div class="hader-image">
                                        <img src="../images/imageDash/business-3d-casual-life-3d-freelancer.png" alt="image Dashbord Admin">
                                    </div>
                                </div>
                                
                                <div class="carts">
                                    <div class="cart cart-1">
                                        <p>total patients</p>
                                        <p>63,987</p>
                                        <p>total patient admited: 30,40</p>
                                    </div>
                                    <div class="cart cart-2">
                                        <p>total patients</p>
                                        <p>63,987</p>
                                        <p>total patient admited: 30,40</p>
                                    </div>
                                    <div class="cart cart-3">
                                        <p>total patients</p>
                                        <p>63,987</p>
                                        <p>total patient admited: 30,40</p>
                                    </div>
                                </div>

                                <div class="tabelContent">

                                    <div class="barContact">
                                        <div class="barContact-lf">
                                            <h1>contacts</h1>
                                            <a href="">add new</a>
                                        </div>

                                        <div class="barContact-re">
                                            <form action="">
                                                <input type="search" name="search" id="search" placeholder="search contacts">
                                            </form>
                                        </div>
                                    </div>

                                    <div class="tabals">
                                        <table class="table table-borderless tabls">
                                            <thead>
                                              <tr>
                                                <th scope="col">name</th>
                                                <th scope="col">phone</th>
                                                <th scope="col">email</th>
                                                <th scope="col">address</th>
                                                <th scope="col">edit</th>
                                              </tr>
    
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>mdo</td>
                                                <td>mdo</td>
                                                <td>
                                                    <button type="button" class="btn btndrow" id="dropdownMenuOffset" data-bs-toggle="dropdown" >
                                                        <i class="bi bi-filter-right"></i>
                                                      </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-fill id"></i> edit</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash2-fill de"></i>delet</a></li>
                                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-eye-fill sh"></i>show</a></li>
                                                    </ul>
                                                </td>
                                              </tr>

                                              <tr>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>mdo</td>
                                                <td>mdo</td>
                                                <td>
                                                    <button type="button" class="btn btndrow" id="dropdownMenuOffset" data-bs-toggle="dropdown" >
                                                        <i class="bi bi-filter-right"></i>
                                                      </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-fill id"></i> edit</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash2-fill de"></i>delet</a></li>
                                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-eye-fill sh"></i>show</a></li>
                                                    </ul>
                                                </td>
                                              </tr>
                                              
                                            </tbody>
                                        </table>
                                    </div>
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


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../scriptAdmin/scripts.js"></script>
    </body>
</html>
