<?php
$ini = parse_ini_file('config.ini');
$u = $ini['url']; 
?>

<iframe id="rliframe" style="border: none; width: 100%; height: 400; position: relative;" 
tabindex="-1" frameborder="0" src="<?php echo $u; ?>"></iframe>


<?php OCP\Util::addScript('searx', 'resize');
