<?php
//class starts
date_default_timezone_set('Asia/Kolkata');
class Account_Existance
{
   

// Get the current date and time

    private $con;
    //creating a database connection
public function __construct()
{
$this->con=mysqli_connect("localhost","KFH_DB","this.pass.123","KFH_DB");
    
    if($this->con==false)
    {
        echo "Unable to connect to Database..!!";
    }
}
// finding the account is exist or not 
    public function is_account_exists($email)
    {
        $sql= "SELECT * From `account` WHERE `email`=$email";
        $result=mysqli_query($this->con,$sql);
        if(!empty($result))
        {

            return true;
        }
        else
        {
            return false;
        }
       
    }
    //creating an user account
    public function create_account($f_name,$l_name,$email,$a_pass,$c_pass)
{
     $Date = date('Y-m-d');
     $time=date('H:i:s');
     $sql= "INSERT INTO `account`(`id`, `f_name`, `l_name`, `email`, `pass`, `date`, `time`) VALUES ($f_name,$l_name,$email,$a_pass,$c_pass,$Date,$time))";
     
     if(mysqli_query($this->con,$sql))
     {
         return true;
     }
     else{
        return false;
     }
    
}

//class ends
}



?>