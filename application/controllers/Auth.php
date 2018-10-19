<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index() {
        $this->load->view('auth/index');
    }

    public function cek_login() {
        $data = array('username' => $this->input->post('username', TRUE),
                        'password' =>$this->input->post('password', TRUE)
            );
        $this->load->model('model_user'); // load model_user
        $hasil = $this->model_user->cek_user($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Loggin';
                $sess_data['id_user'] = $sess->id_user;
                $sess_data['id_kabkot'] = $sess->id_kabkot;
                $sess_data['id_kec'] = $sess->id_kec; 
                $sess_data['username'] = $sess->username;
                $sess_data['level'] = $sess->level;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('level')=='adminprovinsi') {
                $this->load->view('admin/index',$sess_data);
               
            }
            elseif ($this->session->userdata('level')=='adminkecamatan') {
                $this->load->view('adminkec/index',$sess_data);
            }       
        }
        else {
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        
//        redirect ke halaman login
        redirect(site_url('index.php/Auth'));
    }

}

?>