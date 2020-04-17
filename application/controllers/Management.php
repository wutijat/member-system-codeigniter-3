<?php
require_once(APPPATH . 'controllers/Mem_controller.php');


class Management extends Mem_controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function show()
    {
        if (get_cookie('authen') === null) {
            redirect(base_url(), 'refresh');
        } else {
            $this->load->model('M_register', 'mrg');
            $this->mrg->reg_admin = 'n';
            $this->mrg->reg_use = 'y';
            $rs_register_detail = $this->mrg->select(2);
            $data = [
                'rs_register_detail' => $rs_register_detail
            ];
            $this->output('v_management', $data);
        }
    }

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
