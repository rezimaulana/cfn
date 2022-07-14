<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Career_center extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->lang->load('web');
        $this->load->model('m_cc');
    }
    function index(){
        redirect(base_url());
    }
    function announcement($offset = 0) {
        $limit = 8;
        $result = $this->m_cc->get_blogs($limit, $offset);
        $data['blog_list'] = $result['rows'];
        $data['num_results'] = $result['num_rows'];

        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = site_url("career_center/announcement");
        $config['total_rows'] = $data['num_results'];
        $config['per_page'] = $limit;

        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        $config['num_links'] = 5;
        
        $config['full_tag_open']="<ul class='pagination nobottommargin'>";
        $config['full_tag_close']="</ul>";
        $config['num_tag_open']="<li>";
        $config['num_tag_closen']="</li>";
        $config['cur_tag_open']="<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']="</a></li>";
        $config['next_tag_open']='<li>';
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li>';
        $config['prev_tag_close']='</li>';
        $config['first_tag_open']='<li>';
        $config['first_tag_close']='</li>';
        $config['last_tag_open']='<li>';
        $config['last_tag_close']='</li>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['title'] = 'Announcement - Character Formation Network';
        $this->load->view("back_end/header_main",$data);$this->load->view("back_end/top_bar",$data);
        $this->load->view("back_end/header",$data);$this->load->view("front_end/announcement",$data);
        $this->load->view("back_end/footer",$data);$this->load->view("back_end/footer_main",$data);
    }
    function read_announcement($id_pt){
        $data['title'] = 'Announcement - Character Formation Network';
        $data['result'] = $this->m_cc->get_blogs_by($id_pt);
        foreach($data['result'] as $rs) {$idd=$rs->id_user;$id_job=$rs->id_job;}
        $data['result2'] = $this->m_cc->get_apply_vacc($id_job);
        $data['result3'] = $this->m_cc->get_apply_vsel($id_job);
        $data['result4'] = $this->m_cc->get_rva($idd);
        $data['result5'] = $this->m_cc->get_ran($idd);
        $this->load->view("back_end/header_main",$data);$this->load->view("back_end/top_bar",$data);
        $this->load->view("back_end/header",$data);$this->load->view("front_end/read_announcement",$data);
        $this->load->view("back_end/footer",$data);$this->load->view("back_end/footer_main",$data);
    }
    function job_vacancy($offset = 0) {
        $limit = 10;
        $result = $this->m_cc->get_vacancy($limit, $offset);
        $data['blog_list'] = $result['rows'];
        $data['num_results'] = $result['num_rows'];

        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = site_url("career_center/job_vacancy");
        $config['total_rows'] = $data['num_results'];
        $config['per_page'] = $limit;

        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        $config['num_links'] = 5;
        
        $config['full_tag_open']="<ul class='pagination nobottommargin'>";
        $config['full_tag_close']="</ul>";
        $config['num_tag_open']="<li>";
        $config['num_tag_closen']="</li>";
        $config['cur_tag_open']="<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']="</a></li>";
        $config['next_tag_open']='<li>';
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li>';
        $config['prev_tag_close']='</li>';
        $config['first_tag_open']='<li>';
        $config['first_tag_close']='</li>';
        $config['last_tag_open']='<li>';
        $config['last_tag_close']='</li>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['title'] = 'Job Vacancy - Character Formation Network';
        $this->load->view("back_end/header_main",$data);$this->load->view("back_end/top_bar",$data);
        $this->load->view("back_end/header",$data);$this->load->view("front_end/job_vacancy",$data);
        $this->load->view("back_end/footer",$data);$this->load->view("back_end/footer_main",$data);
    }
    function read_vacancy($id_job){
        $data['title'] = 'Job Vacancy - Character Formation Network';
        $data['result'] = $this->m_cc->get_vacancy_by($id_job);
        foreach($data['result'] as $rs) {$idd=$rs->id_user_p;}
        $data['result4'] = $this->m_cc->get_rva4($idd);
        $data['result5'] = $this->m_cc->get_ran4($idd);
        $data['result7'] = $this->m_cc->get_apply_vacc($id_job);
        $data['result6'] = $this->m_cc->get_apply_vsel($id_job);
        $data['result_ann'] = $this->m_cc->get_link($id_job);
        $this->load->view("back_end/header_main",$data);$this->load->view("back_end/top_bar",$data);
        $this->load->view("back_end/header",$data);$this->load->view("front_end/read_vacancy",$data);
        $this->load->view("back_end/footer",$data);$this->load->view("back_end/footer_main",$data);
    }
    function apply_vacancy(){
        if($this->session->userdata('r_lvl')=='3'||$this->session->userdata('r_lvl')=='5'){
            $id_job = $this->input->post('id_job');
            $id_file = $this->input->post('id_file');
            $r_lvl = $this->input->post('r_lvl');
            if($this->m_cc->allow_to_av($id_job,$id_file,$r_lvl,)){   
                $this->session->set_flashdata('success', 'Request Send!');
                redirect(base_url().'career_center/read_vacancy/'.$id_job); 
            }  
            else{  
                $this->session->set_flashdata('error', 'Request already sent!'); 
                redirect(base_url().'career_center/read_vacancy/'.$id_job); 
            }
        }
        else{
            redirect(base_url().'career_center/read_vacancy/'.$id_job); 
        }
    }


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    




    function search(){
       
        $this->load->model('test');
        $s=$this->input->post('s');
        /* $s=$this->input->post('j_subject_id'); */
        $data['result'] = $this->test->search($s);
        echo $s;
        print_r($data);
    }


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


}