<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    function user()
    {
        return $this->db->get('tbl_user')->result();
    }
    function save_u()
    {
        $nama_user = $this->input->post('nama_user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');
        $data = array(
            'nama_user' => $nama_user,
            'username' => $username,
            'password' => $password,
            'level' => $level
        );
        $this->db->insert('tbl_user', $data);
    }
    function hapus_u($id)
    {
        $this->db->delete('tbl_user', array('id' => $id));
    }
    function edit_u($id)
    {
        
        return $this->db->get_where('tbl_user', array('id' => $id))->result();
    }
    function simpat_edit()
    {
        $nama_user = $this->input->post('nama_user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');
        $id = $this->input->post('id');
        $data = array(
            'nama_user' => $nama_user,
            'username' => $username,
            'password' => $password,
            'level' => $level
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_user', $data);
    }
    function simpan_user($id)
    {
        return $this->db->get_where('tbl_user', array('id'=> $id))->result();
    }
    function cekuser()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        return $this->db->get_where('tbl_user', array('username' => $username, 'password' => $password))->result();
    }
}