<html>
<tittle> PHP-Timbangan </tittle>

<body>
	<form action = "php_timbanganver2.php" method = "POST">
		Masukan berat anda <input type = "TEXT" name = "nilai" value ="0" />
		<input type="submit" name="submit" value = "Hasil"/>

<?PHP
if ($_POST ['nilai'] >= 80)
{
	$result = "Anda Berat";
}
ELSE
{
	$result = "Berat Anda Adalah Normal";
}

?>

Mesej Untuk Anda :
<?PHP
	ECHO "$result";
?>
</body>
</html>