<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi_model extends CI_Model {

    // public function getDataMateri($id)
    // {
    //     $this->datatables->select('a.id_ujian, a.token, a.nama_ujian, b.nama_matkul, a.jumlah_soal, CONCAT(a.tgl_mulai, " <br/> (", a.waktu, " Menit)") as waktu, a.jenis');
    //     $this->datatables->from('m_ujian a');
    //     $this->datatables->join('matkul b', 'a.matkul_id = b.id_matkul');
    //     if($id!==null){
    //         $this->datatables->where('dosen_id', $id);
    //     }
    //     return $this->datatables->generate();
    // }
    
    public function getListMateri($id)
    {
        $this->datatables->select("a.id_ujian, e.nama_dosen, d.nama_kelas, a.nama_ujian, b.nama_matkul, a.jumlah_soal, CONCAT(a.tgl_mulai, ' <br/> (', a.waktu, ' Menit)') as waktu,  (SELECT COUNT(id) FROM h_ujian h WHERE h.mahasiswa_id = {$id} AND h.ujian_id = a.id_ujian) AS ada");
        $this->datatables->from('m_ujian a');
        $this->datatables->join('matkul b', 'a.matkul_id = b.id_matkul');
        $this->datatables->join('kelas_dosen c', "a.dosen_id = c.dosen_id");
        $this->datatables->join('kelas d', 'c.kelas_id = d.id_kelas');
        $this->datatables->join('dosen e', 'e.id_dosen = c.dosen_id');
        $this->datatables->where('d.id_kelas', $kelas);
        return $this->datatables->generate();
    }

    public function getDataMateri()
    {
        $this->datatables->select('a.id_materi, b.nama_matkul, a.judul_materi, a.isi_materi, FROM_UNIXTIME(a.created_on) as created_on, FROM_UNIXTIME(a.update_on) as update_on');
        $this->datatables->from('tb_materi a');
        $this->datatables->join('matkul b', 'b.id_matkul=a.matkul_id');
        // if ($id!==null && $dosen===null) {
        //     $this->datatables->where('a.matkul_id', $id);            
        // }else if($id!==null && $dosen!==null){
        //     $this->datatables->where('a.dosen_id', $dosen);
        // }
        return $this->datatables->generate();
    }

    public function getDataMateriTanpaIsi()
    {
        $this->datatables->select('a.id_materi, b.nama_matkul, a.judul_materi, FROM_UNIXTIME(a.created_on) as created_on, FROM_UNIXTIME(a.update_on) as update_on');
        $this->datatables->from('tb_materi a');
        $this->datatables->join('matkul b', 'b.id_matkul=a.matkul_id');
        return $this->datatables->generate();
    }    

    public function getMateriById($id)
    {
        return $this->db->get_where('tb_materi', ['id_materi' => $id])->row();
    }

    public function getMatkulByMateri($id)
    {
        $this->db->select('a.id_materi, a.matkul_id, b.nama_matkul');
        $this->db->from('tb_materi a');
        $this->db->join('matkul b','b.id_matkul = a.matkul_id');
        $this->db->where('a.id_materi = ', $id);
        return $this->db->get()->row();
    }

    public function getMatkulDosen($nip)
    {
        $this->db->select('matkul_id, nama_matkul, id_dosen, nama_dosen');
        $this->db->join('matkul', 'matkul_id=id_matkul');
        $this->db->from('dosen')->where('nip', $nip);
        return $this->db->get()->row();
    }

    public function getAllDosen()
    {
        $this->db->select('*');
        $this->db->from('dosen a');
        $this->db->join('matkul b', 'a.matkul_id=b.id_matkul');
        return $this->db->get()->result();
    }

    public function getAllMatkul()
    {
        return $this->db->get('matkul')->result();
    }    

}

/* End of file Materi_model.php */
/* Location: ./application/models/Materi_model.php */
 ?>