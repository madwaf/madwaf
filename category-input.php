<?php

$artist = new App\Photo();
$rows = $album->tampil();

?>
<?php

$album = new App\Photo();
$rows = $photo->tampil();
?>

<h2>Tambah Data Category</h2>
<form action="track_proses.php" method="POST">
<table>
	<tr>
		<td>NAMA CATEGORY</td>
		<td>:</td>
		<td><input type="text" name="i_nama"/></td>
		</tr>
	<tr>
	<tr>
		<td>NAMA PHOTO</td>
        <td>:</td>
		<td>
		<select name="i_id_album">
		<?php foreach($rows as $row){ ?>
			<option value="<?php echo $row['album_id']; ?>"><?php echo $row['album_name']; ?></option>
		<?php } ?>
		</select>
    <tr>
	<tr>
        <td>NAMA PHOTO</td>
        <td>:</td>
		<td>
		<select name="i_id_photos">
		<?php foreach($rows as $row){ ?>
			<option value="<?php echo $row['photos_id']; ?>"><?php echo $row['photos_name']; ?></option>
		<?php } ?>
		</select>
		</td>
	</tr>
    <tr>
		<td></td>
        <td></td>
		<td><input type="submit" name="b_input" value="SIMPAN"/></td>
	</tr>
</table>
</form>