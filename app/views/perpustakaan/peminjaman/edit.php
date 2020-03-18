 <div class="container-fluid d-flex justify-content-center">
 <!-- DataTales Example -->
    <div class="card shadow mb-4 " style="width: 70%">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-book"></i> &nbsp;Edit Buku pinjam</h6>
        </div>
        <div class="card-body " >
          <form action="<?= BASEURL ?>/proses/ubahPinjam" method="POST">
            <input type="hidden" name="id" id="id" value="<?=$data['allPm']['id_pinjam'] ?>">
            <input type="hidden" name="id_bukulama" id="id_bukulama" value="<?=$data['allPm']['id_buku'] ?>">
                    <div class="form-group">
                        <label for="nama">Nama Peminjam</label>
                         <select name="nama" id="nama" class="form-control">
                            <option value="">Pilih peminjam</option>
                            <?php foreach ($data['peminjam'] as $peminjam): ?>
                                <option <?= $peminjam['id_auth'] === $data['allPm']['id_auth']  ? "selected" : "";?> value="<?= $peminjam['id_auth'] ?>">
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
                                <option <?= $buku['id_buku'] === $data['allPm']['id_buku']  ? "selected" : "";?> value="<?= $buku['id_buku'] ?>">
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
                    <button type="submit" name="submit" class="btn btn-primary w-100">Edit Pinjam Buku &nbsp;<i class="fas fa-book"></i></button>
            </div>
            </form>
        </div>
    </div>
</div>

