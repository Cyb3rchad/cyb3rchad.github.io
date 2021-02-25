<?php
require 'header.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sapphire Priavte Health Clinic</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Banner -->
			<section id="banner" class="major">
				<div class="inner">
					<header class="major">
						<h1>SPC, Your Health, Our Care</h1>
					</header>
					<div class="content">
						<p>A specialised private health clinic for premium guest.<br />
						Offering Physiotherapy, Surgery's, Checkups and more.</p>
						<ul class="actions">
							<li><a href="#one" class="button next scrolly">Get Started</a></li>
						</ul>
					</div>
				</div>
			</section>
				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="aboutus.php" class="link">Abouts Us</a></h3>
										<p>SPC's story and what we do</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="contact.php" class="link">Contact Details</a></h3>
										<p>How to get in touch</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<header class="major">
										<?php
									if(isset($_SESSION['userid'])) {
										echo '<h3><a href="logout.php" class="link">Log Out</a></h3>
										<p>Have an account? Log Out</p>';
									}
									else{
										echo '<h3><a href="login.php" class="link">Login</a></h3>
										<p>Have an account? Login</p>';
									}
									?>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="gallery.php" class="link">Gallery</a></h3>
										<p>Photo library of our company</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<header class="major"><?php
									require 'databaseinc.php';
									if(isset($_SESSION['userid'])){
										require 'checkuser.php';
										if($_SESSION['check']=='staff'){
											echo '<h3><a href="viewmessage.php" class="link">View Messages</a></h3>';
									}
									else{
										echo '<h3><a href="memberships.php" class="link">Memberships</a></h3><p>View Our Memberships</p>';
									}
								}
									else{
										echo '<h3><a href="memberships.php" class="link">Memberships</a></h3><p>View Our Memberships</p>';
										}
										?>


									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<header class="major">
										<?php
									if(isset($_SESSION['userid'])) {
										echo '<h3><a href="booking.php" class="link">Manage '.$_SESSION['userid'].'s bookings</a></h3>';
									}
									else{
										echo '<h3><a href="login.php" class="link">Bookings</a></h3><p>Login to view your bookings</p>';
									}
									?>
										<p></p>
									</header>
								</article>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>Accounts</h2>
									</header>
									<p>Accounts are only made by staff and for members of our clinic. To sign up please conact us.</p>
									<ul class="actions">
										<li><a href="index.php" class="button next">Get Started</a></li>
									</ul>
								</div>
							</section>

					</div>

					<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="message.php">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">SapphirePrivateClinic@gmail.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(+44) 02929484473</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>13 Cyncoed Road<br />
										Cardiff, CF235HR<br />
										United Kingdom</span>
									</div>
								</section>
							</section>
					</section>
<?php require 'footer.php'; ?>
	</body>
</html>
