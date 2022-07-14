<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fojobv extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->lang->load('web');
        $this->load->model('t_apply');
        $this->load->model('t_user_file');
    }
	function index(){
        if($this->session->userdata('r_lvl')=='4'){
            redirect(base_url("foaccount/profile"));
        }
        else{
            redirect(base_url("logreg/instr")); 
        }
    }
    function test(){
        $ids = "APPLY-1564699439-QU0I8-NSXP9-08I8E-KV6N6";
        $data['result_action'] = $this->t_apply->ttoemail($ids);
        print_r($data);
    }
    function testarray(){
        $ids = array("APPLY-1564699439-QU0I8-NSXP9-08I8E-KV6N6","APPLY-1564697322-KXN7C-RSVYU-YJX0O-W4Q2T");
        $data['result_action'] = $this->t_apply->ttoemail($ids);
        print_r($data);
    }
    public function notify($ids,$statusid,$statusen) {
        $this->load->library('email');
        $data['result_action'] = $this->t_apply->toemail($ids);
        $id_user = $this->session->userdata('id_user');
        $data['partner'] = $this->t_apply->fromemail($id_user);
        foreach ($data['result_action'] as $to) 
        foreach ($data['partner'] as $from) 
        $u_email[] = $to->u_email;
            $this->email->set_newline("\r\n");
            $this->email->from($from->u_email, $from->u_name);
            $this->email->to('rsamrz@pm.me');
            $this->email->bcc($u_email);
            $this->email->subject('Notification-'.$to->id_job);
            $this->email->message(
                $statusid.' pada<br>'
                .$to->j_subject_id.' ('.$to->id_job.
                ')<br>Tipe Kerja: '.$to->j_type_id.
                '<br>Industri Kerja: '.$to->j_industry_id.
                '<br>Posisi Kerja: '.$to->j_function_id.
                '<br>Pengalaman: '.$to->j_experience_id.
                '<br>Pendidikan: '.$to->j_education_id.'<br><br>'
                .$statusen.' on<br>'
                .$to->j_subject_en.' ('.$to->id_job.
                ')<br>Job Type: '.$to->j_type_en.
                '<br>Job Industry: '.$to->j_industry_en.
                '<br>Job Function: '.$to->j_function_en.
                '<br>Experience: '.$to->j_experience_en.
                '<br>Education: '.$to->j_education_en
            );
            if (!$this->email->send()){
                echo $this->email->print_debugger();
            }
            else{
                return true;
            }
    }
    function applicant(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="Job Applicant - Character Formation Network";
            if($this->input->post('bulk_action_submit1')){
                $ids = $this->input->post('checked_id');
                $statusid='Anda <b>dinyatakan berkualifikasi</b> dari Tahap Seleksi';
                $statusen='From Registration Session result, you <b>are stated qualify</b>';
                $this->notify($ids,$statusid,$statusen);
                if(!empty($ids)){
                    $action = $this->t_apply->confirmApplicant($ids);
                    if($action){
                        $data['statusMsg'] = 'Operation have been perform successfully.';
                    }else{
                        $data['statusMsg'] = 'Some problem occurred, please try again!';
                    }
                }else{
                    $data['statusMsg'] = 'Please select at least 1 record to perform this operation!';
                }
            }
            if($this->input->post('bulk_action_submit2')){
                $ids = $this->input->post('checked_id');
                $statusid='Anda <b>dinyatakan tidak berkualifikasi</b> dari Tahap Pendaftaran';
                $statusen='From Registration Session result, you <b>are stated not qualify</b>';
                $this->notify($ids,$statusid,$statusen);
                if(!empty($ids)){
                    $action = $this->t_apply->nqual($ids);
                    if($action){
                        $data['statusMsg'] = 'Operation have been perform successfully.';
                    }else{
                        $data['statusMsg'] = 'Some problem occurred, please try again!';
                    }
                }else{
                    $data['statusMsg'] = 'Please select at least 1 record to perform this operation!';
                }
            }
            $data['result_action'] = $this->t_apply->getApplicant();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_applicant",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_ctable",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function selection(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="Applicant Selection - Character Formation Network";
            if($this->input->post('bulk_action_submit1')){
                $ids = $this->input->post('checked_id');
                $statusid='Anda <b>dinyatakan lulus seleksi</b> dari Tahap Seleksi';
                $statusen='From Selection Session result, you <b>are stated pass the selection</b>';
                $this->notify($ids,$statusid,$statusen);
                if(!empty($ids)){
                    $action = $this->t_apply->confirmSelection($ids);
                    if($action){
                        $data['statusMsg'] = 'Operation have been perform successfully.';
                    }else{
                        $data['statusMsg'] = 'Some problem occurred, please try again!';
                    }
                }else{
                    $data['statusMsg'] = 'Please select at least 1 record to perform this operation!';
                }
            }
            if($this->input->post('bulk_action_submit2')){
                $ids = $this->input->post('checked_id');
                $statusid='Anda <b>dinyatakan gagal seleksi</b> dari Tahap Seleksi';
                $statusen='From Selection Session result, you <b>are stated fail the selection</b>';
                $this->notify($ids,$statusid,$statusen);
                if(!empty($ids)){
                    $action = $this->t_apply->fslct($ids);
                    if($action){
                        $data['statusMsg'] = 'Operation have been perform successfully.';
                    }else{
                        $data['statusMsg'] = 'Some problem occurred, please try again!';
                    }
                }else{
                    $data['statusMsg'] = 'Please select at least 1 record to perform this operation!';
                }
            }
            if($this->input->post('bulk_action_submit4')){
                $ids = $this->input->post('checked_id');
                $statusid='Status peserta anda <b>telah dikembalikan ke Tahap Pendaftaran</b>';
                $statusen='Your applicant status <b>has been rollback to Registration Session</b>';
                $this->notify($ids,$statusid,$statusen);
                if(!empty($ids)){
                    $action = $this->t_apply->undoconfirmApplicant($ids);
                    if($action){
                        $data['statusMsg'] = 'Operation have been perform successfully.';
                    }else{
                        $data['statusMsg'] = 'Some problem occurred, please try again!';
                    }
                }else{
                    $data['statusMsg'] = 'Please select at least 1 record to perform this operation!';
                }
            }
            $data['result_action'] = $this->t_apply->getSelection();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_selection",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_ctable",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function accepted(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="Accepted Applicant - Character Formation Network";
            if($this->input->post('bulk_action_submit1')){
                $ids = $this->input->post('checked_id');
                $statusid='Anda <b>dinyatakan sebagai karyawan</b> dari Tahap Penerimaan';
                $statusen='From Acceptance Session result, you <b>are stated as an employee</b>';
                $this->notify($ids,$statusid,$statusen);
                if(!empty($ids)){
                    $action = $this->t_apply->employ($ids);
                    if($action){
                        $data['statusMsg'] = 'Operation have been perform successfully.';
                    }else{
                        $data['statusMsg'] = 'Some problem occurred, please try again!';
                    }
                }else{
                    $data['statusMsg'] = 'Please select at least 1 record to perform this operation!';
                }
            }
            if($this->input->post('bulk_action_submit2')){
                $ids = $this->input->post('checked_id');
                $statusid='Anda <b>dinyatakan bukan karyawan</b> dari Tahap Penerimaan';
                $statusen='From the Acceptance Session result, you <b>arent stated as an employee</b>';
                $this->notify($ids,$statusid,$statusen);
                if(!empty($ids)){
                    $action = $this->t_apply->nemploy($ids);
                    if($action){
                        $data['statusMsg'] = 'Operation have been perform successfully.';
                    }else{
                        $data['statusMsg'] = 'Some problem occurred, please try again!';
                    }
                }else{
                    $data['statusMsg'] = 'Please select at least 1 record to perform this operation!';
                }
            }
            if($this->input->post('bulk_action_submit4')){
                $ids = $this->input->post('checked_id');
                $statusid='Status peserta anda <b>telah dikembalikan ke Tahap Seleksi</b>';
                $statusen='Your applicant status <b>has been rollback to Selection Session</b>';
                $this->notify($ids,$statusid,$statusen);
                if(!empty($ids)){
                    $action = $this->t_apply->undoconfirmSelection($ids);
                    if($action){
                        $data['statusMsg'] = 'Operation have been perform successfully.';
                    }else{
                        $data['statusMsg'] = 'Some problem occurred, please try again!';
                    }
                }else{
                    $data['statusMsg'] = 'Please select at least 1 record to perform this operation!';
                }
            }
            $data['result_action'] = $this->t_apply->getAccepted();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_accepted",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_ctable",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function nqual(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="Not Qualified - Character Formation Network";
            if($this->input->post('bulk_action_submit4')){
                $ids = $this->input->post('checked_id');
                $statusid='Status peserta anda <b>telah dikembalikan ke Tahap Pendaftaran</b>';
                $statusen='Your applicant status <b>has been rollback to Registration Session</b>';
                $this->notify($ids,$statusid,$statusen);
                if(!empty($ids)){
                    $action = $this->t_apply->undonqual($ids);
                    if($action){
                        $data['statusMsg'] = 'Operation have been perform successfully.';
                    }else{
                        $data['statusMsg'] = 'Some problem occurred, please try again!';
                    }
                }else{
                    $data['statusMsg'] = 'Please select at least 1 record to perform this operation!';
                }
            }
            $data['result_action'] = $this->t_apply->getNqual();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_nqual",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_ctable",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function fslct(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="Fail Selection - Character Formation Network";
            if($this->input->post('bulk_action_submit4')){
                $ids = $this->input->post('checked_id');
                $statusid='Status peserta anda <b>telah dikembalikan ke Tahap Seleksi</b>';
                $statusen='Your applicant status <b>has been rollback to Selection Session</b>';
                $this->notify($ids,$statusid,$statusen);
                if(!empty($ids)){
                    $action = $this->t_apply->undofslct($ids);
                    if($action){
                        $data['statusMsg'] = 'Operation have been perform successfully.';
                    }else{
                        $data['statusMsg'] = 'Some problem occurred, please try again!';
                    }
                }else{
                    $data['statusMsg'] = 'Please select at least 1 record to perform this operation!';
                }
            }
            $data['result_action'] = $this->t_apply->getFslct();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_fslct",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_ctable",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function employ(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="Employee - Character Formation Network";
            if($this->input->post('bulk_action_submit4')){
                $ids = $this->input->post('checked_id');
                $statusid='Status peserta anda <b>telah dikembalikan ke Tahap Penerimaan</b>';
                $statusen='Your applicant status <b>has been rollback to Acceptance Session</b>';
                $this->notify($ids,$statusid,$statusen);
                if(!empty($ids)){
                    $action = $this->t_apply->undoemploy($ids);
                    if($action){
                        $data['statusMsg'] = 'Operation have been perform successfully.';
                    }else{
                        $data['statusMsg'] = 'Some problem occurred, please try again!';
                    }
                }else{
                    $data['statusMsg'] = 'Please select at least 1 record to perform this operation!';
                }
            }
            $data['result_action'] = $this->t_apply->getEmploy();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_employ",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_ctable",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function nemploy(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="Not Employee - Character Formation Network";
            if($this->input->post('bulk_action_submit4')){
                $ids = $this->input->post('checked_id');
                $statusid='Status peserta anda <b>telah dikembalikan ke Tahap Penerimaan</b>';
                $statusen='Your applicant status <b>has been rollback to Acceptance Session</b>';
                $this->notify($ids,$statusid,$statusen);
                if(!empty($ids)){
                    $action = $this->t_apply->undonemploy($ids);
                    if($action){
                        $data['statusMsg'] = 'Operation have been perform successfully.';
                    }else{
                        $data['statusMsg'] = 'Some problem occurred, please try again!';
                    }
                }else{
                    $data['statusMsg'] = 'Please select at least 1 record to perform this operation!';
                }
            }
            $data['result_action'] = $this->t_apply->getNemploy();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_nemploy",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_ctable",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function ufile(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="Users File - Character Formation Network";
            $data['result'] = $this->t_user_file->ufile();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_ufile",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_ufile",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function udata(){
        if($this->session->userdata('r_lvl')=='4'){
            $data['title']="Users Data - Character Formation Network";
            $data['result'] = $this->t_user_file->udata();
            $this->load->view("back_end/panel_header_main",$data);$this->load->view("back_end/panel_header_table",$data);
            $this->load->view("4/panel4_nav",$data);$this->load->view("4/panel4_udata",$data);
            $this->load->view("back_end/panel_footer_main",$data);$this->load->view("back_end/panel_footer_udata",$data);
            $this->load->view("back_end/panel_footer_end",$data);
        }
        else{
            redirect(base_url("logreg/instr"));   
        }
    }
    function downloadDZIP($id_file){
        $path = './uploads/user_file/';
        $this->zip->read_dir($path.$id_file);
        $this->zip->download($id_file.'.zip');
        $this->zip->clear_data();
    }

    function downloadZIP($id_file,$jf1,$jf2,$jf3,$jf4,$jf5,$jf6){
        $path = './uploads/user_file/'.$id_file.'/';
        $data['result']=$this->t_user_file->getDownload($id_file);
        foreach ($data['result'] as $row) {}
        if($jf1=='Y'){$this->zip->read_file($path.$row->u_resume);}else{}
        if($jf2=='Y'){$this->zip->read_file($path.$row->u_cv);}else{}
        if($jf3=='Y'){$this->zip->read_file($path.$row->u_certificate);}else{}
        if($jf4=='Y'){$this->zip->read_file($path.$row->u_qualification);}else{}
        if($jf5=='Y'){$this->zip->read_file($path.$row->u_pic);}else{}
        if($jf6=='Y'){$this->zip->read_file($path.$row->u_add);}else{}
        $this->zip->download($id_file.'.zip');
        $this->zip->clear_data();
    }

}