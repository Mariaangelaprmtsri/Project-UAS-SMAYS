<?php

class SiswaModel
{
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getDetailSiswa($id)
    {
        $this->db->query('SELECT * FROM siswa WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function getSiswaWithKelas()
    {
        $this->db->query('SELECT siswa.id, siswa.id_kelas, siswa.nama, siswa.total_nilai, kelas.nama AS kelas_nama FROM siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id');
        return $this->db->resultSet();
    }
    public function getSiswaNotKelas()
    {
        $this->db->query('SELECT siswa.id, siswa.id_kelas, siswa.nama, siswa.total_nilai FROM siswa WHERE siswa.id_kelas IS NULL');
        return $this->db->resultSet();
    }

    public function getSiswaByKelas($id_kelas)
    {
        $this->db->query('SELECT * FROM siswa WHERE id_kelas=:id_kelas');
        $this->db->bind('id_kelas', $id_kelas);

        return $this->db->resultSet();
    }
    
    public function getSiswaAVG($id)
    {
        $this->db->query('SELECT AVG(nilai) AS nilai_avg FROM nilai WHERE id_siswa = :id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function addSiswa($data)
    {
        $query = "INSERT INTO siswa VALUES('', :id_kelas, :nama, :tanggal_lahir, NULL)";
        $this->db->query($query);
        
        $this->db->bind('id_kelas', $data['id_kelas']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateSiswa($data)
    {
        $query = "UPDATE siswa SET id_kelas=:id_kelas, nama=:nama, tanggal_lahir=:tanggal_lahir WHERE id=:id";
        $this->db->query($query);
        
        $this->db->bind('id', $data['id']);
        $this->db->bind('id_kelas', $data['id_kelas']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateNilaiSiswa($id, $total_nilai)
    {
        $query = "UPDATE siswa SET total_nilai=:total_nilai WHERE id=:id";
        $this->db->query($query);
        
        $this->db->bind('total_nilai', $total_nilai);
        $this->db->bind('id', $id);
        
        $this->db->execute();
        return $this->db->rowCount();
    }
}