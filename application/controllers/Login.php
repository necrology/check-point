<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index()
    {
        if($this->session->userdata('logged_in'))
        {
          if($_SESSION['pengguna_level'] == 'pemeriksa'){
            $this->load->view('security/scan_qr');
          }elseif($_SESSION['pengguna_level'] == 'admin'){
            $this->load->view('admin/dashboard');
          }  
        } else {
            $this->load->view('login');
        }
        
    }

    function auth()
    {
        $username = strip_tags(str_replace("'", "", $this->input->post('username', TRUE)));
        $password = strip_tags(str_replace("'", "", $this->input->post('password', TRUE)));
        $cadmin = $this->m_login->cekadmin($username, $password);
        if ($cadmin->num_rows() > 0) {
            $xcadmin = $cadmin->row_array();
            if ($xcadmin['pengguna_level'] == 'pemeriksa') {

                $newdata = array(
                    'id_user'            => $xcadmin['id_user'],
                    'nama_user'          => $xcadmin['nama_user'],
                    'username_user'      => $xcadmin['username_user'],
                    'password_user'      => $xcadmin['password_user'],
                    'pengguna_level'     => $xcadmin['pengguna_level'],
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);
                redirect('scan_qr');
            } else if ($xcadmin['pengguna_level'] == 'admin') {
                $newdata = array(
                    'id_user'            => $xcadmin['id_user'],
                    'nama_user'          => $xcadmin['nama_user'],
                    'username_user'      => $xcadmin['username_user'],
                    'password_user'      => $xcadmin['password_user'],
                    'pengguna_level'     => $xcadmin['pengguna_level'],
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);
                redirect('dashboard');
            } else {
                redirect('login/gagallogin');
            }
        } else {
            redirect('login/gagallogin');
        }
    }

    function gagallogin()
    {
        $url = base_url('login');
        echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"></span></button> Username Atau Password Salah</div>');
        redirect($url);
    }

    function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('login');
    }
}
