<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_register extends CI_Model
{
    public $reg_id;
    public $reg_username;
    public $reg_password;
    public $reg_timestamp;
    public $reg_use;
    public $reg_admin;

    public function __construct()
    {
        parent::__construct();
    }

    public function insert()
    {
        $this->db->insert('register', $this);
    }

    public function select($join = 0, $fill = '*')
    {
        // default *
        $this->db->select($fill);
        $this->db->from('register AS reg');

        // 2 to join all
        if ($join > 0) {
            $this->db->join('member AS mem', 'reg.reg_id = mem.mem_reg_id', 'left');
        }
        if ($join > 1) {
            $this->db->join('pf_name AS pfn', 'mem.mem_pfn_id = pfn.pfn_id', 'left');
        }

        // where by set arrtibute
        if (isset($this->reg_username)) {
            $this->db->where('reg_username', $this->reg_username);
        }
        if (isset($this->reg_id)) {
            $this->db->where('reg_id', $this->reg_id);
        }
        if (isset($this->reg_password)) {
            $this->db->where('reg_password', $this->reg_password);
        }
        if (isset($this->reg_use)) {
            $this->db->where('reg_use', $this->reg_use);
        }
        if (isset($this->reg_admin)) {
            $this->db->where('reg_admin', $this->reg_admin);
        }

        $query = $this->db->get();
        $query = $query->result();
        return $query;
    }

    public function update()
    {
        $this->db->where_in("reg_id", $this->reg_id);
        $query = $this->db->update('register', $this);
        return $query;
    }

    public function update_reg_use()
    {
        $this->db->where_in("reg_id", $this->reg_id);
        $query = $this->db->update('register', ['reg_use' => $this->reg_use]);
        return $query;
    }
}

/* End of file M_reg_status.php */
