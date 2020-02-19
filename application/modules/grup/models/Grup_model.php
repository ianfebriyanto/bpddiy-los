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
    public function readMenu($GRUP_ID)
    {
        return $this->db->query("SELECT TBL_MENU.MENU_NAMA, TBL_MENU.MENU_LINK  FROM TBL_KEWENANGAN, TBL_GRUP, TBL_MENU WHERE TBL_GRUP.GRUP_ID=$GRUP_ID AND TBL_KEWENANGAN.GRUP_ID = TBL_GRUP.GRUP_ID AND TBL_KEWENANGAN.MENU_ID=TBL_MENU.MENU_ID")->result_array();
    }
}
