<form action = "StringUpperLower2.php" method = "GET">
	
	Name:<input type = "text" name = "user_name"><br><br>
	<input type = "submit" value = "submit">

</form>

<?php

if(isset($_GET["user_name"]) && !empty($_GET["user_name"])){
	echo $user_name = $_GET["user_name"];
}

?><br>

<?php

if(isset($_GET["user_name"]) && !empty($_GET["user_name"])){
	if($user_name == "gayathri"){
		echo "You are the best";
	}
}

?><br>

<?php

if(isset($_GET["user_name"]) && !empty($_GET["user_name"])){
	$user_name = $_GET["user_name"];
	$user_name_lc = strtolower($user_name);
	
	if($user_name_lc == "gayathri"){
		echo "You are the best ".$user_name.".";
	}
}

?>
