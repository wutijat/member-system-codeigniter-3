<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_member extends CI_Model
{

    public $mem_id;
    public $mem_fname;
    public $mem_lname;
    public $mem_picture;
    public $mem_addr;
    public $mem_tel;
    public $mem_email;
    public $mem_fb;
    public $mem_ig;
    public $mem_reg_id;
    public $mem_pfn_id;


    public function __construct()
    {
        parent::__construct();
    }

    public function insert()
    {
        $this->db->insert('member', $this);
    }

    public function update()
    {
        $this->db->where_in("mem_id", $this->mem_id);
        $query = $this->db->update('member', $this);
        return $query;
    }
}

/* End of file M_member.php */
