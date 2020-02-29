 <div class="container-fluid ">
     <div class="text-center">
        <h1 style = "font-family: 'Lobster'"><i class="fas fa-book"></i> &nbsp; Edit Kategori &nbsp; <i class="fas fa-book"></i></h1>
    </div>
 <!-- DataTales Example -->
 <div class="row d-flex justify-content-center">
    <div class="col-lg-7">
       
        <div class="card shadow mb-4 ">

            <div class="card-body ">
                 <div class="d-flex justify-content-end">
             <a href="<?= BASEURL ?>/buku/kategori" style="text-decoration: none; color: #989898; ">
                        <i class="fas fa-times"></i>
                    </a>
        </div>
                <form action="<?= BASEURL ?>/proses/edit_kategori" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $data['buku']['id_kategori'] ?>">
                    <div class="form-group">
                        <label for="kategori">Kategori Buku</label>
                        <input type="text" class="form-control" id="kategori" name="kategori"  value="<?= $data['buku']['kategori'] ?>" required>
                    </div>
                    <div class="form-group">
                       <label for="kode">Kode Buku</label>
                       <input type="number" class="form-control" id="kode" name="kode"  value="<?= $data['buku']['kode'] ?>" required>
                    </div>
            </div>
            <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Edit Kategori &nbsp;<i class="fas fa-plus"></i></button>
            </div>
            </form>
            </div>
        </div>
    </div>
    </div>
</div>

