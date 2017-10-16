<?php
	session_start();
	include('../ConexionBDD.php');
	include('objAdmin.php');
	include_once('../ObjClient.php');

	$admin= new Admin();
	$conecte=$admin->verificationConecte($bdd);
	echo $conecte;
	if ($conecte==1)
	{
		$admin->hydrateListeObjClient($bdd);

		$acceptation=0;
		$reffus=0;
		foreach ($admin->getListeClients() as $client) 
			{		
				if ($client->getPresence()==1)
					{
						$acceptation++;
					}
				else
					{
						$reffus++;
					}
			}			
	}
	else
	{
		header('location: index.php');
	}

?>


<!DOCTYPE HTML>
<!--
	Prologue 1.2 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Administration</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header" class="skel-panels-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
							<h1 id="title">Réponses</h1>
							<span class="byline">Espace administrateur</span>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--
							
								Prologue's nav expects links in one of two formats:
								
								1. Hash link (scrolls to a different section within the page)
								
								   <li><a href="#foobar" id="foobar-link" class="skel-panels-ignoreHref"><span class="fa fa-whatever-icon-you-want">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld"><span class="fa fa-whatever-icon-you-want">Foobar</span></a></li>
							
							-->
							<ul>
								<li><a href="#top" id="top-link" class="skel-panels-ignoreHref"><span class="fa fa-home">Réponses Positives (<?php echo $acceptation; ?>)</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-panels-ignoreHref"><span class="fa fa-th">Réponses Négatives (<?php echo $reffus; ?>)</span></a></li>
								<li><a href="#about" id="about-link" class="skel-panels-ignoreHref"><span class="fa fa-user">Toutes les réponses (<?php echo ($reffus+$acceptation); ?>)</span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-panels-ignoreHref"><span class="fa fa-envelope">Contact</span></a></li>
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

					<!-- Social Icons -->
						<!--<ul class="icons">
							<li><a href="#" class="fa fa-twitter solo"><span>Twitter</span></a></li>
							<li><a href="#" class="fa fa-facebook solo"><span>Facebook</span></a></li>
							<li><a href="#" class="fa fa-github solo"><span>Github</span></a></li>
							<li><a href="#" class="fa fa-dribbble solo"><span>Dribbble</span></a></li>
							<li><a href="#" class="fa fa-envelope solo"><span>Email</span></a></li>
						</ul>-->
				
				</div>
			
			</div>

		<!-- Main -->
			<div id="main">
			
				<!-- Intro -->
					<section id="top" class="one">
						<div class="container">

							<a href="/orga/orga.php" class="image featured"><img src="images/pic01.jpg" alt="" /></a>

							<header>
								<h2 class="alt">Liste des réponses Positives (<?php echo $acceptation; ?>)</h2>
							</header>
							
							<p>
								<table border="1">
									<tr style="border-bottom:1px solid">
										<td>
											<strong>Id</strong>
										</td>
										<td>
											<strong>Titre</strong><br/>
										</td>
										<td>
											<strong>Prenom</strong><br/>
										</td>
										<td>
											<strong>Nom</strong><br/>
										</td>
										<td>
											<strong>Message</strong><br/>
										</td>
										<td>
											<strong>Mail</strong><br/>
										</td>
										<td>
											<strong>Présence</strong><br/>
										</td>
										
									</tr>
									<?php
										//var_dump($admin->getListeClients());
										foreach ($admin->getListeClients() as $client) 
											{
												if ($client->getPresence()==1)
													{
														?>
														<tr>
															<td>
																<?php echo ($client->getId()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getTitre()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getPrenom()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getNom()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getMessage()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getMail()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getPresence()); ?><br/>
															</td>
															
														</tr>
													<?php
													}
												
											}

									?>
								</table>
							
							

						</div>
					</section>
					
				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">
					
							<header>
								<h2 class="alt">Liste des réponses Négatives (<?php echo $reffus; ?>)</h2>
							</header>
							
							<p>
								<table border="1">
									<tr style="border-bottom:1px solid">
										<td>
											<strong>Id</strong>
										</td>
										<td>
											<strong>Titre</strong><br/>
										</td>
										<td>
											<strong>Prenom</strong><br/>
										</td>
										<td>
											<strong>Nom</strong><br/>
										</td>
										<td>
											<strong>Message</strong><br/>
										</td>
										<td>
											<strong>Mail</strong><br/>
										</td>
										<td>
											<strong>Présence</strong><br/>
										</td>
										
									</tr>
									<?php
										//var_dump($admin->getListeClients());
										foreach ($admin->getListeClients() as $client) 
											{
												if ($client->getPresence()!=1)
													{
														?>
														<tr>
															<td>
																<?php echo ($client->getId()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getTitre()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getPrenom()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getNom()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getMessage()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getMail()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getPresence()); ?><br/>
															</td>
															
														</tr>
													<?php
													}
												
											}

									?>
								</table>
							</p>

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2 class="alt">Toutes les réponses (<?php echo ($reffus+$acceptation); ?>)</h2>
							</header>
							
							<p>
								<table border="1">
									<tr style="border-bottom:1px solid">
										<td>
											<strong>Id</strong>
										</td>
										<td>
											<strong>Titre</strong><br/>
										</td>
										<td>
											<strong>Prenom</strong><br/>
										</td>
										<td>
											<strong>Nom</strong><br/>
										</td>
										<td>
											<strong>Message</strong><br/>
										</td>
										<td>
											<strong>Mail</strong><br/>
										</td>
										<td>
											<strong>Présence</strong><br/>
										</td>
										
									</tr>
									<?php
										//var_dump($admin->getListeClients());
										foreach ($admin->getListeClients() as $client) 
											{
												
														?>
														<tr>
															<td>
																<?php echo ($client->getId()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getTitre()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getPrenom()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getNom()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getMessage()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getMail()); ?><br/>
															</td>
															<td>
																<?php echo ($client->getPresence()); ?><br/>
															</td>
															
														</tr>
													<?php
												
												
											}

									?>
								</table>
							</p>

						</div>
					</section>
			
				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Contact</h2>
							</header>

							<p>En cas de probleme, vous pouvez me contacter:<br/>
								Sébastien de Beauffort<br/>
								sewelseb@hotmail.com<br/>
								0470357435</p>
							
							

						</div>
					</section>
			
			</div>

		<!-- Footer -->
			

	</body>
</html>