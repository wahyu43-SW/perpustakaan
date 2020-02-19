<?php 




class Proses extends Controller
{

     /* ------------------------------> Tambah <--------------------------------- */

	public function addbuku()
    {
    	if ($this->model('Proses_models')->addbuku($_POST) > 0){
            Flasher::setFlash('berhasil', 'di Tambah','success');
            header('Location: '. BASEURL . '/buku/index');
            exit();
        }else {
            Flasher::setFlash('Gagal','di Tambah','danger');
            header('Location: '. BASEURL . '/buku/index');
            exit();
        }
    }

    public function addkategori()
    {
        if ($this->model('Proses_models')->addkategori($_POST) > 0){
            Flasher::setFlash('berhasil', 'di Tambah','success');
            header('Location: '. BASEURL . '/buku/kategori');
            exit();
        }else {
            Flasher::setFlash('Gagal','di Tambah','danger');
            header('Location: '. BASEURL . '/buku/kategori');
            exit();
        }
    }

    public function addUser()
    {
        if ($this->model('Proses_models')->addUser($_POST) > 0){
            Flasher::setFlash('berhasil', 'di Tambah','success');
            header('Location: '. BASEURL . '/user/index');
            exit();
        }else {
            Flasher::setFlash('Gagal','di Tambah','danger');
            header('Location: '. BASEURL . '/user/index');
            exit();
        }
    }

    public function addJurusan()
    {
        if ($this->model('Proses_models')->addJurusan($_POST) > 0){
            Flasher::setFlash('berhasil', 'di Tambah','success');
            header('Location: '. BASEURL . '/user/jurusan');
            exit();
        }else {
            Flasher::setFlash('Gagal','di Tambah','danger');
            header('Location: '. BASEURL . '/user/jurusan');
            exit();
        }
    }

    public function addPinjam()
    {
        if ($this->model('Proses_models')->addPinjam($_POST) > 0){
            Flasher::setFlash('berhasil', 'di Tambah','success');
            header('Location: '. BASEURL . '/peminjaman/index');
            exit();
        }else {
            Flasher::setFlash('Gagal','di Tambah','danger');
            header('Location: '. BASEURL . '/peminjaman/index');
            exit();
        }
    }

    /* ------------------------------> Hapus <--------------------------------- */

    public function hapus_buku($id)
    {
        if ($this->model('Proses_models')->hapus_buku($id) > 0){
            Flasher::setFlash('berhasil', 'di hapus','success');
            header('Location: '. BASEURL . '/buku/index');
            exit();
        }else {
            Flasher::setFlash('Gagal','di hapus','danger');
            header('Location: '. BASEURL . '/buku/index');
            exit();
        }
    }

    public function hapus_user($id)
    {
        if ($this->model('Proses_models')->hapus_user($id) > 0){
            Flasher::setFlash('berhasil', 'di hapus','success');
            header('Location: '. BASEURL . '/user/index');
            exit();
        }else {
            Flasher::setFlash('Gagal','di hapus','danger');
            header('Location: '. BASEURL . '/user/index');
            exit();
        }
    }

    public function hapus_kategori($id)
    {
        if ($this->model('Proses_models')->hapus_kategori($id) > 0){
            Flasher::setFlash('berhasil', 'di hapus','success');
            header('Location: '. BASEURL . '/buku/kategori');
            exit();
        }else {
            Flasher::setFlash('Gagal','di hapus','danger');
            header('Location: '. BASEURL . '/buku/kategori');
            exit();
        }
    }

    public function hapus_jurusan($id)
    {
        if ($this->model('Proses_models')->hapus_jurusan($id) > 0){
            Flasher::setFlash('berhasil', 'di hapus','success');
            header('Location: '. BASEURL . '/user/jurusan');
            exit();
        }else {
            Flasher::setFlash('Gagal','di hapus','danger');
            header('Location: '. BASEURL . '/user/jurusan');
            exit();
        }
    }

     /* ------------------------------> Edit <--------------------------------- */
    
    public function editbuku()
    {
        if ($this->model('Proses_models')->editbuku($_POST) > 0){
            Flasher::setFlash('berhasil', 'di ubah','success');
            header('Location: '. BASEURL . '/buku/index');
            exit();
        }else {
            Flasher::setFlash('Gagal','di ubah','danger');
            header('Location: '. BASEURL . '/buku/index');
            exit();
        }
    }

    public function edit_user()
    {
        if ($this->model('Proses_models')->edit_user($_POST) > 0){
            Flasher::setFlash('berhasil', 'di ubah','success');
            header('Location: '. BASEURL . '/user/index');
            exit();
        }else {
            Flasher::setFlash('Gagal','di ubah','danger');
            header('Location: '. BASEURL . '/user/index');
            exit();
        }
    }

    public function edit_kategori()
    {
        if ($this->model('Proses_models')->edit_kategori($_POST) > 0){
            Flasher::setFlash('berhasil', 'di ubah','success');
            header('Location: '. BASEURL . '/buku/kategori');
            exit();
        }else {
            Flasher::setFlash('Gagal','di ubah','danger');
            header('Location: '. BASEURL . '/buku/kategori');
            exit();
        }
    }

    public function edit_jurusan()
    {
        if ($this->model('Proses_models')->edit_jurusan($_POST) > 0){
            Flasher::setFlash('berhasil', 'di ubah','success');
            header('Location: '. BASEURL . '/user/jurusan');
            exit();
        }else {
            Flasher::setFlash('Gagal','di ubah','danger');
            header('Location: '. BASEURL . '/user/jurusan');
            exit();
        }
    }

    public function ubahPinjam()
    {
        if ($this->model('Proses_models')->ubah_pinjam($_POST) > 0){
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
        if ($this->model('Proses_models')->selesai($id) > 0){
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
        if ($this->model('Proses_models')->selesai_kembali($id) > 0){
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
