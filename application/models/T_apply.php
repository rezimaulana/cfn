<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class T_apply extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->tblName = 't_apply';
    }
    function getApplicant($params = array()){
        $state_1 = 'N';$state_2 = 'N';
        $id_user = $this->session->userdata("id_user");
        $this->db->select('*');
        $this->db->from($this->tblName);
        $this->db->join('t_job', 't_apply.id_job = t_job.id_job', 'left');
        $this->db->join('t_user_file', 't_apply.id_file = t_user_file.id_file', 'left');
        $this->db->join('t_user_d', 't_user_file.id_user = t_user_d.id_user', 'left');
        $this->db->where('id_user_p', $id_user);
        $this->db->where('state_1', $state_1);$this->db->where('state_2', $state_2);
        $this->db->order_by("timestamp_a", "desc"); 
        if(array_key_exists("where",$params)){
            foreach ($params['where'] as $key => $value){
                $this->db->where($key,$value);
            }
        }
        if(array_key_exists("order_by",$params)){
            $this->db->order_by($params['order_by']);
        }
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }
        return $result;
    }
    function getSelection($params = array()){
        $state_1 = 'Y';$state_2 = 'N';
        $id_user = $this->session->userdata("id_user");
        $this->db->select('*');
        $this->db->from($this->tblName);
        $this->db->join('t_job', 't_apply.id_job = t_job.id_job', 'left');
        $this->db->join('t_user_file', 't_apply.id_file = t_user_file.id_file', 'left');
        $this->db->join('t_user_d', 't_user_file.id_user = t_user_d.id_user', 'left');
        $this->db->where('id_user_p', $id_user);
        $this->db->where('state_1', $state_1);$this->db->where('state_2', $state_2);
        $this->db->order_by("timestamp_a", "desc"); 
        if(array_key_exists("where",$params)){
            foreach ($params['where'] as $key => $value){
                $this->db->where($key,$value);
            }
        }
        if(array_key_exists("order_by",$params)){
            $this->db->order_by($params['order_by']);
        }
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }
        return $result;
    }
    function getAccepted($params = array()){
        $state_1 = 'Y';$state_2 = 'Y';
        $id_user = $this->session->userdata("id_user");
        $this->db->select('*');
        $this->db->from($this->tblName);
        $this->db->join('t_job', 't_apply.id_job = t_job.id_job', 'left');
        $this->db->join('t_user_file', 't_apply.id_file = t_user_file.id_file', 'left');
        $this->db->join('t_user_d', 't_user_file.id_user = t_user_d.id_user', 'left');
        $this->db->where('id_user_p', $id_user);
        $this->db->where('state_1', $state_1);$this->db->where('state_2', $state_2);
        $this->db->order_by("timestamp_a", "desc"); 
        if(array_key_exists("where",$params)){
            foreach ($params['where'] as $key => $value){
                $this->db->where($key,$value);
            }
        }
        if(array_key_exists("order_by",$params)){
            $this->db->order_by($params['order_by']);
        }
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }
        return $result;
    }
    function getNqual($params = array()){
        $state_1 = 'Q';$state_2 = 'Q';
        $id_user = $this->session->userdata("id_user");
        $this->db->select('*');
        $this->db->from($this->tblName);
        $this->db->join('t_job', 't_apply.id_job = t_job.id_job', 'left');
        $this->db->join('t_user_file', 't_apply.id_file = t_user_file.id_file', 'left');
        $this->db->join('t_user_d', 't_user_file.id_user = t_user_d.id_user', 'left');
        $this->db->where('id_user_p', $id_user);
        $this->db->where('state_1', $state_1);$this->db->where('state_2', $state_2);
        $this->db->order_by("timestamp_a", "desc"); 
        if(array_key_exists("where",$params)){
            foreach ($params['where'] as $key => $value){
                $this->db->where($key,$value);
            }
        }
        if(array_key_exists("order_by",$params)){
            $this->db->order_by($params['order_by']);
        }
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }
        return $result;
    }
    function getFslct($params = array()){
        $state_1 = 'S';$state_2 = 'S';
        $id_user = $this->session->userdata("id_user");
        $this->db->select('*');
        $this->db->from($this->tblName);
        $this->db->join('t_job', 't_apply.id_job = t_job.id_job', 'left');
        $this->db->join('t_user_file', 't_apply.id_file = t_user_file.id_file', 'left');
        $this->db->join('t_user_d', 't_user_file.id_user = t_user_d.id_user', 'left');
        $this->db->where('id_user_p', $id_user);
        $this->db->where('state_1', $state_1);$this->db->where('state_2', $state_2);
        $this->db->order_by("timestamp_a", "desc"); 
        if(array_key_exists("where",$params)){
            foreach ($params['where'] as $key => $value){
                $this->db->where($key,$value);
            }
        }
        if(array_key_exists("order_by",$params)){
            $this->db->order_by($params['order_by']);
        }
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }
        return $result;
    }
    function getEmploy($params = array()){
        $state_1 = 'Q';$state_2 = 'S';
        $id_user = $this->session->userdata("id_user");
        $this->db->select('*');
        $this->db->from($this->tblName);
        $this->db->join('t_job', 't_apply.id_job = t_job.id_job', 'left');
        $this->db->join('t_user_file', 't_apply.id_file = t_user_file.id_file', 'left');
        $this->db->join('t_user_d', 't_user_file.id_user = t_user_d.id_user', 'left');
        $this->db->where('id_user_p', $id_user);
        $this->db->where('state_1', $state_1);$this->db->where('state_2', $state_2);
        $this->db->order_by("timestamp_a", "desc"); 
        if(array_key_exists("where",$params)){
            foreach ($params['where'] as $key => $value){
                $this->db->where($key,$value);
            }
        }
        if(array_key_exists("order_by",$params)){
            $this->db->order_by($params['order_by']);
        }
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }
        return $result;
    }
    function getNemploy($params = array()){
        $state_1 = 'S';$state_2 = 'Q';
        $id_user = $this->session->userdata("id_user");
        $this->db->select('*');
        $this->db->from($this->tblName);
        $this->db->join('t_job', 't_apply.id_job = t_job.id_job', 'left');
        $this->db->join('t_user_file', 't_apply.id_file = t_user_file.id_file', 'left');
        $this->db->join('t_user_d', 't_user_file.id_user = t_user_d.id_user', 'left');
        $this->db->where('id_user_p', $id_user);
        $this->db->where('state_1', $state_1);$this->db->where('state_2', $state_2);
        $this->db->order_by("timestamp_a", "desc"); 
        if(array_key_exists("where",$params)){
            foreach ($params['where'] as $key => $value){
                $this->db->where($key,$value);
            }
        }
        if(array_key_exists("order_by",$params)){
            $this->db->order_by($params['order_by']);
        }
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }
        return $result;
    }
    function confirmApplicant($id){
        if(is_array($id)){
            $this->db->where_in('id_apply', $id);
        }else{
            $this->db->where('id_apply', $id);
        }
        $data = array (
            'state_1' => 'Y'
        );
        $action = $this->db->update($this->tblName, $data);
        return $action?true:false;
    }
    function confirmSelection($id){
        if(is_array($id)){
            $this->db->where_in('id_apply', $id);
        }else{
            $this->db->where('id_apply', $id);
        }
        $data = array (
            'state_2' => 'Y'
        );
        $action = $this->db->update($this->tblName, $data);
        return $action?true:false;
    }
    function nqual($id){
        if(is_array($id)){
            $this->db->where_in('id_apply', $id);
        }else{
            $this->db->where('id_apply', $id);
        }
        $data = array (
            'state_1' => 'Q',
            'state_2' => 'Q'
        );
        $action = $this->db->update($this->tblName, $data);
        return $action?true:false;
    }
    function fslct($id){
        if(is_array($id)){
            $this->db->where_in('id_apply', $id);
        }else{
            $this->db->where('id_apply', $id);
        }
        $data = array (
            'state_1' => 'S',
            'state_2' => 'S'
        );
        $action = $this->db->update($this->tblName, $data);
        return $action?true:false;
    }
    function employ($id){
        if(is_array($id)){
            $this->db->where_in('id_apply', $id);
        }else{
            $this->db->where('id_apply', $id);
        }
        $data = array (
            'state_1' => 'Q',
            'state_2' => 'S'
        );
        $action = $this->db->update($this->tblName, $data);
        return $action?true:false;
    }
    function nemploy($id){
        if(is_array($id)){
            $this->db->where_in('id_apply', $id);
        }else{
            $this->db->where('id_apply', $id);
        }
        $data = array (
            'state_1' => 'S',
            'state_2' => 'Q'
        );
        $action = $this->db->update($this->tblName, $data);
        return $action?true:false;
    }
    function undoconfirmApplicant($id){
        if(is_array($id)){
            $this->db->where_in('id_apply', $id);
        }else{
            $this->db->where('id_apply', $id);
        }
        $data = array (
            'state_1' => 'N'
        );
        $action = $this->db->update($this->tblName, $data);
        return $action?true:false;
    }
    function undoconfirmSelection($id){
        if(is_array($id)){
            $this->db->where_in('id_apply', $id);
        }else{
            $this->db->where('id_apply', $id);
        }
        $data = array (
            'state_2' => 'N'
        );
        $action = $this->db->update($this->tblName, $data);
        return $action?true:false;
    }
    function undonqual($id){
        if(is_array($id)){
            $this->db->where_in('id_apply', $id);
        }else{
            $this->db->where('id_apply', $id);
        }
        $data = array (
            'state_1' => 'N',
            'state_2' => 'N'
        );
        $action = $this->db->update($this->tblName, $data);
        return $action?true:false;
    }
    function undofslct($id){
        if(is_array($id)){
            $this->db->where_in('id_apply', $id);
        }else{
            $this->db->where('id_apply', $id);
        }
        $data = array (
            'state_1' => 'Y',
            'state_2' => 'N'
        );
        $action = $this->db->update($this->tblName, $data);
        return $action?true:false;
    }
    function undoemploy($id){
        if(is_array($id)){
            $this->db->where_in('id_apply', $id);
        }else{
            $this->db->where('id_apply', $id);
        }
        $data = array (
            'state_1' => 'Y',
            'state_2' => 'Y'
        );
        $action = $this->db->update($this->tblName, $data);
        return $action?true:false;
    }
    function undonemploy($id){
        if(is_array($id)){
            $this->db->where_in('id_apply', $id);
        }else{
            $this->db->where('id_apply', $id);
        }
        $data = array (
            'state_1' => 'Y',
            'state_2' => 'Y'
        );
        $action = $this->db->update($this->tblName, $data);
        return $action?true:false;
    }
    function toemail($ids){
        if(is_array($ids)){
            $this->db->join('t_user_d', 't_user_d.id_user = t_apply.id_file', 'left');
            $this->db->join('t_job', 't_job.id_job = t_apply.id_job', 'left');
            $this->db->where_in('id_apply', $ids);
        }else{
            $this->db->join('t_user_d', 't_user_d.id_user = t_apply.id_file', 'left');
            $this->db->join('t_job', 't_job.id_job = t_apply.id_job', 'left');
            $this->db->where('id_apply', $ids);
        }
        $query = $this->db->get('t_apply');
        return $query->result();
    }
    function fromemail($id_user){
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('t_partner_d');
        return $query->result();
    }
    function ttoemail($ids){
        if(is_array($ids)){
            $this->db->join('t_user_d', 't_user_d.id_user = t_apply.id_file', 'left');
            $this->db->join('t_job', 't_job.id_job = t_apply.id_job', 'left');
            $this->db->where_in('id_apply', $ids);
        }else{
            $this->db->join('t_user_d', 't_user_d.id_user = t_apply.id_file', 'left');
            $this->db->join('t_job', 't_job.id_job = t_apply.id_job', 'left');
            $this->db->where('id_apply', $ids);
        }
        $query = $this->db->get('t_apply');
        return $query->result();
    }
}