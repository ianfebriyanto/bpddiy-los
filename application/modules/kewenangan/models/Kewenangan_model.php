<?php

class Kewenangan_model extends CI_Model
{
    public function readData()
    {
        $this->db->select('*');
        $this->db->from('TBL_KEWENANGAN');
        $this->db->join('TBL_MENU', 'TBL_MENU.MENU_ID = TBL_KEWENANGAN.MENU_ID');
        $this->db->join('TBL_GRUP', 'TBL_GRUP.GRUP_ID = TBL_KEWENANGAN.GRUP_ID');
        return $this->db->get()->result_array();
    }
    public function readNamaMenu()
    {
        $this->db->select('MENU_NAMA, MENU_ID');
        $this->db->from('TBL_MENU');
        return $this->db->get()->result_array();
    }
    public function readNamaGrup()
    {
        $this->db->select('GRUP_NAMA, GRUP_ID');
        $this->db->from('TBL_GRUP');
        return $this->db->get()->result_array();
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
