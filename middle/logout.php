<?php
session_start();
session_destroy();
header('Location: http://web.njit.edu/~gt35/cs490/front/index.html');
?>