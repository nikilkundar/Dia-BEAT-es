<?php

session_start();
print_r($_SESSION);

session_unset();
print_r($_SESSION);
echo('<script>window.location="login.html"</script>');


?>