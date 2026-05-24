<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<center>

    <h1>Login</h1>
    <?php
      if(isset($_GET["statusCode"])){
        if($_GET["statusCode"]=="201"){
            echo "<b>Acount Created </b>";
        }
      }
    ?>

    <form action="login_logic.php" method="POST">

        <input type="email" name="email" placeholder="Email">
        <br>

        <input type="password" name="password" placeholder="Password">
        <br>

        <input type="submit" name="login" value="Login">

    </form>

</center>
    
</body>
</html>