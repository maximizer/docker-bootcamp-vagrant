<?php
echo "hello world " . getenv("your_name");


$masterHost = getenv("MASTER_HOST");
$masterUser = getenv("MASTER_USER");
$masterPass = getenv("MASTER_PASS");
$masterDb = getenv("MASTER_DB");

$slaveHost = getenv("SLAVE_HOST");
$slaveUser = getenv("SLAVE_USER");
$slavePass = getenv("SLAVE_PASS");
$slaveDb = getenv("SLAVE_DB");


$dbMaster = new PDO("mysql:host=$masterHost;dbname=$masterDb;charset=utf8", $masterUser, $masterPass);
$dbSlave = new PDO("mysql:host=$slaveHost;dbname=$slaveDb;charset=utf8", $slaveUser, $slavePass);


$dbMaster->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbMaster->query('UPDATE num_visitors SET num_visitors = num_visitors+1');


$dbSlave->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $dbSlave->query('SELECT num_visitors FROM num_visitors');

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result);



?>
