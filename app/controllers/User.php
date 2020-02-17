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
		$data['user'] = $this->model('Get_models')->ambiluserBy("id_auth",$id);
		$data['jurusan'] = $this->model('Get_models')->ambilJurusan();
		$data['level'] = $this->model('Get_models')->ambilLevel();
		$this->view('template/header',$data);
		$this->view('perpustakaan/user/edit_user',$data);
		$this->view('template/footer');
	}


}
