<?php
session_start();
include "connection.php";
$login = $_SESSION['logged_on_user'];
$sql = "SELECT * FROM 'user' WHERE `login` = '{$login}' and `admin` = 'yes'";
$admin = mysqli_query($conn, $sql);
$root = mysqli_fetch_assoc($admin);
if ($root > 0)
{
	include 'admin.php';
}
else
{
	echo "ERROR";
	exit();
}
?>

<HTML>
	<HEAD>
		<link rel="stylesheet" type="text/css" href="main.css">
		<TITLE>login</TITLE>
	</HEAD>
	<BODY bgcolor="black">
		<A HREF="index.php"><IMG id="logo" SRC="./42_logo_white.png"></A>
		<H1 class="title">ADMIN</H1>
		<DIV class="login">
		<FORM action="admin.php" method="POST">
			<INPUT class="button" type="submit" name="submit" value="MODIFY"/>
		</FORM>
		</DIV>
	</BODY>
</HTML>
