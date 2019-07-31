<?php
session_start();
$color=$_SESSION['color']??'white';
$_SESSION['color']=$_POST['color'];
print_r($_COOKIE);
echo $color;
?>
<style>
	body{
		background:<?php echo $_SESSION['color']; ?>;
	}
</style>
<form action="index.php" method="post">
    <p><input name="color" type="radio" value="red">RED</p>
    <p><input name="color" type="radio" value="blue">BLUE</p>
    <p><input name="color" type="radio" checked="checked" value="green">GREEN</p>
    <p><input type="submit" value="Choose yor color"></p>
</form>