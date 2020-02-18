<?php 

class Get_models
{

	private $db;

	public function __construct(){

		$this->db = new Database;
	}

	/*---------------------------> ambil data by <-----------------------------------*/
	
	public function ambilBukuBy($verificator, $value)
    {
        if (isset($verificator) && isset($value)) {
            $q = "SELECT * FROM tb_buku WHERE $verificator = :$verificator";
            $this->db->query($q);
            $this->db->bind($verificator, $value);
            return $this->db->single();
        }
    }

    public function ambilDataBy($verificator, $value, $tb)
    {
        if (isset($verificator) && isset($value)) {
            $q = "SELECT * FROM $tb WHERE $verificator = :$verificator";
            $this->db->query($q);
            $this->db->bind($verificator, $value);
            return $this->db->single();
        }
    }

    /*-------------------------------------> ambil buku <---------------------------------------*/

	public function ambilBuku()
	{
		$query = "SELECT * FROM tb_buku 
				  INNER JOIN tb_kategori ON tb_buku.id_kategori = tb_kategori.id_kategori";
		$this->db->query($query);
		return $this->db->resultSet();
	}

	public function ambilKategori()
	{
		$query = "SELECT * FROM tb_kategori";
		$this->db->query($query);
		return $this->db->resultSet();
	}


	/*-------------------------------------> ambil user <---------------------------------------*/

	public function ambilUser()
	{
		$query = "SELECT * FROM auth
				  INNER JOIN tb_jurusan ON auth.id_jurusan =  tb_jurusan.id_jurusan
				  INNER JOIN tb_level ON auth.id_level = tb_level.id_level";
		$this->db->query($query);
		return $this->db->resultSet();
	}

	public function ambilJurusan()
	{
		$query = "SELECT * FROM tb_jurusan ";
		$this->db->query($query);
		return $this->db->resultSet();
	}

	public function ambilLevel()
	{
		$query = "SELECT * FROM tb_level ";
		$this->db->query($query);
		return $this->db->resultSet();
	}

	/*-------------------------------------> ambil pinjam <---------------------------------------*/

	public function ambilPinjam()
	{
		$query = "SELECT * FROM tb_pinjam
				  INNER JOIN auth ON tb_pinjam.id_auth = auth.id_auth
				  INNER JOIN tb_buku ON tb_pinjam.id_buku  = tb_buku.id_buku";
		$this->db->query($query);
		return $this->db->resultSet();
	}
    
    public function ambilPeminjam()
    {
    	$query = "SELECT * FROM auth ORDER BY auth.nama ASC";
    	$this->db->query($query);
    	return $this->db->resultSet();
    }

    public function ambilBukuPinjam()
    {
    	$query = "SELECT * FROM tb_buku WHERE status = 1";
    	$this->db->query($query);
    	return $this->db->resultSet();
    }

    public function ambilDetailpinjam($id)
    {
    	$query = "SELECT * FROM tb_pinjam 
    			  INNER JOIN auth ON tb_pinjam.id_auth = auth.id_auth
    			  INNER JOIN tb_buku ON tb_pinjam.id_buku = tb_buku.id_buku
    			  INNER JOIN tb_jurusan ON tb_pinjam.id_jurusan = tb_jurusan.id_jurusan WHERE id_pinjam = :id";
    	$this->db->query($query);
    	$this->db->bind('id',$id);
    	return $this->db->single();

    }
}
