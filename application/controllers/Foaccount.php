<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Foaccount extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->lang->load('web');
        $this->load->model('t_track');
        $this->load->model('t_partner_d');
        $this->load->model('t_user');
        $this->load->model('t_country');
    }
	function index(){
        if($this->session->userdata('r_lvl')=='4'){
            redirect(base_url("foaccount/profile"));
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function profile(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="Profile - Character Formation Network";
            $id_user = $this->session->userdata("id_user");
            $data['result1'] = $this->t_track->getDatat($id_user);
            $data['result2'] = $this->t_partner_d->getDatapd($id_user);
            $data['resultid'] = $this->t_country->fetchTCO();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_profile",$data);
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
    function cPinformation_validation(){
        $this->form_validation->set_rules('u_name', 'Company Name', 'required');
        $this->form_validation->set_rules('u_1_addr', 'Address', 'required');
        $this->form_validation->set_rules('u_2_subdis', 'Sub-district', 'required');
        $this->form_validation->set_rules('u_3_dist', 'District', 'required');
        $this->form_validation->set_rules('u_4_addr', 'State/Province', 'required');
        $this->form_validation->set_rules('u_postcode', 'Postcode', 'required');
        $this->form_validation->set_rules('u_phone', 'Telephone', 'required');
        if($this->form_validation->run()){
            $u_name = $this->input->post('u_name');
            $u_1_addr = $this->input->post('u_1_addr'); 
            $u_2_subdis = $this->input->post('u_2_subdis'); 
            $u_3_dist = $this->input->post('u_3_dist'); 
            $u_4_addr = $this->input->post('u_4_addr'); 
            $u_postcode = $this->input->post('u_postcode');
            $u_phone = $this->input->post('u_phone');
            $p_desc = $this->input->post('p_desc');
            $p_cp = $this->input->post('p_cp'); 
            $c_id = $this->input->post('c_id'); 
            if($this->t_partner_d->cPartnerd($u_name, $u_1_addr, $u_2_subdis, $u_3_dist, $u_4_addr, $u_postcode, $u_phone, $p_desc, $p_cp, $c_id)){   
                $this->session->set_flashdata('success2', 'Data Update!');
                redirect(base_url() . 'foaccount/profile');     
            }  
            else{  
                $this->session->set_flashdata('error2', 'Wrong Update'); 
                redirect(base_url() . 'foaccount/profile');  
            }  
        }
        else{
            $this->profile();
        }
    }
    function cPpicture_validation(){
        $config['upload_path'] = './uploads/partner_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $this->session->userdata('id_user').'-PIC';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if($this->upload->do_upload('u_pic')){
            $u_pic = $this->upload->data("file_name");
            $this->t_partner_d->p4_uploadName($u_pic);
            $chpath='./uploads/partner_file/'.$this->session->userdata('id_user').'/'.$u_pic;
            chmod($chpath,0777);
            $this->session->set_flashdata('success3', 'UPLOAD SUCCESS');
            redirect(base_url("foaccount/profile")); 
        }
        elseif ( !$this->upload->do_upload('u_pic') ){
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error3',$error['error']);
            redirect(base_url("foaccount/profile")); 
        }
    }
}