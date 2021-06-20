<?php

$played = new App\Played();
$rows = $played->tampil();

?>

<h2> Data Played </h2>

<a href="index.php?page=played_input" >Tambah+</a>
<table border="1">
	<tr>
        <th>NO</th>
        <th>POST</th>
		<th>NAMA CATEGORY</th>
        <th>NAMA ALBUM</th>
        <th>NAMA PHOTO</th>
		<th>EDIT</th>
	</tr>
	<?php foreach($rows as $row){ ?>
	<tr>
		<td><?php echo $row['played_id']; ?></td>
		<td><?php echo $row['played']; ?></td>
		<td><?php echo $row['album_id']; ?> - <?php echo $row['album_name']; ?></td>
		<td><?php echo $row['photo_id']; ?> - <?php echo $row['photo_name']; ?></td>
		<td><?php echo $row['post_id']; ?> - <?php echo $row['post_name']; ?></td>
		<td>
			<a href="index.php?page=edit_artist&id=<?php echo $row['album_id']; ?> page=edit_album&id=<?php echo $row['album_id']; ?> page=edit_track&id=<?php echo $row['track_id']; ?>">Edit</a>										
        </td>
    </tr>
    <?php } ?>
</table>