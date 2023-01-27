<?php if (isset($_GET['nim'])) : ?>
    <?php
    $nim = $_GET['nim'];
    $sql = $con->query("SELECT * FROM mahasiswa WHERE nim = '$nim'");
    $data = $sql->fetch();
    ?>
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Edit Mahasiswa</h5>
                    <form action="index.php?page=mahasiswa_update" method="POST">
                        <div class="mb-3">
                            <label class="form-label" for="">NIM</label>
                            <input type="text" class="form-control" name="nim" value="<?= $data['nim'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Jurusan</label>
                            <input type="text" class="form-control" name="jurusan" value="<?= $data['jurusan'] ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="<?= $data['alamat'] ?>">
                        </div>
                        <div class="mb-3">
                            <a href="index.php?page=mahasiswa" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>