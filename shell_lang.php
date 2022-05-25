<html>
<body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" autofocus id="cmd" size="80">
<input type="SUBMIT" value="Execute">
</form>
<pre>
<?php
$myfile = fopen("index.php", "r") or die("Unable to open file!");
echo fread($myfile,filesize("index.php"));
fclose($myfile);
?>
</pre>
</body>
</html>
