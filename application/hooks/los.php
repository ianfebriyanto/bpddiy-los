<?php
class los
{
    public function index()
    {
        $ci = &get_instance();
        if ($ci->router->class == 'login') {
        } else {
            if (!$ci->session->userdata('USERNAME')) {
                $ci->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda harus login terlebih dahulu.   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button> </div>');
                redirect('login');
            }
            ini_set('date.timezone', 'Asia/Jakarta');
        }
    }
}
