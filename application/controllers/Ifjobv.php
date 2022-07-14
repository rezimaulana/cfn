<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ifjobv extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->lang->load('web');
        $this->load->model('t_user_file');
        $this->load->model('t_job');
    }
    function index(){
        if($this->session->userdata('r_lvl')=='5'){
            redirect(base_url("ifaccount/profile"));
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function ufile(){
        if($this->session->userdata('r_lvl')=='5'){
            $data['title']="User File - Character Formation Network";
            $data['result'] = $this->t_user_file->ufileth();
            $id_user='';
            foreach ($data['result'] as $row){$id_user=$row->id_user_p;}
            
            $data['result2']=$this->t_job->get_itemsf($id_user);
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("5/panel5_nav",$data);$this->load->view("5/panel5_ufile",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_ufile",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function udata(){
        if($this->session->userdata('r_lvl')=='5'){
            $data['title']="User Data - Character Formation Network";
            $data['result'] = $this->t_user_file->udatath();
            $id_user='';
            foreach ($data['result'] as $row){$id_user=$row->id_user_p;}
            
            $data['result2']=$this->t_job->get_itemsf($id_user);
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("5/panel5_nav",$data);$this->load->view("5/panel5_udata",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_ufile",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function change_ufile($id_apply,$state_fi){
        $this->t_user_file->c_ufile($id_apply,$state_fi);
        $this->session->set_flashdata('success', 'File Access Changed FOR '.$id_apply);
        redirect(base_url("ifjobv/ufile"));   
    }
    function print_item($id_apply){
        $this->load->library('Pdf');
        $data['result']=$this->t_job->get_itemsa($id_apply);
        foreach ($data['result'] as $row){$id_job=$row->id_job;$id_file=$row->id_file;}
        $data['result2']=$this->t_job->get_itemsb($id_job);
        foreach ($data['result2'] as $row2){$id_user=$row2->id_user_p;}
        $data['result3']=$this->t_job->get_itemsc($id_user);
        $data['result4']=$this->t_job->get_itemsd($id_file);
        $data['result5']=$this->t_job->get_itemse($id_job);
        $this->load->view('front_end/print_panel_35',$data);
    }

}