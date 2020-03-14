<?php  



class Auth extends Controller
{
    public function login(){
    	$data['judul'] = "Login";
		$this->view('perpustakaan/login/login',$data);
    }
}
