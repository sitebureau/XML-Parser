<?php

$ini_array = parse_ini_file("config.ini");

$url = 'http://www.infomedia.co.at/wtsXmlmb.php?u='.$ini_array['username'].'&p='.$ini_array['password'];

$xml = simplexml_load_file($url);



?>
<html>
<head>
    <title>Parser test</title>
</head>
<body>
<?php


?>
</body>
</html>
