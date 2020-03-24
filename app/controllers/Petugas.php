<?php 

class Petugas extends Controller
{
	public function index()
	{
		$data['judul'] = "Daftar Buku";
		$data['Tbuku'] = $this->model('Get_models')->countBuku();
		$data['Tuser'] = $this->model('Get_models')->countuser();
		$data['Tpeminjaman'] = $this->model('Get_models')->countpeminjaman();
		$data['Tpengembalian'] = $this->model('Get_models')->countpengembalian();
		$this->view('template/petugas/header',$data);
		$this->view('perpustakaan/index',$data);
		$this->view('template/petugas/footer');
	}
}    
