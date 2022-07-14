<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fojoba extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->lang->load('web');
        $this->load->model('t_job');
        $this->load->model('t_partner_t');
    }
    function index(){
        if($this->session->userdata('r_lvl')=='4'){
            redirect(base_url("foaccount/profile"));
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function anvacancy(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="Announce Job Vacancy - Character Formation Network";
            $data['result'] = $this->t_job->getanvacancy();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_anvacancy",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_an",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function nanvacancy(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="New Job Vacancy - Character Formation Network";
            $this->load->view("back_end/panel_header_main",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_nanvacancy",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_nan",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function nanvacancyid(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="New Job Vacancy - Character Formation Network";
            $this->load->view("back_end/panel_header_main",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_nanvacancyid",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_nan",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function nanvacancyen(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="New Job Vacancy - Character Formation Network";
            $this->load->view("back_end/panel_header_main",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_nanvacancyen",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_nan",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function eanvacancy($id_job){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="Edit Job Vacancy - Character Formation Network";
            $data['result'] = $this->t_job->geteanvacancy($id_job);
            $this->load->view("back_end/panel_header_main",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_eanvacancy",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_nan",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function vnanvacancy(){
        $id_user = $this->session->userdata("id_user");
        $nid = 'JOB-';$nunix = now();$nsplit = '-';$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');$serial = '';$max = count($chars)-1;
        for($i=0;$i<20;$i++){
            $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
        }
        $id_job = $nid.$nunix.$nsplit.$serial;
        $config['upload_path'] = './uploads/partner_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $id_job.'-PIC';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( $this->upload->do_upload('j_pc') ){
            $j_pc = $this->upload->data("file_name");
            $this->t_job->nanvacancy($id_job,$j_pc);
            $chpath='./uploads/partner_file/'.$this->session->userdata('id_user').'/'.$j_pc;
            chmod($chpath,0777);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            redirect(base_url() . 'fojoba/anvacancy');  
        }
        elseif( !$this->upload->do_upload('j_pc') ){
            $j_pc;
            $this->t_job->nanvacancy($id_job,$j_pc);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error',$error['error']); 
            redirect(base_url() . 'fojoba/anvacancy');  
        }
    }
    function vnanvacancyid(){
        $id_user = $this->session->userdata("id_user");
        $nid = 'JOB-';$nunix = now();$nsplit = '-';$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');$serial = '';$max = count($chars)-1;
        for($i=0;$i<20;$i++){
            $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
        }
        $id_job = $nid.$nunix.$nsplit.$serial;
        $config['upload_path'] = './uploads/partner_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $id_job.'-PIC';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( $this->upload->do_upload('j_pc') ){
            $j_pc = $this->upload->data("file_name");
            $this->t_job->nanvacancyid($id_job,$j_pc);
            $chpath='./uploads/partner_file/'.$this->session->userdata('id_user').'/'.$j_pc;
            chmod($chpath,0777);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            redirect(base_url() . 'fojoba/anvacancy');  
        }
        elseif( !$this->upload->do_upload('j_pc') ){
            $j_pc;
            $this->t_job->nanvacancyid($id_job,$j_pc);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error',$error['error']); 
            redirect(base_url() . 'fojoba/anvacancy');  
        }
    }
    function vnanvacancyen(){
        $id_user = $this->session->userdata("id_user");
        $nid = 'JOB-';$nunix = now();$nsplit = '-';$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');$serial = '';$max = count($chars)-1;
        for($i=0;$i<20;$i++){
            $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
        }
        $id_job = $nid.$nunix.$nsplit.$serial;
        $config['upload_path'] = './uploads/partner_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $id_job.'-PIC';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( $this->upload->do_upload('j_pc') ){
            $j_pc = $this->upload->data("file_name");
            $this->t_job->nanvacancyen($id_job,$j_pc);
            $chpath='./uploads/partner_file/'.$this->session->userdata('id_user').'/'.$j_pc;
            chmod($chpath,0777);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            redirect(base_url() . 'fojoba/anvacancy');  
        }
        elseif( !$this->upload->do_upload('j_pc') ){
            $j_pc;
            $this->t_job->nanvacancyen($id_job,$j_pc);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error',$error['error']); 
            redirect(base_url() . 'fojoba/anvacancy');  
        }
    }
    function veanvacancy($id_job){
        $config['upload_path'] = './uploads/partner_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $id_job.'-PIC';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( $this->upload->do_upload('j_pc') ){
            $j_pc = $this->upload->data("file_name");
            $this->t_job->eanvacancy1($id_job,$j_pc);
            $chpath='./uploads/partner_file/'.$this->session->userdata('id_user').'/'.$j_pc;
            chmod($chpath,0777);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            redirect(base_url() . 'fojoba/anvacancy');  
        }
        elseif( !$this->upload->do_upload('j_pc') ){
            $this->t_job->eanvacancy2($id_job);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error',$error['error']); 
            redirect(base_url() . 'fojoba/anvacancy');  
        }
    }
    function anselect(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="Announce Applicant Selection - Character Formation Network";
            $data['result'] = $this->t_partner_t->getPT();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_anselect",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_an",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function nanselect(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="New Announcement - Character Formation Network";
            $data['result']=$this->t_job->getanvacancy();
            $this->load->view("back_end/panel_header_main",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_nanselect",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_nan",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function nanselectid(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="New Announcement - Character Formation Network";
            $data['result']=$this->t_job->getanvacancy();
            $this->load->view("back_end/panel_header_main",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_nanselectid",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_nan",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function nanselecten(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="New Announcement - Character Formation Network";
            $data['result']=$this->t_job->getanvacancy();
            $this->load->view("back_end/panel_header_main",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_nanselecten",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_nan",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function eanselect($id_pt){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="Edit Announcement - Character Formation Network";
            $data['result'] = $this->t_partner_t->getPTby($id_pt);
            $this->load->view("back_end/panel_header_main",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_eanselect",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_nan",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function danselect($id_pt){
        $this->t_partner_t->danselect($id_pt);
        $this->session->set_flashdata('success', 'Operation Complete Successfully!');
        redirect(base_url() . 'fojoba/anselect'); 
    }
    function vnanselect(){
        $id_user = $this->session->userdata("id_user");
        $nid = 'ANNS-';$nunix = now();$nsplit = '-';$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');$serial = '';$max = count($chars)-1;
        for($i=0;$i<20;$i++){
            $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
        }
        $id_pt = $nid.$nunix.$nsplit.$serial;
        $config['upload_path'] = './uploads/partner_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $id_pt.'-PIC';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( $this->upload->do_upload('pt_pic') ){
            $pt_pic = $this->upload->data("file_name");
            $this->t_partner_t->nanselect($id_pt,$pt_pic);
            $chpath='./uploads/partner_file/'.$this->session->userdata('id_user').'/'.$pt_pic;
            chmod($chpath,0777);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            redirect(base_url() . 'fojoba/anselect');  
        }
        elseif( !$this->upload->do_upload('pt_pic') ){
            $pt_pic;$this->t_partner_t->nanselect($id_pt,$pt_pic);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            $error = array('error' => $this->upload->display_errors());$this->session->set_flashdata('error',$error['error']); 
            redirect(base_url() . 'fojoba/anselect');  
        }
    }
    function vnanselectid(){
        $id_user = $this->session->userdata("id_user");
        $nid = 'ANNS-';$nunix = now();$nsplit = '-';$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');$serial = '';$max = count($chars)-1;
        for($i=0;$i<20;$i++){
            $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
        }
        $id_pt = $nid.$nunix.$nsplit.$serial;
        $config['upload_path'] = './uploads/partner_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $id_pt.'-PIC';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( $this->upload->do_upload('pt_pic') ){
            $pt_pic = $this->upload->data("file_name");
            $this->t_partner_t->nanselectid($id_pt,$pt_pic);
            $chpath='./uploads/partner_file/'.$this->session->userdata('id_user').'/'.$pt_pic;
            chmod($chpath,0777);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            redirect(base_url() . 'fojoba/anselect');  
        }
        elseif( !$this->upload->do_upload('pt_pic') ){
            $pt_pic;$this->t_partner_t->nanselectid($id_pt,$pt_pic);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            $error = array('error' => $this->upload->display_errors());$this->session->set_flashdata('error',$error['error']); 
            redirect(base_url() . 'fojoba/anselect');  
        }
    }
    function vnanselecten(){
        $id_user = $this->session->userdata("id_user");
        $nid = 'ANNS-';$nunix = now();$nsplit = '-';$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');$serial = '';$max = count($chars)-1;
        for($i=0;$i<20;$i++){
            $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
        }
        $id_pt = $nid.$nunix.$nsplit.$serial;
        $config['upload_path'] = './uploads/partner_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $id_pt.'-PIC';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( $this->upload->do_upload('pt_pic') ){
            $pt_pic = $this->upload->data("file_name");
            $this->t_partner_t->nanselecten($id_pt,$pt_pic);
            $chpath='./uploads/partner_file/'.$this->session->userdata('id_user').'/'.$pt_pic;
            chmod($chpath,0777);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            redirect(base_url() . 'fojoba/anselect');  
        }
        elseif( !$this->upload->do_upload('pt_pic') ){
            $pt_pic;$this->t_partner_t->nanselecten($id_pt,$pt_pic);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            $error = array('error' => $this->upload->display_errors());$this->session->set_flashdata('error',$error['error']); 
            redirect(base_url() . 'fojoba/anselect');  
        }
    }
    function veanselect($id_pt){
        $config['upload_path'] = './uploads/partner_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $id_pt.'-PIC';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( $this->upload->do_upload('pt_pic') ){
            $pt_pic = $this->upload->data("file_name");
            $this->t_partner_t->eanselect1($id_pt,$pt_pic);
            $chpath='./uploads/partner_file/'.$this->session->userdata('id_user').'/'.$pt_pic;
            chmod($chpath,0777);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            redirect(base_url() . 'fojoba/anselect');  
        }
        elseif( !$this->upload->do_upload('pt_pic') ){
            $this->t_partner_t->eanselect2($id_pt);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error',$error['error']); 
            redirect(base_url() . 'fojoba/anselect');  
        }
    }
    function anaccept(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="Announce Accepted Applicant - Character Formation Network";
            $data['result'] = $this->t_partner_t->getPT2();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_anaccept",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_an",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function nanaccept(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="New Announcement - Character Formation Network";
            $data['result']=$this->t_job->getanvacancy();
            $this->load->view("back_end/panel_header_main",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_nanaccept",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_nan",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function nanacceptid(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="New Announcement - Character Formation Network";
            $data['result']=$this->t_job->getanvacancy();
            $this->load->view("back_end/panel_header_main",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_nanacceptid",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_nan",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function nanaccepten(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="New Announcement - Character Formation Network";
            $data['result']=$this->t_job->getanvacancy();
            $this->load->view("back_end/panel_header_main",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_nanaccepten",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_nan",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function eanaccept($id_pt){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="Edit Announcement - Character Formation Network";
            $data['result'] = $this->t_partner_t->getPTby($id_pt);
            $this->load->view("back_end/panel_header_main",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_eanaccept",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_nan",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function danaccept($id_pt){
        $this->t_partner_t->danselect($id_pt);
        $this->session->set_flashdata('success', 'Operation Complete Successfully!');
        redirect(base_url() . 'fojoba/anaccept'); 
    }
    function vnanaccept(){
        $id_user = $this->session->userdata("id_user");
        $nid = 'ANNA-';$nunix = now();$nsplit = '-';$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');$serial = '';$max = count($chars)-1;
        for($i=0;$i<20;$i++){
            $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
        }
        $id_pt = $nid.$nunix.$nsplit.$serial;
        $config['upload_path'] = './uploads/partner_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $id_pt.'-PIC';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( $this->upload->do_upload('pt_pic') ){
            $pt_pic = $this->upload->data("file_name");
            $this->t_partner_t->nanaccept($id_pt,$pt_pic);
            $chpath='./uploads/partner_file/'.$this->session->userdata('id_user').'/'.$pt_pic;
            chmod($chpath,0777);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            redirect(base_url() . 'fojoba/anaccept');  
        }
        elseif( !$this->upload->do_upload('pt_pic') ){
            $pt_pic;$this->t_partner_t->nanaccept($id_pt,$pt_pic);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            $error = array('error' => $this->upload->display_errors());$this->session->set_flashdata('error',$error['error']); 
            redirect(base_url() . 'fojoba/anaccept');  
        }
    }
    function vnanacceptid(){
        $id_user = $this->session->userdata("id_user");
        $nid = 'ANNA-';$nunix = now();$nsplit = '-';$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');$serial = '';$max = count($chars)-1;
        for($i=0;$i<20;$i++){
            $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
        }
        $id_pt = $nid.$nunix.$nsplit.$serial;
        $config['upload_path'] = './uploads/partner_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $id_pt.'-PIC';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( $this->upload->do_upload('pt_pic') ){
            $pt_pic = $this->upload->data("file_name");
            $this->t_partner_t->nanacceptid($id_pt,$pt_pic);
            $chpath='./uploads/partner_file/'.$this->session->userdata('id_user').'/'.$pt_pic;
            chmod($chpath,0777);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            redirect(base_url() . 'fojoba/anaccept');  
        }
        elseif( !$this->upload->do_upload('pt_pic') ){
            $pt_pic;$this->t_partner_t->nanacceptid($id_pt,$pt_pic);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            $error = array('error' => $this->upload->display_errors());$this->session->set_flashdata('error',$error['error']); 
            redirect(base_url() . 'fojoba/anaccept');  
        }
    }
    function vnanaccepten(){
        $id_user = $this->session->userdata("id_user");
        $nid = 'ANNA-';$nunix = now();$nsplit = '-';$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');$serial = '';$max = count($chars)-1;
        for($i=0;$i<20;$i++){
            $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
        }
        $id_pt = $nid.$nunix.$nsplit.$serial;
        $config['upload_path'] = './uploads/partner_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $id_pt.'-PIC';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( $this->upload->do_upload('pt_pic') ){
            $pt_pic = $this->upload->data("file_name");
            $this->t_partner_t->nanaccepten($id_pt,$pt_pic);
            $chpath='./uploads/partner_file/'.$this->session->userdata('id_user').'/'.$pt_pic;
            chmod($chpath,0777);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            redirect(base_url() . 'fojoba/anaccept');  
        }
        elseif( !$this->upload->do_upload('pt_pic') ){
            $pt_pic;$this->t_partner_t->nanaccepten($id_pt,$pt_pic);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            $error = array('error' => $this->upload->display_errors());$this->session->set_flashdata('error',$error['error']); 
            redirect(base_url() . 'fojoba/anaccept');  
        }
    }
    function veanaccept($id_pt){
        $config['upload_path'] = './uploads/partner_file/'.$this->session->userdata('id_user');
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $id_pt.'-PIC';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 1024;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( $this->upload->do_upload('pt_pic') ){
            $pt_pic = $this->upload->data("file_name");
            $this->t_partner_t->eanselect1($id_pt,$pt_pic);
            $chpath='./uploads/partner_file/'.$this->session->userdata('id_user').'/'.$pt_pic;
            chmod($chpath,0777);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            redirect(base_url() . 'fojoba/anaccept');  
        }
        elseif( !$this->upload->do_upload('pt_pic') ){
            $this->t_partner_t->eanselect2($id_pt);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error',$error['error']); 
            redirect(base_url() . 'fojoba/anaccept');  
        }
    }
}