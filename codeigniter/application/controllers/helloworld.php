<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Helloworld extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
        }

        public function index(){
            $this->load->model('mymodel');
            $data = $this->mymodel->GetMahasiswa('mahasiswa');
            $data = array('data' => $data);
            $this->load->view('data_mahasiswa', $data);
        }
        public function add_data(){
            $this->load->view('form_add');
        }
        public function insert(){
            $this->load->model('mymodel');
            $data = array(
                'no_induk' => $this->input->post('nama'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat')
                 );
            $data = $this->mymodel->Insert('mahasiswa', $data);
            redirect(base_url(),'refresh');
        }
        public function delete($noinduk){
            $noinduk = array('no_induk' => $no_induk );
            $this->load->model('mymodel');
            $this->mymodel->Delete('mahasiswa',$noinduk);
            redirect(base_url(),'refresh');
        }
        public function fungsi(){
            echo "Function fungsi dari controller Helloworld";
        }
        public function parameters($nama){
            echo "Selamat Datang ".$nama;
        }
    }
?>