 <?php
class class_function
{
   private $con;      //security key

   function __construct()   //functon name is same all file
   {
      $this->con=new mysqli("localhost","root","","shiva");       //data base name
   }

   function create_user_account($name,$number,$email)    //craete account 
   {
          if($stmt = $this->con->prepare("INSERT INTO `shiva2`( `name`, `number`, `email`) VALUES (?,?,?)"))   //insterte data is database
          {
                 $stmt->bind_param("sis",$name,$number,$email);   

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



<?php
// include file                                                   step 3
require_once('function2.php');
$db= new class_function();


//submit button click on lisner                                step 2 
if(isset($_POST['submit']))
{
    echo $var_name=$_POST['text'];
    echo $var_number=$_POST['number'];
    echo $var_email=$_POST['email'];

    $db->create_user_account($var_name,$var_number,$var_email,); 

 }
?>

<html>
    <title>
        RIGSTRATION
</title>
<style>

    </style>
    <body>
<?php
// from is data is inpute store the page                            step 1
?>
    <form action="index2.php" method="POST" > 
        <div class="design_text" >
    <input type="text" name="text" required placeholder="Enter name" />
</div>
<div class="design_number">
    <input type="number" name="number"  placeholder="Enter Number" />
</div>
<div class="design_text">

    <input type="text" name="email"  placeholder="Enter Email" />
</div>
    <input type="submit" name="submit"  >
    </form>  


        </html>
    </html>



