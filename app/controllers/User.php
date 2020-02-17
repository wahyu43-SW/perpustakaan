<?php 



class User extends Controller
{
    
	public function index()
	{
		$data['judul'] = "Daftar User";
		$data['user'] = $this->model('Get_models')->ambilUser();
		$data['jurusan'] = $this->model('Get_models')->ambilJurusan();
		$data['level'] = $this->model('Get_models')->ambilLevel();
		$this->view('template/header',$data);
		$this->view('perpustakaan/user/index',$data);
		$this->view('template/footer');
	}

	public function edit_user($id)
	{
		$data['judul'] = "Edit User";
		$data['user'] = $this->model('Get_models')->ambilDataBy("id_auth",$id,"auth");
		$data['jurusan'] = $this->model('Get_models')->ambilJurusan();
		$data['level'] = $this->model('Get_models')->ambilLevel();
		$this->view('template/header',$data);
		$this->view('perpustakaan/user/edit_user',$data);
		$this->view('template/footer');
	}

	public function jurusan()
	{
		$data['judul'] = "Tambah Jurusan";
		$data['jurusan'] = $this->model('Get_models')->ambilJurusan();
		$this->view('template/header',$data);
		$this->view('perpustakaan/user/jurusan',$data);
		$this->view('template/footer');
	}

	public function edit_jurusan($id)
	{
		$data['judul'] = "Edit Jurusan";
		$data['jurusan'] = $this->model('Get_models')->ambilDataBy("id_jurusan",$id,"tb_jurusan");
		$this->view('template/header',$data);
		$this->view('perpustakaan/user/edit_jurusan',$data);
		$this->view('template/footer');
	}




}
