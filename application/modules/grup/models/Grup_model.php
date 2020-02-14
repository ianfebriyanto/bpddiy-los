<?php

class Grup_model extends CI_Model
{

    public function readData()
    {
        $this->db->select('*');
        $this->db->from('TBL_GRUP');
        return $this->db->get()->result_array();
    }
    public function createData($data)
    {
        $this->db->insert('TBL_GRUP', $data);
    }
    public function updateData($id, $data)
    {
        $this->db->where('GRUP_ID', $id);
        $this->db->update('TBL_GRUP', $data);
    }
    public function deleteData($id)
    {
        $this->db->where('GRUP_ID', $id);
        $this->db->delete('TBL_GRUP');
    }
}
