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

    # prepare
    $simpan = $con->prepare("UPDATE mahasiswa SET nama = :nama, jurusan = :jurusan, alamat = :alamat WHERE nim = :nim");
    # bind
    $simpan->bindParam('nama', $nama);
    $simpan->bindParam('jurusan', $jurusan);
    $simpan->bindParam('alamat', $alamat);
    $simpan->bindParam('nim', $nim);
    # execute
    $simpan->execute();

    if ($simpan->rowCount() > 0) {
        echo "<script>
                    alert('data berhasil diubah');
                    window.location.href = 'index.php?page=mahasiswa';
                </script>";
    } else {
        echo "<script>
                    alert('data gagal diubah');
                    window.location.href = 'index.php?page=mahasiswa';
                </script>";
    }
}
