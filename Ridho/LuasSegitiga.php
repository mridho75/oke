<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Segitiga</title>
</head>
<body>

<h2>Program Hitung Luas Segitiga Ridho</h2>
<p>Silakan masukkan nilai alas dan tinggi segitiga di bawah ini:</p>
<form method="post" action="">
    Masukkan Alas (cm): <input type="number" name="alas" placeholder="Contoh: 5" required><br><br>
    Masukkan Tinggi (cm): <input type="number" name="tinggi" placeholder="Contoh: 10" required><br><br>
    <input type="submit" name="submit" value="Hitung">
</form>

<?php
// Definisikan fungsi untuk menghitung luas segitiga
function luasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

// Cek jika form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];

    // Validasi input
    if ($alas > 0 && $tinggi > 0) {
        $luas = luasSegitiga($alas, $tinggi);
        echo "<h3>Hasil:</h3>";
        echo "Luas segitiga dengan alas $alas cm dan tinggi $tinggi cm adalah: <strong>$luas cm²</strong>";
    } else {
        echo "<h3>Kesalahan Input:</h3>";
        echo "Silakan masukkan nilai positif untuk alas dan tinggi.";
    }
}
?>

</body>
</html>
