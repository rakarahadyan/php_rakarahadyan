<?php

if (isset($_POST['langkah'])) {
    $langkah = $_POST['langkah'];
} else {
    $langkah = 1;
}

if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
} else {
    $nama = "";
}

if (isset($_POST['umur'])) {
    $umur = $_POST['umur'];
} else {
    $umur = "";
}

if (isset($_POST['hobi'])) {
    $hobi = $_POST['hobi'];
} else {
    $hobi = "";
}

if ($langkah == 1) {
    echo "<div style='border: 1px solid #000; padding: 10px;'>";
    echo "<form method='post'>";
    echo "<div style='display: flex; justify-content: start; align-items:center; gap: 15px;'>";
    echo "<label>Nama Anda :</label>";
    echo "<input type='text' name='nama' required>";
    echo "<input type='hidden' name='langkah' value='2'>";
    echo "</div>";
    echo "<button type='submit'>SUBMIT</button>";
    echo "</form>";
    echo "</div>";

} elseif ($langkah == 2) {
    echo "<div style='border: 1px solid #000; padding: 10px;'>";
    echo "<form method='post'>";
    echo "<div style='display: flex; justify-content: start; align-items:center; gap: 15px;'>";
    echo "<label>Umur Anda :</label>";
    echo "<input type='number' name='umur' required>";
    echo "<input type='hidden' name='nama' value='$nama'>";
    echo "<input type='hidden' name='langkah' value='3'>";
    echo "</div>";
    echo "<button type='submit'>SUBMIT</button>";
    echo "</form>";
    echo "</div>";

} elseif ($langkah == 3) {
    echo "<div style='border: 1px solid #000; padding: 10px;'>";
    echo "<form method='post'>";
    echo "<div style='display: flex; justify-content: start; align-items:center; gap: 15px;'>";
    echo "<label>Hobi Anda :</label>";
    echo "<input type='text' name='hobi' required>";
    echo "<input type='hidden' name='nama' value='$nama'>";
    echo "<input type='hidden' name='umur' value='$umur'>";
    echo "<input type='hidden' name='langkah' value='4'>";
    echo "</div>";
    echo "<button type='submit'>SUBMIT</button>";
    echo "</form>";
    echo "</div>";

} elseif ($langkah == 4) {
    echo "<div style='border: 1px solid #000; padding: 10px;'>";
    echo "Nama : $nama <br>";
    echo "Umur : $umur <br>";
    echo "Hobi : $hobi <br>";
    echo "</div>";
}

?>
