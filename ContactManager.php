<?php
    include 'Contact.php';
include "ConnectedDB.php";
    class ContactManager {
        public function GetAllContacts(){
            $SelctRow = 'SELECT * from Contact';
            $query = mysqli_query(getConnection() ,$SelctRow);
            $Contact_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
    
            return $Contact_data;
            
        }



    
    }


    
?>