<html><body>
<?php
$msg="";
$g="";
$gCase="";

if(isset($_POST['run']))
{
	$gread = $_POST['gread'];
	if(is_numeric($gread))
	{
		if($gread>=0 && $gread<=100)
			
		{
			
			$g= $gread;
			if($g>=60) $gCase = "Pas";
			else $gCase="Faail";
			
		}
	else $msg= "gread must be nomer 0 and 100";
	}
	else $msg= "gread must be nomer";
}

?>
<form action="" method="post">
Gread <input type="text" name="gread"/><?php echo $msg ?><br>
<input type="submit" name="run" value="submit"></br>
</form>

<?php

if(isset($_POST['run']))
{
	echo "<h2>  yuor gread is:  $ga </h2>";
	echo "<h2>$ca</h2>";
}

?>
</body></html>