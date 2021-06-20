<?php

namespace App;

class Track extends koneksi{

    public function __construct()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_played INNER JOIN tb_artist ON tb_artist.artist_id = tb_played.played_id INNER JOIN tb_album ON tb_album.album_id=tb_album.album_id";
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
        $i_id_album = $_POST['i_id_album'];
        $i_id_artist = $_POST['i_id_artist'];

        $sql = "INSERT INTO tb_track VALUES (NULL, :track_name, :album_id, :artist_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":track_name", $i_nama);
        $stmt->bindParam(":album_id", $i_id_album);
        $stmt->bindParam(":artist_id", $i_id_artist);
        $stmt->execute();
    }
}