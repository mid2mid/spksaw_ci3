<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //Do your magic here
    // $this->load->model('M_User');
    $this->load->library('form_validation');
  }


  public function index()
  {
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');


    if ($this->form_validation->run() == FALSE) {
      # code...
      $data['title'] = 'Halaman Login';
      $this->load->view('auth/login', $data);
    } else {
      $this->_login();
    }
  }

  public function _login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();

    // user ada
    if ($user) {
      if ($user['is_active'] == 1) {
        // cek password
        if (password_verify($password, $user['password'])) {
          $data = [
            'email' => $user['email'],
            'role_id' => $user['role_id']
          ];
          $this->session->set_userdata($data);
          redirect('Admin');
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login gagal, password salah!</div>');
          redirect('auth');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login gagal, User belum aktivasi</div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login gagal, User tidak ditemukan!</div>');
      redirect('auth');
    }
  }

  // registrasi
  public function registrasi()
  {
    $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[tbl_user.email]', [
      'is_unique' => 'This email has already registered!'
    ]);
    $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[4]|matches[password2]', [
      'matches' => 'Password dont match',
      'min_length' => 'Password too short!'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password1]');

    if ($this->form_validation->run() == FALSE) {
      $data['title'] = 'Halaman Registrasi';
      $this->load->view('auth/registrasi', $data);
    } else {
      $data = [
        'nama_user' => htmlspecialchars($this->input->post('nama_lengkap', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'role_id' => 2,
        'is_active' => 1,
        'date_created' => time()
      ];
      $this->db->insert('tbl_user', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Registrasi Sukses</div>');
      redirect('auth');
    }
  }
}

/* End of file Auth.php */
