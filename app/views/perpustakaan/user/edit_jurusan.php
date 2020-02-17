 <div class="container-fluid ">
     <div class="text-center">
        <h1 style = "font-family: 'Lobster'"><i class="fas fa-book"></i> &nbsp; Edit Jurusan &nbsp; <i class="fas fa-book"></i></h1>
    </div>
 <!-- DataTales Example -->
 <div class="row d-flex justify-content-center">
    <div class="col-lg-7">

        <div class="card shadow mb-4 ">

            <div class="card-body ">
                <form action="<?= BASEURL ?>/proses/edit_jurusan" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $data['jurusan']['id_jurusan'] ?>">
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan"  value="<?= $data['jurusan']['jurusan'] ?>">
                    </div>
            </div>
            <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Edit Jurusan &nbsp;<i class="fas fa-plus"></i></button>
            </div>
            </form>
            </div>
        </div>
    </div>
    </div>
</div>

