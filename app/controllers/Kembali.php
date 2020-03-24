<?php  


class Kembali extends Controller
{
    
	public function index()
	{
		if (empty($_SESSION['role']) || $_SESSION['role'] == "") {
			header('Location: http://perpustakaan.com/projek_perpustakaan/Perpustakaan_mvc/app/views/template/404.php');
		}
		$auth = $_SESSION['role'];
		if ($auth == '1' || $auth == 1) {
			$data['judul'] = "Daftar Buku Kembali";
			$data['pinjam'] = $this->model('Get_models')->ambilPinjamkembali();
			$this->view('template/header',$data);
			$this->view('perpustakaan/kembali/index',$data);
			$this->view('template/footer');
		}elseif ($auth == '2' || $auth == 2){
			$data['judul'] = "Daftar Buku Kembali";
			$data['pinjam'] = $this->model('Get_models')->ambilPinjamkembali();
			$this->view('template/petugas/header',$data);
			$this->view('perpustakaan/kembali/index',$data);
			$this->view('template/petugas/footer');
		}
	}

}



