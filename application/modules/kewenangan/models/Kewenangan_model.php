<?php

class Kewenangan_model extends CI_Model
{
    public function readData()
    {
        return $this->db->get('TBL_KEWENANGAN')->result_array();
    }
    public function readNamaMenu()
    {
        $this->db->select('MENU_NAMA');
        $this->db->from('TBL_MENU');
        return $query = $this->db->get()->result_array();
    }
    public function createData($data)
    {
        $this->db->insert('TBL_KEWENANGAN', $data);
    }
    public function updateData($id, $data)
    {
        $this->db->where('KEWENANGAN_ID', $id);
        $this->db->update('TBL_KEWENANGAN', $data);
    }
    public function deleteData($id)
    {
        $this->db->where('KEWENANGAN_ID', $id);
        $this->db->delete('TBL_KEWENANGAN');
    }
}
