<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fiaccount extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->lang->load('web');
        $this->load->model('t_track');
        $this->load->model('t_user');
        $this->load->model('t_user_file');
    }
	function index(){
        if($this->session->userdata('r_lvl')=='1'){
            redirect(base_url("foaccount/profile"));
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function profile(){
        if($this->session->userdata('r_lvl')=='1'){
            $data['title']="Profile - Character Formation Network";
            $id_user = $this->session->userdata("id_user");
            $data['result1'] = $this->t_track->getDatat($id_user);
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("1/panel1_nav",$data);$this->load->view("1/panel1_profile",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_table",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function cPassword_validation(){
        $this->form_validation->set_rules('u_pass', 'Password', 'required'); 
        $this->form_validation->set_rules('confirm_u_pass', 'Confirm Password', 'required|matches[u_pass]');
        if($this->form_validation->run()){    
            $u_pass = md5($this->input->post('u_pass')); 
            if($this->t_user->cPassword($u_pass)){   
                $this->session->set_flashdata('success1', 'Password Changed');
                redirect(base_url("foaccount/profile"));  
            }  
            else{  
                $this->session->set_flashdata('error1', 'Wrong Password'); 
                redirect(base_url("foaccount/profile"));
            }  
        }  
        else{  
            $this->profile();
        }  
    }
    function ufile(){
        if($this->session->userdata('r_lvl')=='1'){
            $data['title']="Users File - Character Formation Network";
            $data['result'] = $this->t_user_file->ufile1();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("1/panel1_nav",$data);$this->load->view("1/panel1_ufile",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_ufile",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function udata(){
        if($this->session->userdata('r_lvl')=='1'){
            $data['title']="Users Data - Character Formation Network";
            $data['result'] = $this->t_user_file->udata1();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("1/panel1_nav",$data);$this->load->view("1/panel1_udata",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_udata",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
}