<?php
$pass = "bibash";
$hash="$2y$10$.p0CJzeZ6MgQtczjbfjO2OFNK2RFDoBL2u0EISe6trtjSWnIOQYAW";
$password_check = password_verify($pass,$hash);
echo "$password_check";


?>