<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:fypdbserver.database.windows.net,1433; Database = fypdb", "fypadmin", "julicer2019.");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "fypadmin", "pwd" => "julicer2019.", "Database" => "fypdb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:fypdbserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>