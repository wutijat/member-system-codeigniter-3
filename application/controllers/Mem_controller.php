<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mem_controller extends CI_Controller
{
    public $header;
    public $footer;
    public $upload_config;
    public $ex_mem_picture;

    public function __construct()
    {
        parent::__construct();
        $this->config->load('mem_config');
        $this->header = $this->config->item('template')['header'];
        $this->footer = $this->config->item('template')['footer'];
        $this->ex_mem_picture = $this->config->item('member_ex_picture');
        $this->upload_config = $this->config->item('upload');
    }

    public function output($view, $data = NULL, $return = FALSE)
    {
        if ($return) {
            return $this->load->view($view, $data, $return);
        } else {
            $this->load->view($this->header, $data, $return);
            $this->load->view($view, NULL, $return);
            $this->load->view($this->footer, NULL, $return);
        }
    }
}

/* End of file Mem_controller.php */
