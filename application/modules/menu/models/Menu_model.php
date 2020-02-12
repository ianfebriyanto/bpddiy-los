<?php

class Menu_model extends CI_Model
{
    public function readData()
    {
        return $this->db->get('TBL_MENU')->result_array();
    }
    public function createData($data)
    {
        $this->db->insert('TBL_MENU', $data);
    }
    public function updateData($id, $data)
    {
        $this->db->where('MENU_ID', $id);
        $this->db->update('TBL_MENU', $data);
    }
    public function deleteData($id)
    {
        $this->db->where('MENU_ID', $id);
        $this->db->delete('TBL_MENU');
    }
}
