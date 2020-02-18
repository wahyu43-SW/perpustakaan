<?php  


class Kembali extends Controller
{
    
	public function index()
	{
		$data['judul'] = "Daftar Buku Kembali";
		$data['pinjam'] = $this->model('Get_models')->ambilPinjamkembali();
		$this->view('template/header',$data);
		$this->view('perpustakaan/kembali/index',$data);
		$this->view('template/footer');
	}

}



