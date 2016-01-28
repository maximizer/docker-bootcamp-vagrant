<?php
echo "hello world " .getenv("NAME");
echo "<br />";
echo file_get_contents(getenv("URL"));
?>
