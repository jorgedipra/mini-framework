<?php
session_start();
header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

#@->vendor[AltoRouter]
require 'vendor/autoload.php';

#@->Rutas
require  'routes/web.php';

#@->Controller
require 'api/Kernel.php';
