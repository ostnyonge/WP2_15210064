<?php
class buku extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_buku');
        $this->load->library('form_validation');
    }
    function index()
    {
        $data['buku'] = $this->m_buku->tampilData()->result();
        $this->load->view('buku', $data);
    }
    function hapus($kd_buku)
    {
        $this->m_buku->hapus($kd_buku);
        $data['buku'] = $this->m_buku->tampilData()->result();
        $this->load->view('buku', $data);
    }
    function insert()
    {
        $data['buku'] = $this->m_buku->tampilData()->result();
        $this->load->view('insert_buku', $data);
    }
    function insertData()
    {
        $kd_buku = $this->input->post('kd_buku');
        $judul = $this->input->post('judul');
        $pengarang = $this->input->post('pengarang');
        $jenis = $this->input->post('jenis');

        $this->form_validation->set_rules(
            'kd_buku',
            'kd_buku',
            'required|numeric|min_length[3]|is_unique[buku.kd_buku]',
            [
                'required' => '* Kode Buku harus diisi !',
                'numeric' => '* Kode Buku harus angka !',
                'min_length' => '* Kode Buku harus diisi minimal 3 karakter !',
                'is_unique' => '* Kode Buku tidak boleh sama !'
            ]
        );

        $this->form_validation->set_rules(
            'judul',
            'judul',
            'required|min_length[3]',
            [
                'required' => '* Judul harus diisi !',
                'min_length' => '* Judul harus diisi minimal 3 karakter !'
            ]
        );

        $this->form_validation->set_rules(
            'pengarang',
            'pengarang',
            'required',
            [
                'required' => '* Pengarang harus diisi !'
            ]
        );

        $this->form_validation->set_rules(
            'jenis',
            'jenis',
            'required|min_length[3]',
            [
                'required' => '* Jenis Buku harus diisi !',
                'min_length' => '* Jenis Buku harus diisi minimal 3 karakter !'
            ]
        );

        $data = array(
            'kd_buku' => $kd_buku,
            'judul' => $judul,
            'pengarang' => $pengarang,
            'jenis' => $jenis
        );

        if ($this->form_validation->run() != true) {
            $this->load->view('insert_buku', $data);
        } else {
            $this->m_buku->input_data($data, 'buku');
            redirect('https://localhost/myci/index.php/buku');
        }

    }
    function edit($kd_buku)
    {
        $where = array('kd_buku' => $kd_buku);
        $data['buku'] = $this->m_buku->edit_data($where, 'buku')->result();
        $this->load->view('edit_buku', $data);
    }
    
    function update()
    {
        $kd_buku = $this->input->post('kd_buku');
        $judul = $this->input->post('judul');
        $pengarang = $this->input->post('pengarang');
        $jenis = $this->input->post('jenis');

        $this->form_validation->set_rules(
            'judul',
            'judul',
            'required|min_length[3]',
            [
                'required' => '* Judul harus diisi !',
                'min_length' => '* Judul harus diisi minimal 3 karakter !'
            ]
        );

        $this->form_validation->set_rules(
            'pengarang',
            'pengarang',
            'required',
            [
                'required' => '* pengarang harus diisi !'
            ]
        );

        $this->form_validation->set_rules(
            'jenis',
            'jenis',
            'required|min_length[3]',
            [
                'required' => '* jenis harus diisi !',
                'min_length' => '* jenis harus diisi minimal 3 karakter !'
            ]
        );

        $data = array(
            'judul' => $judul,
            'pengarang' => $pengarang,
            'jenis' => $jenis
        );

        $where = array(
            'kd_buku' => $kd_buku
        );

        if ($this->form_validation->run() != true) {
            $where = array('kd_buku' => $kd_buku);
            $data['buku'] = $this->m_buku->edit_data($where, 'buku')->result();
            $this->load->view('edit_buku', $data);
        } else {
            $this->m_buku->update_data($where, $data, 'buku');
            redirect('https://localhost/myci/index.php/buku');
        }

    }

}