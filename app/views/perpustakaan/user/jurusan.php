 <div class="container-fluid">
    
  <!-- add buku -->
    <div class="d-flex justify-content-end t-scale">
        <a data-toggle="modal" data-target="#buku">
            <button class="btn btn-primary mb-3 shadow-lg">Tambah Jurusan &nbsp;<i class="fas fa-plus"></i></button>
        </a>
    </div>
 <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-book"></i> &nbsp;Daftar Jurusan </h6>
        </div>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-striped table-bordered mydatatable" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $i=1; ?>
                       <?php foreach ($data['jurusan'] as $jurusan): ?>
                           <tr>
                               <td><?= $i++ ?></td>
                               <td><?= $jurusan['jurusan'] ?></td>
                               <td width="30%">
                                   <a href="<?= BASEURL?>/user/edit_jurusan/<?= $jurusan['id_jurusan'] ?>" class="btn btn-primary btn-ubah "><i class="fas fa-edit"></i> &nbsp;Edit</a> 
                                    <a href="<?= BASEURL?>/Proses/hapus_jurusan/<?= $jurusan['id_jurusan'] ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash-alt"></i> &nbsp;Hapus </a>
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
                <h5 class="modal-title" id="judul">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/proses/addJurusan" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan">
                    </div>
            </div>
            <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Tambah Jurusan &nbsp;<i class="fas fa-plus"></i></button>
            </div>
            </form>

        </div>
    </div>
</div> 
