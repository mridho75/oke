<?php
$height = 10; // Setengah tinggi belah ketupat

echo "<pre>"; // Mulai tag <pre> agar spasi terjaga

// Loop untuk bagian atas
for ($i = 1; $i <= $height; $i++) {
    // Cetak spasi di depan
    echo str_repeat(" ", $height - $i);
    // Cetak "X"
    echo str_repeat("X", ($i * 2) - 1);
    echo "\n";
}

// Loop untuk bagian bawah
for ($i = $height - 1; $i >= 1; $i--) {
    // Cetak spasi di depan
    echo str_repeat(" ", $height - $i);
    // Cetak "X"
    echo str_repeat("X", ($i * 2) - 1);
    echo "\n";
}

echo "</pre>"; // Tutup tag <pre>
?>
