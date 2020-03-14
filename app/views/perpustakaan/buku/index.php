 <div class="container-fluid">
    
  <!-- add buku -->
    <div class="d-flex justify-content-end t-scale">
        <a data-toggle="modal" data-target="#buku">
            <button class="btn btn-primary mb-3 shadow-lg">Tambah Buku &nbsp;<i class="fas fa-plus"></i></button>
        </a>
    </div>
 <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-book"></i> &nbsp;Daftar Buku </h6>
        </div>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-striped table-bordered mydatatable" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Buku</th>
                            <th>Pengarang</th>
                            <th>Stok Buku</th>
                            <th>Kondisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $i=1; ?>
                        <?php foreach ($data['buku'] as $buku): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td width="20%"><img src="<?= BASEURL ?>/img/daftar-buku/<?= $buku['gambar'] ?>" alt="" width="50%"></td>
                                <td width="15%"><?= $buku['nama_buku'] ?></td>
                                <td><?= $buku['pengarang'] ?></td>
                                <td ><?= $buku['jumlah_buku'] ?></td>
                                <td><?= $buku['kondisi_buku'] === 'Baik' ? "<b style='color:#1cc88a'>Baik</b>" : "<b style='color:#e74a3b'>Rusak</b>";?> </td>
                                <td width="30%">
                                    <a href="<?= BASEURL?>/buku/edit_buku/<?= $buku['id_buku'] ?>" class="btn btn-primary btn-ubah "><i class="fas fa-edit"></i> &nbsp;Edit</a> 
                                    <a href="<?= BASEURL?>/Proses/hapus_buku/<?= $buku['id_buku'] ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash-alt"></i> &nbsp;Hapus </a>
                                    <a href="<?= BASEURL?>/buku/detail_buku/<?= $buku['id_buku'] ?>" class="btn btn-success btn-ubah "><i class="fas fa-list"></i>&nbsp;Detail</a>
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
                <h5 class="modal-title" id="judul">Tambah Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/proses/addbuku" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama Buku</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    
                    <div class="form-group">
                       <label for="pengarang">Pengarang Buku</label>
                       <input type="text" class="form-control" id="pengarang" name="pengarang">
                    </div>
                    <div class="form-group">
                       <label for="kategori">Kategori Buku</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <option value="">Pilih</option>
                            <?php foreach ($data['kategori'] as $kategori): ?>
                                <option value="<?= $kategori['id_kategori'] ?> ">
                                    <?= $kategori['kategori'] ?> --> [ <?= $kategori['kode'] ?> ]
                                </option>
                            <?php endforeach ?> 
                        </select>
                    </div>
                   
                    <div class="form-group">
                       <label for="kondisi">Kondisi Buku</label>
                       <select name="kondisi_buku" id="kondisi"  class="form-control">
                           <option value="">Pilih Kondisi Buku</option>
                           <option value="Baik">Baik</option>
                           <option value="Rusak">Rusak</option>
                       </select>
                    </div>
                    <div class="form-group">
                       <label for="jumlah">Jumlah Buku</label>
                       <input type="number" class="form-control" id="jumlah" name="jumlah_buku">
                    </div>
                     <div class="form-group">
                       <label for="deskripsi">Deskripsi Buku</label>
                       <textarea class="form-control" id="deskripsi" name="deskripsi" cols="30" rows="5"></textarea>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="gambar" name="gambar">
                      <label class="custom-file-label" for="gambar" name="gambar">Pilih Gambar</label>
                    </div>
            </div>
            <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Tambah Buku &nbsp;<i class="fas fa-plus"></i></button>
            </div>
            </form>

        </div>
    </div>
</div>
