<?php
require_once 'vendor/autoload.php';
$url = explode('/', $_SERVER['REQUEST_URI']);
// Check if class exist
$url = ucfirst($url[1]);


if ($url != null) {
    ob_start();
    require_once('routing.php');
    $out1 = ob_get_contents();
    ob_end_clean();
    echo $out1;
    exit;
}
?>
<?php
require('view/partial/header.php');
?>


<div id="resultHead"></div>
<div id="result"></div>
<?php
require('view/partial/footer.php');
?>
s

