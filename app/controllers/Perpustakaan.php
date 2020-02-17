<?php 


class Perpustakaan extends Controller
{
	public function index()
	{
		$data['judul'] = "Daftar Buku";

		$this->view('template/header',$data);
		$this->view('perpustakaan/index',$data);
		$this->view('template/footer');
	}
	
}    

