<?php
$act = isset($_GET['act']) ? $_GET['act'] : false;
$kode = isset($_GET['kd_prodi']) ? $_GET['kd_prodi'] : false;

if ($act == 'edit') {
    $url = base_url() . "index.php?page=data_list&act=update";
    if ($kode) {
        $query = $db->query("SELECT * FROM data_list WHERE kd_prodi = '$kode'");
        $row = $query->fetch_array();
    } else {
        echo "<script>
                    alert( 'Parameter Kode Prodi Tidak Valid');
                    window.location.href='" . base_url() . "index.php?page=data_list';
                    </script>";
    }
} else {
    $url = base_url() . "index.php?page=data_list&act=save";
}
?>

<br>
<div class="card">
    <div class="card-header">
        PENGEMBALIAN BUKU DI PERPUSTAKAAN IBRAHIMY
    </div>
    <div class="card-body">
        <form action="<?php echo $url; ?>" method="post">
            <input type="hidden" name="kd_prodi_old" id="kd_prodi_old"
                value="<?php echo isset($row) ? $row['kd_prodi'] : ''; ?>">
            <div class="md-3">
                <label for="kd_prodi">Kode Buku</label>
                <input class="form-control" name="kd_prodi" id="kd_prodi"
                    value="<?php echo isset($row) ? $row['kd_prodi'] : ''; ?>">
            </div>
            <div class="md-3">
                <label for="nama_prodi">Pengambali</label>
                <input class="form-control" name="nama_prodi" id="nama_prodi"
                    value="<?php echo isset($row) ? $row['nama_prodi'] : ''; ?>">
            </div>
            <div class="md-3">
                <label for="kd_fakultas">Tanggal</label>
                <input class="form-control" name="kd_fakultas" id="kd_fakultas"
                    value="<?php echo isset($row) ? $row['kd_fakultas'] : ''; ?>">
            </div>
            <div class="md-3">
                <label for="password">ID Petugas</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <div class="md-3">
                </Button>
                <a class="btn btn-danger btn-sm float-start" href="list_data_list.php">
                    <i class="fa-solid fa-chevron-left"></i>
                    data_list
                </a>
                <button class="btn btn-primary btn-sm float-end" type="submit">
                    <i class="fa-regular fa-floppy-disk"></i>
                    Simpan Data_list
                </button>

            </div>
        </form>
    </div>
</div>