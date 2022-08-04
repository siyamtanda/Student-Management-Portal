<?php

$host="localhost";

$user="root";

$password="";

$db="schoolmanagementportal";

$data=mysqli_connect($host,$user,$password,$db);

if($data===true)
{
    die("connection");

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name= $_POST['username'];

        $pass= $_POST['password'];

        $sql="select * from user where username='".$name."' AND
        password='".$pass."'";

        $result=mysqli_query($data,$sql);

        $row=mysqli_fetch_array($result);

        if($row["usertype"]=="AB")
        {
           header("location:studenthome.php");
        }

        elseif($row["usertype"]=="adm")
        {
           header("location:studenthome.php");
        }

        else{
            echo "username or password do not match";
        }
    }
}


?>