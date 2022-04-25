




<?php 

   
class Dbconnect { 

    private $_localhost = 'localhost'; 
    private $_user = 'root'; 
    private $_password = ''; 
    private $_dbname = 'gestioncontacts'; 
    
    protected $connection; 

    public function connect() { 
   
        if(!isset($this-> connection)) 
        { 
                    
            $this->connection = new mysqli($this->_localhost , $this->_user , $this->_password , $this->_dbname);

            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            } 

        } 

   } 
} 

   
?> 






