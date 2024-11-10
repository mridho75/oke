<?php
echo "<div style='border: 1px solid black; padding: 10px; width: fit-content;'>";
// Array yang berisi angka-angka
$angka = [4, 6, 7, 9, 13];

// Menampilkan array yang dimasukkan
echo "Array yang dimasukkan: ";
foreach ($angka as $nilai) {
    echo $nilai . " ";
}

// Menghitung jumlah dari seluruh elemen di dalam array
$total = array_sum($angka);

// Menampilkan hasil penjumlahan

echo "<br> Hasil penjumlahan array tersebut: " . $total;
echo "</div>";
?>
