<?php 
require_once 'C:\xampp\htdocs\GRC\lib\db_connection.php';

class Customer {    
    private $stmt;

    public function addCustomer($data){
        global $dbh;
        // Prepare Query
        $this->stmt = $dbh->prepare('INSERT INTO customers (id, cardHolderName, email) VALUES (:id, :cardHolderName, :email)');
        
        // Bind Values
        $this->stmt->bindParam(':id', $data['id'], PDO::PARAM_STR);
        $this->stmt->bindParam(':cardHolderName', $data['cardHolderName'], PDO::PARAM_STR);
        $this->stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
        
        // Execute
        $this->stmt->execute();
    }
}

//class Customer {
//    private $db;
//    
//    public function __construct(){
//        $this->db = new Database;     
//    }
//    
//    public function addCustomer($data){
//        // Prepare Query
//        $this->db->query('INSERT INTO customers (id, cardHolderName, email) VALUES(:id, :cardHolderName, :email)');
//        
//        // Bind Values
//        $this->db->bind(':id', $data['id']);
//        $this->db->bind(':cardHolderName', $data['cardHolderName']);
//        $this->db->bind(':email', $data['email']);
//        
//        // Execute
//        if($this->db->execute()){
//            return true;
//        } else{
//            return false;
//        }
//    }
//}
?> 
