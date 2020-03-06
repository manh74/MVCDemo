<?php
	if(isset($_POST["log-out"])){
		session_destroy();
		header("refresh:0");
	}
?>