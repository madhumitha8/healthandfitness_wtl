<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Name, Email, Address, Doctor FROM appointment";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Address"]."</td><td>".$row["Doctor"]."</td></tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 

</body>
</html>
