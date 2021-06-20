<?php

$artist = new App\Album();
$rows = $album->tampil();

?>
<?php

$album = new App\photo();
$rows = $photo->tampil();
?>
<h2>Tambah Data Played</h2>
<form action="played_proses.php" method="POST">
<table>
    <tr>
		<td>POST</td>
		<td>:</td>
		<td><input type="text" name="i_post"/></td>
		</tr>
	<tr>
	<tr>
		<td>NAMA Album</td>
        <td>:</td>
		<td>
		<select name="i_id_album">
		<?php foreach($rows as $row){ ?>
			<option value="<?php echo $row['album_id']; ?>"><?php echo $row['album_name']; ?></option>
		<?php } ?>
		</select>
    <tr>
	<tr>
        <td>NAMA ALBUM</td>
        <td>:</td>
		<td>
		<select name="i_id_album">
		<?php foreach($rows as $row){ ?>
			<option value="<?php echo $row['album_id']; ?>"><?php echo $row['album_name']; ?></option>
		<?php } ?>
		</select>
		</td>
	</tr>
    <tr>
		<td>NAMA TRACK</td>
        <td>:</td>
		<td>
		<select name="i_id_track">
		<?php foreach($rows as $row){ ?>
			<option value="<?php echo $row['track_id']; ?>"><?php echo $row['track_name']; ?></option>
		<?php } ?>
		</select>
    <tr>
    <tr>
		<td></td>
        <td></td>
		<td><input type="submit" name="b_input" value="SIMPAN"/></td>
	</tr>
</table>
</form>