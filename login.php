<?php 
$host="localhost";
$user="root";
$password="";
$db="demo";



mysqli_connect($host,$user,$password,$db);
// mysql_select_db();

if(isset($_POST['username']))
{
    $uname=$_POST['username'];
    $password=$_POST['password'];


    if ($uname == "lucas" and $password == "lucas") 
    {
        echo "You have entered the correct Password";
    }
    else
    {
        echo "You have entered the incorrect password";
    }

}
    // $sql="select * from loginform where user='".$uname."' AND Pass='".$password."' 
    // limit 1";

    // $result=msqli_query($sql);

    // if(mysqli_num_rows($result)==1){
    //     echo " You have succesfully Logged in";
    //     exit();
    // }
    // else{
    //     echo " You have Entered Incorrect Password";
    // }


?>