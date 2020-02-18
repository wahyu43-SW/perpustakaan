<?php 


class Peminjaman extends Controller
{

	public function index()
	{
		$data['judul'] = "Peminjaman";
		$data['pinjam'] = $this->model('Get_models')->ambilPinjam();
		$data['peminjam'] = $this->model('Get_models')->ambilPeminjam();
		$data['buku'] =  $this->model('Get_models')->ambilBukuPinjam();
		$data['jurusan'] =$this->model('Get_models')->ambilJurusan();
		$this->view('template/header',$data);
		$this->view('perpustakaan/peminjaman/index',$data);
		$this->view('template/footer');
	}
    
    public function detail($id)
    {
    	$data['judul'] =  "Detail Peminjam";
    	$data['detail'] = $this->model('Get_models')->ambilDetailpinjam($id);
    	$this->view('template/header',$data);
		$this->view('perpustakaan/peminjaman/detail',$data);
		$this->view('template/footer');
    }
}
