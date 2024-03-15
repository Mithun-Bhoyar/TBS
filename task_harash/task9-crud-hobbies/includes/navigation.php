<?php $url = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarNav">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<div class ="collapse navbar-collapse" id="navbarNav">
		<ul class="nav navbar-nav">
			
			
			<li <?php echo($url=="hobby_manage.php" || $url=="hobby_create.php" || $url=="hobby_update.php")?"class='active'":'';?>><a href="hobby_manage.php">Manage Hobbies</a></li>

			<li <?php echo($url=="user_manage.php" || $url=="user_create.php" || $url=="user_update.php")?"class='active'":'';?>><a href="user_manage.php">Manage Users</a></li>

			<li <?php echo($url=="country_manage.php" || $url=="country_create.php" || $url=="country_update.php")?"class='active'":'';?>><a href="country_manage.php">Manage country</a></li>

			<li <?php echo($url=="state_manage.php" || $url=="state_create.php" || $url=="state_update.php")?"class='active'":'';?>><a href="state_manage.php">Manage state</a></li>

			<li <?php echo($url=="city_manage.php" || $url=="city_create.php" || $url=="city_update.php")?"class='active'":'';?>><a href="city_manage.php">Manage city</a></li>
		</ul>
	</div>
</nav>