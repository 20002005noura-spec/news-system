<?php
session_start();
include "connectionOneDatabase.php";

if ($connection->error == false){

    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE email='$email' ";

        $result = $connection->query($sql);

        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
           if( password_verify($password,$data["password"])){
            $_SESSION["authUser"]=$data;
            header("location:dashboard.php");
            //echo "login done";
           }else{
            echo "login faile";

           }
            print_r($data);
            //echo "Login Done";
        }else{
             echo "Login faile";

        }
    }
}

?>