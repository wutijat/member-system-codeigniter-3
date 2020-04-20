<?php
/*
Authen
Controller of Authen Admin
@author Supak Pukdam
@Create Date 2563-04-20
*/
require_once(APPPATH . 'controllers/Mem_controller.php');
class Authen extends Mem_controller
{
    /*Inherited from Mem_controller
	* @name __construct
	* @input   -
	* @output  -
	* @author Supak Pukdam
	* @Create Date 2563-04-20
	*/
    public function __construct()
    {
        parent::__construct();
    }

    /*show authen page
	* @name show
	* @input   -
	* @output  'v_authen' Authen page OR 'v_management' management page
	* @author Supak Pukdam
	* @Create Date 2563-04-20
	*/
    public function show()
    {
        if (get_cookie('authen') === null) {
            $this->output('v_authen');
        } else {
            redirect(base_url('Management/show'), 'refresh');
        }
    }

    /*login logic
	* @name login
	* @input   @post[username] username form authen page , @post[password] password form authen page
	* @output  'v_management' management page OR 'v_authen' Authen page
	* @author Supak Pukdam
	* @Create Date 2563-04-20
	*/
    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('M_register', 'mrg');
        $this->mrg->reg_username = $username;
        $this->mrg->reg_password = $password;
        $rs_select = $this->mrg->select();

        if (COUNT($rs_select) && $rs_select[0]->reg_admin == 'y') {

            $this->input->set_cookie(make_authen_cooke($rs_select)); //get_cookie('authen')

            redirect(base_url('Management/show'), 'refresh');
        } else {
            $this->session->set_flashdata('login_failed', true);
            redirect(base_url(), 'refresh');
        }
    }

    /*logout logic
	* @name logout
	* @input   -
	* @output  'v_authen' Authen page
	* @author Supak Pukdam
	* @Create Date 2563-04-20
	*/
    public function logout()
    {
        if (get_cookie('authen') !== null) {
            delete_cookie('authen');
        }
        redirect(base_url(), 'refresh');
    }
}

/* End of file Authen.php */
