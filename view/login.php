<?php
    if (isset($_SESSION["name"])) {
 ?>
    <form method="POST">
    	<div style="display: flex; justify-content: space-around;">
	    	<p>Hello <b><?php echo $_SESSION["name"];?></b></p>
	    	<input type="submit" name="log-out" value="Log out">
    	</div>
    </form>
<?php
    } else {
?>
    <form method="POST">
	    <h1>Log in</h1>
    	<p>Username</p>
    	<input type="text" name="username">
    	<p>Password</p>
    	<input type="password" name="password">
    	<input type="submit" name="log-in" value="Log in">
  </form>
<?php } ?>