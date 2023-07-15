<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$hairstyle = $_POST['hairstyle'];

$data = "======================" . PHP_EOL;
$data .= "Nama: $name" . PHP_EOL;
$data .= "Nomor Telepon: $phone" . PHP_EOL;
$data .= "Tanggal: $date" . PHP_EOL;
$data .= "Model Potongan Rambut: $hairstyle" . PHP_EOL;
$data .= "======================" . PHP_EOL;

$file = fopen("antrian.txt", "a");
fwrite($file, $data);
fclose($file);

echo "Form antrian berhasil disimpan.<br><br>";
echo "Terima kasih atas kunjungan Anda!";

echo '<form action="index.html" method="get" onsubmit="return confirm(\'Anda yakin ingin kembali ke menu awal?\')">';
echo '<button type="submit" style="background-color: #e75656; margin-top: 20px; color: #fff; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; font-size: 16px; transition: background-color 0.3s ease;">Kembali ke Menu Awal</button>';
echo '</form>';
?>
