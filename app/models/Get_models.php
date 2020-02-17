<?php 

class Get_models
{

	private $db;

	public function __construct(){

		$this->db = new Database;
	}

	/*-------------------------------------> ambil data by <--------------------------------------------*/
	public function ambilBukuBy($verificator, $value)
    {
        if (isset($verificator) && isset($value)) {
            $q = "SELECT * FROM tb_buku WHERE $verificator = :$verificator";
            $this->db->query($q);
            $this->db->bind($verificator, $value);
            return $this->db->single();
        }
    }

    public function ambilUserBy($verificator, $value)
    {
        if (isset($verificator) && isset($value)) {
            $q = "SELECT * FROM auth WHERE $verificator = :$verificator";
            $this->db->query($q);
            $this->db->bind($verificator, $value);
            return $this->db->single();
        }
    }

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


	/*-------------------------------------> ambil user <--------------------------------------------*/

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
    
}
