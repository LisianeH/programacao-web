<?php
session_start();

//limpa os caches da session
session_unset();

//encerra a session
session_destroy();

header( "location: index.php" );