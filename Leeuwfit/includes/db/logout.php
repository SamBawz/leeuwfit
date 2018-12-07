<?php
session_start();
session_destroy();
header("Location: http://localhost/leeuwfit/index.php");
exit;