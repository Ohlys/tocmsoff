
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="author" content="<?= Settings("author"); ?>">
	<meta name="keywords" content="<?= Settings("keyword"); ?>">

	<title><?= Settings("name"); ?> - <?= $loginpagetitle ?></title>

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= Settings("url"); ?>/css/styles.css">

</head>
<body>

	<div class="my_page">
		<a href="?p=register" class="toregister"><?= $buttontoregister; ?></a>
		<center><h1><?= $loginpagediv; ?></h1></center><hr>
		<div class="left">
			<center><h2><?= $loginpagediv; ?></h2></center><hr>

				<form method="post" action="" autocomplete="off">
					
					
								<input type="text" name="username" id="username" placeholder="Ex: Akoua" width="500px">
								<br style="user-select: none;">
								<br style="user-select: none;">
								<br style="user-select: none;">
								<br style="user-select: none;">
								<br style="user-select: none;">
								<br style="user-select: none;">
								
								<input type="password" name="password" id="password" placeholder="Ex: ******" width="500px">
								<br style="user-select: none;">
								<br style="user-select: none;">
								<br style="user-select: none;">
								<br style="user-select: none;">
								<br style="user-select: none;">
								<br style="user-select: none;">
								
								<input type="submit" name="login" value="<?= $submitbuttonlogin ?>">

							

				</form>


		</div>
		<div class="right">
			
			<center><h2><?= $newsindexdiv ?></h2></center><hr>

			<img width="500px" style="margin: 0px;padding: 0px;" src="<?= $news['image'] ?>">
			<center><h3><?= $news['sujet'] ?></h3></center>
			<p><?= $news['descri'] ?></p>

		</div>

	</div>

</body>
</html>