<?php
/*
Management
Controller of Management Members
@author Supak Pukdam
@Create Date 2563-04-20
*/
require_once(APPPATH . 'controllers/Mem_controller.php');
class Management extends Mem_controller
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

    /*show management page
	* @name show
	* @input   -
	* @output  'v_management'  management page  OR 'v_authen' Authen page
	* @author Supak Pukdam
	* @Create Date 2563-04-20
	*/
    public function show()
    {
        if (get_cookie('authen') === null) {
            redirect(base_url(), 'refresh');
        } else {
            $this->load->model('M_register', 'mrg');
            $this->mrg->reg_admin = 'n';
            $this->mrg->reg_use = 'y';
            $rs_register_detail = $this->mrg->select(2);
            $rs_count_register = $this->mrg->select(0, null, 'COUNT(reg_id) AS all_member');
            $rs_count_now_register = $this->mrg->select(0, 'CAST(reg_timestamp AS DATE) = CURRENT_DATE()', 'COUNT(reg_id) AS all_member');
            $this->mrg->reg_use = 'n';
            $rs_count_cancel_register = $this->mrg->select(0, null, 'COUNT(reg_id) AS all_member');
            $data = [
                'rs_register_detail' => $rs_register_detail,
                'rs_count_register' => $rs_count_register,
                'rs_count_now_register' => $rs_count_now_register,
                'rs_count_cancel_register' => $rs_count_cancel_register
            ];
            $this->output('v_management', $data);
        }
    }

    /*show edit member page by reg_id
	* @name edit
	* @input   $id number of reg_id
	* @output  'v_edit' edit member page by reg_id  OR 'v_authen' Authen page
	* @author Supak Pukdam
	* @Create Date 2563-04-20
	*/
    public function edit($id)
    {
        if (get_cookie('authen') === null) {
            redirect(base_url(), 'refresh');
        } else {
            $this->load->model('M_register', 'mrg');
            $this->load->model('M_pf_name', 'mpn');
            $rs_pf_name = $this->mpn->select();
            $this->mrg->reg_id = $id;
            $rs_register_detail = $this->mrg->select(2);
            $data = [
                'rs_register_detail' => $rs_register_detail,
                'rs_pf_name' => $rs_pf_name
            ];
            $this->output('v_edit', $data);
        }
    }
}

/* End of file Management.php */
