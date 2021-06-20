<?php

namespace App;

class Photos extends koneksi{

    public function __construct()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_photos INNER JOIN tb_post ON tb_photos.photos_id= tb_post.post_id";
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
        $i_id_photos = $_POST['i_id_cat'];

        $sql = "INSERT INTO tb_category VALUES (NULL, :category_name, :post_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":category_name", $i_nama);
        $stmt->bindParam(":post_id", $i_id_cat);
        $stmt->execute();
    }
}