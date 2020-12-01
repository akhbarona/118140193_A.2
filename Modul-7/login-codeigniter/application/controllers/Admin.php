<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model', 'model_model');
        $this->load->helper('date');
    }
    public function index()
    {
        if ($this->session->userdata('username') == NULL) {
            $this->session->set_flashdata('message', '<p>Login dulu</p>');
            redirect('login');
        }
        if ($this->session->userdata('username') != NULL) {
            if ($this->model_model->isLoginSessionExpired()) {
                $this->session->set_flashdata('message', '<p>Login sesi telah habis, silahkan login kembali!</p>');
                redirect('admin/logout');
            }
        }
        $sessionUser = $this->session->userdata('username');
        $data['user'] = $this->model_model->getUsername($sessionUser);
        $data['artikel'] = $this->model_model->getArtikelAll()->result();
        $this->load->view('admin/index', $data);
    }
    public function buatArtikel()
    {

        $this->load->view('artikel/adminPost');
    }
    public function add()
    {
        $tanggal = '%Y-%m-%d';
        $this->form_validation->set_rules('judul', 'Judul', 'required|htmlspecialchars');
        $this->form_validation->set_rules('isi', 'Isi', 'required|htmlspecialchars');
        if ($this->form_validation->run() == true) {
            $data = array(
                'id_pengarang' => $this->session->userdata('id'),
                'judul_artikel' => $this->input->post('judul', true),
                'isi_artikel' => $this->input->post('isi', true),
                'tgl_artikel' => mdate($tanggal)
            );
            $this->model_model->buatArtikel($data);
            redirect('admin');
        } else {
            redirect('admin/buatArtikel');
        }
    }
    public function ubah($id)
    {
        $where = array('id_artikel' => $id);
        $data['user'] = $this->model_model->getArtikel($where, 'artikel')->result();
        $this->load->view('edit/adminPost', $data);
    }
    public function update()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');

        $data = array(
            'judul_artikel' => $judul,
            'isi_artikel' => $isi,
        );

        $where = array(
            'id_artikel' => $id
        );

        $this->model_model->ubahArtikel($where, $data, 'artikel');
        redirect('admin');
    }
    public function hapus($id)
    {
        $where = array(
            'id_artikel' => $id
        );
        $this->model_model->hapusArtikel($where, 'artikel');
        redirect('admin');
    }
    public function logout()
    {
        if ($this->session->flashdata('message') != NULL) {
            $this->session->set_flashdata('message', '<p>Login sesi telah habis, silahkan login kembali!</p>');
            $this->session->unset_userdata('username');
            redirect('login');
        } else {
            $this->session->set_flashdata('message', '<p>Sukses logout</p>');
            $this->session->unset_userdata('username');
            redirect('login');
        }
    }
}
