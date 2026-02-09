<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas php</title>
</head>
<body>
    <form action="" method="post">
        angka 1 <input type="text" name="angka1"> <br>
        angka 2 <input type="text" name="angka2"> <br>
        operator <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select>
        <button type="submit" name="eksekusi">eksekusi</button>
        </form>
</body>
</html>

<?php
if(isset($_POST['eksekusi'])) {
    $angka1 = $_POST["angka1"];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    $hasil = 0;
}

// penjumlahan
if ($operator == "+") {
    $hasil = $angka1 + $angka2;
}

// pengurangan
else if ($operator == "-") {
    $hasil = $angka1 - $angka2;
}

// perkalian
else if ($operator == "x") {
    $hasil = $angka1 * $angka2;
}

// pembagian
else if ($operator == "/") {
    $hasil = $angka1 / $angka2;
}

echo "<br>";
echo "$angka1 $operator $angka2 <br>";
echo "= $hasil";

?>