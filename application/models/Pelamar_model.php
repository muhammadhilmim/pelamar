<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelamar_model extends CI_Model {
    function pelamar()
    {
        return $this->db->get('tbl_pelamar')->result();
    }
    function save_p()
    {
        $nama_pelamar = $this->input->post('nama_pelamar');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tl = $this->input->post('tl');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');
        $tgl_masuk = $this->input->post('tgl_masuk');
        $tgl_interview = $this->input->post('tgl_interview');
        $tgl_mop = $this->input->post('tgl_mop');
        $data = array(
            'nama_pelamar' => $nama_pelamar,
            'tempat_lahir' => $tempat_lahir,
            'tl' => $tl,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
            'tgl_masuk' => $tgl_masuk,
            'tgl_interview' => $tgl_interview,
            'tgl_mop' => $tgl_mop
        );
        $this->db->insert('tbl_pelamar', $data);
    }
    function hapus_p($id)
    {
        $this->db->delete('tbl_pelamar', array('nip' => $id));
    }
    function edit_p($nip)
    {
        
        return $this->db->get_where('tbl_pelamar', array('nip' => $nip))->result();
    }
    function simpan_edit_p()
    {
        $nama_pelamar = $this->input->post('nama_pelamar');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tl = $this->input->post('tl');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');
        $tgl_masuk = $this->input->post('tgl_masuk');
        $tgl_interview = $this->input->post('tgl_interview');
        $tgl_mop = $this->input->post('tgl_mop');
        $nip = $this->input->post('nip');
        $data = array(
            'nama_pelamar' => $nama_pelamar,
            'tempat_lahir' => $tempat_lahir,
            'tl' => $tl,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
            'tgl_masuk' => $tgl_masuk,
            'tgl_interview' => $tgl_interview,
            'tgl_mop' => $tgl_mop
        );
        $this->db->where('nip', $nip);
        $this->db->update('tbl_pelamar', $data);
    }
    function simpan_pelamar($nip)
    {
        return $this->db->get_where('tbl_pelamar', array('nip'=> $nip))->result();
    }
}