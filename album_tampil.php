<?php

$album = new App\Album();
$rows = $album->tampil();

?>

<h2> Data Album </h2>

<a href="index.php?page=album_input" >Tambah+</a>
<table border="1">
	<tr>
		<th>NO</th>
		<th>NAMA GALERI</th>
        <th>NAMA ALBUM</th>
		<th>EDIT</th>
	</tr>
	<?php foreach($rows as $row){ ?>
	<tr>
		<td><?php echo $row['photo_id']; ?></td>
		<td><?php echo $row['photo_name']; ?></td>
		<td><?php echo $row['album_id']; ?> - <?php echo $row['album_name']; ?></td>
		<td>
			<a href="index.php?page=edit_album&id=<?php echo $row['photo_id']; ?>">Edit</a>					
		</td>
    </tr>
    <?php } ?>
</table>