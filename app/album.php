<?php

namespace App;

class Album extends koneksi{

    public function __construct()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_album INNER JOIN tb_photos ON tb_album.album_id= tb_photos.photos_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    } 

    public function input()
    {
        $i_nama = $_POST['i_nama'];
        $i_id_album = $_POST['i_id_photos'];

        $sql = "INSERT INTO tb_photos VALUES (NULL, :photos_name, :album_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":photos_name", $i_nama);
        $stmt->bindParam(":album_id", $i_id_photos);
        $stmt->execute();
    }
}