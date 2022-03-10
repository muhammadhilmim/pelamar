<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model {
    function karyawan()
    {
        return $this->db->get('tbl_karyawan')->result();
    }
    function save_k()
    {
        $nama_karyawan = $this->input->post('nama_karyawan');
        $jabatan = $this->input->post('jabatan');
        $jk = $this->input->post('jk');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');
        $data = array(
            'nama_karyawan' => $nama_karyawan,
            'jabatan' => $jabatan,
            'jk' => $jk,
            'no_hp' => $no_hp,
            'alamat' => $alamat
        );
        $this->db->insert('tbl_karyawan', $data);
    }
    function hapus_k($id)
    {
        $this->db->delete('tbl_karyawan', array('nik' => $id));
    }
    function edit_k($nik)
    {
        
        return $this->db->get_where('tbl_karyawan', array('nik' => $nik))->result();
    }
    function simpan_edit_k()
    {
        $nama_karyawan = $this->input->post('nama_karyawan');
        $jabatan = $this->input->post('jabatan');
        $jk = $this->input->post('jk');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');
        $nik = $this->input->post('nik');
        $data = array(
            'nama_karyawan' => $nama_karyawan,
            'jabatan' => $jabatan,
            'jk' => $jk,
            'no_hp' => $no_hp,
            'alamat' => $alamat
        );
        $this->db->where('nik', $nik);
        $this->db->update('tbl_karyawan', $data);
    }
    function simpan_karyawan($nik)
    {
        return $this->db->get_where('tbl_karyawan', array('nik'=> $nik))->result();
    }
    
}