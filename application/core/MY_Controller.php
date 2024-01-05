<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    # cek apakah user sudah login / belum
    if (!is_login()) redirect('auth/login');
    # pencocokan data token session vs token di db
    $this->check_token();
  }

  protected function check_token()
  {
    $test = $this->db->get_where('tb_user', [
      'id' => $this->session->id,
      'token' => $this->session->token
    ]);

    if ($test->num_rows() == 0) {
      redirect('auth/logout');
    }
  }

}



/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
