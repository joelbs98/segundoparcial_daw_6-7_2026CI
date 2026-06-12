<?php
/*
Qué hace: destruye la sesión y vuelve al login.
*/
?>

<?php
session_start();
session_destroy();

header("Location: login.php?msg=" . urlencode("Sesión cerrada"));
exit;


?>