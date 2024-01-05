<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('parser');
  }

  public function index()
  {
    $this->parser->parse('blank', [
      'title' => 'Home',
      'content' => 'Homepage'
    ]);
  }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
