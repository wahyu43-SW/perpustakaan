<?php
class Laporan extends Controller {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function index() {
    	if (empty($_SESSION['role']) || $_SESSION['role'] == "") {
			header('Location: http://perpustakaan.com/projek_perpustakaan/Perpustakaan_mvc/app/views/template/404.php');
		}
		$auth = $_SESSION['role'];
		if ($auth == '1' || $auth == 1) {
	        $data['judul'] = "Generate Laporan";
	        $this->view('template/header', $data);
	        $this->view('perpustakaan/laporan/index', $data);
	        $this->view('template/footer');
	    }elseif ($auth == '2' || $auth == 2){
			$data['judul'] = "Generate Laporan";
	        $this->view('template/petugas/header', $data);
	        $this->view('perpustakaan/laporan/index', $data);
	        $this->view('template/petugas/footer');
		}
    }
    public function buku() {
    	if (empty($_SESSION['role']) || $_SESSION['role'] == "") {
			header('Location: http://perpustakaan.com/projek_perpustakaan/Perpustakaan_mvc/app/views/template/404.php');
		}
		$auth = $_SESSION['role'];
		if ($auth == '1' || $auth == 1) {
	        $data['judul'] = "Laporan Buku";
	        $data['buku'] = $this->model('Get_models')->ambilBuku();
	        $this->view('template/header', $data);
	        $this->view('perpustakaan/laporan/L_buku', $data);
	        $this->view('template/footer');
        }elseif ($auth == '2' || $auth == 2){
			$data['judul'] = "Laporan Buku";
	        $data['buku'] = $this->model('Get_models')->ambilBuku();
	        $this->view('template/petugas/header', $data);
	        $this->view('perpustakaan/laporan/L_buku', $data);
	        $this->view('template/petugas/footer');
		}
    }
    public function user() {
    	if (empty($_SESSION['role']) || $_SESSION['role'] == "") {
			header('Location: http://perpustakaan.com/projek_perpustakaan/Perpustakaan_mvc/app/views/template/404.php');
		}
		$auth = $_SESSION['role'];
		if ($auth == '1' || $auth == 1) {
	        $data['judul'] = "Laporan Buku";
	        $data['user'] = $this->model('Get_models')->ambilUser();
	        $this->view('template/header', $data);
	        $this->view('perpustakaan/laporan/L_user', $data);
	        $this->view('template/footer');
	     }elseif ($auth == '2' || $auth == 2){
			$data['judul'] = "Laporan Buku";
	        $data['user'] = $this->model('Get_models')->ambilUser();
	        $this->view('template/petugas/header', $data);
	        $this->view('perpustakaan/laporan/L_user', $data);
	        $this->view('template/petugas/footer');
		}
    }

    public function peminjaman() {
    	if (empty($_SESSION['role']) || $_SESSION['role'] == "") {
			header('Location: http://perpustakaan.com/projek_perpustakaan/Perpustakaan_mvc/app/views/template/404.php');
		}
		$auth = $_SESSION['role'];
		if ($auth == '1' || $auth == 1) {
	        $data['judul'] = "Laporan ";
	        $data['peminjaman'] = $this->model('Get_models')->ambilPinjamkembali();
	        $this->view('template/header', $data);
	        $this->view('perpustakaan/laporan/L_peminjaman', $data);
	        $this->view('template/footer');
	    }elseif ($auth == '2' || $auth == 2){
			$data['judul'] = "Laporan ";
	        $data['peminjaman'] = $this->model('Get_models')->ambilPinjamkembali();
	        $this->view('template/petugas/header', $data);
	        $this->view('perpustakaan/laporan/L_peminjaman', $data);
	        $this->view('template/petugas/footer');
		}
    }

    public function cetak() {
        $query = "SELECT * FROM tb_buku 
				  INNER JOIN tb_kategori ON tb_buku.id_kategori = tb_kategori.id_kategori";
        $this->db->query($query);
        $data = $this->db->resultSet();
        require_once 'C:\xampp\htdocs\projek_perpustakaan\Perpustakaan_mvc\public/vendor/vendor/autoload.php';
        $html = '
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<title>Daftar Buku</title>
				<link rel="alternate" href=" ' . BASEURL . '/css/style-cetak.css">
				<link rel="alternate" href=" ' . BASEURL . '/css/sb-admin-2.css">
				<style type="text/css" >
					.table {
				    border-collapse: collapse !important;
				    margin-top:5rem;
				    font-size:10px;
				    box-sizing: content-box;
				  }
				  .table td,
				  .table th {
				    background-color: #fff !important;
				    padding: 0.75rem;
				    vertical-align: top;
				    text-align:center  }
				  .table-bordered th,
				  .table-bordered td {
				    border: 1px solid #333 !important;
				  }
				</style>
			</head>
			<body>
			 <div class="container-fluid">
				<img src="' . BASEURL . '/img/asset/banner.png" alt="">
			</div>
			<table class="table table-striped table-bordered" style="width: 100%;">
                    <thead>
                        <tr >
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Buku</th>
                            <th>Pengarang</th>
                            <th>Kategori</th>
                            <th>Stok Buku</th>
                            <th>Tanggal Masuk</th>
                            <th>Kondisi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">';
        $i = 1;
        if (isset($_POST['submit'])) {
            $tgl = $_POST['tgl_awal'];
            $tgl2 = $_POST['tgl_akhir'];
            $query = "SELECT * FROM tb_buku INNER JOIN tb_kategori ON tb_buku.id_kategori = tb_kategori.id_kategori WHERE tanggal_masuk BETWEEN '$tgl' AND '$tgl2'";
            $this->db->query($query);
            $data = $this->db->resultSet();
        }
        foreach ($data as $buku) {
            $html.= '
					<tr>

						<td>' . $i++ . '</td>
						<td width="20%"><img src="' . BASEURL . '/img/daftar-buku/' . $buku['gambar'] . '" alt="" width="10%"></td>
						<td>' . $buku['nama_buku'] . '</td>
						<td>' . $buku['pengarang'] . '</td>
						<td>' . $buku['kategori'] . '</td>
						<td width="10%">' . $buku['jumlah_buku'] . '</td>
						<td>' . date('d F Y', strtotime($buku['tanggal_masuk'])) . '</td>
						<td>' . $buku['kondisi_buku'] . '</tr>
					';
        }
        $html.= '</tbody>
                </table>
                 <br><br>
                <div class="inline">
                	<img src="' . BASEURL . '/img/asset/ttd_kpl.png" alt="" width="30%">
                	<img src="' . BASEURL . '/img/asset/ttd_ptgs.png" alt="" width="30%" style="margin-left:18rem;">
                </div>
				
			</body>
			</html>
		';
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output("Daftar-buku.pdf", \Mpdf\Output\Destination::INLINE);
    }

    public function cetak_user() {
       $query = "SELECT * FROM auth
				  INNER JOIN tb_jurusan ON auth.id_jurusan =  tb_jurusan.id_jurusan
				  INNER JOIN tb_level ON auth.id_level = tb_level.id_level";
		$this->db->query($query);
		$data = $this->db->resultSet();
        require_once 'C:\xampp\htdocs\projek_perpustakaan\Perpustakaan_mvc\public/vendor/vendor/autoload.php';
        $html = '
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<title>Daftar User</title>
				<link rel="alternate" href=" ' . BASEURL . '/css/style-cetak.css">
				<link rel="alternate" href=" ' . BASEURL . '/css/sb-admin-2.css">
				<style type="text/css" >
					.table {
				    border-collapse: collapse !important;
				    margin-top:5rem;
				    font-size:10px;
				    box-sizing: content-box;
				  }
				  .table td,
				  .table th {
				    background-color: #fff !important;
				    padding: 0.75rem;
				    vertical-align: top;
				    text-align:center  }
				  .table-bordered th,
				  .table-bordered td {
				    border: 1px solid #333 !important;
				  }
				 
				</style>
			</head>
			<body>
			 <div class="container-fluid">
				<img src="' . BASEURL . '/img/asset/banner.png" alt="">
			</div>
			<table class="table table-striped table-bordered" style="width: 100%;">
                    <thead>
                         <tr >
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nis</th>
                            <th>Kelas</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Tanggal Daftar</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">';
        $i = 1;
       	if (isset($_POST['submit'])) {
            $tgl = $_POST['tgl_awal'];
            $tgl2 = $_POST['tgl_akhir'];
            $query = "SELECT * FROM auth
				  INNER JOIN tb_jurusan ON auth.id_jurusan =  tb_jurusan.id_jurusan
				  INNER JOIN tb_level ON auth.id_level = tb_level.id_level WHERE tanggal_masuk BETWEEN '$tgl' AND '$tgl2'";
            $this->db->query($query);
            $data = $this->db->resultSet();
        }
        foreach ($data as $user) {
            $html.= '
					<tr>
						<td>' . $i++ . '</td>
						<td width="15%">' .$user['nama']. '</td>
						<td>' . $user['nis'] . '</td>
						<td>' . $user['kelas'].'&nbsp;('.$user['jurusan'].')'. '</td>
						<td>' . $user['username']. '</td>
						<td>' . $user['level'] . '</td>
						<td>' . date('d F Y', strtotime($user['tanggal_masuk'])) . '</td>
					</tr>';
        }
        $html.= '
			
			
        	</tbody>
                </table>
                <br><br>
                <div class="inline">
                	<img src="' . BASEURL . '/img/asset/ttd_kpl.png" alt="" width="30%">
                	<img src="' . BASEURL . '/img/asset/ttd_ptgs.png" alt="" width="30%" style="margin-left:18rem;">
                </div>
			</body>
			</html>
		';
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output("Daftar-user.pdf", \Mpdf\Output\Destination::INLINE);
    }

    public function cetak_peminjaman() {
      	$query = "SELECT * FROM tb_kembali
				  INNER JOIN tb_buku ON tb_kembali.id_buku  = tb_buku.id_buku
				  INNER JOIN auth ON tb_kembali.id_auth = auth.id_auth
                  INNER JOIN tb_jurusan ON tb_kembali.id_jurusan = tb_jurusan.id_jurusan";
		$this->db->query($query);
		$data = $this->db->resultSet();
        require_once 'C:\xampp\htdocs\projek_perpustakaan\Perpustakaan_mvc\public/vendor/vendor/autoload.php';
        $html = '
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<title>Daftar User</title>
				<link rel="alternate" href=" ' . BASEURL . '/css/style-cetak.css">
				<link rel="alternate" href=" ' . BASEURL . '/css/sb-admin-2.css">
				<style type="text/css" >
					.table {
				    border-collapse: collapse !important;
				    margin-top:5rem;
				    font-size:10px;
				    box-sizing: content-box;
				  }
				  .table td,
				  .table th {
				    background-color: #fff !important;
				    padding: 0.75rem;
				    vertical-align: top;
				    text-align:center  }
				  .table-bordered th,
				  .table-bordered td {
				    border: 1px solid #333 !important;
				  }
				 
				</style>
			</head>
			<body>
			 <div class="container-fluid">
				<img src="' . BASEURL . '/img/asset/banner.png" alt="">
			</div>
			<table class="table table-striped table-bordered" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Judul Buku</th>
                            <th>Kelas</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Denda</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">';
        $i = 1;
        if (isset($_POST['submit'])) {
            $tgl = $_POST['tgl_awal'];
            $tgl2 = $_POST['tgl_akhir'];
            $query = "SELECT * FROM tb_kembali
					  INNER JOIN tb_buku ON tb_kembali.id_buku  = tb_buku.id_buku
					  INNER JOIN auth ON tb_kembali.id_auth = auth.id_auth
	                  INNER JOIN tb_jurusan ON tb_kembali.id_jurusan = tb_jurusan.id_jurusan WHERE tanggal_pinjam BETWEEN '$tgl' AND '$tgl2'";
            $this->db->query($query);
            $data = $this->db->resultSet();
        }
       
        foreach ($data as $peminjaman) {
            $html.= '
					<tr>
						<td>' . $i++ . '</td>
						<td width="15%">' .$peminjaman['nama']. '</td>
						<td>' . $peminjaman['nama_buku'] . '</td>
						<td>' . $peminjaman['kelas'].'&nbsp;('.$peminjaman['jurusan'].')'. '</td>
						<td>' . date('d F Y', strtotime($peminjaman['tanggal_pinjam'])). '</td>
						<td>' . date('d F Y', strtotime($peminjaman['tanggal_kembali'])) . '</td>
						<td>' . $peminjaman['denda']. '</td>
					</tr>';
        }
        $html.= '
			
			
        	</tbody>
                </table>
                <br><br>
                <div class="inline">
                	<img src="' . BASEURL . '/img/asset/ttd_kpl.png" alt="" width="30%">
                	<img src="' . BASEURL . '/img/asset/ttd_ptgs.png" alt="" width="30%" style="margin-left:18rem;">
                </div>
			</body>
			</html>
		';
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output("Daftar-user.pdf", \Mpdf\Output\Destination::INLINE);
    }




}


