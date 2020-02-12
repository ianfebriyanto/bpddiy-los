<?php

class Grup_model extends CI_Model
{
    public function readData()
    {
        return $this->db->get('TBL_GRUP')->result_array();
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
