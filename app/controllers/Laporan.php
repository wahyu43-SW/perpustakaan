<?php 


class Laporan extends Controller
{
 
	public function index()
	{
		$data['judul'] = "Generate Laporan";
		$this->view('template/header',$data);
		$this->view('perpustakaan/laporan/index',$data);
		$this->view('template/footer');
	}

	public function cetak()
	{
		require_once 'C:\xampp\htdocs\projek_perpustakaan\Perpustakaan_mvc\public/vendor/vendor/autoload.php';

		$mpdf = new \Mpdf\Mpdf();
		$mpdf->WriteHTML('<h1>Hello world!</h1>');
		$mpdf->Output();
	}

}
