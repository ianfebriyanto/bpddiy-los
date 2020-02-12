<?php

class User_model extends CI_Model
{
    public function readData()
    {
        return $this->db->get('TBL_USER')->result_array();
    }
     public function createData($data)
    {
        $this->db->insert('TBL_USER', $data);
    }
    public function updateData($id, $data)
    {
        $this->db->where('USER_ID', $id);
        $this->db->update('TBL_USER', $data);
    }
    public function deleteData($id)
    {
        $this->db->where('USER_ID', $id);
        $this->db->delete('TBL_USER');
    }
}
