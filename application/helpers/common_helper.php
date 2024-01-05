<?php

if (!function_exists('is_login')) {
  function is_login() {
    $CI =& get_instance();
    return (bool) $CI->session->has_userdata('id') && $CI->session->has_userdata('token');
  }
}
