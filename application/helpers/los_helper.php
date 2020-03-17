<?php
function is_logged_in()
{
    $ci = &get_instance();
    if (!$ci->session->userdata('USERNAME')) {
        redirect('login');
    }
}

function readParent()
{
    $ci = &get_instance();
    return $ci->db->query("SELECT MENU_ID, MENU_NAMA,MENU_LINK FROM TBL_MENU WHERE PARENT_ID IS NULL")->result_array();
}
function readMenu()
{
    $ci = &get_instance();
    $GRUP_ID = $ci->session->userdata('GRUP_ID');
    return $ci->db->query("SELECT m.*, (select d.menu_nama from tbl_menu d where d.MENU_ID = m.PARENT_ID) parent_menu_name from TBL_MENU m , TBL_KEWENANGAN, TBL_GRUP  WHERE TBL_GRUP.GRUP_ID=$GRUP_ID AND TBL_KEWENANGAN.GRUP_ID = TBL_GRUP.GRUP_ID AND TBL_KEWENANGAN.MENU_ID=m.MENU_ID")->result_array();
}
