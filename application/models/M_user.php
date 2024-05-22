<?php
class M_user extends CI_Model
{

    private $table = "users";
    function get_all_data(){
		$hsl=$this->db->query("SELECT * FROM users");
		return $hsl;	
	}

    function simpan_data($nama_pemeriksa, $sesi_check_point, $area, $photo_bukti)
    {
        $hsl = $this->db->query("INSERT INTO data_check_point (nama_pemeriksa,sesi_check_point,area,photo_bukti) VALUES ('$nama_pemeriksa','$sesi_check_point','$area','$photo_bukti')");
        return $hsl;
    }

    function add_data_user($nama,$username,$password,$level){
        $hsl = $this->db->query("INSERT INTO users (nama_user,username_user,password_user,pengguna_level) VALUES ('$nama','$username','$password','$level')");
        return $hsl;
    }

    public function getById($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}
