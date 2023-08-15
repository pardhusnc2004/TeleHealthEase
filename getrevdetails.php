<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TELE_HEALTH_EASE";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM reviews LIMIT 1";
$result = $conn->query($sql);
$column_names = array();
if ($result) {
    $columns = $result->fetch_assoc();
    $column_names = array_keys($columns);
}
$sql = "SELECT * FROM reviews";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Display SQL Data</title>
</head>
<body>
    <table border="1">
        <tr>
            <?php
            foreach ($column_names as $column) {
                echo "<th>" . $column . "</th>";
            }
            ?>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($column_names as $column) {
                    echo "<td>" . $row[$column] . "</td>";
                }
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='" . count($column_names) . "'>No data found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
