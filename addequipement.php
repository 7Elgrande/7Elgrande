<?php
require("connect.php");


if (isset($_POST['sub'])) {
	$name=$_POST['name'];
	echo "$name";
}
?>