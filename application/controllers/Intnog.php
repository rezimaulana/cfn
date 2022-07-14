<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Intnog extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->lang->load('web');
        $this->load->model('t_track');
        $this->load->model('m_cc');
    }
    function index(){
        $data['title']="Dashboard - Character Formation Network";
        $data['result1']=$this->m_cc->get_vac();
        $data['result2']=$this->m_cc->get_ann();
        $this->load->view("back_end/header_main",$data);$this->load->view("back_end/top_bar",$data);
        $this->load->view("back_end/header",$data);$this->load->view("front_end/dashboard",$data);
        $this->load->view("back_end/footer",$data);$this->load->view("back_end/footer_main",$data);
    }
    function default_redirect(){
        if($this->session->userdata('r_lvl')=='1'){
            redirect(base_url("fiaccount/profile"));
        }
        elseif($this->session->userdata('r_lvl')=='2'){
            redirect(base_url("seaccount/profile"));
        }
        elseif($this->session->userdata('r_lvl')=='3'){
            redirect(base_url("thaccount/profile"));
        }
        elseif($this->session->userdata('r_lvl')=='4'){
            redirect(base_url("foaccount/profile"));
        }
        elseif($this->session->userdata('r_lvl')=='5'){
            redirect(base_url("ifaccount/profile"));
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function logout(){  
        $this->t_track->out_session();$this->session->sess_destroy();redirect(base_url());
    }
}