<html>
    <head>
        <title>IMPORT EXCEL CI 3</title>
    </head>
    <body>
        <h1>Ambil Format</h1><hr>
        <a href="<?php echo base_url("excel/format.xlsx"); ?>">Download Format</a>
        <a href="<?php echo base_url("excel/format.xlsx"); ?>">Save New Format</a>
        <a href="<?php echo base_url("index.php/ekspor/export"); ?>">Export ke CSV</a><br><br>

        <table border="1" cellpadding="8">
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
            </tr>

            <?php
            if (!empty($data)) { // Jika data pada database tidak sama dengan empty (alias ada datanya)
                foreach ($data as $p) { // Lakukan looping pada variabel siswa dari controller
                    echo "<tr>";
                    echo "<td>" . $p['nis'] . "</td>";
                    echo "<td>" . $p['nama'] . "</td>";
                    echo "<td>" . $p['jenis_kelamin'] . "</td>";
                    echo "<td>" . $p['alamat'] . "</td>";
                    echo "</tr>";
                }
            } else { // Jika data tidak ada
                echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
            }
            ?>
        </table>
    </body>
</html>
