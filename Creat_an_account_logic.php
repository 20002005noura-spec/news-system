<?php
include "connectionOneDatabase.php";
function validateData($data){
   $data= trim($data);
   $data= htmlspecialchars($data);
   return $data;

}
if ($connection->error == false){
    

    if(isset($_POST["create"])){
        $name = validateData($_POST["name"]);
    $email = validateData($_POST["email"]);
    $password = password_hash(validateData($_POST["password"]),PASSWORD_BCRYPT);
    

    $sql = "INSERT INTO users (name,email,password)
    VALUES('$name','$email','$password')";
    $result = $connection->query($sql);


    if($result== true){
        header("location:login.php?statusCode=201");
      //  echo "insertion done";
    }else {
        echo "fail";

    
    }

    }
}

?>