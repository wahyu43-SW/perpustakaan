  <div class="container-fluid">
   <div class="d-flex justify-content-between t-scale">
    <div class="">
         <a href="<?= BASEURL ?>/laporan">
            <button class="btn btn-primary mb-3 shadow-lg"><i class="fas fa-sign-out-alt" style="transform: rotateY(180deg);"></i> &nbsp;Kembali</button>
        </a>
    </div>
    <div class=""></div>
    <div class="">
        <a href="<?= BASEURL ?>/laporan/cetak" target="_blank">
            <button class="btn btn-primary mb-3 shadow-lg"><i class="fas fa-print"></i> &nbsp;Cetak Semua</button>
        </a> &nbsp;&nbsp;&nbsp;
        <a  data-toggle="modal" data-target="#rangetanggal">
            <button class="btn btn-success mb-3 shadow-lg"><i class="fas fa-print"></i> &nbsp;Cetak Perbulan</button>
        </a>
    </div>
        
    </div>
    <div class="card shadow mb-4">

     <div class="card-body">
          
            <div class="table-responsive">
                <table class="table table-striped table-bordered mydatatable" style="width: 100%;">
                    <thead>
                        <tr >
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Buku</th>
                            <th>Pengarang</th>
                            <th>Kategori</th>
                            <th>Stok Buku</th>
                            <th>Tanggal Masuk</th>
                            <th>Kondisi</th>
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
                                <td><?= $buku['kategori'] ?></td>
                                <td ><?= $buku['jumlah_buku'] ?></td>
                                <td ><?= date('d F Y', strtotime($buku['tanggal_masuk'])) ?></td>
                                <td><?= $buku['kondisi_buku'] === 'Baik' ? "<b style='color:#1cc88a'>Baik</b>" : "<b style='color:#e74a3b'>Rusak</b>";?> </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>   
<!-- Modal -->
<div class="modal fade" id="rangetanggal" tabindex="-1" role="dialog" aria-labelledby="judul" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judul">Cetak Laporan Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/laporan/cetak" method="POST" target="_blank">
                <div class="form-grup">
                    <label for="tgl_awal" >Tanggal Awal</label>
                    <input type="date" class="form-control" id="tgl_awal" name="tgl_awal">
                </div>
                <br>
                <div class="form-grup">
                    <label for="tgl_akhir" >Tanggal Akhir</label>
                    <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir">
                </div>
            </div>
            <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Cetak Laporan &nbsp;<i class="fas fa-print"></i></button>
            </div>
            </form>

        </div>
    </div>
</div>

            