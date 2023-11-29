<?php
setcookie('permiturismo_cargo', '', time() - 3600, '/');
setcookie('permiturismo_admin', '', time() - 3600, '/');
header('Location: /');
