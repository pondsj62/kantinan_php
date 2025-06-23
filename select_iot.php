<?php
include 'connect.php';

$sql = "SELECT * FROM tbl_iot";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>
            <tr>
                <th>Zone Name</th>
                <th>Temperature</th>
                <th>Humidity</th>
                <th>Users</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["zone"]. "</td>
                <td>" . $row["temp"]. "</td>
                <td>" . $row["hum"]. "</td>
                <td>" . $row["users"]. "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>