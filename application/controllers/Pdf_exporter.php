<?php
/*
Pdf_exporter
Controller of Pdf Exporter File
@author Supak Pukdam
@Create Date 2563-04-20
*/
require_once(APPPATH . 'controllers/Mem_controller.php');
class Pdf_exporter extends Mem_controller
{

    public $mpdf; // instance of mpdf library

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
        $this->mpdf = new \Mpdf\Mpdf();
    }

    /*export function of pdf 
	* @name export
	* @input   $view name of view , $data data of view 
	* @output  pdf file  OR 'v_authen' Authen page
	* @author Supak Pukdam
	* @Create Date 2563-04-20
	*/
    public function export($view, $data = [])
    {

        if (get_cookie('authen') === null) {
            redirect(base_url(), 'refresh');
        } else {
            $this->mpdf->showImageErrors = true;
            $this->mpdf->useAdobeCJK = true;
            $this->mpdf->autoScriptToLang = true;
            $this->mpdf->autoLangToFont = true;
            $html = $this->load->view($view, $data, true);
            $this->mpdf->WriteHTML($html);
            $this->mpdf->Output();
        }
    }

    /*export pdf by reg_id 
	* @name get
	* @input   $id number of reg_id
	* @output  pdf file of member by id  OR 'v_authen' Authen page
	* @author Supak Pukdam
	* @Create Date 2563-04-20
	*/
    public function get($id = null)
    {
        if (get_cookie('authen') === null) {
            redirect(base_url(), 'refresh');
        } else {
            $this->load->model('M_register', 'mrg');
            $this->mrg->reg_admin = 'n';
            $this->mrg->reg_use = 'y';
            if (isset($id)) {
                $this->mrg->reg_id = $id;
            }
            $rs_register_detail = $this->mrg->select(2);
            $data = ['rs_register_detail' => $rs_register_detail];
            $this->export('e_application', $data);
        }
    }
}

/* End of file Pdf_exporter.php */
