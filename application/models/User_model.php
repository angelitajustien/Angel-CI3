<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model{
   public function register($enc_password){
       // Array data user
       $data = array(
           'nama' => $this->input->post('nama'),
           'email' => $this->input->post('email'),
           'username' => $this->input->post('username'),
           'password' => $enc_password,
           'kodepos' => $this->input->post('kodepos')
       );

       // Insert user
       return $this->db->insert('users', $data);
   }
}