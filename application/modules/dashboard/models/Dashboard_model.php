<?php

class Dashboard_model extends CI_Model
{
    public function readMenu($GRUP_ID)
    {
        return $this->db->query("SELECT TBL_MENU.MENU_NAMA, TBL_MENU.MENU_LINK  FROM TBL_KEWENANGAN, TBL_GRUP, TBL_MENU WHERE TBL_GRUP.GRUP_ID=$GRUP_ID AND TBL_KEWENANGAN.GRUP_ID = TBL_GRUP.GRUP_ID AND TBL_KEWENANGAN.MENU_ID=TBL_MENU.MENU_ID")->result_array();
    }
}
