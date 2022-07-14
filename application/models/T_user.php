<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class T_user extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->tblName = 't_user';
    }
    function login_valid($u_email, $u_pass){  
        $this->db->join('t_rule', 't_user.r_lvl = t_rule.r_lvl', 'left');
        $this->db->where('u_email', $u_email);  
        $this->db->where('u_pass', $u_pass);  
        $query = $this->db->get('t_user');  
        if($query->num_rows() > 0){  
            $row = $query->row(); 
            $session_data = array(
                'id_user'=>$row -> id_user,  
                'u_email'=> $row -> u_email,
                'r_lvl'=> $row -> r_lvl,
                'u_block'=> $row -> u_block,
                'u_appr'=> $row -> u_appr,
                'r_rule' => $row -> r_rule,
            );  
            $this->session->set_userdata($session_data);
            return true; 
        }  
        else{  
            return false;       
        }  
    }
    function login_root($id_user){
        $id_root=$this->session->userdata('id_user');
        $l_lvl='121096';
        $this->session->set_userdata('id_root',$id_root);
        $this->session->set_userdata('l_lvl',$l_lvl);
        $this->db->join('t_rule', 't_user.r_lvl = t_rule.r_lvl', 'left');
        $this->db->where('id_user', $id_user);    
        $query = $this->db->get('t_user');  
        if($query->num_rows() > 0){  
            $row = $query->row(); 
            $session_data = array(
                'id_user'=>$row -> id_user,  
                'u_email'=> $row -> u_email,
                'r_lvl'=> $row -> r_lvl,
                'u_block'=> $row -> u_block,
                'u_appr'=> $row -> u_appr,
                'r_rule' => $row -> r_rule,
            );  
            $this->session->set_userdata($session_data);
            return true; 
        }  
        else{  
            return false;       
        }   
    }
    function logout_root(){
        $id_root=$this->session->userdata('id_root');
        $this->db->join('t_rule', 't_user.r_lvl = t_rule.r_lvl', 'left');
        $this->db->where('id_user', $id_root);    
        $query = $this->db->get('t_user');  
        if($query->num_rows() > 0){  
            $row = $query->row(); 
            $session_data = array(
                'id_user'=>$row -> id_user,  
                'u_email'=> $row -> u_email,
                'r_lvl'=> $row -> r_lvl,
                'u_block'=> $row -> u_block,
                'u_appr'=> $row -> u_appr,
                'r_rule' => $row -> r_rule,
            );  
            $this->session->set_userdata($session_data);
            $this->session->unset_userdata('id_root');
            $this->session->unset_userdata('l_lvl');
            return true; 
        }  
        else{  
            return false;       
        }   
    }
    function regpu_valid($u_email, $r_lvl, $u_pass){
        $this->db->where('u_email', $u_email);
        $query = $this->db->get('t_user');
        if($query->num_rows() == 0){
            $nid = 'ID-';$nunix = now();$nsplit = '-';$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');$serial = '';$max = count($chars)-1;
            for($i=0;$i<20;$i++){
                $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
            }
            $id_user = $nid.$nunix.$nsplit.$serial;
            $id_file = $nid.$nunix.$nsplit.$serial;
            if($r_lvl=='5'){
                $u_appr='Y';
                $data1 = array(
                    'id_user' => $id_user,
                    'u_email' => $u_email,
                    'u_pass' => $u_pass,
                    'r_lvl' => $r_lvl,
                    'u_appr' => $u_appr,
                );
                $data2 = array(
                    'id_user' => $id_user,
                    'u_email' => $u_email,
                );
                $data3 = array(
                    'id_user' => $id_user,
                    'id_file' => $id_file,
                );
                $path="uploads/user_file/";mkdir($path.$id_file,0777,TRUE);
                $this->db->insert('t_user',$data1);
                $this->db->insert('t_user_d',$data2);
                $this->db->insert('t_user_file',$data3);
                return true;
            }
            elseif($r_lvl=='3'){
                $u_appr='N';
                $data1 = array(
                    'id_user' => $id_user,
                    'u_email' => $u_email,
                    'u_pass' => $u_pass,
                    'r_lvl' => $r_lvl,
                    'u_appr' => $u_appr,
                );
                $data2 = array(
                    'id_user' => $id_user,
                    'u_email' => $u_email,
                );
                $data3 = array(
                    'id_user' => $id_user,
                    'id_file' => $id_file,
                );
                $path="uploads/user_file/";mkdir($path.$id_file,0777,TRUE);
                $this->db->insert('t_user',$data1);
                $this->db->insert('t_user_d',$data2);
                $this->db->insert('t_user_file',$data3);
                return true;
            }
            elseif($r_lvl=='2'){
                $u_appr='N';
                $data1 = array(
                    'id_user' => $id_user,
                    'u_email' => $u_email,
                    'u_pass' => $u_pass,
                    'r_lvl' => $r_lvl,
                    'u_appr' => $u_appr,
                );
                $data2 = array(
                    'id_user' => $id_user,
                    'u_email' => $u_email,
                );
                $this->db->insert('t_user',$data1);
                $this->db->insert('t_user_d',$data2);
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }
    function cPassword($u_pass){
        $id_user = $this->session->userdata("id_user");
        $this->db->where('id_user', $id_user);
        $data = array (
            'u_pass' => $u_pass
        );
        $this->db->update('t_user', $data);
        return true;
    }
    function getRowsblock($params = array()){
        $u_block = 'N';
        $this->db->select('*');
        $this->db->from($this->tblName);
        $this->db->where('u_block', $u_block); 
        $this->db->order_by("timestamp_d", "desc");
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
    function getRowsunblock($params = array()){
        $u_block = 'Y';
        $this->db->select('*');
        $this->db->from($this->tblName);
        $this->db->where('u_block', $u_block); 
        $this->db->order_by("timestamp_d", "desc");
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
    function getRowsconfirm($params = array()){
        $u_appr = 'N';
        $this->db->select('*');
        $this->db->from($this->tblName);
        $this->db->where('u_appr', $u_appr); 
        $this->db->order_by("timestamp_d", "desc");
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
    function getRowsreject($params = array()){
        $u_appr = 'Y';
        $this->db->select('*');
        $this->db->from($this->tblName);
        $this->db->where('u_appr', $u_appr); 
        $this->db->order_by("timestamp_d", "desc");
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
    function block($id){
        if(is_array($id)){
            $this->db->where_in('id_user', $id);
        }else{
            $this->db->where('id_user', $id);
        }
        $data = array (
            'u_block' => 'Y'
        );
        $action = $this->db->update($this->tblName, $data);
        return $action?true:false;
    }
    function unblock($id){
        if(is_array($id)){
            $this->db->where_in('id_user', $id);
        }else{
            $this->db->where('id_user', $id);
        }
        $data = array (
            'u_block' => 'N'
        );
        $action = $this->db->update($this->tblName, $data);
        return $action?true:false;
    }
    function confirm($id){
        if(is_array($id)){
            $this->db->where_in('id_user', $id);
        }else{
            $this->db->where('id_user', $id);
        }
        $data = array (
            'u_appr' => 'Y'
        );
        $action = $this->db->update($this->tblName, $data);
        return $action?true:false;
    }
    function reject($id){
        if(is_array($id)){
            $this->db->where_in('id_user', $id);
        }else{
            $this->db->where('id_user', $id);
        }
        $data = array (
            'u_appr' => 'N'
        );
        $action = $this->db->update($this->tblName, $data);
        return $action?true:false;
    }
    function getAllowuser()
    {
        $u_block= 'N';
        $u_appr= 'Y';
        $this->db->where('u_block',$u_block);
        $this->db->where('u_appr',$u_appr);
        $query = $this->db->get('t_user');
        return $query->result();
    }
} 
 