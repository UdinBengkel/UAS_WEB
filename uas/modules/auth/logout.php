<?php
session_destroy();

// JANGAN pakai ../../
header("Location: index.php?page=auth/login");
exit;
