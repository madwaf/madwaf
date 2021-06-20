<?php

$artist = new App\Album();
$rows = $artist->tampil();

?>

<h2>Tambah Data Album</h2>
<form action="album_proses.php" method="POST">
<table>
	<tr>
		<td>NAMA ALBUM</td>
		<td>:</td>
		<td><input type="text" name="i_nama"/></td>
		</tr>
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
		<td></td>
        <td></td>
		<td><input type="submit" name="b_input" value="SIMPAN"/></td>
	</tr>
</table>
</form>