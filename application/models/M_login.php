<?php

class M_login extends CI_Model{
function cekadmin($username,$password){
	$hasil=$this->db->query("SELECT * FROM users WHERE username_user='$username' AND password_user='$password'");
	return $hasil;
}
}