<?php
// Tugas1.php
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Tugas 1 Praktikum PBW</title>
</head>

<body>

    <h1>Tugas 1 Praktikum Pemrograman Berbasis Web</h1>

    <h2>1. Contoh Program Pertemuan 1</h2>

    <p>
        Program yang digunakan adalah kalkulator.php dan biodata.php.
        Kedua program berhasil dijalankan menggunakan PHP melalui localhost.
    </p>

    <h2>2. Modifikasi Program</h2>

    <h3>Modifikasi 1 - Penambahan Field Email</h3>

    <p>
        Pada biodata.php ditambahkan field email pada data mahasiswa.
        Field email kemudian ditampilkan bersama data mahasiswa lainnya.
    </p>

    <h3>Modifikasi 2 - Penambahan Kondisi</h3>

    <p>
        Pada kalkulator.php ditambahkan kondisi untuk memberikan keterangan
        berdasarkan hasil perhitungan. Jika hasil lebih dari 100, maka
        ditampilkan keterangan "Hasil lebih dari 100".
    </p>

    <h2>3. Lima Bagian Kode Penting</h2>

    <ol>
        <li>
            <b>Variabel:</b> digunakan untuk menyimpan data yang akan diproses
            oleh program.
        </li>

        <li>
            <b>Array mahasiswa:</b> digunakan untuk menyimpan data biodata
            mahasiswa seperti NIM, nama, prodi, semester, IPK, dan email.
        </li>

        <li>
            <b>Switch:</b> digunakan untuk menentukan operasi matematika
            berdasarkan operator yang dipilih.
        </li>

        <li>
            <b>Foreach:</b> digunakan untuk menampilkan setiap data mahasiswa
            dari array.
        </li>

        <li>
            <b>If:</b> digunakan untuk membuat kondisi, seperti menentukan
            keterangan berdasarkan hasil perhitungan.
        </li>
    </ol>

    <h2>4. Error dan Cara Perbaikan</h2>

    <p>
        Error yang muncul adalah halaman "404 Not Found" saat membuka file PHP.
        Penyebabnya adalah alamat URL atau lokasi folder file tidak sesuai
        dengan lokasi file pada localhost. Perbaikannya adalah memastikan file
        berada di dalam folder htdocs dan menggunakan URL localhost sesuai
        struktur folder.
    </p>

    <h2>5. Kesimpulan</h2>

    <p>
        Program PHP berhasil dijalankan melalui localhost. Modifikasi berupa
        penambahan field email dan kondisi baru berhasil diterapkan tanpa
        menghilangkan fungsi utama program.
    </p>

</body>

</html>