<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct()
    {
        parent::__construct();

        $this->load->model('User_model', 'um');
    }
    function index()
    {
        $this->load->view('login');
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
    function proses_login()
    {
        $hasilcek = $this->um->cekuser();
        if($hasilcek){
            $sess_data['id'] = $hasilcek[0]->id;
            $sess_data['level'] = $hasilcek[0]->level;
            $sess_data['nama'] = $hasilcek[0]->nama_user;

            $this->session->set_userdata($sess_data);

            if($sess_data ['level'] == 'admin'){
                redirect(base_url('user'));
            }else{
                redirect(base_url('pelamar'));
            }
        }else{
            redirect('/');
        }
    }
}