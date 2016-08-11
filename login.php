<!DOCTYPE html>
<html>
<head>
<title>UersManagementProject</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />
</head>
<body>
<div id="container">
<header>
<h1><a href="register.php">UersManagementProject</a></h1>
</header>

<ul id="main_menu">
<li><a href="register.php" title="Register new user">Register</a></li>
<li><a href="search.php" title="Users list">Search</a></li>
<li><a href="login.php" title="Login private area">Login</a></li>
</ul>

<form method="post" action="login_action.php">
<fieldset>
<legend>Login</legend>
<p><label> Username test : </label><input type="text" name="username" /></p>
<p><label> Password test: </label><input type="password" name="password" /></p>
<p class="center"><input value="Login" type="submit" class="center" /></p>
</fieldset>
</form>

<footer>
<p>Copyright &copy; 2016 DemoProject</p>
<p><a href="mailto:priyanka_thakare%20at%20persistent.co.in">Contact</a></p>
</footer>

</div>
</body>
</html>