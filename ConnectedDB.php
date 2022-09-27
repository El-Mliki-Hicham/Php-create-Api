<?php


 function getConnection(){
  
        $Connection = mysqli_connect('localhost', 'root', '', 'contact manager');
       
     
   
    
    return $Connection;
    
}


?>