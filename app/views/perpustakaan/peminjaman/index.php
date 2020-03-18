 <div class="container-fluid">
  <!-- add buku -->
    <div class="d-flex justify-content-end t-scale">
        <a data-toggle="modal" data-target="#buku">
            <button class="btn btn-primary mb-3 shadow-lg">Pinjam Buku &nbsp;<i class="fas fa-plus"></i></button>
        </a>
    </div>
 <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-book"></i> &nbsp;Daftar Pinjam</h6>
        </div>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-striped table-bordered mydatatable" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $i=1; ?>
                        <?php foreach ($data['pinjam'] as $pinjam): ?>
                          <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $pinjam['nama'] ?></td>
                            <td><?= $pinjam['nama_buku'] ?></td>
                            <td><?= $pinjam['tanggal_pinjam'] ?></td>
                            <td><?= $pinjam['tanggal_kembali'] ?></td>
                            <td>
                               <a href="<?= BASEURL?>/peminjaman/edit_pinjam/<?= $pinjam['id_pinjam'] ?>" class="btn btn-primary btn-ubah "><i class="fas fa-edit"></i> &nbsp;Edit</a> 
                                <a href="<?= BASEURL?>/Proses/selesai/<?= $pinjam['id_pinjam'] ?>" class="btn btn-success "><i class="fas fa-check"></i> &nbsp;Kembali </a>
                                <a href="<?= BASEURL?>/peminjaman/detail/<?= $pinjam['id_pinjam'] ?>" class="btn btn-dark "><i class="fas fa-list"></i> &nbsp;Detail</a>
                            </td>
                          </tr>
                        <?php endforeach ?>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="buku" tabindex="-1" role="dialog" aria-labelledby="judul" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judul">Pinjam Buku &nbsp;<i class="fas fa-user"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/proses/addPinjam" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama Peminjam</label>
                         <select name="nama" id="nama" class="form-control">
                            <option value="">Pilih peminjam</option>
                            <?php foreach ($data['peminjam'] as $peminjam): ?>
                                <option value="<?= $peminjam['id_auth'] ?>">
                                    <?= $peminjam['nama'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                       <label for="buku">Buku</label>
                       <select name="buku" id="buku" class="form-control">
                            <option value="">Pilih Buku</option>
                            <?php foreach ($data['buku'] as $buku): ?>
                                <option value="<?= $buku['id_buku'] ?>">
                                    <?= $buku['nama_buku'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                       <label for="pinjam">Pinjam Berapa Hari</label>
                       <select name="pinjam" id="pinjam" class="form-control">
                            <option value="">Pilih Berapa Hari</option>
                            <option value="1">1 Hari</option>
                            <option value="2">2 Hari</option>
                            <option value="3">3 Hari</option>
                            <option value="4">4 Hari</option>
                            <option value="5">5 Hari</option>
                            <option value="6">6 Hari</option>
                            <option value="7">7 Hari</option>
                            <option value="8">8 Hari</option>
                            <option value="9">9 Hari</option>
                            <option value="10">10 Hari</option>
                            <option value="11">11 Hari</option>
                            <option value="12">12 Hari</option>
                            <option value="13">13 Hari</option>
                            <option value="14">14 Hari</option>
                            <option value="15">15 Hari</option>
                            <option value="16">16 Hari</option>
                            <option value="17">17 Hari</option>
                            <option value="18">18 Hari</option>
                            <option value="19">19 Hari</option>
                            <option value="20">20 Hari</option>
                            <option value="21">21 Hari</option>
                            <option value="23">23 Hari</option>
                            <option value="24">24 Hari</option>
                            <option value="25">25 Hari</option>
                            <option value="26">26 Hari</option>
                            <option value="27">27 Hari</option>
                            <option value="28">28 Hari</option>
                            <option value="29">29 Hari</option>
                            <option value="30">30 Hari</option>
                           
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Pinjam Buku &nbsp;<i class="fas fa-book"></i></button>
            </div>
            </form>

        </div>
    </div>
</div> 
