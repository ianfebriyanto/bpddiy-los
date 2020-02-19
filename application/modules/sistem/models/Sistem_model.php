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
    public function readMenu($GRUP_ID)
    {
        return $this->db->query("SELECT TBL_MENU.MENU_NAMA, TBL_MENU.MENU_LINK, TBL_MENU.MENU_ID  FROM TBL_KEWENANGAN, TBL_GRUP, TBL_MENU WHERE TBL_GRUP.GRUP_ID=$GRUP_ID AND TBL_KEWENANGAN.GRUP_ID = TBL_GRUP.GRUP_ID AND TBL_KEWENANGAN.MENU_ID=TBL_MENU.MENU_ID")->result_array();
    }
    public function readMenuID($GRUP_ID)
    {
        return $this->db->query("SELECT TBL_MENU.MENU_ID  FROM TBL_KEWENANGAN, TBL_GRUP, TBL_MENU WHERE TBL_GRUP.GRUP_ID=$GRUP_ID AND TBL_KEWENANGAN.GRUP_ID = TBL_GRUP.GRUP_ID AND TBL_KEWENANGAN.MENU_ID=TBL_MENU.MENU_ID")->result_array();
    }
}
