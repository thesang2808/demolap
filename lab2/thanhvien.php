<?php

// Call to file containing Google Tai lieu
require_once("hotro.php");

/* Class name definition */
class member{
    // Attribute, Field
    private $fullname;
    private $email;
    private $idmember;

    public function __construct($fullname, $email){
        $this->fullname = $fullname;
        $this->email = $email;
        $this->idmember = idcontinue(); // Đảm bảo hàm idcontinue() được định nghĩa
    }

    public function __destruct(){
        $this->fullname = NULL;
        $this->email = NULL;
        // $this->status = NULL; // Bỏ dòng này nếu không có thuộc tính status
        $this->idmember = NULL;
    }

    // Method that returns Full Name, Email and Id
    public function get_fullname(){
        return $this->fullname;
    }

    public function get_email(){
        return $this->email;
    }

    public function get_id(){
        return $this->idmember; 
    }
}