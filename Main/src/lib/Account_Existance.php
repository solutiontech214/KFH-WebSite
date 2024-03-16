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
public function is_account_exists($email, $pass)
{
    $stmt = $this->con->prepare("SELECT `email`, `pass` FROM `account` WHERE `email`=? AND `pass`=?");

    // Check for errors in the preparation of the statement
    if (!$stmt) {
        die("Error in preparing the statement: " . $this->con->error);
    }

    // Bind parameters
    $stmt->bind_param("ss", $email, $pass);

    // Execute the query
    $res = $stmt->execute();

    // Check for errors in the execution of the statement
    if (!$res) {
        die("Error in executing the statement: " . $stmt->error);
    }

    // Bind the result variables
    $stmt->bind_result($res_email, $res_pass);

    // Fetch the result
    $stmt->fetch();

    // Check if the result is not empty
    if (!empty($res_email) && !empty($res_pass)) {
        return true;
    } else {
        return false;
    }

    // Close the statement
   
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
//getting account infromation

public function __call($name_of_function,$args)
{
    if($name_of_function=='get_info')
    {
        switch(count($args))
        {
            case 1:
                $stmt = $this->con->prepare("SELECT `f_name` FROM `account` WHERE `email`=? ");

                // Check for errors in the preparation of the statement
                
            
                // Bind parameters
                $stmt->bind_param("s", $args[0]);
            
                // Execute the query
                $res = $stmt->execute();
            
                // Check for errors in the execution of the statement
               
            
                // Bind the result variables
                $stmt->bind_result($res_name);
            
                // Fetch the result
                $stmt->fetch();
            
                // Check if the result is not empty
                if (!empty($res_name)) {
                    return $res_name;
                } else {
                    return false;
                }

               

            case 2:
                $stmt = $this->con->prepare("SELECT `f_name`, `l_name` FROM `account` WHERE `email`=? ");

                // Check for errors in the preparation of the statement
                if (!$stmt) {
                    die("Error in preparing the statement: " . $this->con->error);
                }
            
                // Bind parameters
                $stmt->bind_param("s", $args[0]);
            
                // Execute the query
                $res = $stmt->execute();
            
                // Check for errors in the execution of the statement
                if (!$res) {
                    die("Error in executing the statement: " . $stmt->error);
                }
            
                // Bind the result variables
                $stmt->bind_result($res_name,$res_l_name);
            
                // Fetch the result
                $stmt->fetch();
            
                // Check if the result is not empty
                if (!empty($res_name) && !empty($res_l_name)) {
                    return $res_name." ".$res_l_name;
                } else {
                    return false;
                }

             

            default:
                echo "Invalid call";
        }
    
    }
}
function update_pass($email,$newpass)
{
    $stmt = $this->con->prepare("UPDATE `account` SET `pass`=? WHERE  `email`=? ");
    $stmt->bind_param("ss",$newpass, $email);
    $stmt->execute();
   $ar= $stmt->affected_rows;
   
    if($ar==1)
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