<?php
date_default_timezone_set('Asia/Jakarta');
?>

<html>

<head>
	<title>Sensor Data</title>
</head>

<body>
	<h1>Sensor readings</h1>

	<table style="float:left;margin-right:2%" border="1" cellspacing="1" cellpadding="1">
		<caption>Data User</caption>
		<tr>
			<td>&nbsp;ID User&nbsp;</td>
			<td>&nbsp;Nama&nbsp;</td>
			<td>&nbsp;Email&nbsp;</td>
			<td>&nbsp;Password&nbsp;</td>
		</tr>
		<?php foreach ($resultUser as $row) : ?>
		<tr>
			<td> &nbsp;<?=$row['id_user']?>&nbsp;</td>
			<td> &nbsp;<?=$row['nama']?>&nbsp;</td>
			<td> &nbsp;<?=$row['email']?>&nbsp;</td>
			<td> &nbsp;<?=$row['password']?>&nbsp;</td>
		</tr>
		<?php endforeach; ?>
	</table>
	
	<table style="float:left;margin-right:2%" border="1" cellspacing="1" cellpadding="1">
		<caption>Data Vehicle</caption>
		<tr>
			<td>&nbsp;Plate Number&nbsp;</td>
			<td>&nbsp;Bike Type&nbsp;</td>
		</tr>
		<?php foreach ($resultVehicle as $row) : ?>
		<tr>
			<td> &nbsp;<?=$row['plateNo']?>&nbsp;</td>
			<td> &nbsp;<?=$row['bikeType']?>&nbsp;</td>
		</tr>
		<?php endforeach; ?>
	</table>
	
	<table style="float:left;margin-right:2%" border="1" cellspacing="1" cellpadding="1">
		<caption>Data Booking</caption>
		<tr>
			<td>&nbsp;Plate Number&nbsp;</td>
			<td>&nbsp;ID User&nbsp;</td>
			<td>&nbsp;Booking at&nbsp;</td>
			<td>&nbsp;Check in&nbsp;</td>
			<td>&nbsp;Closed at&nbsp;</td>
		</tr>
		<?php foreach ($resultBooking as $row) : ?>
		<tr>
			<td> &nbsp;<?=$row['plateNo']?>&nbsp;</td>
			<td> &nbsp;<?=$row['id_user']?>&nbsp;</td>
			<td> &nbsp;<?=$row['booking_at']?>&nbsp;</td>
			<td> &nbsp;<?=$row['check_in']?>&nbsp;</td>
			<td> &nbsp;<?=$row['closed_at']?>&nbsp;</td>
		</tr>
		<?php endforeach; ?>
	</table>
	
	<table style="float:left;margin-right:2%" border="1" cellspacing="1" cellpadding="1">
		<caption>Data Finished Booking</caption>
		<tr>
			<td>&nbsp;Plate Number&nbsp;</td>
			<td>&nbsp;ID User&nbsp;</td>
			<td>&nbsp;Booking at&nbsp;</td>
			<td>&nbsp;Check in&nbsp;</td>
			<td>&nbsp;Closed at&nbsp;</td>
		</tr>
		<?php foreach ($resultFinishedBooking as $row) : ?>
		<tr>
			<td> &nbsp;<?=$row['plateNo']?>&nbsp;</td>
			<td> &nbsp;<?=$row['id_user']?>&nbsp;</td>
			<td> &nbsp;<?=$row['booking_at']?>&nbsp;</td>
			<td> &nbsp;<?=$row['check_in']?>&nbsp;</td>
			<td> &nbsp;<?=$row['closed_at']?>&nbsp;</td>
		</tr>
		<?php endforeach; ?>
	</table>

</body>

</html>