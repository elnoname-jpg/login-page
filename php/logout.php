<?php
session_start();
session_destroy();

header('Location: proteger page php via une session.php');
exit;
