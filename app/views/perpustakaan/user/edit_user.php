 <div class="container-fluid ">
    <div class="text-center">
        <h1 style = "font-family: 'Lobster'"><i class="fas fa-user"></i> &nbsp; Edit User &nbsp; <i class="fas fa-user"></i></h1>
    </div>
 <!-- DataTales Example -->
 <div class="row d-flex justify-content-center">
    <div class="col-lg-7">

        <div class="card shadow mb-4 ">

            <div class="card-body ">
                 <form action="<?= BASEURL ?>/proses/edit_user" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id" value="<?= $data['user']['id_auth'] ?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['user']['nama'] ?>">
                    </div>
                    
                    <div class="form-group">
                       <label for="nis">Nis</label>
                       <input type="text" class="form-control" id="nis" name="nis" value="<?= $data['user']['nis'] ?>">
                    </div>
                    <div class="form-group">
                       <label for="kelas">Kelas</label>
                        <select name="kelas" id="kelas" class="form-control">
                            <?php if ($data['user']['kelas']  == "X") :?>
                                  <option value="X">X</option>
                                  <option value="XI">XI</option>
                                  <option value="XII">XII</option>
                                  <option value="0">Petugas</option>
                            <?php elseif ($data['user']['kelas']  == "XI"): ?>
                                   <option value="XI">XI</option>
                                   <option value="X">X</option>
                                   <option value="XII">XII</option>
                                   <option value="0">Petugas</option>
                            <?php elseif ($data['user']['kelas']  == "XII"):?>
                                   <option value="XII">XII</option>
                                   <option value="X">X</option>
                                   <option value="XI">XI</option>
                                   <option value="0">Petugas</option>
                            <?php else: ?>
                                   <option value="0">Petugas</option>
                                   <option value="X">X</option>
                                   <option value="XI">XI</option>
                                   <option value="XII">XII</option>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="form-group">
                       <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                            <option value="">Pilih Jurusan</option>
                            <?php foreach ($data['jurusan'] as $jurusan): ?>
                                <option <?= $jurusan['id_jurusan'] === $data['user']['id_jurusan'] ? "selected" : ""; ?> value="<?= $jurusan['id_jurusan'] ?>">
                                    <?= $jurusan['jurusan'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
            </div>
                <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary w-100">Edit User &nbsp;<i class="fas fa-plus"></i></button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>

