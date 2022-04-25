<?php 


    include_once '../model/user.php';  

    $contact = new user(); 
    echo $_GET['id'] ;
    
    
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        if($contact->Delete_Record($id))
        {
            // $contact->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location: ../Admin/contactsAdmin.php");  
        }
        else
        {
            // $contact->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
            header("location: ../Admin/contactsAdmin.php");  
        }
    }
?>