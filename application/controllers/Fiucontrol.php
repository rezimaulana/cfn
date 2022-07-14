<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fiucontrol extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->lang->load('web');
        $this->load->model('t_user');
        $this->load->model('t_track');
    }
	function index(){
        if($this->session->userdata('r_lvl')=='1'){
            redirect(base_url("fiucontrol/unblock_user"));
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function root_change_user($id_user){
        if($this->session->userdata('r_lvl')=='1'){
            $this->t_user->login_root($id_user);
            redirect(base_url("intnog/default_redirect"));
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function root_back_user(){
        if($this->session->userdata('l_lvl')=='121096'){
            $this->t_user->logout_root();
            redirect(base_url("fiucontrol/allowed_user"));
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function allowed_user(){
        if($this->session->userdata('r_lvl')=='1'){
            $data['title']="Allowed User - Character Formation Network";
            $data['result'] = $this->t_user->getAllowuser();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("1/panel1_nav",$data);$this->load->view("1/panel1_uallow",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_table",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function activity_user(){
        if($this->session->userdata('r_lvl')=='1'){
            $data['title']="Users Activity - Character Formation Network";
            $data['result'] = $this->t_track->getAuser();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("1/panel1_nav",$data);$this->load->view("1/panel1_uactivity",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_table",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function session_user(){
        if($this->session->userdata('r_lvl')=='1'){
            $data['title']="Users Session - Character Formation Network";
            $data['result'] = $this->t_track->getSuser();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("1/panel1_nav",$data);$this->load->view("1/panel1_uses",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_table",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function block_user(){
        if($this->session->userdata('r_lvl')=='1'){
            $data['title']="Block User - Character Formation Network";
            if($this->input->post('bulk_action_submit')){
                $ids = $this->input->post('checked_id');
                if(!empty($ids)){
                    $action = $this->t_user->block($ids);
                    if($action){
                        $data['statusMsg'] = 'Operation have been perform successfully.';
                    }else{
                        $data['statusMsg'] = 'Some problem occurred, please try again!';
                    }
                }else{
                    $data['statusMsg'] = 'Please select at least 1 record to perform this operation!';
                }
            }
            $data['result_action'] = $this->t_user->getRowsblock();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("1/panel1_nav",$data);$this->load->view("1/panel1_ublock",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_table_mselect",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function unblock_user(){
        if($this->session->userdata('r_lvl')=='1'){
            $data['title']="Unblock User - Character Formation Network";
            if($this->input->post('bulk_action_submit')){
                $ids = $this->input->post('checked_id');
                if(!empty($ids)){
                    $action = $this->t_user->unblock($ids);
                    if($action){
                        $data['statusMsg'] = 'Operation have been perform successfully.';
                    }else{
                        $data['statusMsg'] = 'Some problem occurred, please try again!';
                    }
                }else{
                    $data['statusMsg'] = 'Please select at least 1 record to perform this operation!';
                }
            }
            $data['result_action'] = $this->t_user->getRowsunblock();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("1/panel1_nav",$data); $this->load->view("1/panel1_unblock",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_table_mselect",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function confirm_user(){
        if($this->session->userdata('r_lvl')=='1'){
            $data['title']="Confirm User - Character Formation Network";
            if($this->input->post('bulk_action_submit')){
                $ids = $this->input->post('checked_id');
                if(!empty($ids)){
                    $action = $this->t_user->confirm($ids);
                    if($action){
                        $data['statusMsg'] = 'Operation have been perform successfully.';
                    }else{
                        $data['statusMsg'] = 'Some problem occurred, please try again!';
                    }
                }else{
                    $data['statusMsg'] = 'Please select at least 1 record to perform this operation!';
                }
            }
            $data['result_action'] = $this->t_user->getRowsconfirm();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("1/panel1_nav",$data);$this->load->view("1/panel1_uconfirm",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_table_mselect",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function reject_user(){
        if($this->session->userdata('r_lvl')=='1'){
            $data['title']="Reject User - Character Formation Network";
            if($this->input->post('bulk_action_submit')){
                $ids = $this->input->post('checked_id');
                if(!empty($ids)){
                    $action = $this->t_user->reject($ids);
                    if($action){
                        $data['statusMsg'] = 'Operation have been perform successfully.';
                    }else{
                        $data['statusMsg'] = 'Some problem occurred, please try again!';
                    }
                }else{
                    $data['statusMsg'] = 'Please select at least 1 record to perform this operation!';
                }
            }
            $data['result_action'] = $this->t_user->getRowsreject();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("1/panel1_nav",$data);$this->load->view("1/panel1_ureject",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_table_mselect",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
}