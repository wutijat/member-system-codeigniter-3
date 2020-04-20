<?php
/*
Mem_controller
Controller of Member System
@author Supak Pukdam
@Create Date 2563-04-20
*/
defined('BASEPATH') or exit('No direct script access allowed');
class Mem_controller extends CI_Controller
{
    public $header; // config header template path
    public $footer; // config footer template path
    public $upload_config; // config file upload path
    public $ex_mem_picture; // config picture path

    /*initail value
	* @name __construct
	* @input   -
	* @output  -
	* @author Supak Pukdam
	* @Create Date 2563-04-20
	*/
    public function __construct()
    {
        parent::__construct();
        $this->config->load('mem_config');
        $this->load->helper('mem_helper');
        $this->header = $this->config->item('template')['header'];
        $this->footer = $this->config->item('template')['footer'];
        $this->ex_mem_picture = $this->config->item('member_ex_picture');
        $this->upload_config = $this->config->item('upload');
    }

    /*display template output of system
	* @name output
	* @input   $view name of view , $data data of view , $return to return view or not
	* @output  display of view
	* @author Supak Pukdam
	* @Create Date 2563-04-20
	*/
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
