<?php include "layout/header.php"; ?>

<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pengumuman</h1>
    <a href="" class="btn mb-1 mt-2 btn-rounded btn-info" data-toggle="modal" data-target="#newSubmenuModal"><span class="btn-icon-left"><i class="fa fa-address-card-o color-success"></i> </span>Tambah Pengumuman</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Isi Pengumuman</th>
                            <th>Tanggal</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Isi Pengumuman</th>
                            <th>Tanggal</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <?php
                        include "../config/koneksi.php";
                        $no = 1;
                        $query = $konek->query("SELECT * FROM tb_pengumuman");
                        while ($row = $query->fetch_assoc()) {
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['judul']?></td>
                            <td><?php echo $row['isi_berita']?></td>
                            <td><?php echo date_format(date_create($row['tanggal']), "d-m-Y")?></td>
                            <td><img src="../asset/img/pengumuman/<?php echo $row['gambar']?>" alt="" style="width: 55px"></td>
                            <td>
                                <a href="" class="badge badge-success text-white" data-toggle="modal" data-target="#newSubmenuModalEdit<?php echo $row['id_pengumuman']?>">Edit</a>
                                <a href="../controller/administrator/pengHapus.php?id=<?php echo $row['id_pengumuman']?>" class="badge badge-danger text-white">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
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
                <h5 class="modal-title" id="newSubmenuModalLabel">Tambah Pengumuman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../controller/administrator/pengTambah.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="isi_pengumuman" name="isi_pengumuman" placeholder="Isi Pengumuman">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
    include "../config/koneksi.php";
    $queryE = $konek->query("SELECT * FROM tb_pengumuman");
    while ($rowE = $queryE->fetch_assoc()) {
?>
<div class="modal fade" id="newSubmenuModalEdit<?php echo $rowE['id_pengumuman']?>" tabindex="-1" role="dialog" aria-labelledby="newSubmenuModalEditLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubmenuModalEditLabel">Edit Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../controller/administrator/pengEdit.php?id=<?php echo $rowE['id_pengumuman']?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group">
                        <img src='../asset/img/default.jpg' width='50' height='50'>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $rowE['judul']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="isi_pengumuman" name="isi_pengumuman" value="<?php echo $rowE['isi_berita']?>">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $rowE['tanggal'] ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success" name="edit">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php } ?>
<!-- Modal Edit -->

<?php include "layout/footer.php"; ?>