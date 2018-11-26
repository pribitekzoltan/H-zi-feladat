<?php
  define("__DOMAIN__", "oldalam.hu");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Green Hope - Zöld Remény Alapítvány</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
  <div class="all">
  <div class="kereso">
    <form method="get" action="http://google.com/search">
      <input type="hidden" name="domains" value="<?php echo __DOMAIN__; ?>" />
      <input type="hidden" name="sitesearch" value="<?php echo __DOMAIN__; ?>" />
      <input type="text" name="q"/>
      <input type="submit" value="Keresés"/>
    </form>
  </div>
  <div class="header">
    <a href="index.php"><img src="img/logo.png"></a>
  </div>
  <ul class="menu">
    <li><a href="index.php">Kezdőlap</a></li>
    <li><a href="index.php?action=tevekenysegek">Tevékenységek</a></li>
    <li><a href="index.php?action=hirek">Hírek</a></li>
    <li><a href="index.php?action=celjaink">Céljaink</a></li>
    <li><a href="index.php?action=galeria">Galéria</a></li>
    <li><a href="index.php?action=kapcsolat">Kapcsolat</a></li>
  </ul>
      
<?php
  switch ( @$_GET['action'] ) { 
    case 'tevekenysegek': 
      include ('actions/tevekenysegek.php'); break;
    case 'hirek': 
      include ('actions/hirek.php'); break;
    case 'celjaink': 
      include ('actions/celjaink.php'); break;
    case 'galeria': 
      include ('actions/galeria.php'); break;
    case 'kapcsolat': 
      include ('actions/kapcsolat.php'); break;
    case 'urlap_elkuld': 
      include ('actions/urlap_elkuld.php'); break;  
    case '': 
      include ('actions/kezdolap.php'); break; 
  }
?>  

    <div class="footer">
      <a target="_blank" href="http://www.world-green-hope.com/">Eredeti weboldal: world-green-hope.com</a>
    </div>
  </div>  

</body>
</html>
