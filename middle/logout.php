<?php
session_start();
session_destroy();
header('Location: http://web.njit.edu/~ac422/cs490/front/index.html');
?>