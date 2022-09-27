<?php

    class Contact {
        private $id;
        private $FirstName;
        private $LastName;
        private $Phone;
        private $Email;

        public function GetId(){
            return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }
     
        public function GetFirstName(){
            return $this->FirstName;
        }
        public function SetFirstName($value){
            $this->FirstName = $value;
        }
        public function GetLastName(){
            return $this->LastName;
        }
        public function SetLastName($value){
            $this->LastName= $value;
        }
        public function GetPhone(){
            return $this->Phone;
        }
        public function SetPhone($value){
            $this->Phone= $value;
        }
     
        public function GetEmail(){
            return $this->Email;
        }
        public function SetEmail($value){
            $this->Email= $value;
        }
     
   
    }
?>