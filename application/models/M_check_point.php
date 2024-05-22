<?php
class M_check_point extends CI_Model
{

    function get_all_data()
    {
        $hsl = $this->db->query("SELECT * FROM data_check_point");
        return $hsl;
    }

    function get_data_by_date($waktu1, $waktu2)
    {
        $this->db->where('tanggal_waktu >=', $waktu1);
        $this->db->where('tanggal_waktu <=', $waktu2);
        return $this->db->get('data_check_point');
    }

    function get_data_by_paket($paket){
        $hsl = $this->db->query("SELECT * FROM jadwal_paket WHERE paket='$paket'");
        return $hsl;
    }

    function get_data_by_paket_sesi1($where,$sesi1){
        $hsl = $this->db->query("SELECT * FROM jadwal_paket WHERE paket='$where' AND sesi='$sesi1' GROUP BY paket");
        return $hsl;
    }

    function get_data_by_paket_sesi2($where,$sesi2){
        $hsl = $this->db->query("SELECT * FROM jadwal_paket WHERE paket='$where' AND sesi='$sesi2' GROUP BY paket");
        return $hsl;
    }

    function get_data_by_paket_sesi3($where,$sesi3){
        $hsl = $this->db->query("SELECT * FROM jadwal_paket WHERE paket='$where' AND sesi='$sesi3' GROUP BY paket");
        return $hsl;
    }

    function get_data_by_paket_sesi4($where,$sesi4){
        $hsl = $this->db->query("SELECT * FROM jadwal_paket WHERE paket='$where' AND sesi='$sesi4' GROUP BY paket");
        return $hsl;
    }

    function get_data_by_paket_sesi5($where,$sesi5){
        $hsl = $this->db->query("SELECT * FROM jadwal_paket WHERE paket='$where' AND sesi='$sesi5' GROUP BY paket");
        return $hsl;
    }

    function get_data_by_paket_sesi6($where,$sesi6){
        $hsl = $this->db->query("SELECT * FROM jadwal_paket WHERE paket='$where' AND sesi='$sesi6' GROUP BY paket");
        return $hsl;
    }

    public function get_data_by_paket_id($id_paket){
        $hsl = $this->db->query("SELECT * FROM jadwal_paket WHERE id_paket='$id_paket'");
        return $hsl;
    }

    function simpan_data($nama_pemeriksa, $sesi_check_point, $area, $photo_bukti, $keterangan)
    {
        $hsl = $this->db->query("INSERT INTO data_check_point (nama_pemeriksa,sesi_check_point,area,photo_bukti,keterangan) VALUES ('$nama_pemeriksa','$sesi_check_point','$area','$photo_bukti','$keterangan')");
        return $hsl;
    }

    function add_data_paket($data)
    {   
        
            $this->db->insert_batch('jadwal_paket', $data);
    }

    function get_data($sesi1)
    {

        $hasil = $this->db->query("SELECT * FROM data_jadwal_sesi WHERE sesi = '$sesi1'");
        return $hasil;
    }

    function get_all_data_jadwal()
    {
        $hsl = $this->db->query("SELECT * FROM data_jadwal_sesi");
        return $hsl;
    }

    function get_all_data_paket_table()
    {
        $hsl = $this->db->query("SELECT * FROM jadwal_paket");
        return $hsl;
    }

    function get_data_paket_sesi1($paket)
    {
        $hsl = $this->db->query("SELECT * FROM jadwal_paket WHERE paket = '$paket' AND sesi = 'sesi 1'");
        return $hsl;
    }
    
    function get_data_paket_sesi2($paket)
    {
        $hsl = $this->db->query("SELECT * FROM jadwal_paket WHERE paket = '$paket' AND sesi = 'sesi 2'");
        return $hsl;
    }
    
    function get_data_paket_sesi3($paket)
    {
        $hsl = $this->db->query("SELECT * FROM jadwal_paket WHERE paket = '$paket' AND sesi = 'sesi 3'");
        return $hsl;
    }
    
    function get_data_paket_sesi4($paket)
    {
        $hsl = $this->db->query("SELECT * FROM jadwal_paket WHERE paket = '$paket' AND sesi = 'sesi 4'");
        return $hsl;
    }
    
    function get_data_paket_sesi5($paket)
    {
        $hsl = $this->db->query("SELECT * FROM jadwal_paket WHERE paket = '$paket' AND sesi = 'sesi 5'");
        return $hsl;
    }
    
    function get_data_paket_sesi6($paket)
    {
        $hsl = $this->db->query("SELECT * FROM jadwal_paket WHERE paket = '$paket' AND sesi = 'sesi 6'");
        return $hsl;
    }

    function get_all_data_paket()
    {
        $hsl = $this->db->query("SELECT * FROM jadwal_paket GROUP BY paket");
        return $hsl;
    }

    public function getById($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($id_jadwal, $sesi, $jam_awal, $jam_akhir)
    {
        $hsl = $this->db->query("UPDATE data_jadwal_sesi SET sesi='$sesi',jam_awal='$jam_awal',jam_akhir='$jam_akhir' WHERE id_jadwal='$id_jadwal'");
        return $hsl;
    }

    function get_data_excel($waktu1, $waktu2)
    {
        $this->db->where('tanggal_waktu >=', $waktu1);
        $this->db->where('tanggal_waktu <=', $waktu2);
        return $this->db->get('data_check_point');
    }

    public function update_jadwal_paket1()
    {
        $this->db->trans_start();
        $this->db->query("UPDATE data_jadwal_sesi SET sesi='sesi 1',jam_awal='18:00:00',jam_akhir='20:00:00' WHERE id_jadwal='1'");
        $this->db->query("UPDATE data_jadwal_sesi SET sesi='sesi 2',jam_awal='20:00:00',jam_akhir='22:00:00' WHERE id_jadwal='2'");
        $this->db->query("UPDATE data_jadwal_sesi SET sesi='sesi 3',jam_awal='22:00:00',jam_akhir='00:00:00' WHERE id_jadwal='3'");
        $this->db->query("UPDATE data_jadwal_sesi SET sesi='sesi 4',jam_awal='00:00:00',jam_akhir='02:00:00' WHERE id_jadwal='4'");
        $this->db->query("UPDATE data_jadwal_sesi SET sesi='sesi 5',jam_awal='02:00:00',jam_akhir='04:00:00' WHERE id_jadwal='5'");
        $this->db->query("UPDATE data_jadwal_sesi SET sesi='sesi 6',jam_awal='04:00:00',jam_akhir='06:00:00' WHERE id_jadwal='6';");
        $this->db->trans_complete();
    }

    public function update_jadwal($sesi1,$jamawalsesi1,$jamakhirsesi1,$sesi2,$jamawalsesi2,$jamakhirsesi2,$sesi3,$jamawalsesi3,$jamakhirsesi3,$sesi4,$jamawalsesi4,$jamakhirsesi4,$sesi5,$jamawalsesi5,$jamakhirsesi5,$sesi6,$jamawalsesi6,$jamakhirsesi6){
        $this->db->trans_start();
        $this->db->query("UPDATE data_jadwal_sesi SET jam_awal='$jamawalsesi1',jam_akhir='$jamakhirsesi1' WHERE sesi='$sesi1'");
        $this->db->query("UPDATE data_jadwal_sesi SET jam_awal='$jamawalsesi2',jam_akhir='$jamakhirsesi2' WHERE sesi='$sesi2'");
        $this->db->query("UPDATE data_jadwal_sesi SET jam_awal='$jamawalsesi3',jam_akhir='$jamakhirsesi3' WHERE sesi='$sesi3'");
        $this->db->query("UPDATE data_jadwal_sesi SET jam_awal='$jamawalsesi4',jam_akhir='$jamakhirsesi4' WHERE sesi='$sesi4'");
        $this->db->query("UPDATE data_jadwal_sesi SET jam_awal='$jamawalsesi5',jam_akhir='$jamakhirsesi5' WHERE sesi='$sesi5'");
        $this->db->query("UPDATE data_jadwal_sesi SET jam_awal='$jamawalsesi6',jam_akhir='$jamakhirsesi6' WHERE sesi='$sesi6';");
        $this->db->trans_complete();
    }

    public function update_paket($NamaPaket,$sesi1_jam_awal,$sesi1_jam_akhir,$sesi2_jam_awal,$sesi2_jam_akhir,$sesi3_jam_awal,$sesi3_jam_akhir,$sesi4_jam_awal,$sesi4_jam_akhir,$sesi5_jam_awal,$sesi5_jam_akhir,$sesi6_jam_awal,$sesi6_jam_akhir)
    {
        $this->db->trans_start();
        $this->db->query("UPDATE jadwal_paket SET jam_awal='$sesi1_jam_awal',jam_akhir='$sesi1_jam_akhir' WHERE sesi= 'sesi 1' AND paket = '$NamaPaket'");
        $this->db->query("UPDATE jadwal_paket SET jam_awal='$sesi2_jam_awal',jam_akhir='$sesi2_jam_akhir' WHERE sesi= 'sesi 2' AND paket = '$NamaPaket'");
        $this->db->query("UPDATE jadwal_paket SET jam_awal='$sesi3_jam_awal',jam_akhir='$sesi3_jam_akhir' WHERE sesi= 'sesi 3' AND paket = '$NamaPaket'");
        $this->db->query("UPDATE jadwal_paket SET jam_awal='$sesi4_jam_awal',jam_akhir='$sesi4_jam_akhir' WHERE sesi= 'sesi 4' AND paket = '$NamaPaket'");
        $this->db->query("UPDATE jadwal_paket SET jam_awal='$sesi5_jam_awal',jam_akhir='$sesi5_jam_akhir' WHERE sesi= 'sesi 5' AND paket = '$NamaPaket'");
        $this->db->query("UPDATE jadwal_paket SET jam_awal='$sesi6_jam_awal',jam_akhir='$sesi6_jam_akhir' WHERE sesi= 'sesi 6' AND paket = '$NamaPaket'");
        $this->db->trans_complete();
    }

    public function hapus_paket($paket){
        $hsl = $this->db->query("DELETE FROM jadwal_paket WHERE paket = '$paket'");
        return $hsl;
    }
}
