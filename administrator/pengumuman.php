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
                            <th>Gambar</th>
                            <th>Nama Siswa</th>
                            <th>Nama Sekolah</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Siswa</th>
                            <th>Nama Sekolah</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src='../asset/img/default.jpg' width='100' height='100'></td>
                            <td>Regional Director</td>
                            <td>Edinburgh</td>
                            <td>Lulus</td>
                            <td>
                                <a href="" class="badge badge-success text-white" data-toggle="modal" data-target="#newSubmenuModalEdit">Edit</a>
                                <a href="" class="badge badge-danger text-white">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src='../asset/img/default.jpg' width='100' height='100'></td>
                            <td>Javascript Developer</td>
                            <td>Singapore</td>
                            <td>Lulus</td>
                            <td>
                                <a href="" class="badge badge-success text-white" data-toggle="modal" data-target="#newSubmenuModalEdit">Edit</a>
                                <a href="" class="badge badge-danger text-white">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src='../asset/img/default.jpg' width='100' height='100'></td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>Lulus</td>
                            <td>
                                <a href="" class="badge badge-success text-white" data-toggle="modal" data-target="#newSubmenuModalEdit">Edit</a>
                                <a href="" class="badge badge-danger text-white">Hapus</a>
                            </td>
                        </tr>
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
                <h5 class="modal-title" id="newSubmenuModalLabel">Tambah Pengumuman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Nama Sekolah">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" placeholder="Nama Sekolah">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="ket" name="ket" placeholder="Keterangan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Edit -->
<div class="modal fade" id="newSubmenuModalEdit" tabindex="-1" role="dialog" aria-labelledby="newSubmenuModalEditLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubmenuModalEditLabel">Edit Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <img src='../asset/img/default.jpg' width='50' height='50'>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Nama Sekolah">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" placeholder="Nama Sekolah">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="ket" name="ket" placeholder="Keterangan">
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

<?php include "layout/footer.php"; ?>