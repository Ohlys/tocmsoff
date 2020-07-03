
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="author" content="<?= Settings("author"); ?>">
	<meta name="keywords" content="<?= Settings("keyword"); ?>">

	<title><?= Settings("name"); ?> - <?= $_SESSION['username'] ?></title>

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= Settings("url"); ?>/css/styles.css">

</head>
<body>

	<div class="my_page">
		<a href="?p=logout" class="toregister"><?= $buttontologout; ?></a>
		<br>
		<center><h1><?= $titledivme ?></h1></center>
		<hr>
		<a class="left"><img src="https://hsource.fr/font/habbo_groot/<?= Settings("name") ?>.gif"></a>
		<a href="?p=online" class="right"><?= $navstaffs ?></a>
		<a href="?p=community" class="right"><?= $navcommunity ?></a>
		<a href="?p=online" class="right"><?= $navstaffs ?></a>
		<a href="?p=online" class="right"><?= $navonline ?></a>
		<a href="?p=me" class="right"><?= $navprofil ?></a>
		<br>
		<div class="left">
			<center><h2><?= $_SESSION['username']; ?></h2></center><hr>

			<table>
				
				<tr>
					
					<td>
						
						<img src="<?= Info("avatarimage"); ?><?= $u['look'] ?>&action=wav&head_direction=3&gesture=sml&size=l">

					</td>
					<td style="display: inline-block;">
						
						<?php while($b = $badges->fetch()){ ?>

						<img src="<?= Info("c_images"); ?><?php echo $b['badge_code'] ?>.gif">

						<?php } ?>

					</td>

				</tr>
				<tr>
					
					<td>
						
						Rôle : <i><?= $u['fonction'] ?></i>

					</td>

					<?php if($u['rank'] >= Info("rankminadmin")) { ?>
				</tr>
				<br><br>
				<tr>
					<td width="200px" height="80px" style="background:#E66; line-height: 80px; text-align: center; border-radius: 10px; user-select: none;">
						
						<a href="admin3107/" style="text-decoration: none; color: #FFF;"><?= $adminme ?></a>

					</td>

					<?php } ?>

					<td width="200px" height="80px" style="background:green; line-height: 80px; text-align: center; border-radius: 10px; user-select: none;">
						
						<a href="?p=client" style="text-decoration: none; color: #FFF;"><?= $gotoclient; ?></a>

					</td>

				</tr>

				</tr>

			</table>

		</div>

		<div class="right">
			
			<center><h2><?= $lastestmaj ?></h2></center><hr>

			<?php while($maj = $miseajour->fetch()) { ?>

			<center><b><?= $maj['version'] ?></b> : <br>
			<i><?= $maj['descri'] ?></i><br>
			<small><?= $textedivmaj ?><?= $maj['pseudo'] ?></small>
			</center>
			<hr>
			<?php } ?>


		</div>

	</div>

</body>
</html>