<?php 

require('conf/'.$lang.'.php')

?>

<html>
<head>
    <title><?= Settings("name"); ?>: <?= $errortitle ?> !</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<link href="css/error.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Ubuntu:normal|Ubuntu+Condensed:normal" rel=stylesheet>
	<link rel="shortcut icon" href="img/favicon.png" />

<body>
    <div class="center">
        <img src="img/error.png" />
<h1>Oups ! Page non trouvé.</h1>
<p>Frank ne trouve pas la page que vous cherchez. S'il vous plaît vérifier l'URL ou essayez de recommencer depuis la page d'accueil d'Habbo</p>
<a href="https://NOMDEVOTRERETRO/me"><button>Retourne sur Habbo !</button></a>

<script>
    window.opener.postMessage({ status: 'ERROR' }, '*');
</script>

    </div>
</body>
</html>
