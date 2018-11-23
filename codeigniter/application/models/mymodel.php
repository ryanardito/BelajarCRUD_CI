<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Mymodel extends CI_Model{
        public function GetMahasiswa($table){
            $res=$this->db->get($table); //milih tabel yang mau di show
            return $res->result_array(); //mengembalikan hasil $res menjadi array
        }

        public function Insert($table,$data){
            $res = $this->db->insert($table,$data); //insert record ke tabel
            return $res; //mengembalikan hasil $res
        }

        public function Update($table,$data,$where){
            $res = $this->db->update($table,$data,$where); //update record
            return $res;
        }

        public function Delete($table,$where){
            $res = $this->db->delete($table, $where); //delete record
            return $res;
        }
    }
?>