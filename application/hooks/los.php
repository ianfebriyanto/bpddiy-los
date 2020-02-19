<?php
class los
{
    public function index()
    {
        $ci = &get_instance();
        if ($ci->router->class == 'login') {
        } else {
            if (!$ci->session->userdata('USERNAME')) {
                redirect('login');
            }
            ini_set('date.timezone', 'Asia/Jakarta');
        }
    }
}
