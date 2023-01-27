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
    $cek = $con->prepare("SELECT * FROM mahasiswa WHERE nim = ?");
    $cek->bindParam(1, $nim);
    $cek->execute();

    if ($cek->rowCount() == 0) {
        # prepare
        $simpan = $con->prepare("INSERT INTO mahasiswa VALUES (?,?,?,?)");
        # bind
        $simpan->bindParam(1, $nim);
        $simpan->bindParam(2, $nama);
        $simpan->bindParam(3, $jurusan);
        $simpan->bindParam(4, $alamat);
        # execute
        $simpan->execute();

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
