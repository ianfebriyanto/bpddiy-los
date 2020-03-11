<?php
function is_logged_in()
{
    $ci = &get_instance();
    if (!$ci->session->userdata('USERNAME')) {
        redirect('login');
    }
}
function readMenu()
{
    $ci = &get_instance();
    $GRUP_ID = $ci->session->userdata('GRUP_ID');
    return $ci->db->query("SELECT TBL_MENU.MENU_NAMA, TBL_MENU.MENU_LINK, TBL_MENU.MENU_ID, TBL_MENU.PARENT_ID FROM TBL_KEWENANGAN, TBL_GRUP, TBL_MENU WHERE TBL_GRUP.GRUP_ID=$GRUP_ID AND TBL_KEWENANGAN.GRUP_ID = TBL_GRUP.GRUP_ID AND TBL_KEWENANGAN.MENU_ID=TBL_MENU.MENU_ID AND TBL_MENU.PARENT_ID IS NULL")->result_array();
}
