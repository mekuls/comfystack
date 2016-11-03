<?php
$servername = getenv('VSTACK_DBHOST');
$username = getenv("VSTACK_DBUSER");
$password = getenv("VSTACK_PASSWORD");
$dbname = getenv("VSTACK_DBNAME");

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM " . $dbname . ".items"; // This is a very bad idea

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
