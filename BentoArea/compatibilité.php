 <?php

  ## On charge une feuille de styles commune à tous les navigateurs
  echo < link rel="stylesheet" href="main.css" type="text/css"  media="screen" />;

  ## On récupère le nom du navigateur utilisé
  $navigator = $_SERVER['HTTP_USER_AGENT'];

  ## Si IE6 -> feuille de style pour IE6
  if(preg_match('/MSIE 6.0/',$navigator))
     echo < link rel="stylesheet" type="text/css" href="styleIE6.css" media="screen"/>;

  ## Si IE7 -> feuille de style pour IE7
  else if(match('/MSIE 7.0/',$navigator))
     echo < link rel="stylesheet" type="text/css" href=styleIE7.css" media="screen"/>;

  ?>