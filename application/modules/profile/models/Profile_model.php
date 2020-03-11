<?php

class Profile_model extends CI_Model
{
    public function readData()
    {
        $this->db->select('USER_ID,USERNAME, PASSWORD, NAMA_LENGKAP, EMAIL');
        $this->db->from('TBL_USER');
        $this->db->where('USERNAME', $this->session->userdata('USERNAME'));
        return $this->db->get()->result_array();
    }
    public function updateData($id, $data)
    {
        $this->db->where('USER_ID', $id);
        $this->db->update('TBL_USER', $data);
    }
}
