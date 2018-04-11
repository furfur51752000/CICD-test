sudo tee /var/www/html/phpinfo.php <<EOF
<?php
// Show all information, defaults to INFO_ALL
phpinfo();
?>
EOF
