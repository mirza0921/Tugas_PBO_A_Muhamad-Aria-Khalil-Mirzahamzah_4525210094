<?php

require_once 'Mahasiswa.php';

// // Menggunakan constructor tanpa parameter
// $mhs1 = new Mahasiswa();
// $mhs1->tampilkanInfo();
//
// echo PHP_EOL;
//
// // Menggunakan constructor dengan 2 parameter
// $mhs2 = new Mahasiswa("Budi", "12345678");
// $mhs2->setUmur(20); // Mengatur umur menggunakan setter
// $mhs2->tampilkanInfo();
//
// echo PHP_EOL;
//
// // Menggunakan constructor dengan 3 parameter
// $mhs3 = new Mahasiswa("Siti", "87654321", 22);
// $mhs3->tampilkanInfo();

$khalil = new Mahasiswa();
$khalil->tampilkanInfo();

// memberikan value Muhamad Aria Khalil Mirzahamzah ke property nama dari objek khalil
$khalil->setNama("Muhamad Aria Khalil Mirzahamzah");
echo "Nama : " . $khalil->getNama() . PHP_EOL;

$khalil->setNim("4525210094");
echo "NIM : " . $khalil->getNim() . PHP_EOL;

$khalil->setUmur(15);
echo "Umur : " . $khalil->getUmur() . PHP_EOL;

// Constructor lengkap
$hakim = new Mahasiswa("Arief Rahman Hakim", "4525210095", 19);
$hakim->tampilkanInfo();