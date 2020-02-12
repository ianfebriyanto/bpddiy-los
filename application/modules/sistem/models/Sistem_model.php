<?php

class Sistem_model extends CI_Model
{
    public function readData()
    {
       return $this->db->get('TBL_SISTEM')->result_array();	
    }
      public function createData($data)
    {
        $this->db->insert('TBL_SISTEM', $data);
    }
    public function updateData($id, $data)
    {
        $this->db->where('SISTEM_ID', $id);
        $this->db->update('TBL_SISTEM', $data);
    }
    public function deleteData($id)
    {
        $this->db->where('SISTEM_ID', $id);
        $this->db->delete('TBL_SISTEM');
    }
}
