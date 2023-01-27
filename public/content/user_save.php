<?php
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
// hash
$pass_hash = password_hash($password, PASSWORD_DEFAULT);

if (empty($username) || empty($password)) {
    echo "<script>
                alert('Data tidak boleh kosong');
                window.location.href = 'index.php?page=user';
        </script>";
} else {

    //cek username
    $cek = $con->prepare("SELECT * FROM user WHERE username = ?");
    $cek->bindParam(1, $username);
    $cek->execute();

    if ($cek->rowCount() == 0) {
        # prepare
        $simpan = $con->prepare("INSERT INTO user (username, password, level) VALUES (?,?,?)");
        # bind
        $simpan->bindParam(1, $username);
        $simpan->bindParam(2, $pass_hash);
        $simpan->bindParam(3, $level);
        # execute
        $simpan->execute();

        if ($simpan->rowCount() > 0) {
            echo "<script>
                    alert('data berhasil ditambahkan');
                    window.location.href = 'index.php?page=user';
                </script>";
        } else {
            echo "<script>
                    alert('data gagal ditambahkan');
                    window.location.href = 'index.php?page=user';
                </script>";
        }
    } else {
        echo "<script>
                alert('NIM sudah ada');
                window.location.href = 'index.php?page=user';
        </script>";
    }
}
