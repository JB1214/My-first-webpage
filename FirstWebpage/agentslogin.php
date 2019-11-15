<!--CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; -->

<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demos";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
<div class="container">
	<h2>Example: Login and Registration Script with PHP, MySQL</h2>		
	<div class="collapse navbar-collapse" >
		<ul class="nav navbar-nav navbar-left">
			<?php if (isset($_SESSION['user_id'])) { ?>
			<li><p class="navbar-text"><strong>Welcome!</strong> You're signed in as <strong><?php echo $_SESSION['user_name']; ?></strong></p></li>
			<li><a href="logout.php">Log Out</a></li>
			<?php } else { ?>
			<li><a href="agentslogin.php">Login</a></li>
			<li><a href="index.php">Sign Up</a></li>
			<?php } ?>
		</ul>
	</div>	
</div>	