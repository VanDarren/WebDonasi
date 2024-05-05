<!-- laporan_pdf.php -->

<html>
<head>
    <title>Laporan PDF</title>
    <!-- Letakkan pustaka TCPDF atau autoload di sini jika diperlukan -->
</head>
<body>

    <h3><?= 'Tanggal Awal: ' . $tanggalmulai . ' - Tanggal Akhir: ' . $tanggalakhir ?></h3>
    <table border="1" align="center" width="100%">
        <thead>
            <tr>
                <th scope="col" width="7%">No</th>
                <th scope="col" width="20%">Nama Donatur</th>
                <th scope="col" width="20%">Program</th>
                <th scope="col" width="15%">Jumlah</th>
                <th scope="col" width="15%">Pembayaran</th>
                <th scope="col" width="15%">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($satu as $key) {
                ?>
                <tr>
                    <td width="7%" align="center" height="16%"><?= $no++ ?></td>
                    <td width="20%" height="16%"><?= $key->username ?></td>
                    <td width="20%" height="16%"><?= $key->nama_program ?></td>
                    <td width="15%" height="16%"><?= $key->jumlah_donasi ?></td>
                    <td width="15%" height="16%"><?= $key->jenis_pembayaran ?></td>
                    <td width="15%" height="16%"><?= $key->tanggal ?></td>
                </tr>
                <?php
                // Tambahkan harga ke total harga
            }
            ?>
        </tbody>
    </table>

    <!-- Tampilkan total harga di bawah tabel -->

    <script>
        // Script untuk melakukan pencetakan otomatis saat halaman dimuat
        window.onload = function() {
            window.print(); // Melakukan pencetakan otomatis
        }
    </script>

</body>
</html>
