<?php
class los
{
    public function index()
    {
        $ci = &get_instance();
        if ($ci->router->class == 'login') {
        } else {
            if (!$ci->session->userdata('USERNAME')) {
                $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Anda harus login terlebih dahulu. </div>');
                redirect('login');
            }
            ini_set('date.timezone', 'Asia/Jakarta');
        }
    }
}
