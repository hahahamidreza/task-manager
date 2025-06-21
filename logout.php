<?php
global $base_url;
session_start();
session_unset();     // Unset all session variables
session_destroy();   // Destroy the session
header("Location:$base_url/login");
exit;
