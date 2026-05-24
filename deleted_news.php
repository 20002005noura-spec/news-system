<?php

include "connectionOneDatabase.php";

$sql = "SELECT * FROM news WHERE deleted = 1";
$result = $connection->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted News</title>
</head>
<body>
    

<center>

<h1>Deleted News</h1>

<table border="1" width="100%">

<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Details</th>
    <th>Image</th>
    <th>Category ID</th>
    <th>User ID</th>
</tr>

<?php while($row = $result->fetch_assoc()){ ?>

<tr>

    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["title"]; ?></td>
    <td><?php echo $row["details"]; ?></td>

    <td>
        <img src="images/<?php echo $row["image"]; ?>" width="80">
    </td>

    <td><?php echo $row["category_id"]; ?></td>
    <td><?php echo $row["user_id"]; ?></td>

</tr>

<?php } ?>

</table>

</center>

</body>
</html>