<?php
class mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_mahasiswa');
        $this->load->library('form_validation');
    }
    function index()
    {
        $data['mahasiswa'] = $this->m_mahasiswa->tampilData()->result();
        $this->load->view('mahasiswa', $data);
    }
    function hapus($nim)
    {
        $this->m_mahasiswa->hapus($nim);
        $data['mahasiswa'] = $this->m_mahasiswa->tampilData()->result();
        $this->load->view('mahasiswa', $data);
    }
    function insert()
    {
        $data['mahasiswa'] = $this->m_mahasiswa->tampilData()->result();
        $this->load->view('insert_mahasiswa', $data);
    }
    function insertData()
    {
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $jurusan = $this->input->post('jurusan');
        $alamat = $this->input->post('alamat');

        $this->form_validation->set_rules(
            'nim',
            'NIM',
            'required|numeric|min_length[8]|is_unique[mahasiswa.nim]',
            [
                'required' => '* NIM harus diisi !',
                'numeric' => '* NIM harus angka !',
                'min_length' => '* NIM harus diisi minimal 8 karakter !',
                'is_unique' => '* NIM tidak boleh sama !'
            ]
        );

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|min_length[3]',
            [
                'required' => '* Nama harus diisi !',
                'min_length' => '* Nama harus diisi minimal 3 karakter !'
            ]
        );

        $this->form_validation->set_rules(
            'jurusan',
            'Jurusan',
            'required',
            [
                'required' => '* Jurusan harus diisi !'
            ]
        );

        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required|min_length[3]',
            [
                'required' => '* Alamat harus diisi !',
                'min_length' => '* Alamat harus diisi minimal 3 karakter !'
            ]
        );

        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'jurusan' => $jurusan,
            'alamat' => $alamat
        );

        if ($this->form_validation->run() != true) {
            $this->load->view('insert_mahasiswa');
        } else {
            $this->m_mahasiswa->input_data($data, 'mahasiswa');
            redirect('https://localhost/myci/index.php/mahasiswa');
        }

    }
    function edit($nim)
    {
        $where = array('nim' => $nim);
        $data['mahasiswa'] = $this->m_mahasiswa->edit_data($where, 'mahasiswa')->result();
        $this->load->view('edit_mahasiswa', $data);
    }

    function update()
    {
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $jurusan = $this->input->post('jurusan');
        $alamat = $this->input->post('alamat');

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|min_length[3]',
            [
                'required' => '* Nama harus diisi !',
                'min_length' => '* Nama harus diisi minimal 3 karakter !'
            ]
        );

        $this->form_validation->set_rules(
            'jurusan',
            'Jurusan',
            'required',
            [
                'required' => '* Jurusan harus diisi !'
            ]
        );

        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required|min_length[3]',
            [
                'required' => '* Alamat harus diisi !',
                'min_length' => '* Alamat harus diisi minimal 3 karakter !'
            ]
        );

        $data = array(
            'nama' => $nama,
            'jurusan' => $jurusan,
            'alamat' => $alamat
        );

        $where = array(
            'nim' => $nim
        );

        if ($this->form_validation->run() != true) {
            $where = array('nim' => $nim);
            $data['mahasiswa'] = $this->m_mahasiswa->edit_data($where, 'mahasiswa')->result();
            $this->load->view('edit_mahasiswa', $data);
        } else {
            $this->m_mahasiswa->update_data($where, $data, 'mahasiswa');
            redirect('https://localhost/myci/index.php/mahasiswa');
        }

    }

}