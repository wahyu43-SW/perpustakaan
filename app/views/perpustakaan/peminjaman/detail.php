 <div class="container-fluid">
     <div class="row">
        <div class="flash-data" data-flashdata="<?= Flasher::flash(); ?>"></div>
    </div>

    <div class="card-body">
    	<div class="row">
    		<div class="col-lg-4 col-md-5">
    			<img src="<?= BASEURL ?>/img/daftar-buku/<?= $data['detail']['gambar'] ?>" alt="" width="100%" style="box-shadow: 5px 10px 10px rgba(0,0,0,.3); border-radius: 20px;">
    		</div>
    		<div class="col-lg-8 col-md-5">
    			 <div class="card" style="box-shadow: 5px 5px 7px rgba(0,0,0,.2);">
			      <div class="card-body text-center">
			        <h5 class="card-title text-center text-dark"  style="font-family: 'Lobster'; font-size:3em;">Detail Peminjam Buku</h5>
			        <div class="d-inline-flex text-left " style="margin-left: 5rem">
			      	<ul class="list-unstyled " style="font-size:1.2rem;">
			      		<li>Judul Buku</li>
			      		<li>Nama Peminjam</li>
			      		<li>Kelas</li>
			      		<li>Tanggal Pinjam</li>
			      		<li>Tanggal Kembali</li>
			      	</ul>
			      	<ul class="list-unstyled"  style="font-size:1.2rem;">
			      		<li> &nbsp; &nbsp;: &nbsp; <?= $data['detail']['nama_buku'] ?></li>
			      		<li> &nbsp; &nbsp;: &nbsp; <?= $data['detail']['nama'] ?></li>
			      		<li> &nbsp; &nbsp;: &nbsp; <?= $data['detail']['kelas'] ?>&nbsp;<?= $data['detail']['jurusan'] ?></li>
			      		<li> &nbsp; &nbsp;: &nbsp; <?= $data['detail']['tanggal_pinjam'] ?></li>
			      		<li> &nbsp; &nbsp;: &nbsp; <?= $data['detail']['tanggal_kembali'] ?></li>
			      	</ul>
			      	</div>

			      </div>
			      <div class="p-2 text-center" >
			      	<a href="<?= BASEURL ?>/peminjaman/index" class="btn btn-primary"><span class="nav-item"><i class="rotate fas fa-sign-out-alt" ></i></span>&nbsp;Kembali</a>
			      </div>

			    </div>
    		</div>
    	</div>
    </div>
 </div>