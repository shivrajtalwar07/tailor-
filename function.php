<?php
class class_function1
{
   private $con;      //security key

   function __construct()   //functon name is same all file
   {
      $this->con=new mysqli("localhost","root","","tailer");       //data base name
   }

   function create_user_account($fname,$lname,$email,$number,$mes)    //craete account 
   {
          if($stmt = $this->con->prepare("INSERT INTO `shop`( `fname`, `lname`, `email`, `number`, `mes`) VALUES (?,?,?,?,?)"))   //insterte data is database
          
          {
                 $stmt->bind_param("sssis",$fname,$lname,$email,$number,$mes);   

                 if($stmt->execute())
                 {
                    return true;
                 }
                else
                {
                    return false;

                }
          }
   }
    

} 
?>