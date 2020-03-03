 <div class="container-fluid">
     <div class="row">
        <div class="flash-data" data-flashdata="<?= Flasher::flash(); ?>"></div>
    </div>
  <!-- add buku -->
    <div class="d-flex justify-content-end t-scale">
        <a data-toggle="modal" data-target="#buku">
            <button class="btn btn-primary mb-3 shadow-lg">Tambah User &nbsp;<i class="fas fa-plus"></i></button>
        </a>
    </div>
 <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-book"></i> &nbsp;Daftar User </h6>
        </div>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-striped table-bordered mydatatable" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nis</th>
                            <th>Kelas</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Tanggal Daftar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $i=1; ?>
                        <?php foreach ($data['user'] as $user): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $user['nama'] ?></td>
                                <td><?= $user['nis'] ?></td>
                                <td width="15%"><?= $user['kelas'] ?> &nbsp; (<?= $user['jurusan'] ?>)</td>
                                <td><?= $user['username'] ?></td>
                                <td><?= $user['level'] ?></td>
                                <td width="15%"><?= date('d F Y', strtotime($user['tanggal_masuk'])) ?></td>
                                <td width="20%"> <a href="<?= BASEURL?>/user/edit_user/<?= $user['id_auth'] ?>" class="btn btn-primary btn-ubah "><i class="fas fa-edit"></i> &nbsp;Edit</a> 
                                    <a href="<?= BASEURL?>/Proses/hapus_user/<?= $user['id_auth'] ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash-alt"></i> &nbsp;Hapus </a></td>
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
                <h5 class="modal-title" id="judul">Tambah User &nbsp;<i class="fas fa-user"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/proses/addUser" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                       <label for="username">Username</label>
                       <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                       <label for="password">Password</label>
                       <input type="password" class="form-control" id="password" name="password">
                    </div>
                     <div class="form-group">
                       <label for="password">Konfirmasi Password</label>
                       <input type="password" class="form-control" id="password" name="password_konf">
                    </div>
                    <div class="form-group">
                       <label for="level">Level</label>
                        <select name="level" id="level" class="form-control">
                            <option value="">Pilih Level</option>
                            <?php foreach ($data['level'] as $level): ?>
                                <option value="<?= $level['id_level'] ?>">
                                    <?= $level['level'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                       <label for="nis">Nis</label>
                       <input type="number" class="form-control" id="nis" name="nis">
                    </div>
                    <div class="form-group">
                       <label for="kelas">Kelas</label>
                        <select name="kelas" id="kelas" class="form-control">
                            <option value="">Pilih Kelas</option>
                            <option value="0">Petugas</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </div>
                    <div class="form-group">
                       <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                            <option value="">Pilih Jurusan</option>
                            <?php foreach ($data['jurusan'] as $jurusan): ?>
                                <option value="<?= $jurusan['id_jurusan'] ?>">
                                    <?= $jurusan['jurusan'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    
            </div>
            <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Tambah User &nbsp;<i class="fas fa-plus"></i></button>
            </div>
            </form>

        </div>
    </div>
</div> 
