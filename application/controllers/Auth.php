<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
  }

  public function index()
  {
    $to = is_login() ? 'home' : 'auth/login';
    redirect($to);
  }

  public function login()
  {
    if ($this->input->post()) {
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $check = $this->db->get_where('tb_user', ['email' => $email]);
      if ($check->num_rows() > 0) {
        $user = $check->row();
        if (password_verify($password, $user->password)) {
          unset($user->password);
          $new_token = bin2hex(random_bytes(16));
          $user->ip_address = $user->ip_address ?? $this->input->ip_address();
          $user->token = $new_token;
          
          $this->db->update('tb_user', [
            'token' => $new_token,
            'ip_address' => $this->input->ip_address()
          ], ['id' => $user->id]);

          $this->session->set_userdata((array) $user);
          redirect('/');
        } else {
          // salah password
          $this->session->set_flashdata('error', 'password salah');
          redirect('auth/login');
        }
      } else {
        // salah email
        $this->session->set_flashdata('error', 'email salah');
        redirect('auth/login');
      }
    } else {
      if (is_login()) {
        redirect('/');
      }

      $this->load->view('form_login');
    }
  }

  public function logout()
  {
    $this->db->update('tb_user', ['token'=>null], ['id' => $this->session->id]);
    $this->session->sess_destroy();
    redirect('/');
  }

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
