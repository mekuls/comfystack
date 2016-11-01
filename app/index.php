<?php
$servername = "10.222.1.2";
$username = "vstack_user";
$password = "DV2JLlizYu7pbktu01Qi";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM vstack_db.items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $content = "";

    while($row = $result->fetch_assoc()) {

        $content .= "<li>Id: "
            . $row["Id"]. ", Content: "
            . $row["Content"]. "</li>\n";
    }
}

$conn->close();
?>

<html>
    <head></head>
    <body>
    Contents of items table:
    <ul>
        <?php echo $content  ?>
    </ul>
    </body>
</html>
