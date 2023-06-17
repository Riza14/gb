<?php
// memulai session
session_start();
// memastikan session hilang
session_unset();
// menghilangkan session
session_destroy();
// menghilangkan cookie
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

header("Location: index.php");
