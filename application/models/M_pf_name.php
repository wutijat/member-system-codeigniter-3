<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pf_name extends CI_Model
{
    public $pfn_id;
    public $pfn_th;
    public $pfn_en;
    public $pfn_full_th;
    public $pfn_full_en;


    public function __construct()
    {
        parent::__construct();
    }

    public function select()
    {
        $query = $this->db->get('pf_name');
        $query = $query->result();
        return $query;
    }
}

/* End of file M_pf_name.php */
