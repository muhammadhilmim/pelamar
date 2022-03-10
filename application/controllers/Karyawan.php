<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
    function __construct()
    {
        parent::__construct();

        $this->load->model('Karyawan_model', 'km');
    }
    function index()
    {
        $data['karyawan'] = $this->km->karyawan();
        $this->load->view('template/header');
        $this->load->view('admin/karyawan', $data);
        $this->load->view('template/footer');
    }
    function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('admin/tambah_k');
        $this->load->view('template/footer'); 
    }
    function save_k()
    {
        $this->km->save_k();
        redirect('Karyawan/index');
    }
    function hapus_k($id)
    {
        $this->km->hapus_k($id);
        redirect('Karyawan/index');
    }
    function edit_k($nik)
    {
        $data['edit_k']=$this->km->edit_k($nik);
        $this->load->view('template/header');
        $this->load->view('admin/edit_k',$data);
        $this->load->view('template/footer'); 
        
    }
    function simpan_edit_k()
    {
        $this->km->simpan_edit_k();
        redirect('Karyawan/index');
    }
    function print_karyawan($nik)
    {
    $data['karyawan'] = $this->km->simpan_karyawan($nik);
    $this->load->view('admin/v_print',$data);
        
    }
}