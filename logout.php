<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php"); // Or wherever your homepage is
exit;
