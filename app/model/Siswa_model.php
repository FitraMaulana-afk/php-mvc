<?php

class Siswa_model
{
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSiswa()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }

    public function getSiswaById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id =:id");
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }


    public function tambahData($data)
    {
        $query = " INSERT INTO siswa VALUES
        (NULL, :nama, :jns_kelamin, :alamat ) ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jns_kelamin', $data['jns_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editDataSiswa($data)
    {
        $query = "UPDATE siswa SET
        nama = :nama,
        jns_kelamin = :jns_kelamin,
        alamat = :alamat WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jns_kelamin', $data['jns_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function delete($id)
    {
        $query = "DELETE FROM siswa WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
