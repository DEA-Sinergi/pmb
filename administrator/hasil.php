<?php include "layout/header.php" ?>

<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Hasil Tes</h1>
    <a href="" class="btn mb-1 mt-2 btn-rounded btn-info" data-toggle="modal" data-target="#newSubmenuModal"><span class="btn-icon-left"><i class="fa fa-address-card-o color-success"></i> </span>Tambah Data Hasil Tes</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No Daftar</th>
                            <th>Nilai</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No Daftar</th>
                            <th>Nilai</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php
                        include "../config/koneksi.php";

                        $query  = $konek->query('SELECT * FROM hsl_tes ORDER BY no_daftar');
                        while ($row = $query->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['no_daftar']?></td>
                            <td><?php echo $row['nilai']?></td>
                            <td><?php echo $row['status']?></td>
                            <td>
                                <a href="" class="badge badge-success text-white" data-toggle="modal" data-target="#newSubmenuModalEdit<?php echo $row['no_daftar']?>">Edit</a>
                                <a href="../controller/administrator/hslHapus.php?id=<?php echo $row['no_daftar']?>" class="badge badge-danger text-white">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<div class="modal fade" id="newSubmenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubmenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubmenuModalEditLabel">Tambah Hasil Tes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../controller/administrator/hslTambah.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="no_daftar" id="" class="form-control">
                            <option value="">No Daftar</option>
                            <?php
                                include "../config/koneksi.php";

                                $queryD  = $konek->query('SELECT no_daftar FROM siswa');
                                while ($rowD = $queryD->fetch_assoc()) {
                            ?>
                            <option value="<?php echo $rowD['no_daftar']?>"><?php echo $rowD['no_daftar']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nilai" name="nilai" placeholder="Nilai">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="status" name="status" placeholder="Status">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="tambah" class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<?php 
$queryE = $konek->query("SELECT * FROM hsl_tes");
while($rowE = $queryE->fetch_assoc()){

?>

<div class="modal fade" id="newSubmenuModalEdit<?php echo $rowE['no_daftar'];?>" tabindex="-1" role="dialog" aria-labelledby="newSubmenuModalEditLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubmenuModalEditLabel">Edit Hasil Tes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../controller/administrator/hslEdit.php?id=<?php echo $rowE['no_daftar']?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" disabled value="<?php echo $rowE['no_daftar'];?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nilai" name="nilai" placeholder="Nilai" value="<?php echo $rowE['nilai']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="status" name="status" placeholder="Status" value="<?php echo $rowE['status']?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="edit" class="btn btn-success">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php } ?>

<?php include "layout/footer.php" ?>