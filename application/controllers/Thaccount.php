<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Thaccount extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->lang->load('web');
        $this->load->model('t_track');
        $this->load->model('t_user');
        $this->load->model('t_user_d');
        $this->load->model('t_user_file');
        $this->load->model('t_country');
    }
	function index(){
        if($this->session->userdata('r_lvl')=='3'){
            redirect(base_url("thaccount/profile"));
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function profile(){
        if($this->session->userdata('r_lvl')=='3'){
            $data['title']="Profile - Character Formation Network";
            $id_user = $this->session->userdata("id_user");
            $data['result1'] = $this->t_track->getDatat($id_user);
            $data['result2'] = $this->t_user_file->getUfile($id_user);
            $data['result3'] = $this->t_user_d->getUinformation($id_user);
            $data['result4'] = $this->t_country->fetchTCO();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("3/panel3_nav",$data);$this->load->view("3/panel3_profile",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_uotable",$data);
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
                redirect(base_url("thaccount/profile"));  
            }  
            else{  
                $this->session->set_flashdata('error1', 'Wrong Password'); 
                redirect(base_url("thaccount/profile"));
            }  
        }  
        else{  
            $this->profile();
        }  
    }
    function cUinformation_validation(){
        $u_name = $this->input->post('u_name');
        $u_gender = $this->input->post('u_gender');
        $u_bloodtp = $this->input->post('u_bloodtp');
        $u_birthplace = $this->input->post('u_birthplace');
        $u_birthdate = $this->input->post('u_birthdate');
        $u_nation = $this->input->post('u_nation');
        $u_marital = $this->input->post('u_marital');
        $u_1_addr = $this->input->post('u_1_addr'); 
        $u_2_subdis = $this->input->post('u_2_subdis'); 
        $u_3_dist = $this->input->post('u_3_dist'); 
        $u_4_addr = $this->input->post('u_4_addr'); 
        $u_postcode = $this->input->post('u_postcode');
        $c_id = $this->input->post('c_id');
        $u_phone = $this->input->post('u_phone');
        $u_last_edu = $this->input->post('u_last_edu');
        $u_le_place = $this->input->post('u_le_place');
        $u_le_year_entry = $this->input->post('u_le_year_entry');
        $u_le_year_gradu = $this->input->post('u_le_year_gradu'); 
        if($this->t_user_d->cUserd($u_name, $u_gender, $u_bloodtp, $u_birthplace, $u_birthdate, $u_nation, $u_marital, $u_1_addr, $u_2_subdis, $u_3_dist, $u_4_addr, $u_postcode, $c_id, $u_phone, $u_last_edu, $u_le_place, $u_le_year_entry, $u_le_year_gradu)){   
            $this->session->set_flashdata('success2', 'Data Update!');
            redirect(base_url() . 'thaccount/profile');     
        }  
        else{  
            $this->session->set_flashdata('error2', 'Wrong Update'); 
            redirect(base_url() . 'thaccount/profile');
        }
    }
    function uploadRes_validation(){
        $config['upload_path'] = './uploads/user_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'pdf';
        $config['file_name'] = $this->session->userdata('id_user').'-RES';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( !$this->upload->do_upload('u_resume') ){
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error11',$error['error']);
            redirect(base_url("thaccount/profile")); 
        }
        else{
            $u_resume = $this->upload->data("file_name");
            $this->t_user_file->uploadRes($u_resume);
            $this->session->set_flashdata('success11', 'UPLOAD SUCCESS');
            redirect(base_url("thaccount/profile")); 
        }
    }
    function uploadCur_validation(){
        $config['upload_path'] = './uploads/user_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'pdf';
        $config['file_name'] = $this->session->userdata('id_user').'-CUR';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( !$this->upload->do_upload('u_cv') ){
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error12',$error['error']);
            redirect(base_url("thaccount/profile")); 
        }
        else{
            $u_cv = $this->upload->data("file_name");
            $this->t_user_file->uploadCur($u_cv);
            $this->session->set_flashdata('success12', 'UPLOAD SUCCESS');
            redirect(base_url("thaccount/profile")); 
        }
    }
    function uploadCer_validation(){
        $config['upload_path'] = './uploads/user_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'pdf';
        $config['file_name'] = $this->session->userdata('id_user').'-CER';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( !$this->upload->do_upload('u_certificate') ){
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error13',$error['error']);
            redirect(base_url("thaccount/profile")); 
        }
        else{
            $u_certificate = $this->upload->data("file_name");
            $this->t_user_file->uploadCer($u_certificate);
            $this->session->set_flashdata('success13', 'UPLOAD SUCCESS');
            redirect(base_url("thaccount/profile")); 
        }
    }
    function uploadQua_validation(){
        $config['upload_path'] = './uploads/user_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'pdf';
        $config['file_name'] = $this->session->userdata('id_user').'-QUA';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( !$this->upload->do_upload('u_qualification') ){
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error14',$error['error']);
            redirect(base_url("thaccount/profile")); 
        }
        else{
            $u_qualification = $this->upload->data("file_name");
            $this->t_user_file->uploadQua($u_qualification);
            $this->session->set_flashdata('success14', 'UPLOAD SUCCESS');
            redirect(base_url("thaccount/profile")); 
        }
    }
    function uploadPic_validation(){
        $config['upload_path'] = './uploads/user_file/'.$this->session->userdata('id_user');
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
        if( !$this->upload->do_upload('u_pic') ){
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error15',$error['error']);
            redirect(base_url("thaccount/profile")); 
        }
        else{
            $u_pic = $this->upload->data("file_name");
            $this->t_user_file->uploadPic($u_pic);
            $this->session->set_flashdata('success15', 'UPLOAD SUCCESS');
            redirect(base_url("thaccount/profile")); 
        }
    }
    function uploadAdd_validation(){
        $config['upload_path'] = './uploads/user_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = '*';
        $config['file_name'] = $this->session->userdata('id_user').'-ADD';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( !$this->upload->do_upload('u_add') ){
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error16',$error['error']);
            redirect(base_url("thaccount/profile")); 
        }
        else{
            $u_add = $this->upload->data("file_name");
            $this->t_user_file->uploadAdd($u_add);
            $this->session->set_flashdata('success16', 'UPLOAD SUCCESS');
            redirect(base_url("thaccount/profile")); 
        }
    }
}