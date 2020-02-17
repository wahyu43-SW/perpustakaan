<?php 



class Buku extends Controller
{
    public function index()
	{
		$data['judul'] = "Daftar Buku";
		$data['buku'] = $this->model('Get_models')->ambilBuku();
		$data['kategori'] = $this->model('Get_models')->ambilKategori();
		$this->view('template/header',$data);
		$this->view('perpustakaan/buku/index',$data);
		$this->view('template/footer');
	}

	public function kategori()
	{
		$data['judul'] = "Daftar Kategori";
		$data['kategori'] = $this->model('Get_models')->ambilKategori();
		$this->view('template/header',$data);
		$this->view('perpustakaan/buku/kategori',$data);
		$this->view('template/footer');
	}

	public function edit_buku($id)
	{
		$data['judul'] = "Edit Buku";
		$data['buku'] = $this->model('Get_models')->ambilDataby("id_buku",$id,"auth");
		$data['kategori'] = $this->model('Get_models')->ambilKategori($id);
		$this->view('template/header',$data);
		$this->view('perpustakaan/buku/edit_buku',$data);
		$this->view('template/footer');
	}

	public function edit_kategori($id)
	{
		$data['judul'] = "Edit Kategori";
		$data['buku'] = $this->model('Get_models')->ambilDataby("id_kategori",$id, "tb_kategori");
		// $data['kategori'] = $this->model('Get_models')->ambilKategori($id);
		$this->view('template/header',$data);
		$this->view('perpustakaan/buku/edit_kategori',$data);
		$this->view('template/footer');
	}

	
}
