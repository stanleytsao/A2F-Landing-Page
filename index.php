<?php
	// @todo Super array goes here
	$est = array(
		'2014' => array(
			array(
				'Title'=>'Irvine', 
				'Prefix'=>'University of California', 
				'Website'=>'http://www.a2firvine.org/#landing', 
				'Facebook'=>'', 
				'Photo'=>'https://farm3.staticflickr.com/2924/14644552605_0681b0cc92_k.jpg'
			),
			array(
				'Title'=>'San Diego', 
				'Prefix'=>'State University', 
				'Website'=>'http://www.a2fsdsu.org/#upcomingevents', 
				'Facebook'=>'https://www.facebook.com/acts2fellowshipSDSU', 
				'Photo'=>'https://farm3.staticflickr.com/2936/14818701422_b3e9eddc5b_b.jpg'),
			array(
				'Title'=>'Santa Barbara', 
				'Prefix'=>'University of California', 
				'Website'=>'http://ucsb.acts2fellowship.org/', 
				'Facebook'=>'', 
				'Photo'=>'http://static.squarespace.com/static/53dd32e1e4b071b54b32e25d/53dd49e6e4b0a3c5cce97c4f/53e08263e4b0bb7c9aed60e0/1407222385877/_C8A2403.jpg?format=1500w'),
			array(
				'Title'=>'Southern California', 
				'Prefix'=>'University of', 
				'Website'=>'https://www.facebook.com/Acts2FellowshipUSC', 
				'Facebook'=>'', 
				'Photo'=>'https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10350414_1484525938458279_1555376737777208468_n.jpg?oh=1c574827c1d78c82be2f0de11f57497e&oe=547805A6&__gda__=1417654937_29bcbd593213321c4e46fab3dee41fa4'),
			array(
				'Title'=>'Pomona', 
				'Prefix'=>'Cal Poly', 
				'Website'=>'', 
				'Facebook'=>'', 
				'Photo'=>'https://farm4.staticflickr.com/3915/14801153827_c1c4153f48_k.jpg')
		),
		'2013' => array(
			array(
				'Title'=>'Los Angeles', 
				'Prefix'=>'University of California', 
				'Website'=>'http://acts2fellowship.org/losangeles/', 
				'Facebook'=>'https://www.facebook.com/a2fucla', 
				'Photo'=>'https://farm4.staticflickr.com/3916/14601630840_3699580005_k.jpg')
		),
		'2010' => array(
			array(
				'Title'=>'Minnesota', 
				'Prefix'=>'University of', 
				'Website'=>'http://minnesota.acts2fellowship.org/', 
				'Facebook'=>'https://www.facebook.com/a2fminnesota', 
				'Photo'=>'https://farm6.staticflickr.com/5192/14407164315_c08c02af87_k.jpg'),
			array(
				'Title'=>'Riverside', 
				'Prefix'=>'University of California', 
				'Website'=>'http://www.acts2fellowship.org/riverside/', 
				'Facebook'=>'https://www.facebook.com/a2friverside', 
				'Photo'=>'https://farm8.staticflickr.com/7164/13987907292_fd2afa61d4_k.jpg'),
			array(
				'Title'=>'San Diego', 
				'Prefix'=>'University of California', 
				'Website'=>'http://www.acts2fellowship.org/sandiego/', 
				'Facebook'=>'https://www.facebook.com/acts2fellowshipUCSD', 
				'Photo'=>'https://farm4.staticflickr.com/3878/14394389512_ce7aafbde4_k.jpg')
		),
		'2006' => array(
			array(
				'Title'=>'Berkeley', 
				'Prefix'=>'University of California', 
				'Website'=>'http://www.a2fberkeley.org/#welcome-to-acts2fellowship', 
				'Facebook'=>'https://www.facebook.com/acts2fellowship', 
				'Photo'=>'http://static.squarespace.com/static/53ad0b5be4b0d2cc9c8b21ca/53d73143e4b033bb6ba0aa02/53d73527e4b03739b8c7604e/1406612954719/14151054722_38f7cc930f_o.jpg?format=1000w')
		)
	);

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,400italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link href="favicon.ico" rel="shortcut icon">

	<!-- @todo Need analytics tracker -->

	<title>Welcome to acts2fellowship</title>
  
</head>

<body>
<div class="container">
	<aside class="sidebar">
		<div class="logo">
			<h1>A2F</h1><br>
		</div>
			<?php
			foreach($est as $year => $church) {
			?>
				<div class="box">
					<p class="year">Est. <?php echo $year?></p>
					<?php	
					foreach($church as $value) {
					?>
						<a href="#<?php echo $value['Prefix']?><?php echo $value['Title']?>">
							<p class="prefix"><?php echo $value['Prefix']?></p>
							<p class="title"><?php echo $value['Title']?></p>
						</a>
					<?php
					}
					?>
		</div>
			<?php
			}
			?>

	</aside>

	<section class="content">
			<div class="banner">
				<img src='https://farm3.staticflickr.com/2910/14694528234_31fc45754d_k.jpg'>
				<h2>ACT2FELLOWSHIP<br>---</h2>
				<p class="description">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis laboris nisi ut aliquip ex ea commodo. Duis irure dolor in reprehenderit voluptate .</p>
			</div>
			<?php
			foreach($est as $year => $church) {
				foreach($church as $value) {
			?>
					<div class="box" id="<?php echo $value['Prefix']?><?php echo $value['Title']?>">
						<img src="<?php echo $value['Photo']?>">
						<div class="slide">
							<p class="prefix"><?php echo $value['Prefix']?></p>
							<p class="title"><?php echo $value['Title']?></p>	
							
							<?php
							if (!empty($value['Website'])) {
							?>
								<a href="<?php echo $value['Website']?>">
								<div class="Button Website">
									Visit Website
								</div>
								</a>
							<?php
							} else {
							?>
								<div class="coming-soon">
									<p>COMING SOON!</p>
								</div>
							<?php
							}
							if (!empty($value['Facebook'])) {
							?>
								<a href="<?php echo $value['Facebook']?>">
								<div class="Button Facebook">
									Visit Facebook
								</div>
								</a>
							<?php
							}
							?>

						</div>
					</div>
			<?php
				}
			}
			?>
	</section>

</div>
</body>
</html>