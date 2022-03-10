<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelamar extends CI_Controller {
    function __construct()
    {
        parent::__construct();

        $this->load->model('Pelamar_model', 'pm');
    }
    function index()
    {
        $data['pelamar'] = $this->pm->pelamar();
        $this->load->view('template/header');
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }
    function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('admin/tambah_p');
        $this->load->view('template/footer'); 
    }
    function save_p()
    {
        $this->pm->save_p();
        redirect('Pelamar/index');
    }
    function hapus_p($id)
    {
        $this->pm->hapus_p($id);
        redirect('Pelamar/index');
    }
    function edit_p($nip)
    {
        $data['edit_p']=$this->pm->edit_p($nip);
        $this->load->view('template/header');
        $this->load->view('admin/edit_p',$data);
        $this->load->view('template/footer'); 
        
    }
    function simpan_edit_p()
    {
        $this->pm->simpan_edit_p();
        redirect('Pelamar/index');
    }
    function print_pelamar($nip)
    {
    $data['pelamar'] = $this->pm->simpan_pelamar($nip);
    $this->load->view('admin/p_print',$data);    
    }

   
}