<?php

$masterHost = getenv("MASTER_HOST");
$masterUser = getenv("MASTER_USER");
$masterPass = getenv("MASTER_PASS");
$masterDb = getenv("MASTER_DB");

$dbMaster = new PDO("mysql:host=$masterHost;dbname=$masterDb;charset=utf8", $masterUser, $masterPass);


$dbMaster->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbMaster->query('UPDATE visitors SET count = count+1');


$dbMaster->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $dbMaster->query('SELECT count FROM visitors');

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result);


?>
