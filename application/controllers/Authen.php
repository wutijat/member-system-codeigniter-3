<?php
require_once(APPPATH . 'controllers/Mem_controller.php');

class Authen extends Mem_controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function show()
    {
        if (get_cookie('authen') === null) {
            $this->output('v_authen');
        } else {
            redirect(base_url('Management/show'), 'refresh');
        }
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('M_register', 'mrg');
        $this->mrg->reg_username = $username;
        $this->mrg->reg_password = $password;
        $rs_select = $this->mrg->select();
        
        if (COUNT($rs_select)) {

            $cookie = [
                'name'   => 'authen',
                'value'   => $rs_select[0]->reg_id,
                'expire' => 60 * 60 * 0.5, //second // 30  minute to exprice
            ];

            $this->input->set_cookie($cookie); //get_cookie('authen')

            if ($rs_select[0]->reg_admin == 'y') {
                redirect(base_url('Management/show'), 'refresh');
            }
        } else {
            $this->session->set_flashdata('login_failed', true);
            redirect(base_url(), 'refresh');
        }
    }

    public function logout()
    {
        if (get_cookie('authen') !== null) {
            delete_cookie('authen');
        }
        redirect(base_url(), 'refresh');
    }
}
