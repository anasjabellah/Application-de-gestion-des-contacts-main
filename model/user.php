<?php 

    
include_once("sql.php");
class user extends Dbconnect{  






        public function __construct() {  
            $this->Dbconnecthh = new Dbconnect;  
            $this->Dbconnecthh->connect();
        }  



      // Insert Record in the Database Using Query    
        function insert_record($fullname,$phone,$email,$address,$id)
        {
            $query = "insert into contact (fullname,phone, email,address,userid) values ('$fullname','$phone','$email','$address',$id)";
            $result = mysqli_query($this->Dbconnecthh->connection,$query);

            if($result)
            {
                return $result;
            }
            else
            {
                return  '<div class="alert alert-danger"> Failed </div>';
            }
        }


        public function view_record($userid)
        {

            $query = "select * from contact where userid = '$userid' ";
            $result = mysqli_query($this->Dbconnecthh->connection,$query);
            return $result;
        }


        // Get Particular Record
        public function get_record($id)
        {
            $sql = "select * from contact where contactid='$id'";
            $result = mysqli_query($this->Dbconnecthh->connection,$sql);
            $data = mysqli_fetch_assoc($result);
            return $data ;

        }


        public function update_Data($fullname,$phone,$email,$address,$id)
        {
            $sql = "UPDATE contact SET fullname='$fullname', phone='$phone', email='$email', address='$address' where contactid='$id'";
            $result = mysqli_query($this->Dbconnecthh->connection,$sql);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }



        public function Delete_Record($id)
        {

            $sql = "DELETE FROM contact WHERE contactid='$id'";
            $delet = mysqli_query($this->Dbconnecthh->connection,$sql);
            return $delet;
        }



        public function ajaxSearch($input){
            $query = "select * from contact where fullname LIKE '{$input}%' ";
            $result1 = mysqli_query($this->Dbconnecthh->connection,$query);
            return $result1;
        }




     }
?>