<?php
require_once "class/class.gimmeproxy.php";
$gp = new GimmeProxy();
$gp->setReturnType(GIMME_PROXY_ASSOC_ARRAY);
$gpResponse = $gp->gimmeProxy();
echo "ip and port: " . $gpResponse['ip'] . ""; 