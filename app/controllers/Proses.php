<?php 




class Proses extends Controller
{

     /* ------------------------------> Tambah <--------------------------------- */

	public function addbuku()
    {
        $add = $this->model('Proses_models')->addbuku($_POST);
    	if ($add['status']){
            Flasher::setFlash('Buku ', 'Berhasil Di Tambah','success');
            header('Location: '. BASEURL . '/buku/index');
            exit();
        }else {
            Flasher::setFlash('Buku ','Gagal Di Tambah','error');
            header('Location: '. BASEURL . '/buku/index');
            exit();
        }
    }

    public function addkategori()
    {
        $add = $this->model('Proses_models')->addkategori($_POST);
        if ($add['status']){
            Flasher::setFlash('Kategori ', 'Berhasil Di Tambah','success');
            header('Location: '. BASEURL . '/buku/kategori');
            exit();
        }else {
            Flasher::setFlash('Kategori ','Gagal Di Tambah','error');
            header('Location: '. BASEURL . '/buku/kategori');
            exit();
        }
    }

    public function addUser()
    {
        $add = $this->model('Proses_models')->addUser($_POST);
        if ($add['status']){
            Flasher::setFlash('User ', 'Berhasil Di Tambah','success');
            header('Location: '. BASEURL . '/user/index');
            exit();
        }else {
            Flasher::setFlash('User ','Gagal Di Tambah','error');
            header('Location: '. BASEURL . '/user/index');
            exit();
        }
    }

    public function addJurusan()
    {
        $add = $this->model('Proses_models')->addJurusan($_POST);
        if ($add['status']){
            Flasher::setFlash('Jurusan ', 'Berhasil di Tambah','success');
            header('Location: '. BASEURL . '/user/jurusan');
            exit();
        }else {
            Flasher::setFlash('Jurusan ','Gagal di Tambah','danger');
            header('Location: '. BASEURL . '/user/jurusan');
            exit();
        }
    }

    public function addPinjam()
    {
        $add = $this->model('Proses_models')->addPinjam($_POST);
        if ($add['status']){
            Flasher::setFlash('Peminjam Buku ', 'Berhasil','success');
            header('Location: '. BASEURL . '/peminjaman/index');
            exit();
        }else {
            Flasher::setFlash('Peminjam Buku ','Gagal','error');
            header('Location: '. BASEURL . '/peminjaman/index');
            exit();
        }
    }

    /* ------------------------------> Hapus <--------------------------------- */

    public function hapus_buku($id)
    {
        $add = $this->model('Proses_models')->hapus_buku($id);
        if ($add['status']){
            Flasher::setFlash('Buku ', 'Berhasil Di Hapus','success');
            header('Location: '. BASEURL . '/buku/index');
            exit();
        }else {
            Flasher::setFlash('Buku ','Gagal Di Hapus','error');
            header('Location: '. BASEURL . '/buku/index');
            exit();
        }
    }

    public function hapus_user($id)
    {
        $add = $this->model('Proses_models')->hapus_user($id);
        if ($add['status']){
            Flasher::setFlash('User ', 'Berhasil Di Hapus','success');
            header('Location: '. BASEURL . '/user/index');
            exit();
        }else {
            Flasher::setFlash('User ','Gagal Di Hapus','error');
            header('Location: '. BASEURL . '/user/index');
            exit();
        }
    }

    public function hapus_kategori($id)
    {
        $add = $this->model('Proses_models')->hapus_kategori($id);
        if ($add['status']){
            Flasher::setFlash('Kategori ', 'Berhasil Di Hapus','success');
            header('Location: '. BASEURL . '/buku/kategori');
            exit();
        }else {
            Flasher::setFlash('Kategori ','Gagal Di Hapus','error');
            header('Location: '. BASEURL . '/buku/kategori');
            exit();
        }
    }

    public function hapus_jurusan($id)
    {
        $add = $this->model('Proses_models')->hapus_jurusan($id);
        if ($add['status']){
            Flasher::setFlash('Jurusan ', 'Berhasil Di Hapus','success');
            header('Location: '. BASEURL . '/user/jurusan');
            exit();
        }else {
            Flasher::setFlash('Jurusan ','Gagal Di Hapus','error');
            header('Location: '. BASEURL . '/user/jurusan');
            exit();
        }
    }

     /* ------------------------------> Edit <--------------------------------- */
    
    public function editbuku()
    {
        $add = $this->model('Proses_models')->editbuku($_POST);
        if ($add['status']){
            Flasher::setFlash('Buku ', 'Berhasil Di Ubah','success');
            header('Location: '. BASEURL . '/buku/index');
            exit();
        }else {
            Flasher::setFlash('Buku ','Gagal Di Ubah','error');
            header('Location: '. BASEURL . '/buku/edit_buku/'.$_POST['id']);
            exit();
        }
    }

    public function edit_user()
    {
        $add = $this->model('Proses_models')->edit_user($_POST);
        if ($add['status']){
            Flasher::setFlash('User ', 'Berhasil Di Ubah','success');
            header('Location: '. BASEURL . '/user/index');
            exit();
        }else {
            Flasher::setFlash('User ','Gagal Di Ubah','error');
            header('Location: '. BASEURL . '/user/index');
            exit();
        }
    }

    public function edit_kategori()
    {
        $add = $this->model('Proses_models')->edit_kategori($_POST);
        if ($add['status']){
            Flasher::setFlash('Kategori ', 'Berhasil Di Ubah','success');
            header('Location: '. BASEURL . '/buku/kategori');
            exit();
        }else {
            Flasher::setFlash('Kategori ','Gagal Di Ubah','error');
            header('Location: '. BASEURL . '/buku/edit_kategori/'.$_POST['id']);
            exit();
        }
    }

    public function edit_jurusan()
    {
        $add = $this->model('Proses_models')->edit_jurusan($_POST);
        if ($add['status']){
            Flasher::setFlash('Jurusan ', 'Berhasil Di Ubah','success');
            header('Location: '. BASEURL . '/user/jurusan');
            exit();
        }else {
            Flasher::setFlash('Jurusan ','Gagal Di Ubah','error');
            header('Location: '. BASEURL . '/user/edit_jurusan/'.$_POST['id']);
            exit();
        }
    }

    public function ubahPinjam()
    {
        $add = $this->model('Proses_models')->ubah_pinjam($_POST);
        if ($add['status']){
            Flasher::setFlash('berhasil', 'di ubah','success');
            header('Location: '. BASEURL . '/peminjaman/edit');
            exit();
        }else {
            Flasher::setFlash('Gagal','di ubah','danger');
            header('Location: '. BASEURL . '/peminjaman/edit');
            exit();
        }
    }

    public function selesai($id)
    {
        $add = $this->model('Proses_models')->selesai($id);
        if ($add['status']){
            Flasher::setFlash('berhasil', 'di ubah','success');
            header('Location: '. BASEURL . '/kembali/index');
            exit();
        }else {
            Flasher::setFlash('Gagal','di ubah','danger');
            header('Location: '. BASEURL . '/kembali/index');
            exit();
        }
    }

    public function selesai_kembali($id)
    {
        $add = $this->model('Proses_models')->selesai_kembali($id);
        if ($add['status']){
            Flasher::setFlash('berhasil', 'di Hapus','success');
            header('Location: '. BASEURL . '/kembali/index');
            exit();
        }else {
            Flasher::setFlash('Gagal','di Hapus','danger');
            header('Location: '. BASEURL . '/kembali/index');
            exit();
        }
    }

}
