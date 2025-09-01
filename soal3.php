<?php
$servername = "localhost";
$database = "testdb";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());
}

$nama   = $_GET['nama'] ?? '';
$alamat = $_GET['alamat'] ?? '';

$sql = "SELECT a.id, a.nama, a.alamat, b.hobi FROM person a INNER JOIN hobi b ON a.id = b.person_id WHERE 1=1";

if (!empty($nama)) {
    $sql .= " AND a.nama LIKE '%$nama%'";
}
if (!empty($alamat)) {
    $sql .= " AND a.alamat LIKE '%$alamat%'";
}

$sql .= " ORDER BY a.id DESC LIMIT 5";

$result = $conn->query($sql);

echo "<table border='1' cellspacing='0'>";
echo "<tr><th>Nama</th><th>Alamat</th><th>Hobi</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['alamat'] . "</td>";
    echo "<td>" . $row['hobi'] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<div style='border: 1px solid #000; padding: 10px; margin-top: 20px;'>";
echo "<form method='get'>";
echo "<div style='display: flex; justify-content: start; align-items:center; gap: 15px; padding-bottom:15px;'>";
echo "<label>Nama:<label><input type='text' name='nama' value='$nama'>";
echo "</div>";
echo "<div style='display: flex; justify-content: start; align-items:center; gap: 15px; padding-bottom:15px;'>";
echo "<label>Alamat:<label><input type='text' name='alamat' value='$alamat'>";
echo "</div>";
echo "<button type='submit'>SEARCH</button>";
echo "</form>";
echo "</div>";

