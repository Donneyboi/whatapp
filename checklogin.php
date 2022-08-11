<?php session_start();

if (isset($_SESSION['email'])) {
echo"<style>
.forregister{display:none}
.homepage{diplay:block}

	</style>";
}

else{
	echo"<style>
.forregister{display:block}
.homepage{diplay:none}

	</style>";
}





  ?>