<?php

class Abc extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $style = $this->load->view('style', '', true);
        $script = $this->load->view('script', '', true);
        $data = [
            'tono',
            'tini',
            'rudi'
        ];
        $this->template->load('master', 'index', compact('style', 'script', 'data'));
    }
}
