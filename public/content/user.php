<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4>User</h4>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form-mhs">
                    Tambah User
                </button>
                <table class="mt-2 table table-bordered table-hover">
                    <thead class="bg-light">
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = $con->query("SELECT * FROM user");
                        while ($row = $sql->fetch()) {
                            echo "<tr>
                            <td>$no</td>
                            <td>$row[username]</td>
                            <td>$row[level]</td>
                            <td>
                                <a href='' class='btn btn-sm btn-warning'>Edit</a>
                                <a href='' onclick=\"return confirm('Delete Data?')\" class='btn btn-sm btn-danger'>Delete</a>
                            </td>
                        </tr>";

                            $no++;

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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="index.php?page=user_save" method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Password</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Level</label>
                        <select name="level" class="form-select">
                            <option>Admin</option>
                            <option>User</option>
                        </select>
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