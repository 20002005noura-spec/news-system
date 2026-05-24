<?php

include "connectionOneDatabase.php";

if(isset($_GET["delete"])){

    $id = $_GET["delete"];

    $sql = "UPDATE news SET deleted = 1 WHERE id = $id";
    $connection->query($sql);

    header("Location: view_news.php");
    exit();
}

$sql = "SELECT * FROM news WHERE deleted = 0";
$result = $connection->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View News</title>
</head>
<body>
    


<center>

<h1>View All News</h1>

<table border="1px" width="100%">

<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Details</th>
    <th>Image</th>
    <th>Category ID</th>
    <th>User ID</th>
    <th>operations</th>
   
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

    <td>
        <a href="view_news.php?delete=<?php echo $row['id']; ?>">
            Delete
        </a>
  
        <a href="edit_news.php?id=<?php echo $row['id']; ?>">
            Edit
        </a>
    </td>

</tr>

<?php } ?>

</table>

</center>

</body>
</html>