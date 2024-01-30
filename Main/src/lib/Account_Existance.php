<?php
class Account_Existance
{

public function __construct()
{
    
    if(mysqli_connect("localhost","KFH_DB","this.pass.123","KFH_DB"))
    {
        echo "connection established";
    }
}

    public function is_account_exists($email)
    {

    }
}

$a=new Account_Existance();

?>