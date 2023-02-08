<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4>Mahasiswa</h4>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form-mhs">
                    Tambah Mahasiswa
                </button>
                <table class="mt-2 table table-bordered table-hover">
                    <thead class="bg-light">
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = $con->query("SELECT * FROM mahasiswa");
                        while ($row = $sql->fetch()) {
                            echo "<tr>
                            <td>$row[nim]</td>
                            <td>$row[nama]</td>
                            <td>$row[jurusan]</td>
                            <td>$row[alamat]</td>
                            <td>
                                <a href='index.php?page=mahasiswa_edit&nim=$row[nim]' class='btn btn-sm btn-warning'>Edit</a>
                                <a href='index.php?page=mahasiswa_delete&nim=$row[nim]' onclick=\"return confirm('Delete Data?')\" class='btn btn-sm btn-danger'>Delete</a>
                            </td>
                        </tr>";

                            // delete -> get nim -> query delete where nim
                            // edit -> get nim -> select where nim -> show form -> update
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="form-mhs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="index.php?page=mahasiswa_save" method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="">NIM</label>
                        <input type="text" class="form-control" name="nim">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>