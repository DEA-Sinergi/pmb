<?php include "layout/header.php"; ?>

<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Berita</h1>
    <a href="" class="btn mb-1 mt-2 btn-rounded btn-info" data-toggle="modal" data-target="#newSubmenuModal"><span class="btn-icon-left"><i class="fa fa-address-card-o color-success"></i> </span>Tambah Berita</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Gambar</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Gambar</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php 
                    include "../config/koneksi.php";
                    $no = 1;
                    $query = $konek->query("SELECT * FROM tb_berita");
                    while($row = $query->fetch_assoc()){

                    ?>
                        <tr>
                            <td><?php $no++ ?></td>
                            <td><?php echo $row['judul']?></td>
                            <td><?php echo $row['isi_berita']?></td>
                            <td><img src='../asset/img/berita/<?php echo $row['gambar']?>' width='100' height='100'></td>
                            <td><?php echo $row['tanggal']?></td>
                            <td>
                                <a href="" class="badge badge-success text-white" data-toggle="modal" data-target="#newSubmenuModalEdit<?php echo $row['id_berita']?>">Edit</a>
                                <a href="../controller/administrator/beritaHapus.php?id=<?php echo $row['id_berita']?>" class="badge badge-danger text-white">Hapus</a>
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


<!-- modal tambah -->

<div class="modal fade" id="newSubmenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubmenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubmenuModalLabel">Tambah Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../controller/administrator/beritaTambah.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <textarea name="isi" class="form-control" id="isi" cols="30" rows="10" placeholder="Isi Berita"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Edit -->
<?php 
$queryE = $konek->query("SELECT * FROM tb_berita");
while($rowE = $queryE->fetch_assoc()){

?>
<div class="modal fade" id="newSubmenuModalEdit<?php echo $rowE['id_berita']?>" tabindex="-1" role="dialog" aria-labelledby="newSubmenuModalEditLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubmenuModalEditLabel">Edit Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../controller/administrator/beritaHapus.php?id=<?php echo $rowE['id_berita']?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $rowE['judul']?>">
                    </div>
                    <div class="form-group">
                        <textarea name="isi" class="form-control" id="isi" cols="30" rows="10" value="<?php echo $rowE['isi_berita']?>"></textarea>
                    </div>
                    <div class="form-group">
                        <img src='../asset/img/berita/<?php echo $rowE['gambar']?>' width='50' height='50'>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $rowE['tanggal']?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php } ?>
<?php include "layout/footer.php"; ?>