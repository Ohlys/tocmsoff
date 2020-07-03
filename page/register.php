
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="author" content="<?= Settings("author"); ?>">
	<meta name="keywords" content="<?= Settings("keyword"); ?>">

	<title><?= Settings("name"); ?> - <?= $registerpagetitle ?></title>

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= Settings("url"); ?>/css/styles.css">

</head>
<body>

	<div class="my_page">
		<a href="?p=login" class="toregister"><?= $buttontologin; ?></a>
		<center><h1><?= $registerpagediv; ?></h1></center><hr>
		
		<?php if(isset($erreur)) { ?>

			<div class="erreur">
						
				<b><?= $errorannonce; ?> <i><?= $erreur ?></i></b>

			</div>

		<?php } else if(isset($message)) { ?>

			<div class="success">
				
				<b><?= $successannonce ?> </b> <i><?= $message ?></i>

			</div>

		<?php } ?>

		<div class="left">
			<center><h2><?= $registerpagediv; ?></h2></center><hr>

				<form method="post" action="" autocomplete="off">
						
					<input type="text" name="username" placeholder="Ex : Akoua">
					<br style="user-select: none;">
					<br style="user-select: none;">
					
								
					<input type="email" name="mail" placeholder="Ex : akoua@habbo.fr">
					<br style="user-select: none;">
					<br style="user-select: none;">
					


								
					<input type="password" name="password1" placeholder="Ex : ******">
					<br style="user-select: none;">
					<br style="user-select: none;">
								
					<input type="password" name="password2" placeholder="Ex : ******">
					<br style="user-select: none;">
					<br style="user-select: none;">
					<br style="user-select: none;">
					<br style="user-select: none;">
					<br style="user-select: none;">


								
					<input type="submit" name="register" value="<?= $submitbuttonregister; ?>">
				

				</form>


		</div>
		<div class="right">
			
			<center><h2><?= $lastusers ?></h2></center><hr>
			<center><table>
			
				<?php while($l = $last->fetch()) { ?>

					<tr>
						
						<td>
							
							<img src="<?= Info("avatarimage"); ?><?= $l['look'] ?>&action=wav&head_direction=3&gesture=sml">

						</td>
						<td>
							
							<?= $l['username']; ?>

						</td>

					</tr>

				<?php } ?>
			
			</table></center>

		</div>

	</div>

</body>
</html>