<?php

$artist = new App\Artist();
$rows = $artist->tampil();

?>

<h2>Tambah Data Album</h2>
<form action="artist_proses.php" method="POST">
<table>
	<tr>
		<td>NAMA ALBUM</td>
		<td>:</td>
		<td><input type="text" name="i_nama"/></td>
		</tr>
	<tr>
    <tr>
		<td></td>
        <td></td>
		<td><input type="submit" name="b_input" value="SIMPAN"/></td>
	</tr>
</table>
</form>