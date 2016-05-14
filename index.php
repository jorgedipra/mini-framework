<!--
 ____________________________________________________________________
|                                                                    |
|      NAME : Jorgedipra                                          |
|    AUTHOR : Jorge Diaz{@jorgedipra}        |
|      DATE : 2013                                                   |
|   LICENSE : open                                                   |
|     EMAIL : jorgedipra@gmail.com                                |
|____________________________________________________________________|
-->
<?php
 include_once ('recursos/info.php');//se llama la informacion de la pagina
?>
<link href="css/templatemo_style.css" type="text/css" rel="stylesheet" />     
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.scrollTo-min.js"></script> 
<script type="text/javascript" src="js/jquery.localscroll-min.js"></script> 
<script type="text/javascript" src="js/init.js"></script>    
<link href='http://fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-42108943-2']);
  _gaq.push(['_setDomainName', 'hol.es']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<title>Jorgedipra | Web Oficial de Jorge Diaz</title>
</head>
<body>
 <?php
    $view= new stdClass(); 
    $view->disableLayout=false;
     /**
     * [$view->objeto de validación]
     * @var boolean
     */
    if ($view->disableLayout==false)
    {
      include_once ('cuerpo/index.php');//se llama el cuerpo
    }
?>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>