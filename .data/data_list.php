<h2>Data Peminjaman Buku</h2>

<table border="1" style="border-collapse:collapse">
    <tr bgcolor="#eee">
        <th width="60">NO.</th>
        <th width="100">Peminjam</th>
        <th width="150">Tanggal</th>
        <th width="120">Pengembali</th>
        <th width="100">Tanggal</th>
    </tr>

    <?php
        include "config/config_database.php"; 
        $query = $db->query("SELECT * FROM kembali WHERE kd_prodi = '$kode'");
        $row = $query->fetch_array();
        $query = $db->query("SELECT * FROM kembali;");
        
        $no=1;
        $query = $koneksi->query($koneksi,"SELECT * FROM prodi, kembali 
        WHERE prodi.kd_prodi = kembali.kd_prodi") or die ($db->query($koneksi));

        while($tampil = mysqli_fetch_array($query)){
            echo "<tr>
            <td align='center'>$no</td>
            <td align='center'>$tampil[kd_prodi]</td>
            <td align='center'>$tampil[kd_fakultas]</td>
            <td align='center'>$tampil[kd_prodi]</td>
            <td align='center'>$tampil[kd_fakultas]</td>
        </tr>";
        $no++;
        }
        ?>