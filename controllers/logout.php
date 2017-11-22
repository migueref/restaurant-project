<?php
session_start();
/**
 * Destruir variables con método unset
 */
unset($_SESSION['is_logged_in']);
unset($_SESSION['user_data']);
session_destroy();
header('Location: ../views/users/login.php');
