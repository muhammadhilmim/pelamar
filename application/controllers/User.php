<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    function __construct()
    {
        parent::__construct();

        $this->load->model('User_model', 'um');
    }
    function index()
    {
        $data['user'] = $this->um->user();
        $this->load->view('template/header');
        $this->load->view('admin/user', $data);
        $this->load->view('template/footer');
    }
    function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('admin/tambah_u');
        $this->load->view('template/footer'); 
    }
    function save_u()
    {
        $this->um->save_u();
        redirect('User/index');
    }
    function hapus_u($id)
    {
        $this->um->hapus_u($id);
        redirect('User/index');
    }
    function edit_u($id)
    {
        $data['edit_u']=$this->um->edit_u($id);
        $this->load->view('template/header');
        $this->load->view('admin/edit_u',$data);
        $this->load->view('template/footer'); 
        
    }
    function simpat_edit()
    {
        $this->um->simpat_edit();
        redirect('User/index');
    }
    function print_user($id)
    {
    $data['user'] = $this->um->simpan_user($id);
    $this->load->view('admin/u_print',$data);    
    }
    
}