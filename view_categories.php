<?php

include "connectionOneDatabase.php";
$sql="SELECT* FROM categorie ";
$result =$connection->query($sql);
//echo $result->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Categories</title>
</head>
<body>
    <center>
    <h1>View Categories</h1>
    <table border="1px" width="100%">
        <tr>
    <th>ID</th>
    <th>Name</th>
     </tr>
     <?php
     if($result->num_rows != 0){
        while($row =$result->fetch_assoc()){?>
            <tr>
                <td>
                    <?php echo $row["id"]?>
                
                </td>
                <td>
                    <?php echo $row["name"]?>
                </td>

            </tr>
        <?php }
     }
     ?>


    </table>

    </center>

</body>
</html>