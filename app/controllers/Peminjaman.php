<?php 


class Peminjaman extends Controller
{

	public function index()
	{
		if (empty($_SESSION['role']) || $_SESSION['role'] == "") {
			header('Location: http://perpustakaan.com/projek_perpustakaan/Perpustakaan_mvc/app/views/template/404.php');
		}
		$auth = $_SESSION['role'];
		if ($auth == '1' || $auth == 1) {
			$data['judul'] = "Peminjaman";
			$data['pinjam'] = $this->model('Get_models')->ambilPinjam();
			$data['peminjam'] = $this->model('Get_models')->ambilPeminjam();
			$data['buku'] =  $this->model('Get_models')->ambilBukuPinjam();
			$data['jurusan'] =$this->model('Get_models')->ambilJurusan();
			$this->view('template/header',$data);
			$this->view('perpustakaan/peminjaman/index',$data);
			$this->view('template/footer');
		}elseif ($auth == '2' || $auth == 2){
			$data['judul'] = "Peminjaman";
			$data['pinjam'] = $this->model('Get_models')->ambilPinjam();
			$data['peminjam'] = $this->model('Get_models')->ambilPeminjam();
			$data['buku'] =  $this->model('Get_models')->ambilBukuPinjam();
			$data['jurusan'] =$this->model('Get_models')->ambilJurusan();
			$this->view('template/petugas/header',$data);
			$this->view('perpustakaan/peminjaman/index',$data);
			$this->view('template/petugas/footer');
		}
	}
    
    public function detail($id)
    {
    	if (empty($_SESSION['role']) || $_SESSION['role'] == "") {
			header('Location: http://perpustakaan.com/projek_perpustakaan/Perpustakaan_mvc/app/views/template/404.php');
		}
    	$auth = $_SESSION['role'];
		if ($auth == '1' || $auth == 1) {
	    	$data['judul'] =  "Detail Peminjam";
	    	$data['detail'] = $this->model('Get_models')->ambilDetailpinjam($id);
	    	$this->view('template/header',$data);
			$this->view('perpustakaan/peminjaman/detail',$data);
			$this->view('template/footer');
		}elseif ($auth == '2' || $auth == 2){
			$data['judul'] =  "Detail Peminjam";
	    	$data['detail'] = $this->model('Get_models')->ambilDetailpinjam($id);
	    	$this->view('template/petugas/header',$data);
			$this->view('perpustakaan/peminjaman/detail',$data);
			$this->view('template/petugas/footer');
		}
    }

    public function edit_pinjam($id)
    {
    	if (empty($_SESSION['role']) || $_SESSION['role'] == "") {
			header('Location: http://perpustakaan.com/projek_perpustakaan/Perpustakaan_mvc/app/views/template/404.php');
		}
		$auth = $_SESSION['role'];
		if ($auth == '1' || $auth == 1) {
	    	$data['judul'] =  "Edit Peminjam";
	    	$data['allPm'] = $this->model('Get_models')->ambilDataBy("id_pinjam",$id,"tb_pinjam");
	    	$data['peminjam'] = $this->model('Get_models')->ambilPeminjam();
			$data['buku'] =  $this->model('Get_models')->ambilBukuall();
			$data['jurusan'] =$this->model('Get_models')->ambilJurusan();
	    	$this->view('template/header',$data);
			$this->view('perpustakaan/peminjaman/edit',$data);
			$this->view('template/footer');
		}elseif ($auth == '2' || $auth == 2){
			$data['judul'] =  "Edit Peminjam";
	    	$data['allPm'] = $this->model('Get_models')->ambilDataBy("id_pinjam",$id,"tb_pinjam");
	    	$data['peminjam'] = $this->model('Get_models')->ambilPeminjam();
			$data['buku'] =  $this->model('Get_models')->ambilBukuall();
			$data['jurusan'] =$this->model('Get_models')->ambilJurusan();
	    	$this->view('template/petugas/header',$data);
			$this->view('perpustakaan/peminjaman/edit',$data);
			$this->view('template/petugas/footer');
		}
    }
}
