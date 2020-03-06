<?php
if(isset($_POST["log-in"])){
	if (isset($_POST["username"])&&isset($_POST["password"])) {
		for ($i=0; $i < count($result); $i++) {
			if($_POST["username"]==$result[$i]["username"]&&$_POST["password"]==$result[$i]["password"]){
				$_SESSION["name"] = $result[$i]["fullName"];
				header("refresh:0");
				break;
			}
		}
	}
}
?>