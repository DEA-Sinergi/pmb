<?php include "layout/header.php" ?>

<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Data Pendaftaran Siswa Baru </h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No Pendaftaran</th>
                            <th>Nama</th>
                            <th>No NISN</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Asal Sekolah</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Nama Orang Tua</th>
                            <th>Pekerjaan</th>
                            <th>Agama</th>
                            <th>Program Pilihan</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No Daftar</th>
                            <th>Nama</th>
                            <th>No NISN</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Asal Sekolah</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Nama Orang Tua</th>
                            <th>Pekerjaan</th>
                            <th>Agama</th>
                            <th>Program Pilihan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php 
                        $query = $konek->query('SELECT * FROM siswa ORDER BY nama');
                        while ($row = $query->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row['no_daftar']?></td>
                            <td><?php echo $row['nama']?></td>
                            <td><?php echo $row['no_nisn']?></td>
                            <td><?php echo $row['alamat']?></td>
                            <td><?php echo $row['no_telp']?></td>
                            <td><?php echo $row['asl_sekolah']?></td>
                            <td><?php echo $row['jns_kelamin']?></td>
                            <td><?php echo $row['tgl_lahir']?></td>
                            <td><?php echo $row['nm_ortu']?></td>
                            <td><?php echo $row['pekerjaan']?></td>
                            <td><?php echo $row['agama']?></td>
                            <td><?php echo $row['prog_pilihan']?></td>
                            <td>
                                <a href="" class="badge badge-success text-white" data-toggle="modal" data-target="#PSBE"><i class="fas fa-fw fa-edit"></i>Edit</a>
                                <a href="" class="badge badge-danger text-white"><i class="fas fa-fw fa-trash"></i>Hapus</a>
                            </td>                            
                        </tr>
                        
                        <?php } ?>

                        <tr>
                            <td>1</td>
                            <td>Shad Decker</td>
                            <td>231234123</td>
                            <td>jl.terserah aja dah</td>
                            <td>080808080899</td>
                            <td>SMA manaaja</td>
                            <td>laki-laki</td>
                            <td>2008/11/13</td>
                            <td>Nama Decker</td>
                            <td>Deadwood</td>
                            <td>Islam</td>
                            <td>RPL</td>
                            <td>
                                <a href="" class="badge badge-success text-white" data-toggle="modal" data-target="#PSBE"><i class="fas fa-fw fa-edit"></i>Edit</a>
                                <a href="" class="badge badge-danger text-white"><i class="fas fa-fw fa-trash"></i>Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

</div>

<?php 
$queryE = $konek->query('SELECT * FROM siswa ORDER BY nama');
while ($rowE = $queryE->fetch_assoc()) {
?>
<div class="modal fade" id="PSBE" tabindex="-1" role="dialog" aria-labelledby="PSBLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="PSBLabel">Edit Data Pendaftaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="<?php echo $rowE['nama']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="no_nisn" name="no_nisn" placeholder="no_nisn" value="<?php echo $rowE['no_nisn']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="<?php echo $rowE['alamat']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="no_telp" value="<?php echo $rowE['no_telp']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="asl_sekolah" name="asl_sekolah" placeholder="asl_sekolah" value="<?php echo $rowE['asl_sekolah']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="jns_kelamin" name="jns_kelamin" placeholder="jns_kelamin" value="<?php echo $rowE['jns_kelamin']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nm_ortu" name="nm_ortu" placeholder="nm_ortu" value="<?php echo $rowE['nm_ortu']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="pekerjaan" value="<?php echo $rowE['pekerjaan']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="agama" name="agama" placeholder="agama" value="<?php echo $rowE['agama']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="prog_pilihan" name="prog_pilihan" placeholder="prog_pilihan" value="<?php echo $rowE['prog_pilihan']?>">
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

<?php include "layout/footer.php" ?>