<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

if (empty($nim) || empty($nama) || empty($jurusan) || empty($alamat)) {
    echo "<script>
                alert('Data tidak boleh kosong');
                window.location.href = 'index.php?page=mahasiswa';
        </script>";
} else {

    //cek
    $cek = $con->query("SELECT * FROM mahasiswa WHERE nim = '$nim'");

    if ($cek->rowCount() == 0) {
        # code...
        $simpan = $con->query("INSERT INTO mahasiswa VALUES ('$nim','$nama','$jurusan','$alamat')");

        if ($simpan->rowCount() > 0) {
            echo "<script>
                    alert('data berhasil ditambahkan');
                    window.location.href = 'index.php?page=mahasiswa';
                </script>";
        } else {
            echo "<script>
                    alert('data gagal ditambahkan');
                    window.location.href = 'index.php?page=mahasiswa';
                </script>";
        }
    } else {
        echo "<script>
                alert('NIM sudah ada');
                window.location.href = 'index.php?page=mahasiswa';
        </script>";
    }
}
