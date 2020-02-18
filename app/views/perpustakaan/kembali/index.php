 <div class="container-fluid">
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
                            <td><?= $pinjam['tanggal_kembali'] ?></td>
                            <td>
                                <a href="<?= BASEURL?>/Proses/selesai_kembali/<?= $pinjam['id_pinjam'] ?>" class="btn btn-danger "><i class="fas fa-trash-alt"></i> &nbsp;Hapus</a>
                            </td>
                          </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

