<?php
//class starts
date_default_timezone_set('Asia/Kolkata');
class Account
{
   

// Get the current date and time

    private $con;
    //creating a database connection
public function __construct()
{
$this->con=new mysqli("localhost","KFH_DB","this.pass.123","KFH_DB");
    
    if($this->con==false)
    {
        echo "Unable to connect to Database..!!";
    }
}
// finding the account is exists  or not 
    public function is_account_exists($email)
    {
       $stmt=$this->con->prepare("SELECT `email` FROM `account` WHERE `email`=?");
       $stmt->bind_param("s",$email);
       $stmt->bind_result($res_email);
       $res=$stmt->execute();
       $stmt->fetch();
       $arr=array();
      if(empty($arr[0]['email']=$res_email))
      {
        return false;
      }
      else{
        return true;
      }
    }
    //creating an user account
    public function create_account($f_name,$l_name,$email,$a_pass,$c_pass)
{
     $Date = date('Y-m-d');
     $time=date('H:i:s');
     $sql= "INSERT INTO `account` ( `f_name`, `l_name`, `email`, `pass`, `date`, `time`) VALUES (?,?,?,?,?,?)";
 
     $stmt=$this->con->prepare($sql);
     $stmt->bind_param("ssssss",$f_name,$l_name,$email,$a_pass,$Date,$time);

     if($stmt->execute())
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