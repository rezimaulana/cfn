<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logreg extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->lang->load('web');
        $this->load->model('t_country');
        $this->load->model('t_partner_d');
        $this->load->model('t_user'); 
    }
	function index(){
        if($this->session->userdata('id_user')!=''){
            redirect(base_url("intnog/default_redirect"));
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function instr(){
            $data['title']="Instruction - Character Formation Network";
            $this->load->view("back_end/header_main",$data);$this->load->view("back_end/top_bar",$data);
            $this->load->view("back_end/header",$data);$this->load->view("front_end/logreg",$data);
            $this->load->view("back_end/footer",$data);$this->load->view("back_end/footer_main",$data); 
    }
    function login(){
        if($this->session->userdata('id_user')!=''){
            redirect(base_url("intnog/default_redirect"));
        }
        else{
            $data['title']="Account Login - Character Formation Network";
            $this->load->view("back_end/header_main",$data);$this->load->view("back_end/top_bar",$data);
            $this->load->view("back_end/header",$data);$this->load->view("front_end/logreg",$data);
            $this->load->view("back_end/footer",$data);$this->load->view("back_end/footer_main",$data); 
        }
    }
    function regpu(){
        if($this->session->userdata('id_user')!=''){   
            redirect(base_url("intnog/default_redirect"));
        }
        else{
            $data['title']="Public Account Register - Character Formation Network";
            $this->load->view("back_end/header_main",$data);$this->load->view("back_end/top_bar",$data);
            $this->load->view("back_end/header",$data);$this->load->view("front_end/logreg",$data);
            $this->load->view("back_end/footer",$data);$this->load->view("back_end/footer_main",$data); 
        }
    }
    function regpa(){
        $data['title']="Partnership Request - Character Formation Network";
        $data['result'] = $this->t_country->fetchTCO();
        $this->load->view("back_end/header_main",$data);$this->load->view("back_end/top_bar",$data);
        $this->load->view("back_end/header",$data);$this->load->view("front_end/logreg",$data);
        $this->load->view("back_end/footer",$data);$this->load->view("back_end/footer_main",$data);  
    }
    /* original code */
    function login_validation()  
    {  
        $this->load->library('form_validation');  
        $this->form_validation->set_rules('u_email', 'Email', 'required');  
        $this->form_validation->set_rules('u_pass', 'Password', 'required');
        $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_captcha_validation');
        $this->form_validation->set_message('captcha_validation', 'Please check the the captcha form!');    
        if($this->form_validation->run())  
        {  
            //true  
            $u_email = $this->input->post('u_email');  
            $u_pass = md5($this->input->post('u_pass'));  
            //model function  
            $this->load->model('t_user');  
            if($this->t_user->login_valid($u_email, $u_pass))  
            {   
                if($this->session->userdata('u_block')=='N'&&$this->session->userdata('u_appr')=='Y')
                {
                    $this->load->model('t_track'); 
                    $this->t_track->in_session();
                    redirect(base_url("intnog/default_redirect"));
                }
                elseif($this->session->userdata('u_block')=='Y'&&$this->session->userdata('u_appr')=='N')
                {
                    $this->session->set_flashdata('error', 'Account request is rejected, please contact your administrator!');
                    $this->session->unset_userdata('id_user');$this->session->unset_userdata('u_email');$this->session->unset_userdata('r_lvl');
                    $this->session->unset_userdata('u_block');$this->session->unset_userdata('u_appr');$this->session->unset_userdata('r_rule');
                    redirect(base_url() . 'logreg/login');
                }
                elseif($this->session->userdata('u_block')=='Y'&&$this->session->userdata('u_appr')=='Y')
                {
                    $this->session->set_flashdata('error', 'Account is blocked!');
                    $this->session->unset_userdata('id_user');$this->session->unset_userdata('u_email');$this->session->unset_userdata('r_lvl');
                    $this->session->unset_userdata('u_block');$this->session->unset_userdata('u_appr');$this->session->unset_userdata('r_rule');
                    redirect(base_url() . 'logreg/login');
                }
                elseif($this->session->userdata('u_block')=='N'&&$this->session->userdata('u_appr')=='N')
                {
                    $this->session->set_flashdata('error', 'Account is waiting confirmation!');
                    $this->session->unset_userdata('id_user');$this->session->unset_userdata('u_email');$this->session->unset_userdata('r_lvl');
                    $this->session->unset_userdata('u_block');$this->session->unset_userdata('u_appr');$this->session->unset_userdata('r_rule');
                    redirect(base_url() . 'logreg/login');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Unknown Error!');
                    $this->session->unset_userdata('id_user');$this->session->unset_userdata('u_email');$this->session->unset_userdata('r_lvl');
                    $this->session->unset_userdata('u_block');$this->session->unset_userdata('u_appr');$this->session->unset_userdata('r_rule');
                    redirect(base_url() . 'logreg/login');
                }
            }  
            else  
            {  
                $this->session->set_flashdata('error', 'Invalid Email and Password');  
                redirect(base_url() . 'logreg/login');  
            }  
        }  
        else  
        {  
            //false  
            $this->login();
        }  
    }
    /* original code */
    function regpu_validation(){ 
        $this->form_validation->set_rules('u_email', 'Email', 'required');  
        $this->form_validation->set_rules('r_lvl', 'Account Type', 'required');
        $this->form_validation->set_rules('u_pass', 'Password', 'required'); 
        $this->form_validation->set_rules('confirm_u_pass', 'Confirm Password', 'required|matches[u_pass]');
        $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_captcha_validation');
        $this->form_validation->set_message('captcha_validation', 'Please check the the captcha form!');    
        if($this->form_validation->run()){  
            $u_email = $this->input->post('u_email');
            $r_lvl = $this->input->post('r_lvl');    
            $u_pass = md5($this->input->post('u_pass'));
            if($this->t_user->regpu_valid($u_email, $r_lvl, $u_pass)){   
                $this->session->set_flashdata('msg', 'Account Register');
                redirect(base_url() . 'logreg/regpu'); 
            }  
            else{  
                $this->session->set_flashdata('error', 'Account already exist!'); 
                redirect(base_url() . 'logreg/regpu');  
            }  
        }  
        else{  
            $this->regpu();
        }  
    }
    function regpa_validation(){ 
        $this->form_validation->set_rules('u_email', 'Email', 'required');
        $this->form_validation->set_rules('u_name', 'Company Name', 'required');
        $this->form_validation->set_rules('u_1_addr', 'Address', 'required');
        $this->form_validation->set_rules('u_2_subdis', 'Sub-district', 'required');
        $this->form_validation->set_rules('u_3_dist', 'District', 'required');
        $this->form_validation->set_rules('u_4_addr', 'State/Province', 'required');
        $this->form_validation->set_rules('u_postcode', 'Postcode', 'required');
        $this->form_validation->set_rules('c_id', 'Country', 'required');
        $this->form_validation->set_rules('u_phone', 'Telephone', 'required');
        $this->form_validation->set_rules('u_pass', 'Password', 'required');
        $this->form_validation->set_rules('confirm_u_pass', 'Confirm Password', 'required|matches[u_pass]');
        $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_captcha_validation');
        $this->form_validation->set_message('captcha_validation', 'Please check the the captcha form!');    
        if($this->form_validation->run()){
            $u_email = $this->input->post('u_email');
            $u_pass = md5($this->input->post('u_pass')); 
            $u_name = $this->input->post('u_name');
            $u_1_addr = $this->input->post('u_1_addr'); 
            $u_2_subdis = $this->input->post('u_2_subdis'); 
            $u_3_dist = $this->input->post('u_3_dist'); 
            $u_4_addr = $this->input->post('u_4_addr'); 
            $u_postcode = $this->input->post('u_postcode'); 
            $c_id = $this->input->post('c_id');
            $u_phone = $this->input->post('u_phone');
            if($this->t_partner_d->regpa_valid($u_email, $u_pass, $u_name, $u_1_addr, $u_2_subdis, $u_3_dist, $u_4_addr, $u_postcode, $c_id, $u_phone)){   
                $this->session->set_flashdata('msg', 'Request Send!');
                redirect(base_url() . 'logreg/regpa'); 
            }  
            else{  
                $this->session->set_flashdata('error', 'Account already exist/Request already sent!'); 
                redirect(base_url() . 'logreg/regpa');  
            }  
        }  
        else{
            $this->regpa();
        }  
    }
    function captcha_validation() {
        $recaptcha = trim($this->input->post('g-recaptcha-response'));
        $userIp= $this->input->ip_address();
        $secret='6LfdxZwUAAAAALz2ApfDcdHIJhVvc37yqY8Mwspg';
        $data = array(
            'secret' => "$secret",
            'response' => "$recaptcha",
            'remoteip' =>"$userIp"
        );
        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($verify);
        $status= json_decode($response, true);
        if(empty($status['success'])){
            return FALSE;
        }else{
            return TRUE;
        }
    }
}
