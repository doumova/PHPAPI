<?php
//suffer systems
ob_start();
?>
<div class="container">
<h1>Bienvenue</h1>

</div>
<?php

$content = ob_get_clean();
require_once("template.php");